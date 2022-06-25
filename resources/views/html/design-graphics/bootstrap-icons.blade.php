@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Bootstrap Icons')

@section('content')
  <x-nue::docs::header>
    Bootstrap Icons
    <x-slot:link>https://icons.getbootstrap.com</x-slot:link>
    <x-slot:label>Official Bootstrap Icon page</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <i class="bi-star me-2"></i>
      <i class="bi-check me-2"></i>
      <i class="bi-archive me-2"></i>
      <i class="bi-basket me-2"></i>
      <i class="bi-app-indicator me-2"></i>
      <i class="bi-bell me-2"></i>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;i class="bi-star"&gt;&lt;/i&gt;
          &lt;i class="bi-check"&gt;&lt;/i&gt;
          &lt;i class="bi-archive"&gt;&lt;/i&gt;
          &lt;i class="bi-basket"&gt;&lt;/i&gt;
          &lt;i class="bi-app-indicator"&gt;&lt;/i&gt;
          &lt;i class="bi-bell"&gt;&lt;/i&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Icon lengkapnya cek <a class="link" href="https://icons.getbootstrap.com/" target="_blank">di sini <i class="bi-box-arrow-up-right"></i></a></p>
@endsection