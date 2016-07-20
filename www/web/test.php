<?php 
ini_set("display_errors", 1);
require_once '../../vendor/autoload.php';

use App\Models\User;

$obj = new User();
print_r($obj->getUser("dsf"));
 ?>