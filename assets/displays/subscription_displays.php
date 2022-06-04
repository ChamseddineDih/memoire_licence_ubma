<?php
// Classe contenant les opérations CRUD sur la table subscription
class subscription_displays
{
    public static function generate_object()
    {
        $object = NULL;

        try {
            $object                         = new subscription();     
            $object->id                     = isset($_POST['id'])                     ? $_POST['id']                                   :  2;
            $object->number                 = isset($_POST['number'])                 ? htmlentities($_POST['number'])                 : strings_lib::generate_number();
            $object->period                 = isset($_POST['period'])                 ? $_POST['period']                               :  0;
            $object->front_idcard           = isset($_POST['front_idcard'])           ? htmlentities($_POST['front_idcard'])           : '';
            $object->back_idcard            = isset($_POST['back_idcard'])            ? htmlentities($_POST['back_idcard'])            : '';
            $object->medical_form           = isset($_POST['medical_form'])           ? htmlentities($_POST['medical_form'])           : '';
            $object->parental_authorization = isset($_POST['parental_authorization']) ? htmlentities($_POST['parental_authorization']) : '';
            $object->tutor                  = isset($_POST['tutor'])                  ? htmlentities($_POST['tutor'])                  : '';
            $object->phone_tutor            = isset($_POST['phone_tutor'])            ? htmlentities($_POST['phone_tutor'])            : '';
            $object->date_begining          = isset($_POST['date_begining'])          ? $_POST['date_begining']                        : date('Y:m:d');
            $object->date_ending            = isset($_POST['date_ending'])            ? $_POST['date_ending']                          : date('0:0:0');
            $object->add_date               = isset($_POST['add_date'])               ? $_POST['add_date']                             : date('Y:m:d');
            $object->member                 = isset($_POST['member'])                 ? $_POST['member']                               :  0;
            $object->group                  = isset($_POST['group'])                  ? $_POST['group']                                :  0;
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
                $html = '<p>'.htmlentities($object->number_subscription).' - '.htmlentities($object->period_subscription).' </p>';
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
                $html = '<p>'.htmlentities($line->number_subscription).' - '.htmlentities($line->period_subscription).' </p>';
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