<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

include('db.php');
//print_r($_POST);die;
if(isset($_POST['submit'])){

$date= $_POST['date'];
$title= $_POST['title'];
$type = $_POST['type'];
$amount = $_POST['amount'];
$comment = $_POST['comment'];
$status= $_POST['status'];
$recurring=$_POST['recurring'];
$reminder=$_POST['reminder'];


$sql="INSERT INTO transaction (title, date, type, amount, comment, status,recurring,reminder)
VALUES ('$title', '$date', '$type', '$amount', '$comment', '$status','$recurring','$reminder')";


$query1 = mysqli_query($conn,$sql);

if($query1)
{
		echo "<script type='text/javascript'>alert('Transaction added successfully!!');window.location.assign('index.php')</script>";

}
else{

echo "error".mysqli_error();
}
}
?>
