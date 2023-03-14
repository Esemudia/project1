<?php
class course_categories extends Databaseobject
{
    static $table_name="course_categories";
    static protected $db_columns=['id','category_type_id','title','description','cover_image_location','brochure_location', 'is_active','date_created','date_modified'];
   
    public $id;
    public $category_type_id;
    public $title;
    public $description;
    public $cover_image_location;
    public $brochure_location;
    public $is_active;
    public $date_created;
    public $date_modified;

    public function __construct( $args = []) 
    {
        $this->id =$args["id"]?? "";
        $this->category_type_id =$args["category_type_id"] ?? '';
        $this->title =$args["title"]??'';
        $this->description =$args["description"]??'';
        $this->cover_image_location =$args["cover_image_location"]??'';
        $this->brochure_location =$args["brochure_location"]??'';
        $this->is_active =$args["is_active"]??'';
        $this->date_created =$args["date_created"]??'';
        $this->date_modified =$args["date_modified"]??'';
    }

}