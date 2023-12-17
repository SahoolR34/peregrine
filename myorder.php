<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <style type="text/css">
      
      body{
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
table{
  border-collapse:collapse;
  background-color: #d3d3d3;
  box-shadow: 0 10px 20px 0 rgba(0,0,0,0.03);
  border-radius: 10px;
  margin: auto;
}
th,td{
  padding: 8px 30px;
  text-align: center;
  color: #000;
}
th{
  text-transform: uppercase;
  font-weight: 500;
  font-size: 13px;
}
td{
  font-size: 13px;
}
.tbl1{
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0,0,0,0.15);
}
.tbl1 thead tr{
  background-color: lightcoral;
  color: #fff;
  text-align: left;
  font-weight: bold;
}
.tbl1 th,
.tbl1 td{
  padding: 19px 20px;
}
.tbl1 tbody tr{
  border-bottom: 1px solid lightcoral;
}
.tbl1 tbody tr:nth-of-type(even){
  background-color: lightcoral;
}
.tbl1 tbody tr:last-of-type{
  border-bottom: 2px solid black;
}
.tbl1 tbody tr.active-row{
  font-weight: bold;
  color: #009879;
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
  line-height: 60px;
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
  background-position: center;
  background-size: cover;
  height: 100vh;
}

.content{
  width: (100% - 250px);
  margin-top: 60px;
  padding: 20px;
  margin-left: 250px;
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
  color: lightcoral;
  text-align: center;
}
/*#44ff00
#0b95b8*/

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <a href="user.php"><i class="fas fa-home" id="sidebar_btn"></i></a>
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
<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
			<div class="text-center">
          <h2>CARS CURRENTLY AVAILBLE IN SHOWROOM
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          <div class="s">
                  <table style="background: #e5ebe4;" class="tbl1" >
                  <thead>
                    <tr>
                        <th>CAR ID</th>
                        <th>CAR MODEL</th>
                        <th>CAR Image</th>
                        <th>CAR Price</th>
                        <th>Order Date</th> 
                        <th>Operations</th>  
                     </tr>
                  </thead>
                     <tbody>
                     <?php 
                      include 'connect_db.php';
                      $id = $_GET['uid'];
                      $qry = mysqli_query($con,"SELECT * FROM orders_info where umail='$id'");
                      while($res2=mysqli_fetch_array($qry))
                      {

                      $sql = mysqli_query($con,"SELECT * from car_info where car_modal='$res2[car_model]'");
                      while($res=mysqli_fetch_array($sql)){
                        ?>
                          <tr>
                            <td><?php echo $res['car_id'];?></td>
                            <td><?php echo $res['car_modal'];?></td>
                            <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($res['car_image']).'" height="200" width="350"/>'?></td>

                        <?php
                      
                      $sql1 = mysqli_query($con,"SELECT * from car_info2 where `car_modal`='$res[car_modal]'");
                       while($res1=mysqli_fetch_array($sql1)){
                         ?>
                           <td><?php echo $res['car_price'];?></td>
                           <td><?php echo $res2['order_date'];?></td>
                           <td><a href="delete.php?id=<?php echo $_SESSION['umail'];?>&umd=<?php echo $res['car_modal'];?>"><i class="fas fa-check-square"></i></td>
                         <?php
                       }
                    }
                      }
                     ?>
                     </tbody>
                      </table>
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