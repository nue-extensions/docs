@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Breadcrumbs')

@section('content')
  <x-nue::docs::header>
    Breadcrumb
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/breadcrumb</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Breadcrumb</x-slot:label>
  </x-nue::docs::header>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
      </nav>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;nav aria-label="breadcrumb"&gt;
            &lt;ol class="breadcrumb"&gt;
              &lt;li class="breadcrumb-item active" aria-current="page"&gt;Home&lt;/li&gt;
            &lt;/ol&gt;
          &lt;/nav&gt;

          &lt;nav aria-label="breadcrumb"&gt;
            &lt;ol class="breadcrumb"&gt;
              &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
              &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
            &lt;/ol&gt;
          &lt;/nav&gt;

          &lt;nav aria-label="breadcrumb"&gt;
            &lt;ol class="breadcrumb"&gt;
              &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
              &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Library&lt;/a&gt;&lt;/li&gt;
              &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
            &lt;/ol&gt;
          &lt;/nav&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection