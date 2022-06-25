@extends('nue-docs::app')
@section('title', 'Change Password')

@section('content')
	<x-nue::docs::header>
    Change Password
    <x-slot:description>
      Melakukan reset password users melalui terminal (perintah console).
    </x-slot:description>
  </x-nue::docs::header>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue:reset-password
    </code>
  </pre>

  <br/>
  <pre class="rounded">
    <code class="language-html" data-lang="html">
			Please enter an email who needs to reset his password:
			> novay@btekno.id

			Please enter a new password:
			> 

			Please confirm the password:
			> 

			🤙 User [Noviyanto Rahmadi] password reset successfully.
	  </code>
  </pre>

@endsection