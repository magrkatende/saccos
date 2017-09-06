<html>
    <head>
			    <meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
		
             <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
				<meta name="description" content="Saccos">
				<meta name="author" content="Frank Thomas">
				<link rel="icon" href="">
				
	<title>Saccos</title>
				
			  <!-- Bootstrap core CSS -->
			  <link href="css/bootstrap.css" rel="stylesheet">
			  <link href="css/style.css" rel="stylesheet">
		
			  <!-- Bootstrap core JS -->
			  <script src="js/bootstrap.js"></script>
			  <script src="js/bootstrap.min.js"></script>    
			  <script src="js/saccosjs.js"></script>	 
			  <script src="assets/js/ie-emulation-modes-warning.js"></script>
    </head>
	
	
    <body>	
        <div class="container-fluid">
        <!-- Second navbar for categories -->
			<nav class="navbar navbar-default">
                <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php">Saccos  Online System</a>
					</div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                     <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="aboutus.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="share.php">Share</a></li>
                        <li><a href="loan.php">Loan</a></li>
                        <li><a href="signup.php">Signup</a></li>
						
                     </ul>
					</div>   <!-- /.navbar-collapse -->
				</div>       <!-- /.container -->
            </nav>         	 <!-- /.navbar -->
        </div>
		
		
		
		<!-- for  loan form  "Carousel with outside indicators from w3school" by  magreth -->		

    <div class="container">
				    <form action="/action_page.php">

						<label for="loan_member">loan_member</label><br>
							<input type="text" id="loan_member" name="loan_member" placeholder="loan taker name..">

						<label for="loan_category">loan_category</label>
							<input type="text" id="loan_category" name="loan_category" placeholder="loan category..">
							
						<label for="loan taken">loan taken</label><br>
							<input type="money_format" id="loan_taken" name="loan_taken" placeholder="loan taken.."><br><br>
							
						<label for="phone">interest</label><br>
							<input type="tel" id="phone" name="phonenumber" placeholder="interest.."><br><br>
							
						<label for="password">password</label>
							<input type="password" id="password" name="password" placeholder="Your password..">
							

						<label for="interest">interest</label>
							<select id="interest" name="interest">
							
								  <option value="otner">other</option>
								  <option value="12%">12%</option>
							      <option value="22%">22%</option>
							      <option value="32%">32%</option>								  
							      <option value="5%">5%</option>
						    </select>

						<label for="subject">Reason for a loan </label>
						     <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

						     <input type="submit" value="Submit">

				    </form>
	   <
    </body>
</html>
	<form method="post" action="">
	
	<input name="loan_category" type="text" placeholder="loan category" required/><br>
	<input name="time_span" type="number_format" placeholder="time span" required/><br>
	<input name="saving_account_number" type="number_format" placeholder="saving account number" required/><br>
	<input name="starting_date" type="date" placeholder="starting date" required/><br>
	<input name="expiring_date" type="date" placeholder="expiring date" required/><br>
	<input name="referee1" type="text" placeholder="name of your first referee" required/><br>
	<input name="phone_no" type="phone_no" placeholder="first referee phone number" required/><br>
	<input name="referee2" type="text" placeholder="name of your second referee" required/><br>
	<input name="phone_no" type="phone_no" placeholder="second referee phone number" required/><br>
	
	
	<input name="submit" type="submit"  value="add" required/>
	</form>