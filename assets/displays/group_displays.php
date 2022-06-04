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

    public static function display_line($line)
    {
        $html = '';

        try {
            if(isset($line) && $line !== false) {
                $html = '<p>'.htmlentities($line->number_group).' - '.htmlentities($line->type_group).' </p>';
            }
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);   
        }

        return $html;
    }

    public static function display_list($list) 
    {
        $html = '';

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