<?php 
namespace App\Controllers;

use App\Models\Location;
use App\Models\Index;
use App\Models\Shares;

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

	public function shares() {
		$shareModel = new Shares();
		$index_id = filter_input(INPUT_POST, 'index_id');
		$shares = $shareModel->getShares($index_id);
		echo json_encode($shares);
	}
}
 ?>
