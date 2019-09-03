<?php
include('assets/php/service/services.php');
include('assets/php/config/mysql_db.php');
$current = file_get_contents('php://input');
$data = json_decode($current);

$category =  $data->category;
 $Process= new Process();
 $product = $Process->product($category);
 echo json_encode($product);
