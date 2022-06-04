<?php
// Classe contenant les opérations CRUD sur la table contract
class contract_services
{
    public static function add($new_contract)
    {
        $opstate = false;

        try {
            $opstate = contract_dbaccess::add($new_contract);
        }
        catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $opstate;
    }

    public static function List($state_worker)
    {
        $result = NULL;

        try {
            $result = contract_dbaccess::List($state_worker);
        }
        catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $result;
    }

    public static function consult($number_contract)
    {
        $result = NULL;

        try {
            $result = contract_dbaccess::consult($number_contract);
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
            $opstate = contract_dbaccess::delete($id);
        }
        catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $opstate;
    }

    public static function modify($modifaited_contract)
    {
        $opstate = false;

        try {
            $opstate = contract_dbaccess::modify($modifaited_contract);
        }
        catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $opstate;
    }

}