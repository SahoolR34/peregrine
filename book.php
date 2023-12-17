<?php
include 'connect_db.php';
session_start();
$ids = $_GET['id'];
$md = $_GET['umd'];
$qry = mysqli_query($con,"SELECT * FROM car_info2 Where car_modal = '$md'");
while($rr=mysqli_fetch_array($qry))
{
    if($rr['car_qty']!='0')
{

$sql = mysqli_query($con,"INSERT INTO orders_info(umail,car_model,order_date) VALUES ('$ids','$md',NOW())");
if($sql)
{
    $qty = $rr['car_qty']-1;
    $sql1 = mysqli_query($con,"UPDATE car_info2 SET car_qty='$qty' where car_modal='$md'");
    if($sql1){
        
    echo "<script>alert('Car is successfully BOOKED');</script>";
    echo "<script>location.href='booking.php'</script>";
    }
    else
    {
        echo "<script>alert('Sorry! couldnt be booked');</script>";
    echo "<script>location.href='booking.php'</script>";
    }
}
else
{
    echo "<script>alert('Car couldnt be booked');</script>";
    echo "<script>location.href='booking.php'</script>";
}
}
else
{
    echo "<script>alert('Car is not available in stock');</script>";
    echo "<script>location.href='booking.php'</script>";
}
}
?>