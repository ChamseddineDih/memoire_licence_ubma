<?php session_start(); ob_start();

require 'assets/libraries/database_lib.php';
require 'assets/libraries/exception_lib.php';
require 'assets/libraries/security_lib.php';
require 'assets/libraries/strings_lib.php';

require 'assets/models/group.php';
require 'assets/services/group_services.php';
require 'assets/dbaccess/group_dbaccess.php';
require 'assets/displays/group_displays.php';


$worker = isset($_SESSION['online']) ? $_SESSION['online'] : header('location: ../message.php?cd=0&msg=ACCESS DENIED !!!');
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$group = group_services::consult($id);
?>
<form method="post" action="assets/behindcode/group/modify.php" style="width: 80%; margin: 0px auto; position: relative;">
<input type="hidden" name="id" readonly required value="<?php echo $group->id_group; ?>" />
    <h3>Modify Group</h3>
    <style type="text/css">
        td {
            vertical-align: top;
        }
    </style>
    <table style="width: 100%;">
    <tr>
        <td style="width: 50%;">
<div class="form-floating mb-3">
    <input type="number" name="training_sessions" class="form-control" id="floatingText" placeholder="First name" value="<?php echo $group->training_sessions_group; ?>">
    <label for="floatingText">Training sessions</Nav></label>
</div>
    </td>
    <td>
<div class="form-floating mb-3">
    <input type="number" name="limit_number" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $group->limit_number_group; ?>">
    <label for="floatingInput">The limit number of group</label>
</div>
    </td>
    </tr>
    <tr>
        <td>
<div class="form-floating mb-4">
    <input type="text" name="link_workout" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $group->link_workout_group; ?>">
    <label for="floatingPassword">Workout Program</label>
</div>
    </td>
    <td>
<div class="form-floating mb-4">
    <input type="text" name="video_workout" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $group->video_workout_group; ?>">
    <label for="floatingPassword">Workout video</label>
</div>
    </td>
    </tr>
    <tr>
        <td>
<div class="form-floating mb-4">
    <!--input type="password" class="form-control" id="floatingPassword" placeholder="Password"-->
    <select class="form-select" name="type" value="<?php echo $group->type_group; ?>">
        <option value="0"></option>
        <option value="1">Beginner</option>
        <option value="2">Advance</option>
        <option value="3">Powerlifter</option>
        <option value="4">Woman</option>
    </select>
    <label for="floatingPassword">Group type</label>
</div>
    </td>
    </tr>
    </table>
<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add</button>
</form>