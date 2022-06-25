@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Iconify Design')

@section('content')
  <x-nue::docs::header>
    Iconify Design
    <x-slot:link>https://iconify.design</x-slot:link>
    <x-slot:label>Official Iconify Website</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="iconify me-2" data-icon="heroicons-solid:home"></span>
      <span class="iconify me-2" data-icon="ant-design:home-twotone"></span>
      <span class="iconify me-2" data-icon="flat-color-icons:home"></span>
      <span class="iconify me-2" data-icon="icon-park:home-two"></span>
      <span class="iconify me-2" data-icon="line-md:home-simple-twotone"></span>
      <span class="iconify me-2" data-icon="icon-park-twotone:home-two"></span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="iconify" data-icon="heroicons-solid:home"&gt;&lt;/span&gt;
          &lt;span class="iconify" data-icon="ant-design:home-twotone"&gt;&lt;/span&gt;
          &lt;span class="iconify" data-icon="flat-color-icons:home"&gt;&lt;/span&gt;
          &lt;span class="iconify" data-icon="icon-park:home-two"&gt;&lt;/span&gt;
          &lt;span class="iconify" data-icon="line-md:home-simple-twotone"&gt;&lt;/span&gt;
          &lt;span class="iconify" data-icon="icon-park-twotone:home-two"&gt;&lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Icon lengkapnya cek <a class="link" href="https://iconify.design/" target="_blank">di sini <i class="bi-box-arrow-up-right"></i></a></p>

@endsection