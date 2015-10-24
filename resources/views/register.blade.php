<form method="POST" action="/auth/register">
	{{!! csrf_field() !!}}

	@if( count($errors) > 0 )
	<div>
		<h2>Form Errors:</h2>
		{{-- {{{ print_r( $errors->getBags()['default']->get('email')) }}}--}}
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ li }}</li>
		@endforeach
		</ul>
	</div>
	@endif

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