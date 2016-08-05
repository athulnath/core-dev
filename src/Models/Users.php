<?php 
namespace App\Models;

use App\Common\Database\MysqlSingleton;

class Users {

	private $_dbInstance = NULL;

	public function __construct() {
		$this->_dbInstance = MysqlSingleton::getInstance();
		$this->_dbInstance->init();
	}

	public function getUser($username) {
		return $this->_dbInstance->exec("SELECT * FROM sharemarket_core.user");
	}
}
 ?>
