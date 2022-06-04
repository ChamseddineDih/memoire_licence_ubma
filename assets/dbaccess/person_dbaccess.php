<?php
// Classe contenant les opérations CRUD sur la table person
class person_dbaccess
{
    private static function generate_list_query($state_person, $type_person, $access_number_gym)
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

    public static function add($new_person)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('INSERT INTO `person`(`access_number_person`, 
                                                        `first_name_person`, 
                                                        `last_name_person`, 
                                                        `photo_person`, 
                                                        `birthday_person`, 
                                                        `mobile_person`, 
                                                        `email_person`, 
                                                        `address_person`, 
                                                        `postal_code_person`, 
                                                        `gender_person`, 
                                                        `username_person`, 
                                                        `password_person`,
                                                        `type_person`, 
                                                        `state_person`) 
                                    VALUES (:acn, :fnm, :lnm, :pht, :brd, :mob, :eml, :adr, :pcd, :gnd, 
                                            :usn, :psw, :typ, :sta)');
            $stmt->bindParam(':acn', $new_person->access_number);
            $stmt->bindParam(':fnm', $new_person->first_name);
            $stmt->bindParam(':lnm', $new_person->last_name);
            $stmt->bindParam(':pht', $new_person->photo);
            $stmt->bindParam(':brd', $new_person->birthday);
            $stmt->bindParam(':mob', $new_person->mobile);
            $stmt->bindParam(':eml', $new_person->email);
            $stmt->bindParam(':adr', $new_person->address);
            $stmt->bindParam(':pcd', $new_person->postal_code);
            $stmt->bindParam(':gnd', $new_person->gender);
            $stmt->bindParam(':usn', $new_person->username);
            $stmt->bindParam(':psw', $new_person->password);
            $stmt->bindParam(':typ', $new_person->type);
            $stmt->bindParam(':sta', $new_person->state);

            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function list($state_person, $type_person, /*$access_number_gym*/)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT *
                                     FROM `person`
                                    WHERE `state_person`      = :stt');
            $stmt->bindParam(':stt', $state_person);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt : $resultat;
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function search($KeyWords, $state_person, $type_person)
    {
        $result = NULL;

        try {
            $KeyWords = '"%'.$KeyWords.'%"';
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT *
                                     FROM `person`
                                    WHERE `state_person`      = :stt             AND
                                          `type_person`       = :typ 
                                          (`first_name_person`         LIKE :kwd OR 
                                           `last_name_person`          LIKE :kwd OR 
                                           `mobile_person`             LIKE :kwd OR 
                                           `email_person`              LIKE :kwd)');
            $stmt->bindParam(':stt', $state_person);
            $stmt->bindParam(':kwd', $KeyWords);
            $stmt->bindParam(':typ', $type_person);
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
            $stmt = $pdo->prepare('DELETE FROM `person` WHERE `id_person` = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function modify_state($id, $state)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('UPDATE `person`
                                      SET `state_person`    = :stt 
                                    WHERE `id_person`       = :id');
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

    public static function modify($modifaited_person)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('UPDATE `person`
                                      SET `first_name_person`    = :fnm, 
                                          `last_name_person`     = :lnm, 
                                          `photo_person`         = :pht, 
                                          `birthday_person`      = :brd, 
                                          `mobile_person`        = :mob, 
                                          `email_person`         = :eml, 
                                          `address_person`       = :adr, 
                                          `postal_code_person`   = :pcd, 
                                          `username_person`      = :usn, 
                                          `password_person`      = :psw 
                                    WHERE `id_person`            = :id');
            $stmt->bindParam(':id' , $modifaited_person->id);
            $stmt->bindParam(':fnm', $modifaited_person->first_name);
            $stmt->bindParam(':lnm', $modifaited_person->last_name);
            $stmt->bindParam(':pht', $modifaited_person->photo);
            $stmt->bindParam(':brd', $modifaited_person->birthdat);
            $stmt->bindParam(':mob', $modifaited_person->mobile);
            $stmt->bindParam(':eml', $modifaited_person->email);
            $stmt->bindParam(':adr', $modifaited_person->address);
            $stmt->bindParam(':pcd', $modifaited_person->postal_code);
            $stmt->bindParam(':usn', $modifaited_person->username);
            $stmt->bindParam(':psw', $modifaited_person->password);

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
            $stmt = $pdo->prepare('SELECT * FROM `person` WHERE `id_person` = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt->fetchObject() : $result;
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function login($username, $password)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();
           /* $cmd = 'SELECT * FROM `person` WHERE `username_person` LIKE "'.$username.'" AND  `password_person`  LIKE "'.$password.'"';
            $stmt = $pdo->prepare($cmd);*/
            $stmt = $pdo->prepare('SELECT * FROM `person` WHERE  `username_person` = :usr 
                                                            AND  `password_person`  = :psw');
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
}