<?php 
namespace App\Controllers;


class DashboardController extends Controller {

	public function __construct() {
		parent::__construct();
		$this->handleLogin();
	}

	public function index() {
		$this->render("index");
	}
}
 ?>
