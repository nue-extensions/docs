@extends('nue-docs::app')
@section('title', 'Changelog')

@section('content')
	<x-nue::docs::header>
    Release Notes
    <x-slot:description>
      Catatan atau riwayat pengembangan Nue Package
    </x-slot:description>
  </x-nue::docs::header>

  <h2 id="v-10" class="hs-docs-heading">
    2.0 (10-07-2022) <a class="anchorjs-link" href="#v-10" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <ul class="lead">
  	<li>Initial release as a ready-to-use package</li>
  	<li>Modifikasi model <b>User.php</b></li>
  	<li>Implementasi access control (ACL)</li>
  </ul>

  <hr class="my-4">

  <h2 id="v-10" class="hs-docs-heading">
    1.0 (01-07-2022) <a class="anchorjs-link" href="#v-10" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <ul class="lead">
  	<li>Nue UI (layout only)</li>
  </ul>

@endsection