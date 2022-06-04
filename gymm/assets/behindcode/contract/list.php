<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/contract.php';
require '../../services/contract_services.php';
require '../../dbaccess/contract_dbaccess.php';
require '../../displays/contract_displays.php';

$state = isset($_POST['state']) ? $_POST['state'] : 0;
echo contract_displays::display_list(contract_services::list($state));