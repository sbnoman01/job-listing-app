<?php 

// load config filed
require_once 'config.php';


// Autoload classes
spl_autoload_register( function( $class ){
	include 'lib/' .$class. '.php';
} );

