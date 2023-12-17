<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar Dashboard Template</title>
    <style type="text/css">body{
  margin: 0;
  padding: 0;
  font-family: "Roboto", sans-serif;
}

header{
  z-index: 1;
  position: fixed;
  background: #22242A;
  padding: 20px;
  width: calc(100% - 0%);
  top: 0;
  height: 30px;
}

.left_area h3{
  color: #fff;
  margin: 0;
  text-transform: uppercase;
  font-size: 22px;
  font-weight: 900;
}

.left_area span{
  color: #19B3D3;
}

.logout_btn{
  padding: 5px;
  background: #19B3D3;
  text-decoration: none;
  float: right;
  margin-top: -30px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  transition: 0.5s;
  transition-property: background;
}

.logout_btn:hover{
  background: #0B87A6;
}

.sidebar{
  z-index: 1;
  top: 0;
  background: #2f323a;
  margin-top: 70px;
  padding-top: 30px;
  position: fixed;
  left: 0;
  width: 250px;
  height: calc(100% - 9%);
  transition: 0.5s;
  transition-property: left;
  overflow-y: auto;
}

.profile_info{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.sidebar .profile_info .profile_image{
  width: 100px;
  height: 100px;
  border-radius: 100px;
  margin-bottom: 10px;
}

.sidebar .profile_info h4{
  color: #ccc;
  margin-top: 0;
  margin-bottom: 20px;
}

.sidebar a{
  color: #fff;
  display: block;
  width: 100%;
  line-height: 54px;
  text-decoration: none;
  padding-left: 40px;
  box-sizing: border-box;
  transition: 0.5s;
  transition-property: background;
}

.sidebar a:hover{
  background: #19B3D3;
}

.sidebar i{
  padding-right: 10px;
}

label #sidebar_btn{
  z-index: 1;
  color: #fff;
  position: fixed;
  cursor: pointer;
  left: 300px;
  font-size: 20px;
  margin: 5px 50px;
  transition: 0.5s;
  transition-property: color;
}

label #sidebar_btn:hover{
  color: #19B3D3;
}

#check:checked ~ .sidebar{
  left: -185px;
}

#check:checked ~ .sidebar a span{
  display: none;
}

#check:checked ~ .sidebar a{
  font-size: 20px;
  margin-left: 165px;
  width: 100%;
}
.page-not-found
{ width: (100% - 250px);
  margin-top: 60px;
  padding: 20px;
  margin-left: 250px;
  background: url(p1.png) no-repeat;
  background-position: center;
  background-size: cover;
  height: 100vh;
}

.content{
  width: (100% - 250px);
  margin-top: 60px;
  padding: 20px;
  margin-left: 250px;
  background: url(p1.png) no-repeat;
  background-position: center;
  background-size: cover;
  height: 100vh;
  transition: 0.5s;
}

#check:checked ~ .content{
  margin-left: 60px;
}

#check:checked ~ .sidebar .profile_info{
  display: none;
}

#check{
  display: none;
}

.mobile_nav{
  display: none;
}

.content .card p{
  background: #fff;
  padding: 15px;
  margin-bottom: 10px;
  font-size: 14px;
  opacity: 0.8;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Responsive CSS */

@media screen and (max-width: 780px){
  .sidebar{
    display: none;
  }

  #sidebar_btn{
    display: none;
  }

  .content{
    margin-left: 0;
    margin-top: 0;
    padding: 10px 20px;
    transition: 0s;
  }

  #check:checked ~ .content{
    margin-left: 0;
  }

  .mobile_nav{
    display: block;
    width: calc(100% - 0%);
  }

  .nav_bar{
    background: #222;
    width: 100% - 0px;
    margin-top: 70px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
  }

  .nav_bar .mobile_profile_image{
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }

  .nav_bar .nav_btn{
    color: #fff;
    font-size: 22px;
    cursor: pointer;
    transition: 0.5s;
    transition-property: color;
  }

  .nav_bar .nav_btn:hover{
    color: #19B3D3;
  }

  .mobile_nav_items{
    background: #2F323A;
    display: none;
  }

  .mobile_nav_items a{
    color: #fff;
    display: block;
    text-align: center;
    letter-spacing: 1px;
    line-height: 60px;
    text-decoration: none;
    box-sizing: border-box;
    transition: 0.5s;
    transition-property: background;
  }

  .mobile_nav_items a:hover{
    background: #19B3D3;
  }

  .mobile_nav_items i{
    padding-right: 10px;
  }

  .active{
    display: block;
  }
}
.container-fluid.row
{
  display: flex;
  justify-content: center;
}
.text-center h2
{
  color: #44ff00;
}
/*#44ff00
#0b95b8*/

label{
  color:#44ff00;
}
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Peregrine <span>Automobile</span></h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="p1.jpeg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="Admin1.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="adminaddcars.php"><i class="fas fa-plus"></i><span>Add Cars</span></a>
        <a href="admincars.php"><i class="fas fa-car"></i><span>Cars</span></a>
        <a href="adminorders.php"><i class="fas fa-shopping-bag"></i><span>Orders</span></a>
        <a href="about.php"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="adminuser.php"><i class="fas fa-user-tie"></i><span>Customers</span></a>
        <a href="admincontact.php"><i class="fas fa-globe"></i><span>Contact Us</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="p1.jpeg" class="profile_image" alt="">
        <h4>Sahil</h4>
      </div>
      <a href="Admin1.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="adminaddcars.php"><i class="fas fa-plus"></i><span>Add Cars</span></a>
      <a href="admincars.php"><i class="fas fa-car"></i><span>Cars</span></a>
      <a href="adminorders.php"><i class="fas fa-shopping-bag"></i><span>Orders</span></a>
      <a href="about.php"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="adminuser.php"><i class="fas fa-user-tie"></i><span>Customers</span></a>
      <a href="admincontact.php"><i class="fas fa-globe"></i><span>Contact Us</span></a>
    </div>
<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
			<div class="text-center">
          <h2>Add a car</h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3">
            
            </div>
          
      
          <div class="col-md-6">
          
        <form class="text-center" action="" method="POST" enctype="multipart/form-data">
                    
           <div>
           <b><label>Enter vehicle id</label><br/>
           <input type="text" name="id" placeholder="Car ID" maxlength="5" required><br/><br/>
           <b><label>Add Modal image</label><br/>
           <input type="file" placeholder='Choose file' name='images' required><br/><br/>
    
              <b><label>Select Your Car Model</label><br>
               
              <select name = "model" style="width:566px; height: 40px;" >
                <option value = "">|--select car--|</option>
                <option value = ""> </option>
                
                
				<option value = "M4 GTS">B.M.W M4 GTS</option>
				<option value = "Z4">B.M.W Z4</option>
				<option value = "X7">B.M.W X7</option>
				<option value = "8 Series">B.M.W 8 Series</option>
				<option value = "i8">B.M.W i8</option>
				
				<option value = ""> </option>
				
				<option value = "C-Class"> MERCEDES BENZ  C-Class</option>
				<option value = "CLS-Class"> MERCEDES BENZ CLS-Class</option>
				<option value = "AMG G-Wagon"> MERCEDES BENZ AMG G-Wagon </option>
				<option value = "AMG GT">MERCEDES BENZ AMG GT</option>
				<option value = "GLE COUPE"> MERCEDES BENZ GLE COUPE</option>
				
				<option value = ""> </option>
				
				<option value = "R8"> AUDI R8 </option>
				<option value = "Q8"> AUDI Q8 </option>
				<option value = "RS7">AUDI RS7</option>
				<option value = "A8"> AUDI A8</option>
				<option value = "S7"> AUDI S7 </option>
				
				<option value = ""> </option>
				
				<option value = "Huracán"> <B>LAMBORGHINI Huracán</option>
				<option value = "Aventador SVJ"><B>LAMBORGHINI Aventador SVJ</option>
				<option value = "Urus"> <B>LAMBORGHINI Urus</option>
				<option value = "Sián"> <B>LAMBORGHINI Sián </option>
				<option value = "Centenario"> <B>LAMBORGHINI Centenario</option>
								
				<option value = ""> </option>
				
				<option value = "488 Pista"> FERRARI 488 Pista </option>
				<option value = "Roma">FERRARI Roma</option>
				<option value = "LaFerrari FXX K Evo"> FERRARI LaFerrari FXX K Evo</option>
				<option value = "F8 Tributo"> FERRARI F8 Tributo </option>
				<option value = "812 COMPETIZIONE"> FERRARI 812 COMPETIZIONE</option>				
				
        <option value = ""> </option>
				
				<option value = "Land Cruiser"> TOYOTA Land Cruiser </option>
				<option value = "Camry">TOYOTA Camry</option>
				<option value = "Supra"> TOYOTA Supra</option>
				<option value = "LS"> LEXUS LS</option>
				<option value = "LX"> LEXUS LX</option>
        <option value = "LFA"> LEXUS LFA</option>
        
        <option value = ""> </option>

        <option value = "Titan"><B>NISSAN Titan</option>
        <option value = "Patrol"> <B>NISSAN Patrol</option>
        <option value = "GTR"> <B>NISSAN GTR </option>
        <option value = "Altima"> <B>NISSAN Altima</option>
        <option value = "370Z"> <B>NISSAN 370Z</option>
                
        <option value = ""> </option>
        
        <option value = "Raptor 150"> FORD Raptor 150 </option>
        <option value = "Endeavour">FORD Endeavour</option>
        <option value = "Mustang GT500">FORD Mustang GT500</option>
        <option value = "Ecosports"> FORD Ecosports </option>
        <option value = "GT"> FORD GT</option>       
			</select>
             </div>
             
    
             
             
            <div><br/>
               <b><label>Chasis Number</label><br/>
      <input type="number" class="form-control transparent-input"  placeholder="chasis" name="chasis">
             </div>
             
             
            <div><br/>
               <b><label>Color</label><br/>
      <input type="text" class="form-control transparent-input" size="50" placeholder="color" name="color">
             </div>
 
 
            <div><br/>
                <button type="submit" name="add" class="btn btn-warning" value="add">Add car</button>
             </div>
             <?php
             
             include 'connect_db.php';
            //  session_start();

             if(isset($_POST['add']))
             {
                $id = $_POST['id'];
                $mname = $_POST['model'];
                $chas = $_POST['chasis'];
                $clr = $_POST['color'];
                $file =  addslashes(file_get_contents($_FILES["images"]["tmp_name"]));  

                $qry = mysqli_query($con,"SELECT * FROM car_info WHERE car_modal = '$mname'");
                if(mysqli_num_rows($qry)>0){
                  $qry1 = mysqli_query($con,"SELECT * FROM car_info2 WHERE car_modal = '$mname'");
                  while($rr=mysqli_fetch_array($qry1))
                  {
                    $qtyq = $rr['car_qty']+1;
                    $sql2 = mysqli_query($con,"UPDATE car_info2 SET `car_qty` = '$qtyq' WHERE car_modal = '$mname'");
                    $sql4 =  mysqli_query($con,"INSERT INTO car_info3 (car_id,car_color,chasis_no) VALUES('$id','$clr','$chas')");
                  }

                  if($sql2 && $sql4){
                    echo "<script>alert('Qty Updated Successfully');</script>";
                    echo "<script>location.href = '#'</script>";
                  }
                  else{
                    echo "<script>alert('Qty couldnt Updated Successfully');</script>";
                    echo "<script>location.href = '#'</script>";
                  }
                }
                else{
                  $sql = mysqli_query($con,"INSERT INTO car_info (car_id,car_modal,car_image) VALUES('$id','$mname','$file')");
                  $sql5 = mysqli_query($con,"INSERT INTO car_info2 (car_qty,car_modal) VALUES('1','$mname')");
                  $sql1 = mysqli_query($con,"INSERT INTO car_info3 (car_id,car_color,chasis_no) VALUES('$id','$clr','$chas')");

                  if($sql && $sql1 && $sql5){
                    echo "<script>alert('Car added Successfully');</script>";
                    echo "<script>location.href = '#'</script>";
                  }
                  else{
                    echo "<script>alert('Couldnt added Successfully');</script>";
                    echo "<script>location.href = '#'</script>";
                  }

                }
              

                
             }
             
             ?>
         </form>     
          </div>
          
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>