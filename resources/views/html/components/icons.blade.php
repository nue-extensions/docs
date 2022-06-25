@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Icons')

@section('content')
  <x-nue::docs::header>
    Icons
  </x-nue::docs::header>

  <h2 id="icon-types" class="nue-docs-heading">
    Types <a class="anchorjs-link" href="#icon-types" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="icon icon-primary">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-soft-primary">
        <i class="bi-house"></i>
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="icon icon-primary"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-soft-primary"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="color-variants" class="nue-docs-heading">
    Color variants <a class="anchorjs-link" href="#color-variants" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="icon icon-primary mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-secondary mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-success mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-danger mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-warning mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-info mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-light mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-dark mb-1">
        <i class="bi-house"></i>
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="icon icon-primary"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-secondary"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-success"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-danger"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-warning"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-info"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-light"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-dark"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="soft-icons" class="nue-docs-heading">
    Soft icons <a class="anchorjs-link" href="#soft-icons" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="icon icon-soft-primary mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-soft-secondary mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-soft-success mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-soft-danger mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-soft-warning mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-soft-info mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-soft-light mb-1">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-soft-dark mb-1">
        <i class="bi-house"></i>
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="icon icon-soft-primary"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-soft-secondary"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-soft-success"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-soft-danger"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-soft-warning"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-soft-info"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-soft-light"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-soft-dark"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="sizes" class="nue-docs-heading">
    Sizes <a class="anchorjs-link" href="#sizes" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="icon icon-lg icon-primary">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-primary">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-sm icon-primary">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-xs icon-primary">
        <i class="bi-house"></i>
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="icon icon-lg icon-primary"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-primary"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-sm icon-primary"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-xs icon-primary"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="circle" class="nue-docs-heading">
    Circle <a class="anchorjs-link" href="#circle" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="icon icon-lg icon-primary icon-circle">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-primary icon-circle">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-sm icon-primary icon-circle">
        <i class="bi-house"></i>
      </span>
      <span class="icon icon-xs icon-primary icon-circle">
        <i class="bi-house"></i>
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="icon icon-lg icon-primary icon-circle"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-primary icon-circle"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-sm icon-primary icon-circle"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
          &lt;span class="icon icon-xs icon-primary icon-circle"&gt;
            &lt;i class="bi-house"&gt;&lt;/i&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection