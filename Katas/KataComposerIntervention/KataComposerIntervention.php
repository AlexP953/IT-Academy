<?php
require 'C:\xampp\htdocs\MySite\IT-Academy\Katas\KataComposerIntervention\vendor\autoload.php';
 
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

// create image manager with desired driver
$manager = new ImageManager(new Driver());

// read image from file system
$image = $manager->read('C:\xampp\htdocs\MySite\IT-Academy\Katas\KataComposerIntervention\img\GoT.jpg');
$image3 = $manager->read('C:\xampp\htdocs\MySite\IT-Academy\Katas\KataComposerIntervention\img\GoT.jpg');
$image4 = $manager->read('C:\xampp\htdocs\MySite\IT-Academy\Katas\KataComposerIntervention\img\GoT.jpg');

// resize image proportionally to 300px width
$image->scale(width: 300);
$image3->scale(width: 300);
$image4->scale(width: 300);
$image3 = $image3->blur(3);
$image4 = $image4->invert();

// save modified image in new format 
$image->toPng()->save('C:\xampp\htdocs\MySite\IT-Academy\Katas\KataComposerIntervention\img\foo.png');
$image3->toPng()->save('C:\xampp\htdocs\MySite\IT-Academy\Katas\KataComposerIntervention\img\foo3.png');
$image4->toPng()->save('C:\xampp\htdocs\MySite\IT-Academy\Katas\KataComposerIntervention\img\foo4.png');

echo "<img src='img/foo.png'/>";
echo "<img src='img/foo3.png'/>";
echo "<img src='img/foo4.png'/>";
?>