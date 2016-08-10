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

	public function createshares() {
		$shareModel = new Shares();

		$input = [];
		$input['name'] = filter_input(INPUT_POST, 'name');
		$input['symbol'] = filter_input(INPUT_POST, 'symbol');
		$input['price_initiated'] = filter_input(INPUT_POST, 'price_initiated');
		$input['recommendation'] = filter_input(INPUT_POST, 'recommendation');
		$input['order'] = filter_input(INPUT_POST, 'order');
		$input['index_id'] = filter_input(INPUT_POST, 'index_id');

		$shareModel->createShare($input);
		echo json_encode([]);
	}
}
 ?>
