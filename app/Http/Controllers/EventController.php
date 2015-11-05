<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\Event;
use Request;
use Carbon\Carbon;

class EventController extends Controller {

	protected function week($start, $max_day) {
		$result = '<tr>';

		for($day = $start; $day < $start+7; $day++) {
			if($day <= $max_day) {
				$result .= '<td>' . $day . '</td>';
			} else {
				$result .= '<td>&nbsp;</td>';
			}
		}

		$result .= '</tr>';
		return $result;
	}

	protected function firstWeek($start_day) {
		$result = '<tr>';

		for($day = 0; $day < 7; $day++) {
			if($day < $start_day) {
				$result .= '<td>&nbsp;</td>';
			} else {
				$result .= '<td>' . ($day + 1) . '</td>';
			}
		}
		$result .= '</tr>';
		return $result;
	
	}

	protected function calendar($year, $month) {
		$dateString = $year . '-' . $month . '-01' ;
		$date = Carbon::parse($dateString);
		$num_days = $date->daysInMonth;
		$start_day = $date->dayOfWeek;
		
		$result = $this->firstWeek($start_day);

		for($day_of_month = 8-$start_day; $day_of_month <= $num_days; $day_of_month+=7) {
			$result .= $this->week($day_of_month, $num_days);
		}
		return $result;
	}

	public function makeCalendar() {
		// $month = 11;
		// $year = 2015;
		echo "<table>";
		echo $this->calendar(2015, 12);
		// $dt = Carbon::parse('2015-11-1');
		// print_r($dt);
				echo "</table>";


	}


	public function getEvents() {
		// echo "almost there";
		$events = Event::getEvents();

		// print_r($events);
		return view('events', ['events'=>$events]);
	}
    
    public function getEventDetails($eventID) {
    	$event = Event::getEvents($eventID);
  
		return view('eventDetails', ['event'=>$event]);
	}

	public function addEvent() {

		return view("addEvent");

		
		// echo "ok";
	}
	public function saveEvent(){
		// echo "SAVING";

		// print_r(Request::input("name"));
		$event = new Event();

		$eventName = Request::input("name"); //just a different way of obtaining the post & get data
		


		$event->title = $eventName; //this is my $game object that will list the title. Can also do it for game->year
		$event->date = $eventDate; //this is my $game object that will list the year. 
		$event->time = $eventTime;
		$event->description = $eventDescription;

		$event->create(); //this is the new object $game, being saved by the controller function Save()

		//the view is then returned with the full list and the updated new $game object added to the list

		return redirect('/events');

	}

	public function removeEvent($eventID) {
		// echo "hello";

		Event::Erase($eventID);
		
		
	}

	public function editEvent($eventID) {
		// echo "hello";

		// $db = new PDO('mysql:host=localhost;dbname=events;charset=utf8', 'root', '');
		// $sql = "SELECT * FROM game WHERE eventID= :x";
		// $statement = $db->prepare($sql);
		// $statement->execute(["x"=>$eventID]);
		// $results = $statement->fetch();
		$event = Event::getEvent($eventID);

		print_r($event);
		return view("editEvent", ["event"=>$event]);
	}

	public function SaveEdit($eventID) {
		
		$event = Event::getEvent($eventID);

		
		$event->title= Request::input("name"); //this is my $game object that will list the title. Can also do it for game->year
		$event->date = Request::input("date");//this is my $game object that will list the year. 
		$event->time = Request::input("time");
		$event->description = Request::input("description");

		$event->Update($eventID); //this is the new object $game, being saved by the controller function Edit()

		//the view is then returned with the full list and the updated new $game object added to the list
		return redirect('/events');

	}
}





	




	