<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods:POST");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requestest-with");
include "config.php";

$data=json_decode(file_get_contents("php://input"),true);
$student_name=$data['sname'];
$student_age=$data['sage'];
$student_city=$data['scity'];
$sql="insert into student(name,age,city) values('{$student_name}',{$student_age},'{$student_city}')";
if($conn->query($sql)===true)
{
    echo json_encode(array("message"=>"data insert successfully", "status"=>true));
}else{
    echo json_encode(array("message"=>"data not insert successfully", "status"=>false));
}