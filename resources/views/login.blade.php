@extends ('Layouts.layout')
@section ('content')
<h1>LOGIN TO YOUR ACCOUNT HERE</h1>
<div class ="login-container">
	<form method="POST" action="/auth/login">
		{!! csrf_field() !!}

		@if( count($errors) > 0 )
		<div>
			<h2>Form Errors:</h2>
			{{-- {{{ print_r( $errors->getBags()['default']->get('email')) }}}--}}
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
		@endif

		<div>
			First Name
			<input type="password", name="password" id="password">
		</div>
		<div>
			Last Name
			<input type="password", name="password" id="password">
		</div>
		<div>
			Email
			<input type="email", name="email" value="{{ old('email') }}">
			
		</div>

		<div>
			Password
			<input type="password", name="password" id="password">
		</div>

		<div>
			<button type="submit">Login</button>
		</div>
	</form>
</div>
@stop