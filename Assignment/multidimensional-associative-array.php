<?php
$users=[
    ["name"=>"Mayank","age"=>21,"city"=>"Noida"],
    ["name"=>"Rohan","age"=>26,"city"=>"Delhi"],
    ["name"=>"Reena","age"=>30,"city"=>"Pune"]
];
    foreach($users as $user){
        foreach($user as $key=> $item){
            echo "$key is $item";
            echo "<br/>";
        }
    }