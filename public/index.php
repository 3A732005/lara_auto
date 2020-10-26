<?php
require '../vendor/autoload.php';

use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$world=new World();
$lara=new Lara();
$vincent=new Hello\Someone('Vincent');

$mark=new \Demo\Hello\Someone('Mark');
$jackson=new \Demo\Hello\Someone('Jackson');

// create a log channel
$log = new Logger('3A732005');
$log->pushHandler(new StreamHandler('../mylog/log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

?>