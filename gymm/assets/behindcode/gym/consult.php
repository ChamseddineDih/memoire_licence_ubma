<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/gym.php';
require '../../services/gym_services.php';
require '../../dbaccess/gym_dbaccess.php';
require '../../displays/gym_displays.php';

$id = isset($_POST['id']) ? $_POST['id'] : 3;
echo gym_displays::display_one(gym_services::consult($id));