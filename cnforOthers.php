<!DOCTYPE html>
<html>
<Link rel = "stylesheet" type="text/css" href="createform.css">
<head>
	<title></title>
</head>
<body>
	<h2><center> Create new for Others</center></h2>

	<form action="InsertOthers.php" method="POST" class="cn-forms">
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
<input type="text" name="field3" class="field-style field-split align-left" placeholder="Type of work" />
<input type="text" name="field3" class="field-style field-split align-right" placeholder="Length of Road" />
</li>
<li>
<textarea name="field5" class="field-style field-full" placeholder="Comment"></textarea>
</li>
<li>
<input type="submit" value="Submit" />
<input type="submit" value="Cancel" ="">
</li>
</ul>
</form>

</body>
</html>