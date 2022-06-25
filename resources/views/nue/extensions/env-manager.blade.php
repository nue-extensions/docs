@extends('nue-docs::app')
@section('title', 'Env-Manager')

@section('content')
	<x-nue::docs::header>
    Env-Manager
    <x-slot:description>Kelola file <code>.env</code> untuk Nue Package.</x-slot:description>
    <x-slot:link>https://github.com/nue-extensions/env</x-slot:link>
    <x-slot:label>https://github.com/nue-extensions/env</x-slot:label>
  </x-nue::docs::header>

  <img src="https://raw.githubusercontent.com/novay/imagehost/master/github/nue-extensions-env.png" alt="" class="w-100">
	
	<hr class="my-4">
  <h2 class="mb-3">Persyaratan</h2>
  <ul class="lead">
  	<li>nue >= 2.0</li>
  </ul>

  <hr class="my-4">
  <h2 class="mb-3">Instalasi</h2>
  <pre class="rounded">
    <code class="language-html" data-lang="html">
      composer require nue-extensions/env
    </code>
  </pre>

  <br/>
  <p class="lead">
  	Bila kamu pengen munculin menu di sidebar Nue, eksekusi perintah berikut:
  </p>
  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue:import env
    </code>
  </pre>

	<hr class="my-4">
  <h2 class="mb-3">Konfigurasi</h2>
  <p class="lead">
  	Tambahin extensions berikut kedalam file konfigurasi yang terletak di <code>config/nue.php</code>:
  </p>
  <pre class="rounded">
    <code class="language-html" data-lang="html">
			'extensions' => [
			  ...
			  'env' => [
			    'enable' => true
			  ], 
			  ...
			]
    </code>
  </pre>

	<hr class="my-4">
  <h2 class="mb-3">Penggunaan</h2>
  <p class="lead">
  	Kunjungi halaman <a href="javascript:;">http://localhost/nue/env</a> melalui peramban manapun. Dan kamu bisa langsung mengelola file <code>.env</code> kamu melalui halaman ini.
  </p>

  <hr class="my-4">
  <h2 class="mb-3">Lisensi</h2>
  <p class="lead">
  	<b>Env Manager</b> ini dikembangin dengan Lisensi MIT. Artinya kamu bebas menggunakannya baik untuk kepentingan pribadi maupun komersil. Enjoy!
  </p>

@endsection