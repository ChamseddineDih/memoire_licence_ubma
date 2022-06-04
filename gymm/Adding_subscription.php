<?php session_start(); ob_start();
$idg = isset($_GET['idg']) ? $_GET['idg'] : header('location: ../message.php?cd=0&msg=NON GROUP SELECTED !!!');
$member = isset($_SESSION['connected']) ? $_SESSION['connected'] : header('location: ../message.php?cd=0&msg=ACCESS DENIED !!!');

?>
<form method="post" action="assets/behindcode/subscription/add.php" style="width: 80%; margin: 0px auto; position: relative;">
    <input type="hidden" name="idm" readonly required value="<?php echo $member->id_person; ?>" />
    <input type="hidden" name="idg" readonly required value="<?php echo $idg; ?>" />
    <h3>Add new subscrpions</h3>
    <style type="text/css">
        td {
            vertical-align: top;
        }
    </style>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
<div class="form-floating mb-3">
    <input type="number" name="period" class="form-control" id="floatingText" placeholder="First name">
    <label for="floatingText">Period</Nav></label>
</div>
    </td>
    <td>
<div class="form-floating mb-3">
    <input type="file" name="front_idcard" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Fornt ID card</label>
</div>
    </td>
    </tr>
    <tr>
        <td>
<div class="form-floating mb-4">
    <input type="file" name="back_idcard" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Back ID card</label>
</div>
    </td>
    <td>
<div class="form-floating mb-4">
    <input type="file" name="medical_form" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Medical form</label>
</div>
    </td>
    </tr>
    <tr>
        <td>
<div class="form-floating mb-4">
    <input type="file" name="parental_authorization" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Parental authorization</label>
</div>
    </td>
    <td>
<div class="form-floating mb-4">
    <input type="text" name="tutor" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Tutor</label>
</div>
    </td>
    <tr>
        <td>
<div class="form-floating mb-4">
    <input type="number" name="phone_tutor" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Tutor phone</label>
</div>
    </td>
    <td>
<div class="form-floating mb-4">
    <input type="date" name="date_begining" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Date begining</label>
</div>
    </td>
    </tr>
    <tr>
        <td>
<div class="form-floating mb-4">
    <input type="date" name="date_ending" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Date ending</label>
</div>
    </td>
    </tr>
    </table>
<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add</button>
</form>