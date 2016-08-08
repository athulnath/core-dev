<?php 
namespace App\Controllers;

use App\Models\Location;
use App\Models\Index;

class DashboardController extends Controller {

	public function __construct() {
		parent::__construct();
		$this->handleLogin();
	}

	public function index() {

		$locationModel = new Location();
		$locations = $locationModel->getLocations();
		$this->render("index", ["locations" => $locations]);
	}

	public function indices() {
		$indexModel = new Index();
		$loc = filter_input(INPUT_POST, 'loc');
		$indices = $indexModel->getIndices($loc);
		echo json_encode($indices);
	}
}
 ?>
