<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/person.php';
require '../../services/person_services.php';
require '../../dbaccess/person_dbaccess.php';
require '../../displays/person_displays.php';

$state = isset($_POST['state']) ? $_POST['state'] : 1;
$type  = isset($_POST['type'])  ? $_POST['type']  : 1;
echo person_displays::display_list(person_services::list($state, $type));