<?php 
  require("config.php");
  $trees = $_GET['samurai'];


  $date = date('m-d-Y');
  
  $sql = "UPDATE trees SET Date_completed = '$date' where ID = '$trees' ";
  if($conn->query($sql) == TRUE){
    echo "Update Done for DateCompleted";
    header("Location:ReportTrees.php");
}else{
  echo "Update Failed";
  header("Location:DoneTrash.php?param=editfail");
}

  ?>
<?php




//header('Location:ReportTrash.php');
?>
