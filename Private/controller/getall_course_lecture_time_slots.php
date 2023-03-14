<?php
require_once("../initiliaze.php");

$retval= course_lecture_time_slots::find_all();
if ($retval==null) {
    echo ("empty");
} else {
    json_encode($retval);
}