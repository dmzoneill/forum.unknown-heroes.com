<?php

error_reporting('E_ALL');

function LoadJpeg ($imgname) {
$im = ImageCreateFromJPEG ($imgname); /* Attempt to open */

if (!$im) { /* See if it failed */
die();
  $im = ImageCreate (400, 30); /* Create a blank image */
  $bgc = ImageColorAllocate ($im, 255, 255, 255);
  $tc = ImageColorAllocate ($im, 0, 0, 0);
  ImageFilledRectangle ($im, 0, 0, 600, 30, $bgc);
  /* Output an errmsg */
  ImageString ($im, 1, 5, 5, "Error $imgname", $tc);
}
  return $im;
}

$id=$_GET['tn'];
$sz=$_GET['size'];
$ph = shell_exec("chmod 777 /home/strobelix/screenshots/$id");
$savefile= "/home/strobelix/screenshots/$id";



$im=LoadJpeg($savefile);

if(!$sz==""){
// output
$im_width=imageSX($im);
$im_height=imageSY($im);

// work out new sizes
if($im_width >= $im_height)
{
  $factor = $sz/$im_width;
  $new_width = $sz;
  $new_height = $im_height * $factor;
}
else
{
  $factor = $sz/$im_height;
  $new_height = $sz;
  $new_width = $im_width * $factor;
}

// resize
$new_im=ImageCreate($new_width,$new_height);
ImageCopyResized($new_im,$im,0,0,0,0,$new_width,$new_height,$im_width,$im_height);
}
else {
$new_im = $im;
}
// output
header("Content-type: image/jpeg");

Imagejpeg($new_im,'',75); // quality 75

// cleanup
ImageDestroy($im);
if(!$sz==""){
ImageDestroy($new_im);
}

?> 
