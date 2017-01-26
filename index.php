<?php include('db.php')

 ?>              
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transactions</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   <div class="container"> <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li class="active"><a href="#">Dashboard</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>
    </div>
  </div>
</nav>


    <div id="wrapper">
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Transactions</h2>
                        <h5>Welcome <b><i>Admin</i> </b>, Love to see you back. </h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="col-md-12">
  
<div class="panel panel-default">
                        <div class="panel-heading">
                         <a href="add_transaction.php"><button class="btn btn-primary"><i class="fa fa-file-text "></i> ADD Transaction</button></a>


  </div>
                        <div class="panel-body">
                             <div class="table-responsive">
                              <div class="row">
                                <div class="col-sm-6">
              <form role="form" autocomplete="on" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype = "multipart/form-data">

                                  <div class="dataTables_length" id="dataTables-example_length">
                                    <label><select name="search_type" aria-controls="dataTables-example" class="form-control input-sm">
                                      <option valuee="all">Select Transaction Type</option>
                                      <option value="Expenses">Expenses</option>
                                      <option value="Income">Income</option>
                                      <option value="Savings">Savings</option>
                                      <option value="Other">Other</option>
                                    </select> </label>
                                   <label><input type="submit" name="submit"value="search"  class="btn btn-danger" aria-controls="dataTables-example"></label>
                                  </div>
                                </div>
                                <?php

if(isset($_POST["search_type"]))
{

  if ($_POST["search_type"] == "Expenses")
    {
    $sql = "SELECT * FROM transaction WHERE type='Expenses'";
    }
    elseif ($_POST["search_type"] == "Income")
    {
    $sql = "SELECT * FROM transaction WHERE type='Income'";
    }
    elseif ($_POST["search_type"] == "Savings")
    {
    $sql = "SELECT * FROM transaction WHERE type='Savings'";
    }
    elseif ($_POST["search_type"] == "Other")
    {
    $sql = "SELECT * FROM transaction WHERE type='Other'";
    }else{

        $sql="SELECT * FROM transaction ORDER BY date ASC";

    }
    
}else{
  $sql="SELECT * FROM transaction ORDER BY date ASC";

}

  

                                 ?>
                              </div>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                           <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                             <th>Title</th>
                                      <th>Type</th>
                                     <th>Comment</th>
                                     <th>Amount</th>
                                     <th>Transaction</th>
                                     <th>Balance</th>
                                     <th>Status</th>
                                     <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                              
                                 
<?php  
$result=mysqli_query($conn,$sql);
$balancenow=0;
$i=0;
while($row=mysqli_fetch_array($result))
{ 
  if ( $row['type']=="Income") {
$balancenow=$balancenow+$row['amount'];
$tran = "Credit";
$color = "#98FB98";


  }else{
$balancenow=$balancenow-$row['amount'];
$tran = "Debit";
$color = "#F08080";

}

if($balancenow<=0){
	$tran = "Budget Exceed";
	$color = "#FF0";
}
  ?>

   <tr style=<?php echo "background:".$color.";";?>>
    <td><?php echo ++$i; ?> </td>
   <td><?php echo $row['date']; ?> </td>
   <td><?php echo $row['title']; ?> </td>
   <td><?php echo $row['type']; ?> </td>
  <td><?php echo $row['comment']; ?> </td>
   <td><?php echo $row['amount']; ?> </td>
   <td><?php echo $tran; ?></td>
   <td><?php echo $balancenow; ?></td>
<td><?php 
   $stat= $row['status'];
if ($stat==0) {
    echo "Active";
}else{
    echo "Inactive";
}

$id=$row['id'];
?> </td>
 
  <td><?php  echo "<a href='delete.php?id=$id'><i class='fa fa-trash'></i> Delete</a>"; ?></td>

    </tr>


  <?php 
}

mysql_close($conn);

?>
                                        
                               </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

         


    </div>
    </div>
             <!-- /. PAGE INNER  -->

            </div>
    </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
