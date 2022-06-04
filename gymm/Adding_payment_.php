<?php session_start(); ob_start();

$idc = isset($_GET['idc']) ? $_GET['idc'] : header('location: message.php?cd=0&msg=NO CONTRACT SELECTED !!!');
$member = isset($_SESSION['worker']) ? $_SESSION['worker'] : header('location: message.php?cd=0&msg=ACCESS DENIED !!!');

?>
<form method="post" action="assets/behindcode/payment/add.php" style="width: 80%; margin: 0px auto; position: relative;">
<!--input type="hidden" name="id" readonly required value="<//?php echo $member->id_person; ?>" /-->
<input type="hidden" name="contract" readonly required value="<?php echo $idc ?>" />
    <h3>Add new payments</h3>
    <style type="text/css">
        td {
            vertical-align: top;
        }
    </style>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
<div class="form-floating mb-3">
    <input type="text" name="note" class="form-control" id="floatingText" placeholder="First name">
    <label for="floatingText">Note</Nav></label>
</div>
    </td>
    <td>
<div class="form-floating mb-3">
    <input type="number" name="amount" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">amount</label>
</div>
    </td>
    </tr>
    <tr>
        <td>
<div class="form-floating mb-4">
    <input type="number" name="deposit" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Deposit</label>
</div>
    </td>
    <td>
<div class="form-floating mb-4">
    <input readonly type="number" name="rest" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Rest</label>
</div>
    </td>
    </tr>
    <tr>
        <td>
<div class="form-floating mb-4">
    <!--input type="password" class="form-control" id="floatingPassword" placeholder="Password"-->
    <select class="form-select" name="type">
        <option value="0"></option>
        <option value="1">In payment</option>
        <option value="2">Out payment</option>
    </select>
    <label for="floatingPassword">type</label>
</div>
    </td>
    <td>
    <div class="form-floating mb-4">
    <input type="date" name="complet_date" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Complet date</label>
</div>
    </td>
    </tr>
    </table>
<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add</button>
</form>