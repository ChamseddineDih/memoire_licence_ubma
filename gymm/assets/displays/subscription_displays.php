<?php
// Classe contenant les opérations CRUD sur la table subscription
class subscription_displays
{
    public static function generate_object()
    {
        $object = NULL;

        try {
            $object                       = new subscription();     
            $object->id                   = isset($_POST['id'])                   ? $_POST['id']                                 :  2;
            $object->number               = isset($_POST['number'])               ? htmlentities($_POST['number'])               : strings_lib::generate_number();
//$object->date_begining_subscription  = isset($_POST['date_begining_subscription'])  ? $_POST['date_begining_subscription']                :  0;
            $object->front_idcard         = isset($_POST['front_idcard'])         ? htmlentities($_POST['front_idcard'])         : '';
            $object->back_idcard          = isset($_POST['back_idcard'])          ? htmlentities($_POST['back_idcard'])          : '';
            $object->medical_form         = isset($_POST['medical_form'])         ? htmlentities($_POST['medical_form'])         : '';
            $object->parent_authorization = isset($_POST['parent_authorization']) ? htmlentities($_POST['parent_authorization']) : '';
            $object->tutor                = isset($_POST['tutor'])                ? htmlentities($_POST['tutor'])                : '';
            $object->phone_tutor          = isset($_POST['phone_tutor'])          ? htmlentities($_POST['phone_tutor'])          : '';
            $object->date_begining        = isset($_POST['date_begining'])        ? $_POST['date_begining']                      : date('Y:m:d');
            $object->date_ending          = isset($_POST['date_ending'])          ? $_POST['date_ending']                        : date('0:0:0');
            $object->add_date             = isset($_POST['add_date'])             ? $_POST['add_date']                           : date('Y:m:d');
            $object->member               = isset($_POST['idm'])                  ? $_POST['idm']                             :  0;
            $object->group                = isset($_POST['idg'])                ? $_POST['idg']                              :  0;
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $object;
    }
    public static function display_one($object)
    {
        $html = '';

        try {
            if(isset($object) && $object !== false) {
                $html = '<p>'.htmlentities($object->number_subscription).' - '.htmlentities($object->date_begining_subscription).' </p>';
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_line($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '<form action="assets/behindcode/subscription/modify.php" method="post">
                <table style="width:300px">
                   <tr>
                       <td>'.htmlentities($line->number_subscription).'</td>
                       <input type="hidden" name="id" value="'.$line->id_subscription.'" readonly required>
                       <td> <input type="text" name="date_begining" value="'.$line->date_begining_subscription.'"> </td>
                       <td> <input type="text" name="date_ending"   value="'.$line->date_ending_subscription.'"> </td>
                       <td></td>
                       <td style="text-align: right;">
                       <Button type="submit" class="btn btn-square btn-success m-2">
                       <i class="fa fa-edit"></i>
                       </button>
                       <button class="btn btn-square btn-danger m-2" onclick="delete_subscription('.$line->id_subscription.')" >
                       <i class="fa fa-trash"></i>
                       </button>
                   </td>
                       </tr>
                </table>
                </form>';
                //$html = '<p>'.htmlentities($line->number_subscription).' - '.htmlentities($line->date_begining_subscription).' </p>';
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_line_member($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '
                    <table style="width: 100%;">
                        <tr>
                            <td style="width: 25%;">
                                '.htmlentities($line->number_subscription).'
                            </td>
                            <td style="width: 25%;">
                                '.$line->date_begining_subscription.'
                            </td>
                            <td style="width: 25%;">
                                '.$line->date_ending_subscription.'
                            </td>
                            <td style="width: 25%; text-align: right;">
                                <button class="btn btn-square btn-success m-2" 
                                        onclick="list_payments_by_subscription('.$line->id_subscription.')"
                                        title="Payments list" >
                                    <i class="fa fa-search"></i>
                                </button>
                            </td>
                        </tr>
                    </table>';
                //$html = '<p>'.htmlentities($line->number_subscription).' - '.htmlentities($line->date_begining_subscription).' </p>';
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_list($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td><h3 style="float: left;">Subscriptions</h3></td>
            <td>
            <input class="form-control bg-dark border-0" type="search" placeholder="Search">
            </td>
            <td style="text-align: right;">
                <input type="button" class="btn btn-outline-primary m-2" value="+" onclick="load_content(\'div#display-tabs\', \'Adding_subscriptions.php\');" />
            </td>
        </tr>
        </table>  
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
        </div>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line($line);
                }
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;

    }

    public static function display_list_member($list) 
    {
        $html = '
        <table style ="width: 100%;">
            <tr>
                <td>
                    <h3 style="float: left;">My Subscriptions</h3>
                </td>
                <td></td>
                <td style="text-align: right;"></td>
            </tr>
        </table>  
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
        </div>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_member($line);
                }
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;

    }
}