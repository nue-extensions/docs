@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Divider')

@section('content')
  <x-nue::docs::header>
    Divider
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="divider-start mb-5">Divider start</span>
      <span class="divider-end mb-5">Divider end</span>
      <span class="divider-center mb-5">Divider center</span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="divider-start"&gt;Divider start&lt;/span&gt;
          &lt;span class="divider-end"&gt;Divider end&lt;/span&gt;
          &lt;span class="divider-center"&gt;Divider center&lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>
@endsection