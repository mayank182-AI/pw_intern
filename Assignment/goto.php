<?php
$num=10;
for ($i=0;$i<10;$i++){
    if ($num==10)
        goto skip;
}

$x="Mayank";
echo $x;

skip :
echo "Unconditional jump on line 12";
?>

<?php
$x=5;
while ($x==5){
    $x++;
    goto another;
    echo "$x";
}
$name="Sachin Tendulkar";
echo $name;

another:
echo "Jump";
?>