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
	<input name="loan_taken" type="money_format" placeholder="amount of loan taken" required/><br>
	<input name="loan_payed" type="money_format" placeholder="amount of loan payed" required/><br>
	<input name="loan_payed_date" type="date" placeholder="date a loan payed" required/><br>
	<input name="loan_tobepayed_remained" type="money_format" placeholder="loan to be payed remained required/><br<placeholder="loan to be payed remained required/><br>
	<input name="time_remained" type="time_span" placeholder="time remained for loan to be payed  required/><br>
	
	
	<input name="loan_category" type="money_format" placeholder="loan_category" required/><br>
	<input name="interest" type="number_format" placeholder="interest" required/><br>
	<input name="time_span" type="number_format" placeholder="time_span" required/><br>
	<input name="saving_account_number" type="number_format" placeholder="saving_account_number" required/><br>
	<input name="submit" type="submit"  value="send" required/>
	</form>