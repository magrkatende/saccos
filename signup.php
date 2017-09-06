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
                        <li><a href="index.php">Home</a></li>
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
		
		
		
		<!-- for  contact form   from w3school by  magreth -->		
		<div class="container">
				    <form action="/action_page.php">

						<label for="fname">First Name</label><br>
							<input type="text" id="fname" name="firstname" placeholder="Your name..">

						<label for="lname">Last Name</label>
							<input type="text" id="lname" name="lastname" placeholder="Your last name..">
							
						<label for="email">Email</label><br>
							<input type="email" id="email" name="email" placeholder="Your Email.."><br><br>
							
						<label for="phone">Phone Number</label><br>
							<input type="tel" id="phone" name="phonenumber" placeholder="Phone number.."><br><br>
							
						<label for="password">password</label>
							<input type="password" id="password" name="password" placeholder="Your password..">
							

						<label for="title">Title</label>
							<select id="title" name="title">
								  <option value="Administrator">Administrator</option>
							      <option value="Share holder">Share holder</option>
							      <option value="Member">Member</option>								  
							      <option value="New member">New Member</option>
						    </select>

						<label for="subject">Subject </label>
						     <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

						     <input type="submit" value="Submit">

				    </form>
	   </div> 
				
    </body>