<?php session_start(); ob_start();

require 'assets/libraries/database_lib.php';
require 'assets/libraries/exception_lib.php';
require 'assets/libraries/security_lib.php';
require 'assets/libraries/strings_lib.php';

require 'assets/models/gym.php';
require 'assets/services/gym_services.php';
require 'assets/dbaccess/gym_dbaccess.php';
require 'assets/displays/gym_displays.php';

$member = isset($_SESSION['connected']) ? $_SESSION['connected'] : header('location: ../message.php?cd=0&msg=ACCESS DENIED !!!');
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$gym = gym_services::consult($id);
?>
<form method="post" action="assets/behindcode/gym/modify.php" style="width: 80%; margin: 0px auto; position: relative;">
    <input type="hidden" name="id" readonly required value="<?php echo $gym->id_gym; ?>" />
    <h3>Consul/Modify Gym</h3>
    <style type="text/css">
        td {
            vertical-align: top;
        }
    </style>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="floatingText" placeholder="First name" value="<?php echo $gym->name_gym; ?>">
                    <label for="floatingText">Name</Nav></label>
                </div>
            </td>
            <td style="width: 50%;">
                <div class="form-floating mb-4">
                    <input type="text" name="description" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->description_gym; ?>">
                    <label for="floatingPassword">Information</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-3">
                    <img src="uploads/<?php echo $gym->cover_gym; ?>" alt="Cover of <?php echo $gym->name_gym; ?>" style="width: 100%;" /><br>
                    <input type="file" name="cover" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $gym->cover_gym; ?>">
                    <label for="floatingInput">Picture</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="file" name="logo" class="form-control" id="floatingPassword" placeholder="Password"value="<?php echo $gym->logo_gym; ?>">
                    <label for="floatingPassword">Logo</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="number" name="phone" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->phone_gym; ?>">
                    <label for="floatingPassword">Phone</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="number" name="fax" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->fax_gym; ?>">
                    <label for="floatingPassword">Fax</label>
                </div>   
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="address" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->address_gym; ?>">
                    <label for="floatingPassword">Address</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="postal_code" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->postal_code_gym; ?>">
                    <label for="floatingPassword">Postal code</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="map" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->map_gym; ?>">
                    <label for="floatingPassword">Map</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="number" name="mobile" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->mobile_gym; ?>">
                    <label for="floatingPassword">Mobile</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->email_gym; ?>">
                    <label for="floatingPassword">Email</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="nrc" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->nrc_gym; ?>">
                    <label for="floatingPassword">NRC</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="tin" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->tin_gym; ?>">
                    <label for="floatingPassword">TIN</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="sin" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->sin_gym; ?>">
                    <label for="floatingPassword">SIN</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="ai" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->ai_gym; ?>">
                    <label for="floatingPassword">AI</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="bsi" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $gym->bsi_gym; ?>">
                    <label for="floatingPassword">BSI</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <!--input type="password" class="form-control" id="floatingPassword" placeholder="Password"-->
                    <select class="form-select" name="type" value="<?php echo $gym->type_gym; ?>">
                        <option value="0"></option>
                        <option value="1">TYPE1</option>
                        <option value="2">TYPE2</option>
                    </select>
                    <label for="floatingPassword">Type</label>
                </div>  
            </td>
        </tr>
    </table>
    <input type="submit" class="btn btn-primary py-3 w-100 mb-4" value="Add" />
</form>