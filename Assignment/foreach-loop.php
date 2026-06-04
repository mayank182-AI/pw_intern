<?php
$users=["sam","peter","sunny","reena"];

foreach($users as $x){
    echo "<h1>$x<h1/>";
    echo "<br/>";

    if($x=="peter"){
        continue;
    }

    //if($x=="sunny"){
      //  break;
    //}
}
?>