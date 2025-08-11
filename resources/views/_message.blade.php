@if(!empty(session('success')))
    <div style="color: green;" role="alert">
        {{session('success')}}
    </div>
@endif

@if(!empty(session('error')))
    <div style="color: red;" role="alert">
        {{session('error')}}
    </div>
@endif
@if(!empty(session('payment-error')))
    <div class="alert alert-error " role="alert">
        {{session('payment-error')}}
    </div>
@endif
@if(!empty(session('warning')))
    <div class="alert alert-warning " role="alert">
        {{session('warning')}}
    </div>
@endif
@if(!empty(session('info')))
    <div class="alert alert-info " role="alert">
        {{session('info')}}
    </div>
@endif
@if(!empty(session('secondary')))
    <div class="alert alert-secondary " role="alert">
        {{session('secondary')}}
    </div>
@endif
@if(!empty(session('primary')))
    <div class="alert alert-primary " role="alert">
        {{session('primary')}}
    </div>
@endif