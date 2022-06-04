<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/worker.php';
require '../../services/worker_services.php';
require '../../dbaccess/worker_dbaccess.php';
require '../../displays/worker_displays.php';

$id = isset($_POST['id']) ? $_POST['id'] : 2;
$state = isset($_POST['state']) ? $_POST['state'] : 0;

echo strings_lib::display_message(worker_services::modify_state($id, $state));