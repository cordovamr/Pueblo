@extends ('Layouts.layout')
@section ('middle-top')
	@foreach ($events as $event)
		<li><a href="/events/{{ $event->eventID }}">{{ $event->title }}</a><button data="{{ $event->eventID }}">x</button><a href="/editEvent/{{ $event->eventID }}">edit</a></li>
	@endforeach
	</ul>
	<a href="/addEvent">New Event</a>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

	<script>

	$(function() {
		console.log("ready");

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': '{!! csrf_token() !!}'
			}
		});
		$("button").on("click", function(){

			var eventID= $(this).attr("data"); //create a new variable called racer Id and set it equal to this attribute data
			// console.log(racerId); //use this console.log after inserting the var racerId to see if the racers are being assigned an index value
			var li = $(this).closest("li");
			
			$.post("/api/deleteEvent/"+ eventID, {eventID: eventID}, function(res){

				li.remove();
			});
			// console.log(this);
		});
	});

	</script>

@endsection					