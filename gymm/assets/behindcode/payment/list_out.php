<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/payment.php';
require '../../services/payment_services.php';
require '../../dbaccess/payment_dbaccess.php';
require '../../displays/payment_displays.php';

$idm = isset($_POST['idm']) ? $_POST['idm'] : 0;
echo payment_displays::display_list_out_manager(payment_services::list_out_by_manager($idm));