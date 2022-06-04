<?php
class exception_lib {
    public static function throw_exception($erreur)
    {
        throw new Exception($erreur);
    }

    public static function treat_error($erreur)
    {
        session_regenerate_id();
        session_destroy();
        header('location: ../../../message.php?cd=0&msg='.$erreur);
        die();
    }

    public static function treat_exception($exception)
    {
        session_regenerate_id();
        session_destroy();
        header('location: ../../../message.php?cd=0&msg='.$exception->getMessage());
        die();
    }
}