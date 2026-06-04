<?php
$users=[
    [1,"Mayank","Noida","mayank@test.com"],
    [2,"Rohan","Delhi","rohan@test.com"],
    [3,"Reena","Punjab","reena@test.com"]
];
echo "<pre>";
print_r ($users);
echo "<pre>";
?>

<?php
$users=[
    [1,"Mayank","Noida","mayank@test.com"],
    [2,"Rohan","Delhi","rohan@test.com"],
    [3,"Reena","Punjab","reena@test.com"]
];

for($i=0;$i<=count($users);$i++){
    //echo "<pre>";
    //print_r ($users[i]);
    //echo "<pre";
    for($j=0;$j<=count($users[$i]);$j++) {
        echo "<pre>";
        print_r ($users [$i] [$j]);
        echo "<pre>";
    }
}
?>