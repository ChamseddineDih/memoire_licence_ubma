<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/contract.php';
require '../../services/contract_services.php';
require '../../dbaccess/contract_dbaccess.php';
require '../../displays/contract_displays.php';

$idw = isset($_POST['idw']) ? $_POST['idw'] : 0;
echo contract_displays::display_list_for_worker(contract_services::list_by_worker($idw));