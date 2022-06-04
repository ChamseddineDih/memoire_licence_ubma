<?php
// Classe contenant les opérations CRUD sur la table contract
class contract_services
{
    public static function add($new_contract)
    {
        $opstate = false;

        try {
            $datetime1 = date_create($new_contract->date_begining);
            $datetime2 = date_create($new_contract->date_ending);
            
            $opstate = ($datetime1 < $datetime2) ? 
                       contract_dbaccess::add($new_contract) : 
                       exception_lib::throw_exception("Error date invalid");
        }
        catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $opstate;
    }

    public static function list($state_worker)
    {
        $result = NULL;

        try {
            $result = contract_dbaccess::list($state_worker);
        }
        catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $result;
    }

    public static function list_by_worker($idw)
    {
        $result = NULL;

        try {
            $result = contract_dbaccess::list_by_worker($idw);
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