<?php
// Classe contenant les opérations CRUD sur la table worker
class worker_services
{
    public static function add($new_worker)
    {
        $opstate = false;

        try {
            $opstate = worker_dbaccess::add($new_worker);
        }
            catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $opstate;
    }

    public static function List($state)
    {
        $result = NULL;

        try {
            $result = worker_dbaccess::List($state);
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

    public static function login($username , $password)
    {
        $result = false;

        try {
            $result = worker_dbaccess::login($username , $password);
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
