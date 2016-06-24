<html> 
<head> 
<title>Connecting MySQL Server</title>
 </head> 
 <body> 
 <?php 
 $dbhost = 'localhost';
  $dbuser = 'user1';
   $dbpass = 'abcd';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	 if(! $conn ) { die('Could not connect: ' . mysql_error()); }
	  echo 'Connected successfully'; 
	  mysqli_close($conn); ?> 
	  </body>
	  </html>