<?php
// $users=["mayank","peter","tony","bruce"];
// $user=["name"=>"mayank","age"=>21,"email"=>"mayank@gmail.com"];
// $users="mayank";
// echo is_array($users);
// if (is_array($users)){
   // echo "this is an array";
// } 
// else{
   // " this is not an array";
// }
// echo count($users);
// unset($users[2]);
// array_push($users,"babhan");
// array_pop($users);
// echo implode($users);
// $str1="hello how are you mayank";
// print_r(explode(" ",$str1));
// print_r(array_keys($user));
// print_r(array_merge($users,$user));
$users=["mayank","peter","bruce","tony","sam","mayank","sam","peter"];
$data=array_unique($users);
print_r($data);
// print_r($users);

?>