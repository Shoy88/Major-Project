
<!DOCTYPE html>
<html>

<head>
  <Link rel = "stylesheet" type="text/css" href="style.css">
</head> 
<body>
<h2>Create New Trash</h2>
<div id = map></div>
<form action="InsertTrash.php" method="POST">
  Street Address:
  <input type="text" id = address name="Street Address" value="" size="50">
  <br>  <br>
  City:
  <input type="text" name="City" value="Huntington" >
  &nbsp &nbsp &nbsp
  State:
  <input type="text" name="State" value="West Virginia" >
  <br><br>
  Zip Code:
  <input  type="text" name="Zip_code" value="">
  &nbsp &nbsp &nbsp
  Country:
  <input type="text" name="Country" value="USA">
  <br><br>
  Comment:
  <input class="textarea" type="text" name="Comments" size="400" style= height:80px;width:700px>
  </style>
  <br><br>
  <center><input class="button" id= submit type="submit" value="Submit" >
  &nbsp &nbsp &nbsp
  &nbsp &nbsp &nbsp
  <input class="button" type="Submit" value="Cancel"></center>
  </form> 
  </body>
  </html>
