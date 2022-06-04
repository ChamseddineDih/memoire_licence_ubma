<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/worker.php';
require '../../services/worker_services.php';
require '../../dbaccess/worker_dbaccess.php';
require '../../displays/worker_displays.php';

$id = isset($_POST['id']) ? $_POST['id'] : 1;
echo worker_displays::display_one(worker_services::consult($id));