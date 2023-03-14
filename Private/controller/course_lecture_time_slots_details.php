<?php
require_once('../initiliaze.php');

$id = $_POST["id"] ?? null;
$title = $_POST["title"];
$start_time = $_POST["start_time"];
$end_time = $_POST["end_time"];
$date_created = $_POST["date_created"]?? null;
$date_modified = $_POST["date_modified"]?? null;

if ($id == "" || $id == null) {
   

        $args = [ "title" => $title, "start_time" => $start_time,"end_time" => $end_time, "date_created" => $date_created];
        $retval = new course_lecture_time_slots($args);
        $result = $retval->save();
        echo $result;
        if ($result === true) {
            echo "saved";
        } else {
            echo json_encode($result);
        }
    
} 
else {
    $args = ["id" => $id, "title" => $title, "start_time" => $start_time,"end_time" => $end_time, "date_created" => $date_created,"date_modified" => $date_modified];
    $retval = new course_lecture_time_slots($args);
    $result = $retval->save();
    if ($result === true) {
        echo "Updated";
    } else {
        echo ("Connection Error Retry...");
    }
}
