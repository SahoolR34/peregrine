<?php
	session_start();
	include 'connect_db.php';
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<title>Peregrine Homepage</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	<style type="text/css">
		
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
	margin: 0;
	padding: 0;
}
.wrapper{
	width: 1170px; 
	margin:auto;
}
body hr{
	width: 100%;
	height: 100vh;
	align-items: center;
	background: #f5f5f5;
	font-family: 'Barlow', sans-serif;
}
header{
	background: url("images/2.jpeg");
	height: 100vh;
	-webkit-background-size:cover;
	background-position: center center;
	position:relative;
}
.nav-area{
	float: right;
	list-style: none;
	 margin-top: 30px;
}
.nav-area li{
	display: inline-block;
}
.nav-area li a{
	color: #97ed0c;
	text-decoration: none;
	padding: 5px 20px;
	font-display:poppins;
	font-size: 14px;
}
.nav-area li a:hover{
	background: #97ed0c;
	color: #333;
}
.logo img{
	width: 120px;
	float: left;
	height: auto;
	filter: drop-shadow(-3px -3px 2px rgba(225,225,225,0.3))
			drop-shadow(5px 5px 5px rgba(0,0,0,0.2))
			drop-shadow(15px 15px 15px rgba(0,0,0,0.2));
}
.welcome-text{
	position: absolute;
	width: 600px;
	height: 300px;
	margin: 20% 30%;
	text-align: center;
}
h1
{
	position: relative;
	margin: 0;
	color: #fcfafa;
	font-size: 4em;
	font-weight: 900;
	overflow: hidden;
}
h1 span
{
	color: #ff1a00;
}
.jumbotron{
	color: #ded0c5;
	font-size: 17px;
}
h3{
	color: #02fa7a;
	font-size: 30px;
	text-align: center;
}
.client-wrap{
	width: 90%;
	height: auto;
	text-align: center;
}
.client-wrap h2
{
	font-size: 60px;
	color: #fcfafa;
}
.client-wrap hr
{
	width: 15%;
	height: 5px;
	border: none;
	background: #26ccca;
	margin: auto;
	margin-top: 30px;
	margin-bottom: 30px;
}
.client-in{
	width: 100%;
	height: auto;
}
.client-in ul li
{
	list-style: none;
	display: inline-block;
	width: 150px;
	height: 100px;
	position: relative;
	overflow: hidden;
	cursor: pointer;
	transition: .5s;
	margin: 15px;
}
.client-in ul li img
{
	width: 100%;
	height: 100%;
}
.client-in ul li img:nth-child(1)
{
	transform: translateY(0);
	transition: .5s;
}
.client-in ul li img:nth-child(2)
{
	transform: translateY(0);
	transition: .5s;
}
/* Hover-Section */

.client-in ul li:hover img:nth-child(1)
{
	transform: translateY(-100%);
	transition: .5s;
}
.client-in ul li:hover img:nth-child(2)
{
	transform: translateY(-100%);
	transition: .5s;
}
footer
{
	position: relative;
	width: 100;
	height: auto;
    padding: 50px 100px;
    background: #111;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
footer .container
{
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
	flex-direction: row;
}
footer .container .sec
{
	margin-right: 20px;
}
footer .container .sec.aboutus
{
	width: 40%;
}
footer .container .sec.aboutus h2
{
	position: relative;
	color: #fff;
	font-weight: 500;
	margin-bottom: 15px;
}
footer .container .sec.aboutus h2:before
{
	content: '';
	position: absolute;
	bottom: -5px;
	left: 0;
	width: 50px;
	height: 2px;
	background: #f00;
}
footer p
{
	color: #999;
}
.sci
{
	margin-top: 20px;
	display: flex;
}
.sci li
{
	list-style: none;
}
.sci li a
{
	display: inline-block;
	width: 40px;
	height: 40px;
	background: #222;
	display: flex;
	justify-content: center;
	align-items: center;
	margin-right: 10px;
	text-decoration: none;
	border-radius: 4px;
}
.sci li a:hover
{
	background: #f00;
}
.sci li a .fa{
	color: #fff;
	font-size: 20px;
}
.quickLinks{
	position: relative;
	width: 25%;
}
.quickLinks ul li
{
	list-style: none;
}
.quickLinks ul li a
{
	color: #999;
	text-decoration: none;
	margin-bottom: 10px;
	display: inline-block;
}
.quickLinks ul li a:hover
{
	color: #fff;
}
.contact
{
	width: calc(35% - 60px);
	margin-left: 0 !important;
}
.contact .info{
	position: relative;
}
.contact .info li
{
	display: flex;
	margin-bottom: 16px;
}
.contact .info li span:nth-child(1)
{
	color: #fff;
	font-size: 20px;
	margin-right: 10px;
}
.contact .info li span
{
	color: #999;
}
.contact .info li a
{
	color: #999;
	text-decoration: none;
}
.contact .info li a:hover
{
	color: #fff;
}
footer .container .sec.quickLinks h2
{
	position: relative;
	color: #fff;
	font-weight: 500;
	margin-bottom: 15px;
}
footer .container .sec.quickLinks h2:before
{
	content: '';
	position: absolute;
	bottom: -5px;
	left: 0;
	width: 50px;
	height: 2px;
	background: #f00;
}
footer .container .sec.contact h2
{
	position: relative;
	color: #fff;
	font-weight: 500;
	margin-bottom: 15px;
}
footer .container .sec.contact h2:before
{
	content: '';
	position: absolute;
	bottom: -5px;
	left: 0;
	width: 50px;
	height: 2px;
	background: #f00;
}
.copyrightText
{
	width: auto;
	background: #181818;
	padding: 8px 100px;
	text-align: center;
	color: #999;
}
@media (max-width: 991px)
{
	footer
	{
		padding: 40px;
	}
	footer .container
	{
		flex-direction: column;
	}
	footer .container .sec
	{
		margin-right: 0;
		margin-bottom: 40px;
	}
	footer .container .sec.aboutus,.quickLinks,.contact
	{
		width: 100%;
	}
	.copyrightText{
		padding: 8px 40px;
	}
}
.features{
	padding: 100px 0;
}
.features h1{
	text-align: center;
	font-size: 50px;
	padding-bottom: 30px;
	color: #13ad96;
}
.feature-img img
{
	width: 45%;
	margin: 20px;
}
.feature span{
	color: #a80f19;
}
#id1{
	text-align: center;
	color: #0ffbf8;
}
	</style>
	</head>
<body>

	<header>
	<div class="wrapper">
	<div class="logo">
	<img src="images/pere.png" alt="This is a logo">
	</a></div>
	   		
	<ul class="nav-area">
		<li><a href="user.php">Home</a></li>
		<li><a href="brand1.php">Brands</a></li>
		<li><a href="booking.php?uid=<?php echo $_SESSION['umail'];?>">Book</a></li>
		<li><a href="myorder.php?uid=<?php echo $_SESSION['umail'];?>">Orders</a></li>
		<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<div>
		<?php
			$sql = mysqli_query($con,"SELECT * FROM userinfo where email='$_SESSION[umail]'");
			while($rk=mysqli_fetch_array($sql)){		
		?>
		<h1 id="id1">Welcome <?php echo $rk['username'];?>!</h1>
		<?php
		}
		?>
	</div>
	<div class="welcome-text">
	<h1><span>F</span>loat L<span>i</span>ke a <span>Ca</span>dillac S<span>t</span>ing<span> L</span>ike a Be<span>ame</span>r</h1>
	</div>
	</header>
	<section class="features">
		<h1>From the <span>PEREGRINE</span> World</h1>
		<div class="containers">
			<div class="row">
				<div class="col-md-4">
					<div class="feature-box">
						<div class="feature-img">
							<img src="images/w0.jpg">
							<img src="images/f1.jpg">
						</div>
						<div style="margin: 45px; font-size: 25px; display: initial;"><a href="wallpapers.php">VROOM it!</a></div>
						<div style="display: initial; padding: 470px; font-size: 25px; color: blue;"><a href="#">AROMA!</a></div>
					</div>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="sec aboutus">
				<h2>About Us</h2>
				<p>
					 At Peregrine Autombile, we believe that our relationship doesn’t end with getting you a new car. Its just the beginning of a long relationship which will need constant support and quality experience. Peregrine Automobile is Bangalore’s largest  car dealership serving customers throughout city from its 18 locations, providing a comfortable and a superior experience.</p>
					 <ul class="sci">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			<div class="sec quickLinks">
				<h2>Quick Links</h2>
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Privacy.Policy</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Terms and condition</a></li>
					<li><a href="#">Contacts</a></li>
				</ul>
			</div>
			<div class="sec contact">
				<h2>Contact Info</h2>
				<ul class="info">
					<li>
						<span><i class="fa fa-phone" aria-hidden="true"></i></span>
						<p><a href="tel:+91 900-800-9837">+91 900-800-9837</a></p>
					</li>
					<li>
						<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
						<p><a href="mailto:knowmore@email.com">info@peregrineauto.com</a></p>
					</li>
					<li>
						<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						<span>Benson Town, Bangalore, India</span>
					</li>
				</ul>
			</div>
		</div>
		</footer>
		<div class="copyrightText">
			<p>Copyright © 2021 Peregrine Automobile. All Rights Reserved. | Designed by Mohammed Sahil</p>
		</div>
	</body>
</html>