<?php

require_once("../initiliaze.php");

$retval= store_payment_plan::find_all();
if ($retval==null) {
    echo ("empty");
} else {
    echo (json_encode($retval));
}
?>