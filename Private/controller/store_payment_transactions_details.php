<?php
require_once("../initiliaze.php");
    $id=$_POST["id"]?? null ??"";
    $payment_plan_id=$_POST["payment_plan_id"];
    $payment_type=$_POST["payment_type"];
    $user_id=$_POST["user_id"];
    $order_id=$_POST["order_id"];
    $payment_gateway_code=$_POST["payment_gateway_code"];
    $payment_status=$_POST["payment_status"];
    $date_initiated=$_POST["date_initiated"];
    $date_created=$_POST["date_created"];
    $date_modified=$_POST["date_modified"];
    $content=$_POST["content"];

    if($id=null|| $id="")
    {
        $args=["payment_plan_id"=>$payment_plan_id,"payment_type"=>$payment_type,"user_id"=>$user_id,"order_id"=>$order_id,"payment_gateway_code"=>$payment_gateway_code,"payment_status"=>$payment_status,"date_initiated"=>$date_initiated,"date_created"=>$date_created,"date_modified"=>$date_modified,"content"=>$content];

        $retvalue= new store_payment_transactions($args);
        $getretvalue= $retvalue->save();
        if ($getretvalue==true) {
           echo"saved";
           flush($retvalue);
        }
        else{
            echo "Error";
        }
    }
   
?>
    