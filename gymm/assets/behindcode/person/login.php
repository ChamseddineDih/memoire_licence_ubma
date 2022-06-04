<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/person.php';
require '../../services/person_services.php';
require '../../dbaccess/person_dbaccess.php';
require '../../displays/person_displays.php';

$login    = isset($_POST['login'])    ? $_POST['login']    : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


$person = person_services::login($login, $password);

$_SESSION['connected'] = isset($person) ? $person : exception_lib::treat_error('ACCESS DENIED (SESSION_SAVE)');
header('location: ../../../index.php');