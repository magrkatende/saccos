<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saccos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//listen action
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password= $_POST['password'];
	$user_type= $_POST['user_type'];
	$q = "INSERT INTO user(name,email,phone,password,user_type) VALUES('$name','$email','$phone',SHA($password),'$user_type')";
	$r = mysqli_query($conn, $q);
	if($r){
		echo 'good';
	}else{
		echo 'bad';
	}
}

?>

<form method="post" action="">
<input name="name" type="text" placeholder="name" required/>
<input name="email" type="email" placeholder="email" required/>
<input name="phone" type="tel" placeholder="phone" required/>
<input name="password" type="password" placeholder="password" required/>
<input name="user_type" type="hidden" value="subscriber" />
<input name="submit" type="submit" value="sign up"/>
</form>