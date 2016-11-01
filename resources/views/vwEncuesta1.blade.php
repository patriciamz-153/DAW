@extends ("layout")

@section ("title","Contacto")


@section ("content")

<div class="container">
	<form method="POST">
		<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
	  	<div class="form-group">
	    	<label for="nombre">Nombres Completos: </label> 
	    	<input type="text" class="form-control" id="nombre" name="nombre">
	  	</div>
		<div class="form-group">
	    	<label for="email">Email: </label>
	    	<input type="email" class="form-control" id="email" name="email">
	  	</div>
	  	<div class="form-group">
	    	<label for="text">Escribe tu mensaje: </label>
	    	<textarea id="text" name="text" class="form-control" rows="3"></textarea>
	  	</div>
		
	  	<button type="submit" class="btn btn-default">Enviar</button>
	</form>
</div>

@endsection 