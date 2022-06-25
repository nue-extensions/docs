@extends('nue-docs::app')
@section('title', 'Lock-Screen')

@section('content')
	
	<x-nue::docs::header>
    Lock-Screen
    <x-slot:description>Add a lock screen page to Nue.</x-slot:description>
    <x-slot:link>https://github.com/nue-extensions/lockscreen</x-slot:link>
    <x-slot:label>https://github.com/nue-extensions/lockscreen</x-slot:label>
  </x-nue::docs::header>

  <p class="lead">
  	Tambahkan halaman lock-screen ke aplikasi Nue kamu.
  </p>

  <img src="https://raw.githubusercontent.com/novay/imagehost/master/github/nue-extensions-lockscreen.png" alt="" class="w-100">
  <hr class="my-4">
  <h2 class="mb-3">Persyaratan</h2>
  <ul class="lead">
  	<li>nue >= 2.0</li>
  </ul>

  <hr class="my-4">
  <h2 class="mb-3">Instalasi</h2>
  <pre class="rounded">
    <code class="language-html" data-lang="html">
      composer require nue-extensions/lockscreen
    </code>
  </pre>

  <br class="my-4">

  <p class="lead">
  	Terus munculin menu Lock-Screen ini di sidebar Nue, eksekusi perintah berikut:
  </p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue:import lock
    </code>
  </pre>

  <hr class="my-4">
  <h2 class="mb-3">Konfigurasi</h2>
  <p class="lead">
  	Tambahin middleware <code>nue.lock</code> di dalam file konfigurasi <code>config/nue.php</code> kayak gini:
  </p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      'route' => [

			    'prefix' => 'nue',

			    // Tambahin `nue.lock` disini
			    'middleware'    => ['web', 'nue', 'nue.lock'],
			],
    </code>
  </pre>

  <br/>
  <p class="lead">
  	Atau kamu bisa menggunakan middleware <code>nue.lock</code> ini melalui <b>route</b> atau <b>controller</b> seperti biasanya.
  </p>
  
  <hr class="my-4">
  <h2 class="mb-3">Penggunaan</h2>
  <p class="lead">
  	Buat ngaktifin halaman lock-screen ini, coba klik pada menu Lock-Screen yang barusan di-install. Setelah dikunjungi, semua halaman dalam cakupan middleware <b>nue.lock</b> bakal ke-direct kehalaman <b>Lockscreen</b> sampai kamu masukin password kamu yang bener.
  </p>

  <hr class="my-4">
  <h2 class="mb-3">Lisensi</h2>
  <p class="lead">
  	<b>Lock-Screen</b> ini dikembangin dengan Lisensi MIT. Artinya kamu bebas menggunakannya baik untuk kepentingan pribadi maupun komersil. Enjoy!
  </p>

@endsection