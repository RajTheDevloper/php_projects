<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="text-center bg-danger" > LOGIN FORM </h2>
				<form action="validation.php" method="post">

					<div class="form-group">
						<label class='text-dark'><strong>username</strong></label>
						<input type="text" name="user" placeholder = 'name' class="form-control" required>
					</div>
					
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password" placeholder="*****" class="form-control" required>
					</div>
					<button class="btn btn-primary" type="submit" >LOGIN</button>
				</form><br><br>
				
			</div>
			<div class="col-lg-6">
				<h2 class="text-center bg-danger"> SIGNIN FORM </h2>
				<form action="registration.php" method="post">

					<div class="form-group">
						<label>username</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button class="btn btn-primary" type="submit">SIGNIN</button>
				</form>
				
			</div>

			
		</div>
	</div>

</body>
</html>