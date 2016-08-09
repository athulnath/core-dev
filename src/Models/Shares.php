<?php 
namespace App\Models;

use App\Common\Database\MysqlSingleton;

class Shares {

	private $_dbInstance = NULL;

	public function __construct() {
		$this->_dbInstance = MysqlSingleton::getInstance();
		$this->_dbInstance->init();
	}

	public function getShares($indexId) {
		return $this->_dbInstance->exec("select * from `shares` 
			where index_id=$indexId");
	}
}
 ?>
