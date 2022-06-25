@extends('nue-docs::app')
@section('title', 'Routes')

@section('content')
	<x-nue::docs::header>
    Routes
  </x-nue::docs::header>


  <p class="lead">
  	The permissions and routes are bound together, in the edit permission page which set the current permissions can access the routing, in the <code>HTTP method</code> select box to select the method of access to the path, in the <code>HTTP path</code> textarea fill in the path to access.
  </p>
		
	<p class="lead">
		For example, to add a permission, the permission can access the path <code>/nue/users</code> in GET method, then <code>HTTP method</code> select GET, <code>HTTP path</code> fill in /users.		
	</p>

	<p class="lead">
		Bila kamu ingin mengakses seluruh path dengan prefix <code>/nue/users</code>, maka <code>HTTP path</code> harus diisi dengan <code>/users*</code>, jika permission memiliki lebih dari satu paths, cukup pisahkan dengan baris baru (enter).
	</p>

@endsection