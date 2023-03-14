<?php
class course_category_batches extends Databaseobject
{
    static $table_name="course_category_batches";
    static protected $db_columns=['id' ,'category_id','title','description','cover_image_location','total_slots', 'price','lecture_start_time','lecture_end_time','start_date','end_date','language','discount_rate','is_active','date_created','date_modified'];

    public $id;
    public $category_id;
    public $title;
    public $description;
    public $cover_image_location;
    public $total_slots;
    public $price;
    public $lecture_start_time;
    public $lecture_end_time;
    public $start_date;
    public $end_date;
    public $language;
    public $discount_rate;
    public $is_active;
    public $date_created;
    public $date_modified;

    public function __construct( $args = []) {
        $this->id = $args[""]??"";
        $this->category_id = $args[""]??"";
        $this->title = $args[""]??"";
        $this->description = $args[""]??"";
        $this->cover_image_location = $args[""]??"";
        $this->total_slots = $args[""]??"";
        $this->price = $args[""]??"";
        $this->lecture_start_time = $args[""]??"";
        $this->lecture_end_time = $args[""]??"";
        $this->start_date = $args[""]??"";
        $this->end_date = $args[""]??"";
        $this->language = $args[""]??"";
        $this->discount_rate = $args[""]??"";
        $this->is_active = $args[""]??"";
        $this->date_created = $args[""]??"";
        $this->date_modified = $args[""]??"";
    }
}
