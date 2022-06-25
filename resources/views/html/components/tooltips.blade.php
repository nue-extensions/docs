@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Tooltips')

@section('content')
  <x-nue::docs::header>
    Tooltips
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/tooltips</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Tooltips</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary mb-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
        Tooltip on top
      </button>
      <button type="button" class="btn btn-primary mb-1" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
        Tooltip on right
      </button>
      <button type="button" class="btn btn-primary mb-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
        Tooltip on bottom
      </button>
      <button type="button" class="btn btn-primary mb-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
        Tooltip on left
      </button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top"&gt;
            Tooltip on top
          &lt;/button&gt;
          &lt;button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"&gt;
            Tooltip on right
          &lt;/button&gt;
          &lt;button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom"&gt;
            Tooltip on bottom
          &lt;/button&gt;
          &lt;button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left"&gt;
            Tooltip on left
          &lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Kalau mau pakai tag HTML bisa tambahin <code>data-bs-html="true"</code></p>

  <pre class="rounded">
    <code class="language-markup" data-lang="html">
      &lt;button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>"&gt;
        Tooltip with HTML
      &lt;/button&gt;
    </code>
  </pre>
@endsection