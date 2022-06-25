@extends('nue-docs::app')
@section('title', 'Backup')

@section('content')
	<x-nue::docs::header>
    Backup
    <x-slot:description>An admin interface to managing backups for Nue.</x-slot:description>
    <x-slot:link>https://github.com/nue-extensions/backup</x-slot:link>
    <x-slot:label>https://github.com/nue-extensions/backup</x-slot:label>
  </x-nue::docs::header>

  <p class="lead">
  	Fitur admin untuk mengelola backup database dan storage yang terinspirasi dari <a href="https://github.com/laravel-backpack/backupmanager" target="_blank">https://github.com/laravel-backpack/backupmanager</a>.
	</p>
	
	<hr class="my-4">
  <h2 class="mb-3">Screenshot</h2>
  <br/>
  <img src="https://raw.githubusercontent.com/novay/imagehost/master/github/nue-extensions-backup.png" alt="" class="w-100">

	<hr class="my-4">
  <h2 class="mb-3">Persyaratan</h2>
  <ul class="lead">
  	<li>Nue Package >= 2.0</li>
  	<li>Laravel Backup by Spatie</li>
  </ul>

  <hr class="my-4">
  <h2 class="mb-3">Instalasi</h2>

  <blockquote class="blockquote">
  	Sebelum meng-install package ini, kamu wajib menginstall <a href="https://github.com/spatie/laravel-backup" target="_blank">laravel-backup</a> hingga bisa digunakan.
  </blockquote>

  <br/>
  <pre class="rounded">
    <code class="language-html" data-lang="html">
      composer require nue-extensions/backup -vvv
    </code>
  </pre>

  <br/>
  <p class="lead">
  	Bila kamu pengen munculin menu di sidebar Nue, eksekusi perintah berikut:
  </p>
  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue:import backup
    </code>
  </pre>


	<hr class="my-4">
  <h2 class="mb-3">Penggunaan</h2>
  <p class="lead">
  	Cukup kunjungi halaman <a href="javascript:;">http://localhost/nue/backup</a> melalui peramban manapun.
  </p>

  <hr class="my-4">
  <h2 class="mb-3">Lisensi</h2>
  <p class="lead">
  	<b>Backup</b> ini dikembangin dengan Lisensi MIT. Artinya kamu bebas menggunakannya baik untuk kepentingan pribadi maupun komersil. Enjoy!
  </p>

@endsection