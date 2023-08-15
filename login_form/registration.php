<?php 

session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root');
if ($con) {
	echo "connection successful";
} else {
	echo "no connection";
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];

$q1 = "select * from signin where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $q1); //firing query

$num = mysqli_num_rows($result);

if($num == 1){
	echo "already Exist";
}else{
	$q2 = "insert into signin (name, password) values ('$name', '$pass')";
	mysqli_query($con, $q2);
}

session_destroy();


?>