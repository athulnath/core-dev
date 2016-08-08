<?php 
namespace App\Common\Database;

class MysqlSingleton {

	private static $_instance = NULL;

	private $_conn = NULL;

	private function __construct() {}

	public static function getInstance() {
		if(static::$_instance == NULL) {
			static::$_instance = new static();
		}
		return static::$_instance;
	}

	public function init() {
		$this->_conn = new \PDO("mysql:host=localhost;dbname=share_core_dev", "root", "root");
		$this->_conn->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
	}

	public function execOne($query) {
		$stmt = $this->_conn->prepare($query); 
    	$stmt->execute();
    	// set the resulting array to associative
    	$stmt->setFetchMode(\PDO::FETCH_ASSOC); 
    	return $stmt->fetch();
	}

	public function exec($query) {
		$stmt = $this->_conn->prepare($query); 
    	$stmt->execute();
    	// set the resulting array to associative
    	$stmt->setFetchMode(\PDO::FETCH_ASSOC); 
    	return $stmt->fetchAll();
	}

}

 ?>
