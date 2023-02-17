<?php 

// start session
session_start();

// load config filed
require_once 'config.php';

// load config filed
require_once 'helpers/app-helper.php';


// Autoload classes
spl_autoload_register( function( $class ){
	include 'lib/' .$class. '.php';
} );

