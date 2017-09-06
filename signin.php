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
		
		
		
		<!-- for  signin or login form  from w3school" by  magreth -->	
		
			<form action="/action_page.php">
			<h2>Login </h2>	
			
					<div class="imgcontainer">
							<img src="image/img_avatar2.png" alt="Avatar" class="avatar">
					</div>	

					<div class="container">
							<label><b>Username</b></label>
									<input type="text" placeholder="Enter Username" name="uname" required>

							<label><b>Password</b></label>
									<input type="password" placeholder="Enter Password" name="psw" required>

									<button type="submit">Login</button>
									<input type="checkbox" checked="checked"> Remember me
					</div>

					<div class="container" style="background-color:#f1f1f1">
									<button type="button" class="cancelbtn">Cancel</button>
									<span class="psw">Forgot <a href="#">password?</a></span>
					</div>
			</form> 

				
    </body>