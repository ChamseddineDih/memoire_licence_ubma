<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/gym.php';
require '../../services/gym_services.php';
require '../../dbaccess/gym_dbaccess.php';
require '../../displays/gym_displays.php';

echo strings_lib::display_message(gym_services::add(gym_displays::generate_object()));