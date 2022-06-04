<?php
class security_lib
{
    private static $saltkey = '4385f44592b66948f8aff809013139d8';
    
    public static function crypter_info_1($info)
    {
            $max = strlen($info);
            $crypt  = $info;

            for($i = 0; $i < $max; $i++)
            {
                if($i % 2 == 0) { $crypt = md5($crypt.self::$saltkey); }
                else { $crypt = sha1(self::$saltkey.$crypt); }
            }

            return md5($crypt);
    }

    public static function crypter_info_2($info)
    {
        $max = strlen($info);
        $crypt  = $info;

        for($i = 0; $i < $max; $i++)
        {
            if($i % 2 == 0) { $crypt = sha1(self::$saltkey.$crypt.self::$saltkey); }
            else { $crypt = md5($crypt.self::$saltkey.$crypt); }
        }

        return md5($crypt);
    }
}