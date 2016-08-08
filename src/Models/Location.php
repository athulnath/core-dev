<?php 
namespace App\Models;

use App\Common\Database\MysqlSingleton;

class Location {

	private $_dbInstance = NULL;

	public function __construct() {
		$this->_dbInstance = MysqlSingleton::getInstance();
		$this->_dbInstance->init();
	}

	public function getLocations() {
		return $this->_dbInstance->exec("select * from location");
	}
}
 ?>
