@if(Session::has('message-success'))
    <div class="callout small success" data-closable>
        {{Session::get('message-success')}}
        <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif