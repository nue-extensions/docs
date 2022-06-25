@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Spinners')

@section('content')
  <x-nue::docs::header>
    Spinners
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/spinners</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Spinners</x-slot:label>
  </x-nue::docs::header>

  <h2 id="border-spinner" class="nue-docs-heading">
    Border spinner <a class="anchorjs-link" href="#border-spinner" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="spinner-border" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="colors" class="nue-docs-heading">
    Colors <a class="anchorjs-link" href="#colors" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Kamu juga bebas mau pakai warna apa aja.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-border text-body" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-border text-success" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-border text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-border text-warning" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-border text-info" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-border text-light" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-border text-dark" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="spinner-border text-primary" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-border text-body" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-border text-success" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-border text-danger" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-border text-warning" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-border text-info" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-border text-light" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-border text-dark" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="growing-spinner" class="nue-docs-heading">
    Growing spinner <a class="anchorjs-link" href="#growing-spinner" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Kalau kamu gak sreg dengan spinner tipe border, cobain deh tipe grow.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="spinner-grow" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="spinner-grow" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Dan tetep, kamu juga bebas mau pakai warna apa aja.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="spinner-grow text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-body" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-success" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-warning" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-info" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-light" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-dark" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="spinner-grow text-primary" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-grow text-body" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-grow text-success" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-grow text-danger" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-grow text-warning" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-grow text-info" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-grow text-light" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-grow text-dark" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="alignment" class="nue-docs-heading">
    Alignment <a class="anchorjs-link" href="#alignment" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Spinners Bootstrap dibuat berdasarkan <code>rem</code>s, <code>currentColor</code>, dan <code>display: inline-flex</code>. Artinya kamu bisa dengan bebas merubah ukuran, warna ataupun kustomisasi jarak (margin dan padding).</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-50">
        <div class="spinner-border m-5" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="spinner-border m-5" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="placement" class="nue-docs-heading">
    Placement <a class="anchorjs-link" href="#placement" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Kamu bisa kombinasikan dengan utility <a class="link" href="https://getbootstrap.com/docs/5.0/utilities/flex/" target="_blank">flexbox <i class="bi-box-arrow-up-right"></i></a>, <a class="link" href="https://getbootstrap.com/docs/5.0/utilities/float/" target="_blank">float <i class="bi-box-arrow-up-right"></i></a>, atau <a class="link" href="https://getbootstrap.com/docs/5.0/content/typography/" target="_blank">text alignment <i class="bi-box-arrow-up-right"></i></a> dari Bootstrap.</p>

  <h2 id="flex" class="nue-docs-heading">
    Flex <a class="anchorjs-link" href="#flex" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="d-flex justify-content-center">
        <div class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="d-flex justify-content-center"&gt;
            &lt;div class="spinner-border" role="status"&gt;
              &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="d-flex align-items-center">
        <span class="fw-semi-bold">Loading...</span>
        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="d-flex align-items-center"&gt;
            &lt;span&gt;Loading...&lt;/span&gt;
            &lt;div class="spinner-border ms-auto" role="status" aria-hidden="true"&gt;&lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="floats" class="nue-docs-heading">
    Floats <a class="anchorjs-link" href="#floats" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="clearfix">
        <div class="spinner-border float-end" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="clearfix"&gt;
            &lt;div class="spinner-border float-end" role="status"&gt;
              &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="text-align" class="nue-docs-heading">
    Text align <a class="anchorjs-link" href="#text-align" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="text-center">
        <div class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="text-center"&gt;
            &lt;div class="spinner-border" role="status"&gt;
              &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="size" class="nue-docs-heading">
    Size <a class="anchorjs-link" href="#size" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Tambahin <code>.spinner-border-sm</code> dan <code>.spinner-grow-sm</code> untuk memperkecil ukuran.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="spinner-border spinner-border-sm" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow spinner-grow-sm" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="spinner-border spinner-border-sm" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-grow spinner-grow-sm" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status"&gt;
            &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection