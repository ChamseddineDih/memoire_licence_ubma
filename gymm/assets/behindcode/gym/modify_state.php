<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/gym.php';
require '../../services/gym_services.php';
require '../../dbaccess/gym_dbaccess.php';
require '../../displays/gym_displays.php';

$id    = isset($_POST['id'])    ? $_POST['id']    : 8;
$state = isset($_POST['state']) ? $_POST['state'] :  1;

echo gym_services::modify_state($id, $state);