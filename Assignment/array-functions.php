<?php
$users=["Mayank","rohan","karan","peter"];

array_push($users,"bruce"); //Add single element in an array

print_r($users);

?>

<?php
$users=["Mayank","rohan","harsh","devang"];

array_push($users,"ryson","rudra","vishal"); // Add multiple elements in an array

print_r($users);

?>

<?php
$users=["sam","peter","bruce","john"];

array_pop($users); //Removing single element from an Array

print_r($users);

?>

<?php
$users=["sam","vishal","rudra","mayank"];

array_pop($users);
array_pop($users);

print_r($users);

?>

<?php
$users=["sam","peter","john","bill"];

array_splice ($users,-2);

print_r ($users);

?>