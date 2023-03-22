<?php
  // Set connection details
  $apikey = 'b77bf7245de5d1767b621ae8d96a93d3';
  $password = '';
  $url = 'https://api.openweathermap.org/data/2.5/weather?'
		 . 'lat=44.34'
		 . '&lon=10.99'
		 . '&appid=$apikey';
		 
  // Create CURL object with options
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch, CURLOPT_USERPWD, "$apikey:$password");
  
  // Make CURL call, and convert result to JSON object
  $cityname = curl_exec($ch);
  $cityname = json_decode($cityname);
  curl_close($ch);
  
  echo "Weather API";
?>