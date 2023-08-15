<?php 

session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
}


session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">
		
	<h2 class="text-center"> YOUR WELCOME <?php echo $_SESSION['username']; ?></h2>
	<br>

	<a href="logout.php" class="btn btn-primary d-block">LOGOUT</a>

	</div>
</body>
</html>