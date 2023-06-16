<?php

	namespace App\Controllers;

	use App\Models\NewsModel;

	class Apis extends BaseController
	{
		public function wikipedia()
		{
			// Since 2010 a user agent is required
			ini_set('user_agent', 'University of Wolverhampton');

			$website = "www.bdtheque.com";

			$url = "http://en.wikipedia.org/w/api.php?"
				."action=query&"
				."list=exturlusage&"
				."eulimit=500&"
				."format=xml&"
				."euquery=".$website;
			  
			// Get data from URL and store in object
			$data['links'] = simplexml_load_file($url);
			$data['title'] = "Wikipedia API";

			echo view('templates/header', $data);
			echo view('apis/wikipedia', $data);
			echo view('templates/footer', $data);
		}
		
		public function reed()
		{
			echo view('templates/header');
			echo view('apis/reed');
			echo view('templates/footer');
		}
		
		public function weather()
		{
			echo view('templates/header');
			echo view('apis/weather');
			echo view('templates/footer');
		}
		
		public function games()
		{
			echo view('templates/header');
			echo view('apis/games');
			echo view('templates/footer');
		}
		
		public function login()
		{
			echo view('templates/header');
			echo view('account/login');
		}
		
		public function register()
		{
			echo view('templates/header');
			echo view('account/register');
		}
		
		public function template()
		{
			echo view('templates/header');
			echo view('apis/template');
			echo view('templates/footer');
		}
	}
?>