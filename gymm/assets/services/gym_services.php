<?php
// Classe contenant les opérations CRUD sur la table gym
class gym_services
{
    public static function add($new_gym)
    {
        $opstate = false;

        try {
            $opstate = gym_dbaccess::add($new_gym);
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
            $result = gym_dbaccess::list($state_gym);
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
            $result = gym_dbaccess::list_by_manager($idm);
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
            $result = gym_dbaccess::list_by_member($id_member);
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
            $result = gym_dbaccess::search($KeyWords);
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
            $opstate = gym_dbaccess::delete($id);
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
            $opstate = gym_dbaccess::modify_state($id , $state);
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
            $opstate = gym_dbaccess::modify($modifaited_gym);
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
            $result = gym_dbaccess::consult($id);
        }
        catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $result;
    }
}