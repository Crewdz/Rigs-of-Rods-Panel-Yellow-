<?php

	// CONFIG
	
	// The web admin password
	define('PASSWORD', 'password');
	
	// The password of the daemon on the remote server (This has to be exactly 40 characters).
	// This has to match the password in your daemon config file.
	define('DAEMON_URI', 'http://username:password@domain:port');

	// Error reporting?
	error_reporting(E_ALL);
	
	// Use Curl?
	define('USE_CURL', true);
	
	ini_set('error_reporting', 30711);
	
?>
