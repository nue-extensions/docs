@extends('nue-docs::app')
@section('title', 'Menu Management')

@section('content')
	<x-nue::docs::header>
    Menu Management
    <x-slot:description>
      Penjelasan terkait modular <b>Menu</b> yang tersedia dalam Nue
    </x-slot:description>
  </x-nue::docs::header>

  <img src="https://raw.githubusercontent.com/novay/imagehost/master/github/nue-menu-page.png" alt="" class="w-100">

  <hr class="my-4">

  <h2 id="urutkan" class="hs-docs-heading">
    Urutkan Menu <a class="anchorjs-link" href="#urutkan" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <br/>

  <p class="lead">
    Kamu bisa menyesuaikan kebutuhan urutan menu yang kamu inginkan cukup dengan melakukan <b>drag n' drop</b> pada salah satu menu yang ingin kamu geser posisinya.
    Jangan lupa tekan tombol <b>Save</b> setelah posisi menu sesuai.
  </p>

  <p class="lead">
    Kamu bisa mengubah properti dari tiap menu dengan menekan tombol <span class="fw-semi-bold text-success"><span class="iconify" data-icon="icon-park-twotone:edit"></span>  Edit</span>, dan menghapusnya dengan menekan icon <span class="text-danger"><span class="iconify i-lg" data-icon="icon-park-twotone:delete-five"></span></span>
  </p>

  <hr class="my-4">

  <h2 id="buat" class="hs-docs-heading">
    Buat Menu <a class="anchorjs-link" href="#buat" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <br/>

  <p class="lead">
    Kamu bisa membuat menu baru cukup dengan melengkapi kolom yang disiapkan:
    <ol class="lead">
      <li>Parent: <span class="text-muted">Induk dari menu yang ingin dibuat.</span></li>
      <li>Title: <span class="text-muted">Label dari menu</span></li>
      <li>Icon: <span class="text-muted">Jenis icon yang dibutuhkan, kamu bisa ambil dari <a href="https://iconify.design" target="_blank">Iconify</a>.</span></li>
      <li>URI: <span class="text-muted">Tujuan atau arah URL yang dituju dari menu yang dibuat.</span></li>
      <li>Roles: <span class="text-muted">Batasi hanya user yang memiliki roles tertentu yang memiliki akses kehalaman yang dimaksud.</span></li>
      <li>Permission: <span class="text-muted">Batasi hanya user yang memiliki permission tertentu yang memiliki akses kehalaman yang dimaksud.</span></li>
    </ol>
  </p>

@endsection