<?php 
  require("config.php");
  $others = $_GET['samurai'];

  $query = "select * from others where ID = ".$others;
  $result_data = $conn->query($query);
  $row = $result_data->fetch_assoc();
  $date_requested= $row['Date_Requested'];
  $day_requested= $row['Day_Requested'];
  $Street_Address= $row['Street_address'];
  $Zip_Code= $row['Zip_code'];
  $City=$row['City'];
  $Comments=$row['Comments'];
  $Type_of_work=$row['Type_of_work'];
  $Length_of_road=$row['Length_of_road'];
  $District = $row['District'];
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
  $Type_of_work= $_POST['Type_of_work'];
  $Length_of_road= $_POST['Length_of_road'];
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

$sql = "UPDATE others SET Street_Address = '$_POST[Street_Address]',  Zip_code = '$_POST[Zip_code]', Comments = '$_POST[Comments]',Type_of_work='$_POST[Type_of_work]',Length_of_road='$_POST[Length_of_road]' where ID = '$others', District = $_POST[District] ";

if($conn->query($sql) == TRUE){
    echo "Update Done";
    header("Location:DashboardOthers.php");
}else{
  echo "Update Failed";
  header("Location:EditOthers.php?param=editfail");
}


}


//header('Location:poth.html');
?>

 <Link rel = "stylesheet" type="text/css" href="style1.css">
<h2>Update Others</h2>
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
  Type of Work:
<input type="text" name="Type_of_work" value="<?php echo $Type_of_work?>">
Length of Road:
<input type="text" name="Length_of_road" value="<?php echo $Length_of_road?>">
<br><br>
  Comment:
  <input class="textarea" type="text" value="<?php echo $Comments?>" name="Comments" size="400" style= height:80px;width:700px>
  </style>
  <br><br>
  <center><input class="button" id= submit type="submit" value="Submit" >
  &nbsp &nbsp &nbsp
  &nbsp &nbsp &nbsp
  <a href="DashboardOthers.php">
  <input class="button" type="button" value="Cancel"></a></center>
  </form> 
  </body>
  </html>


</body>
</html>