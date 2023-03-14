<?php
require_once("../initiliaze.php");
$id=$_POST["id"]??null;
$batch_id=$_POST["batch_id"];
$time_slot_id=$_POST["time_slot_id"];
$lecture_date=$_POST["lecture_date"];
$date_created=$_POST["date_created"];
$date_modified=$_POST["date_modified"]??null;

if ($id==null || $id=="" && $date_modified==null|| $date_modified=="") 
{
    $args=["batch_id"=>$batch_id,"time_slot_id"=>$time_slot_id,"lecture_date"=>$lecture_date,"date_created"=>$date_created];
    $retval= new course_batch_lecture_schedules($args);
    $result= $retval->save();
    if ($result==true) {
        echo "saved";
    }
    else {
        echo "Error";
    }
}
else {
    $args=["id"=>$id,"batch_id"=>$batch_id,"time_slot_id"=>$time_slot_id,"lecture_date"=>$lecture_date,"date_created"=>$date_created,"date_modified"=>$date_modified];
    $retval= new course_batch_lecture_schedules($args);
    $result= $retval->save();
    if ($result==true) {
        echo "updated";
    }
    else {
        echo "Error";
    }
}