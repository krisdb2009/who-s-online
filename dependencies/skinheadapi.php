<?php
//ALL CODE IS FOR USE ON THE WHO'SONLINE SCRIPT ONLY!
if(isset($_GET['player']))
{
if(isset($_GET['size']))
{
$size = $_GET['size'];
}
else
{
$size = 150;
}
header("Content-Type: image/png");
header("Cache-Control: max-age=2592000");
@$skin = imagecreatefrompng('http://s3.amazonaws.com/MinecraftSkins/'.$_GET['player'].'.png');
if(empty($skin))
{
$skin = imagecreatefrompng('Steve.png');
}
$headsmall = imagecreatetruecolor(8, 8);
imagecopy($headsmall, $skin, 0, 0, 8, 8, 8, 8);
$head = imagecreatetruecolor($size, $size);
imagecopyresized($head, $headsmall, 0, 0, 0, 0, $size, $size, 8, 8);
imagepng($head);
imagedestroy($head);
imagedestroy($skin);
}
?>