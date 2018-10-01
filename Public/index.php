<?php
/**
 * Created by PhpStorm.
 * User: billy
 * Date: 27/09/18
 * Time: 13:36
 */

require "../vendor/autoload.php";

use App\WCS\Hello;
$firstObject = new Hello();
echo $firstObject->talk();

use HelloWorld\SayHello;
$secondObject = new SayHello();
echo $secondObject ->world();