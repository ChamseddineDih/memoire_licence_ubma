<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/gym.php';
require '../../services/gym_services.php';
require '../../dbaccess/gym_dbaccess.php';
require '../../displays/gym_displays.php';

$idm = isset($_POST['idm']) ? $_POST['idm'] : 6;
echo gym_displays::display_list_manager(gym_services::list_by_manager($idm));