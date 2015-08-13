@extends('app')

@section('content')
    <h1>Home</h1>

	<!-- FORM STARTS HERE -->
	<form method="POST" action="/message" novalidate class="text-left">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <div class="form-group @if ($errors->has('name')) has-error @endif">
	        <label for="name" class="control-label">Meno</label>
	        <input type="text" id="name" class="form-control" name="name" placeholder="Meno Priezvisko">
	        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
	    </div>

	    <div class="form-group @if ($errors->has('email')) has-error @endif">
	        <label for="email" class="control-label">Email</label>
	        <input type="text" id="email" class="form-control" name="email" placeholder="mail@priklad.sk">
	        @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
	    </div>

	    <div class="form-group @if ($errors->has('message')) has-error @endif">
	        <label for="message-text" class="control-label">Správa</label>
	        <textarea name="message" id="message-text" class="form-control"
	        placeholder="Sem prosím napíšte Vašu otázku, objednávku, správu ..."></textarea>
	        @if ($errors->has('message')) <p class="help-block">{{ $errors->first('message') }}</p> @endif
	    </div>

	    <button type="submit" class="btn btn-success">Odoslať</button>

	</form>


@stop