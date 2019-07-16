
<html>
<body>
<?php
$link = mysql_connect("localhost", "root", "");
if (!$link) 
{
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("mydb", $link);

if(isset($_POST['Street_Address'])){
  
  $Street = $_POST['Street_Address'];
  $City = $_POST['City'];
  $State = $_POST['State'];
  $Zip_code = $_POST['Zip_code'];
  $Country = $_POST['Country'];
  $Comments = $_POST['Comments'];
  $date = date('Y-m-d');
  $requesting = $_POST['requesting'];
  $priority_level= $_POST['priority_level'];
  $action = $_POST['action'];
  $Inspected = $_POST['Inspected'];
  $ufc = $_POST['ufc'];
  
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

$sql = "INSERT INTO trees (Date_Requested, Day_Requested, Street_Address, City, State, Zip_code, Country, Comments, Requesting,Priority_level, Action, Inspected_by, Submitted_ufc) values ('$date','$day','$_POST[Street_Address]','$_POST[City]','$_POST[State]', '$_POST[Zip_code]', '$_POST[Country]','$_POST[Comments]', '$_POST[requesting]', '$_POST[priority_level]','$_POST[action]','$_POST[Inspected]', '$_POST[ufc]')";
}
if (!mysql_query($sql, $link))
{
  die ('Error:' .mysql_error());
}
else 
{
  header("Location:DashboardTrees.php");
}
echo "1 Record added";
mysql_close($link)
//header('Location:poth.html');
?>
</body>
</html>