<?php session_start(); ob_start();

$member = isset($_SESSION['connected']) ? $_SESSION['connected'] : header('location: ../message.php?cd=0&msg=ACCESS DENIED !!!');

?>
<form method="post" action="assets/behindcode/gym/add.php" style="width: 80%; margin: 0px auto; position: relative;">
    <input type="hidden" name="manager" readonly required value="<?php echo $member->id_person; ?>" />
    <h3>Add new gym</h3>
    <style type="text/css">
        td {
            vertical-align: top;
        }
    </style>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="floatingText" placeholder="First name">
                    <label for="floatingText">Name</Nav></label>
                </div>
            </td>
            <td style="width: 50%;">
                <div class="form-floating mb-4">
                    <input type="text" name="description" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Information</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-3">
                    <input type="file" name="cover" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Picture</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="file" name="logo" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Logo</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="number" name="phone" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Phone</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="number" name="fax" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Fax</label>
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
                    <label for="floatingPassword">Postal code</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="map" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Map</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="number" name="mobile" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Mobile</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Email</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="nrc" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">NRC</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="tin" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">TIN</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="sin" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">SIN</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="ai" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">AI</label>
                </div>
            </td>
            <td>
                <div class="form-floating mb-4">
                    <input type="text" name="bsi" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">BSI</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-floating mb-4">
                    <!--input type="password" class="form-control" id="floatingPassword" placeholder="Password"-->
                    <select class="form-select" name="type">
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