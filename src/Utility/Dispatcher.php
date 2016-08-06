<?php 
namespace App\Utility;

class Dispatcher {

	private $_controller = NULL;
	private $_action = NULL;

	public function __construct() {
		$this->_controller = "site";
		$this->_action = "index";
	}

	public function run() {

		$controller = filter_input(INPUT_GET, 'c', FILTER_SANITIZE_URL);
		$action = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_URL);

		if(!empty($controller)) {
			$this->_controller = ucfirst($controller);
		}

		if(!empty($action)) {
			$this->_action = $action;
		} else {
			$this->_action = 'index';
		}

		if(empty($controller) && empty($action)) {
			$this->_controller = "Site";
			$this->_action = "index";
		}


		$classname = "App\Controllers\\" . $this->_controller . "Controller";

		$obj = new $classname();
		$obj->{$this->_action}();
	}
}
 ?>
