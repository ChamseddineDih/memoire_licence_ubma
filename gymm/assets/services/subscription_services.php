<?php
// Classe contenant les opérations CRUD sur la table subscription
class subscription_services
{
    public static function add($new_subscription)
    {
        $opstate = false;

        try 
        {
            $datetime1 = date_create($new_subscription->date_begining);
            $datetime2 = date_create($new_subscription->date_ending);
            
            $opstate = ($datetime1 < $datetime2) ? 
                       subscription_dbaccess::add($new_subscription) : 
                       exception_lib::throw_exception("Error date invalid");

        }
        catch (Exception $exception) 
        {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function delete($id)
    {
        $opstate = false;

        try {
            $opstate = subscription_dbaccess::delete($id);
        }
            catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $opstate;
    }

    public static function modify($modifaited_subscription)
    {
        $opstate = false;

        try {
            $opstate = subscription_dbaccess::modify($modifaited_subscription);
        }
            catch (Exception $exception) {
                exception_lib::treat_exception($exception);
            }

        return $opstate;
    }

    public static function list($idm)
    {
        $result = NULL;

        try {
            $result = subscription_dbaccess::list($idm);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $result;
    }


}