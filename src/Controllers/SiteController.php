<?php 
namespace App\Controllers;

class SiteController extends Controller {

	public function index() {

		$this->render("index", ["name" => "athul"]);
	}
}
 ?>
