<?php
require_once("../initiliaze.php");
$id = $_POST["id"] ?? null;
$batch_id=$_POST["batch_id"];
$directory_id=$_POST["directory_id"]; 
$title=$_POST["title"];
$description=$_POST["description"];
$file_location=$_POST["file_location"];
$file_type=$_POST["file_type"];
$date_created=$_POST["date_created"];
$date_modified=$_POST["date_modified"] ?? null;
if ($id == "" || $id == null && $date_modified=="" || $date_modified== null){
    
    $args=["batch_id"=>$batch_id,"directory_id"=>$directory_id,"title"=>$title,"description"=>$description,"file_location"=>$file_location,"file_type"=>$file_type,"date_created"=>$date_created];
    $retval= new course_batch_file($args);
    $result=$retval->save();
    if ($result=== true) {
        echo"saved";
    } else {
    echo("Connection Error Retry...");
    }
}
else
{

    $args=["id"=>$id,"batch_id"=>$batch_id,"directory_id"=>$directory_id,"title"=>$title,"description"=>$description,"file_location"=>$file_location,"file_type"=>$file_type,"date_created"=>$date_created,"date_modified"=>$date_modified];
    $retval= new course_batch_file($args);
    $result=$retval->save();
    if ($result=== true) {
        echo"updated";
    } else {
    echo("Connection Error Retry...");
    }
}