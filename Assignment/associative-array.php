<?php
$userDetails=["name"=>"Mayank",
                "age"=>21,
                "city"=>"Noida",
                "State"=>"Uttar Pradesh"];

echo $userDetails["name"];
echo "<br>";
echo $userDetails["age"];
echo "<br>";
echo $userDetails["city"];
echo "<br>";
?>

<?php
$userDetails=["name"=>"Mayank","age"=>21,"city"=>"Noida","state"=>"UP"];
foreach($userDetails as $key=>$data){
    echo $key ."is" .$data;
    echo "<br>";
}
?>