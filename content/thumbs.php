<?php

if(!isset($_GET['folder'])){
  echo "set thumbs.php?folder=folderName";
  die();
}
            $root = $_SERVER['DOCUMENT_ROOT'];
            $files = scandir($root.'/iron/content/galleries/'.$_GET[folder],1);

            foreach ($files as $file) {
              if (strpos($file,'jpg') !== false) {

$filename = $root.'/iron/content/galleries/'.$_GET[folder].'/'.$file;
$width = 81;
$height = 50;
$quality = 95;
$info = getimagesize($filename);
header('Content-type: '.$info['mime']);
list($width_orig, $height_orig) = $info;
$ratio_orig = $width_orig/$height_orig;
if ($width/$height > $ratio_orig) {
$width = $height*$ratio_orig;
} else {
$height = $width/$ratio_orig;
}
// Resample
$thumb = imagecreatetruecolor($width, $height);
if($info['mime']=='image/jpeg') $image = imagecreatefromjpeg($filename);
elseif($info['mime']=='image/png') $image = imagecreatefrompng($filename);
elseif($info['mime']=='image/gif') $image = imagecreatefromgif($filename);
imagecopyresampled($thumb, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
/*
if($info['mime']=='image/jpeg') imagejpeg($thumb, null, $quality);
if($info['mime']=='image/png') imagepng($thumb);
if($info['mime']=='image/gif') imagegif($thumb);
*/
imagejpeg($thumb, $root.'/iron/content/galleries/'.$_GET[folder].'/thmb_'.$file, $quality);
              }
            }
            echo 'Done.';
          ?>