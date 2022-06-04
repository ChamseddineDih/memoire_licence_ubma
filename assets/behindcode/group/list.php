<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/group.php';
require '../../services/group_services.php';
require '../../dbaccess/group_dbaccess.php';
require '../../displays/group_displays.php';

$state = isset($_POST['state']) ? $_POST['state'] : 1;
$number_group = isset($_POST['number_group']) ? $_POST['number_group'] : 1;

echo group_displays::display_list(group_services::list($state, $number_group));