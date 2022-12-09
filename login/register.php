<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">

    <?php
        require('../controllers/customer_controller.php');

        //$result = select_all_records_ctr();
        
    ?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register</h2>
				</div>
			</div>
			<div class="row justify-content-center" >
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Don't have an account?</h3>
		      	<form action="../actions/registerprocess.php" method= "POST" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="type your name" required>
		      		</div>
                      <div class="form-group">
		      			<input type="email" class="form-control" name="customer_email" id="customer_email" placeholder="type your Email"  title="Uppercase (A-Z) and lowercase (a-z) English letters.
Digits (0-9).
Characters ! # $ % & ' * + - / = ? ^ _ ` { | } ~
Character . ( period, dot or fullstop) provided that it is not the first or last character and it will not come one after the other." required>
		      		</div>
                      <div class="form-group">
		      			<input type="text" class="form-control" name="customer_country" id="customer_country" placeholder="country" required>
		      		</div>
                      <div class="form-group">
		      			<input type="text" class="form-control"  name="customer_city" id="customer_city" placeholder="city" required>
		      		</div>
                      <div class="form-group">
		      			<input type="text" class="form-control" name="customer_contact" id="customer_contact" placeholder="type your phonenumber" required>
		      		</div>
                      
	            <div class="form-group">
	              <input id="customer_pass" type="password" class="form-control" placeholder="Password" name="customer_pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must have one capital letter" required>
	              <span toggle="#customer_pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="save">Register</button>
	            </div>
	            <!-- <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div> -->
	          </form>
			  <div class="mb-4 text-center">
			  <?php
    session_start();
    if(!empty($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
					</div>
	          <!-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div> -->
		      </div>
				</div>
			</div>
		</div>
		
	</section>
	
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

