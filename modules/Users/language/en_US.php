<?php

/**
 * Language translations
 */

// login
$lang['admin']['users:login:head-title'] = 'Login';
$lang['admin']['login:title'] 			= 'Login';
$lang['admin']['login:username'] 		= 'Username';
$lang['admin']['login:password'] 		= 'Password';
$lang['admin']['login:forgot_link'] 	= 'Forgot your password?';

// forgotten password
$lang['admin']['users:forgot:head-title'] = 'Reset Your Password';
$lang['admin']['forgot:title'] 			= 'Reset Your Password';
$lang['admin']['forgot:username'] 		= 'Username';
$lang['admin']['forgot:button'] 		= 'Send New Password';
$lang['admin']['forgot:login'] 			= 'Back to Login';

// my account
$lang['admin']['users:my_account:head-title'] = 'My Account';
$lang['admin']['myaccount:title']				= 'My Account';
$lang['admin']['myaccount:help']				= 'Enter in your password twice to change it.';
$lang['admin']['myaccount:label:password'] 		= 'Password';
$lang['admin']['myaccount:label:password_2'] 	= 'Confirm';
$lang['admin']['myaccount:button:submit'] 		= 'Save Changes';

// user list
$lang['admin']['users:view:head-title']		= 'Users';
$lang['admin']['userlist:title'] 			= 'User Accounts';
$lang['admin']['userlist:adduser'] 			= 'Create New User Account';
$lang['admin']['userlist:th:name'] 			= 'Name';
$lang['admin']['userlist:th:username']		= 'Username';
$lang['admin']['userlist:th:latestlogin']	= 'Latest Login';
$lang['admin']['userlist:th:groups']		= 'User Groups';
$lang['admin']['userlist:noresults'] 		= 'No user accounts were found.';

// user add/edit form
$lang['admin']['users:add:head-title']  = 'Add User';
$lang['admin']['users:edit:head-title'] = 'Edit User';
$lang['admin']['userform:addtitle'] 	= 'Create Account';
$lang['admin']['userform:edittitle'] 	= 'Update Account';
$lang['admin']['userform:delete_link'] 	= 'Delete Account';
$lang['admin']['userform:delete_warn'] 	= 'Are you sure you want to delete this user account?';
$lang['admin']['userform:profile'] 		= 'Profile';
$lang['admin']['userform:username'] 	= 'Username';
$lang['admin']['userform:nicename'] 	= 'Nice Name';
$lang['admin']['userform:password'] 	= 'Password';
$lang['admin']['userform:confirm'] 		= 'Confirm';
$lang['admin']['userform:allowlogin'] 	= 'Allow Login';
$lang['admin']['userform:accessgroup'] 	= 'Access Groups';
$lang['admin']['userform:addbutton'] 	= 'Create New User';
$lang['admin']['userform:editbutton'] 	= 'Save Changes';

// permission denied
$lang['admin']['users:denied:head-title'] = 'Permission Denied';
$lang['admin']['denied:title'] 	= 'Permission Denied';
$lang['admin']['denied:intro'] 	= 'Your user account does not currently have sufficient permission to access this page. Please contact an administrator for assistance.';

// query validation errors
$lang['admin']['db:error:nice_name']		= 'You must enter your name.';
$lang['admin']['db:error:username']			= 'You must enter a username (E-mail address).';
$lang['admin']['db:error:username-dup']		= 'The chosen username / email has already been used.';
$lang['admin']['db:error:password']			= 'You must enter a valid password.';
$lang['admin']['db:error:password_match']	= 'Your passwords do not match.';
$lang['admin']['db:error:groupname']		= 'You must enter a name.';
$lang['admin']['db:error:groups']			= 'You must select at least one group.';
$lang['admin']['db:error:groups-noadmin']	= 'You may not remove your own administrator status.';
?>