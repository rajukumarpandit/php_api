<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods:PUT");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requestest-with");
include "config.php";

$data=json_decode(file_get_contents("php://input"),true);
$student_id=$data['sid'];
$student_name=$data['sname'];
$student_age=$data['sage'];
$student_city=$data['scity'];
$sql="UPDATE student SET name='{$student_name}', age={$student_age}, city='{$student_city}' where id={$student_id}";
if($conn->query($sql)===true)
{
    echo json_encode(array("message"=>"data update successfully", "status"=>true));
}else{
    echo json_encode(array("message"=>"data not update successfully", "status"=>false));
}