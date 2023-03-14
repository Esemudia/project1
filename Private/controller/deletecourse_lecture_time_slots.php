<?php
    require_once('..initiliaze.php');
    $id = $_POST["id"];
    $retval = course_lecture_time_slots::delete($id);
    if ($retval==null) {
        echo "0";
    } else {
        echo "1";
    }
?>