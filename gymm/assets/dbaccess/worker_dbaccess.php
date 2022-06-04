<?php
// Classe contenant les opérations CRUD sur la table worker
class worker_dbaccess
{
    private static function generate_list_query($state_worker, $type_worker, $access_number_gym)
    {
        $query = '';

        try {
            if(strlen($access_number_gym) > 0)
            {
                $query .= '';
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        return $query;
    }

    public static function add($new_worker)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('INSERT INTO `worker`(`access_number_worker`, 
                                                        `first_name_worker`, 
                                                        `last_name_worker`, 
                                                        `photo_worker`, 
                                                        `birthday_worker`, 
                                                        `mobile_worker`, 
                                                        `email_worker`, 
                                                        `address_worker`, 
                                                        `postal_code_worker`, 
                                                        `gender_worker`, 
                                                        `username_worker`, 
                                                        `password_worker`,
                                                        `type_worker`, 
                                                        `state_worker`
                                                        `idg`) 
                                    VALUES (:acn, :fnm, :lnm, :pht, :brd, :mob, :eml, :adr, :pcd, :gnd, 
                                            :usn, :psw, :typ, :sta :idg)');
            $stmt->bindParam(':acn', $new_worker->access_number);
            $stmt->bindParam(':fnm', $new_worker->first_name);
            $stmt->bindParam(':lnm', $new_worker->last_name);
            $stmt->bindParam(':pht', $new_worker->photo);
            $stmt->bindParam(':brd', $new_worker->birthday);
            $stmt->bindParam(':mob', $new_worker->mobile);
            $stmt->bindParam(':eml', $new_worker->email);
            $stmt->bindParam(':adr', $new_worker->address);
            $stmt->bindParam(':pcd', $new_worker->postal_code);
            $stmt->bindParam(':gnd', $new_worker->gender);
            $stmt->bindParam(':usn', $new_worker->username);
            $stmt->bindParam(':psw', $new_worker->password);
            $stmt->bindParam(':typ', $new_worker->type);
            $stmt->bindParam(':sta', $new_worker->state);
            $stmt->bindParam(':idg', $new_worker->idg);
            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function list($state)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT *
                                     FROM `worker`
                                    WHERE `state_worker`      = :stt');
            $stmt->bindParam(':stt', $state);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt : $result;
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function list_by_gym($idg)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT DISTINCT * FROM `worker` WHERE `idg` = :idg');
            /*$stmt = $pdo->prepare('SELECT DISTINCT w.* 
                                     FROM `gym` g, `contract` c, `worker` w
                                    WHERE g.`id_gym` = :idg AND
                                          g.`id_gym` = c.`gym_contract` AND
                                          c.`worker_contract` = w.`id_worker`');*/
            $stmt->bindParam(':idg', $idg);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt : $result;
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function search($KeyWords, $state_worker)
    {
        $result = NULL;

        try {
            $type_worker = 3;
            $KeyWords = '"%'.$KeyWords.'%"';
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT *
                                     FROM `worker`
                                    WHERE `state_worker`      = :stt             AND 
                                          (`first_name_worker`         LIKE :kwd OR 
                                          `last_name_worker`           LIKE :kwd OR 
                                          `mobile_worker`              LIKE :kwd OR 
                                          `email_worker`               LIKE :kwd)');
            $stmt->bindParam(':stt', $state_worker);
            $stmt->bindParam(':kwd', $KeyWords);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt : $result;
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function modify($modifaited_worker)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('UPDATE `worker`
                                      SET `first_name_worker`    = :fnm, 
                                          `last_name_worker`     = :lnm, 
                                          `photo_worker`         = :pht, 
                                          `birthday_worker`      = :brd, 
                                          `mobile_worker`        = :mob, 
                                          `email_worker`         = :eml, 
                                          `address_worker`       = :adr, 
                                          `postal_code_worker`   = :pcd, 
                                          `username_worker`      = :usn, 
                                          `password_worker`      = :psw 
                                    WHERE `id_worker`            = :id');
            $stmt->bindParam(':id' , $modifaited_worker->id);
            $stmt->bindParam(':fnm', $modifaited_worker->first_name);
            $stmt->bindParam(':lnm', $modifaited_worker->last_name);
            $stmt->bindParam(':pht', $modifaited_worker->photo);
            $stmt->bindParam(':brd', $modifaited_worker->birthdat);
            $stmt->bindParam(':mob', $modifaited_worker->mobile);
            $stmt->bindParam(':eml', $modifaited_worker->email);
            $stmt->bindParam(':adr', $modifaited_worker->address);
            $stmt->bindParam(':pcd', $modifaited_worker->postal_code);
            $stmt->bindParam(':usn', $modifaited_worker->username);
            $stmt->bindParam(':psw', $modifaited_worker->password);

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
        $result = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT * FROM `worker` WHERE `id_worker` = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt->fetchObject() : $result;
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function modify_state($id, $state)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('UPDATE `worker`
                                      SET `state_worker`         = :stt 
                                    WHERE `id_worker`            = :id');
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

    public static function login($username, $password)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT * FROM `worker` WHERE `username_worker` = :usr 
                                                            AND `password_worker`  = :psw');
            $stmt->bindParam(':usr', $username);
            $stmt->bindParam(':psw', $password);
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
            $stmt = $pdo->prepare('DELETE FROM `worker` WHERE `id_worker` = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }
}