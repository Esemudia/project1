<?php

class store_payment_transactions extends Databaseobject
{
    static $tbale_name="store_payment_transactions";
    static protected $db_columns=['id','payment_plan_id','payment_type','user_id','order_id','payment_gateway_code','payment_status','date_initiated','date_created' ,'date_modified' , 'content'];


    public $id;
    public $payment_plan_id;
    public $payment_type;
    public $user_id;
    public $order_id;
    public $payment_gateway_code;
    public $payment_status;
    public $date_initiated;
    public $date_created;
    public $date_modified;
    public $content;

    public function __construct($args=[]) {
         $this->id=$args["id"]??"";
         $this->payment_plan_id=$args["payment_plan_id"]??"";
         $this->payment_type=$args["payment_type"]??"";
         $this->user_id=$args["user_id"]??"";
         $this->order_id=$args["order_id"]??"";
         $this->payment_gateway_code=$args["payment_gateway_code"]??"";
         $this->payment_status=$args["payment_status"]??"";
         $this->date_initiated=$args["date_initiated"]??"";
         $this->date_created=$args["date_created"]??"";
         $this->date_modified=$args["date_modified"]??"";
         $this->content=$args["content"]??"";
    }
}

?>
