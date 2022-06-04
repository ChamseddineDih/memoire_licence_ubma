<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/payment.php';
require '../../services/payment_services.php';
require '../../dbaccess/payment_dbaccess.php';
require '../../displays/payment_displays.php';

echo strings_lib::display_message(payment_services::add(payment_displays::generate_object()));