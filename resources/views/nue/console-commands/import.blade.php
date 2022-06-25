@extends('nue-docs::app')
@section('title', 'Import (Extensions)')

@section('content')
	<x-nue::docs::header>
    Import
    <x-slot:description>
      Import a Nue extension.
    </x-slot:description>
  </x-nue::docs::header>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      php artisan nue:import
    </code>
  </pre>
@endsection