<?php
class store_payment_plan extends Databaseobject
{
    static $tbale_name="store_payment_plan";
    static protected $db_columns=['id','Title','description', 'payment_number','no_of_installments','split_percentage','interest_rate','gateway','gateway_token', 'date_created','date_modified'];

    public $id;
    public $Title;
    public $description;
    public $payment_number;
    public $no_of_installments;
    public $split_percentage;
    public $interest_rate;
    public $gateway;
    public $gateway_token; 
    public $date_created;
    public $date_modified;

    public function __construct($args=[]) {
     $this->id=$args["id"]??"";
     $this->Title=$args["Title"]??"";
     $this->description=$args["description"]??"";
     $this->payment_number=$args["payment_number"]??"";
     $this->no_of_installments=$args["no_of_installments"]??"";
     $this->split_percentage=$args["split_percentage"]??"";
     $this->interest_rate=$args["interest_rate"]??"";
     $this->gateway=$args["gateway"]??"";
     $this->gateway_token=$args["gateway_token"]??""; 
     $this->date_created=$args["date_created"]??"";
     $this->date_modified=$args["date_modified"]??"";
    }
    
}

?>
