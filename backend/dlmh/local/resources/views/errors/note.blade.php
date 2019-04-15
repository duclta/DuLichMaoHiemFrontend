@if(Session::has('message'))
    <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
@endif
@if (Session::has('error'))
    <p class="alert alert-danger">{{Session::get('error')}}</p>
@endif

@foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
@endforeach