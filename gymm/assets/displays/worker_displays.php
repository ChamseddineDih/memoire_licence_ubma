<?php
// Classe contenant les opérations CRUD sur la table worker
class worker_displays
{
    public static function generate_object()
    {
        $object = NULL;

        try {
            $object                = new worker();
            $object->id            = isset($_POST['id'])            ? $_POST['id']                          :  2;
            $object->access_number = isset($_POST['access_number']) ? htmlentities($_POST['access_number']) : strings_lib::generate_number();
            $object->first_name    = isset($_POST['first_name'])    ? htmlentities($_POST['first_name'])    : '';
            $object->last_name     = isset($_POST['last_name'])     ? htmlentities($_POST['last_name'])     : '';
            $object->photo         = isset($_POST['photo'])         ? htmlentities($_POST['photo'])         : '';
            $object->birthday      = isset($_POST['birthday'])      ? $_POST['birthday']                    : date('Y:m:d');
            $object->mobile        = isset($_POST['mobile'])        ? htmlentities($_POST['mobile'])        : '';
            $object->email         = isset($_POST['email'])         ? htmlentities($_POST['email'])         : '';
            $object->address       = isset($_POST['address'])       ? htmlentities($_POST['address'])       : '';
            $object->postal_code   = isset($_POST['postal_code'])   ? htmlentities($_POST['postal_code'])   : '';
            $object->gender        = isset($_POST['gender'])        ? $_POST['gender']                      :  0;
            $object->username      = isset($_POST['username'])      ? htmlentities($_POST['username'])      : '';
            $object->password      = isset($_POST['password'])      ? htmlentities($_POST['password'])      : '';
            $object->add_date      = isset($_POST['add_date'])      ? $_POST['add_date']                    : date('Y:m:d H:i:s');
            $object->type          = isset($_POST['type'])          ? $_POST['type']                        :  0;
            $object->state         = isset($_PSOT['state'])         ? $_POST['state']                       :  1;
            $object->idg           = isset($_PSOT['idg'])           ? $_POST['idg']                         :  1;
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
                $html = '<p>'.htmlentities($object->first_name_worker).' - '.htmlentities($object->last_name_worker).' </p>';
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
                $html = '<table cellpadding="4" cellspacing="4" style="margin-bottom: 20px;">
                <tr>
                <td style="vertical-align: top;">
                <img src="uploads/'.htmlentities($line->photo_worker).'" 
                     alt="Logo de '.htmlentities($line->first_name_worker).'"
                     style="width: 40px; height: 40px; 
                            object-fit: cover; border-radius: 500px;" />
            </td>
            <td>
            <h3>'.htmlentities($line->first_name_worker).' '.htmlentities($line->last_name_worker).'</h3>
            <td style="text-align: right;">
            <input type="button" value="Consult" class="btn btn-outline-primary m-2" onclick="consult_worker('.$line->id_worker.')" />
            <input type="button" value="Delete" class="btn btn-outline-primary m-2" onclick="delete_worker('.$line->id_worker.')" />
            </td>
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

    public static function display_list($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td><h3 style="float: left;">Workers</h3></td>
            <td>
            <input class="form-control bg-dark border-0" type="search" placeholder="Search">
            </td>
            <td style="text-align: right;">
                <input type="button" class="btn btn-outline-primary m-2" value="+" onclick="load_content(\'div#display-tabs\', \'Adding_worker.php\');" />
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

    public static function display_line_gym($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '<table width="100%"; cellpadding="4" cellspacing="4" style="margin-bottom: 20px;">
                <tr>
                <td style="width ="20%"; vertical-align: top;">
                <img src="uploads/'.htmlentities($line->photo_worker).'" 
                     alt="Logo de '.htmlentities($line->first_name_worker).'"
                     style="width: 40px; height: 40px; 
                            object-fit: cover; border-radius: 500px;" />
            </td>
            <td style="text-align: left;">
            <h3>'.htmlentities($line->first_name_worker).' '.htmlentities($line->last_name_worker).'</h3>
            <td style="text-align: right; width=30%; ">
            <button class="btn btn-square btn-success m-2" onclick="open_form_adding_contract('.$line->id_worker.', '.$line->idg.');" title="Add Contract">
                <i class="bi bi-plus-circle-fill"></i>
            </button>
            <button class="btn btn-square btn-success m-2" onclick="contract_worker('.$line->id_worker.')" title="View Contract">
                <i class="fa fa-search"></i>
            </button>
            <button class="btn btn-square btn-success m-2" onclick="consult_worker('.$line->id_worker.')" title="Consult">
                <i class="fa fa-edit"></i>
            </button>
            <button class="btn btn-square btn-danger m-2" onclick="delete_worker('.$line->id_worker.')" title="Delete">
                <i class="fa fa-trash"></i>
            </button>
            </td>
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

    public static function display_list_gym($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td><h3 style="float: left;">Workers</h3></td>
        </tr>
        </table>  
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
        </div>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_gym($line);
                }
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;

    }

    
    public static function display_line_gym_($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '<table width="100%"; cellpadding="4" cellspacing="4" style="margin-bottom: 20px;">
                <tr>
                <td style="width ="20%"; vertical-align: top;">
                <img src="uploads/'.htmlentities($line->photo_worker).'" 
                     alt="Logo de '.htmlentities($line->first_name_worker).'"
                     style="width: 40px; height: 40px; 
                            object-fit: cover; border-radius: 500px;" />
            </td>
            <td style="text-align: left;">
            <h3>'.htmlentities($line->first_name_worker).' '.htmlentities($line->last_name_worker).'</h3>
            <td style="text-align: right; width=30%; ">
            <button class="btn btn-square btn-success m-2" onclick="open_form_adding_contract_('.$line->id_worker.', '.$line->idg.');" title="Add Contract">
                <i class="bi bi-plus-circle-fill"></i>
            </button>
            <button class="btn btn-square btn-success m-2" onclick="contract_worker('.$line->id_worker.')" title="View Contract">
                <i class="fa fa-search"></i>
            </button>
            <button class="btn btn-square btn-success m-2" onclick="consult_worker_('.$line->id_worker.')" title="Consult">
                <i class="fa fa-edit"></i>
            </button>
            <button class="btn btn-square btn-danger m-2" onclick="delete_worker('.$line->id_worker.')" title="Delete">
                <i class="fa fa-trash"></i>
            </button>
            </td>
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

    public static function display_list_gym_($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td><h3 style="float: left;">Workers</h3></td>
        </tr>
        </table>  
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
        </div>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_gym_($line);
                }
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;

    }
}