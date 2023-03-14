<?php
require_once("../initiliaze.php");

$retval= course_batch_file_directories::find_all();
if ($retval==null) {
    echo ("empty");
} else {
    json_encode($retval);
}