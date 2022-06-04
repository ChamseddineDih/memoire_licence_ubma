<?php session_start(); ob_start();

require 'assets/libraries/database_lib.php';
require 'assets/libraries/exception_lib.php';
require 'assets/libraries/security_lib.php';
require 'assets/libraries/strings_lib.php';

require 'assets/models/contract.php';
require 'assets/services/contract_services.php';
require 'assets/dbaccess/contract_dbaccess.php';
require 'assets/displays/contract_displays.php';

$member = isset($_SESSION['worker']) ? $_SESSION['worker'] : header('location: ../message.php?cd=0&msg=ACCESS DENIED !!!');
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$contract = contract_services::consult($id);
// var_dump($contract);
?>
<form method="post" action="assets/behindcode/contract/modify.php" style="width: 80%; margin: 0px auto; position: relative;">
<input type="hidden" name="id" readonly required value="<?php echo $contract->id_contract; ?>" />
<h3>Modify Contract</h3>
    <style type="text/css">
        td {
            vertical-align: top;
        }
    </style>
    <table style="width: 100%;">
    <tr>
        <td style="width: 50%;">
<div class="form-floating mb-3">
    <input type="number" name="salary" class="form-control" id="floatingText" placeholder="First name" value="<?php echo $contract->salary_contract; ?>">
    <label for="floatingText">Salary</Nav></label>
</div>
    </td>
    <td>
<div class="form-floating mb-3">
    <input type="text" name="evaluation" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $contract->evaluation_contract; ?>">
    <label for="floatingInput">Evaluation</label>
</div>
    </td>
    </tr>
    <tr>
        <td>
<div class="form-floating mb-4">
    <input type="date" name="date_begining" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $contract->date_begining_contract; ?>">
    <label for="floatingPassword">Date of begining</label>
</div>
    </td>
    <td>
<div class="form-floating mb-4">
    <!--input type="password" class="form-control" id="floatingPassword" placeholder="Password"-->
    <select class="form-select" name="type" value="<?php echo $contract->type_contract; ?>>
        <option value="0"></option>
        <option value="1">Permenet contract</option>
        <option value="2">Temporary contract</option>
    </select>
    <label for="floatingPassword">Contact type</label>
</div>
    </td>
    </tr>
    <tr>
        <td>
<div class="form-floating mb-4">
    <input type="date" name="date_ending" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $contract->date_ending_contract; ?>">
    <label for="floatingPassword">Date of ending</label>
</div>
    </td>
    </tr>
    </table>
<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add</button>
</form>