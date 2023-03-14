<?php

require_once("../initiliaze.php");
$retval= course_category_batches::find_all();
if ($retval==null) {
    echo ("empty");
} else {
    echo json_encode($retval);
}