<<?php  ?>
<!DOCTYPE html>
<html>
<body>

<h2>Create New Record For Trees</h2>

<form action="/action_page.php">
Street Address:
<input type="text" name="Street Address" value="" size="50">
<br>  <br>
City:
<input type="text" name="City" value="Huntington" disabled="">
&nbsp &nbsp &nbsp
State:
<input type="text" name="State" value="West Virginia" disabled="">
<br><br>
Zip Code:
<input type="text" name="Zip_code" value="" >
&nbsp &nbsp &nbsp
Country:
<input type="text" name="Country" value="USA" disabled="">
<br><br>
Comment:
<input type="text" name="Comment" size="400" style= height:80px;width:700px>
</style>
<br><br>
Requesting:
<select>
<option value="Remove">Remove</option>
<option value="Dont_Remove">Dont Remove</option>
</select>
<br><br>
Priority Level:
<select>
<option value="High">High</option>
<option value="Low">Low</option>
</select>
<br><br>
Action to be Taken:
<input type="radio" name="action" value="Dead_wood" checked=""> Dead wood &nbsp &nbsp
<input type="radio" name="action1" value="Stump_Removal"> Stump Removal &nbsp &nbsp
<input type="radio" name="action2" value="Bark_Peeling"> Bark Peeling<br>
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp 
&nbsp &nbsp
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp
<input type="radio" name="action3" value="Broken_lims"> Broken Lims
&nbsp
<input type="radio" name="action4" value="Remove"> Remove<br>
&nbsp &nbsp  
&nbsp &nbsp 
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp
&nbsp &nbsp  
&nbsp &nbsp  
&nbsp &nbsp
<input type="radio" name="action5" value="Others"> Others
&nbsp &nbsp
<input type="text" name="textBox" value="add Comments if any"40 size="40">
<br><br>
<label for="The UFC Section"><b>The UFC Section</b></label>
<br><br>
Priority Level:
<select>
<option value="High">High</option>
<option value="Low">Low</option>
</select>
&nbsp &nbsp
Inspected By:
<input type="text" name="Inspected" value="">
<br><br>
Submitted to UFC:
<select>
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
<input type="Submit" value="Cancle">
</form> 
</body>
</html>
