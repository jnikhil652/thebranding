<?php

namespace App\Controllers;

class Home extends BaseController {
	public function index() {
		$data = array(
			"title" => "Home :: The Branding",
			"homeMainImg" => base_url() . "/img/home.png"
		);
		echo view('include/head', $data);
		echo view('home', $data);
		echo view('include/footer', $data);
	}
}
