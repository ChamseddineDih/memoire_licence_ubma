<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/assiduity.php';
require '../../services/assiduity_services.php';
require '../../dbaccess/assiduity_dbaccess.php';
require '../../displays/assiduity_displays.php';

$first_date = isset($_POST['fd']) ? $_POST['fd'] : date('Y-m-d H:i:s', strtotime("-1 days")); // date("Y-m-d H:i:s");
$last_date  = isset($_POST['ld']) ? $_POST['ld'] : date("Y-m-d H:i:s");
echo assiduity_displays::display_list(assiduity_services::list($first_date, $last_date));