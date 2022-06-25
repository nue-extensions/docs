@extends('nue-docs::app')
@section('title', 'Permission')

@section('content')
	<x-nue::docs::header>
    Permission
  </x-nue::docs::header>
	
	<p class="lead">
		Nue has <b>built-in RBAC</b> permissions control module, expand the left sidebar Auth, you can see user, permissions and roles management panel, the use of permissions control as follows:		
	</p>

	<ol class="lead">
		<li><a href="{{ route('nue.nue.show', ['access-control', 'pages']) }}">Pages Permission</a></li>
		<li><a href="{{ route('nue.nue.show', ['access-control', 'routes']) }}">Route Permission</a></li>
		<li><a href="{{ route('nue.nue.show', ['access-control', 'middleware']) }}">Middleware Permission</a></li>
	</ol>

@endsection