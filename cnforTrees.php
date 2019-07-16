<!DOCTYPE html>
<html>
<Link rel = "stylesheet" type="text/css" href="createnew.css">
<head>
	<title></title>
</head>
<body>
	<h2><center> Create new for Trees</center></h2>
	<form class="cn-forms">
<ul>
<li>
    <input type="text" name="field1" class="field-style field-split align-left" placeholder="Street Address">
    <input type="text" name="field1" class="field-style field-split align-right" placeholder="Zip">

</li>
<li>
	<input type="text" name="field2" class="field-style field-split align-left" placeholder="City" >
	<input type="text" name="field2" class="field-style field-split align-right" placeholder="District">
</li>
<li>
    <input type="text" name="field2" class="field-style field-split align-left" placeholder="State"  value="West-Virginia">
	<input type="text" name="field2" class="field-style field-split align-right" placeholder="Country" value="United State Of America">
</li>

<li>
<textarea name="field5" class="field-style field-full" placeholder="Comment"></textarea>
</li>
<li> Requesting: <select>
<option value="Remove">Remove</option>
<option value="Dont_Remove">Dont Remove</option>
</select></li>	

<li>Priority Level:
<select>
<option value="High">High</option>
<option value="Low">Low</option>
</select></li>

<li>Action to be Taken:
<input type="radio" name="action" value="Dead_wood" checked=""> Dead wood 
<input type="radio" name="action" value="Stump_Removal"> Stump Removal 
<br>
<input type="radio" name="action" value="Bark_Peeling"> Bark Peeling
<input type="radio" name="action3" value="Broken_lims"> Broken Lims

<input type="radio" name="action4" value="Remove"> Remove<br>
<input type="radio" name="action5" value="Others"> Others

<input type="text" name="textBox" placeholder ="add Comments if any" size="40">
</li>

<label for="The UFC Section"><center><b>The UFC Section</b></center></label>
<br><br>

Priority Level:
<select>
<option value="High">High</option>
<option value="Low">Low</option>
</select>


<li>
Inspected By:
<input type="text" name="Inspected" value="">
<br><br>
</li>


Submitted to UFC:
<select>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select> 
&nbsp &nbsp
If yes, then when
<input type="date" name="">
<br><br>

<li>
<input type="submit" value="submit" />
<input type="submit" value="Cancle" ="">
</li>
</ul>
</form>

</body>
</html>