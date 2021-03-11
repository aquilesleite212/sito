<?php
session_start();
$cogigo = substr(md5(time()), 0, 8);

$_SESSION['form_capt_ktec'] = $cogigo;

$imgCaptcha = imagecreatefrompng('fundocaptcha.png');
$fonteCaptcha = dirname(__FILE__).'\peixe.ttf';
$corCaptcha = imagecolorallocate($imgCaptcha, 0,152,218);
imagettftext($imgCaptcha, 150, 0, 30, 150, $corCaptcha, $fonteCaptcha, $cogigo);
imagepng($imgCaptcha);
imagedestroy($imgCaptcha);
