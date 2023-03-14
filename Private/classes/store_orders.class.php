<?php

class store_orders extends Databaseobject
{
    static $tbale_name="store_orders";
    static protected $db_columns=['id','user_id','batch_id','price','discount_rate','session_id','token','order_status','total_discount_amount','tax_amount','items_total_amount','promo_code','promo_code_discount_rate','grand_total','content','date_created'];


    public $id;
    public $user_id;
    public $batch_id;
    public $price;
    public $discount_rate;
    public $session_id;
    public $token;
    public $order_status;
    public $total_discount_amount;
    public $tax_amount;
    public $items_total_amount;
    public $promo_code;
    public $promo_code_discount_rate;
    public $grand_total;
    public $content;
    public $date_created;

    public function __construct($args=[]) {
         $this->id=$args["id"]??"";
         $this->user_id=$args["user_id"]??"";
         $this->batch_id=$args["batch_id"]??"";
         $this->price=$args["price"]??"";
         $this->discount_rate=$args["discount_rate"]??"";
         $this->session_id=$args["session_id"]??"";
         $this->token=$args["token"]??"";
         $this->order_status=$args["order_status"]??"";
         $this->total_discount_amount=$args["total_discount_amount"]??"";
         $this->tax_amount=$args["tax_amount"]??"";
         $this->items_total_amount=$args["items_total_amount"]??"";
         $this->promo_code=$args["promo_code"]??"";
         $this->promo_code_discount_rate=$args["promo_code_discount_rate"]??"";
         $this->grand_total=$args["grand_total"]??"";
         $this->content=$args["content"]??"";
         $this->date_created=$args["date_created"]??"";
    }

}
?>

