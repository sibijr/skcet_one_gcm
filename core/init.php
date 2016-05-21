<?php
session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => 'mysql.hostinger.in',
		'username' => 'u159824011_sibi',
		'password' => 'krishna',
		'db' => 'u159824011_event'  
		),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry'=> 604800
		 ),
	'session' => array(
		'session_name' => 'user',
		'token_name' => 'token'
		)

 );

spl_autoload_register(function($class){
	if(file_exists('classes/' .$class.'.php')){
	require_once 'classes/' .$class.'.php';}
	else{
		return false;
	}
});

require_once 'functions/sanitize.php';
if(cookies::exists(config::get('remember/cookie_name')) && !session::exists(config::get('session/session_name'))){
	$hash = cookies::get(config::get('remember/cookie_name'));
	$hashcheck = DB::getInstance()->get('user_sessions',array('hash', '=',$hash));

	if($hashcheck->count()){
		$user = new user($hashcheck->first()->user_id);
		$user->login();
	}


}
?>