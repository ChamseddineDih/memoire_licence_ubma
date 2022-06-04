<?php
// Classe contenant les opérations CRUD sur la table group
class group_dbaccess
{
    public static function add($new_group)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('INSERT INTO `group`( `number_group`, 
                                                        `training_sessions_group`, 
                                                        `limit_number_group`, 
                                                        `link_workout_group`, 
                                                        `video_workout_group`, 
                                                        `type_group`, 
                                                        `state_group`, 
                                                        `gym_group`) 
                                    VALUES (:num, :trs, :lmn, :lnw, :vdw, :typ, :sta, :gym)');
            $stmt->bindParam(':num', $new_group->number);
            $stmt->bindParam(':trs', $new_group->training_session);
            $stmt->bindParam(':lmn', $new_group->limit_number);
            $stmt->bindParam(':lnw', $new_group->link_workout);
            $stmt->bindParam(':vdw', $new_group->video_workout);
            $stmt->bindParam(':typ', $new_group->type);
            $stmt->bindParam(':sta', $new_group->state);
            $stmt->bindParam(':gym', $new_group->gym);

            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function list($id)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT * FROM `group` WHERE `state_group` = 1 AND `gym_group` = :id');
            /*$stmt = $pdo->prepare('SELECT g.*, gr.*
                                     FROM `gym` g, `group` gr
                                    WHERE gr.`state_group` = 1    AND 
                                          g.`state_group`    = :stt AND  
                                          g.`number_group`  = p.`id_gym`');*/
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt : $result;
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
            $stmt = $pdo->prepare('DELETE FROM `group` WHERE `id_group` = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function modify_state($id , $state)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('UPDATE `group` 
                                      SET `state_group` = :stt
                                    WHERE `id_group`    = :id');
            $stmt->bindParam(':id' , $id);
            $stmt->bindParam(':stt', $state);

            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function modify($modifaited_group)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('UPDATE `group` 
                                      SET `training_sessions_group` = :trs,
                                          `limit_number_group`      = :lmn,
                                          `link_workout_group`      = :lnw,
                                          `video_workout_group`     = :vdw,
                                          `type_group`              = :typ
                                    WHERE `id_group`                = :id');
            $stmt->bindParam(':id' , $modifaited_group->id);
            $stmt->bindParam(':trs', $modifaited_group->training_sessions);
            $stmt->bindParam(':lmn', $modifaited_group->limit_number);
            $stmt->bindParam(':lnw', $modifaited_group->link_workout);
            $stmt->bindParam(':vdw', $modifaited_group->video_workout);
            $stmt->bindParam(':typ', $modifaited_group->type);

            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }
        return $opstate;
    }

    public static function consult($id)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT * FROM `group` WHERE `id_group` = :id');
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