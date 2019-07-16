<?php 
  require("config.php");
  $query = "select * from potholes ";
  $address_plot = array();
  $add= array();
 $result_data = $conn->query($query);
    while($row = $result_data->fetch_assoc()){
 
     $address =  $row['Street_address'].",".$row['Zip_code'].",".$row['Comments'];
     array_push($address_plot, $address);
     if($row['Date_completed'] == '' || $row['Date_completed'] == ' ' || $row['Date_completed'] == 'null' || $row['Date_completed'] == 'NULL' || $row['Date_completed'] == NULL){
      $dcomp = 'Not_Found';
     array_push($add, $dcomp);
    }else{
       $dcomp = 'Found';
      array_push($add, $dcomp);
    }
  }                                 

  $q="select * from potholes where Date_completed IS NULL";
 
  $result= $conn->query($q);
  while($row= $result->fetch_assoc()){
    $addr = $row['Street_address'].",".$row['Zip_code'];
    array_push($add,$addr);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Geocoding Service</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>

   <div id="map">
 <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 38.4192, lng: -82.4452}
        });
        var geocoder = new google.maps.Geocoder();

       
          geocodeAddress(geocoder, map);
    
      }


      function geocodeAddress(geocoder, resultsMap) {
     
              <?php 
             $counter=0;
             $counter4marker = 0;
       foreach ($address_plot as $key) {
       $counter++;
          ?>
           
          var infowindow<?php echo $counter; ?> = new google.maps.InfoWindow({
    content: "<?php echo $key?>"
});
          
        geocoder.geocode({'address': '<?php echo $key ?> '}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({

                  <?php 
     if($add[$counter4marker] == '' || $add[$counter4marker] == 'NULL' || $add[$counter4marker] == NULL || $add[$counter4marker] == 'null' || $add[$counter4marker] == 'Not_Found'  ){  ?>

                        icon: {
                        path: 'M 0,0 C -2,-20 -10,-22 -10,-30 A 10,10 0 1,1 10,-30 C 10,-22 2,-20 0,0 z M -2,-30 a 2,2 0 1,1 4,0 2,2 0 1,1 -4,0',
                        fillOpacity: 1,
                        fillColor: '#FF0808', //red
                        strokeColor: 'black',
                        strokeWeight: 0.75,
                        scale: 1
                    },
                    
                  <?php 
                    $counter4marker++;
                }else{ ?>
                         icon: {
                        path: 'M 0,0 C -2,-20 -10,-22 -10,-30 A 10,10 0 1,1 10,-30 C 10,-22 2,-20 0,0 z M -2,-30 a 2,2 0 1,1 4,0 2,2 0 1,1 -4,0',
                        fillOpacity:1,
                        fillColor: '#6AC137', //green
                        strokeColor: 'black',
                        strokeWeight: 0.75,  
                        scale: 1
                    },
                  <?php 
                    $counter4marker++;
                }
                  ?>

          
              map: resultsMap,
              position: results[0].geometry.location,
               draggable : false
            });


            google.maps.event.addListener(marker, 'mouseover', function() {
  infowindow<?php echo $counter; ?>.open(map,marker);
});
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
     <?php } ?>
       }
  
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDdIwY8YByodcOLoJ2QClgN5CnR_F-1Ss&callback=initMap">
    </script>
  </div>
    </body>
</html>