<?php 
  require("config.php");
  $potholes = $_GET['samurai'];


  $date = date('m-d-Y');
  
  $sql = "UPDATE potholes SET Date_completed = '$date' where ID = '$potholes' ";
  if($conn->query($sql) == TRUE){
    echo "Update Done for DateCompleted";
    header("Location:ReportPotholes.php");
}else{
  echo "Update Failed";
  header("Location:DoneTrash.php?param=editfail");
}

  ?>
<?php




//header('Location:ReportTrash.php');
?>
