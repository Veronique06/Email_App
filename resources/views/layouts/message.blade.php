<div class="row">
    <div class="col-lg-6">
        @if(Session::get('primary'))
        <div class="alert alert-outline-primary" role="alert">
            <strong>{{Session::get('primary')}}</strong>
        </div>
        @endif

        @if(Session::get('success'))
        <div class="alert alert-outline-success" role="alert">
            <strong>{{Session::get('success')}}</strong>
        </div>
        @endif

        @if(Session::get('danger'))
        <div class="alert alert-outline-danger" role="alert">
            <strong>{{Session::get('danger')}}</strong>
        </div>
        @endif

        @if(Session::get('warning'))
        <div class="alert alert-outline-warning" role="alert">
            <strong>{{Session::get('warning')}}</strong>
        </div>
        @endif
    </div>
</div>
