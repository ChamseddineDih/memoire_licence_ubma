<?php
class database_lib {
    public static function generate_pdo_object()
    {
        $ip   = '';
        $dbn  = '';
        $acc  = '';
        $psw  = '';
        $host = '';
        $pdo  = NULL;

        try {
            $ip   = ($_SERVER['SERVER_NAME'] !== 'localhost') ? strings_lib::$ip_online       : strings_lib::$ip_local;
            $dbn  = ($_SERVER['SERVER_NAME'] !== 'localhost') ? strings_lib::$dbname_online   : strings_lib::$dbname_local;
            $acc  = ($_SERVER['SERVER_NAME'] !== 'localhost') ? strings_lib::$account_online  : strings_lib::$account_local;
            $psw  = ($_SERVER['SERVER_NAME'] !== 'localhost') ? strings_lib::$password_online : strings_lib::$password_local;
            $host = 'mysql:host='.$ip.';dbname='.$dbn;
            $pdo  = new PDO($host, $acc, $psw, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        } 
        catch (Exception $exception) {
            exception_lib::treat_exception($exception);
        }

        return $pdo;
    }
}