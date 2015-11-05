<?php

namespace App\Models;

use PDO;
use DB;

class Volunteer { 
	public $id;
	public $firstName;
	public $lastName;
	public $email;
	
	public function create() {

		
		$sql = "INSERT into volunteers (firstName, lastName, email) values (:x, :y, :z)";
		
		DB::insert($sql, ["x"=>$this->firstName, "y"=>$this->lastName, "z"=>$this->email]);


		// echo "ok";
		
		
	}
    
	public static function Update($id) {

		$sql = "UPDATE volunteers SET firstName=:x, lastName=:y WHERE id= :z";

		DB::update($sql, ["x"=>$this->title, "y"=>$this->year, "z"=>$this->id]);
	}
		

    public static function getVolunteers() {
    	
    	$sql = "SELECT * from volunteers";
		$rows = DB::select($sql);

		$volunteers = [];
		foreach($rows as $row) {
			$volunteer = new Volunteer();
			$volunteer->id = $row->id;
			$volunteer->firstName = $row->firstName;
			$volunteer->lastName = $row->lastName;
			$volunteer->email = $row->email;
			$volunteers[] = $volunteer;
		}

		return $volunteers;
    }
	
	public static function getVolunteer($id) {

		$sql = "SELECT * from volunteers where id = :x";
		$row = DB::selectOne($sql, ["x"=>$id]);
		// print_r();
		$volunteer = new Volunteer();
			$volunteer->id = $row->id;
			$volunteer->firstName = $row->firstName;
			$volunteer->lastName = $row->lastName;
			$volunteer->email = $row->email;
			
		return $volunteer;

	}
	
	
	public static function Erase($id)	 {
		
		$sql = "DELETE FROM volunteers WHERE id= :id";
	    // Make a PDO statement
	    // echo $sql;
	    DB::delete($sql, ["id"=>$id]);
	    // $statement = $db->prepare($sql);
	    // // Execute the statement
	    // $statement->execute(["x"=>$gameId]);
	}

	
}
