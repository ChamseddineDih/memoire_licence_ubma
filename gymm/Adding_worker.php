<?php session_start(); ob_start();

$member = isset($_SESSION['connected']) ? $_SESSION['connected'] : header('location: ../message.php?cd=0&msg=ACCESS DENIED !!!');
$idg = isset($_GET['idg']) ? $_GET['idg'] : header('location: ../message.php?cd=0&msg=NO GYM SELECTED !!!');
?>
<form method="post" action="assets/behindcode/worker/add.php" style="width: 80%; margin: 0px auto; position: relative;">
<input type="hidden" name="idg" readonly required value="<?php echo $idg; ?>" />
    <h3>Add new Worker</h3>
    <style type="text/css">
        td {
            vertical-align: top;
        }
    </style>
        <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                <div class="form-floating mb-3">
                    <input type="text" name="first_name" class="form-control" id="floatingText" placeholder="First name">
                    <label for="floatingText">First Name</Nav></label>
                </div>   
            </td>
            <td>
                <div class="form-floating mb-3">
                    <input type="text" name="last_name" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Last Name</label>
                </div>    
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="date" name="birthday" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Birthday</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="mobile" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Mobile</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="file" name="photo" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Picture</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Email</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="address" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Address</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="postal_code" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Pstal Code</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <select class="form-select" name="gender">
                        <option value="0"></option>
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>
                    </select>
            <label for="floatingPassword">Gender</label>
                </div>
            </td>
            <td>
            <div class="form-floating mb-4">
                    <select class="form-select" name="gender">
                        <option value="0"></option>
                        <option value="3">Coach</option>
                        <option value="4">Supervisor</option>
                    </select>
            <label for="floatingPassword">Type</label>
                </div>
    </td>
    </tr>
    <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="username" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Username</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
            </td>
        </tr>
</table>
<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add</button>
</form>