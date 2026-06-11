<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Call Function</title>
</head>
<body>
    <form method="post" action="">
        <button name="submit" value="btn1">Call Function</button>
</body>
</form>
</html>

<?php
if(isset($_POST['submit'])){
            button_on_click();
}
function button_on_click(){
    echo "Function clicked on button";
}

?>