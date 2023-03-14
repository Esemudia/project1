<?php
require_once('../initiliaze.php');

$id = $_POST["id"] ?? null;
$category_type_id = $_POST["category_type_id"];
$title = $_POST["title"];
$description = $_POST["description"];
$cover_image_location = $_POST["cover_image_location"];
$brochure_location = $_POST["brochure_location"] ?? null;
$date_created = $_POST["date_created"]?? null;
$date_modified = $_POST["date_modified"]?? null;

if ($id == "" || $id == null) {
   

        $args = ["category_type_id" => $category_type_id, "title" => $title, "description" => $description,"cover_image_location" => $cover_image_location, "brochure_location" => $brochure_location,"is_active" => "1","date_created" => $date_created];
        $course_categories = new course_categories($args);
        $result = $course_categories->save();
        echo $result;
        if ($result === true) {
            echo "saved";
        } else {
            echo json_encode($result);
        }
    
} 
else {
    $args = ["id" => $id, "category_type_id" => $category_type_id, "title" => $title, "description" => $description,"cover_image_location" => $cover_image_location, "brochure_location" => $brochure_location,"is_active" => "1","date_created" => $date_created,"date_modified" => $date_modified];
    $course_categories = new course_categories($args);
    $result = $course_categories->save();
    if ($result === true) {
        echo "Updated";
    } else {
        echo ("Connection Error Retry...");
    }
}
