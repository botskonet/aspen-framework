<?php

/**
 * @package 	Aspen_Framework
 * @subpackage 	System
 * @author 		Michael Botsko
 * @copyright 	2009 Trellis Development, LLC
 * @since 		1.0.1-18
 */

/**
 * @abstract This class manages our mysql sql query generation
 * @package Aspen_Framework
 */
class AuthenticationModel extends Model {
	
	/**
	 * @abstract We must allow the parent constructor to run properly
	 * @param string $table
	 */
	public function __construct($table = false){ parent::__construct($table); }
	
	
	public function validate($fields = false){
		
		if(is_array($fields)){
			
			// validate username
			if(!isset($fields['username']) || empty($fields['username'])){
				$this->addError('username', $this->APP->template->text('query:username'));
			}
			
			// validate password
			if(!isset($fields['password']) || empty($fields['password'])){
				$this->addError('password', 'You must enter a valid password.');
			} else {
				
				// enforce sha1 on password
				$fields['password'] = sha1($fields['password']);
				
			}
		}
		
		return $this->error();
		
	}
}
?>