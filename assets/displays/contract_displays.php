
<?php
// Classe contenant les opérations CRUD sur la table contract
class contract_displays
{
    public static function generate_object()
    {
        $object = NULL;

        try {
            $object                         = new contract();     
            $object->id                     = isset($_POST['id'])            ? $_POST['id']                       :  4;
            $object->number                 = isset($_POST['number'])        ? htmlentities($_POST['number'])     : strings_lib::generate_number();
            $object->salary                 = isset($_POST['salary'])        ? $_POST['salary']                   :  1000;
            $object->evaluation             = isset($_POST['evaluation'])    ? htmlentities($_POST['evaluation']) : '';
            $object->date_begining          = isset($_POST['date_begining']) ? $_POST['date_begining']            : date('Y-m-d');
            $object->date_ending            = isset($_POST['date_ending'])   ? $_POST['date_ending']              : strlen(NULL);
            $object->add_date               = isset($_POST['add_date'])      ? $_POST['add_date']                 : date('Y-m-d');
            $object->type                   = isset($_POST['type'])          ? $_POST['type']                     :  0;
            $object->gym                    = isset($_POST['gym'])           ? $_POST['gym']                      :  0;
            $object->worker                 = isset($_POST['worker'])        ? $_POST['worker']                   :  0;
            //(isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0))
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
                $html = '<p>'.htmlentities($object->number_contract).' - '.htmlentities($object->salary_contract).' </p>';
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
                $html = '<p>'.htmlentities($line->number_contract).' - '.htmlentities($line->salary_contract).' </p>';
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