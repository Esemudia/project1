<?php
class store_billing_addresses extends Databaseobject
{
    static $tbale_name="store_billing_addresses";
    static protected $db_columns=[ 'id','user_id','first_name','last_name','line1','line2','city', 'postcode','country','date_created','date_modified'];

    public $id;
    public $user_id;
    public $first_name;
    public $last_name;
    public $line1;
    public $line2;
    public $city;
    public $postcode;
    public $country;
    public $date_created; 
    public $date_modified;


    public function __construct($args=[])
    {
        $this->id= $args['id']??"";
        $this->user_id=$args['user_id']??"";
        $this->first_name= $args['first_name']??'';
        $this->last_name=$args['last_name']??'';
        $this->line1=$args['line1']??'';
        $this->line2=$args['line2']??'';
        $this->city=$args['city']??'';
        $this->postcode=$args['postcode']??'';
        $this->country=$args['country']??'';
        $this->date_created=$args['date_created']??'';
        $this->date_modified=$args['date_modified']??'';
    }
}