<?php
  // Set connection details
  $login = 'acd43105-b988-4678-bcdc-9fdc543845be';
  $password = '';
  $url = 'https://www.reed.co.uk/api/1.0/search?keywords=laravel&location=wolverhampton&distancefromlocation=15';
  
  // Create CURL object with options
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
  
  // Make CURL call, and convert result to JSON object
  $jobs = curl_exec($ch);
  $jobs = json_decode($jobs);
  curl_close($ch);
  
  // Display results
  foreach ($jobs->results as $job)
  {
	  print($job->jobTitle . "<br>");
  }
?>