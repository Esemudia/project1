<?php
class course_batch_lecture_schedules extends Databaseobject 
{
    static $table_name="course_batch_lecture_schedules";
    static protected $db_columns=['id','batch_id','time_slot_id','lecture_date','date_created','date_modified'];

    public $id;
    public $batch_id;
    public $time_slot_id;
    public $lecture_date;
    public $date_created;
    public $date_modified;

    public function __construct($args = []) {
        $this->id = $args["id"];
        $this->batch_id =  $args["batch_id"];
        $this->time_slot_id =  $args["time_slot_id"];
        $this->lecture_date =  $args["lecture_date"];
        $this->date_created =  $args["date_created"];
        $this->date_modified =  $args["date_modified"];
    }

    protected function validate() {
        $this->errors = [];
    
        if(is_blank($this->batch_id)) {
          $this->errors[] = "batch_id  cannot be blank.";
        } 

        if(is_blank($this->time_slot_id)) {
          $this->errors[] = "time slot_id cannot be blank.";
        }
    
        if(is_blank($this->lecture_date)) {
          $this->errors[] = "lecture date cannot be blank.";
        }

       
    
       
        return $this->errors;
      }
    


}

