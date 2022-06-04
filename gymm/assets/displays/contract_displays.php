<?php
// Classe contenant les opérations CRUD sur la table contract
class contract_displays
{
    public static function generate_object()
    {
        $object = NULL;

        try {
            $object                         = new contract();     
            $object->id                     = isset($_POST['id'])            ? $_POST['id']                       :  4;
            $object->number                 = isset($_POST['number'])        ? htmlentities($_POST['number'])     : strings_lib::generate_number();
            $object->salary                 = isset($_POST['salary'])        ? $_POST['salary']                   :  1000;
            $object->evaluation             = isset($_POST['evaluation'])    ? htmlentities($_POST['evaluation']) : '';
            $object->date_begining          = isset($_POST['date_begining']) ? $_POST['date_begining']            : date('Y-m-d');
            $object->date_ending            = isset($_POST['date_ending'])   ? $_POST['date_ending']              : date(strlen(NULL));
            $object->add_date               = isset($_POST['add_date'])      ? $_POST['add_date']                 : date('Y-m-d');
            $object->type                   = isset($_POST['type'])          ? $_POST['type']                     :  0;
            $object->gym                    = isset($_POST['gym'])           ? $_POST['gym']                      :  0;
            $object->worker                 = isset($_POST['worker'])        ? $_POST['worker']                   :  0;
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
                $html = '<p>'.htmlentities($object->number_contract).' - '.htmlentities($object->salary_contract).' </p>';
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
                         <table style="width:300px">
                            <tr>
                                <td>'.htmlentities($line->number_contract).'</td>
                                <td> <input type="text" name="salary" value="'.htmlentities($line->salary_contract).'"> </td>
                                <td> <input type="text" name="evaluation" value="'.htmlentities($line->evaluation_contract).'"> </td>
                                <td></td>
                                <td style="text-align: right;">
                                <button class="btn btn-square btn-success m-2" onclick="consult_contract('.$line->id_contract.')">
                                <i class="fa fa-file"></i>
                                </button>
                                <button class="btn btn-square btn-danger m-2" onclick="delete_contract('.$line->id_contract.')">
                                <i class="fa fa-trash"></i>
                                </button>
                            </td>
                                </tr>
                         </table>
                         </form>';
                //$html = '<p>'.htmlentities($line->number_contract).' - '.htmlentities($line->salary_contract).' </p>';
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
            <td><h3 style="float: left;">Contracts</h3></td>
            <td>
            <input class="form-control bg-dark border-0" type="search" placeholder="Search">
            </td>
            <td style="text-align: right;">
                <input type="button" class="btn btn-outline-primary m-2" value="+" onclick="load_content(\'div#display-tabs\', \'Adding_contract.php\');" />
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

    public static function display_line_worker($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '
                         <table style="width:100%;">
                            <tr>
                                <td style="width:16%;">'.htmlentities($line->number_contract).'</td>
                                <td style="width:16%;">'.htmlentities($line->salary_contract).'</td>
                                <td style="width:16%;">'.htmlentities($line->evaluation_contract).'</td>
                                <td style="width:16%;">'.htmlentities($line->date_begining_contract).'</td>
                                <td style="width:16%;">'.htmlentities($line->date_ending_contract).'</td>
                                <td style="width:16%; text-align: right;">
                                <button class="btn btn-square btn-success m-2" onclick="open_form_adding_payment('.$line->id_contract.');" title="Add Payment">
                                <i class="bi bi-plus-circle-fill"></i>
                                </button>
                                <button class="btn btn-square btn-success m-2" onclick="contract_payment('.$line->id_contract.')" title="View Pauments">
                                <i class="fa fa-search"></i>
                                </button>
                                <button class="btn btn-square btn-success m-2" onclick="consult_contract('.$line->id_contract.')" title="Consult">
                                <i class="fa fa-file"></i>
                                </button>
                                <button class="btn btn-square btn-danger m-2" onclick="delete_contract('.$line->id_contract.')" title="Delete">
                                <i class="fa fa-trash"></i>
                                </button>
                            </td>
                                </tr>
                         </table>';
                //$html = '<p>'.htmlentities($line->number_contract).' - '.htmlentities($line->salary_contract).' </p>';
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_list_worker($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td><h3 style="width:16%; float: left;">Contracts</h3></td>
            <td style="width:16%;">Salary</td>
            <td style="width:16%;">Evaluation</td>
            <td style="width:16%;">Date Begining</td>
            <td style="width:16%;">Date Ending</td>
            <td style="width:16%;"></td>
        </tr>
        </table>        
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
        </div>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_worker($line);
                }
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;

    }

    public static function display_line_worker_($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '
                         <table style="width:100%;">
                            <tr>
                                <td style="width:16%;">'.htmlentities($line->number_contract).'</td>
                                <td style="width:16%;">'.htmlentities($line->salary_contract).'</td>
                                <td style="width:16%;">'.htmlentities($line->evaluation_contract).'</td>
                                <td style="width:16%;">'.htmlentities($line->date_begining_contract).'</td>
                                <td style="width:16%;">'.htmlentities($line->date_ending_contract).'</td>
                                <td style="width:16%; text-align: right;">
                                <button class="btn btn-square btn-success m-2" onclick="open_form_adding_payment_('.$line->id_contract.');" title="Add Payment">
                                <i class="bi bi-plus-circle-fill"></i>
                                </button>
                                <button class="btn btn-square btn-success m-2" onclick="contract_payment('.$line->id_contract.')" title="View Pauments">
                                <i class="fa fa-search"></i>
                                </button>
                                <button class="btn btn-square btn-success m-2" onclick="consult_contract('.$line->id_contract.')" title="Consult">
                                <i class="fa fa-file"></i>
                                </button>
                                <button class="btn btn-square btn-danger m-2" onclick="delete_contract('.$line->id_contract.')" title="Delete">
                                <i class="fa fa-trash"></i>
                                </button>
                            </td>
                                </tr>
                         </table>';
                //$html = '<p>'.htmlentities($line->number_contract).' - '.htmlentities($line->salary_contract).' </p>';
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_list_worker_($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td><h3 style="width:16%; float: left;">Contracts</h3></td>
            <td style="width:16%;">Salary</td>
            <td style="width:16%;">Evaluation</td>
            <td style="width:16%;">Date Begining</td>
            <td style="width:16%;">Date Ending</td>
            <td style="width:16%;"></td>
        </tr>
        </table>        
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
        </div>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_worker_($line);
                }
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;

    }
    
    public static function display_line_for_worker($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '
                         <table style="width:100%;">
                            <tr>
                                <td style="width:16%;">'.htmlentities($line->number_contract).'</td>
                                <td style="width:16%;">'.htmlentities($line->salary_contract).'</td>
                                <td style="width:16%;">'.htmlentities($line->evaluation_contract).'</td>
                                <td style="width:16%;">'.htmlentities($line->date_begining_contract).'</td>
                                <td style="width:16%;">'.htmlentities($line->date_ending_contract).'</td>
                                <td style="width:16%; text-align: right;">
                                <button class="btn btn-square btn-success m-2" onclick="contract_payment_for_worker('.$line->id_contract.')" title="View Pauments">
                                <i class="fa fa-search"></i>
                                </button>
                                </td>
                                </tr>
                         </table>';
                //$html = '<p>'.htmlentities($line->number_contract).' - '.htmlentities($line->salary_contract).' </p>';
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_list_for_worker($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td><h3 style="width:16%; float: left;">Contracts</h3></td>
            <td style="width:16%;">Salary</td>
            <td style="width:16%;">Evaluation</td>
            <td style="width:16%;">Date Begining</td>
            <td style="width:16%;">Date Ending</td>
            <td style="width:16%;"></td>
        </tr>
        </table>        
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
        </div>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_for_worker($line);
                }
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;

    }
}