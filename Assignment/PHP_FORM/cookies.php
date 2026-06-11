<?php 
setcookie("fruit","apple",time()+(86400));
setcookie("color","red",time()+(86400));

if(isset($_COOKIE['fruit'])){
    echo "cookie name is " .$_COOKIE['fruit'];
}else{
    echo "cookie not found";

}
echo "<br/>";

if(isset($_COOKIE['color'])){
    "current color is" .$_COOKIE['color'];
}else{
    echo "no color found";
}
print_r($_COOKIE);
?>