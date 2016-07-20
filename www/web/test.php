<?php 
ini_set("display_errors", 1);
require_once '../../vendor/autoload.php';

use App\Models\User;
use App\Utility\Dispatcher;

$obj = new User();
print_r($obj->getUser("dsf"));

$disp = new Dispatcher();
$disp->run();
 ?>