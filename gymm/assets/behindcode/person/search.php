<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/person.php';
require '../../services/person_services.php';
require '../../dbaccess/person_dbaccess.php';
require '../../displays/person_displays.php';

$kwd = isset($_POST['kwd']) ? $_POST['kwd'] : "";
echo person_displays::display_list(person_services::search($kwd));