<?php 

include 'connection.php';
$select = "SELECT * FROM places INNER JOIN places ON hotels.place_city = places.place_city";
$fire   = mysqli_query($conn, $select);
while($row = mysqli_fetch_assoc($fire))
{
   
}
        exit();
?>