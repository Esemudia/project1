<?php

class user extends Databaseobject 
{

    static $table_name="havillah_user_profiles";
    static protected $db_columns=['id','first_name','last_name','user_name','email', 'phone','hashed_password','password_salt','is_verified','profile_image_location','is_active','is_deleted','access_control','date_created','date_modified'];

    
    
    public $user_name;
    public $first_name;
    public $last_name;
    public $id;
    public $email;
    public $phone;
    public $hashed_password;
    public $password_salt;
    public $is_verified;
    public $profile_image_location;
    public $is_active;
    public $is_deleted;
    public $access_control;
    public $date_created;
    public $date_modified;
    //array of values
    public function __construct($args=[])
    { 
        $this->id = $args["id"] ?? '';
        $this->first_name = $args["first_name"]?? '';
        $this->last_name = $args["last_name"] ?? '';
        $this->user_name = $args["user_name"] ?? '';
        $this->email=$args["email"]??'';
        $this->phone=$args["phone"]??'';
        $this->hashed_password = md5($args["password"] ?? '');
        if($this->hashed_password!=$args["password"])
        {
          $this->password_salt=1;
        }
        else
        {
          return;  
        }
    }

    static public function login($userid, $passcode)
    {
        $username= self::$database->escape_string($userid);
        $password = self::$database->escape_string($passcode);
        $sql="SELECT * FROM ". static::$table_name  ." WHERE user_name='$username' AND hashed_password='$password'";
        $obj = static::getlogin($sql);
        if (!empty($obj)) {
           return array_shift($obj);
        }
        else{
            return false;
        }
    }

    static public function getUsers($search, $filter)
    {
      $sql = "";
      if ($search == "") {
        if ($filter == "DESC") {
          $sql = "SELECT * FROM ". static::$table_name." ORDER BY id DESC";
        }else{
        $sql = "SELECT * FROM ". static::$table_name." ORDER BY id ASC";
      }
      }else{
        if ($filter == "DESC") 
            $sql = "SELECT * FROM ". static::$table_name ." WHERE username LIKE '%$search%' OR first_name LIKE '%$search%' OR last_name LIKE '%$search%' ORDER BY id DESC";
         else 
            $sql = "SELECT * FROM ". static::$table_name ." WHERE username LIKE '%$search%' OR first_name LIKE '%$search%' OR last_name LIKE '%$search%' ORDER BY id ASC";
      }
      $obj = static::getlogin($sql);
      if (!empty($obj)) {
         return $obj;
      }
      else{
          return false;
      }
    }

    public function full_name()
    {
        return $this->first_name." ". $this->last_name;
    }

    


    protected function validate() {
        $this->errors = [];
    
        if(is_blank($this->first_name)) {
          $this->errors[] = "First name cannot be blank.";
        } elseif (!has_length($this->first_name, array('min' => 2, 'max' => 255))) {
          $this->errors[] = "First name must be between 2 and 255 characters.";
        }

        if(is_blank($this->last_name)) {
          $this->errors[] = "Last name cannot be blank.";
        } elseif (!has_length($this->last_name, array('min' => 2, 'max' => 255))) {
          $this->errors[] = "Last name must be between 2 and 255 characters.";
        }
    
        if(is_blank($this->user_name)) {
          $this->errors[] = "Email cannot be blank.";
        } elseif (!has_length($this->user_name, array('max' => 255))) {
          $this->errors[] = "Email must be less than 255 characters.";
        } elseif (!has_valid_email_format($this->user_name)) {
          $this->errors[] = "Email must be a valid format.";
        }

        if(is_blank($this->hashed_password)) {
          $this->errors[] = "Password cannot be blank.";
        } elseif (!has_length($this->hashed_password, array('min' => 6, 'max' => 255))) {
          $this->errors[] = "Password must not be less than 6.";
        }
    
       
        return $this->errors;
      }
    




    }
?>