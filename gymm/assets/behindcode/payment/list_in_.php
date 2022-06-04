<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/payment.php';
require '../../services/payment_services.php';
require '../../dbaccess/payment_dbaccess.php';
require '../../displays/payment_displays.php';

$idg = isset($_POST['idg']) ? $_POST['idg'] : 0;
echo payment_displays::display_list_in_manager(payment_services::list_in_by_gym($idg));