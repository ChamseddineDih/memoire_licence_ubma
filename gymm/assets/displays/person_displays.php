<?php
// Classe contenant les opérations CRUD sur la table person
class person_displays
{
    public static function generate_object()
    {
        $object = NULL;

        try {
            $object                = new person();
            $object->id            = isset($_POST['id'])            ? $_POST['id']                          :  1;
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
            $object->type          = isset($_POST['type'])          ? $_POST['type']                        :  1;
            $object->state         = isset($_PSOT['state'])         ? $_POST['state']                       :  1;
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
                $html = '<p>'.htmlentities($object->first_name_person).' - '.htmlentities($object->last_name_person).' </p>';
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
                $html = '
                <table cellpadding="4" cellspacing="4" style="margin-bottom: 20px; width: 100%;">
                    <tr>
                        <td style="vertical-align: top; width: 5%;">
                            <img src="uploads/'.htmlentities($line->photo_person).'" 
                                 alt="Logo de '.htmlentities($line->first_name_person).'"
                                 style="width: 40px; height: 40px; 
                                 object-fit: cover; border-radius: 500px;" />
                        </td>
                        <td style="width: 80%;">
                            <h3>'.htmlentities($line->first_name_person).' '.htmlentities($line->last_name_person).'</h3>
                        </td>
                        <td style="text-align: right; width: 15%;">
                            <button class="btn btn-square btn-success m-2" onclick="consult_person('.$line->id_person.')" >
                                <i class="fa fa-file"></i>
                            </button>
                            <button class="btn btn-square btn-danger m-2" onclick="delete_person('.$line->id_person.')" >
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

    public static function display_list($list) 
    {
        $html = '
        <table style ="width: 100%; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
            <tr>
                <td style="width: 20%;">
                    <h3 style="float: left;">Members</h3>
                </td>
                <td style="width: 80%;"></td>
            </tr>
        </table>
        <style type="text/css">
            table[id*=\'line\']:hover {
                background-color: #333;
            }
        </style>';

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

    public static function display_line_group($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '
                <table cellpadding="4" cellspacing="4" style="margin-bottom: 20px; width: 100%;">
                    <tr>
                        <td style="vertical-align: top; width: 5%;">
                            <img src="uploads/'.htmlentities($line->photo_person).'" 
                                 alt="Logo de '.htmlentities($line->first_name_person).'"
                                 style="width: 40px; height: 40px; 
                                 object-fit: cover; border-radius: 500px;" />
                        </td>
                        <td style="width: 80%;">
                            <h3>'.htmlentities($line->first_name_person).' '.htmlentities($line->last_name_person).'</h3>
                        </td>
                        <td style="text-align: right; width: 15%;">
                        <button class="btn btn-square btn-success m-2" onclick="list_subscriptions_by_member('.$line->id_person.')" title="View Subscriptions">
                            <i class="fa fa-search"></i>
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

    public static function display_list_group($list) 
    {
        $html = '
        <table style ="width: 100%; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
            <tr>
                <td style="width: 20%;">
                    <h3 style="float: left;">Members</h3>
                </td>
                <td style="width: 80%;"></td>
            </tr>
        </table>
        <style type="text/css">
            table[id*=\'line\']:hover {
                background-color: #333;
            }
        </style>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_group($line);
                }
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;

    }

    public static function person_type($code)
    {
        $label = '';

        switch($code)
        {
            case 1: $label = 'Memeber';     break;
            case 2: $label = 'Manager';     break;
            case 3: $label = 'Coach';       break;
            case 4: $label = 'Supervisor';  break;
            case 5: $label = 'Admin';       break;
        }
    
        return $label;
    }
}