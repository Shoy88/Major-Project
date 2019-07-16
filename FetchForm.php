<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Street_Address,City,State,Zip_Code,Country,Comments FROM address";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Street_Address</th><th>City</th> <th>State</th> <th>Zip_Code</th> <th>Country</th> <th>Comments</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr> <td>".$row["Street_Address"]."</td>
        	<td>".$row["City"]." </td>
        	<td>".$row["State"]."</td> 
        	<td> ".$row["Zip_Code"]."</td> 
        	<td> ".$row["Country"]."</td>
        	 <td> ".$row["Comments"]."</td> 
        	 </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>