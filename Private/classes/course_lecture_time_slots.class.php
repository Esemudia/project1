<?php

class course_lecture_time_slots extends Databaseobject 
{
    static $table_name="course_lecture_time_slots";
    static protected $db_columns=['id','title','start_time','end_time','date_created','date_modified'];
    
    public $id;
    public $title;
    public $start_time;
    public $end_time;
    public $date_created;
    public $date_modified;

    public function __construct($args = []) {
        $this->id = $args["id"]??'';
        $this->title = $args["title"]??'';
        $this->start_time = $args["start_time"]??'';
        $this->end_time = $args["end_time"]??'';
        $this->date_created = $args["date_created"]??'';
        $this->date_modified = $args["date_modified"]??'';
    }
   
}
