
<?php
session_start();
require 'FetchHeaderOther.php';
require 'Config.php';



    $sql = "SELECT * FROM others order by ID desc";
    $result_data = $conn->query($sql);
?>


            <div class = "row">  
                                <div class="table-r">
                                    <table class="table t">

                                        <thead>
                                         
                                            <tr>   
                                                <col width="125">
                                                 <th>ID</th>
                                                  <th>Date Requested</th>
                                                  <th> Day Requested</th>
                                                  <th>Address</th>
                                                 <th>Zip Code</th>
                                                  <th>Type of work</th>
                                                  th>Length of road</th>
                                                 <th>Comments</th>
                                                 <th>Edit</th>
                                                 <th>Completed</th>
                                                 <th>View Map</th>
                                            </tr>
                                           
                                        </thead>
                                    <tbody>

                                            <tr>

                                                <?php   
                                    $counter = 0;
                                    while($row = $result_data->fetch_assoc()) {

                                        $counter++;

                                        ?>
                                        

                                            <td><input type="checkbox" onClick="toggle(this)" /></td>
                                                <td>A<?php echo $counter ?></td> 
                                                <td><?php echo $row['Date_Requested']?></td>
                                                <td><?php echo $row['Day_Requested']?></td>
                                                <td><?php echo $row['Street_address']?> </td>
                                                <td><?php echo $row['Zip_code']?> </td>
                                                <td><?php echo $row['Type_of_work']?> </td>
                                                <td><?php echo $row['Length_of_road']?> </td>
                                                <td><?php echo $row['Comments']?> </td>
  												<td><button type="button">Edit</button></td>
                                                <td><button type="button">Done</button></td>
                                                <td>
                                                  <a href = "testmap.php?samurai=<?php echo $row['ID'] ?>"><button type="button">View Map</button></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }

                                        ?>

                                          
                                            
                                        </tbody>
                                    </table>
                                </div>
                                </div>
</body>
</html>