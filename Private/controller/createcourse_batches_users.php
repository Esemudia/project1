<?php
require_once("../initiliaze.php");

$batch_id=$_POST["batch_id"];
$user_id=$_POST["user_id"];
$date_joined=$_POST["date_joined"];
$date_created=$_POST["date_created"];
$date_modified=$_POST["date_modified"];

$args=["batch_id"=>$batch_id,"user_id"=>$user_id,"date_joined"=>$date_joined,"date_created"=>$date_created,"date_modified"=>$date_modified];

$retval=new course_batches_users($args);
$result= $retval->save();

if ($result==true) {
  "saved";
} else {
    echo"Error";
}
