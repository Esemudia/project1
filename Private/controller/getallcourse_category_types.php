<?php

require_once("../initiliaze.php");
$retval= course_category_types::find_all();
if ($retval==null) {
    echo ("empty");
} else {
    json_encode($retval);
}