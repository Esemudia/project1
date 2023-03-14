<?php
class havillah_email_verificaiton_codes extends Databaseobject
{
    static $table_name="havillah_email_verificaiton_codes";
    static protected $db_columns=['id','user_id','verification_code','date_created'];
 
    public $id;
    public $user_id;
    public $verification_code;
    public $date_created;

    public function __construct($args=[])
    {
        $this->id= $args["id"]??"";
        $this->user_id= $args["user_id"]??"";
        $this->verification_code= $args["verification_code"]??"";
        $this->date_created= $args["date_created"]??"";
    }
}
?>