<?php
  class Database{
    private $connection;
    function __construct(){
      $this->connect_db();
    }
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'assignment1');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_error());
      }
    }
    public function create($pet_name, $pet_specie, $pet_breed,$pet_age, $pet_weight){
      $sql = "INSERT INTO pawfect_hotel (pet_name, pet_specie, pet_breed, pet_age, pet_weight) VALUES ('$pet_name', '$pet_specie', '$pet_breed', '$pet_age', '$pet_weight')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    public function read($id=null){
		    $sql = "SELECT * FROM pawfect_hotel";
		    if($id){
          $sql .= " WHERE pet_id=$id";
        }
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
  }
  $database = new Database();
?>
