<?php
session_start();
require 'FetchHeader.php';
require 'Config.php';



    $sql = "SELECT * FROM trees order by ID desc";
    $result_data = $conn->query($sql);
?>

            <div class = "row">  
                                <div class="table-responsive table--no-card m-b-40">
                                    <table style= "width:100%;" class="table table-borderless table-striped table-earning">
                                        <thead>
                                         
                                            <tr>   
                                      			<th>ID</th>
                                                <th>Date Requested</th>
                                                <th> Day Requested</th>
                                                <th>Address</th>
                                                <th>Zip Code</th>
                                                <th>Comments</th>
                                                <th>Requesting</th>
                                                <th>Priority level</th>
                                                <th>Action to be taken</th>
                                                <th>Inspected by</th>
                                                <th>Submitted ufc</th>
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
                                           
                                                <td>A<?php echo $counter ?></td> 
                                                <td><?php echo $row['Date_Requested']?></td>
                                                <td><?php echo $row['Day_Requested']?></td>
                                                <td><?php echo $row['Street_address']?> </td>
                                                <td><?php echo $row['Zip_code']?> </td>
                                                <td><?php echo $row['Comments']?> </td>
                                                <td><?php echo $row['Requesting']?> </td>
                                                <td><?php echo $row['Priority_level']?> </td>
                                                <td><?php echo $row['Action_to_be_taken']?> </td>
                                                <td><?php echo $row['Inspected_by']?> </td>
                                                <td><?php echo $row['Submitted_ufc']?> </td>
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