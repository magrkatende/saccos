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
	loan taker name: <input name="loan_member" type="text" placeholder="loan taker name" required/><br>	
	amount of loan taken: <input name="loan_taken" type="money_format" placeholder="amount of loan taken" required/><br>
	amount of loan payed: <input name="loan_payed" type="money_format" placeholder="amount of loan payed" required/><br>
	date a loan payed: <input name="loan_payed_date" type="date" placeholder="date a loan payed" required/><br>
	loan to be payed remained: <input name="loan_tobepayed_remained" type="money_format" placeholder="loan to be payed remained required/>
	time remained for loan to be payed: <input name="time_remained" type="time_span" placeholder="time remained for loan to be payed  required/><br>
	
	loan category: <input name="loan_category" type="money_format" placeholder="loan category" required/><br>
	interest: <input name="interest" type="number_format" placeholder="interest" required/><br>
	time span: <input name="time_span" type="number_format" placeholder="time span" required/><br>
	saving account number: <input name="saving_account_number" type="number_format" placeholder="saving account number" required/><br>
	<input name="submit" type="submit"  value="send" required/>
	</form>