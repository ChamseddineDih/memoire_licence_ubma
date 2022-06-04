<?php
// Classe contenant les opérations CRUD sur la table payment
class payment_services
{
    public static function add($new_payment)
    {
        $opstate = false;

        try {
            $opstate = payment_dbaccess::add($new_payment);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }
        return $opstate;
    }

    public static function list($idc, $ids)
    {
        $result = NULL;

        try {
            $result = payment_dbaccess::list($idc, $ids);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function list_by_contract($idc)
    {
        $result = NULL;

        try {
            $result = payment_dbaccess::list_by_contract($idc);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function list_out_by_manager($idm)
    {
        $result = NULL;

        try {
            $result = payment_dbaccess::list_out_by_manager($idm);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function list_in_by_manager($idm)
    {
        $result = NULL;

        try {
            $result = payment_dbaccess::list_in_by_manager($idm);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function list_out_by_gym($idg)
    {
        $result = NULL;

        try {
            $result = payment_dbaccess::list_out_by_gym($idg);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function list_in_by_gym($idg)
    {
        $result = NULL;

        try {
            $result = payment_dbaccess::list_in_by_gym($idg);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }


    public static function list_by_subscription($ids)
    {
        $result = NULL;

        try {
            $result = payment_dbaccess::list_by_subscription($ids);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }

    public static function search($KeyWord)
    {
        $result = NULL;

        try {
            $result = payment_dbaccess::search($KeyWords);
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
            $opstate = payment_dbaccess::delete($id);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
            }

        return $opstate;
    }

    public static function modify($modifaited_payment)
    {
        $opstate = false;

        try {
            $opstate = payment_dbaccess::modify($modifaited_payment);
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
            $result = payment_dbaccess::consult($id);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
            }

        return $result;
    }
}