<?php
require_once("../initiliaze.php");
$id=$_POST["id"];
$retval= course_batches_users::find_by_user_id($id);
if ($retval==null) {
    echo ("empty");
} else {
    json_encode($retval);
}
?>