<?php
  $id=$_POST["id"] ?? null;
  $user_id=$_POST["user_id"];
  $batch_id=$_POST["batch_id"];
  $price=$_POST["price"];
  $discount_rate=$_POST["discount_rate"];
  $session_id=$_POST["session_id"];
  $token=$_POST["token"];
  $order_status=$_POST["order_status"];
  $total_discount_amount=$_POST["total_discount_amount"];
  $tax_amount=$_POST["tax_amount"];
  $items_total_amount=$_POST["items_total_amount"];
  $promo_code=$_POST["promo_code"];
  $promo_code_discount_rate=$_POST["promo_code_discount_rate"];
  $grand_total=$_POST["grand_total"];
  $content=$_POST["content"];
  $date_created=$_POST["date_created"];


  if ($id==""||$id==null) 
  {
    $args=["user_id"=>$user_id,"batch_id"=>$batch_id,"price"=>$price,"discount_rate"=>$discount_rate,"session_id"=>$session_id,"token"=>$token,""=>$order_status,"total_discount_amount"=>$total_discount_amount,"tax_amount"=>$tax_amount,"items_total_amount"=>$items_total_amount,"promo_code"=>$promo_code,"promo_code_discount_rate"=>$promo_code_discount_rate,"grand_total"=>$grand_total,"content"=>$content,"date_created"=>$date_created];
    $retval=new store_orders($args);
    $saved= $retval->save();
    if($saved==true)
    {
        echo"saved";
    }
    else
    {
        echo "error";
    }
  } 
  else 
  {
    $args=["id"=>$id,"user_id"=>$user_id,"batch_id"=>$batch_id,"price"=>$price,"discount_rate"=>$discount_rate,"session_id"=>$session_id,"token"=>$token,""=>$order_status,"total_discount_amount"=>$total_discount_amount,"tax_amount"=>$tax_amount,"items_total_amount"=>$items_total_amount,"promo_code"=>$promo_code,"promo_code_discount_rate"=>$promo_code_discount_rate,"grand_total"=>$grand_total,"content"=>$content,"date_created"=>$date_created];
    $retval=new store_orders($args);
    $saved= $retval->save();
    if($saved==true)
    {
        echo"saved";
    }
    else
    {
        echo "error";
    }
  }
  
?>
