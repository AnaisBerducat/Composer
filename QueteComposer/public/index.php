<?php 
require_once ("../vendor/autoload.php");
use App\wcs\Hello;

$talk= new Hello();
echo $talk->talk();
