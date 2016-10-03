@extends('layouts.admin')

@section('main')
    <h4>Nueva Nota</h4>
    <form action="/app/notes/edit/{{ $note->id }}" method="POST">
        {!! csrf_field() !!}
        <div class="row">
            <div class="column small-6">
                <label>
                    Titulo
                    <input type="text" name="title" value="{{ $note->title }}">
                </label>
            </div>
            <div class="column small-12">
                <label>
                    Descripción
                    <textarea name="description" id="" cols="30" rows="5">{{ $note->description }}</textarea>
                </label>
            </div>
            <div class="column small-12">
                <input class="button primary" type="submit" value="Actualizar">
            </div>
        </div>
    </form>
@endsection