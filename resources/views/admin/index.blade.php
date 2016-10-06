@extends('layouts.admin')

@section('main')
    <h4>Bienvenido</h4>
    <p>Bienvenido a Laravel 5.1 - Notes, tu podras crear notas, apuntes o recordatorios, ademas si deseas puedes habilitar las alarmas por email y no perderte lo que sea importante para ti <i class="icon-smile-o"></i> .</p>
    <div class="row">
      <a href="/app/notes/create" class="button primary">Agregar una nueva nota</a>
    </div>
@endsection