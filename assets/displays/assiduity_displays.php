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
            $object->end_session   = isset($_POST['end'])   ? $_POST['end']   : date('Y-m-d H:i:s');
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
                $html = '<p>'.htmlentities($line->start_session_assiduity).' - '.htmlentities($line->end_session_assiduity).' </p>';
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_list($list) 
    {
        $html = '<button type="button" class="btn btn-outline-primary m-2">Primary</button>';

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