<?php
require_once('../initiliaze.php');

$id = $_POST["id"] ?? null;
$category_id= $_POST["category_id"];
$title= $_POST["title"];
$description= $_POST["description"];
$cover_image_location= $_POST["cover_image_location"];
$total_slots= $_POST["total_slots"];
$price= $_POST["price"];
$lecture_start_time= $_POST["lecture_start_time"];
$lecture_end_time= $_POST["lecture_end_time"];
$start_date= $_POST["start_date"];
$end_date= $_POST["end_date"];
$language= $_POST["language"];
$discount_rate= $_POST["discount_rate"];
$is_active= $_POST["is_active"];
$date_created= $_POST["date_created"];
$date_modified= $_POST["date_modified"];

if ($id == "" || $id == null) {

        $args = ["category_id" => $category_id, "title" => $title,
         "description" => $description, "cover_image_location" => $cover_image_location, "total_slots" => $total_slots,
          "price" => $price,"lecture_start_time" => $lecture_start_time,
          "lecture_end_time" => $lecture_end_time,"start_date" => $start_date,"end_date" => $end_date,
          "language" => $language,"discount_rate" => $discount_rate,"is_active" => "1","date_created" => $date_created,"date_modified" => $date_modified];
        $user = new course_category_batches($args);
        $result = $user->save();
        echo $result;
        if ($result === true) {
            echo "saved";
        } else {
            echo json_encode($result);
        }
} else {
    $args = ["id" => $id,"category_id" => $category_id, "title" => $title,
    "description" => $description, "cover_image_location" => $cover_image_location, "total_slots" => $total_slots,
     "price" => $price,"lecture_start_time" => $lecture_start_time,
     "lecture_end_time" => $lecture_end_time,"start_date" => $start_date,"end_date" => $end_date,
     "language" => $language,"discount_rate" => $discount_rate,"is_active" => "1","date_created" => $date_created,"date_modified" => $date_modified];
   $user = new course_category_batches($args);
    $result = $user->save();
    if ($result === true) {
        echo "Updated";
    } else {
        echo ("Connection Error Retry...");
    }
}
