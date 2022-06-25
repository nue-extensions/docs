@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Button Group')

@section('content')
  <x-nue::docs::header>
    Button Group
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/button-group</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Button Group</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group" role="group" aria-label="Basic example"&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Left&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Middle&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Right&lt;/button&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group">
        <a href="#" class="btn btn-primary active" aria-current="page">Active link</a>
        <a href="#" class="btn btn-primary">Link</a>
        <a href="#" class="btn btn-primary">Link</a>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group"&gt;
            &lt;a href="#" class="btn btn-primary active" aria-current="page"&gt;Active link&lt;/a&gt;
            &lt;a href="#" class="btn btn-primary"&gt;Link&lt;/a&gt;
            &lt;a href="#" class="btn btn-primary"&gt;Link&lt;/a&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="mixed-styles" class="nue-docs-heading">
    Mixed styles <a class="anchorjs-link" href="#mixed-styles" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="button" class="btn btn-danger">Left</button>
        <button type="button" class="btn btn-warning">Middle</button>
        <button type="button" class="btn btn-success">Right</button>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group" role="group" aria-label="Basic mixed styles example"&gt;
            &lt;button type="button" class="btn btn-danger"&gt;Left&lt;/button&gt;
            &lt;button type="button" class="btn btn-warning"&gt;Middle&lt;/button&gt;
            &lt;button type="button" class="btn btn-success"&gt;Right&lt;/button&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="outlined-styles" class="nue-docs-heading">
    Outlined styles <a class="anchorjs-link" href="#outlined-styles" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group" role="group" aria-label="Basic outlined styles example">
        <button type="button" class="btn btn-outline-primary">Left</button>
        <button type="button" class="btn btn-outline-primary">Middle</button>
        <button type="button" class="btn btn-outline-primary">Right</button>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group" role="group" aria-label="Basic outlined styles example"&gt;
            &lt;button type="button" class="btn btn-outline-primary"&gt;Left&lt;/button&gt;
            &lt;button type="button" class="btn btn-outline-primary"&gt;Middle&lt;/button&gt;
            &lt;button type="button" class="btn btn-outline-primary"&gt;Right&lt;/button&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="checkbox-and-radio-button-groups" class="nue-docs-heading">
    Checkbox and radio button groups <a class="anchorjs-link" href="#checkbox-and-radio-button-groups" aria-label="Anchor" data-anchorjs-icon="#"></a>
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

  <h2 id="segment-style" class="nue-docs-heading">
    Segment style <a class="anchorjs-link" href="#segment-style" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group btn-group-segment" role="group" aria-label="Basic segment styles example">
        <input type="radio" class="btn-check" name="btnGroupSegmentRadio" id="btnGroupSegmentRadioOption1" autocomplete="off" checked>
        <label class="btn btn-sm" for="btnGroupSegmentRadioOption1">Left</label>

        <input type="radio" class="btn-check" name="btnGroupSegmentRadio" id="btnGroupSegmentRadioOption2" autocomplete="off">
        <label class="btn btn-sm" for="btnGroupSegmentRadioOption2">Middle</label>

        <input type="radio" class="btn-check" name="btnGroupSegmentRadio" id="btnGroupSegmentRadioOption3" autocomplete="off">
        <label class="btn btn-sm" for="btnGroupSegmentRadioOption3">Right</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group btn-group-segment" role="group" aria-label="Basic segment styles example"&gt;
            &lt;input type="radio" class="btn-check" name="btnGroupSegmentRadio" id="btnGroupSegmentRadioOption1" autocomplete="off" checked&gt;
            &lt;label class="btn btn-sm" for="btnGroupSegmentRadioOption1"&gt;Left&lt;/label&gt;

            &lt;input type="radio" class="btn-check" name="btnGroupSegmentRadio" id="btnGroupSegmentRadioOption2" autocomplete="off"&gt;
            &lt;label class="btn btn-sm" for="btnGroupSegmentRadioOption2"&gt;Middle&lt;/label&gt;

            &lt;input type="radio" class="btn-check" name="btnGroupSegmentRadio" id="btnGroupSegmentRadioOption3" autocomplete="off"&gt;
            &lt;label class="btn btn-sm" for="btnGroupSegmentRadioOption3"&gt;Right&lt;/label&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="fill-and-justify" class="nue-docs-heading">
    Fill and justify <a class="anchorjs-link" href="#fill-and-justify" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group btn-group-segment btn-group-fill" role="group" aria-label="Fill and justify styles example">
        <input type="radio" class="btn-check" name="btnGroupFillRadio" id="btnGroupFillRadioOption1" autocomplete="off" checked>
        <label class="btn btn-sm" for="btnGroupFillRadioOption1">Left</label>

        <input type="radio" class="btn-check" name="btnGroupFillRadio" id="btnGroupFillRadioOption2" autocomplete="off">
        <label class="btn btn-sm" for="btnGroupFillRadioOption2">Middle</label>

        <input type="radio" class="btn-check" name="btnGroupFillRadio" id="btnGroupFillRadioOption3" autocomplete="off">
        <label class="btn btn-sm" for="btnGroupFillRadioOption3">Right</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group btn-group-segment btn-group-fill" role="group" aria-label="Fill and justify styles example"&gt;
            &lt;input type="radio" class="btn-check" name="btnGroupFillRadio" id="btnGroupFillRadioOption1" autocomplete="off" checked&gt;
            &lt;label class="btn btn-sm" for="btnGroupFillRadioOption1"&gt;Left&lt;/label&gt;

            &lt;input type="radio" class="btn-check" name="btnGroupFillRadio" id="btnGroupFillRadioOption2" autocomplete="off"&gt;
            &lt;label class="btn btn-sm" for="btnGroupFillRadioOption2"&gt;Middle&lt;/label&gt;

            &lt;input type="radio" class="btn-check" name="btnGroupFillRadio" id="btnGroupFillRadioOption3" autocomplete="off"&gt;
            &lt;label class="btn btn-sm" for="btnGroupFillRadioOption3"&gt;Right&lt;/label&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="btn-group-vertical" class="nue-docs-heading">
    Button Group vertical <a class="anchorjs-link" href="#btn-group-vertical" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group btn-group-segment btn-group-md-vertical" role="group" aria-label="Button group vertical styles example">
        <input type="radio" class="btn-check" name="btnGroupDownBreakRadio" id="btnGroupDownBreakRadioOption1" autocomplete="off" checked>
        <label class="btn btn-sm" for="btnGroupDownBreakRadioOption1">Left</label>

        <input type="radio" class="btn-check" name="btnGroupDownBreakRadio" id="btnGroupDownBreakRadioOption2" autocomplete="off">
        <label class="btn btn-sm" for="btnGroupDownBreakRadioOption2">Middle</label>

        <input type="radio" class="btn-check" name="btnGroupDownBreakRadio" id="btnGroupDownBreakRadioOption3" autocomplete="off">
        <label class="btn btn-sm" for="btnGroupDownBreakRadioOption3">Right</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group btn-group-segment btn-group-md-vertical" role="group" aria-label="Button group vertical styles example"&gt;
            &lt;input type="radio" class="btn-check" name="btnGroupDownBreakRadio" id="btnGroupDownBreakRadioOption1" autocomplete="off" checked&gt;
            &lt;label class="btn btn-sm" for="btnGroupDownBreakRadioOption1"&gt;Left&lt;/label&gt;

            &lt;input type="radio" class="btn-check" name="btnGroupDownBreakRadio" id="btnGroupDownBreakRadioOption2" autocomplete="off"&gt;
            &lt;label class="btn btn-sm" for="btnGroupDownBreakRadioOption2"&gt;Middle&lt;/label&gt;

            &lt;input type="radio" class="btn-check" name="btnGroupDownBreakRadio" id="btnGroupDownBreakRadioOption3" autocomplete="off"&gt;
            &lt;label class="btn btn-sm" for="btnGroupFillRadioOption3"&gt;Right&lt;/label&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="button-toolbar" class="nue-docs-heading">
    Button toolbar <a class="anchorjs-link" href="#button-toolbar" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-primary">1</button>
          <button type="button" class="btn btn-primary">2</button>
          <button type="button" class="btn btn-primary">3</button>
          <button type="button" class="btn btn-primary">4</button>
        </div>
        <div class="btn-group me-2" role="group" aria-label="Second group">
          <button type="button" class="btn btn-secondary">5</button>
          <button type="button" class="btn btn-secondary">6</button>
          <button type="button" class="btn btn-secondary">7</button>
        </div>
        <div class="btn-group" role="group" aria-label="Third group">
          <button type="button" class="btn btn-info">8</button>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups"&gt;
            &lt;div class="btn-group me-2" role="group" aria-label="First group"&gt;
              &lt;button type="button" class="btn btn-primary"&gt;1&lt;/button&gt;
              &lt;button type="button" class="btn btn-primary"&gt;2&lt;/button&gt;
              &lt;button type="button" class="btn btn-primary"&gt;3&lt;/button&gt;
              &lt;button type="button" class="btn btn-primary"&gt;4&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="btn-group me-2" role="group" aria-label="Second group"&gt;
              &lt;button type="button" class="btn btn-secondary"&gt;5&lt;/button&gt;
              &lt;button type="button" class="btn btn-secondary"&gt;6&lt;/button&gt;
              &lt;button type="button" class="btn btn-secondary"&gt;7&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="btn-group" role="group" aria-label="Third group"&gt;
              &lt;button type="button" class="btn btn-info"&gt;8&lt;/button&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-outline-secondary">1</button>
          <button type="button" class="btn btn-outline-secondary">2</button>
          <button type="button" class="btn btn-outline-secondary">3</button>
          <button type="button" class="btn btn-outline-secondary">4</button>
        </div>
        <div class="input-group">
          <div class="input-group-text" id="btnGroupAddon">@</div>
          <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
        </div>
      </div>

      <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group" role="group" aria-label="First group">
          <button type="button" class="btn btn-outline-secondary">1</button>
          <button type="button" class="btn btn-outline-secondary">2</button>
          <button type="button" class="btn btn-outline-secondary">3</button>
          <button type="button" class="btn btn-outline-secondary">4</button>
        </div>
        <div class="input-group">
          <div class="input-group-text" id="btnGroupAddon2">@</div>
          <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups"&gt;
            &lt;div class="btn-group me-2" role="group" aria-label="First group"&gt;
              &lt;button type="button" class="btn btn-outline-secondary"&gt;1&lt;/button&gt;
              &lt;button type="button" class="btn btn-outline-secondary"&gt;2&lt;/button&gt;
              &lt;button type="button" class="btn btn-outline-secondary"&gt;3&lt;/button&gt;
              &lt;button type="button" class="btn btn-outline-secondary"&gt;4&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="input-group"&gt;
              &lt;div class="input-group-text" id="btnGroupAddon"&gt;@&lt;/div&gt;
              &lt;input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon"&gt;
            &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups"&gt;
            &lt;div class="btn-group" role="group" aria-label="First group"&gt;
              &lt;button type="button" class="btn btn-outline-secondary"&gt;1&lt;/button&gt;
              &lt;button type="button" class="btn btn-outline-secondary"&gt;2&lt;/button&gt;
              &lt;button type="button" class="btn btn-outline-secondary"&gt;3&lt;/button&gt;
              &lt;button type="button" class="btn btn-outline-secondary"&gt;4&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="input-group"&gt;
              &lt;div class="input-group-text" id="btnGroupAddon2"&gt;@&lt;/div&gt;
              &lt;input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2"&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="sizing" class="nue-docs-heading">
    Sizing <a class="anchorjs-link" href="#sizing" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large button group">
        <button type="button" class="btn btn-outline-dark">Left</button>
        <button type="button" class="btn btn-outline-dark">Middle</button>
        <button type="button" class="btn btn-outline-dark">Right</button>
      </div>
      <br>
      <div class="btn-group mb-3" role="group" aria-label="Default button group">
        <button type="button" class="btn btn-outline-dark">Left</button>
        <button type="button" class="btn btn-outline-dark">Middle</button>
        <button type="button" class="btn btn-outline-dark">Right</button>
      </div>
      <br>
      <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
        <button type="button" class="btn btn-outline-dark">Left</button>
        <button type="button" class="btn btn-outline-dark">Middle</button>
        <button type="button" class="btn btn-outline-dark">Right</button>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group btn-group-lg" role="group" aria-label="Large button group"&gt;
            &lt;button type="button" class="btn btn-outline-dark"&gt;Left&lt;/button&gt;
            &lt;button type="button" class="btn btn-outline-dark"&gt;Middle&lt;/button&gt;
            &lt;button type="button" class="btn btn-outline-dark"&gt;Right&lt;/button&gt;
          &lt;/div&gt;
          &lt;br&gt;
          &lt;div class="btn-group" role="group" aria-label="Default button group"&gt;
            &lt;button type="button" class="btn btn-outline-dark"&gt;Left&lt;/button&gt;
            &lt;button type="button" class="btn btn-outline-dark"&gt;Middle&lt;/button&gt;
            &lt;button type="button" class="btn btn-outline-dark"&gt;Right&lt;/button&gt;
          &lt;/div&gt;
          &lt;br&gt;
          &lt;div class="btn-group btn-group-sm" role="group" aria-label="Small button group"&gt;
            &lt;button type="button" class="btn btn-outline-dark"&gt;Left&lt;/button&gt;
            &lt;button type="button" class="btn btn-outline-dark"&gt;Middle&lt;/button&gt;
            &lt;button type="button" class="btn btn-outline-dark"&gt;Right&lt;/button&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="nesting" class="nue-docs-heading">
    Nesting <a class="anchorjs-link" href="#nesting" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn btn-primary">1</button>
        <button type="button" class="btn btn-primary">2</button>

        <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
          </ul>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group" role="group" aria-label="Button group with nested dropdown"&gt;
            &lt;button type="button" class="btn btn-primary"&gt;1&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;2&lt;/button&gt;

            &lt;div class="btn-group" role="group"&gt;
              &lt;button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                Dropdown
              &lt;/button&gt;
              &lt;ul class="dropdown-menu" aria-labelledby="btnGroupDrop1"&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
              &lt;/ul&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="vertical-variation" class="nue-docs-heading">
    Vertical variation <a class="anchorjs-link" href="#vertical-variation" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
        <button type="button" class="btn btn-dark">Button</button>
        <button type="button" class="btn btn-dark">Button</button>
        <button type="button" class="btn btn-dark">Button</button>
        <button type="button" class="btn btn-dark">Button</button>
        <button type="button" class="btn btn-dark">Button</button>
        <button type="button" class="btn btn-dark">Button</button>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group-vertical" role="group" aria-label="Vertical button group"&gt;
            &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
        <button type="button" class="btn btn-primary">Button</button>
        <button type="button" class="btn btn-primary">Button</button>
        <div class="btn-group" role="group">
          <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
          </ul>
        </div>
        <button type="button" class="btn btn-primary">Button</button>
        <button type="button" class="btn btn-primary">Button</button>
        <div class="btn-group" role="group">
          <button id="btnGroupVerticalDrop2" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
          </ul>
        </div>
        <div class="btn-group" role="group">
          <button id="btnGroupVerticalDrop3" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
          </ul>
        </div>
        <div class="btn-group" role="group">
          <button id="btnGroupVerticalDrop4" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
          </ul>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group-vertical" role="group" aria-label="Vertical button group"&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
            &lt;div class="btn-group" role="group"&gt;
              &lt;button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                Dropdown
              &lt;/button&gt;
              &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1"&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
              &lt;/ul&gt;
            &lt;/div&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
            &lt;div class="btn-group" role="group"&gt;
              &lt;button id="btnGroupVerticalDrop2" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                Dropdown
              &lt;/button&gt;
              &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2"&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
              &lt;/ul&gt;
            &lt;/div&gt;
            &lt;div class="btn-group" role="group"&gt;
              &lt;button id="btnGroupVerticalDrop3" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                Dropdown
              &lt;/button&gt;
              &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3"&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
              &lt;/ul&gt;
            &lt;/div&gt;
            &lt;div class="btn-group" role="group"&gt;
              &lt;button id="btnGroupVerticalDrop4" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                Dropdown
              &lt;/button&gt;
              &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4"&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
              &lt;/ul&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked>
        <label class="btn btn-outline-danger" for="vbtn-radio1">Radio 1</label>
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
        <label class="btn btn-outline-danger" for="vbtn-radio2">Radio 2</label>
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
        <label class="btn btn-outline-danger" for="vbtn-radio3">Radio 3</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group"&gt;
            &lt;input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked&gt;
            &lt;label class="btn btn-outline-danger" for="vbtn-radio1"&gt;Radio 1&lt;/label&gt;
            &lt;input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off"&gt;
            &lt;label class="btn btn-outline-danger" for="vbtn-radio2"&gt;Radio 2&lt;/label&gt;
            &lt;input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off"&gt;
            &lt;label class="btn btn-outline-danger" for="vbtn-radio3"&gt;Radio 3&lt;/label&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection