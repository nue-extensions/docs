@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Sliding Image')

@section('content')
  <x-nue::docs::header>
    Sliding Image
  </x-nue::docs::header>

  <h2 id="basic-example" class="nue-docs-heading">
    Kanan ke Kiri <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="sliding-img">
        <div class="sliding-img-frame-to-start" style="background-image: url(https://cdn.btekno.id/templates/nue/img/others/img1.png);" data-nue-theme-appearance="default"></div>
        <div class="sliding-img-frame-to-start" style="background-image: url(https://cdn.btekno.id/templates/nue/img/others/img1-dark.png);" data-nue-theme-appearance="dark"></div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="sliding-img"&gt;
            &lt;div class=&quot;sliding-img-frame-to-start&quot; style=&quot;background-image: url(https://cdn.btekno.id/templates/nue/img/others/img1.png);&quot; data-nue-theme-appearance=&quot;default&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;sliding-img-frame-to-start&quot; style=&quot;background-image: url(https://cdn.btekno.id/templates/nue/img/others/img1-dark.png);&quot; data-nue-theme-appearance=&quot;dark&quot;&gt;&lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="slide-to-right-direction" class="nue-docs-heading">
    Kiri ke Kanan <a class="anchorjs-link" href="#slide-to-right-direction" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="sliding-img">
        <div class="sliding-img-frame-to-end" style="background-image: url(https://cdn.btekno.id/templates/nue/img/others/img2.png);" data-nue-theme-appearance="default"></div>
        <div class="sliding-img-frame-to-end" style="background-image: url(https://cdn.btekno.id/templates/nue/img/others/img2-dark.png);" data-nue-theme-appearance="dark"></div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="sliding-img"&gt;
            &lt;div class=&quot;sliding-img-frame-to-end&quot; style=&quot;background-image: url(https://cdn.btekno.id/templates/nue/img/others/img2.png);&quot; data-nue-theme-appearance=&quot;default&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;sliding-img-frame-to-end&quot; style=&quot;background-image: url(https://cdn.btekno.id/templates/nue/img/others/img2-dark.png);&quot; data-nue-theme-appearance=&quot;dark&quot;&gt;&lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>
@endsection