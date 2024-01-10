<?php require_once 'authoController.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	
<!--bootstrap cdn-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style type="text/css">
	/* import google font */
	@import url('https://fonts.googleapis.com/css?famiy=Lora');
	.form-div
	{
		margin: 50px auto 50px;
		padding: 25px 15px 10px 15px;
		border: 1px solid #80ced7;
		border-radius: 5px;
		font-size: 0.5cm;
		font-family: 'Lora',serif;

	}
	.form p
	{
		font-size: .89cm;
	}
	.form-div.login
	{
		margin-top: 100px;
	}
	.logout
	{
		color: red;
	}



</style>


<title>Homepage</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div login">
				
				<div class="alert <?php echo $_SESSION['alert-class']; ?>">
				<?php echo $_SESSION['message']; ?>
				</div>

				<h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
				<a href="#" class="logout">Logout</a>

				<div class="alert alert-warning">
					You need to verify your account.
					Sign in to your email account and click on the
					verification link we just emailed you at
					<strong><?php echo $_SESSION['email']; ?></strong>
				</div>

				<button class="btn btn-block btn-lg btn-primary">I am verified!</button>



			</div>
		</div>
	</div>

</body>
</html>