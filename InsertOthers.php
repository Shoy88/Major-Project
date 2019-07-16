
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
  $District = $_POST['District'];
  $State = $_POST['State'];
  $Zip_code = $_POST['Zip_code'];
  $Country = $_POST['Country'];
  $Type_of_work= $_POST['Type_of_work'];
  $Length_of_road= $_POST['Length_of_road'];
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

$sql = "INSERT INTO others (Date_Requested, Day_Requested, Street_Address, City, District, State, Zip_code, Country, Comments, Type_of_work, Length_of_road ) values ('$date','$day','$_POST[Street_Address]','$_POST[City]','$_POST[District],'$_POST[State]', '$_POST[Zip_code]', '$_POST[Country]','$_POST[Type_of_work]','$_POST[Length_of_road]','$_POST[Comments]')";
}
if (!mysql_query($sql, $link))
{
  die ('Error:' .mysql_error());
}
else 
{
  header("Location:DashboardOthers.php");
}
echo "1 Record added";
mysql_close($link)
//header('Location:poth.html');
?>
</body>
</html>