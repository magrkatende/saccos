<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saccos";


// create connection to a database
$conn = new mysqli ($servername,$username,$password,$dbname);

// check connection to a database
if($conn->connect_error){
	die("connection failed" .$conn->connect_error);
	

	
	
}
?>
	<form method="post" action="">
	<input name="loan_member" type="text" placeholder="loan taker name" required/><br>
	<input name="loan_category" type="text" placeholder="loan category" required/><br>	
	<input name="loan_taken" type="money_format" placeholder="loan taken" required/><br>
	<input name="interest" type="number_format" placeholder="interest"  required/><br>
	<input name="time_span" type="number_format" placeholder="time span" required/><br>
	<input name="saving_account_number" type="number_format" placeholder="saving account number" required/><br>
	<input name="starting_date" type="date" placeholder="starting date" required/><br>
	<input name="expiring_date" type="date" placeholder="expiring date" required/><br>
	<input name="submit" type="submit"  value="send" required/>
	</form>