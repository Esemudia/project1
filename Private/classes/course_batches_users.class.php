<?php
class course_batches_users extends Databaseobject
{
    static $table_name="course_batches_users";
    static protected $db_columns=['batch_id' ,'user_id','date_joined','date_created','date_modified'];


    public $batch_id;
    public $user_id;
    public $date_joined;
    public $date_created;
    public $date_modified;

    public function __construct($args=[]) {
        $this->batch_id = $args["batch_id"]??'';
        $this->user_id = $args["user_id"]??'';
        $this->date_joined = $args["date_joined"]??'';
        $this->date_created = $args["date_created"]??'';
        $this->date_modified = $args["date_modified"]??'';
    }

}

?>