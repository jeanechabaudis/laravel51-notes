@extends('layouts.acceso')

@section('main')
	<div class="row align-center">
	    <form method="POST" action="/registrar" class="column small-5 callout large" style="margin-top: 50px;border: none;">
	    	<h1 class="text-center"><i class="icon-clipboard"></i></h1>
	    	<h3 class="text-center" style="margin-bottom: 2rem">LARAVEL 5.1 - NOTES</h3>
	    	{!! csrf_field() !!}
	    	<input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre">
	    	<input type="text" name="email" value="{{ old('email') }}" placeholder="Ingrese correo electronico">
	    	<input type="password" name="password" placeholder="Ingrese contraseña">
	    	<input type="password" name="password_confirmation" placeholder="Confirme contraseña">
	    	<input class="button primary expanded" type="submit" value="Registrar">
	    	<p class="text-center">by <a href="#">jechabaudis</a></p>
	    	<p class="text-center">Laravel 5.1 - Notes © 2016</p>
	    </form>		
	</div>
@endsection