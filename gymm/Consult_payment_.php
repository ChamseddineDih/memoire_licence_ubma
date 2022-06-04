<?php session_start(); ob_start();

require 'assets/libraries/database_lib.php';
require 'assets/libraries/exception_lib.php';
require 'assets/libraries/security_lib.php';
require 'assets/libraries/strings_lib.php';

require 'assets/models/payment.php';
require 'assets/services/payment_services.php';
require 'assets/dbaccess/payment_dbaccess.php';
require 'assets/displays/payment_displays.php';

$member = isset($_SESSION['worker']) ? $_SESSION['worker'] : header('location: ../message.php?cd=0&msg=ACCESS DENIED !!!');
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$payment = payment_services::consult($id);

?>
<form method="post" action="assets/behindcode/payment/modify.php" style="width: 80%; margin: 0px auto; position: relative;">
<input type="hidden" name="id" readonly required value="<?php echo $payment->id_payment; ?>" />
    <h3>Consult/Modify Payment</h3>
    <style type="text/css">
        td {
            vertical-align: top;
        }
    </style>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
<div class="form-floating mb-3">
    <input type="text" name="note" class="form-control" id="floatingText" placeholder="First name" value="<?php echo $payment->note_payment; ?>">
    <label for="floatingText">Note</Nav></label>
</div>
    </td>
    <td>
<div class="form-floating mb-3">
    <input type="number" name="amount" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $payment->amount_payment; ?>">
    <label for="floatingInput">amount</label>
</div>
    </td>
    </tr>
    <tr>
        <td>
<div class="form-floating mb-4">
    <input type="number" name="deposit" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $payment->deposit_payment; ?>">
    <label for="floatingPassword">Deposit</label>
</div>
    </td>
    <td>
<div class="form-floating mb-4">
    <input readonly type="number" name="rest" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $payment->rest_payment; ?>">
    <label for="floatingPassword">Rest</label>
</div>
    </td>
    </tr>
    <tr>
    <td>
    <div class="form-floating mb-4">
    <input type="date" name="complet_date" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $payment->complet_date_payment; ?>">
    <label for="floatingPassword">Complet date</label>
</div>
    </td>
    </tr>
    </table>
<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add</button>
</form>