<?php

class course_category_types extends Databaseobject
{
    static $table_name="course_category_types";
    static protected $db_columns=['id','title' ,'description','date_created','date_modified'];
   
    public $id;
    public $title;
    public $description;
    public $date_created;
    public $date_modified;

    public function __construct( $args = []) {
        $this->id = $args["id"]??'';
        $this->title = $args["title"]??'';
        $this->description = $args["description"]??'';
        $this->date_created = $args["date_created"]??'';
        $this->date_modified = $args["date_modified"]??'';
    }
}
