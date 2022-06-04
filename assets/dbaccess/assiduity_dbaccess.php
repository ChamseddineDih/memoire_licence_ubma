<?php
// Classe contenant les opérations CRUD sur la table assiduity
class assiduity_dbaccess
{
    public static function add($new_assiduity)
    {
        $opstate = false;
        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('INSERT INTO `assiduity`(`subscription_assiduity`) 
                                        VALUES (:sub)');
            $stmt->bindParam(':sub', $new_assiduity->subscription);
            $stmt->execute();
            
            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }
        return $opstate;
    }

    public static function List($first_date, $last_date)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();

            /*
            $stmt = $pdo->prepare('SELECT a.*, s.*, p.*, g.* 
                                     FROM `group` g, `person` p, `subscription` s, `assiduity` a
                                    WHERE  (a.`start_session_assiduity` BETWEEN :fd and :ld) AND
                                           a.`subscription_assiduity` = s.`id_subscription` AND 
                                           s.`member_subscription`   = p.`id_person`       AND
                                           s.`group_subscription`    = g.`id_group`');
            */
            $stmt = $pdo->prepare("SELECT * FROM `assiduity` WHERE `start_session_assiduity` BETWEEN :fd and :ld");
            $stmt->bindParam(':fd', $first_date);
            $stmt->bindParam(':ld', $last_date);
            
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt : $result;
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function search($keyWords)
    {
        $result = NULL;

        try {
            $KeyWords = '"%'.$KeyWords.'%"';
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT a.*, s.*, p.*, g.* 
                                     FROM `group` g, `person` p, `subscription` s, `assiduity` a
                                    WHERE  (a.`start_session_assiduity` BETWEEN :fd and :ld) AND
                                           a.`subscription_assiduity` = s.`id_subscription`  AND 
                                           s.`member_subscription`    = p.`id_person         AND
                                           s.`group_subscription`     = g.`id_group`         AND
                                           p.type_person = 1                                 AND
                                          (s.`tutor_subscription`                            LIKE :kwr OR
                                           s.`phone_tutor_subscription`                      LIKE :kwr OR
                                           p.`access_number_person`                          LIKE :kwr OR 
                                           p.`first_name_person`                             LIKE :kwr OR 
                                           p.`last_name_person`                              LIKE :kwr OR 
                                           p.`mobile_person`                                 LIKE :kwr OR 
                                           p.`email_person`                                  LIKE :kwr OR 
                                           p.`address_person`                                LIKE :kwr OR 
                                           p.`type_person`                                   LIKE :kwr OR
                                           g.`number_group`)');
            $stmt->bindParam(':fd', $first_date);
            $stmt->bindParam(':ld', $last_date);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt->fetchObject() : $result;
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
            $stmt = $pdo->prepare('DELETE FROM `assiduity` WHERE `id_assiduity` = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function modify($assiduity)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('UPDATE `assiduity` 
                                      SET `end_session_assiduity` = :ese
                                    WHERE `id_assiduity`          = :id');
            $stmt->bindParam(':id' , $assiduity->id);
            $stmt->bindParam(':ese', $assiduity->end_session);

            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }
}