@if(Session::has('message'))
<div class="alert alert-success">
	{{ Session::get('message')}}
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger">
	{{ Session::get('error')}}
</div>
@endif

@if ($errors->has())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
        {{ $error }}<br>        
    @endforeach
</div>
@endif