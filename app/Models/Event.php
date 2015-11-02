<?php

namespace App\Models;

use PDO;
use DB;

class Event {
	public $eventID;
	public $title;
	public $eventStart;
	public $eventEnd;
	public $description;

	public static function getEvents() {

		$sql = "SELECT * from events";
		$rows = DB::select($sql);

		$events = [];
		foreach($rows as $row) {
			$event = new Event(); 
			$event->eventID = $row->eventID;
			$event->title = $row->title;
			$event->eventStart = $row->eventStart;
			$event->eventEnd = $row->eventEnd;
			$event->description = $row->description;
			$events[] = $event;

		}

		return $events;
	}

	// public static function getEventDetails($id) {

	// 	$sql = "SELECT * from events where id = :x";
	// 	$row = DB::selectOne($sql, ["x"=>$id]);
	// 	// print_r();
	// 	$volunteer = new Volunteer();
	// 		$volunteer->id = $row->id;
	// 		$volunteer->firstName = $row->firstName;
	// 		$volunteer->lastName = $row->lastName;
	// 		$volunteer->email = $row->email;
			
	// 	return $volunteer;

	// }




}

