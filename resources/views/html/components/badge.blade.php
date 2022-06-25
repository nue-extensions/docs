@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Badge')

@section('content')
  <x-nue::docs::header>
    Badge
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/badge</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Badge</x-slot:label>
  </x-nue::docs::header>

  <h2 id="contextual-variations" class="nue-docs-heading">
    Contextual variations <a class="anchorjs-link" href="#contextual-variations" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="badge bg-primary">Primary</span>
      <span class="badge bg-secondary">Secondary</span>
      <span class="badge bg-success">Success</span>
      <span class="badge bg-danger">Danger</span>
      <span class="badge bg-warning">Warning</span>
      <span class="badge bg-info">Info</span>
      <span class="badge bg-light text-body">Light</span>
      <span class="badge bg-dark">Dark</span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="badge bg-primary"&gt;Primary&lt;/span&gt;
          &lt;span class="badge bg-secondary"&gt;Secondary&lt;/span&gt;
          &lt;span class="badge bg-success"&gt;Success&lt;/span&gt;
          &lt;span class="badge bg-danger"&gt;Danger&lt;/span&gt;
          &lt;span class="badge bg-warning"&gt;Warning&lt;/span&gt;
          &lt;span class="badge bg-info"&gt;Info&lt;/span&gt;
          &lt;span class="badge bg-light"&gt;Light&lt;/span&gt;
          &lt;span class="badge bg-dark"&gt;Dark&lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="soft" class="nue-docs-heading">
    Soft <a class="anchorjs-link" href="#soft" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="badge bg-soft-primary text-primary">Primary</span>
      <span class="badge bg-soft-primary-light text-primary">Primary Light</span>
      <span class="badge bg-soft-secondary text-secondary">Secondary</span>
      <span class="badge bg-soft-success text-success">Success</span>
      <span class="badge bg-soft-danger text-danger">Danger</span>
      <span class="badge bg-soft-warning text-warning">Warning</span>
      <span class="badge bg-soft-info text-info">Info</span>
      <span class="badge bg-soft-light text-light text-body">Light</span>
      <span class="badge bg-soft-dark text-dark">Dark</span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="badge bg-soft-primary text-primary"&gt;Primary&lt;/span&gt;
          &lt;span class="badge bg-soft-primary-light text-primary"&gt;Primary Light&lt;/span&gt;
          &lt;span class="badge bg-soft-secondary text-secondary"&gt;Secondary&lt;/span&gt;
          &lt;span class="badge bg-soft-success text-success"&gt;Success&lt;/span&gt;
          &lt;span class="badge bg-soft-danger text-danger"&gt;Danger&lt;/span&gt;
          &lt;span class="badge bg-soft-warning text-warning"&gt;Warning&lt;/span&gt;
          &lt;span class="badge bg-soft-info text-info"&gt;Info&lt;/span&gt;
          &lt;span class="badge bg-soft-light text-light"&gt;Light&lt;/span&gt;
          &lt;span class="badge bg-soft-dark text-dark"&gt;Dark&lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="pill-badges" class="nue-docs-heading">
    Pill badges <a class="anchorjs-link" href="#pill-badges" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="badge bg-primary rounded-pill">Primary</span>
      <span class="badge bg-secondary rounded-pill">Secondary</span>
      <span class="badge bg-success rounded-pill">Success</span>
      <span class="badge bg-danger rounded-pill">Danger</span>
      <span class="badge bg-warning rounded-pill">Warning</span>
      <span class="badge bg-info rounded-pill">Info</span>
      <span class="badge bg-light rounded-pill text-body">Light</span>
      <span class="badge bg-dark rounded-pill">Dark</span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="badge bg-primary rounded-pill"&gt;Primary&lt;/span&gt;
          &lt;span class="badge bg-secondary rounded-pill"&gt;Secondary&lt;/span&gt;
          &lt;span class="badge bg-success rounded-pill"&gt;Success&lt;/span&gt;
          &lt;span class="badge bg-danger rounded-pill"&gt;Danger&lt;/span&gt;
          &lt;span class="badge bg-warning rounded-pill"&gt;Warning&lt;/span&gt;
          &lt;span class="badge bg-info rounded-pill"&gt;Info&lt;/span&gt;
          &lt;span class="badge bg-light rounded-pill"&gt;Light&lt;/span&gt;
          &lt;span class="badge bg-dark rounded-pill"&gt;Dark&lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="more-examples" class="nue-docs-heading">
    More examples <a class="anchorjs-link" href="#more-examples" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="h1">Example heading <span class="badge bg-secondary">New</span></div>
      <div class="h2">Example heading <span class="badge bg-secondary">New</span></div>
      <div class="h3">Example heading <span class="badge bg-secondary">New</span></div>
      <div class="h4">Example heading <span class="badge bg-secondary">New</span></div>
      <div class="h5">Example heading <span class="badge bg-secondary">New</span></div>
      <div class="h6">Example heading <span class="badge bg-secondary">New</span></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="h1"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/div&gt;
          &lt;div class="h2"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/div&gt;
          &lt;div class="h3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/div&gt;
          &lt;div class="h4"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/div&gt;
          &lt;div class="h5"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/div&gt;
          &lt;div class="h6"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary">
        Notifications <span class="badge bg-light text-dark ms-1">2</span>
      </button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-primary"&gt;
            Notifications &lt;span class="badge bg-light text-dark ms-1"&gt;2&lt;/span&gt;
          &lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection