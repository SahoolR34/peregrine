<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	/* color: #fff; */
	font-size: 16px;

}
/* .input1 {
	font-size: 16px;
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	margin-top: 20px; */
	/* color: #fff; */
/* } */
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
	text-align: right;
	padding: 0px;
	margin: 0px;
	font-size: 30px;
}
	</style>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.min.css" rel="stylesheet">
</head>
<body>
	<div id="loader">
		<img src="images/load3.gif">
</div>
<div id="content">
	<div class="container-signup">
		<div class="signup-more"></div>
		<div class="wrap-signup"><div class="home"><a href="index.php"><i class="fa fa-home"></i></div></a>
			<form class="signup-form" action="" method="POST">
				<span class="signup-form-title">Sign Up</span>

				<div class="wrap-input">
					<span class="label-input">Full Name</span>
					<input class="input" type="text" name="fullname" placeholder="Name..." required="">
					<span class="focus-input"></span>
				</div>

				<div class="wrap-input">
					<span class="label-input">Email</span>
					<input class="input" type="text" name="email" placeholder="Email Address" required="">
					<span class="focus-input"></span>
				</div>

				<div class="wrap-input">
					<span class="label-input">Username</span>
					<input class="input" type="text" name="username" placeholder="Username..." required="">
					<span class="focus-input"></span>
				</div>

				<div class="wrap-input">
					<span class="label-input">Phone No.</span>
					<input class="input" type="text" name="pnumber" placeholder="Phone Number" maxlength="10" required="">
					<span class="focus-input"></span>
				</div>	
				<div class="wrap-input">
					<span class="label-input">Password</span>
					<input class="input" type="password" name="pass" placeholder="**************" required="">
					<span class="focus-input"></span>
				</div>
				<div class="wrap-input">
					<span class="label-input">Repeat Password</span>
					<input class="input" type="password" name="repass" placeholder="**************" required="">
					<span class="focus-input"></span>
				</div>

				<div class="container-terms">
					<input class="input-checkbox" id=ckb1 type="checkbox" name="remember-me">
					<label class="label-checkbox" for="ckb1">
						<span class="txt1">I agree to the <a class="txt2 hov1" href="#">Terms of User</a>
						</span>
					</label>
				</div>
				<div class="container-signup-form-btn">
					<div class="wrap-signup-form-btn">
						<button class="signup-form-btn" name="signup" value="signup">Sign Up</button>
					</div>
					<a  class="login-button hov1" href="login.php">
						Sign in <i class="fa fa-sign-in"></i>
					</a>
				</div>
				<?php
					include 'connect_db.php';
					
					if(isset($_POST['signup']))
						{
							$name = $_POST['fullname'];
							$mail = $_POST['email'];
							$username = $_POST['username'];
							$phno = $_POST['pnumber'];
							$pass = $_POST['pass'];
							$repass = $_POST['repass'];

							$sql = mysqli_query($con,"SELECT * FROM userinfo where email = '$mail' AND `pnumber` = '$phno'");
						
							if(mysqli_num_rows($sql)>0){
								echo "<script>alert('Sorry the entered Email or Phone number already exists!Please try to login');</script>";
								echo "<script>location.href='login.php';</script>";
							}
							else{
								if($pass == $repass){
							$sql=mysqli_query($con,"INSERT INTO userinfo(Fname,email,username,pnumber,pass) VALUES('$name','$mail','$username','$phno','$pass')");
							if($sql) {
								echo "<font color=#ffc107><script>alert('Registration Successufull');</script></font>";
						   echo "<script>location.href='login.php';</script>";/* '' name is next form after submit */
							}
							else{
							echo "<font color=red>Registration Failed, Try again</font>";
							}
						}
						else{
							echo "<font color=blue>Password and Confirmpassword does'nt match!Please try again</font>";
						}
					   }
				 }
				?>
			</form>
		</div>
	</div>
</div>
</body>
</html>