<?php
include 'connect_db.php';
session_start();
$ids = $_GET['id'];
$md = $_GET['umd'];
$sql = mysqli_query($con,"DELETE FROM orders_info where car_model='$md' AND umail='$ids'");
if($sql)
{
    $qty = $rr['car_qty']+1;
    $sql1 = mysqli_query($con,"UPDATE car_info2 SET car_qty='$qty' where car_modal='$md'");
    if($sql1){
        
    echo "<script>alert('Order is sucessfully canceled');</script>";
    echo "<script>location.href='myorder.php?uid=<?php echo $ids;?>'</script>";
    }
    else
    {
    echo "<script>alert('Sorry! Order couldnt be canceled. Please try again later!');</script>";
    echo "<script>location.href='myorder.php?uid=<?php echo $ids;?>'</script>";
    }
}
else
{
    echo "<script>alert('Order couldnt be canceled');</script>";
    echo "<script>location.href='myorder.php?uid=<?php echo $ids;?>'</script>";
}
?>