<?php
require_once('../initiliaze.php');

$id = $_POST["id"] ?? null;
$title = $_POST["title"];
$description = $_POST["description"];
$date_created = $_POST["date_created"]?? null;
$date_modified = $_POST["date_modified"]?? null;

if ($id == "" || $id == null) {
   

        $args = ["title" => $title, "description" => $description,"date_created" => $date_created];
        $course_categories = new course_category_types($args);
        $result = $course_categories->save();
        echo $result;
        if ($result === true) {
            echo "saved";
        } else {
            echo json_encode($result);
        }
    
} 
else {
    $args = ["id" => $id,"title" => $title, "description" => $description,"date_created" => $date_created,"date_modified" => $date_modified];
    $course_category_types = new course_category_types($args);
    $result = $course_category_types->save();
    if ($result === true) {
        echo "Updated";
    } else {
        echo ("Connection Error Retry...");
    }
}
