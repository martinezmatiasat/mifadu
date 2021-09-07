@if (Session::has('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ Session::get('success') }}</strong>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ Session::get('error') }}</strong>
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ Session::get('warning') }}</strong>
    </div>
@endif

@if (Session::has('info'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ Session::get('info') }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
        </button>
        Check the following errors :(
    </div>
@endif
