@extends('nue-docs::app')
@section('title', 'Nue')

@section('content')
	<x-nue::docs::header>
    Nue
    <x-slot:description>
    	Nue memiliki beberapa console commands bawaan untuk membantu kamu dalam pengembangan. 
  		Setelah Nue terinstall, kamu bisa langsung menggunakannya.
    </x-slot:description>
  </x-nue::docs::header>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue
    </code>
  </pre>

  <br/>
  <p class="lead">Gunakan perintah ini untuk nampilin versi Nue, sekaligus daftar seluruh perintah yang disediakan oleh Nue.</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      .._   _            
			 | \ | |_   _  ___ 
			 |  \| | | | |/ _ \
			 | |\  | |_| |  __/
			 |_| \_|\__,_|\___|

			Nue version 2.00

			Available commands:
			 nue:install     Install the Nue components and resources.
			 nue:uninstall   Uninstall the Nue package.
			 nue:auth        Scaffold the authentication controllers (silent call).
			 nue:extend      Build a Nue extension.
			 nue:import      Import a Nue extension.
    </code>
  </pre>

@endsection