<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/worker.php';
require '../../services/worker_services.php';
require '../../dbaccess/worker_dbaccess.php';
require '../../displays/worker_displays.php';

$username = isset($_POST['username']) ? $_POST['username']    : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


$worker = worker_services::login($username, $password);

//var_dump(worker_services::login($username, $password));
$_SESSION['connected'] = isset($worker) ? $worker : exception_lib::treat_error('ACCESS DENIED (SESSION_SAVE)');
header('location: ../../../gymm/index-worker.php');