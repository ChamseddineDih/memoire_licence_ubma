<?php
// Classe contenant les opérations CRUD sur la table person
class person_services
{
    public static function add($new_person)
    {
        $opstate = false;

        try {
            $new_person->username = security_lib::crypter_info_2($new_person->username);
            $new_person->password = security_lib::crypter_info_1($new_person->password);
            $opstate = person_dbaccess::add($new_person);
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
        $result = person_dbaccess::list($state_person, $type_person, /*$access_number_gym*/);
        }
            catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $result;
    }

    public static function list_by_group($idgr)
    {
        $result = NULL;

        try {
        $result = person_dbaccess::list_by_group($idgr);
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
            $result = person_dbaccess::search($KeyWords);
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
            $opstate = person_dbaccess::delete($id);
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
            $opstate = person_dbaccess::modify_state($id, $state);
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
            $modifaited_person->password = security_lib::crypter_info_1($modifaited_person->password);
            $opstate = person_dbaccess::modify($modifaited_person);
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
            $result = person_dbaccess::consult($id);
        }
            catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $result;
    }

    public static function consult_($acn)
    {
        $result = false;

        try {
            $result = person_dbaccess::consult_($acn);
        }
            catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $result;
    }

    public static function login($username , $password)
    {
        $result = false;

        try {
            // TODO : Comparaison entre le captcha saisie et le captcha généré
            
            $crypt_username = security_lib::crypter_info_2($username);
            $crypt_password = security_lib::crypter_info_1($password);

            $result = person_dbaccess::login($crypt_username , $crypt_password);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function logout()
    {
        $opstate = false;

        try 
        {
            session_regenerate_id();
            $_SESSION['connected'] = NULL;
            $opstate = (session_destroy());
        }
    
        catch (Exception $exception) 
        {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }
}  
