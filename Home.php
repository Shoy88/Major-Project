<?php  ?>
<!DOCTYPE html>
<html>
<head><br>

	<center><b>PUBLIC WORKS DEPARTMENT</b></CENTER>
<style>
.button1 {
    background: 
    width:150px;
    height: 150px;
    border: none;
    color: White;

    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    margin-bottom: 0%;
    
}
.button2 {
    background: 
    width:150px;
    height:150px;
    border: none;
    color: White;

    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    margin-bottom: 0%;


}
.button3 {
    background: 
    width:150px;
    height:150px;
    border: none;
    color: White;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    margin-bottom: 0%;

}
.button4 {
    background: 
    width:350px;
    height:150px;
    border: BLACK;
    color: White;
    text-align: center;
    text-decoration: none;
    display: inline-block
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    margin-bottom: 0%;
</style>
</head>
<body>
<center>
	<br>
<input type="image" img src="/PROJECT_FINAL/truck1.png" class="button1" id="button1">
<script type="text/javascript">
    document.getElementById("button1").onclick = function () 
    {
        location.href = "/PROJECT_FINAL/Dashboardtrash.php";
    };
</script>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


<input type="image" img src="/PROJECT_FINAL/tree.png" class="button2"  value="Potholes" id="button2"><br>
<script type="text/javascript">
    document.getElementById("button2").onclick = function () 
    {
        location.href = "/PROJECT_FINAL/DashboardTrees.php";
    };
</script>
<input type="image" img src="/PROJECT_FINAL/Pothole.png" class="button3" value="Trees" id="button3">
<script type="text/javascript">
    document.getElementById("button3").onclick = function () 
    {
        location.href = "/PROJECT_FINAL/DashboardPoth.php";
    };
</script>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<input type="image" img src="/PROJECT_FINAL/Others.jpg" class="button4" value="Others" id="button4">
<script type="text/javascript">
    document.getElementById("button4").onclick = function () 
    {
        location.href = "/PROJECT_FINAL/DashboardOthers.php";
    };
</script>
</center>
</body>
</html>