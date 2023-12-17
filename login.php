<?php
	session_start();
?>
</!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	<script>
	window.onload=function(){
	document.getElementById('loader').style.display="none";
	document.getElementById('content').style.display="block";
	};
</script>
<style>

*
{
	margin: 0px;
	padding: 0px;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
input, textarea{
	outline: none;
	border: none;
}
button{
	outline: none !important;
	border: none;
	background: transparent;
}
button:hover{
	cursor: pointer;
}
a, a:hover{
	text-decoration: none;
}
textarea:focus, input:focus{
	border-color: transparent !important;
}
input:focus::-webkit-input-placeholder{color: transparent;}
input:focus:-moz-placeholder{color: transparent;}
input:focus::-moz-placeholder{color: transparent;}
input:focus:-ms-input-placeholder{color: transparent;}

input::-webkit-input-placeholder{color: #ccc;}

textarea::-webkit-input-placeholder{color: #ccc;}
.container-signup
{
	width: 100%;
	display: flex;
}
.signup-more{
	width: calc(100% - 520px);
	position: relative;
	background-image: url(bg2.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}
.wrap-signup{
	width: 520px;
	min-height: 100vh;
	background: #fff;
	border-radius: 2px;
	position: relative;
	padding: 72px 50px 0px 50px;
}
.signup-form
{
	width: 100%;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}
.signup-form-title
{
	display: block;
	width: 100%;
	font-size: 39px;
	font-weight: 900;
	color: #333333;
	line-height: 1.2;
	text-align: left;
	padding-bottom: 59px;
}
.wrap-input
{
	width: 100%;
	position: relative;
	border-bottom: 2px solid #dbdbdb;
	margin-bottom: 45px;
}
.label-input{
	font-size: 18px;
	font-weight: 600;
	color: #999999;
	line-height: 1.2;
	padding-left: 2px;
}
.input{
	display: block;
	width: 100%;
	height: 50px;
	background: transparent; 
	font-size: 22px;
	color: #555;
	line-height: 1.2;
	padding: 0 2px;
}
.focus-input
{
	position: absolute;
	display: block;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	pointer-events: none;
}
.focus-input::before{
	content: "";
	display: block;
	position: absolute;
	bottom: -2px;
	left: 0px;
	width: 0;
	height: 2px;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	-moz-transition: all 0.4s;
	transition: all 0.4s;
	background: #d5007d;
}
.input:focus + .focus-input::before
{
	width: 100%;
}
.container-terms{
	width: 100%;
	display: flex;
	align-items: center;
	padding-bottom: 35px;
}
.input-checkbox{
	display: inline-block;
}
.label-checkbox{
	margin: 0;
	display: block;
	position: relative;
	padding-left: 26px;
	cursor: pointer;
}
.label-checkbox::before{
	content: "\f00c";
	font-family: FontAwesome;
	font-size: 13px;
	color: transparent;
	display: flex;
	justify-content: center;
	align-items: center;
	position: absolute;
	left: 0px;
	top: 50%;
	width: 16px;
	height: 16px;
	border-radius: 2px;
	background: #e6e6e6;
	transform: translateY(-50px);
	-webkit-transform:translateY(-50px);
}

.input-checkbox:checked + .label-checkbox::before{
	color: #c87ef0;
}
.txt1, .txt2{
	font-size: 15px;
	color: #999;
	line-height: 1.4;
}
.txt2{
	color: #666;
}
.hov1::hover{
	color: #c87ef0;
}
.container-signup-form-btn{
	width: 100%;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
}
.wrap-signup-form-btn
{
	display: block;
	position: relative;
	padding-bottom: 10px;
}
.signup-form-btn
{
	width: 245px;
	height: 50px;
	padding: 10px 30px;
	background: #e8519e;
	border-radius: 25px;
	font-size: 16px;
	color: #fff;
}
.login-button{
	font-size: 18px;
	color: #666;
	text-decoration: none;
}
body
{
	margin: 0;
	padding: 0;
	background: url(bg.jpg);
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
}
.loginbox
{
	width: 320px;
	height: 420px;
	background: #000;
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
.avatar
{
	width: 100px;
	height: 100px;
	border-radius: -50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}
 h1
 {
 margin: 0;
 padding: 0 0 20px;
 text-align: center;
 font-size: 22px;

 }
 .loginbox p
 {
 	margin: 0;
 	padding: 0;
 	font-weight: bold;
 }
 .loginbox input
 {
 	width: 100%;
 	margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;

}
.loginbox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: #fb2525;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: 12px;
}
.loginbox a
{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgrey;
}
.loginbox a:hover
{
	color: #ffc107;
}
#loader{
	position: absolute;
	margin: auto;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	width: 500px;
	height: 400px;
	}
#loader img{
	width: 500px;
	}
#content{
	display: none;
	}
.home{
	padding: 10px;
	padding-left: 15px;
	margin: 10px;
	font-size: 25px;
}
</style>
</head>
<body> 
<div id="loader">
		<img src="images/load3.gif">
</div>
<div id="content">
<div class="home"><a href="index.php"><i class="fa fa-home"></i></div></a>      
<div class="loginbox">
	<img src="Login.gif" class="avatar">
	<h1>Login Here</h1>
	<form method="POST" action="">
		<p>Email</p>
		<input type="text" name="email" placeholder="Enter email" required="">
		<p>Password</p>
		<input type="Password" name="pass" placeholder="Enter Password" required="">
         <input type="submit" name="login" value="Login">
        
          <h6>Dont have an account? <a href="registration.php">Sign Up</a></h6>
          <?php
          	include 'connect_db.php';
          	if(isset($_POST['login']))
          	{
          		$mail = $_POST['email'];
          		$pass = $_POST['pass'];

          		$sql = mysqli_query($con,"SELECT * FROM userinfo where email = '$mail' AND `pass` = '$pass'");

          		if(mysqli_num_rows($sql)>0)
          		{
          			$_SESSION['umail'] = $mail;
          			echo "<script>alert('login successful')</script>";
          			echo "<script>location.href='user.php'</script>";
          		}
          	}
          ?>
	</form>

</div>	
</div>

</body>
</html>