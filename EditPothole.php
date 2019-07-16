<?php 
  require("config.php");
  $potholes = $_GET['samurai'];

  $query = "select * from potholes where ID = ".$potholes;
  $result_data = $conn->query($query);
  $row = $result_data->fetch_assoc();
  $date_requested= $row['Date_Requested'];
  $day_requested= $row['Day_Requested'];
  $Street_Address= $row['Street_address'];
  $District = $row['District'];
  $Zip_Code= $row['Zip_code'];
  $City=$row['City'];
  $Comments=$row['Comments'];
  $District=$row['District'];
  ?>
<html>
<body>
<?php


if(isset($_POST['Street_Address'])){
  
  $Street = $_POST['Street_Address'];
  $City = $_POST['City'];
  $State = $_POST['State'];
  $Zip_code = $_POST['Zip_code'];
  $Country = $_POST['Country'];
  $Comments = $_POST['Comments'];
  $date = date('Y-m-d');
  
  function getWeekday($date) {
    return date('w', strtotime($date));
}
  $weekday = getWeekday($date);
  $day = "";
  if($weekday == 1){
    $day  =  "Monday";
  }
  else if($weekday == 1){
    $day  =  "Monday";
  }
  else if($weekday == 2){
    $day  =  "Tuesday";
  }
  else if($weekday == 3){
    $day  =  "Wednesday";
  }
  else if($weekday == 4){
    $day  =  "Thursday";
  }
  else if($weekday == 5){
    $day  =  "Friday";
  }
  else if($weekday == 6){
    $day  =  "Saturday";
  }
  else if($weekday == 7){
    $day  =  "Sunday";
  }
  echo $day;

$sql = "UPDATE potholes SET Street_Address = '$_POST[Street_Address]', District='$_POST[District]', Zip_code = '$_POST[Zip_code]', Comments = '$_POST[Comments]' where ID = '$potholes' ";

if($conn->query($sql) == TRUE){
    echo "Update Done";
    header("Location:DashboardPoth.php");
}else{
  echo "Update Failed";
  header("Location:EditPothole.php?param=editfail");
}


}


//header('Location:poth.html');
?>
<Link rel = "stylesheet" type="text/css" href="style.css">
<h2>Update Potholes</h2>
<div id = map></div>
<form  method="POST">
  Date Requested:
  <input type="text" id = date name="date_Requested" value="<?php echo $date_requested ?>" size="50" disabled>
  <br>  <br>
  Day Requested:
  <input type="text" id = address name="day_requested" value="<?php echo $day_requested ?>" size="50" disabled>
  <br>  <br>
  Street Address:
  <input type="text" id = address name="Street Address" value="<?php echo $Street_Address ?>" size="50">
  <br>  <br>
  City:
  <input type="text" name="City" value="Huntington" disabled="" >
  &nbsp &nbsp &nbsp
  District:
<input type="text" name="District" value="<?php echo $District?>" >
&nbsp &nbsp &nbsp
  State:
  <input type="text" name="State" value="West Virginia" disabled>
  <br><br>
  Zip Code:
  <input  type="text" name="Zip_code" value="<?php echo $Zip_Code?>">
  &nbsp &nbsp &nbsp
  Country:
  <input type="text" name="Country" value="USA" disabled>
  <br><br>
  Comment:
  <input class="textarea" type="text" value="<?php echo $Comments?>" name="Comments" size="400" style= height:80px;width:700px>
  </style>
  <br><br>
  <center><input class="button" id= submit type="submit" value="Submit" >
  &nbsp &nbsp &nbsp
  &nbsp &nbsp &nbsp
  <a href="DashboardPoth.php">
  <input class="button" type="button" value="Cancel"></a></center>
  </form> 
  </body>
  </html>


</body>
</html>