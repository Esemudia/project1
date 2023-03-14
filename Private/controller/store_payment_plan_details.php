<?php
require_once("../initiliaze.php");
$id=$_POST["id"]??null;
$Title=$_POST["Title"];
$description=$_POST["description"];
$payment_number=$_POST["payment_number"];
$no_of_installments=$_POST["no_of_installments"];
$split_percentage=$_POST["split_percentage"];
$interest_rate=$_POST["interest_rate"];
$gateway=$_POST["gateway"];
$gateway_token=$_POST["gateway_token"]; 
$date_created=$_POST["date_created"];
$date_modified=$_POST["date_modified"];

    if($id=null|| $id="")
    {
        $args=["Title"=>$Title,"description"=>$description,"payment_number"=>$payment_number,"no_of_installments"=>$no_of_installments,"split_percentage"=>$split_percentage,"interest_rate"=>$interest_rate,"gateway"=>$gateway,"gateway_token"=>$gateway_token,"date_created"=>$date_created];

        $retvalue= new store_payment_plan($args);
        $getretvalue= $retvalue->save();
        if ($getretvalue==true) {
           echo"saved";
           flush($retvalue);
        }
        else{
            echo "Error";
        }
    }
    else{
        $args=[""=>$id,""=>$Title,""=>$description,""=>$payment_number,""=>$no_of_installments,""=>$split_percentage,""=>$interest_rate,""=>$gateway,""=>$gateway_token,""=>$date_created,""=>$date_modified];
        $retvalue= new store_payment_plan($args);
        $getretvalue= $retvalue->save();
        if ($getretvalue==true) {
           echo"updated";
           flush($retvalue);
        }
        else{
            echo "Error";
        }

    }

?>