@if(Session::has('message-error'))
    <div class="callout small alert" data-closable>
        {{Session::get('message-error')}}
        <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif