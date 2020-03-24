<?php

require_once('config.php');
$merArray = array();

try 
{
    $lat_lng_sql = "SELECT pointName as name,pointCode as description,latitude as lat,longitude as lon,address FROM `tbl_point_locator_info`";
    $query = mysqli_query($conn,$lat_lng_sql)or die("Error in Selecting " . mysqli_error($conn));
    
    if(mysqli_num_rows($query) > 0)
    {
       
       while($row = mysqli_fetch_assoc($query))
       {
           $merArray[] = $row;
       }
              
       echo json_encode($merArray);
       
    }

} 
catch (Exception $e) 
{
    echo $e->getMessage();
}

?>