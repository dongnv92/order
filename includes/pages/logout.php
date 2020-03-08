<?php
require_once '../../init.php';
session_destroy();
setcookie('access_token', '');
$user = false;
$function->redirect(_URL_ADMIN);