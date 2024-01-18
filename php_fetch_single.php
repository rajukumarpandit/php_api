<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
include "config.php";

$data=json_decode(file_get_contents("php://input"),true);
$student_id=$data['sid'];
$sql="select * from student where id={$student_id}";
$result=$conn->query($sql);
if($result->num_rows>0)
{
   while( $output=$result->fetch_assoc())
   {
    echo json_encode($output);
   }
    
   /*$output=$result->fetch_all(MYSQLI_ASSOC);
 echo json_encode($output);*/
}else{
    echo json_encode(array("message"=>"data not fetch successfully", "status"=>false));
}