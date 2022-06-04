<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/assiduity.php';
require '../../services/assiduity_services.php';
require '../../dbaccess/assiduity_dbaccess.php';
require '../../displays/assiduity_displays.php';

$kwd = isset($_POST['kwd']) ? $_POST['kwd'] : 0;
echo strings_lib::display_list(assiduity_services::search($kwd));