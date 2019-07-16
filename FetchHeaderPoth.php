<!DOCTYPE html>
<html>

<head><br>
    <button type="button" name="submit2" 
 style= "float: center; margin-bottom:0%; margin-right:4%;">Logout</button>
    <br>
     <h2>   </h2>

    
            <div class="button1">
                    <button type = "button" id="button1" style="margin-right: 4%"> Reports </button>
                    
                    <script type="text/javascript">
    document.getElementById("button1").onclick = function () {
        location.href = "/PROJECT_FINAL/ReportPotholes.php";
    };
</script>
           </div>
                    <div class= "butt1" >
                    <button type ="button" id="butt1" style="margin-right: 2%"> Create New </button> 
                    <script type="text/javascript">
    document.getElementById("butt1").onclick = function () {
        location.href = "/PROJECT_FINAL/CreatePotholes.php";
    };
</script>
<br><div>
    <img style = "float:left" src="hunc.png" style="height:100px; width:100px">
<h1 style="margin-bottom: 2% ; float:center;"><font size="20"><center>Public Work Department</h1></center>            
        <div class="clearfix"></div>
</div>
</div>
        

        <title>Navigation bar and menus with search box</title>

        <Link rel = "stylesheet" type="text/css" href="poth.css">               
</head>

<body>
 
<nav class="menu">
    <ul>
        <li><a href="/PROJECT_FINAL/Fetchtrash.php"> Trash</a></li>
        <li><a href="/PROJECT_FINAL/FetchTree.php"> Tree</a></li>
        <li><a href="/PROJECT_FINAL/FetchPoth.php"> Pothole</a></li>
        <li><a href="/PROJECT_FINAL/FetchOthers.php"> Others</a></li>
    </ul>

    <form class="search-form">
        <input type="text" placeholder=" Search Here" style="float:right"> 
        <a href = "search.php"> <button type ="submit" style = "float: right" >search</button>
    </form>

    
</nav>
<button onClick="window.print()" 
style=" position:relative;
margin-top:100%; margin-right: 5%; margin-top: 2%;">Print this page</button>
<button onClick="mailto:someone@example.com?Subject=Hello%20again" 
style="margin-right:2%; margin-top: 2%;">Send Email</button>