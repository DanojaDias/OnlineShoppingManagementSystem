<html>
<head>
<title>Login</title>
</head>

<img src="spectrum2.jpg" width="1300" height="200" alt="" title="" />
<center><body>
<?php
include_once ('includes.php');

 $email=$_POST['email'];
 $pass=$_POST['password'];
 
 $sql="SELECT * FROM customer where Email='$email'";
			$query = $pdo->prepare($sql);
			$query->execute();
			$cus = $query->fetchAll();
			foreach ($cus as $row){
				echo $row['Email'];
			}	

 
 ?>

</body></center>
</html>
