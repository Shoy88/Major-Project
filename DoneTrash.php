<?php 
  require("config.php");
  $trash_id = $_GET['samurai'];


  $date = date('m-d-Y');
  
  $sql = "UPDATE trash SET Date_completed = '$date' where ID = '$trash_id' ";
  if($conn->query($sql) == TRUE){
    echo "Update Done for DateCompleted";
    header("Location:ReportTrash.php");
}else{
  echo "Update Failed";
  header("Location:DoneTrash.php?param=editfail");
}

  ?>
<?php




//header('Location:ReportTrash.php');
?>
