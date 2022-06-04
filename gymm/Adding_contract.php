<?php session_start(); ob_start();

$member = isset($_SESSION['connected']) ? $_SESSION['connected'] : header('location: ../message.php?cd=0&msg=ACCESS DENIED !!!');
$idw = isset($_GET['idw']) ? $_GET['idw'] : header('location: ../message.php?cd=0&msg=NO GYM WORKER!!!');
$idg = isset($_GET['idg']) ? $_GET['idg'] : header('location: ../message.php?cd=0&msg=NO GYM SELECTED !!!');

?>
<form method="post" action="assets/behindcode/contract/add.php" style="width: 80%; margin: 0px auto; position: relative;">
<input type="hidden" name="worker" readonly required value="<?php echo $idw; ?>" />
<input type="hidden" name="gym" readonly required value="<?php echo $idg; ?>" />
<inpude>
<h3>Add new group</h3>
    <style type="text/css">
        td {
            vertical-align: top;
        }
    </style>
    <table style="width: 100%;">
    <tr>
        <td style="width: 50%;">
<div class="form-floating mb-3">
    <input type="number" name="salary" class="form-control" id="floatingText" placeholder="First name">
    <label for="floatingText">Salary</Nav></label>
</div>
    </td>
    <td>
<div class="form-floating mb-3">
    <input type="text" name="evaluation" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Evaluation</label>
</div>
    </td>
    </tr>
    <tr>
        <td>
<div class="form-floating mb-4">
    <input type="date" name="date_begining" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Date of begining</label>
</div>
    </td>
    <td>
<div class="form-floating mb-4">
    <!--input type="password" class="form-control" id="floatingPassword" placeholder="Password"-->
    <select class="form-select" name="type">
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
    <input type="date" name="date_ending" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Date of ending</label>
</div>
    </td>
    </tr>
    </table>
<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add</button>
</form>