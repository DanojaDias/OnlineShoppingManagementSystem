<html>
	<head>
		<title>PHP Login Page</title>
	</head>
 
	<body>
  
	<img src="spectrum2.jpg" width="1300" height="200" alt="" title="" />
  
<?php 
$dbhost = 'localhost'; 
$dbuser = 'user1'; 
$dbpass = 'abcd'; 
$dbname = 'fashion'; 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname); 
if(! $conn ) {
 die('Could not connect: ' . mysql_error()); 
 }
 echo "Connected successfully\n"; 
 
 $email=$_POST['email'];
 $pass=$_POST['password'];
 $repass=$_POST['repassword'];
 
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $gender=$_POST['gender'];
 $add1=$_POST['address1'];
 $add2=$_POST['address2'];
 $add3=$_POST['address3'];
 
 
 if($pass==$repass){
 $sql="Insert INTO customer
 			  (First_name,Last_name,Address1,Address2,Address3,Email,Password,Gender)
			  Values
			  ('$fname','$lname','$add1','$add2','$add3','$email','$pass','$gender')";
			  
$retval = mysqli_query($conn,  $sql ); 
if(! $retval ) 
{ die('this email has been registered: ' . mysql_error()); }
 echo "Entered data successfully\n";
 }
 else
 {
 echo "password is not typed correclty\n";
 }
 
 
  ?>


	</body>
</html>