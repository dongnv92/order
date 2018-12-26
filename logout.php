<?php
require_once('includes/core.php');
session_destroy();
setcookie('user', '');
setcookie('pass', '');
$user 	= false;
$function->redirect(_URL_HOME);