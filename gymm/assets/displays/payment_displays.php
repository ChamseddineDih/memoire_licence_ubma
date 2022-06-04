<?php
// Classe contenant les opérations CRUD sur la table payment
class payment_displays
{
    public static function generate_object()
    {
        $object = NULL;

        try {
            $object               = new payment();
            $object->id           = isset($_POST['id'])           ? $_POST['id']                   :  8;
            $object->number       = isset($_POST['number'])       ? htmlentities($_POST['number']) : strings_lib::generate_number();
            $object->note         = isset($_POST['note'])         ? htmlentities($_POST['note'])   : 'C que pour tester : '.strings_lib::generate_number();
            $object->amount       = isset($_POST['amount'])       ? $_POST['amount']               :  2000;
            $object->deposit      = isset($_POST['deposit'])      ? $_POST['deposit']              :  1500;
            $object->rest         = isset($_POST['rest'])         ? $_POST['rest']                 :  0;
            $object->add_date     = isset($_POST['add_date'])     ? $_POST['add_date']             : date('Y-m-d');
            $object->complet_date = isset($_POST['complet_date']) ? $_POST['complet_date']         : date('Y-m-d');
            $object->type         = isset($_POST['type'])         ? $_POST['type']                 : 0;
            $object->subscription = isset($_POST['subscription']) ? $_POST['subscription']         : 0;
            $object->contract     = isset($_POST['contract'])     ? $_POST['contract']             : 0;
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
                
                $html = '<p>'.htmlentities($object->amount_payment).' - '.htmlentities($object->number_payment).' </p>';
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
                $html = '<form action="assets/behindcode/contract/modify.php" method="post">
                <table style="width:100%;">
                <tr>
                <td>'.htmlentities($line->number_payment).'</td>
                <td> <input type="text" name="amount" value="'.htmlentities($line->amount_payment).'"></td>
                <td> <input type="text" name="note"   value="'.htmlentities($line->note_payment).'"></td>
                <td></td>
                <td style="text-align: right;">
                <button class="btn btn-square btn-success m-2" onclick="consult_payment('.$line->id_payment.')">
                <i class="fa fa-file"></i>
                </button>
                <button class="btn btn-square btn-danger m-2" onclick="delete_payment('.$line->id_payment.')" >
                <i class="fa fa-trash"></i>
                </button>
                </td>
                </tr>
              </table>
              </form>';
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
            <td><h3 style="float: left;">Payment</h3></td>
            <td>
            <input class="form-control bg-dark border-0" type="search" placeholder="Search">
            </td>
            <td style="text-align: right;">
                <input type="button" class="btn btn-outline-primary m-2" value="+" onclick="load_content(\'div#display-tabs\', \'Adding_payment.php\');" />
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

    public static function display_line_contract($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '<form action="assets/behindcode/contract/modify.php" method="post">
                <table style="width:100%;">
                <tr>
                <td style="width:25%;">'.htmlentities($line->number_payment).'</td>
                <td style="width:25%;">'.htmlentities($line->amount_payment).'</td>
                <td style="width:25%;">'.htmlentities($line->note_payment).'</td>
                <td style="width:25%; text-align: right;">
                <button class="btn btn-square btn-success m-2" onclick="consult_payment('.$line->id_payment.')">
                <i class="fa fa-file"></i>
                </button>
                <button class="btn btn-square btn-danger m-2" onclick="delete_payment('.$line->id_payment.')" >
                <i class="fa fa-trash"></i>
                </button>
                </td>
                </tr>
              </table>
              </form>';
            }
        }             
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_list_contract($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td style="width:25%;"><h3 style="float: left;">Payment</h3></td>
            <td style="width:25%;">Amount</td>
            <td style="width:25%;">Note</td>
            <td style="width:25%; text-align: right;">
                <input type="button" class="btn btn-outline-primary m-2" value="+" onclick="load_content(\'div#display-tabs\', \'Adding_payment.php\');" />
            </td>
        </tr>
        </table>  
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">      
        </div>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_contract($line);
                }
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;

    }

    public static function display_line_in_manager($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '
                    <table style="width:100%;">
                        <tr>
                            <td style="width:16.666666666666666666666666666667%;">'.htmlentities($line->number_payment).'</td>
                            <td style="width:16.666666666666666666666666666667%;">'.htmlentities($line->amount_payment).'</td>
                            <td style="width:16.666666666666666666666666666667%;">'.htmlentities($line->deposit_payment).'</td>
                            <td style="width:16.666666666666666666666666666667%;">'.htmlentities($line->rest_payment).'</td>
                            <td style="width:16.666666666666666666666666666667%;">'.htmlentities($line->note_payment).'</td>
                            <td style="text-align: right; width: 16.666666666666666666666666666667%;">
                                <button class="btn btn-square btn-success m-2" onclick="consult_payment('.$line->id_payment.')">
                                    <i class="fa fa-file"></i>
                                </button>
                                <button class="btn btn-square btn-danger m-2" onclick="delete_payment('.$line->id_payment.')" >
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </table>';
            }
        }             
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_list_in_manager($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td style="width:16.666666666666666666666666666667%;"><h4 style="float: left;">My In Payment</h4></td>
            <td style="width:16.666666666666666666666666666667%;">Amount</td>
            <td style="width:16.666666666666666666666666666667%;">Deposit</td>
            <td style="width:16.666666666666666666666666666667%;">Rest</td>
            <td style="width:16.666666666666666666666666666667%;">Note</td>
            <td style="width:16.666666666666666666666666666667%;"></td>
        </tr>
        </table>  
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">      
        </div>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_in_manager($line);
                }
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;

    }

    public static function display_line_out_manager($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '
                    <table style="width:100%;">
                        <tr>
                            <td style="width:25%;">'.htmlentities($line->number_payment).'</td>
                            <td style="width:25%;">'.htmlentities($line->amount_payment).'</td>
                            <td style="width:25%;">'.htmlentities($line->note_payment).'</td>
                            <td style="text-align: right; width: 25%;">
                                <button class="btn btn-square btn-success m-2" onclick="consult_payment('.$line->id_payment.')">
                                    <i class="fa fa-file"></i>
                                </button>
                                <button class="btn btn-square btn-danger m-2" onclick="delete_payment('.$line->id_payment.')" >
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </table>';
            }
        }             
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_list_out_manager($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td style="width:25%;"><h4 style="float: left;">My Out Payment</h4></td>
            <td style="width:25%;">Amount</td>
            <td style="width:25%;">Note</td>
            <td style="width:25%;"></td>
        </tr>
        </table>  
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">      
        </div>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_out_manager($line);
                }
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
                <table style="width:100%;">
                    <tr>
                        <td style="width: 25%;">'.htmlentities($line->number_payment).'</td>
                        <td style="width: 25%;">'.$line->add_date_payment.'</td>
                        <td style="width: 25%;">'.($line->amount_payment/100).' DA</td>
                        <td style="width: 25%;">'.htmlentities($line->note_payment).'</td>
                    </tr>
                </table>';
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
            <td><h3 style="float: left;">My Payment</h3></td>
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

    
    public static function display_line_contract_for_worker($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '<form action="assets/behindcode/contract/modify.php" method="post">
                <table style="width:100%;">
                <tr>
                <td style="width:25%;">'.htmlentities($line->number_payment).'</td>
                <td style="width:25%;">'.htmlentities($line->amount_payment).'</td>
                <td style="width:25%;">'.htmlentities($line->note_payment).'</td>
                <td style="width:25%; text-align: right;"></td>
                </tr>
              </table>
              </form>';
            }
        }             
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_list_contract_for_worker($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td style="width:25%;"><h3 style="float: left;">Payment</h3></td>
            <td style="width:25%;">Amount</td>
            <td style="width:25%;">Note</td>
            <td style="width:25%; text-align: right;">
            </td>
        </tr>
        </table>  
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">      
        </div>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_contract_for_worker($line);
                }
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;

    }

}