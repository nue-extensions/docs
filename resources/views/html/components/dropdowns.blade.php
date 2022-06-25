@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Dropdowns')

@section('content')
  <x-nue::docs::header>
    Dropdowns
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/dropdowns</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Dropdowns</x-slot:label>
  </x-nue::docs::header>

  <h2 id="single-button" class="nue-docs-heading">
    Single button <a class="anchorjs-link" href="#single-button" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Any single <code>.btn</code> can be turned into a dropdown toggle with some markup changes. Here’s how you can put them to work with either <code>&lt;button&gt;</code> elements:</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropdown --&gt;
          &lt;div class="dropdown"&gt;
            &lt;button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Dropdown button
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>
  
  <br/>
  <p>And with <code>&lt;a&gt;</code> elements:</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="dropdown">
        <a class="btn btn-primary dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropdown --&gt;
          &lt;div class="dropdown"&gt;
            &lt;a class="btn btn-primary dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Dropdown link
            &lt;/a&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuLink"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>
  
  <br/>
  <p>The best part is you can do this with any button variant, too:</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group mb-1">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonPrimary" data-bs-toggle="dropdown" aria-expanded="false">
          Primary
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonPrimary">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButtonWhite" data-bs-toggle="dropdown" aria-expanded="false">
          White
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonWhite">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSecondary" data-bs-toggle="dropdown" aria-expanded="false">
          Secondary
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSecondary">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButtonSuccess" data-bs-toggle="dropdown" aria-expanded="false">
          Success
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSuccess">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButtonInfo" data-bs-toggle="dropdown" aria-expanded="false">
          Info
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonInfo">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButtonWarning" data-bs-toggle="dropdown" aria-expanded="false">
          Warning
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonWarning">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButtonDanger" data-bs-toggle="dropdown" aria-expanded="false">
          Danger
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonDanger">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButtonDark" data-bs-toggle="dropdown" aria-expanded="false">
          Dark
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonDark">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
          Light
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonPrimary" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Primary
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonPrimary"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButtonWhite" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              White
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonWhite"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSecondary" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Secondary
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSecondary"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButtonSuccess" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Success
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSuccess"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButtonInfo" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Info
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonInfo"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButtonWarning" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Warning
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonWarning"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButtonDanger" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Danger
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonDanger"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButtonDark" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Dark
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonDark"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Light
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Even with ghost buttons.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group mb-1">
        <button class="btn btn-ghost-primary dropdown-toggle" type="button" id="dropdownMenuButtonPrGhostimary" data-bs-toggle="dropdown" aria-expanded="false">
          Primary
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-ghost-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSecoGhostndary" data-bs-toggle="dropdown" aria-expanded="false">
          Secondary
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-ghost-success dropdown-toggle" type="button" id="dropdownMenuButtonSuGhostccess" data-bs-toggle="dropdown" aria-expanded="false">
          Success
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-ghost-info dropdown-toggle" type="button" id="dropdownMenuButtoGhostnInfo" data-bs-toggle="dropdown" aria-expanded="false">
          Info
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-ghost-warning dropdown-toggle" type="button" id="dropdownMenuButtonWaGhostrning" data-bs-toggle="dropdown" aria-expanded="false">
          Warning
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-ghost-danger dropdown-toggle" type="button" id="dropdownMenuButtonDGhostanger" data-bs-toggle="dropdown" aria-expanded="false">
          Danger
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-ghost-dark dropdown-toggle" type="button" id="dropdownMenuButtoGhostnDark" data-bs-toggle="dropdown" aria-expanded="false">
          Dark
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group mb-1">
        <button class="btn btn-ghost-light dropdown-toggle" type="button" id="dropdownMenuButtonGhostLight" data-bs-toggle="dropdown" aria-expanded="false">
          Light
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-ghost-primary dropdown-toggle" type="button" id="dropdownMenuButtonGhostPrimary" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Primary
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-ghost-secondary dropdown-toggle" type="button" id="dropdownMenuButtonGhostSecondary" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Secondary
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-ghost-success dropdown-toggle" type="button" id="dropdownMenuButtonGhostSuccess" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Success
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-ghost-info dropdown-toggle" type="button" id="dropdownMenuButtonGhostInfo" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Info
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-ghost-warning dropdown-toggle" type="button" id="dropdownMenuButtonGhostWarning" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Warning
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-ghost-danger dropdown-toggle" type="button" id="dropdownMenuButtonGhostDanger" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Danger
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-ghost-dark dropdown-toggle" type="button" id="dropdownMenuButtonGhostDark" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Dark
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-ghost-light dropdown-toggle" type="button" id="dropdownMenuButtonGhostLight" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Light
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButton"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="animation" class="nue-docs-heading">
    Animation <a class="anchorjs-link" href="#animation" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Juice up Bootstrap's default dropdowns with animation by adding <code>data-bs-dropdown-animation</code> next to <code>data-bs-toggle="dropdown"</code></p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group">
        <button class="btn btn-lg btn-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonClickAnimation" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
          Click me
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonClickAnimation">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-lg btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonClickAnimation" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation&gt;
              Click me
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonClickAnimation"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Use <code>data-bs-open-on-hover</code> to animate on hover.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group">
        <button class="btn btn-lg btn-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonHoverAnimation" data-bs-toggle="dropdown" aria-expanded="false" data-bs-open-on-hover data-bs-dropdown-animation>
          Hover on me
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonHoverAnimation">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-lg btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonHoverAnimation" data-bs-toggle="dropdown" aria-expanded="false" data-bs-open-on-hover data-bs-dropdown-animation&gt;
              Hover on me
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonHoverAnimation"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="sizing" class="nue-docs-heading">
    Sizing <a class="anchorjs-link" href="#sizing" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Button dropdowns work with buttons of all sizes.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group">
        <button class="btn btn-lg btn-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonLg" data-bs-toggle="dropdown" aria-expanded="false">
          Large button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonLg">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group">
        <button class="btn btn-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonDefault" data-bs-toggle="dropdown" aria-expanded="false">
          Default button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonDefault">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group">
        <button class="btn btn-sm btn-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonSm" data-bs-toggle="dropdown" aria-expanded="false">
          Small button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSm">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-lg btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonLg" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Large button
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonLg"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonDefault" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Default button
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonDefault"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;

          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonSm" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Small button
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSm"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-icon" class="nue-docs-heading">
    With icon <a class="anchorjs-link" href="#with-icon" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>.dropdown-item-icon</code> for icons.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonWithIcon" data-bs-toggle="dropdown" aria-expanded="false">
          With icon
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonWithIcon">
          <a class="dropdown-item" href="#">
            <i class="bi-house dropdown-item-icon"></i> Dashboard
          </a>
          <a class="dropdown-item" href="#">
            <i class="bi-person dropdown-item-icon"></i> Profile
          </a>
          <a class="dropdown-item" href="#">
            <i class="bi-bell dropdown-item-icon"></i> Settings
          </a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropdown --&gt;
          &lt;div class="dropdown"&gt;
            &lt;button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonWithIcon" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              With icon
            &lt;/button&gt;
            &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuButtonWithIcon"&gt;
              &lt;a class="dropdown-item" href="#"&gt;
                &lt;i class="bi-house dropdown-item-icon"&gt;&lt;/i&gt; Dashboard
              &lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;
                &lt;i class="bi-person dropdown-item-icon"&gt;&lt;/i&gt; Profile
              &lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;
                &lt;i class="bi-bell dropdown-item-icon"&gt;&lt;/i&gt; Settings
              &lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dropup" class="nue-docs-heading">
    Dropup <a class="anchorjs-link" href="#dropup" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent element.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group dropup">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Dropup
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>

      <div class="btn-group dropup">
        <button type="button" class="btn btn-primary">
          Split dropup
        </button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropup --&gt;
          &lt;div class="btn-group dropup"&gt;
            &lt;button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Dropup
            &lt;/button&gt;
            &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropup --&gt;

          &lt;!-- Split Dropup --&gt;
          &lt;div class="btn-group dropup"&gt;
            &lt;button type="button" class="btn btn-primary"&gt;
              Split dropup
            &lt;/button&gt;
            &lt;button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
            &lt;/button&gt;
            &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Split Dropup --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dropright" class="nue-docs-heading">
    Dropright <a class="anchorjs-link" href="#dropright" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Trigger dropdown menus at the right of the elements by adding <code>.dropright</code> to the parent element.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group dropright">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Dropright
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>

      <div class="btn-group dropright">
        <button type="button" class="btn btn-primary">
          Split dropright
        </button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropright --&gt;
          &lt;div class="btn-group dropright"&gt;
            &lt;button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Dropright
            &lt;/button&gt;
            &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropright --&gt;

          &lt;!-- Split Dropright --&gt;
          &lt;div class="btn-group dropright"&gt;
            &lt;button type="button" class="btn btn-primary"&gt;
              Split dropright
            &lt;/button&gt;
            &lt;button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
            &lt;/button&gt;
            &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Split Dropright --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dropleft" class="nue-docs-heading">
    Dropleft <a class="anchorjs-link" href="#dropleft" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Trigger dropdown menus at the left of the elements by adding <code>.dropleft </code> to the parent element.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group dropleft">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Dropleft
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>

      <div class="btn-group dropleft">
        <button type="button" class="btn btn-primary">
          Split dropleft
        </button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropleft --&gt;
          &lt;div class="btn-group dropleft"&gt;
            &lt;button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Dropleft
            &lt;/button&gt;
            &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropleft --&gt;

          &lt;!-- Split Dropleft --&gt;
          &lt;div class="btn-group dropleft"&gt;
            &lt;button type="button" class="btn btn-primary"&gt;
              Split dropleft
            &lt;/button&gt;
            &lt;button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
            &lt;/button&gt;
            &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Split Dropleft --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dropupend" class="nue-docs-heading">
    Dropupend <a class="anchorjs-link" href="#dropupend" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Trigger dropdown menus at the bottom left of the elements by adding <code>.dropupend</code> to the parent element.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group dropupend">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Dropupend
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>

      <div class="btn-group dropupend">
        <button type="button" class="btn btn-primary">
          Split dropupend
        </button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropupend --&gt;
          &lt;div class="btn-group dropupend"&gt;
            &lt;button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Dropupend
            &lt;/button&gt;
            &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropupend --&gt;

          &lt;!-- Split Dropupend --&gt;
          &lt;div class="btn-group dropupend"&gt;
            &lt;button type="button" class="btn btn-primary"&gt;
              Split dropupend
            &lt;/button&gt;
            &lt;button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
            &lt;/button&gt;
            &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Split Dropupend --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="menu-alignment" class="nue-docs-heading">
    Menu alignment <a class="anchorjs-link" href="#menu-alignment" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>By default, a dropdown menu is automatically positioned 100% from the top and along the left side of its parent. Add <code>.dropdown-menu-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Right-aligned menu
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
              Right-aligned menu
            &lt;/button&gt;
            &lt;div class="dropdown-menu dropdown-menu-right"&gt;
              &lt;button class="dropdown-item" type="button"&gt;Action&lt;/button&gt;
              &lt;button class="dropdown-item" type="button"&gt;Another action&lt;/button&gt;
              &lt;button class="dropdown-item" type="button"&gt;Something else here&lt;/button&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="responsive-alignment" class="nue-docs-heading">
    Responsive alignment <a class="anchorjs-link" href="#responsive-alignment" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>If you want to use responsive alignment, disable dynamic positioning by adding the <code>data-bs-display="static"</code> attribute and use the responsive variation classes.</p>

  <p>To align <strong>right</strong> the dropdown menu with the given breakpoint or larger, add <code>.dropdown-menu{-sm|-md|-lg|-xl}-right</code>.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-haspopup="true" aria-expanded="false">
          Left-aligned but right aligned when large screen
        </button>
        <div class="dropdown-menu dropdown-menu-lg-right">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-haspopup="true" aria-expanded="false"&gt;
              Left-aligned but right aligned when large screen
            &lt;/button&gt;
            &lt;div class="dropdown-menu dropdown-menu-lg-right"&gt;
              &lt;button class="dropdown-item" type="button"&gt;Action&lt;/button&gt;
              &lt;button class="dropdown-item" type="button"&gt;Another action&lt;/button&gt;
              &lt;button class="dropdown-item" type="button"&gt;Something else here&lt;/button&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>
  
  <br/>
  <p>To align <span class="fw-semi-bold">left</span> the dropdown menu with the given breakpoint or larger, add <code>.dropdown-menu-right</code> and <code>.dropdown-menu{-sm|-md|-lg|-xl}-left</code>.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-haspopup="true" aria-expanded="false">
          Right-aligned but left aligned when large screen
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Dropdown --&gt;
          &lt;div class="btn-group"&gt;
            &lt;button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-haspopup="true" aria-expanded="false"&gt;
              Right-aligned but left aligned when large screen
            &lt;/button&gt;
            &lt;div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left"&gt;
              &lt;button class="dropdown-item" type="button"&gt;Action&lt;/button&gt;
              &lt;button class="dropdown-item" type="button"&gt;Another action&lt;/button&gt;
              &lt;button class="dropdown-item" type="button"&gt;Something else here&lt;/button&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Dropdown --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dropdown-card" class="nue-docs-heading">
    Dropdown card <a class="anchorjs-link" href="#dropdown-card" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Turns the default Bootstrap dropdown menu into a fully functional <code>.card</code> component. Utilize any available card options.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Card dropdown
        </button>
        <div class="dropdown-menu dropdown-card">
          <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat recusandae rem autem impedit ad odio, enim tempore possimus non minus quod dignissimos ipsum eveniet odit, ratione molestiae, velit a dolorem!
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="d-flex"&gt;
            &lt;!-- Dropdown --&gt;
            &lt;div class="dropdown"&gt;
              &lt;button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                Card dropdown
              &lt;/button&gt;
              &lt;div class="dropdown-menu dropdown-card"&gt;
                &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Dropdown --&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dropdown-options" class="nue-docs-heading">
    Dropdown options <a class="anchorjs-link" href="#dropdown-options" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>data-bs-offset</code> or <code>data-bs-reference</code> to change the location of the dropdown.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="d-flex">
        <div class="dropdown me-1">
          <button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-offset="10,20">
            Offset
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-reference="parent">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="d-flex"&gt;
            &lt;!-- Dropdown --&gt;
            &lt;div class="dropdown me-1"&gt;
              &lt;button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-offset="10,20"&gt;
                Offset
              &lt;/button&gt;
              &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuOffset"&gt;
                &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Dropdown --&gt;

            &lt;!-- Dropdown --&gt;
            &lt;div class="btn-group"&gt;
              &lt;button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-reference="parent"&gt;
                &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
              &lt;/button&gt;
              &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuReference"&gt;
                &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Dropdown --&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="methods" class="nue-docs-heading">
    Methods <a class="anchorjs-link" href="#methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <div class="card">
    <div class="table-responsive">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>Parameter</th>
            <th style="width: 50%;">Deskripsi</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <code>data-bs-dropdown-animation</code>
            </td>
            <td>Adds animation to the dropdown menu</td>
          </tr>

          <tr>
            <td>
              <code>data-bs-open-on-hover</code>
            </td>
            <td>Adds animation to the dropdown menu on hover</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection