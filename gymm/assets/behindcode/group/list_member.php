<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/group.php';
require '../../services/group_services.php';
require '../../dbaccess/group_dbaccess.php';
require '../../displays/group_displays.php';

$id = isset($_POST['id']) ? $_POST['id'] : 13;

echo group_displays::display_list_member(group_services::list($id));