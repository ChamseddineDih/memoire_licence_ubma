<?php
// Classe contenant les opérations CRUD sur la table gym
class gym_displays
{
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
            $object->map           = isset($_POST['map'])           ? htmlentities($_POST['map'])           : 'Default Map';
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
                $html = '<p>'.htmlentities($line->name_gym).' - '.htmlentities($line->logo_gym).' </p>';
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