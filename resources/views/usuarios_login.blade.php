@extends('layouts.app')

@section('conteudo')

	<div class="row">
		<img id="img-lock" src="{{asset('images/lock.png')}}">	
	</div>

	<div class="row">

		<div class="col-md-4">
	
		</div>

		<div class="col-md-4">

			{{-- Erros de validação --}}
			@include('inc.erros')

			<form method="POST" action="/fazer_login">

			{{-- csrf --}}
			{{csrf_field()}}

			  <div class="form-group">
			    <label for="usuario">Usuário:</label>
			    <input type="text" class="form-control" name="text_usuario" id="usuario" placeholder="Usuário">
			  </div>
			  <div class="form-group">
			    <label for="senha">Senha:</label>
			    <input type="password" class="form-control" name="text_senha" id="senha" placeholder="Senha">
			  </div>
			  <button type="submit" class="btn btn-primary">Login</button>
			</form>

		</div>

		<div class="col-md-4">
	
		</div>

	</div>


@endsection