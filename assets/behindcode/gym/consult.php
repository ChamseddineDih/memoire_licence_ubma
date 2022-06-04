<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/gym.php';
require '../../services/gym_services.php';
require '../../dbaccess/gym_dbaccess.php';
require '../../displays/gym_displays.php';

$access_number_gym = isset($_POST['access_number_gym']) ? $_POST['access_number_gym'] : 3;
echo gym_displays::display_one(gym_services::consult($access_number_gym));