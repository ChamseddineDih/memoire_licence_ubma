<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/contract.php';
require '../../services/contract_services.php';
require '../../dbaccess/contract_dbaccess.php';
require '../../displays/contract_displays.php';

$id = isset($_POST['id']) ? $_POST['id'] : 5;
echo strings_lib::display_message(contract_services::delete($id));