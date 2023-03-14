<?php
class course_batch_file extends Databaseobject
{
    static $table_name="course_batch_files";
    static protected $db_columns=['id','batch_id','directory_id' ,'title','description','file_location', 'file_type','date_created','date_modified'];
    public $id;
    public $batch_id;
    public $directory_id; 
    public $title;
    public $description;
    public $file_location;
    public $file_type;
    public $date_created;
    public $date_modified;
    public function __construct($args=[])
    { 
        $this->id=$args["id"] ?? '';
        $this->batch_id=$args["batchId"] ?? '';
        $this->directory_id=$args["directory_id"] ?? ''; 
        $this->title=$args["title"] ?? '';
        $this->description=$args["description"] ?? '';
        $this->file_location=$args["filelocation"] ?? '';
        $this->file_type=$args["type"] ?? '';
        $this->date_created=$args["date_created"] ?? '';
        $this->date_modified=$args["date_modified"] ?? '';
    }

    protected function validate() {
        $this->errors = [];
    
        if(is_blank($this->directory_id)) {
          $this->errors[] = "directory_id cannot be blank.";
        } 

        if(is_blank($this->title)) {
          $this->errors[] = "title cannot be blank.";
        } 
    
        if(is_blank($this->description)) {
          $this->errors[] = "description cannot be blank.";
        } elseif (!has_length($this->description, array('max' => 255))) {
          $this->errors[] = "description must be less than 255 characters.";
        }

        if(is_blank($this->file_location)) {
          $this->errors[] = "file location cannot be blank.";
        }
    
       
        return $this->errors;
      }
    




    
}
