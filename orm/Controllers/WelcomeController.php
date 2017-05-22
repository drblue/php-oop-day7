<?php

namespace App\Controllers;

class WelcomeController extends Controller {

	public function index() {
		$artists = \App\Models\Artist::get();

		$page_title = "Artists";
		include "Views/welcome/index.view.php";
	}

}
