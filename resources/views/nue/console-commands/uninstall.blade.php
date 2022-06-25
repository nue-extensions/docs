@extends('nue-docs::app')
@section('title', 'Uninstall')

@section('content')
	<x-nue::docs::header>
    Uninstall
    <x-slot:description>
      Untuk menghapus seluruh direktori dan file yang dibuat oleh Nue package.
    </x-slot:description>
  </x-nue::docs::header>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue:uninstall
    </code>
  </pre>

  <br/>
  <p class="lead">
  	Perintah ini akan menghapus seluruh direktori dan file yang sebelumnya dibuat oleh Nue. 
  	Secara umum, berikut direktori dan file yang akan dihapus apabila kamu menjalankan perintah ini:
  </p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
			Are you sure to uninstall Nue? (yes/no) [no]:
			 > yes

			Remove Nue directory "app/Nue/*" ...'
			Remove Nue views "resources/views/*" ...'
			Remove Nue config file "config/nue.php" ...'
			<info>Uninstalling Nue done!</info>

			-
			└── app/Http/Controllers/
			│     └── Auth/*
			│     └── Nue/*
			│     └── HomeController.php
			└── app/Nue/*
			└── config/nue.php
			└── database/migrations/2021_01_01_000000_create_nue_tables.php
			└── resources/views/
			      └── auth/*
			      └── nue/*
			      └── layouts/*
			      └── profile/*
			      └── dashboard.blade.php
			      └── welcome.blade.php
	  </code>
  </pre>

@endsection