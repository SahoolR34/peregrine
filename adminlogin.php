<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<style type="text/css">

	@import "htps://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: url(bg6.jpg) no-repeat;
	background-size: cover;
}
.login-admin{
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50px,-50px);
	color: #4caf50;
}
.login-admin h1{
	float: left;
	font-size: 40px;
	border-bottom: 6px solid #4caf50;
	margin-bottom: 50px;
	padding: 13px;
}
.textbox{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 1px solid #4caf50; 
	}
	.textbox i{
		width: 26px;
		float: left;
		text-align: center;
	}
	.textbox input{
		border: none;
		outline: none;
		background: none;
		color: white;
		font-size: 80%;
		float: left;
		margin: 0 10px;
	}
	.btn{
		width: 100%;
		background: none;
		border: 2px solid #4caf50;
		color: #4caf50;
		padding: 5px;
		font-size: 18px;
		cursor: pointer;
		margin: 12px 0;
	}
</style>
</head>
<body>
<form action="" method="POST">
<div class="login-admin">
	<h1>Login</h1>
	<div class="textbox">
		<i class="fa fa-user" aria-hidden="true"></i>
		<input type="email" placeholder="Admin Email" name="uname" value="" required="">
	</div>
	<div class="textbox">
		<i class="fa fa-lock" aria-hidden="true"></i>
		<input type="password" placeholder="Password" name="pass" value="" required="">
	</div>
	<!-- <a href="Admin1.php"> -->
	<input class="btn" type="submit" name="Save" value="Sign in"></a>
	<!-- <input type="submit" name="login" value="Login"> -->
</div>
<?php
include 'connect_db.php';
if(isset($_POST['Save']))
{
  $uname=$_POST['uname'];
  $pass = $_POST['pass'];
  
  $sql = mysqli_query($con,"SELECT * FROM admin_info where adminmail = '$uname' AND `password` ='$pass'");

  if(mysqli_num_rows($sql)>0)
  {
	  echo "<script>alert('Login Successfull..');</script>";
	  echo "<script>location.href = 'Admin1';</script>";
  }
  else
  {
	echo "<script>alert('Invalid Credentials....');</script>";
	echo "<script>location.href = '#';</script>";
  }
}

?>
</form>
</body>
</html>