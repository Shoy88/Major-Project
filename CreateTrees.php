<?php  ?>
<!DOCTYPE html>
<html>
<body>
<Link rel = "stylesheet" type="text/css" href="style.css">

<h2>Create New Record For Trees</h2>

<form action="InsertTrees.php" method= "POST">
Street Address:
<input type="text" name="Street Address" value="" size="50">
<br>  <br>
City:
<input type="text" name="City" value="Huntington" >
&nbsp &nbsp &nbsp
State:
<input type="text" name="State" value="West Virginia" >
<br><br>
Zip Code:
<input type="text" name="Zip_code" value="" >
&nbsp &nbsp &nbsp
Country:
<input type="text" name="Country" value="USA" >
<br><br>
Comment:
<input type="text" name="Comments" size="400" style= height:80px;width:700px>
</style>
<br><br>
Requesting:
<select name= "requesting">
<option value="Remove">Remove</option>
<option value="Dont_Remove">Dont Remove</option>
</select>
<br><br>
Priority Level:
<select name= "priority_level">
<option value="High">High</option>
<option value="Low">Low</option>
</select>
<br><br>
Action to be Taken:
<input type="radio" name="action" value="Dead_wood" checked=""> Dead wood &nbsp &nbsp
<input type="radio" name="action" value="Stump_Removal"> Stump Removal &nbsp &nbsp
<input type="radio" name="action" value="Bark_Peeling"> Bark Peeling<br>
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp 
&nbsp &nbsp
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp
<input type="radio" name="action" value="Broken_lims"> Broken Lims
&nbsp
<input type="radio" name="action" value="Remove"> Remove
&nbsp
<input type="radio" name="action" value="Others"> Others
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
<input type="text" name="Inspected" value="">
<br><br>
Submitted to UFC:
<select name = "ufc" id = "ufc">
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
<input type="Submit" value="Cancel">
</form> 
</body>
</html>
