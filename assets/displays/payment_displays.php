<?php
// Classe contenant les opérations CRUD sur la table payment
class payment_displays
{
    public static function generate_object()
    {
        $object = NULL;

        try {
            $object               = new payment();
            $object->id           = isset($_POST['id'])           ? $_POST['id']                   :  1;
            $object->number       = isset($_POST['number'])       ? htmlentities($_POST['number']) : strings_lib::generate_number();
            $object->note         = isset($_POST['note'])         ? htmlentities($_POST['note'])   : 'C que pour tester : '.strings_lib::generate_number();
            $object->amount       = isset($_POST['amount'])       ? $_POST['amount']               :  0;
            $object->deposit      = isset($_POST['deposit'])      ? $_POST['deposit']              :  0;
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
                $html = '<p>'.htmlentities($line->amount_payment).' - '.htmlentities($line->number_payment).' </p>';
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