<?php
// Classe contenant les opérations CRUD sur la table group
class group_services
{
    public static function add($new_group)
    {
        $opstate = false;

        try {
            $opstate = group_dbaccess::add($new_group);

        }
        catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }
        return $opstate;
    }

    public static function List($number_group, $state_group)
    {
        $result = NULL;

        try {
            $result = group_dbaccess::List($number_group , $state_group);
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
            $opstate = group_dbaccess::delete($id);
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
            $opstate = group_dbaccess::modify_state($id , $state);
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
            $opstate = group_dbaccess::modify($modifaited_group);
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
            $result = group_dbaccess::consult($id);
        }
        catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $result;
    }
}