@php($i = 0)
@extends('nue-docs::app')
@section('title', 'List Group')

@section('content')
  <x-nue::docs::header>
    List Group
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/list-group</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap List Group</x-slot:label>
  </x-nue::docs::header>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-group" style="max-width: 450px;">
        <li class="list-group-item active">
          <i class="bi-house list-group-icon"></i> Dashboard
        </li>
        <li class="list-group-item">
          <i class="bi-person list-group-icon"></i> Profile
        </li>
        <li class="list-group-item">
          <i class="bi-list-task list-group-icon"></i> Tasks
        </li>
        <li class="list-group-item">
          <i class="bi-layers list-group-icon"></i> Projects
        </li>
        <li class="list-group-item">
          <i class="bi-people list-group-icon"></i> Members
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;ul class="list-group"&gt;
            &lt;li class="list-group-item active"&gt;
              &lt;i class="bi-house list-group-icon"&gt;&lt;/i&gt; Dashboard
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-person list-group-icon"&gt;&lt;/i&gt; Profile
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-list-task list-group-icon"&gt;&lt;/i&gt; Tasks
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-layers list-group-icon"&gt;&lt;/i&gt; Projects
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-people list-group-icon"&gt;&lt;/i&gt; Members
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="sizes" class="nue-docs-heading">
    Sizes <a class="anchorjs-link" href="#sizes" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-group list-group-sm" style="max-width: 450px;">
        <li class="list-group-item">
          <i class="bi-house list-group-icon"></i> Dashboard
        </li>
        <li class="list-group-item">
          <i class="bi-person list-group-icon"></i> Profile
        </li>
        <li class="list-group-item">
          <i class="bi-list-task list-group-icon"></i> Tasks
        </li>
        <li class="list-group-item">
          <i class="bi-layers list-group-icon"></i> Projects
        </li>
        <li class="list-group-item">
          <i class="bi-people list-group-icon"></i> Members
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;ul class="list-group list-group-sm"&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-house list-group-icon"&gt;&lt;/i&gt; Dashboard
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-person list-group-icon"&gt;&lt;/i&gt; Profile
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-list-task list-group-icon"&gt;&lt;/i&gt; Tasks
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-layers list-group-icon"&gt;&lt;/i&gt; Projects
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-people list-group-icon"&gt;&lt;/i&gt; Members
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>
  
  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-group list-group-lg" style="max-width: 450px;">
        <li class="list-group-item">
          <i class="bi-house list-group-icon"></i> Dashboard
        </li>
        <li class="list-group-item">
          <i class="bi-person list-group-icon"></i> Profile
        </li>
        <li class="list-group-item">
          <i class="bi-list-task list-group-icon"></i> Tasks
        </li>
        <li class="list-group-item">
          <i class="bi-layers list-group-icon"></i> Projects
        </li>
        <li class="list-group-item">
          <i class="bi-people list-group-icon"></i> Members
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;ul class="list-group list-group-lg"&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-house list-group-icon"&gt;&lt;/i&gt; Dashboard
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-person list-group-icon"&gt;&lt;/i&gt; Profile
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-list-task list-group-icon"&gt;&lt;/i&gt; Tasks
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-layers list-group-icon"&gt;&lt;/i&gt; Projects
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-people list-group-icon"&gt;&lt;/i&gt; Members
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="links-and-buttons" class="nue-docs-heading">
    Links and buttons <a class="anchorjs-link" href="#links-and-buttons" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="list-group" style="max-width: 450px;">
        <a class="list-group-item list-group-item-action active" href="#">
          <i class="bi-house list-group-icon"></i> Dashboard
        </a>
        <a class="list-group-item list-group-item-action" href="#">
          <i class="bi-person list-group-icon"></i> Profile
        </a>
        <a class="list-group-item list-group-item-action" href="#">
          <i class="bi-list-task list-group-icon"></i> Tasks
        </a>
        <a class="list-group-item list-group-item-action" href="#">
          <i class="bi-layers list-group-icon"></i> Projects
        </a>
        <a class="list-group-item list-group-item-action" href="#">
          <i class="bi-people list-group-icon"></i> Members
        </a>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;div class="list-group"&gt;
            &lt;a class="list-group-item list-group-item-action active" href="#"&gt;
              &lt;i class="bi-house list-group-icon"&gt;&lt;/i&gt; Dashboard
            &lt;/a&gt;
            &lt;a class="list-group-item list-group-item-action" href="#"&gt;
              &lt;i class="bi-person list-group-icon"&gt;&lt;/i&gt; Profile
            &lt;/a&gt;
            &lt;a class="list-group-item list-group-item-action" href="#"&gt;
              &lt;i class="bi-list-task list-group-icon"&gt;&lt;/i&gt; Tasks
            &lt;/a&gt;
            &lt;a class="list-group-item list-group-item-action" href="#"&gt;
              &lt;i class="bi-layers list-group-icon"&gt;&lt;/i&gt; Projects
            &lt;/a&gt;
            &lt;a class="list-group-item list-group-item-action" href="#"&gt;
              &lt;i class="bi-people list-group-icon"&gt;&lt;/i&gt; Members
            &lt;/a&gt;
          &lt;/div&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="flush" class="nue-docs-heading">
    Flush <a class="anchorjs-link" href="#flush" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-group list-group-flush" style="max-width: 450px;">
        <li class="list-group-item">
          <i class="bi-house list-group-icon"></i> Dashboard
        </li>
        <li class="list-group-item">
          <i class="bi-person list-group-icon"></i> Profile
        </li>
        <li class="list-group-item">
          <i class="bi-list-task list-group-icon"></i> Tasks
        </li>
        <li class="list-group-item">
          <i class="bi-layers list-group-icon"></i> Projects
        </li>
        <li class="list-group-item">
          <i class="bi-people list-group-icon"></i> Members
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;ul class="list-group list-group-flush"&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-house list-group-icon"&gt;&lt;/i&gt; Dashboard
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-person list-group-icon"&gt;&lt;/i&gt; Profile
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-list-task list-group-icon"&gt;&lt;/i&gt; Tasks
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-layers list-group-icon"&gt;&lt;/i&gt; Projects
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-people list-group-icon"&gt;&lt;/i&gt; Members
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="striped" class="nue-docs-heading">
    Striped <a class="anchorjs-link" href="#striped" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-group list-group-striped" style="max-width: 450px;">
        <li class="list-group-item">
          <i class="bi-house list-group-icon"></i> Dashboard
        </li>
        <li class="list-group-item">
          <i class="bi-person list-group-icon"></i> Profile
        </li>
        <li class="list-group-item">
          <i class="bi-list-task list-group-icon"></i> Tasks
        </li>
        <li class="list-group-item">
          <i class="bi-layers list-group-icon"></i> Projects
        </li>
        <li class="list-group-item">
          <i class="bi-people list-group-icon"></i> Members
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;ul class="list-group list-group-striped"&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-house list-group-icon"&gt;&lt;/i&gt; Dashboard
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-person list-group-icon"&gt;&lt;/i&gt; Profile
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-list-task list-group-icon"&gt;&lt;/i&gt; Tasks
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-layers list-group-icon"&gt;&lt;/i&gt; Projects
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-people list-group-icon"&gt;&lt;/i&gt; Members
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="numbered" class="nue-docs-heading">
    Numbered <a class="anchorjs-link" href="#numbered" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Cras justo odio</li>
      </ol>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;ol class="list-group list-group-numbered"&gt;
            &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
            &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
            &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
          &lt;/ol&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>
  
  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-semi-bold">Subheading</div>
            Cras justo odio
          </div>
          <span class="badge bg-primary rounded-pill">14</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-semi-bold">Subheading</div>
            Cras justo odio
          </div>
          <span class="badge bg-primary rounded-pill">14</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-semi-bold">Subheading</div>
            Cras justo odio
          </div>
          <span class="badge bg-primary rounded-pill">14</span>
        </li>
      </ol>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;ol class="list-group list-group-numbered"&gt;
            &lt;li class="list-group-item d-flex justify-content-between align-items-start"&gt;
              &lt;div class="ms-2 me-auto"&gt;
                &lt;div class="fw-semi-bold"&gt;Subheading&lt;/div&gt;
                Cras justo odio
              &lt;/div&gt;
              &lt;span class="badge bg-primary rounded-pill"&gt;14&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class="list-group-item d-flex justify-content-between align-items-start"&gt;
              &lt;div class="ms-2 me-auto"&gt;
                &lt;div class="fw-semi-bold"&gt;Subheading&lt;/div&gt;
                Cras justo odio
              &lt;/div&gt;
              &lt;span class="badge bg-primary rounded-pill"&gt;14&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class="list-group-item d-flex justify-content-between align-items-start"&gt;
              &lt;div class="ms-2 me-auto"&gt;
                &lt;div class="fw-semi-bold"&gt;Subheading&lt;/div&gt;
                Cras justo odio
              &lt;/div&gt;
              &lt;span class="badge bg-primary rounded-pill"&gt;14&lt;/span&gt;
            &lt;/li&gt;
          &lt;/ol&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="horizontal" class="nue-docs-heading">
    Horizontal <a class="anchorjs-link" href="#horizontal" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-group list-group-horizontal" style="max-width: 450px;">
        <li class="list-group-item d-sm-flex align-items-sm-center">
          <i class="bi-house list-group-icon"></i> Dashboard
        </li>
        <li class="list-group-item d-sm-flex align-items-sm-center">
          <i class="bi-person list-group-icon"></i> Profile
        </li>
        <li class="list-group-item d-sm-flex align-items-sm-center">
          <i class="bi-list-task list-group-icon"></i> Tasks
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;ul class="list-group list-group-horizontal"&gt;
            &lt;li class="list-group-item d-sm-flex align-items-sm-center"&gt;
              &lt;i class="bi-house list-group-icon"&gt;&lt;/i&gt; Dashboard
            &lt;/li&gt;
            &lt;li class="list-group-item d-sm-flex align-items-sm-center"&gt;
              &lt;i class="bi-person list-group-icon"&gt;&lt;/i&gt; Profile
            &lt;/li&gt;
            &lt;li class="list-group-item d-sm-flex align-items-sm-center"&gt;
              &lt;i class="bi-list-task list-group-icon"&gt;&lt;/i&gt; Tasks
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-layers list-group-icon"&gt;&lt;/i&gt; Projects
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;i class="bi-people list-group-icon"&gt;&lt;/i&gt; Members
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-badges" class="nue-docs-heading">
    With badges <a class="anchorjs-link" href="#with-badges" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-group" style="max-width: 450px;">
        <li class="list-group-item d-flex align-items-center">
          <i class="bi-house list-group-icon"></i> Dashboard
          <span class="badge bg-primary rounded-pill ms-auto">14</span>
        </li>
        <li class="list-group-item d-flex align-items-center">
          <i class="bi-person list-group-icon"></i> Profile
          <span class="badge bg-primary rounded-pill ms-auto">2</span>
        </li>
        <li class="list-group-item d-flex align-items-center">
          <i class="bi-list-task list-group-icon"></i> Tasks
          <span class="badge bg-primary rounded-pill ms-auto">1</span>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;ul class="list-group"&gt;
            &lt;li class="list-group-item d-flex align-items-center"&gt;
              &lt;i class="bi-house list-group-icon"&gt;&lt;/i&gt; Dashboard
              &lt;span class="badge bg-primary rounded-pill ms-auto"&gt;14&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class="list-group-item d-flex align-items-center"&gt;
              &lt;i class="bi-person list-group-icon"&gt;&lt;/i&gt; Profile
              &lt;span class="badge bg-primary rounded-pill ms-auto"&gt;2&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class="list-group-item d-flex align-items-center"&gt;
              &lt;i class="bi-list-task list-group-icon"&gt;&lt;/i&gt; Tasks
              &lt;span class="badge bg-primary rounded-pill ms-auto"&gt;1&lt;/span&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="checkboxes-and-radios" class="nue-docs-heading">
    Checkboxes and radios <a class="anchorjs-link" href="#checkboxes-and-radios" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-group">
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
          First checkbox
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
          Second checkbox
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
          Third checkbox
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
          Fourth checkbox
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
          Fifth checkbox
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;ul class="list-group"&gt;
            &lt;li class="list-group-item"&gt;
              &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
              First checkbox
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
              Second checkbox
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
              Third checkbox
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
              Fourth checkbox
            &lt;/li&gt;
            &lt;li class="list-group-item"&gt;
              &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
              Fifth checkbox
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>
  
  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="list-group">
        <label class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="">
          First checkbox
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="">
          Second checkbox
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="">
          Third checkbox
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="">
          Fourth checkbox
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="">
          Fifth checkbox
        </label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="list-group"&gt;
            &lt;label class="list-group-item"&gt;
              &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
              First checkbox
            &lt;/label&gt;
            &lt;label class="list-group-item"&gt;
              &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
              Second checkbox
            &lt;/label&gt;
            &lt;label class="list-group-item"&gt;
              &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
              Third checkbox
            &lt;/label&gt;
            &lt;label class="list-group-item"&gt;
              &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
              Fourth checkbox
            &lt;/label&gt;
            &lt;label class="list-group-item"&gt;
              &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
              Fifth checkbox
            &lt;/label&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="start-bordered" class="nue-docs-heading">
    Start bordered <a class="anchorjs-link" href="#start-bordered" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-group list-group-flush list-group-start-bordered">
        <li class="list-group-item">
          <a class="list-group-item-action border-primary" href="#">
            <div class="row">
              <div class="col-sm mb-2 mb-sm-0">
                <h2 class="fw-normal mb-1">12:00 - 03:00 <span class="fs-5 text-body text-uppercase">pm</span></h2>
                <h5 class="text-inherit mb-0">Weekly overview</h5>
                <span class="text-body small">24 May, 2020</span>
              </div>

              <div class="col-sm-auto align-self-sm-end">
                <div class="avatar-group avatar-group-sm avatar-circle">
                  <span class="avatar">
                    <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="">
                  </span>
                  <span class="avatar">
                    <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="">
                  </span>
                  <span class="avatar avatar-soft-dark">
                    <span class="avatar-initials">A</span>
                  </span>
                  <span class="avatar avatar-soft-info">
                    <span class="avatar-initials">S</span>
                  </span>
                  <span class="avatar">
                    <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="">
                  </span>
                </div>
              </div>
            </div>
          </a>
        </li>

        <li class="list-group-item">
          <a class="list-group-item-action border-info" href="#">
            <div class="row">
              <div class="col-sm mb-2 mb-sm-0">
                <h2 class="fw-normal mb-1">04:30 - 04:50 <span class="fs-5 text-body text-uppercase">pm</span></h2>
                <h5 class="text-inherit mb-0">Project tasks</h5>
                <span class="text-body small">25 May, 2020</span>
              </div>

              <div class="col-sm-auto align-self-sm-end">
                <div class="avatar-group avatar-group-sm avatar-circle">
                  <span class="avatar">
                    <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="">
                  </span>
                  <span class="avatar">
                    <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt="">
                  </span>
                  <span class="avatar avatar-soft-danger">
                    <span class="avatar-initials">A</span>
                  </span>
                </div>
              </div>
            </div>
          </a>
        </li>

        <li class="list-group-item">
          <a class="list-group-item-action border-danger" href="#">
            <div class="row">
              <div class="col-sm mb-2 mb-sm-0">
                <h2 class="fw-normal mb-1">12:00 - 03:00 <span class="fs-5 text-body text-uppercase">pm</span></h2>
                <h5 class="text-inherit mb-0">Monthly reports</h5>
                <span class="text-body small">27 May, 2020</span>
              </div>

              <div class="col-sm-auto align-self-sm-end">
                <div class="avatar-group avatar-group-sm avatar-circle">
                  <span class="avatar">
                    <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="">
                  </span>
                  <span class="avatar avatar-soft-dark">
                    <span class="avatar-initials">B</span>
                  </span>
                  <span class="avatar">
                    <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt="">
                  </span>
                  <span class="avatar">
                    <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="">
                  </span>
                </div>
              </div>
            </div>
          </a>
        </li>

        <li class="list-group-item">
          <a class="list-group-item-action border-warning" href="#">
            <div class="row">
              <div class="col-sm mb-2 mb-sm-0">
                <h2 class="fw-normal mb-1">02:00 - 03:00 <span class="fs-5 text-body text-uppercase">pm</span></h2>
                <h5 class="text-inherit mb-0">Monthly reports to the client</h5>
                <span class="text-body small">29 May, 2020</span>
              </div>

              <div class="col-sm-auto align-self-sm-end">
                <div class="avatar-group avatar-group-sm avatar-circle">
                  <span class="avatar">
                    <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="">
                  </span>
                  <span class="avatar avatar-soft-dark">
                    <span class="avatar-initials">B</span>
                  </span>
                  <span class="avatar">
                    <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt="">
                  </span>
                  <span class="avatar">
                    <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="">
                  </span>
                </div>
              </div>
            </div>
          </a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;ul class="list-group list-group-flush list-group-start-bordered"&gt;
            &lt;!-- Item --&gt;
            &lt;li class="list-group-item"&gt;
              &lt;a class="list-group-item-action border-primary" href="#"&gt;
                &lt;div class="row"&gt;
                  &lt;div class="col-sm mb-2 mb-sm-0"&gt;
                    &lt;h2 class="fw-normal mb-1"&gt;12:00 - 03:00 &lt;span class="fs-5 text-body text-uppercase"&gt;pm&lt;/span&gt;&lt;/h2&gt;
                    &lt;h5 class="text-inherit mb-0"&gt;Weekly overview&lt;/h5&gt;
                    &lt;span class="text-body small"&gt;24 May, 2020&lt;/span&gt;
                  &lt;/div&gt;

                  &lt;div class="col-sm-auto align-self-sm-end"&gt;
                    &lt;!-- Avatar Group --&gt;
                    &lt;div class="avatar-group avatar-group-sm avatar-circle"&gt;
                      &lt;span class="avatar"&gt;
                        &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt=""&gt;
                      &lt;/span&gt;
                      &lt;span class="avatar"&gt;
                        &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt=""&gt;
                      &lt;/span&gt;
                      &lt;span class="avatar avatar-soft-dark"&gt;
                        &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
                      &lt;/span&gt;
                      &lt;span class="avatar avatar-soft-info"&gt;
                        &lt;span class="avatar-initials"&gt;S&lt;/span&gt;
                      &lt;/span&gt;
                      &lt;span class="avatar"&gt;
                        &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt=""&gt;
                      &lt;/span&gt;
                    &lt;/div&gt;
                    &lt;!-- End Avatar Group --&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Row --&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;!-- End Item --&gt;

            &lt;!-- Item --&gt;
            &lt;li class="list-group-item"&gt;
              &lt;a class="list-group-item-action border-info" href="#"&gt;
                &lt;div class="row"&gt;
                  &lt;div class="col-sm mb-2 mb-sm-0"&gt;
                    &lt;h2 class="fw-normal mb-1"&gt;04:30 - 04:50 &lt;span class="fs-5 text-body text-uppercase"&gt;pm&lt;/span&gt;&lt;/h2&gt;
                    &lt;h5 class="text-inherit mb-0"&gt;Project tasks&lt;/h5&gt;
                    &lt;span class="text-body small"&gt;25 May, 2020&lt;/span&gt;
                  &lt;/div&gt;

                  &lt;div class="col-sm-auto align-self-sm-end"&gt;
                    &lt;!-- Avatar Group --&gt;
                    &lt;div class="avatar-group avatar-group-sm avatar-circle"&gt;
                      &lt;span class="avatar"&gt;
                        &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt=""&gt;
                      &lt;/span&gt;
                      &lt;span class="avatar"&gt;
                        &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt=""&gt;
                      &lt;/span&gt;
                      &lt;span class="avatar avatar-soft-danger"&gt;
                        &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
                      &lt;/span&gt;
                    &lt;/div&gt;
                    &lt;!-- End Avatar Group --&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/a&gt;
              &lt;!-- End Row --&gt;
            &lt;/li&gt;

            &lt;!-- Item --&gt;
            &lt;li class="list-group-item"&gt;
              &lt;a class="list-group-item-action border-danger" href="#"&gt;
                &lt;div class="row"&gt;
                  &lt;div class="col-sm mb-2 mb-sm-0"&gt;
                    &lt;h2 class="fw-normal mb-1"&gt;12:00 - 03:00 &lt;span class="fs-5 text-body text-uppercase"&gt;pm&lt;/span&gt;&lt;/h2&gt;
                    &lt;h5 class="text-inherit mb-0"&gt;Monthly reports&lt;/h5&gt;
                    &lt;span class="text-body small"&gt;27 May, 2020&lt;/span&gt;
                  &lt;/div&gt;

                  &lt;div class="col-sm-auto align-self-sm-end"&gt;
                    &lt;!-- Avatar Group --&gt;
                    &lt;div class="avatar-group avatar-group-sm avatar-circle"&gt;
                      &lt;span class="avatar"&gt;
                        &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt=""&gt;
                      &lt;/span&gt;
                      &lt;span class="avatar avatar-soft-dark"&gt;
                        &lt;span class="avatar-initials"&gt;B&lt;/span&gt;
                      &lt;/span&gt;
                      &lt;span class="avatar"&gt;
                        &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt=""&gt;
                      &lt;/span&gt;
                      &lt;span class="avatar"&gt;
                        &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt=""&gt;
                      &lt;/span&gt;
                    &lt;/div&gt;
                    &lt;!-- End Avatar Group --&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Row --&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;!-- End Item --&gt;

            &lt;!-- Item --&gt;
            &lt;li class="list-group-item"&gt;
              &lt;a class="list-group-item-action border-warning" href="#"&gt;
                &lt;div class="row"&gt;
                  &lt;div class="col-sm mb-2 mb-sm-0"&gt;
                    &lt;h2 class="fw-normal mb-1"&gt;02:00 - 03:00 &lt;span class="fs-5 text-body text-uppercase"&gt;pm&lt;/span&gt;&lt;/h2&gt;
                    &lt;h5 class="text-inherit mb-0"&gt;Monthly reports to the client&lt;/h5&gt;
                    &lt;span class="text-body small"&gt;29 May, 2020&lt;/span&gt;
                  &lt;/div&gt;

                  &lt;div class="col-sm-auto align-self-sm-end"&gt;
                    &lt;!-- Avatar Group --&gt;
                    &lt;div class="avatar-group avatar-group-sm avatar-circle"&gt;
                      &lt;span class="avatar"&gt;
                        &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt=""&gt;
                      &lt;/span&gt;
                      &lt;span class="avatar avatar-soft-dark"&gt;
                        &lt;span class="avatar-initials"&gt;B&lt;/span&gt;
                      &lt;/span&gt;
                      &lt;span class="avatar"&gt;
                        &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt=""&gt;
                      &lt;/span&gt;
                      &lt;span class="avatar"&gt;
                        &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt=""&gt;
                      &lt;/span&gt;
                    &lt;/div&gt;
                    &lt;!-- End Avatar Group --&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Row --&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;!-- End Item --&gt;
          &lt;/ul&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection