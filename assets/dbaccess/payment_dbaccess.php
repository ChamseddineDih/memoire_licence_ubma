<?php
// Classe contenant les opérations CRUD sur la table payment
class payment_dbaccess
{
    public static function add($new_payment)
    {
        $opstate = false;

        try {           
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('INSERT INTO `payment` 
                                              (`number_payment`, 
                                               `note_payment`, 
                                               `amount_payment`, 
                                               `deposit_payment`, 
                                               `rest_payment`, 
                                               `complet_date_payment`, 
                                               `type_payment`, 
                                               `contract_payment`,
                                               `subscription_payment`)
                                        VALUES(:num, :nte, :amn, :dps, :rst, :cpd, :typ, :cnt, :sbc)');
            $stmt->bindParam(':num', $new_payment->number);
            $stmt->bindParam(':nte', $new_payment->note);
            $stmt->bindParam(':amn', $new_payment->amount);
            $stmt->bindParam(':dps', $new_payment->deposit);
            $stmt->bindParam(':rst', $new_payment->rest);
            $stmt->bindParam(':cpd', $new_payment->complet_date);
            $stmt->bindParam(':typ', $new_payment->type);
            $stmt->bindParam(':cnt', $new_payment->contract);
            $stmt->bindParam(':sbc', $new_payment->subscription);
            $stmt->execute();
            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function list($idc, $ids)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT *
                                     FROM `payment`
                                    WHERE  `contract_payment`     = :idc                OR
                                           `subscription_payment` = :ids');
            /*$stmt = $pdo->prepare('SELECT g.*, p.*, c.*, w.*, pr.*, s.*, gr.*
                                     FROM `gym` g, `payment` p, `contract` c, `worker` w, 
                                          `person` pr, `subscription` s, `group` gr       
                                    WHERE  c.`gym_contract`         = p.`id_gym`          AND
                                           c.`worker_contract`      = w.`id_worker`       AND
                                           p.`contract_payment`     = c.`id_payment`      AND
                                           p.`subscription_payment` = s.`id_subscription` AND
                                           s.`member_subscription`  = p.`id_person`       AND
                                           s.`group_subscription`   = gr.`id_group`       AND
                                           gr.`gym_group`           = g.`id_gym`          AND
                                          (p.`contract_payment`     = :idc                OR
                                           p.`subscription_payment` = :ids)');*/
            $stmt->bindParam(':idc', $idc);
            $stmt->bindParam(':ids', $ids);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt : $resultat;
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function search($KeyWord)
    {
        $result = NULL;

        try {
            $KeyWords = '"%'.$KeyWords.'%"';
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT g.*, p.*, c.*, w.*, pr.*, s*, gr*
                                     FROM `gym` g, `payment` p, `contract` c, `worker` w, 
                                          `person` pr, `subscription` s, `group` gr       AND
                                    WHERE  c.`gym_contract`         = p.`id_gym`          AND
                                           c.`worker_contract`      = w.`id_worker`       AND
                                           p.`contract_payment`     = c.`id_payment`      AND
                                           p.`subscription_payment` = s.`id_subscription` AND
                                           s.`member_subscription`  = p.`id_person`       AND
                                           s.`group_subscription`   = gr.`id_group`       AND
                                           gr.`gym_group`           = g.`id_gym`          AND
                                           p.`number_payment`       = :num                AND
                                          (p.`number_payment`                    LIKE :kwr OR 
                                           p.`note_payment`                      LIKE :kwr OR
                                           p.`amount_paymen`                     LIKE :kwr OR
                                           p.`deposit_payment`                   LIKE :kwr OR
                                           p.`rest_payment`                      LIKE :kwr OR
                                           p.`complet_date_payment`              LIKE :kwr OR
                                           p.`type_payment`                      LIKE :kwr OR
                                           pr.`first_name_person`                LIKE :kwr OR
                                           pr.`last_name_person`                 LIKE :kwr OR
                                           w.`first_name_person`                 LIKE :kwr OR
                                           w.`last_name_person`                  LIKE :kwr OR
                                           gr.`type_group`)');
            $stmt->bindParam(':num', $number_payment);
            $stmt->bindParam(':kwr', $KeyWord);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt : $resultat;
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function delete($id)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('DELETE FROM `payment` WHERE `id_payment` = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function modify($modifaited_payment)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('UPDATE `payment` SET `note_payment`        = :nte,
                                                        `amount_payment`      = :amn,
                                                        `deposit_payment`     = :dps,
                                                        `rest_payment`        = :rst,
                                                        `complet_date_payment`= :cpd
                                                  WHERE `id_payment` = :id');
            $stmt->bindParam(':id' , $modifaited_payment->id);
            $stmt->bindParam(':nte', $modifaited_payment->note);
            $stmt->bindParam(':amn', $modifaited_payment->amount);
            $stmt->bindParam(':dps', $modifaited_payment->deposit);
            $stmt->bindParam(':rst', $modifaited_payment->rest);
            $stmt->bindParam(':cpd', $modifaited_payment->complet_date);

            $stmt->execute();
            echo $stmt->rowCount();
            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function consult($id)
    {
        $result = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT * FROM `payment` WHERE `id_payment` = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt->fetchObject() : $resultat;
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }
}