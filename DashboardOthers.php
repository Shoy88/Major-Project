<!DOCTYPE HTML> 
<html lang="en" style="background-color:lightgray">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title> Dashboard</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="dashb.css">
		<link rel=" css/bootstrap.min.css" href="stylesheet">
		<link rel="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		<script async defer src="" > </script>
	</head>
	<body>

		<div class="sidenav">
			<div>
				<a href="#"><img src="logo.png" class="imgmenu"></a>
			</div>
  			<a href="/PROJECT_FINAL/Home.php" class="sidenava"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            <a href="/PROJECT_FINAL/DashboardTrash.php" class="sidenava"><i class="fa fa-trash" aria-hidden="true"></i> Trash</a>
            <a href="/PROJECT_FINAL/DashboardTrees.php" class="sidenava"><i class="fa fa-tree" aria-hidden="true"></i> Tree </a>
            <a href="/PROJECT_FINAL/DashboardPoth.php" class="sidenava"><i class="fa fa-road" aria-hidden="true"></i> Pothole </a>
            <a href="/PROJECT_FINAL/DashboardOthers.php" class="sidenava"><i class="fa fa-street-view" aria-hidden="true"></i> Others </a>
            <a href="index.php" class="sidenava"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout </a>
		</div>

	<div class="main">
		<header><h2><center> Welcome to Public Work Department<center></center></h2></header>
		<form>
			<div class ="srch" style="padding-bottom: 1%;">
				<i class="fa fa-search" aria-hidden="false"></i>
				<input type="text" name="" value="" placeholder="Enter your search criteria" style="width: 20%; height: 30px;">
				<input type="Button" name="Submit" value="Search" style="width: 10%; height: 35px;" >
			</div> 
			</form>
<div class="imgrow ">
  <section class="imgcolumn content-area1">
    <p><a class="imgtxt" href="/PROJECT_FINAL/CreateOthers.php" > <img src="create.png" class="imgmenu"><h3> Create New</h3></a></p>   		
  </section> 
  <section class="imgcolumn content-area1">
 	<p><a class="imgtxt" href="#" > <img src="email.ico" class="imgmenu"><h3> E-Mail</h3></a></p>
  </section> 
  <section class="imgcolumn content-area1">
    <p><a class="imgtxt" href="#" > <img onClick="printDiv(printableArea)" src="print.ico" class="imgmenu"><h3> Print</h3></a></p>
  </section> 
  <section class="imgcolumn content-area1">
    <p><a class="imgtxt" href="/PROJECT_FINAL/allmarker.php" > <img src="maps.png" class="imgmenu"><h3> Locate Map</h3></a></p>
  </section> 
  <section class="imgcolumn content-area1">
    <p><a class="imgtxt" href="/PROJECT_FINAL/ReportOthers.php" > <img src="reports.png" class="imgmenu"><h3>Reports </h3></a></p>
  </section> 
</div> 

<?php
session_start();
require 'Config.php';

    $sql = "SELECT * FROM others order by ID desc";
    $result_data = $conn->query($sql);
?>
<script> 
	 function printDiv(divName) {

        var printContents = document.getElementById(divName);
        w = window.open();

        w.document.write(printContents);
        w.document.write('<scr' + 'ipt type="text/javascript">' + 'window.onload = function() { window.print(); window.close(); };' + '</sc' + 'ript>');

        w.document.close(); // necessary for IE >= 10
        w.focus(); // necessary for IE >= 10

        return true;
    }
</script>
<div id= printableArea>
<section class="content-area">
		<div class="row">
			<div class="col-lg-9">
				<div class="table-responsive table--no-card m-b-40">
					<table class="table text" border="1">
						<!-- <table border="1" class="text" > -->
						<tr>
							<th style="width: 5%"> <input type="checkbox" onClick="toggle(this)" style="float: left;" /> Select All</th>
							<th style="width: 8%">ID</th> 
							<th style="width: 7%">Date Requested</th>
							<th style="width: 7%">Day Requested</th>
							<th style="width: 20%">Address</th>
							<th style="width: 5%">Zip Code</th>
							<th style="width: 10%">Type of work</th>
                            <th style="width: 10%">Length of road</th>
							<th style="width: 20%">Comments</th>
							<th style="width: 5%">Edit</th>
							<th style="width: 5%">Completed</th>
							<th style="width: 5%">Map</th>
						</tr>
						<tr>
							<?php   
                                    $counter = 0;
                                    while($row = $result_data->fetch_assoc()) {

                                        $counter++;

                                        ?>
                                            <td><input type="checkbox" onClick="toggle(this)" /></td>
                                                <td>A<?php echo $counter ?></td> 
                                                <td><?php echo $row['Date_Requested']?></td>
                                                <td><?php echo $row['Day_Requested']?></td>
                                                <td><?php echo $row['Street_address']?> </td>
                                                <td><?php echo $row['Zip_code']?> </td>
                                                <td><?php echo $row['Type_of_work']?> </td>
                                                <td><?php echo $row['Length_of_road']?> </td>
                                                <td><?php echo $row['Comments']?> </td>
  												<td><button type="button">Edit</button></td>
                                                <td><button type="button">Done</button></td>
                                                <td>
                                                  <a href = "testmap.php?samurai=<?php echo $row['ID'] ?>"><button type="button">View Map</button></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }

                                        ?>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>
</div>
</body>
</html>
