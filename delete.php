<?php 

include('db.php');

$id=$_GET['id'];
$sql="DELETE FROM transaction WHERE `id`=$id";
//echo $sql; die();

$query1 = mysqli_query($conn,$sql);


if($query1){
		
				echo "<script type='text/javascript'>alert('Record deleted successfully!!');window.location.assign('index.php')</script>";
		}
	else
	{
		echo "error".mysqli_error();
	}
?>
