<?php
require_once("../initiliaze.php");

$retval= user::find_all();
if ($retval==null) {
    echo ("empty");
} else {
    json_encode($retval);
}