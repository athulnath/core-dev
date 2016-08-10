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

	public function createShare(array $shareData) {
		$this->_dbInstance->DML("INSERT INTO `shares`(`name`,`symbol`,`price_initiated`,`recommendation`,`order`, `index_id`) 
			VALUES('".$shareData['name']."','".$shareData['symbol']."',".$shareData['price_initiated'].",'".$shareData["recommendation"]."',".$shareData['order'].", ".$shareData['index_id'].")"
			);

	}
}
 ?>
