<?php 
mysql_connect("localhost","root","") or die("mysql_error()");
mysql_select_db("mydb") or die("mysql_error()");
$output='';
if(isset($_POST['search']))
{
	$searchq = $_POST['search'];
	
	$searchq = preg_replace("#[^0-9a-z]#i","", $searchq);
	$query = mysql_query("select * from trash where Day_Requested like '%$searchq%' OR Street_address like '%$searchq%' OR Zip_code like '%$searchq%' ") or die ("mysql_error()");
	$count= mysql_num_rows($query); 
	
	if ($count==0) {
		$output='NO search Results';
	}else{
		while($row=mysql_fetch_array($query))
		{
			$Day_Requested = $row['Day_Requested'];
			$Street_address = $row['Street_address'];
			$Date_Requested = $row['Date_Requested'];
			$Zip_code = $row['Zip_code'];
			

			$output .= '<div>'.$Date_Requested.' '.$Day_Requested.' '.$Street_address.' '.$Zip_code.'</div>';
		}

	}
}
 ?>
<html>
<title> Search </title>
<body>
<form  method="post">
<input type="text" name="search" placeholder="Search for name">
<input type="submit" value="search area">
</form>

<?php
print ("$output");
?>



</body></html>