@extends ('Layouts.layout')
@section ('middle-top')
<h1 style="color: blue";>Event Details</h1>
	<p>Event Title: {{ $event->title }}</p>
	<p>Event Title: {{ $event->eventStart}}</p>
	<p>Event Title: {{ $event->eventEnd }}</p>
	<p>Event Title: {{ $event->description }}</p>

@endsection
