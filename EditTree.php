<?php 
  require("config.php");
  $trash = $_GET['samurai'];
  $query = "select * from trees where ID = ".$trash;
  $result_data = $conn->query($query);
  $row = $result_data->fetch_assoc();
  $date_requested= $row['Date_Requested'];
  $day_requested= $row['Day_Requested'];
  $Street_Address= $row['Street_address'];
  $Zip_Code= $row['Zip_code'];
  $City=$row['City'];
  $District = $row['District'];
  $Comments=$row['Comments'];
  $priority_level = $row['Priority_level'];
  $requesting = $row['Requesting'];
  $Inspected = $row['Inspected'];
  $ufc =$row['ufc'];
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

$sql = "UPDATE trees SET Street_Address = '$_POST[Street_Address]',District = '$_POST[District]',  Zip_code = '$_POST[Zip_code]', Comments = '$_POST[Comments]' where ID = '$trash' ";

if($conn->query($sql) == TRUE){
    echo "Update Done";
    header("Location:DashboardTrees.php");
}else{
  echo "Update Failed";
  header("Location:EditTree.php?param=editfail");
}


}


//header('Location:poth.html');
?>

<Link rel = "stylesheet" type="text/css" href="style.css">

<h2> Update Trees</h2>

<form  method= "POST">
Date Requested:
<input type="text" value="<?php echo $date_requested ?>" name="Street Address" value="" size="50">
<br>  <br>
Street Address:
<input type="text" value="<?php echo $day_requested ?>" name="Street Address" value="" size="50">
<br>  <br>
Street Address:
<input type="text" value="<?php echo $Street_Address ?>" name="Street Address" value="" size="50">
<br>  <br>
City:
<input type="text" name="City" value="Huntington" >
&nbsp &nbsp &nbsp
District:
<input type="text" name="District" value="<?php echo $District?>" >
&nbsp &nbsp &nbsp
State:
<input type="text" name="State" value="West Virginia" >
<br><br>
Zip Code:
<input type="text" name="Zip_code"  value="<?php echo $Zip_Code ?>" >
&nbsp &nbsp &nbsp
Country:
<input type="text" name="Country" value="USA" >
<br><br>
Comment:
<input type="text" name="Comments"  value="<?php echo $Comments ?>" size="400" style= height:80px;width:700px>
</style>
<br><br>
Requesting:
<select name= "requesting"  value="<?php echo $requesting ?>">
<option value="Remove">Remove</option>
<option value="Dont_Remove">Dont Remove</option>
</select>
<br><br>
Priority Level:
<select name= "priority_level"  value="<?php echo $priority_level ?>">
<option value="High">High</option>
<option value="Low">Low</option>
</select>
<br><br>
Action to be Taken:
<input type="radio" name="action"  value="<?php echo $action ?>" checked=""> Dead wood &nbsp &nbsp
<input type="radio" name="action"  value="<?php echo $action ?>">  Stump Removal &nbsp &nbsp
<input type="radio" name="action"  value="<?php echo $action ?>" > Bark Peeling<br>
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp 
&nbsp &nbsp
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp
<input type="radio" name="action"  value="<?php echo $action ?>" > Broken Lims
&nbsp
<input type="radio" name="action"  value="<?php echo $action ?>" > Remove
&nbsp
<input type="radio" name="action"  value="<?php echo $action ?>" > Others
&nbsp &nbsp  
&nbsp &nbsp 
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp
&nbsp &nbsp
<br><br>
<label for="The UFC Section"><b>The UFC Section</b></label>
<br><br>
Priority Level:
<select name= "priority_l">
<option value="High">High</option>
<option value="Low">Low</option>
</select>
&nbsp &nbsp
Inspected By:
<input type="text" name="Inspected"  value="<?php echo $Inspected ?>" >
<br><br>
Submitted to UFC:
<select name = "ufc"  value="<?php echo $ufc ?>"  id = "ufc">
<option value="Yes">Yes</option>
<option value="No">No</option>
</select> 
&nbsp &nbsp
If yes, then when
<input type="date" name="">
<br><br>
&nbsp &nbsp
&nbsp &nbsp 
&nbsp &nbsp 
&nbsp &nbsp
&nbsp &nbsp 
&nbsp &nbsp 
&nbsp &nbsp
&nbsp &nbsp
<input type="submit" value="Submit" >
&nbsp &nbsp 
&nbsp &nbsp 
&nbsp &nbsp
<a href="DashboardTrees.php">
<input type="button" value="Cancel"></a>
</form> 
</body>
</html>
