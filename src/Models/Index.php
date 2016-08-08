<?php 
namespace App\Models;

use App\Common\Database\MysqlSingleton;

class Index {

	private $_dbInstance = NULL;

	public function __construct() {
		$this->_dbInstance = MysqlSingleton::getInstance();
		$this->_dbInstance->init();
	}

	public function getIndices($loc) {
		return $this->_dbInstance->exec("select `index`.`id`, `index`.`index` from `index` inner join location on index.location_id = location.id where location_id=$loc");
	}
}
 ?>
