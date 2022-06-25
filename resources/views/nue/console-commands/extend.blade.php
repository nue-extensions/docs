@extends('nue-docs::app')
@section('title', 'Extend')

@section('content')
	<x-nue::docs::header>
    Extend
    <x-slot:description>
      Build a Nue extension.
    </x-slot:description>
  </x-nue::docs::header>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue:extend
    </code>
  </pre>
@endsection