<?php include('db.php') ?>              
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADD Transaction</title>
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
                     <h2>Add Transaction</h2>
                        <h5>Welcome <b><i>Admin</i> </b>, Love to see you back. </h5>
                    </div>
                </div>                 <!-- /. ROW  -->
                 <hr />
                 <div class="col-md-12">
                 
<div class="panel panel-default">
                        <div class="panel-heading ">

                         <a href="index.php"><button class="btn btn-success"><i class="fa fa-arrow-circle-left "></i> BACK</button></a>
</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                <form role="form" class="col-md-6 col-md-offset-3" autocomplete="on" action="./sub_trans.php" method="POST" enctype = "multipart/form-data">

<div class="form-group">
<label>Date</label>
 <input class="form-control" type="date" name="date"  required/>
</div>

<div class="form-group">
<label>Title</label>
 <input class="form-control" type="text" name="title"  placeholder="Enter Mp3 Name"/>
</div>

<div class="form-group">
<label>Type</label>
<select class="form-control" name="type">
<option value="Expenses">Expenses</option>
<option value="Income">Income</option>
<option value="Savings">Savings</option>
<option value="Other">Other</option>
</select>
</div>

<div class="form-group">
<label>Amount</label>
 <input type="number" step='0.01' class="form-control" name="amount" id="file"/>
</div>

<div class="form-group">
<label>Comment</label>
<textarea class="form-control" rows="4" name="comment"></textarea></div>

<div class="form-group">
                                            <label>Status</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" id="optionsRadios1" value="0" checked="">Active
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" id="optionsRadios2" value="1">Inactive
                                                </label>
                                            </div>
                                            
  </div>
  
  <div class="form-group">
<label>Reminder</label>
 <input type="checkbox" value="1" name="reminder"/>
</div>

<div class="form-group">
<label>Recurring</label>
<select class="form-control" name="recurring">
<option value="daily">Daily</option>
<option value="weekly">Weekly</option>
<option value="monthly">Monthly</option>
<option value="quaterly">Quaterly</option>
<option value="yearly">Yearly</option>
</select>
</div>



<button type="submit" name="submit" class="btn btn-primary">Submit </button>
</form>      
  
                                        </div>
                        </div>
                    </div>

           



    </div>
    </div>
             <!-- /. PAGE INNER  -->

            </div>


         <!-- /. PAGE WRAPPER  -->
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
