<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/payment.php';
require '../../services/payment_services.php';
require '../../dbaccess/payment_dbaccess.php';
require '../../displays/payment_displays.php';

$idc = isset($_POST['idc']) ? $_POST['idc'] : 0;
echo payment_displays::display_list_contract(payment_services::list_by_contract($idc));