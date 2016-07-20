<?php 
namespace App\COnfig;

class Config {
	public static function getConfig() {
		return [
			"mysql" => [
				"host" => "localhost",
				"port" => 3306,
				"db" => "sharemarket-core"
			]
		];
	}
}
 ?>
