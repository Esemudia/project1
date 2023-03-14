<?php

require_once("../initiliaze.php");
$retval= course_batch_lecture_schedules::find_all();
if ($retval==null) {
    echo ("empty");
} else {
    json_encode($retval);
}