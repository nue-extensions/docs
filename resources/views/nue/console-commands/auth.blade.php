@extends('nue-docs::app')
@section('title', 'Auth')

@section('content')
	<x-nue::docs::header>
    Auth
    <x-slot:description>
      Membuat scaffolding controller autentikasi untuk aplikasi kamu.
    </x-slot:description>
  </x-nue::docs::header>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue:auth
    </code>
  </pre>

  <br/>
  <p class="lead">
  	Perintah ini akan secara otomatis tereksekusi ketika kamu menjalankan <code>artisan nue:install</code>. 
  	Dimana, proses ini akan membuat file-file controller yang menangani autentikasi dari aplikasi yang kamu kembangin.<br/><br/>
  	Dengan ini, kamu bisa melakukan kustomisasi pada setiap prosesnya, seperti pada saat proses login, registrasi hingga intervensi fasilitas lupa password untuk pengguna.
  </p>

  <br/>
  <h3>Output</h3>
  <br/>
  <pre class="rounded">
    <code class="language-html" data-lang="html">
			Authentication scaffolding generated successfully.

			└── app/Http/Controllers/Auth/
			      └── ConfirmPasswordController.php
			      └── ForgotPasswordController.php
			      └── LoginController.php
			      └── RegisterController.php
			      └── ResetPasswordController.php
			      └── VerificationController.php
	  </code>
  </pre>
@endsection