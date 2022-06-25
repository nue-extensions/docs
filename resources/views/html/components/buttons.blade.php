@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Buttons')

@section('content')
  <x-nue::docs::header>
    Buttons
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/buttons</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Buttons</x-slot:label>
  </x-nue::docs::header>

  <h2 id="button-types" class="nue-docs-heading">
    Types <a class="anchorjs-link" href="#button-types" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary me-2">Primary</button>
      <button type="button" class="btn btn-outline-primary me-2">Outline</button>
      <button type="button" class="btn btn-soft-primary me-2">Soft</button>
      <button type="button" class="btn btn-ghost-primary me-2">Ghost</button>
      <button type="button" class="btn btn-link me-2">Link</button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
          &lt;button type="button" class="btn btn-outline-primary"&gt;Outline&lt;/button&gt;
          &lt;button type="button" class="btn btn-ghost-primary"&gt;Ghost&lt;/button&gt;
          &lt;button type="button" class="btn btn-soft-primary"&gt;Soft&lt;/button&gt;
          &lt;button type="button" class="btn btn-link"&gt;Link&lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="white" class="nue-docs-heading">
    White <a class="anchorjs-link" href="#white" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-white">Button white</button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-white"&gt;Button white&lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="color-variants" class="nue-docs-heading">
    Color variants <a class="anchorjs-link" href="#color-variants" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary me-1 mb-1">Primary</button>
      <button type="button" class="btn btn-secondary me-1 mb-1">Secondary</button>
      <button type="button" class="btn btn-success me-1 mb-1">Success</button>
      <button type="button" class="btn btn-danger me-1 mb-1">Danger</button>
      <button type="button" class="btn btn-warning me-1 mb-1">Warning</button>
      <button type="button" class="btn btn-info me-1 mb-1">Info</button>
      <button type="button" class="btn btn-light me-1 mb-1">Light</button>
      <button type="button" class="btn btn-dark me-1 mb-1">Dark</button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
          &lt;button type="button" class="btn btn-secondary"&gt;Secondary&lt;/button&gt;
          &lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
          &lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
          &lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
          &lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
          &lt;button type="button" class="btn btn-light"&gt;Light&lt;/button&gt;
          &lt;button type="button" class="btn btn-dark"&gt;Dark&lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="outline-buttons" class="nue-docs-heading">
    Outline buttons <a class="anchorjs-link" href="#outline-buttons" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-outline-primary me-1 mb-1">Primary</button>
      <button type="button" class="btn btn-outline-secondary me-1 mb-1">Secondary</button>
      <button type="button" class="btn btn-outline-success me-1 mb-1">Success</button>
      <button type="button" class="btn btn-outline-danger me-1 mb-1">Danger</button>
      <button type="button" class="btn btn-outline-warning me-1 mb-1">Warning</button>
      <button type="button" class="btn btn-outline-info me-1 mb-1">Info</button>
      <button type="button" class="btn btn-outline-light me-1 mb-1">Light</button>
      <button type="button" class="btn btn-outline-dark me-1 mb-1">Dark</button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-outline-primary"&gt;Primary&lt;/button&gt;
          &lt;button type="button" class="btn btn-outline-secondary"&gt;Secondary&lt;/button&gt;
          &lt;button type="button" class="btn btn-outline-success"&gt;Success&lt;/button&gt;
          &lt;button type="button" class="btn btn-outline-danger"&gt;Danger&lt;/button&gt;
          &lt;button type="button" class="btn btn-outline-warning"&gt;Warning&lt;/button&gt;
          &lt;button type="button" class="btn btn-outline-info"&gt;Info&lt;/button&gt;
          &lt;button type="button" class="btn btn-outline-light"&gt;Light&lt;/button&gt;
          &lt;button type="button" class="btn btn-outline-dark"&gt;Dark&lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="soft-buttons" class="nue-docs-heading">
    Soft buttons <a class="anchorjs-link" href="#soft-buttons" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-soft-primary me-1 mb-1">Primary</button>
      <button type="button" class="btn btn-soft-secondary me-1 mb-1">Secondary</button>
      <button type="button" class="btn btn-soft-success me-1 mb-1">Success</button>
      <button type="button" class="btn btn-soft-danger me-1 mb-1">Danger</button>
      <button type="button" class="btn btn-soft-warning me-1 mb-1">Warning</button>
      <button type="button" class="btn btn-soft-info me-1 mb-1">Info</button>
      <button type="button" class="btn btn-soft-light me-1 mb-1">Light</button>
      <button type="button" class="btn btn-soft-dark me-1 mb-1">Dark</button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-soft-primary"&gt;Primary&lt;/button&gt;
          &lt;button type="button" class="btn btn-soft-secondary"&gt;Secondary&lt;/button&gt;
          &lt;button type="button" class="btn btn-soft-success"&gt;Success&lt;/button&gt;
          &lt;button type="button" class="btn btn-soft-danger"&gt;Danger&lt;/button&gt;
          &lt;button type="button" class="btn btn-soft-warning"&gt;Warning&lt;/button&gt;
          &lt;button type="button" class="btn btn-soft-info"&gt;Info&lt;/button&gt;
          &lt;button type="button" class="btn btn-soft-light"&gt;Light&lt;/button&gt;
          &lt;button type="button" class="btn btn-soft-dark"&gt;Dark&lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="ghost-buttons" class="nue-docs-heading">
    Ghost buttons <a class="anchorjs-link" href="#ghost-buttons" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-ghost-primary me-1 mb-1">Primary</button>
      <button type="button" class="btn btn-ghost-secondary me-1 mb-1">Secondary</button>
      <button type="button" class="btn btn-ghost-success me-1 mb-1">Success</button>
      <button type="button" class="btn btn-ghost-danger me-1 mb-1">Danger</button>
      <button type="button" class="btn btn-ghost-warning me-1 mb-1">Warning</button>
      <button type="button" class="btn btn-ghost-info me-1 mb-1">Info</button>
      <button type="button" class="btn btn-ghost-light me-1 mb-1">Light</button>
      <button type="button" class="btn btn-ghost-dark me-1 mb-1">Dark</button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-ghost-primary"&gt;Primary&lt;/button&gt;
          &lt;button type="button" class="btn btn-ghost-secondary"&gt;Secondary&lt;/button&gt;
          &lt;button type="button" class="btn btn-ghost-success"&gt;Success&lt;/button&gt;
          &lt;button type="button" class="btn btn-ghost-danger"&gt;Danger&lt;/button&gt;
          &lt;button type="button" class="btn btn-ghost-warning"&gt;Warning&lt;/button&gt;
          &lt;button type="button" class="btn btn-ghost-info"&gt;Info&lt;/button&gt;
          &lt;button type="button" class="btn btn-ghost-light"&gt;Light&lt;/button&gt;
          &lt;button type="button" class="btn btn-ghost-dark"&gt;Dark&lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="sizes" class="nue-docs-heading">
    Sizes <a class="anchorjs-link" href="#sizes" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary btn-lg me-1 mb-1">Large Button</button>
      <button type="button" class="btn btn-primary me-1 mb-1">Default Size</button>
      <button type="button" class="btn btn-primary btn-sm me-1 mb-1">Small Button</button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-primary btn-lg"&gt;Large Button&lt;/button&gt;
          &lt;button type="button" class="btn btn-primary"&gt;Default Size&lt;/button&gt;
          &lt;button type="button" class="btn btn-primary btn-sm"&gt;Small Button&lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="button-pilled" class="nue-docs-heading">
    Button pilled <a class="anchorjs-link" href="#button-pilled" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary rounded-pill">Primary</button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-primary rounded-pill"&gt;Primary&lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="radio-button-group" class="nue-docs-heading">
    Radio button group <a class="anchorjs-link" href="#radio-button-group" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
        <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
        <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group" role="group" aria-label="Basic checkbox toggle button group"&gt;
            &lt;input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off"&gt;
            &lt;label class="btn btn-outline-primary" for="btncheck1"&gt;Checkbox 1&lt;/label&gt;

            &lt;input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off"&gt;
            &lt;label class="btn btn-outline-primary" for="btncheck2"&gt;Checkbox 2&lt;/label&gt;

            &lt;input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off"&gt;
            &lt;label class="btn btn-outline-primary" for="btncheck3"&gt;Checkbox 3&lt;/label&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
        <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group" role="group" aria-label="Basic radio toggle button group"&gt;
            &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked&gt;
            &lt;label class="btn btn-outline-primary" for="btnradio1"&gt;Radio 1&lt;/label&gt;

            &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off"&gt;
            &lt;label class="btn btn-outline-primary" for="btnradio2"&gt;Radio 2&lt;/label&gt;

            &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off"&gt;
            &lt;label class="btn btn-outline-primary" for="btnradio3"&gt;Radio 3&lt;/label&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="button-icons" class="nue-docs-heading">
    Button icons <a class="anchorjs-link" href="#button-icons" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary">
        Add to Cart
        <i class="bi-basket ms-1"></i>
      </button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-primary"&gt;
            Add to Cart
            &lt;i class="bi-basket ms-1"&gt;&lt;/i&gt;
          &lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary btn-icon me-1">
        <i class="bi-eye"></i>
      </button>
      <button type="button" class="btn btn-primary btn-icon me-1">
        <i class="bi-person"></i>
      </button>
      <button type="button" class="btn btn-primary btn-icon me-1">
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
      </button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-primary btn-icon"&gt;
            &lt;i class="bi-eye"&gt;&lt;/i&gt;
          &lt;/button&gt;
          &lt;button type="button" class="btn btn-primary btn-icon"&gt;
            &lt;i class="bi-person"&gt;&lt;/i&gt;
          &lt;/button&gt;
          &lt;button type="button" class="btn btn-primary btn-icon"&gt;
            &lt;span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
          &lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary btn-icon btn-lg me-1">
        <i class="bi-person"></i>
      </button>
      <button type="button" class="btn btn-primary btn-icon me-1">
        <i class="bi-person"></i>
      </button>
      <button type="button" class="btn btn-primary btn-icon btn-sm me-1">
        <i class="bi-person"></i>
      </button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-primary btn-icon btn-lg"&gt;
            &lt;i class="bi-person"&gt;&lt;/i&gt;
          &lt;/button&gt;
          &lt;button type="button" class="btn btn-primary btn-icon"&gt;
            &lt;i class="bi-person"&gt;&lt;/i&gt;
          &lt;/button&gt;
          &lt;button type="button" class="btn btn-primary btn-icon btn-sm"&gt;
            &lt;i class="bi-person"&gt;&lt;/i&gt;
          &lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="button-with-loader" class="nue-docs-heading">
    Button with loader <a class="anchorjs-link" href="#button-with-loader" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button class="btn btn-primary me-1 mb-1" type="button" disabled>
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        <span class="visually-hidden">Loading...</span>
      </button>
      <button class="btn btn-primary me-1 mb-1" type="button" disabled>
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        Loading...
      </button>

      <button class="btn btn-primary me-1 mb-1" type="button" disabled>
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        <span class="visually-hidden">Loading...</span>
      </button>
      <button class="btn btn-primary me-1 mb-1" type="button" disabled>
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        Loading...
      </button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button class="btn btn-primary" type="button" disabled&gt;
            &lt;span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/button&gt;
          &lt;button class="btn btn-primary" type="button" disabled&gt;
            &lt;span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
            Loading...
          &lt;/button&gt;

          &lt;button class="btn btn-primary" type="button" disabled&gt;
            &lt;span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/button&gt;
          &lt;button class="btn btn-primary" type="button" disabled&gt;
            &lt;span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
            Loading...
          &lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection