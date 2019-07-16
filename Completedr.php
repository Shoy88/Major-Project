<?php
session_start();
require 'header.php';
require 'Config.php';



    $sql = "SELECT * FROM address order by ID desc";
    $result_data = $conn->query($sql);

    $row = $result_data->fetch_assoc();
?>

            <div class = "row">  
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                         
                                            <tr>   
                                      			<th><input type="checkbox" onClick="toggle(this)" /> Select All<br/></th>
                                                <th>ID</th>
                                                <th>Date Requested</th>
                                                <th> Day Requested</th>
                                                <th>Address</th>
                                                <th>Zip Code</th>
                                                <th>Comments</th>
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
                                                <td><?php echo $row['Comments']?> </td>
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