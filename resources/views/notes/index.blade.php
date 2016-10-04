@extends('layouts.admin')

@section('main')
    @if(Session::has('message-success'))
        <div class="callout small success" data-closable>
            {{Session::get('message-success')}}
            <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <h4>Notas</h4>
    <p>Administra cada una de tus notas incluyendo su titulo y descripción.</p>
    <div class="row align-right">
    	<a class="button primary" href="/app/notes/create"><i class="icon-file-add"></i></a>
    </div>
    <table class="hover">
    	<thead>
    		<tr>
    			<th width="300px">Titulo</th>
    			<th>Descripción</th>
                <th></th>
    		</tr>
    	</thead>
    	<tbody>
            @foreach($notes as $note)
                <tr>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->description }}</td>
                    <td>
                        <div class="button-group">
                          <a class="button success" href="/app/notes/edit/{{ $note->id }}"><i class="icon-pencil"></i></a>
                          <a class="button alert" href="/app/notes/destroy/{{ $note->id }}"><i class="icon-trash"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
    	</tbody>
    </table>

    {!! $notes->appends(['sort' => 'votes'])->render() !!}

@endsection