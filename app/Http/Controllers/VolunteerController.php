<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VolunteerController extends Controller 
{
	public function index() {
		return view('home');

		// if($LoggedIn) {
		// 	return view('myaccount');
		// } else {
		// 	header('Location: home');
		// }
	}
	public function signup() {
		return view('signup');
	}
	public function getVolunteers() {
		echo "almost there";
	}

	public function getVolunteerDetails() {

		echo "details...yes";
		// $volunteer = Volunteers::getVolunteersDetails($id) {

		// 	return view('volunteerDetails', ['volunteer'=>$volunteer]);
		
	}

	public function addVolunteer() {

		return view("signup");

		
		 echo "ok";
	}

	 


	// 	public function saveEvent(){
	// 		// echo "SAVING";

	// 		// print_r(Request::input("name"));
	// 		$event = new Event();

	// 		$eventName = Request::input("name"); //just a different way of obtaining the post & get data
			


	// 		$event->title = $eventName; //this is my $game object that will list the title. Can also do it for game->year
	// 		$event->date = $eventDate; //this is my $game object that will list the year. 
	// 		$event->time = $eventTime;
	// 		$event->description = $eventDescription;

	// 		$event->create(); //this is the new object $game, being saved by the controller function Save()

	// 		//the view is then returned with the full list and the updated new $game object added to the list

	// 		return redirect('/events');

	// 	}

	// 	public function removeEvent($id) {
	// 		// echo "hello";

	// 		Event::Erase($id);
			
			
	// 	}

	// 	public function editEvent($id) {
	// 		// echo "hello";

	// 		// $db = new PDO('mysql:host=localhost;dbname=games;charset=utf8', 'root', '');
	// 		// $sql = "SELECT * FROM game WHERE id= :x";
	// 		// $statement = $db->prepare($sql);
	// 		// $statement->execute(["x"=>$id]);
	// 		// $results = $statement->fetch();
	// 		$event = Event::getEvent($id);

	// 		print_r($event);
	// 		return view("editEvent", ["event"=>$event]);
	// 	}

	// 	public function SaveEdit($id) {
			
	// 		$event = Event::getEvent($id);

			
	// 		$event->title= Request::input("name"); //this is my $game object that will list the title. Can also do it for game->year
	// 		$event->date = Request::input("date");//this is my $game object that will list the year. 
	// 		$event->time = Request::input("time");
	// 		$event->description = Request::input("description");

	// 		$event->Update($id); //this is the new object $game, being saved by the controller function Edit()

	// 		//the view is then returned with the full list and the updated new $game object added to the list
	// 		return redirect('/events');

	// 	}

	// }




	// public function
}
