@extends('nue-docs::app')
@section('title', 'Create User')

@section('content')
	<x-nue::docs::header>
    Create User
    <x-slot:description>
      Membuat user baru melalui terminal (perintah console)
    </x-slot:description>
  </x-nue::docs::header>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue:create-user
    </code>
  </pre>

  <br/>
  <p class="lead">
  	Gunakan perintah ini untuk menambahkan user admin baru.
  	Kamu hanya cukup memasukkan email (username) dan password dan user baru akan dibuat.
  </p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
    	$ php artisan nue:create-user
    	
			Please enter an email to login:
			> novay@btekno.id

			Please enter a password to login:
			> 

			Please enter a name to display:
			> Noviyanto Rahmadi

			🤙 User [Noviyanto Rahmadi] created successfully.
	  </code>
  </pre>

@endsection