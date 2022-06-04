<?php
// Classe contenant les opérations CRUD sur la table subscription
class subscription_services
{
    public static function add($new_subscription)
    {
        $opstate = false;

        try {
            $opstate = subscription_dbaccess::add($new_subscription);
        }
            catch (Exception $exception) {
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

}