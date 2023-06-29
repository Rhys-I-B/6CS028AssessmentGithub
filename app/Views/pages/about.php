<?php
  echo "About section of my CodeIgnitor Website.<br>";
  echo "CodeIgnitor was used to make this website for my final project in 6CS028 Advanced Web Development.<br><br>";
  echo "This area outlines the critical categories utilized within the different web pages.<br><br>";
  
  echo "Architectural Pattern: Used within Login and Register.<br>";
  echo "Register creates a new database table and stores variables like: username, email, and password. The password is checked to ensure it is correct and can be remembered.<br>";
  echo "Login fetches from a database to match a username with a password. When they match, the user signs into their account.<br>";
  echo "Games also uses fetch to gather additional information about a game from a created database.<br><br>";
  
  echo "Third-party API: Used within Games.<br>";
  echo "Each game card is created using a single loop which grabs information like: game title, game picture, game release date, and game rating.<br>";
  echo "This API is used from rawg.io.<br><br>";
  
  echo "Mobile: used within all web pages.<br>";
  echo "Each web page can be resized and fitted to any display screen, especially mobile devices.<br>";
  echo "Containers, boxes, text, and images are resized to fit on screen without causing a visible mess.<br>";
  echo "The navigational bar also resizes and refits inside of a button if the screen is shrunk enough.<br><br>";
  
  echo "Ajax or fetch: included within Games, Login, Register.<br>";
  echo "Fetch gathers information from a database in Login.";
  echo "Fetch also gathers small packets of information about a games details.<br><br>";
  
  echo "Version Control: Within GitHub - https://github.com/Rhys-I-B/6CS028AssessmentGithub<br>";
  echo "Includes different versions of this website along with comments, issues, and fixes.";
  
  echo "<br><br>";
?>