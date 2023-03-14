<?php
    require_once('..initiliaze.php');
    $id = $_POST["id"];
    $retval = course_batch_file_directories::delete($id);
    if ($retval==null) {
        echo "0";
    } else {
        echo "1";
    }
?>