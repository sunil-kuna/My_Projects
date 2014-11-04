<?php

// check for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once('libraries/password_compatibility_library.php');
}
// include the config
require_once('config/config.php');

// include the to-be-used language, english by default. feel free to translate your project and include something else
require_once('translations/en.php');

// include the PHPMailer library
require_once('libraries/PHPMailer.php');

// load the registration class
require_once('classes/Registration.php');

// create the registration object. when this object is created, it will do all registration stuff automatically
// so this single line handles the entire registration process.
$registration = new Registration();
if(! $registration->password_verification_successful)
{
 if ($registration->registration_successful && !$registration->verification_successful)
 {
 	echo "<h1> Bad Luck better luck next time</h1>";
 }
 else if($registration->registration_successful && $registration->verification_successful)
 	{
 		include("registerPassword.php");
 	}
 	else if(!$registration->registration_successful)
 	{
 		include("views/not_logged_in.php");
 	}
 }
 else
 {
 	include("index.php");
 }
// showing the register view (with the registration form, and messages/errors)
//include("views/register.php");
