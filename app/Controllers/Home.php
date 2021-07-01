<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = array(
			'makanan'  => array(
				'Soto' => 'sotoku'
			), 
			"BMW", 
			"Toyota"
		);
		return json_encode($data);
		// return view('welcome_message');
	}
}
