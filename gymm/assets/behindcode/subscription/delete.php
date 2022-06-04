<?php session_start(); ob_start();

require '../../libraries/database_lib.php';
require '../../libraries/exception_lib.php';
require '../../libraries/security_lib.php';
require '../../libraries/strings_lib.php';

require '../../models/subscription.php';
require '../../services/subscription_services.php';
require '../../dbaccess/subscription_dbaccess.php';
require '../../displays/subscription_displays.php';

$id = isset($_POST['id']) ? $_POST['id'] : 1;
echo strings_lib::display_message(subscription_services::delete($id));