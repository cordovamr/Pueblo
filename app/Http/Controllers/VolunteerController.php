<?php

namespace App\Http\Controllers;


use PDO;
use App\Models\Volunteer;
use App\Models\Event;
use Request;

class VolunteerController extends Controller {
	
	public function index() {

		
		return view('home');

	}




	// public function LoggedIn() {

	// 	$user = new User() {

	// 	}
	// 	// if($LoggedIn) {
	// 	// 	return view('myaccount');
	// 	// } else {
	// 	// 	header('Location: home');
	// 	// }

		
	// }


	public function addVolunteer() {
	
		return view('addVolunteer');
	}

 	public function saveVolunteer() {
	
		$volunteer = new Volunteer();

		$volunteerName = array();
		// print_r($_POST);
		$volunteerName[0] = $_POST['firstName'];
		$volunteerName[1] = $_POST['lastName'];
		$volunteerName[2] = $_POST['email'];
		// echo "hello" . $volunteerName[0] . $volunteerName[1] . $volunteerName[2];
		$volunteer->firstName = $volunteerName[0];
		$volunteer->lastName = $volunteerName[1];
		$volunteer->email = $volunteerName[2];

		$volunteer->create();

		return redirect('/myaccount');
	}


	public function getVolunteers() {
			// echo "almost there";
			$volunteers = Volunteer::getVolunteers();

			// print_r($volunteers);
			return view('volunteer', ['volunteers'=>$volunteers]);
	}
    
    public function getVolunteerDetails($id) {
    	$volunteer = Volunteer::getVolunteer($id);
  
		return view('volunteerDetails', ['volunteer'=>$volunteer]);
	}
	
	public function fundraisers() { //I might use this function to point to the model that will input new fundraisers or events from the database
		return view('fundraisers');
	}

}





















// 	public function addVolunteer() {

// 		return view("signup");

		
// 		 echo "ok";
// 	}

	 


	