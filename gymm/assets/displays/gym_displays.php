<?php
// Classe contenant les opérations CRUD sur la table gym
class gym_displays
{
    private static function display_state_labels($code) 
    {
        $label = "";
        try {
            switch($code) {
                case 0: $label = "DEACTIVATED"; break;
                case 1: $label = "ACTIVATED"; break;
            }
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $label;
    }

    public static function generate_object()
    {
        $object = NULL;

        try {
            $object                = new gym();
            $object->id            = isset($_POST['id'])            ? $_POST['id']                          :  12;
            $object->access_number = isset($_POST['access_number']) ? htmlentities($_POST['access_number']) : strings_lib::generate_number();
            $object->name          = isset($_POST['name'])          ? htmlentities($_POST['name'])          : 'Default gym';
            $object->cover         = isset($_POST['cover'])         ? htmlentities($_POST['cover'])         : 'default_cover.jpg';
            $object->logo          = isset($_POST['logo'])          ? htmlentities($_POST['logo'])          : 'default_logo.jpg';
            $object->description   = isset($_POST['description'])   ? htmlentities($_POST['description'])   : 'Default description';
            $object->phone         = isset($_POST['phone'])         ? htmlentities($_POST['phone'])         : '000 00 00 00';
            $object->fax           = isset($_POST['fax'])           ? htmlentities($_POST['fax'])           : '000 00 00 00';
            $object->address       = isset($_POST['address'])       ? htmlentities($_POST['address'])       : 'Default adresse';
            $object->postal_code   = isset($_POST['postal_code'])   ? htmlentities($_POST['postal_code'])   : '00000';
            $object->map           = isset($_POST['map'])           ? $_POST['map']           : 'Default Map';
            $object->mobile        = isset($_POST['mobile'])        ? htmlentities($_POST['mobile'])        : '00 00 00 00 00';
            $object->email         = isset($_POST['email'])         ? htmlentities($_POST['email'])         : 'default@mail.dom';
            $object->nrc           = isset($_POST['nrc'])           ? htmlentities($_POST['nrc'])           : '0000000000000000';
            $object->tin           = isset($_POST['tin'])           ? htmlentities($_POST['tin'])           : '0000000000000000';
            $object->sin           = isset($_POST['sin'])           ? htmlentities($_POST['sin'])           : '0000000000000000';
            $object->ai            = isset($_POST['ai'])            ? htmlentities($_POST['ai'])            : '0000000000000000';
            $object->bsi           = isset($_POST['bsi'])           ? htmlentities($_POST['bsi'])           : '0000000000000000';
            $object->type          = isset($_POST['type'])          ? htmlentities($_POST['type'])          :  0;
            $object->add_date      = isset($_POST['add_date'])      ? $_POST['add_date']                    : date('Y-m-d H:i:s');
            $object->state         = isset($_PSOT['state'])         ? $_POST['state']                       :  0;
            $object->manager       = isset($_POST['manager'])       ? $_POST['manager']                     :  0;
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
                $html = '<p>'.htmlentities($object->name_gym).' - '.htmlentities($object->phone_gym).' </p>';
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
                $html = '<table id="line'.$line->id_gym.'" cellpadding="4" cellspacing="4" style="margin-bottom: 20px; width: 100%;">
                            <tr>
                                <td style="vertical-align: top; width: 5%;">
                                    <img src="uploads/'.htmlentities($line->logo_gym).'" 
                                        alt="Logo de '.htmlentities($line->name_gym).'"
                                        style="width: 40px; height: 40px; 
                                                object-fit: cover; border-radius: 500px;" />
                                </td>
                                <td style="vertical-align: middle; width: 70%;">
                                    <h3 onclick="$(\'div#gym-map'.$line->id_gym.'\').toggle(1000);"
                                        style="cursor: pointer; text-align: left; 
                                            font-size: 20px; font-weight: normal; ">
                                        '.htmlentities($line->name_gym).'
                                    </h3>
                                    <p>NRC : '.htmlentities($line->nrc_gym).'</p>
                                    <p>Phone : '.htmlentities($line->phone_gym).'</p>
                                    <div id="gym-map'.$line->id_gym.'" style="display: none;">
                                        <p>'.htmlentities($line->description_gym).'</p>
                                        <table style="width: 100%;">
                                        <tr>
                                        <td style="width: 50%;">'.$line->map_gym.'</td>
                                        <td>'.$line->cover_gym.'</td>
                                        </tr>
                                        </table>
                                    </div>
                                </td>
                                <td style="text-align: right; width: 25%;">
                                    <button class="btn btn-square btn-success m-2" onclick="list_group('.$line->id_gym.')">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <!--button class="btn btn-square btn-success m-2" onclick="consult_gym('.$line->id_gym.')">
                                    <i class="fa fa-file"></i>
                                    </button-->
                                    <!--button class="btn btn-square btn-danger m-2" onclick="delete_gym('.$line->id_gym.')">
                                    <i class="fa fa-trash"></i>
                                    </button-->
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
                <td><h3 style="float: left;">Gyms</h3></td>
                <td>
                    <!--input id="search-gym" class="form-control bg-secondary border-0 text-white" 
                           onkeyup="search_gym();"
                           type="search" 
                           placeholder="Search"-->
                </td>
                <td style="text-align: right;">
                    <input type="button" class="btn btn-outline-primary m-2" value="+" onclick="load_content(\'div#display-tabs\', \'Adding_gym.php\');" />
                </td>
            </tr>
        </table>
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">      
        </div>
        <style type="text/css">
            table[id*=\'line\']:hover {
                background-color: #333;
            }
        </style>';

        try {
            if(isset($list) && $list !== false) {
                $html .= '<div id="display-search">';
                while($line = $list->fetchObject()) {
                    $html .= self::display_line($line);
                }
                $html .= '</div>';
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;
    }

    public static function display_line_manager($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '<table id="line'.$line->id_gym.'" cellpadding="4" cellspacing="4" style="margin-bottom: 20px; width: 100%;">
                            <tr>
                                <td style="vertical-align: top; width: 5%;">
                                    <img src="uploads/'.htmlentities($line->logo_gym).'" 
                                        alt="Logo de '.htmlentities($line->name_gym).'"
                                        style="width: 40px; height: 40px; 
                                                object-fit: cover; border-radius: 500px;" />
                                </td>
                                <td style="vertical-align: middle; width: 60%;">
                                    <h3 onclick="$(\'div#gym-map'.$line->id_gym.'\').toggle(1000);"
                                        style="cursor: pointer; text-align: left; 
                                            font-size: 20px; font-weight: normal; ">
                                        '.htmlentities($line->name_gym).'
                                    </h3>
                                    <p>NRC : '.htmlentities($line->nrc_gym).'</p>
                                    <p>Phone : '.htmlentities($line->phone_gym).'</p>
                                    <div id="gym-map'.$line->id_gym.'" style="display: none;">
                                        <p>'.htmlentities($line->description_gym).'</p>
                                        '.$line->map_gym.'
                                    </div>
                                </td>
                                <td style="text-align: right; width: 35%;">
                                    <button class="btn btn-square btn-success m-2" onclick="load_content(\'div#display-tabs\', \'Adding_worker.php?idg='.$line->id_gym.'\');" title="Add Worker">
                                        <i class="bi bi-person-circle"></i>
                                    </button>
                                    <button class="btn btn-square btn-success m-2" onclick="list_worker_gym('.$line->id_gym.')" title="View Workers">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button class="btn btn-square btn-success m-2" onclick="list_group_manager('.$line->id_gym.')" title="View groups">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button class="btn btn-square btn-success m-2" onclick="consult_gym('.$line->id_gym.')" title="Consult">
                                    <i class="fa fa-file"></i>
                                    </button>
                                    <button class="btn btn-square btn-danger m-2" onclick="delete_gym('.$line->id_gym.')" title="Delete">
                                    <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                         </table>';
                
                // '<p>'.htmlentities($line->name_gym).' - '.htmlentities($line->logo_gym).' </p>';
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_list_manager($list) 
    {
        $html = '
        <table style ="width: 100%;">
            <tr>
                <td><h3 style="float: left;">Gyms</h3></td>
                <td style="text-align: right;">
                    <input type="button" class="btn btn-outline-primary m-2" value="+" onclick="load_content(\'div#display-tabs\', \'Adding_gym.php\');" />
                </td>
            </tr>
        </table>
        <div style="text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">      
        </div>
        <style type="text/css">
            table[id*=\'line\']:hover {
                background-color: #333;
            }
        </style>';

        try {
            if(isset($list) && $list !== false) {
                $html .= '<div id="display-search">';
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_manager($line);
                }
                $html .= '</div>';
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;
    }

    public static function display_list_admin($list) 
    {
        $html = '
        <table style ="width: 100%; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
            <tr>
                <td style="width: 20%;">
                    <h3 style="float: left;">Gyms</h3>
                </td>
                <td style="width: 80%;">
                </td>
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
                    $html .= self::display_line_admin($line);
                }
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $html;
    }

    public static function display_line_admin($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '<table id="line'.$line->id_gym.'" cellpadding="4" cellspacing="4" style="margin-bottom: 20px; width: 100%;">
                            <tr>
                                <td style="vertical-align: top; width: 5%;">
                                    <img src="uploads/'.htmlentities($line->logo_gym).'" 
                                        alt="Logo de '.htmlentities($line->name_gym).'"
                                        style="width: 40px; height: 40px; 
                                                object-fit: cover; border-radius: 500px;" />
                                </td>
                                <td style="vertical-align: middle; width: 70%;">
                                    <h3 onclick="$(\'div#gym-map'.$line->id_gym.'\').toggle(1000);"
                                        style="cursor: pointer; text-align: left; 
                                            font-size: 20px; font-weight: normal; ">
                                        '.htmlentities($line->name_gym).'
                                    </h3>
                                    <p>STATE : '.self::display_state_labels($line->state_gym).'</p>
                                    <div id="gym-map'.$line->id_gym.'" style="display: none;">
                                        <P>NRC : '.htmlentities($line->nrc_gym).'</p>
                                        <p>'.htmlentities($line->description_gym).'</p>
                                        '.$line->map_gym.'
                                    </div>
                                </td>
                                <td style="text-align: right; width: 25%;">
                                    <button class="btn btn-square btn-success m-2" 
                                            onclick="modify_state_gym('.$line->id_gym.', 1);" 
                                            title="Activate this gym">
                                    <i class="fa fa-file"></i>
                                    </button>
                                    <button class="btn btn-square btn-success m-2" 
                                            onclick="modify_state_gym('.$line->id_gym.', 0);"
                                            title="Deactivate this gym">
                                    <i class="fa fa-file"></i>
                                    </button>
                                    <button class="btn btn-square btn-danger m-2" 
                                            onclick="delete_gym('.$line->id_gym.');"
                                            title="Delete this gym">
                                    <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                         </table>';
                
                // '<p>'.htmlentities($line->name_gym).' - '.htmlentities($line->logo_gym).' </p>';
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }
}