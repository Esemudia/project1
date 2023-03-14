<?php

require_once("../initiliaze.php");
$id=$_POST["userID"];

$retval= store_payment_transactions::InnerJoinbyID($id);
if ($retval==null) {
    echo ("empty");
} else {
    echo (json_encode($retval));
}
?>