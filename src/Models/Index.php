<?php 
namespace App\Models;

use App\Common\Database\MysqlSingleton;

class Index {

	private $_dbInstance = NULL;

	public function __construct() {
		$this->_dbInstance = MysqlSingleton::getInstance();
		$this->_dbInstance->init();
	}
}
 ?>
