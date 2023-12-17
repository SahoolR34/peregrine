<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lamborghini</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	<script>
		window.onload=function(){
			document.getElementById('loader').style.display="none";
			document.getElementById('content').style.display="block";
		}
	</script>
	<style type="text/css">
		
		*{
	margin: 0;
	padding: 0;
	font-family: 'Roboto', sans-serif;
}
.container{
	width: 100%;
	height: 100vh;
	background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(images/001.jpg);
	background-position: center;
	background-size: cover;
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
.logo{
	width: 150px;
	margin-left: 18px;
	cursor: pointer;
}
.row{
	display: flex;
	height: 58%;
	margin: 15px;
	align-items: center;
}
.col{
	flex-basis: 70%;
}
h1{
	color: #fff;
	font-size: 70px;
	margin: 7px;
}
p{
	margin: 7px;
	color: #fff;
	font-size: 13px;
	line-height: 13px;
}
.card{
	width: 200px;
	height: 230px;
	display: inline-flex;
	border-radius: 10px;
	padding: 15px 25px;
	box-sizing: border-box;
	cursor: pointer;
	margin: 10px 15px;
	background-position: center;
	background-size: cover;
	transition: transform 0.5s;
}
.card1{
	background-image: url(images/lamboh.jpg);
}
.card2{
	background-image: url(images/lambosvj.jpg);
}
.card3{
	background-image: url(images/lambourus.jpg);
}
.card4{
	background-image: url(images/lambosian.jpg);
}
.card5{
	background-image: url(images/lambocent.jpg);
}
.card:hover{
	transform: translateY(-10px);
}
h5{
	color: #fff;
	text-shadow: 0 0 5px #ef00ff;
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
footer .foot
{
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
	flex-direction: row;
}
footer .foot .sec
{
	margin-right: 20px;
}
footer .foot .sec.aboutus
{
	width: 40%;
}
footer .foot .sec.aboutus h2
{
	position: relative;
	color: #fff;
	font-weight: 500;
	margin-bottom: 15px;
}
footer .foot .sec.aboutus h2:before
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
footer .foot .sec.quickLinks h2
{
	position: relative;
	color: #fff;
	font-weight: 500;
	margin-bottom: 15px;
}
footer .foot .sec.quickLinks h2:before
{
	content: '';
	position: absolute;
	bottom: -5px;
	left: 0;
	width: 50px;
	height: 2px;
	background: #f00;
}
footer .foot .sec.contact h2
{
	position: relative;
	color: #fff;
	font-weight: 500;
	margin-bottom: 15px;
}
footer .foot .sec.contact h2:before
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
	footer .foot
	{
		flex-direction: column;
	}
	footer .foot .sec
	{
		margin-right: 0;
		margin-bottom: 40px;
	}
	footer .foot .sec.aboutus,.quickLinks,.contact
	{
		width: 100%;
	}
	.copyrightText{
		padding: 8px 40px;
	}
}
#loader{
		 background: black;
		 position: absolute;
		 padding-top: 40px;
		 padding-left: 320px;
		 margin: auto;
		 top: 0;
		 right: 0;
		 bottom: 0;
		 left: 0;
		 width: auto;
		 height: auto;
		}
		#loader img{
			width: 550px;
		}
		#content{
			display: none;
		}
	</style>
</head>
<body>
	<div id="loader">
		<img src="images/lamboload.gif">
	</div>
	<div id="content">
	<div class="container">
		<div class="wrapper">
			<img src="images/pere.png" class="logo">
			<ul class="nav-area">
				<li><a href="index.php">Home</a></li>
				<li><a href="aboutus.html">About</a></li>
				<li><a href="brand.php">Brands</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="login.php">Login in</a></li>
				<li><a href="registration.php">Sign up</a></li>
			</ul>
		</div>
		<div class="row">
			<div class="col">
				<h1><b>LAMBORGHINI</b></h1>
				<p style="color: #b7bcc4;"><b>Automobili Lamborghini S.p.A. is an Italian brand and manufacturer of luxury sports cars and SUVs based in Sant'Agata Bolognese. The company is owned by the Volkswagen Group through its subsidiary Audi.
				Automobili Lamborghini was officially established in 1963 in Sant’Agata Bolognese, Italy, and the same year debuted its first car, the Lamborghini 350 GTV, a two-seater coupe with a V12 engine.</p>
			</div>
			<div class="col">
				<a href="lambohu.php"><div class="card card1">
					<h5>LAMBORGHINI Huracán</h5>
				</div></a>
				<a href="lambosvj.php"><div class="card card2">
					<h5>LAMBORGHINI Aventador SVJ</h5>
				</div></a>
				<a href="lambourus.php"><div class="card card3">
					<h5>LAMBORGHINI Urus</h5>
				</div></a>
				<a href="lambosian.php"><div class="card card4">
					<h5>LAMBORGHINI Sián</h5>
				</div></a>
				<a href="lambocent.php"><div class="card card5">
					<h5>LAMBORGHINI centenario</h5>
				</div></a>
			</div>
		</div>
	</div></b></b></b>
<footer>
		<div class="foot">
			<div class="sec aboutus">
				<h2>About Us</h2>
				<p>
					 At Peregrine Autombile, we believe that our relationship doesn’t end with getting you a new car. Its just the beginning of a long relationship which will need constant support and quality experience. Auto Express is Bangalore’s largest  car dealership serving customers throughout city from its 18 locations, providing a comfortable and a superior experience.</p>
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
						<span>Benson Town, Bangalore, India - 560046</span>
					</li>
				</ul>
			</div>
		</div>
		</footer>
		<div class="copyrightText">
			<p>Copyright © 2021 Peregrine Automobile. All Rights Reserved.</p>
		</div>
</div>
</div>
</body>
</html>