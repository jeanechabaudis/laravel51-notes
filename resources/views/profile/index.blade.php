@extends('layouts.admin')

@section('main')	
	 @include('messages.success')
	 @include('messages.error')

	<h3>Perfil</h3>
	<p>Administra tus datos</p>
	<form action="/app/profile/edit/{{ $user->id }}" method="post">
		{!! csrf_field() !!}
		<div class="row align-center">
			<div class="column small-6">
				<h4>Informacion basica</h4>
				<label>
					Nombre
					<input type="text" name="name" value="{{ $user->name }}">
				</label>
			</div>
		</div>
		<div class="row align-center">
			<div class="column small-6">
				<label>
					Email
					<input type="text" name="email" value="{{ $user->email }}">
				</label>
			</div>
		</div>
		<div class="row align-center">
			<div class="column small-6">
				<input class="button primary" type="submit" value="Guardar">
			</div>
		</div>
	</form>

	<form action="/app/profile/edit/{{ $user->id }}" method="post">
		{!! csrf_field() !!}
		<div class="row align-center">
			<div class="column small-6">
				<h4>Informacion de seguridad</h4>
				<label>
					Contraseña Actual
					<input type="password" name="name">
				</label>
			</div>
		</div>
		<div class="row align-center">
			<div class="column small-6">
				<label>
					Nueva Contraseña
					<input type="password" name="name">
				</label>
			</div>
		</div>
		<div class="row align-center">
			<div class="column small-6">
				<label>
					Confirmar Contraseña
					<input type="password" name="name">
				</label>
			</div>
		</div>
		<div class="row align-center">
			<div class="column small-6">
				<input class="button primary" type="submit" value="Guardar">
			</div>
		</div>
	</form>
@endsection