<?php
// Classe contenant les opérations CRUD sur la table contract
class contract_dbaccess
{
    public static function add($new_contract)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('INSERT INTO `contract`
                                              (`number_contract`,
                                               `salary_contract`, 
                                               `evaluation_contract`,  
                                               `date_begining_contract`, 
                                               `date_ending_contract`, 
                                               `type_contract`,  
                                               `gym_contract`,  
                                               `worker_contract`) 
                                       VALUES (:num, :psu, :vlt, :dbg, :den, :typ, :msb, :wrk)');
            $stmt->bindParam(':num', $new_contract->number);                           
            $stmt->bindParam(':psu', $new_contract->salary);
            $stmt->bindParam(':vlt', $new_contract->evaluation);
            $stmt->bindParam(':dbg', $new_contract->date_begining);
            $stmt->bindParam(':den', $new_contract->date_ending);
            $stmt->bindParam(':typ', $new_contract->type);
            $stmt->bindParam(':msb', $new_contract->gym);
            $stmt->bindParam(':wrk', $new_contract->worker);

            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function delete($id)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('DELETE FROM `contract` WHERE `id_contract` = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function modify($modifaited_contract)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('UPDATE `contract` 
                                      SET `salary_contract`             = :psu,
                                          `evaluation_contract`         = :vlt,
                                          `date_begining_contract`      = :dbg,
                                          `date_ending_contract`        = :den,
                                          `type_contract`               = :typ
                                    WHERE `id_contract`                 = :id');
            $stmt->bindParam(':id' , $modifaited_contract->id);
            $stmt->bindParam(':psu', $modifaited_contract->salary);
            $stmt->bindParam(':vlt', $modifaited_contract->evaluation);
            $stmt->bindParam(':dbg', $modifaited_contract->date_begining);
            $stmt->bindParam(':den', $modifaited_contract->date_ending);
            $stmt->bindParam(':typ', $modifaited_contract->type);

            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }


        return $opstate;
    }

    public static function list($state_worker)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT * FROM `contract`');
            /* $stmt = $pdo->prepare('SELECT c.*, g.*, w.*
                                     FROM `gym` g, `worker` w, `contract` c
                                    WHERE p.`state_worker`     = 1     AND 
                                          g.`state_worker`     = :stt  AND  
                                          c.`worker_contract`  = w.`id_worker`
                                          c.`gym_contract`     = g.`id_gym`');
            $stmt->bindParam(':stt', $state_worker); */
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt : $resultat;
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }


        return $result;
    }

    public static function consult($id)
    {
        $result = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT * FROM `contract` WHERE `id_contract` = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt->fetchObject() : $result;
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }
}