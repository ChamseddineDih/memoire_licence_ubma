<?php

$info = "Chemsou";
$crypto = md5(sha1($info));
$salt_key = "douga douga douga 7ata beb eddar";
for($i = 0; $i < strlen("Chemsou"); $i++) {
    switch($i % 4)
    {
        case 0: $crypto = md5(sha1($crypto.$salt_key)); break;
        case 1: $crypto = sha1(md5($salt_key.$crypto)); break;
        case 2: $crypto = md5(md5(sha1($crypto.$salt_key.$crypto))); break;
        case 3: $crypto = md5(sha1(md5($salt_key.$crypto.$salt_key))); break;
    }
}

$crypto = md5(sha1($crypto));

echo $info." = ".$crypto." qui compte ".strlen($crypto)." chiffre(s)";