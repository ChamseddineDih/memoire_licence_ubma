<?php
// Classe contenant les opérations CRUD sur la table gym
class gym_dbaccess
{
    public static function add($new_gym)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('INSERT INTO `gym`(`access_number_gym`, 
                                                     `name_gym`, 
                                                     `cover_gym`, 
                                                     `logo_gym`, 
                                                     `description_gym`, 
                                                     `phone_gym`, 
                                                     `fax_gym`, 
                                                     `address_gym`, 
                                                     `postal_code_gym`, 
                                                     `map_gym`, 
                                                     `mobile_gym`, 
                                                     `email_gym`, 
                                                     `nrc_gym`, 
                                                     `tin_gym`, 
                                                     `sin_gym`, 
                                                     `ai_gym`, 
                                                     `bsi_gym`, 
                                                     `type_gym`, 
                                                     `manager_gym`) 
                                    VALUES (:acn, :nam, :cvr, :lgo, :drp, :phn, :fax, :adr, 
                                            :pcd, :map, :mob, :eml, :nrc, :tin, :sig, :aig, 
                                            :bsi, :typ, :mng);
                                 UPDATE `person` SET `type_person` = 2 WHERE `id_person` = :mng');
            $stmt->bindParam(':acn', $new_gym->access_number);
            $stmt->bindParam(':nam', $new_gym->name);
            $stmt->bindParam(':cvr', $new_gym->cover);
            $stmt->bindParam(':lgo', $new_gym->logo);
            $stmt->bindParam(':drp', $new_gym->description);
            $stmt->bindParam(':phn', $new_gym->phone);
            $stmt->bindParam(':fax', $new_gym->fax);
            $stmt->bindParam(':adr', $new_gym->address);
            $stmt->bindParam(':pcd', $new_gym->postal_code);
            $stmt->bindParam(':map', $new_gym->map);
            $stmt->bindParam(':mob', $new_gym->mobile);
            $stmt->bindParam(':eml', $new_gym->email);
            $stmt->bindParam(':nrc', $new_gym->nrc);
            $stmt->bindParam(':tin', $new_gym->tin);
            $stmt->bindParam(':sig', $new_gym->sin);
            $stmt->bindParam(':aig', $new_gym->ai);
            $stmt->bindParam(':bsi', $new_gym->bsi);
            $stmt->bindParam(':typ', $new_gym->type);
            $stmt->bindParam(':mng', $new_gym->manager);

            $stmt->execute();

            $opstate = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }
        return $opstate;
    }

    public static function list($state_gym)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT * 
                                     FROM `gym` 
                                    WHERE `state_gym` = :stt
                                 ORDER BY `id_gym` ASC');

            /*
            $stmt = $pdo->prepare('SELECT g.*, p.*
                                     FROM `gym` g, `person` p
                                    WHERE p.`state_person` = 1    AND 
                                          g.`state_gym`    = :stt AND  
                                          g.`manager_gym`  = p.`id_person`');
            */
            $stmt->bindParam(':stt', $state_gym);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt : $result;
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function list_by_manager($idm)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT *
                                     FROM `gym` 
                                    WHERE `manager_gym` = :idm');
            $stmt->bindParam(':idm', $idm);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt : $result;
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function list_by_member($id_member)
    {
        $result = NULL;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT DISTINCT g.*
                                     FROM `gym` g, `group` gr, `subscription` s
                                    WHERE s.`member_subscription` = :id AND 
                                          s.`group_subscription` = gr.`id_group` AND
                                          gr.`gym_group` = g.`id_gym`');
            $stmt->bindParam(':id', $id_member);
            $stmt->execute();
            $result = (isset($stmt) && ($stmt !== false) && ($stmt->rowCount() > 0)) ? $stmt : $result;
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function search($KeyWords)
    {
        $result = NULL;

        try {
            $KeyWords = '%'.$KeyWords.'%';
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('SELECT *
                                     FROM `gym`
                                    WHERE `state_gym` = 1 AND
                                          (`name_gym`        LIKE :kwd OR 
                                           `description_gym` LIKE :kwd OR 
                                           `phone_gym`       LIKE :kwd OR 
                                           `fax_gym`         LIKE :kwd OR 
                                           `address_gym`     LIKE :kwd OR 
                                           `postal_code_gym` LIKE :kwd OR 
                                           `mobile_gym`      LIKE :kwd OR 
                                           `email_gym`       LIKE :kwd)');
            /*$stmt = $pdo->prepare('SELECT g.*, p.*
                                     FROM `gym` g, `person` p
                                    WHERE p.`state_person`      = 1             AND 
                                          g.`state_gym`         = 1             AND
                                          g.`manager_gym`       = p.`id_person` AND
                                         (g.`name_gym`          LIKE :kwd       OR 
                                          g.`description_gym`   LIKE :kwd       OR 
                                          g.`phone_gym`         LIKE :kwd       OR 
                                          g.`fax_gym`           LIKE :kwd       OR 
                                          g.`address_gym`       LIKE :kwd       OR 
                                          g.`postal_code_gym`   LIKE :kwd       OR 
                                          g.`mobile_gym`        LIKE :kwd       OR 
                                          g.`email_gym`         LIKE :kwd       OR 
                                          p.`first_name_person` LIKE :kwd       OR 
                                          p.`last_name_person`  LIKE :kwd       OR 
                                          p.`mobile_person`     LIKE :kwd       OR 
                                          p.`email_person`      LIKE :kwd)');*/
            $stmt->bindParam(':kwd', $KeyWords);
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
            $stmt = $pdo->prepare('DELETE FROM `gym` WHERE `id_gym` = :id');
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
            $stmt = $pdo->prepare('UPDATE `gym` 
                                      SET `state_gym` = :stt
                                    WHERE `id_gym`    = :id');
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

    public static function modify($modifaited_gym)
    {
        $opstate = false;

        try {
            $pdo = database_lib::generate_pdo_object();
            $stmt = $pdo->prepare('UPDATE `gym` SET `name_gym`          = :nam,
                                                    `cover_gym`         = :cvr,
                                                    `logo_gym`          = :lgo,
                                                    `description_gym`   = :drp,
                                                    `phone_gym`         = :phn,
                                                    `fax_gym`           = :fax,
                                                    `address_gym`       = :adr,
                                                    `postal_code_gym`   = :pcd,
                                                    `map_gym`           = :map,
                                                    `mobile_gym`        = :mob,
                                                    `email_gym`         = :eml,
                                                    `nrc_gym`           = :nrc,
                                                    `tin_gym`           = :tin,
                                                    `sin_gym`           = :sig,
                                                    `ai_gym`            = :aig,
                                                    `bsi_gym`           = :bsi,
                                                    `type_gym`          = :typ
                                              WHERE `id_gym`            = :id');
            $stmt->bindParam(':nam', $modifaited_gym->name);
            $stmt->bindParam(':cvr', $modifaited_gym->cover);
            $stmt->bindParam(':lgo', $modifaited_gym->logo);
            $stmt->bindParam(':drp', $modifaited_gym->description);
            $stmt->bindParam(':phn', $modifaited_gym->phone);
            $stmt->bindParam(':fax', $modifaited_gym->fax);
            $stmt->bindParam(':adr', $modifaited_gym->address);
            $stmt->bindParam(':pcd', $modifaited_gym->postal_code);
            $stmt->bindParam(':map', $modifaited_gym->map);
            $stmt->bindParam(':mob', $modifaited_gym->mobile);
            $stmt->bindParam(':eml', $modifaited_gym->email);
            $stmt->bindParam(':nrc', $modifaited_gym->nrc);
            $stmt->bindParam(':tin', $modifaited_gym->tin);
            $stmt->bindParam(':sig', $modifaited_gym->sin);
            $stmt->bindParam(':aig', $modifaited_gym->ai);
            $stmt->bindParam(':bsi', $modifaited_gym->bsi);
            $stmt->bindParam(':typ', $modifaited_gym->type);
            $stmt->bindParam(':id' , $modifaited_gym->id);

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
            $stmt = $pdo->prepare('SELECT * FROM `gym` WHERE `id_gym` = :id');
            /*$stmt = $pdo->prepare('SELECT g.*, p.*
                                     FROM `gym` g, `person` p
                                    WHERE g.`access_number_gym` = :acc AND
                                          g.`manager_gym` = p.`id_person`');*/
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