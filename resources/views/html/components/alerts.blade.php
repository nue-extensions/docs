@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Alerts')

@section('content')
  <x-nue::docs::header>
    Alerts
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/alerts</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Alerts</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="alert alert-primary mb-2" role="alert">
        This is a primary alert—check it out!
      </div>
      <div class="alert alert-secondary mb-2" role="alert">
        This is a secondary alert—check it out!
      </div>
      <div class="alert alert-success mb-2" role="alert">
        This is a success alert—check it out!
      </div>
      <div class="alert alert-danger mb-2" role="alert">
        This is a danger alert—check it out!
      </div>
      <div class="alert alert-warning mb-2" role="alert">
        This is a warning alert—check it out!
      </div>
      <div class="alert alert-info mb-2" role="alert">
        This is a info alert—check it out!
      </div>
      <div class="alert alert-light mb-2" role="alert">
        This is a light alert—check it out!
      </div>
      <div class="alert alert-dark mb-2" role="alert">
        This is a dark alert—check it out!
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="alert alert-primary" role="alert"&gt;
            This is a primary alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-secondary" role="alert"&gt;
            This is a secondary alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-success" role="alert"&gt;
            This is a success alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-danger" role="alert"&gt;
            This is a danger alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-warning" role="alert"&gt;
            This is a warning alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-info" role="alert"&gt;
            This is a info alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-light" role="alert"&gt;
            This is a light alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-dark" role="alert"&gt;
            This is a dark alert—check it out!
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="soft-style" class="nue-docs-heading">
    Soft style <a class="anchorjs-link" href="#soft-style" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="alert alert-soft-primary mb-2" role="alert">
        This is a soft primary alert—check it out!
      </div>
      <div class="alert alert-soft-secondary mb-2" role="alert">
        This is a soft secondary alert—check it out!
      </div>
      <div class="alert alert-soft-success mb-2" role="alert">
        This is a soft success alert—check it out!
      </div>
      <div class="alert alert-soft-danger mb-2" role="alert">
        This is a soft danger alert—check it out!
      </div>
      <div class="alert alert-soft-warning mb-2" role="alert">
        This is a soft warning alert—check it out!
      </div>
      <div class="alert alert-soft-info mb-2" role="alert">
        This is a soft info alert—check it out!
      </div>
      <div class="alert alert-soft-light text-dark mb-2" role="alert">
        This is a soft light alert—check it out!
      </div>
      <div class="alert alert-soft-dark mb-2" role="alert">
        This is a soft dark alert—check it out!
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="alert alert-soft-primary" role="alert"&gt;
            This is a soft primary alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-soft-secondary" role="alert"&gt;
            This is a soft secondary alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-soft-success" role="alert"&gt;
            This is a soft success alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-soft-danger" role="alert"&gt;
            This is a soft danger alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-soft-warning" role="alert"&gt;
            This is a soft warning alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-soft-info" role="alert"&gt;
            This is a soft info alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-soft-light" role="alert"&gt;
            This is a soft light alert—check it out!
          &lt;/div&gt;
          &lt;div class="alert alert-soft-dark" role="alert"&gt;
            This is a soft dark alert—check it out!
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="link-color" class="nue-docs-heading">
    Link color <a class="anchorjs-link" href="#link-color" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="alert alert-primary mb-2" role="alert">
        This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
      </div>
      <div class="alert alert-soft-primary mb-2" role="alert">
        This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="alert alert-primary" role="alert"&gt;
            This is a primary alert with &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;. Give it a click if you like.
          &lt;/div&gt;
          &lt;div class="alert alert-soft-primary" role="alert"&gt;
            This is a primary alert with &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;. Give it a click if you like.
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-icon" class="nue-docs-heading">
    With Icon <a class="anchorjs-link" href="#with-icon" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="alert alert-primary" role="alert">
        <div class="d-flex">
          <div class="flex-shrink-0">
            <i class="bi-exclamation-triangle-fill"></i>
          </div>
          <div class="flex-grow-1 ms-2">
            Information: Alert with icon
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="alert alert-primary" role="alert"&gt;
            &lt;div class="d-flex"&gt;
              &lt;div class="flex-shrink-0"&gt;
                &lt;i class="bi-exclamation-triangle-fill"&gt;&lt;/i&gt;
              &lt;/div&gt;
              &lt;div class="flex-grow-1 ms-2"&gt;
                Information: Alert with icon
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dismissing" class="nue-docs-heading">
    Dismissing <a class="anchorjs-link" href="#dismissing" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="fw-semi-bold">Holy guacamole!</span> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="alert alert-warning alert-dismissible fade show" role="alert"&gt;
            &lt;span class="fw-semi-bold"&gt;Holy guacamole!&lt;/span&gt; You should check in on some of those fields below.
            &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>
@endsection