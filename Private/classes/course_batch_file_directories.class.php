<?php
class course_batch_file_directories extends Databaseobject 
{
    static $table_name="course_batch_file_directories";
    static protected $db_columns=['id','title', 'description','date_created','date_modified'];
    public $id;
    public $title; 
    public $description;
    public $date_created;
    public $date_modified;

     public function __construct($args=[]) 
     {
        $this->id = $args["id"] ?? '';
        $this->title = $args["title"] ?? '';
        $this->description = $args["description"] ?? '';
        $this->date_created = $args["date_created"] ?? '';
        $this->date_modified = $args["date_modified"] ?? '';
    }

    protected function validate() {
        $this->errors = [];
    
        if(is_blank($this->title)) {
          $this->errors[] = "title name cannot be blank.";
        } 

        if(is_blank($this->description)) {
          $this->errors[] = "description cannot be blank.";
        } 
    
        
       
        return $this->errors;
      }
    




    }


