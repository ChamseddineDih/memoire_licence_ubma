<?php
// Classe contenant les opérations CRUD sur la table subscription
class subscription_dbaccess
{
    public static function add($new_subscription)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('INSERT INTO `subscription`
                                              (`number_subscription`, 
                                               `period_subscription`, 
                                               `front_idcard_subscription`, 
                                               `back_idcard_subscription`, 
                                               `medical_form_subscription`, 
                                               `parental_authorization_subscription`, 
                                               `tutor_subscription`,
                                               `phone_tutor_subscription`, 
                                               `date_begining_subscription`, 
                                               `date_ending_subscription`, 
                                               `member_subscription`,  
                                               `group_subscription`) 
                                       VALUES (:num, :prd, :fid, :bid, :mdf, :pat, :ttr, 
                                               :trp, :dbg, :den,  :mbr, :grp)');
            $stmt->bindParam(':num', $new_subscription->number);
            $stmt->bindParam(':prd', $new_subscription->period);
            $stmt->bindParam(':fid', $new_subscription->front_idcard);
            $stmt->bindParam(':bid', $new_subscription->back_idcard);
            $stmt->bindParam(':mdf', $new_subscription->medical_form);
            $stmt->bindParam(':pat', $new_subscription->parental_authorization);
            $stmt->bindParam(':ttr', $new_subscription->tutor);
            $stmt->bindParam(':trp', $new_subscription->phone_tutor);
            $stmt->bindParam(':dbg', $new_subscription->date_begining);
            $stmt->bindParam(':den', $new_subscription->date_ending);
            $stmt->bindParam(':mbr', $new_subscription->member);
            $stmt->bindParam(':grp', $new_subscription->group);

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
            $stmt = $pdo->prepare('DELETE FROM `subscription` WHERE `id_subscription` = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function modify($modifaited_subscription)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('UPDATE `subscription` 
                                      SET `period_subscription`                  = :psu,
                                          `front_idcard_subscription`            = :fid,
                                          `back_idcard_subscription`             = :bid,
                                          `medical_form_subscription`            = :mdf,
                                          `parental_authorization_subscription`  = :pat,
                                          `tutor_subscription`                   = :ttr,
                                          `phone_tutor_subscription`             = :ptr,
                                          `date_begining_subscription`           = :dbg,
                                          `date_ending_subscription`             = :den
                                    WHERE `id_subscription`                      = :id');
            $stmt->bindParam(':id' , $modifaited_subscription->id);
            $stmt->bindParam(':psu', $modifaited_subscription->period_subscription);
            $stmt->bindParam(':fid', $modifaited_subscription->front_idcard);
            $stmt->bindParam(':bid', $modifaited_subscription->back_idcard);
            $stmt->bindParam(':mdf', $modifaited_subscription->medical_form);
            $stmt->bindParam(':pat', $modifaited_subscription->parental_authorization);
            $stmt->bindParam(':ttr', $modifaited_subscription->tutor);
            $stmt->bindParam(':ptr', $modifaited_subscription->phone_tutor);
            $stmt->bindParam(':dbg', $modifaited_subscription->date_begining);
            $stmt->bindParam(':den', $modifaited_subscription->date_ending);

            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }


        return $opstate;
    }

}