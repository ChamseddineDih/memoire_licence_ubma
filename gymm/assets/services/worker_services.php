<?php
// Classe contenant les opérations CRUD sur la table worker
class worker_services
{
    public static function add($new_worker)
    {
        $opstate = false;

        try {
            $new_worker->username = security_lib::er($new_worker->username);
            $new_worker->password = security_lib::crypter_info_1($new_worker->password);
            $opstate = worker_dbaccess::add($new_worker);
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
            $result = worker_dbaccess::list($state);
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
            $result = worker_dbaccess::list_by_gym($idg);
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
            $result = worker_dbaccess::search($KeyWords, $state_worker);
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
            $opstate = worker_dbaccess::delete($id);
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
            $opstate = worker_dbaccess::modify_state($id , $state);
        }
            catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $opstate;
    }

    public static function modify($modifaited_worker)
    {
        $opstate = false;

        try {
            $modifaited_worker->password = security_lib::crypter_info_1($modifaited_worker->password);
            $opstate = worker_dbaccess::modify($modifaited_worker);
        }
            catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $opstate;
    }

    public static function consult($access_number)
    {
        $result = false;

        try {
            $result = worker_dbaccess::consult($access_number);
        }
            catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $result;
    }

    public static function login($login , $password)
    {
        $result = false;

        try {
            // TODO : Comparaison entre le captcha saisie et le captcha généré

            $crypt_login = security_lib::crypter_info_2($login);
            $crypt_password = security_lib::crypter_info_1($password);
            $result = worker_dbaccess::login($crypt_login , $crypt_password);
        }
            catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $result;
    }
}
