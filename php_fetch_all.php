<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
include "config.php";


$sql="select * from student";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    // correct code
   while ($output=$result->fetch_all(MYSQLI_ASSOC)) {
        echo json_encode($output);
   }

   //correct code
   /*$output=$result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($output);*/
    
    
}else{
    echo json_encode(array("message"=>"data not fetch successfully", "status"=>false));
}