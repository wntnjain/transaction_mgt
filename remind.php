<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
	<script src="push_notification.js"></script>
	<script>
				function titleNotify(msg,titlee){
					//confirm("HELLO WEBNEXTECH!");
					
					$.notify(msg, {
								title: titlee,
								icon: "https://lh4.googleusercontent.com/-v0soe-ievYE/AAAAAAAAAAI/AAAAAAADnx8/TYw5hefoVmg/s0-c-k-no-ns/photo.jpg"
							}).click(function(){
        confirm("HELLO WEBNEXTECH!").hide(5000);
    });
				}
				
				
	</script>
</head>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('db.php');
$sql="SELECT * FROM transaction";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	
	//if ( $row['recurring']=="monthly") 
	if (!empty($row['recurring']))
	{
		$ntitle= $row['title'];
			$ncomment = $row['comment'];

		$date1=$row['date'];
		$date2=date("Y-m-d");
		
		$diff = abs(strtotime($date2) - strtotime($date1));

		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

		printf("%d years, %d months, %d days\n", $years, $months, $days);
		
		
		//$date1=date_create("2013-03-15");
		//$date2=date_create("2013-12-12");
		//$diff=date_diff($date1,$date2);
		//print_r($diff);
		//echo $diff->format("%a days");	
		
		if($days>1 && $days<15)
		{
			echo "hurray1";
			echo "<br>";
			
			echo "
				<script>
					$(function(){
						titleNotify('".$ntitle."','".$ncomment."' );
					});
				</script>";
		}
		if($months==1 && $days==0){
			
			$date= date("Y-m-d");
			$title= $row['title'];
			$type = $row['type'];
			$amount = $row['amount'];
			$comment = $row['comment'];
			$status= $row['status'];
			$recurring=$row['recurring'];
			$reminder=$row['reminder'];


			$sql1="INSERT INTO transaction (title, date, type, amount, comment, status,recurring,reminder)
			VALUES ('$title', '$date', '$type', '$amount', '$comment', '$status','$recurring','$reminder')";
			 
			 echo "hurray2";
			 echo "
				<script>
					$(function(){
						titleNotify('".$ntitle."','".$ncomment."' );
					});
				</script>";


			$query1 = mysqli_query($conn,$sql1);
			
		}
	}
	
}

?>
