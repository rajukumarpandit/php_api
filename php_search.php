<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
include "config.php";

$data=json_decode(file_get_contents("php://input"),true);
//$search_value=$data['search'];
$search_value=isset($_GET['search'])? $_GET['search']:die();
$sql="SELECT * FROM student WHERE name LIKE '%{$search_value}%' OR id LIKE '%{$search_value}%'OR city LIKE '%{$search_value}%'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
   while( $output=$result->fetch_all(MYSQLI_ASSOC))
   {
    echo json_encode($output);
   }
    
}else{
    echo json_encode(array("message"=>"data not fetch successfully", "status"=>false));
}