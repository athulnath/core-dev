<?php 
namespace App\Controllers;

class Controller {

	private $_viewPath = NULL;
	private $_viewDir = NULL;

	public function __construct() {
		$this->_viewPath = dirname(__FILE__) . "/../Views/";
		$controllerFullPath = explode("\\", get_class($this));
		$baseClass = strtolower(array_pop($controllerFullPath));
		$this->_viewDir = substr($baseClass, 0, strpos($baseClass, "controller"));

	}

	public function render($view = "index", array $data = []) {

		foreach($data as $key => $val) {
			$$key = $val;
		}

		include $this->_viewPath . "header.php";
		include $this->_viewPath . $this->_viewDir . "/" . $view . ".php";
		include $this->_viewPath . "footer.php";
	}
}
 ?>
