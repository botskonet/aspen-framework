#!/bin/sh

# THIS SCRIPT WAS DESIGNED TO PREPARE ASPEN FRAMEWORK FOR A PRODUCTION RELEASE

if [ $# -ne 3 ]; then
     echo 1>&2 Usage: 1.0 rc1 Release_Candidate
     exit 0
fi

if [ $2 = "final" ]; then
     versname=$1
else 
     versname=$1$2
fi

# remove any existing exports
rm -rf aspen-framework

# checkout the latest code from trunk
git clone ssh://mbotsko@69.168.53.4/git/repos/aspen-framework.git
cd aspen-framework

# make a branch for this release
git tag -a $versname -m "tagging for release of $versname"
git push --tags origin master

# if this is a final release, then we need to branch
if [ $2 = "final" ]; then
	git branch $1$2
	git push origin $1$2
fi

# get the git revision number 
gitvers=`git describe`

# add in revision to app.default.config.php
sed -e "s/application_version'] = ''/application_version'] = '$gitvers'/g" app.default.config.php > adc-new.php
mv adc-new.php app.default.config.php

# add in revision to bootstrap define
cd system
sed -e "s/define('FRAMEWORK_REV', '')/define('FRAMEWORK_REV', '$gitvers')/g" bootstrap.php > bootstrap-new.php
mv bootstrap-new.php bootstrap.php
cd ..

#remove support dirs
rm -rf tests
rm -rf build

# remove all .git directories
rm -rf .git
rm -f .gitignore
rm -f .DS_Store

# make tarball
tar czvf af-temp.tar.gz *
mv af-temp.tar.gz ../aspen-$versname.tar.gz
cd ..
rm -rf latest
mv aspen-framework latest

# get file size
fsize=$(du -ks aspen-$versname.tar.gz | cut -f1)

# run phpdoc
phpdoc/phpdoc -c /BUILD/phpdoc.ini

echo "RELEASE BUILD COMPLETE, LOADING TO AMAZON-S3"

# send file to amazon bucket
s3cmd put --acl-public aspen-$versname.tar.gz s3://aspen-framework/aspen-$versname.tar.gz

# move files
mv aspen-$versname.tar.gz builds/aspen-$versname.tar.gz

echo "LOADED TO S3, ADDING NEW RELEASE INFO TO MySQL"

mysql -uroot -pURQU9UWpVABgS9Zr3RXhIhxno -D aspen -e "INSERT INTO releases (file_name,file_size,version_number,build_number,release_type,release_timestamp) VALUES ('aspen-$versname.tar.gz','$fsize','$1 $2','$versname','$3','$(date +"%F %T")');"

echo "RELEASE COMPLETE"