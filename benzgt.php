<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MERCEDES BENZ AMG GT</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <style>
    
    *{
  margin: 0;
  padding: 0;
}
body{
  background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #111;
}
.heading{
  padding: 10px 17px 10px 500px;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: bold;
    line-height: 21px;
    color: #87e692;
}
.heading:hover{
  background: #db0b0b;
  color: white;
}
.container{
  width: 100%;
  height: 100vh;
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
.swiper-container {
    width: 100%;
    padding-top: 50px;
    padding-bottom: 200px;
}
.swiper-slide {
    background-position: center;
    background-size: cover;
    width: 500px;
    height: 300px;
    background: #000;
    -webkit-box-reflect: below 1px linear-gradient(transparent,transparent,#0006);
}
.swiper-slide img {
    display: block;
    width: 550px;
}
.accordion{
  margin: 10px;
  padding-left: 25px;
  padding-bottom: 90px;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body.accordion{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #bedfe8;
}
.accordion{
  max-width: 1200px;
}
.accordion .contentBx
{
  position: relative;
  margin: 10px 20px;
}
.accordion .contentBx .label
{
  position: relative;
  padding: 10px;
  background: #3b71b8;
  color: white;
  cursor: pointer;
  font-size: large;
}
.accordion .contentBx .label::before
{
  content: '+';
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  font-size: 1.5em;
}
.accordion .contentBx.active .label::before{
  content: '-';
}
.accordion .contentBx .content
{
  position: relative;
  background: white;
  height: 0;
  overflow: hidden;
  transition: 0.5s;
  overflow-y: auto;
}
.accordion .contentBx.active .content
{
  height: auto;
  padding: 0;
}

.text-center {
    text-align: center;
}
.key{
  float: left;
  padding-left: 5px;
}
.val{
  float: right;
  font-style: italic;
  padding-right: 10px;
}
.line0
{
  color: black;
  padding: 8px;
  font-size: 16px;
  line-height: 21px;
  background: #d7ded9;
}
.line1{
  color: black;
  padding: 8px;
  font-size: 16px;
    line-height: 21px;
    background: #919492;
}
.center{
  display: grid;
  height: 100px;
  justify-content: center;
  text-align: center;
}
.outer{
  margin: 0;
  background: linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #C13584, #E1306C, #FD1D1D);
}
.button{
  height: 70px;
  width: 220px;
  border-radius: 50px;
}
button{
  margin-top: 5px;
  height: 60px;
  width: 210px;
  font-size: 20px;
  color: #fff;
  background-color: black;
  border-radius: 40px;
}
.outer:hover{
  animation: rotate 1.5s linear infinite;
}
@keyframes rotate{
  0%{
    filter: hue-rotate(0deg);
  }
  100%{
    filter: hue-rotate(360deg);
  }
}
.price{
  margin: 10px;
  padding-bottom: 40px;
  padding-left: 555px;
  color: lightcoral;
  line-height: 50px;
  font-size: 20px;
  font-style: italic;
}
.price:hover{
  background: linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #C13584, #E1306C, #FD1D1D);
  color: #fff;
  animation: animate 1s ease-in-out infinite;
}
@keyframes animate{
  0%
  {
    transform: translateY(0px);
  }
  20%
  {
    transform: translateY(-20px);
  }
  40%,100%
  {
    transform: translateY(0px);
  }
}
.col{
  flex-basis: 100%;
}
.col h2{
  margin: 10px;
  padding-left: 525px;
  color: #fff;
}
.row{
  display: flex;
  height: 58%;
  margin: 15px;
  align-items: center;
}
.card{
  width: 200px;
  height: 230px;
  display: inline-table;
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
  background-image: url(images/benzc.jpg);
}
.card2{
  background-image: url(images/benzcls.jpg);
}
.card3{
  background-image: url(images/benzamgg.jpg);
}
.card4{
  background-image: url(images/benzgt.jpeg);
}
.card5{
  background-image: url(images/benzgle.jpg);
}
.card:hover{
  transform: translateY(-10px);
}
footer
{
  position: relative;
  width: 100;
  height: auto;
    padding: 50px 100px;
    background: #000;
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
  </style>
</head>
	<body>
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
    <div class="heading">
      <h2>MERCEDES BENZ AMG GT</h2>
    </div>
    <!-- Swiper -->
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/benzgt-1.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/benzgt-2.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/benzgt-3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/benzgt-4.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/benzgt-5.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/benzgt-6.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/benzgt-7.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/benzgt-8.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/benzgt-9.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/benzgt-10.jpg" />
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 40,
          stretch: 0,
          depth: 200,
          modifier: 1,
          slideShadows: true,
        },
        loop: true,
         autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
      });
    </script>
    <div class="price"><h1>$118,600</h1></div>
    <div class="accordion">
      <div class="contentBx">
        <div class="label">Overview</div>
        <div class="content">
          <ul>
              <li class="line0">
                <span class="key">Vehicle Type :</span>
                <span class="val">Sports CAR</span>
              </li>
              <li class="line1">
                <span class="key">Engine Type :</span>
                <span class="val">Petrol</span>
              </li>
              <li class="line0">
                <span class="key">Drive Type :</span>
                <span class="val">Rear wheel Drive</span>
              </li>
              <li class="line1">
                <span class="key">Cylinders:</span>
                <span class="val">Inline 8</span>
              </li>
              <li class="line0">
                <span class="key">Transmission :</span>
                <span class="val">9-speed automatic</span>
              </li>
              <li class="line1">
                <span class="key">Total Seating :</span>
                <span class="val">2</span>
              </li>
            </ul>
        </div>
      </div>
      <div class="contentBx">
        <div class="label">Fuel & MPG</div>
        <div class="content">
         <ul>
              <li class="line0">
                <span class="key">Combined Mileage :</span>
                <span class="val">8.06/L</span>
              </li>
              <li class="line1">
                <span class="key">Mileage (Cty/Hwy) :</span>
                <span class="val">6.8/12.65 kmpl</span>
              </li>
              <li class="line0">
                <span class="key">Fuel tank Capacity :</span>
                <span class="val">19.8 gal.</span>
              </li>
              <li class="line1">
                <span class="key">Fuel Type :</span>
                <span class="val">Premium unleaded (required)</span>
              </li>
              <li class="line0">
                <span class="key">Range in Miles (Cty/Hwy) :</span>
                <span class="val">189.7/290.2 mi.</span>
              </li>
            </ul>
        </div>
      </div>
      <div class="contentBx">
        <div class="label">Safety</div>
        <div class="content">
          <ul>
              <li class="line0">
                <span class="key">Anti-Braking-System :</span>
                <span class="val">YES</span>
              </li>
              <li class="line1">
                <span class="key">Driver Airbag :</span>
                <span class="val">YES</span>
              </li>
              <li class="line0">
                <span class="key">Parking Sensors :</span>
                <span class="val">YES</span>
              </li>
              <li class="line1">
                <span class="key">Air Bag :</span>
                <span class="val">YES</span>
              </li>
              <li class="line0">
                <span class="key">Number of Airbags :</span>
                <span class="val">7</span>
              </li>
            </ul>
        </div>
      </div>
      <div class="contentBx">
        <div class="label">Dimensions</div>
        <div class="content">
          <ul>
              <li class="line0">
                <span class="key">Curb Weight :</span>
                <span class="val">3560 lbs.</span>
              </li>
              <li class="line1">
                <span class="key">Gross Weight :</span>
                <span class="val">3627 lbs.</span>
              </li>
              <li class="line0">
                <span class="key">Ground Clearance :</span>
                <span class="val">6.1 in.</span>
              </li>
              <li class="line1">
                <span class="key">Height :</span>
                <span class="val">50.7 in.</span>
              </li>
              <li class="line0">
                <span class="key">Length :</span>
                <span class="val">179.0 in.</span>
              </li>
              <li class="line1">
                <span class="key">Width :</span>
                <span class="val">76.3 in.</span>
              </li>
              <li class="line0">
                <span class="key">Boot Space :</span>
                <span class="val">285 liters</span>
              </li>
            </ul>
        </div>
      </div>
    </div>
    <script>
       const accordion = document.getElementsByClassName('contentBx');

      for (i = 0; i<accordion.length; i++){
        accordion[i].addEventListener('click', function(){
          this.classList.toggle('active')
        })
      }
    </script>
    <div class="center">
      <div class="outer button">
        <a href="login.php"><button>BOOK ME!</button></a>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="row">
    <div class="col">
      <h2>Related Search</h2>
        <a href="benzc.php"><div class="card card1">
          <h5>MERCEDES-BENZ C-CLASS</h5>
        </div></a>
        <a href="benzcls.php"><div class="card card2">
          <h5>MERCEDES-BENZ CLS-CLASS</h5>
        </div></a>
        <a href="benzg63.php"><div class="card card3">
          <h5>MERCEDES-BENZ AMG G63</h5>
        </div></a>
        <a href="benzgle.php"><div class="card card5">
          <h5>MERCEDES-BENZ GLE coupé</h5>
        </div></a>
      </div>
    </div>
<footer>
    <div class="foot">
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
</body>
</html>