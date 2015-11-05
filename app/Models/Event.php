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
	public static function getEventsbyMonth($month) {

		$sql = "SELECT * from events where month(eventStart) = :month";
		$rows = DB::select($sql, [":month"=>$month]);

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

	public static function getEvent($eventID) {
		$sql = "SELECT * from events where eventID = :x";
		$rows = DB::select($sql, ["x"=>$eventID]);

		$event = [];
		foreach($rows as $row) {
		$event = new Event(); 
		$event->eventID = $row->eventID;
		$event->title = $row->title;
		$event->eventStart = $row->eventStart;
		$event->eventEnd = $row->eventEnd;
		$event->description = $row->description;
		}
		return $event;
	}
}

