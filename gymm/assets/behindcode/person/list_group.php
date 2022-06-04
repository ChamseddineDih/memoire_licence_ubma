<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/person.php';
require '../../services/person_services.php';
require '../../dbaccess/person_dbaccess.php';
require '../../displays/person_displays.php';

$idgr = isset($_POST['idgr']) ? $_POST['idgr'] : 1;

echo person_displays::display_list_group(person_services::list_by_group($idgr));