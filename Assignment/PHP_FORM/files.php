<?php
// print_r($_FILES);
// print_r($_FILES['filesUpload']);
//if($_FILES){
    //$path= $_FILES['filesUpload']['name'];
    //echo $path;
//}

//if($_FILES){
    //$path=$_FILES['filesUpload']['name'];
    //$upload_path="./uploads/".$path;
    //echo $upload_path;
//}

if($_FILES){
    $path=($_FILES ['filesUpload']['name']);
    $upload_path="./uploads/".$path;
    if (move_uploaded_file($_FILES['filesUpload']['tmp_name'],$upload_path));
    echo "Files Uploaded Succesfully";

} else{
    echo "Failed to upload";
}
?>