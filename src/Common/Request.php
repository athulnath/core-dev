<?php 
namespace App\Common;

class Request {

	private $_request = null;

	public function __construct() {

		if($SERVER['method'] == 'POST') {
			// $this->_request = filter_input(type, variable_name);
		}
	}

	public function getRequest() {

	}
}

 ?>
