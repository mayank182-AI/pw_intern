<?php
// $user=["name"=>"Mayank","age"=>21,"email"=>"mayank@gmail.com"];
// print_r($user);
// $userJson=json_encode ($user);
// echo $userJson;

$data='{"name":"Mayank","age":21,"email":"mayank@gmail.com"}';
$dataArray=json_decode($data,true);
print_r ($dataArray);
?>