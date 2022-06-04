<?php session_start(); ob_start();

require 'assets/libraries/database_lib.php';
require 'assets/libraries/exception_lib.php';
require 'assets/libraries/security_lib.php';
require 'assets/libraries/strings_lib.php';

require 'assets/models/person.php';
require 'assets/services/person_services.php';
require 'assets/dbaccess/person_dbaccess.php';
require 'assets/displays/person_displays.php';

$member = isset($_SESSION['connected']) ? $_SESSION['connected'] : header('location: ../message.php?cd=0&msg=ACCESS DENIED !!!');
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$idp = ($id === 0) ? $member->id_person : $id;
$person = person_services::consult($idp);
?>
<form method="post" action="assets/behindcode/person/modify.php" style="width: 80%; margin: 0px auto; position: relative;">
<input type="hidden" name="id" readonly required value="<?php echo $person->id_person; ?>" />
    <h3>Consult/Modify person</h3>
    <style type="text/css">
        td {
            vertical-align: top;
        }
    </style>
        <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                <div class="form-floating mb-3">
                    <input type="text" name="first_name" class="form-control" id="floatingText" placeholder="First name" value="<?php echo $person->first_name_person; ?>">
                    <label for="floatingText">First Name</Nav></label>
                </div>   
            </td>
            <td>
                <div class="form-floating mb-3">
                    <input type="text" name="last_name" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $person->last_name_person; ?>">
                    <label for="floatingInput">Last Name</label>
                </div>    
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="date" name="birthday" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $person->birthday_person; ?>">
                    <label for="floatingPassword">Birthday</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="mobile" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $person->mobile_person; ?>">
                    <label for="floatingPassword">Mobile</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="file" name="photo" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $person->photo_person; ?>">
                    <label for="floatingPassword">Picture</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $person->email_person; ?>">
                    <label for="floatingPassword">Email</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="address" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $person->address_person; ?>">
                    <label for="floatingPassword">Address</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="postal_code" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $person->postal_code_person; ?>">
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
    </tr>
    <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="username" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $person->username_person; ?>" readonly>
                    <label for="floatingPassword">Username</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" value="">
                    <label for="floatingPassword">Password</label>
                </div>
            </td>
        </tr>
</table>
<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add</button>
</form>