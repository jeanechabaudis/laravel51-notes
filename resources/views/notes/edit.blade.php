@extends('layouts.admin')

@section('main')
    <h4>Edición Nota</h4>
    @include('alerts.errors')
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
            <div class="column small-12" style="margin-top: 1rem">
                <input class="button primary" type="submit" value="Actualizar">
                <a class="button alert" href="/app/notes/">Cancelar</a>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <!--Texteditor-->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({ 
            selector:'textarea'
        });
    </script>
@endsection