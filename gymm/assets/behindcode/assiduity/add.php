<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/assiduity.php';
require '../../services/assiduity_services.php';
require '../../dbaccess/assiduity_dbaccess.php';
require '../../displays/assiduity_displays.php';

require '../../models/person.php';
require '../../services/person_services.php';
require '../../dbaccess/person_dbaccess.php';
require '../../displays/person_displays.php';

$acn = isset($_POST['acn']) ? $_POST['acn'] : '';
$member = person_services::consult_($acn);
$assiduity = assiduity_displays::generate_object();
$assiduity->subscription = $member->id_subscription;
echo strings_lib::display_message(assiduity_services::add($assiduity));