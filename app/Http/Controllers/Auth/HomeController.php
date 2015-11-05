<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\Event;
use Request;

class EventController extends Controller {
	
	public function index() {

			$testingMonth = Event::getEventsbyMonth(10);

			dd($testingMonth);
			
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

			
	}
}

