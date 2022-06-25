@extends('nue-docs::app')
@section('title', 'Introduction')

@section('content')
	<x-nue::docs::header>
    Introduction
    <x-slot:description>
      Package Laravel untuk Para Pemalas
    </x-slot:description>
  </x-nue::docs::header>

  <img src="https://raw.githubusercontent.com/novay/imagehost/master/nue-package.png" alt="" class="w-100">

  <hr class="my-4">

  <p class="lead">
  	Hai, di halaman ini saya mau berbagi sebuah <b>package interface admin</b> buat kalian para developer PHP, terkhusus yang sudah biasa menggunakan Framework <b>Laravel</b> sebagai backend supportnya.
  </p>
  
  <p class="lead">
		Tadinya package ini saya buat untuk kebutuhan pribadi saya yang entah kenapa makin lama makin jenuh dengan dunia pemprograman. Karena pada dasarnya, kebanyakan kebutuhan sistem yang diminta itu, ya begitu-begitu aja. 
		<br/><br/>
		<span class="badge bg-primary">Buat Project</span> > 
		<span class="badge bg-primary">Bikin Halaman Login</span> > 
		<span class="badge bg-secondary">Terkadang butuh halaman registrasi</span> > 
		<span class="badge bg-warning">CRUD ini</span> > 
		<span class="badge bg-warning">CRUD itu</span> > 
		<span class="badge bg-success">Selesai</span> > 
		<span class="badge bg-danger">Dan terus berulang.</span>
  </p>
  
  <br/>

	<p class="lead">
		Dari kejenuhan itulah akhirnya saya buat ini package yang tadinya saya pakai buat pribadi. Nah, kali ini saya simpan aja di Github supaya teman-teman yang lain, yang juga sudah merasakan kejenuhan yang berulang itu bisa pakai ini untuk mempersingkat waktu pekerjaan kalian.  	
  </p>

  <hr class="my-4">

  <div class="alert alert-soft-dark" role="alert">
    <div class="d-flex align-items-baseline">
      <div class="flex-shrink-0">
        <i class="bi-info-circle me-1"></i>
      </div>
      <div class="flex-grow-1 ms-2 lead">
      	<b>Note:</b><br/>
      	Package ini tidak diperuntukkan buat kalian yang masih baru, atau yang lagi panas-panasnya belajar pemprograman. Karena package ini dibuat untuk kami-kami yang pemalas!
      </div>
    </div>
  </div>

  <hr class="my-4">

	<p class="lead">
		Langsung saja, didalam package ini sudah built-in beberapa fitur utama yang sering kita implementasi ditahap awal dalam pembuatan aplikasi, seperti:
	</p>
	
	<ul class="lead">
		<li>Fitur autentikasi, seperti login, register & lupa password standard yang bisa kalian aktif dan nonaktifkan sesuai kebutuhan kamu.</li>
		<li>Template admin bawaan yang basisnya Bootstrap. Kalian bisa langsung copy paste source componentnya di <a href="{{ route('nue.components.index') }}">halaman sebelah</a>.</li>
		<li>Menu yang dinamis, jadi kamu sendiri yang tentukan menu-menu yang ditampilin dihalaman aplikasi kamu.</li>
		<li>Role & Permission, standar lah. Buat ngebatasin user-user mana aja yang berhak mengakses halaman tertentu.</li>
	</ul>

  <hr class="my-4">

	<p class="lead">
		Sebenarnya dalam package ini juga include component yang pemanggilannya menggunakan syntax blade, tapi itu untuk yang mau ribet mempelajari dokumentasi tambahan. Saya pribadi sih meskipun sudah buat syntax blade yang kesannya lebih sederhana dan pendek. 
		Faktanya, dalam implementasinya malah sering gunain syntax HTML biasa, karena lebih terbiasa dengan itu. 
	</p>

	<p class="lead">
		Tapi buat kalian yang mau cobain komponen UI dalam syntax blade bisa scroll ke menu bawah buat baca-baca dulu. Kalau mau ikut kontribusi dalam pengembangannya juga monggo, biar ini package bisa lebih keren lagi.
	</p>
	
	<p class="lead">
  	Oke, langsung saja. Mari kita lanjut ke <a href="{{ route('nue.nue.show', ['getting-started', 'installation']) }}">halaman Instalasi</a>.
  </p>

@endsection