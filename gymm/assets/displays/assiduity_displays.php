<?php
// Classe contenant les opérations CRUD sur la table assiduity
class assiduity_displays
{
    public static function generate_object()
    {
        $object = NULL;

        try {
            $object                = new assiduity();
            $object->id            = isset($_POST['id'])    ? $_POST['id']    : 2;
            $object->start_session = isset($_POST['start']) ? $_POST['start'] : date('Y-m-d H:i:s');
            $object->end_session   = (isset($_POST['end']) && strlen($_POST['end']) > 0) ? $_POST['end'] : date('Y-m-d H:i:s');
            $object->subscription  = isset($_POST['sub'])   ? $_POST['sub']   : 0;
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
                $html = '<p>'.htmlentities($object->start_session_assiduity).' - '.htmlentities($object->end_session_assiduity).' </p>';
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
                <form action="assets/behindcode/assiduity/modify.php" method="post"> 
                <input type="hidden" name="id" value="'.$line->id_assiduity.'" readonly required>
                <input type="text" id="start'.$line->id_assiduity.'" readonly name="start" value="'.htmlentities($line->start_session_assiduity).'"> - 
                <input type="text" id="end'.$line->id_assiduity.'" readonly name="end" value="'.htmlentities($line->end_session_assiduity).'"> 
                <button type="submit" class="btn btn-square btn-success m-2" >
                <i class="fa fa-edit"></i>
                </button>
                <button class="btn btn-square btn-danger m-2" onclick="delete_assiduity('.$line->id_assiduity.')" >
                <i class="fa fa-trash"></i>
                </button>
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
            <td><h3 style="float: left;">Assiduity</h3></td>
            <td>
            </td>
            <td style="text-align: right;">
                <input type="button" class="btn btn-outline-primary m-2" value="+" onclick="load_content(\'div#display-tabs\', \'Adding_assiduity.php\');" />
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
}