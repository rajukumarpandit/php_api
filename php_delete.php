<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods:DELETE");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requestest-with");
include "config.php";

$data=json_decode(file_get_contents("php://input"),true);
$student_id=$data['sid'];
$sql="DELETE FROM student where id={$student_id}";
if($conn->query($sql)===true)
{
    echo json_encode(array("message"=>"data delete successfully", "status"=>true));
}else{
    echo json_encode(array("message"=>"data not delete successfully", "status"=>false));
}