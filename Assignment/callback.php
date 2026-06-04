<?php
function test(){
    echo "test function called <br/>";
}

function apple(){
    echo "apple is good for health";
}

$test="test";
$apple="apple";

function main ($a){
    $a();
}
main ($test);
main ($apple);
?>