<?php
// Classe contenant les opérations CRUD sur la table assiduity
class assiduity_services
{
    public static function add($new_assiduity)
    {
        $opstate = false;

        try {
            $new_assiduity = isset($new_assiduity) ? 
                             $new_assiduity : 
                             exception_lib::throw_exception(strings_lib::$srv_asd_add_pnv);
            $opstate = assiduity_dbaccess::add($new_assiduity);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function list($first_date, $last_date)
    {
        $result = NULL;

        try {
            $result = assiduity_dbaccess::list($first_date, $last_date);
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
            $result = assiduity_dbaccess::search($KeyWord);
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
            $opstate = assiduity_dbaccess::delete($id);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }

    public static function modify($assiduity)
    {
        $opstate = false;

        try {
            $opstate = assiduity_dbaccess::modify($assiduity);
        }
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $opstate;
    }
}