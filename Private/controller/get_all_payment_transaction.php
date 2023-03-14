<?php

require_once("../initiliaze.php");

$retval= store_payment_transactions::leftjoin();
if ($retval==null) {
    echo ("empty");
} else {
    echo (json_encode($retval));
}
?>