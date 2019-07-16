<?php 
  require("config.php");
  $Other = $_GET['samurai'];


  $date = date('m-d-Y');
  
  $sql = "UPDATE others SET Date_completed = '$date' where ID = '$Other' ";
  if($conn->query($sql) == TRUE){
    echo "Update Done for DateCompleted";
    header("Location:ReportOthers.php");
}else{
  echo "Update Failed";
  header("Location:DoneTrash.php?param=editfail");
}

  ?>
<?php




//header('Location:ReportTrash.php');
?>
