<?php session_start(); ob_start(); 

$_SESSION['captcha'] = substr(md5(rand(0,100000).time()),0,6);
header("Content-Type: image/png");
$im = imagecreate(75, 40);
$white = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 0, 0, $white);

if (!empty($_SESSION['captcha']))
{
    for($i = 0; $i < strlen($_SESSION['captcha']); $i++) 
    {
        $r = rand(0,255);
        $g = rand(0,255);
        $b = sqrt((100 * 100) - ($r * $r) - ($g * $g));
        $couleur = imagecolorallocate($im, $r,$g,1);
        imagechar($im, rand(0,4), 0 + 10 * $i + rand(0, 5), rand(0, 10) , $_SESSION['captcha'][$i], $couleur);
    }
}

imagepng($im);
imagedestroy($im);?>