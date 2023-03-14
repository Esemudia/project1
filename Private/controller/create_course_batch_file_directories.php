<?php

require_once("../initiliaze.php");
$id=$_POST["id"]??null;
$title=$_POST["title"]; 
$description=$_POST["description"];
$date_created=$_POST["date_created"];
$date_modified=$_POST["date_modified"]??null;

if($id==""|| $id=="" && $date_modified=="" ||$date_modified=="")
{
    $args=["title"=>$title,"description"=>$description,"date_created"=>$date_created];
    $retval= new course_batch_file_directories($args);
    $result= $retval->save();
    if ($result=== true) {
        echo"saved";
    } else {
    echo("Connection Error Retry...");
    }
}
else {
    $args=["id"=>$id,"title"=>$title,"description"=>$description,"date_created"=>$date_created,"date_modified"=>$date_modified];
    $retval= new course_batch_file_directories($args);
    $result= $retval->save();
    if ($result=== true) {
        echo"updated";
    } else {
    echo("Connection Error Retry...");
    }
}