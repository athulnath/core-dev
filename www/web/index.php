<?php 
ini_set("display_errors", 1);
require_once '../../vendor/autoload.php';

use App\Utility\Dispatcher;


$disp = new Dispatcher();
$disp->run();
 ?>