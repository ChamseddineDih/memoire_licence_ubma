<?php
// Classe contenant les opérations CRUD sur la table group
class group_displays
{


    public static function generate_object()
    {
        $object = NULL;

        try {
            $object                    = new group();
            $object->id                = isset($_POST['id'])                ? $_POST['id']                          :  4;
            $object->number            = isset($_POST['number'])            ? htmlentities($_POST['number'])        : strings_lib::generate_number();
            $object->training_sessions = isset($_POST['training_sessions']) ? $_POST['training_sessions']           :  0;
            $object->limit_number      = isset($_POST['limit_number'])      ? $_POST['limit_number']                : 10;
            $object->link_workout      = isset($_POST['link_workout'])      ? htmlentities($_POST['link_workout'])  : '';
            $object->video_workout     = isset($_POST['video_workout'])     ? htmlentities($_POST['video_workout']) : '';
            $object->type              = isset($_POST['type'])              ? $_POST['type']                        :  0;
            $object->state             = isset($_PSOT['state'])             ? $_POST['state']                       :  1;
            $object->gym               = isset($_POST['gym'])               ? $_POST['gym']                         :  0;
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
                $html = '<p>'.htmlentities($object->number_group).' - '.htmlentities($object->type_group).' </p>';
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
                <table cellpadding="4" cellspacing="4" style="margin-bottom: 20px; width: 100%;">
                    <tr>
                        <td style="width: 33.33333333%;">
                            <p>'.self::group_type($line->type_group).'</p> 
                        </td>
                        <td style="width: 33.33333333%;">
                            <p>'.$line->training_sessions_group.'/Week</p>
                        </td>
                        <td style="text-align: right; width: 33.33333333%;">
                            <button class="btn btn-square btn-success m-2" 
                                    onclick="add_subscription('.$line->id_group.')" 
                                    title="Subscribe">
                                <i class="fa fa-edit"></i>
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

    public static function display_list_member($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td><h3 style="float: left;">Groups</h3></td>
            <td></td>
            <td style="text-align: right;"></td>
        </tr>
        </table>        
        <table style="width: 100%; text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
            <tr>
                <th style="text-align: left; width: 33.33333333333%;">TYPE</th>
                <th style="text-align: left; width: 33.33333333333%;">NUMBER SESSION</th>
                <th style="text-align: right; width: 33.33333333333%;"></th>
            </tr>
        </table>';

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

    public static function display_line_manager($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '
                <table cellpadding="4" cellspacing="4" style="margin-bottom: 20px; width: 100%;">
                    <tr>
                        <td style="width: 33.33333333%;">
                            <p>'.self::group_type($line->type_group).'</p> 
                        </td>
                        <td style="width: 33.33333333%;">
                            <p>'.$line->training_sessions_group.'/Week</p>
                        </td>
                        <td style="text-align: right; width: 33.33333333%;">
                        <button class="btn btn-square btn-success m-2" onclick="list_group_memeber('.$line->id_group.')" title="View Members">
                            <i class="fa fa-search"></i>
                        </button>
                        <button class="btn btn-square btn-success m-2" onclick="consult_group('.$line->id_group.')" title="Consult">
                            <i class="fa fa-file"></i>
                        </button>
                        <button class="btn btn-square btn-danger m-2" onclick="delete_group('.$line->id_group.')"title="Dlelete" >
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

    public static function display_list_manager($list) 
    {
        $html = '
        <table style ="width: 100%;">
        <tr>
            <td><h3 style="float: left;">Groups</h3></td>
            <td></td>
            <td style="text-align: right;"></td>
        </tr>
        </table>        
        <table style="width: 100%; text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
            <tr>
                <th style="text-align: left; width: 33.33333333333%;">TYPE</th>
                <th style="text-align: left; width: 33.33333333333%;">NUMBER SESSION</th>
                <th style="text-align: right; width: 33.33333333333%;"></th>
            </tr>
        </table>';

        try {
            if(isset($list) && $list !== false) {
                while($line = $list->fetchObject()) {
                    $html .= self::display_line_manager($line);
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
                <table cellpadding="4" cellspacing="4" style="margin-bottom: 20px; width: 100%;">
                    <tr>
                        <td style="width: 33.33333333%;">
                            <p>'.self::group_type($line->type_group).'</p> 
                        </td>
                        <td style="width: 33.33333333%;">
                            <p>'.$line->training_sessions_group.'/Week</p>
                        </td>
                        <td style="text-align: right; width: 33.33333333%;">
                        <button class="btn btn-square btn-success m-2" onclick="list_group_memeber('.$line->id_group.')" title="View Members">
                            <i class="fa fa-search"></i>
                        </button>
                    </tr>
                </table>';
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
            <td><h3 style="float: left;">Groups</h3></td>
            <td></td>
            <td style="text-align: right;"></td>
        </tr>
        </table>        
        <table style="width: 100%; text-align: right; border-bottom: solid 1px #ccc; padding-bottom: 10px; margin-bottom: 10px;">
            <tr>
                <th style="text-align: left; width: 33.33333333333%;">TYPE</th>
                <th style="text-align: left; width: 33.33333333333%;">NUMBER SESSION</th>
                <th style="text-align: right; width: 33.33333333333%;"></th>
            </tr>
        </table>';

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

    public static function display_line($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '<table cellpadding="4" cellspacing="4" style="margin-bottom: 20px;">
            </td>
            <td>
            <h3>'.htmlentities(self::group_type($line->type_group)).' '.htmlentities($line->training_sessions_group).'</h3>
            </td>
            <td style="text-align: right;">
            <button class="btn btn-square btn-success m-2" onclick="consult_group('.$line->id_group.')" >
            <i class="fa fa-file"></i>
            </button>
            <button class="btn btn-square btn-danger m-2" onclick="delete_group('.$line->id_group.')" >
            <i class="fa fa-trash"></i>
            </button>
            </td>
            </table>';
                //$html = '<p>'.htmlentities($line->number_group).' - '.htmlentities($line->type_group).' </p>';
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
            <td><h3 style="float: left;">Groups</h3></td>
            <td>
            <input class="form-control bg-dark border-0" type="search" placeholder="Search">
            </td>
            <td style="text-align: right;">
                <input type="button" class="btn btn-outline-primary m-2" value="+" onclick="load_content(\'div#display-tabs\', \'Adding_group.php\');" />
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

    public static function group_type($code)
    {
        $label = '';

        switch($code)
        {
            case 1: $label = 'Beginner';    break;
            case 2: $label = 'Regular';     break;
            case 3: $label = 'Powerlifter'; break;
            case 4: $label = 'Women';       break;
        }
    
        return $label;
    }
}