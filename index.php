<?php /* FILEVERSION: v1.0.1b */ ?>
<?php

use PHPImageWorkshop\ImageWorkshop; // Use the namespace of ImageWorkshop
 
require_once("src/PHPImageWorkshop/ImageWorkshop.php");
 
$imgBase = ImageWorkshop::initFromPath(__DIR__.'/images/face1.jpg');

echo $imgBase->getWidth();
echo $imgBase->getHeight();

?>