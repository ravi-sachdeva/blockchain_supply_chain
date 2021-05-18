<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="check.php" method="post" >
	<h1>Create Account</h1>
	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
	
	<input type="text" name="name" placeholder="Name" required>
	<input type="email" name="email" placeholder="Email"required>
	<input type="password" name="password" placeholder="Password" required>
	<input type="text" name="contact" placeholder="Contact Number" pattern="[0-9]{10}" required>
	

	<select name="profile"  >
	    <option value="Profile" placeholder="Name">Select your profile</option>
	    <option value="Manufacturer">Manufacturer</option>
		<option value="Supplier">Supplier</option>
		<option value="Distributer">Distributer</option>
		<option value="Customer">Customer</option>
	</select>
	<br/>
	<button type="submit" name="submit" value="Add" >SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="signin.php" method="post">
		<h1>Sign In</h1>
		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
	
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<a href="#">Forgot Your Password</a>

	<button type="submit" name="submit" value="Add">Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>








