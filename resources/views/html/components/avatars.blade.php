@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Avatars')

@section('content')
  <x-nue::docs::header>
    Avatars
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="avatar avatar-xxl avatar-circle">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
      </span>
      <span class="avatar avatar-xl avatar-circle">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
      </span>
      <span class="avatar avatar-lg avatar-circle">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
      </span>
      <span class="avatar avatar-circle">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="...">
      </span>
      <span class="avatar avatar-sm avatar-circle">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt="...">
      </span>
      <span class="avatar avatar-xs avatar-circle">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt="...">
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="avatar avatar-xxl avatar-circle"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-xl avatar-circle"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-lg avatar-circle"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-circle"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-sm avatar-circle"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-xs avatar-circle"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="initials" class="nue-docs-heading">
    Initials <a class="anchorjs-link" href="#initials" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="avatar avatar-xxl avatar-primary avatar-circle">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-xl avatar-primary avatar-circle">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-lg avatar-primary avatar-circle">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-primary avatar-circle">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-sm avatar-primary avatar-circle">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-xs avatar-primary avatar-circle">
        <span class="avatar-initials">A</span>
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="avatar avatar-xxl avatar-primary avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-xl avatar-primary avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-lg avatar-primary avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-primary avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-sm avatar-primary avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-xs avatar-primary avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="shapes" class="nue-docs-heading">
    Shapes <a class="anchorjs-link" href="#shapes" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="avatar me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
      </span>
      <span class="avatar avatar-circle">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="avatar"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-circle"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="avatar avatar-primary me-2">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-primary avatar-circle">
        <span class="avatar-initials">A</span>
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="avatar avatar-primary"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-primary avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="ratio" class="nue-docs-heading">
    Ratio <a class="anchorjs-link" href="#ratio" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="avatar avatar-xxl avatar-4x3">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="...">
      </span>
      <span class="avatar avatar-xl avatar-4x3">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="...">
      </span>
      <span class="avatar avatar-lg avatar-4x3">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="...">
      </span>
      <span class="avatar avatar-4x3">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="...">
      </span>
      <span class="avatar avatar-sm avatar-4x3">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="...">
      </span>
      <span class="avatar avatar-xs avatar-4x3">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="...">
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="avatar avatar-xxl avatar-4x3"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-xl avatar-4x3"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-lg avatar-4x3"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-4x3"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-sm avatar-4x3"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-xs avatar-4x3"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="colors" class="nue-docs-heading">
    Colors <a class="anchorjs-link" href="#colors" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="avatar avatar-primary avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-secondary avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-success avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-danger avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-warning avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-info avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-light avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-dark avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="avatar avatar-primary avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-secondary avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-success avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-danger avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-warning avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-info avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-light avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-dark avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="avatar avatar-soft-primary avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-soft-secondary avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-soft-success avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-soft-danger avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-soft-warning avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-soft-info avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-soft-light avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
      <span class="avatar avatar-soft-dark avatar-circle mb-1">
        <span class="avatar-initials">A</span>
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="avatar avatar-soft-primary avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-soft-secondary avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-soft-success avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-soft-danger avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-soft-warning avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-soft-info avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-soft-light avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="avatar avatar-soft-dark avatar-circle"&gt;
            &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="centered" class="nue-docs-heading">
    Centered <a class="anchorjs-link" href="#centered" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <span class="avatar avatar-xl avatar-centered avatar-circle avatar-border-lg">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
      </span>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;span class="avatar avatar-xl avatar-centered avatar-circle avatar-border-lg"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
          &lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="group" class="nue-docs-heading">
    Group <a class="anchorjs-link" href="#group" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row align-items-center">
        <div class="col-auto">
          <div class="avatar-group avatar-group-lg mb-1">
            <span class="avatar avatar-circle">
              <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
            </span>
            <span class="avatar avatar-dark avatar-circle">
              <span class="avatar-initials">A</span>
            </span>
            <span class="avatar avatar-circle">
              <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
            </span>
            <span class="avatar avatar-primary avatar-circle">
              <span class="avatar-initials">2+</span>
            </span>
          </div>
        </div>

        <div class="col-auto">
          <div class="avatar-group mb-1">
            <span class="avatar avatar-circle">
              <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
            </span>
            <span class="avatar avatar-dark avatar-circle">
              <span class="avatar-initials">A</span>
            </span>
            <span class="avatar avatar-circle">
              <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
            </span>
            <span class="avatar avatar-primary avatar-circle">
              <span class="avatar-initials">2+</span>
            </span>
          </div>
        </div>

        <div class="col-auto">
          <div class="avatar-group avatar-group-sm mb-1">
            <span class="avatar avatar-circle">
              <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
            </span>
            <span class="avatar avatar-dark avatar-circle">
              <span class="avatar-initials">A</span>
            </span>
            <span class="avatar avatar-circle">
              <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
            </span>
            <span class="avatar avatar-primary avatar-circle">
              <span class="avatar-initials">2+</span>
            </span>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row align-items-center"&gt;
            &lt;div class="col-auto"&gt;
              &lt;!-- Avatar Group --&gt;
              &lt;div class="avatar-group avatar-group-lg mb-1"&gt;
                &lt;span class="avatar avatar-circle"&gt;
                  &lt;img class="avatar-img" src="..." alt="..."&gt;
                &lt;/span&gt;
                &lt;span class="avatar avatar-dark avatar-circle"&gt;
                  &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
                &lt;/span&gt;
                &lt;span class="avatar avatar-circle"&gt;
                  &lt;img class="avatar-img" src="..." alt="..."&gt;
                &lt;/span&gt;
                &lt;span class="avatar avatar-primary avatar-circle"&gt;
                  &lt;span class="avatar-initials"&gt;2+&lt;/span&gt;
                &lt;/span&gt;
              &lt;/div&gt;
              &lt;!-- End Avatar Group --&gt;
            &lt;/div&gt;

            &lt;div class="col-auto"&gt;
              &lt;!-- Avatar Group --&gt;
              &lt;div class="avatar-group mb-1"&gt;
                &lt;span class="avatar avatar-circle"&gt;
                  &lt;img class="avatar-img" src="..." alt="..."&gt;
                &lt;/span&gt;
                &lt;span class="avatar avatar-dark avatar-circle"&gt;
                  &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
                &lt;/span&gt;
                &lt;span class="avatar avatar-circle"&gt;
                  &lt;img class="avatar-img" src="..." alt="..."&gt;
                &lt;/span&gt;
                &lt;span class="avatar avatar-primary avatar-circle"&gt;
                  &lt;span class="avatar-initials"&gt;2+&lt;/span&gt;
                &lt;/span&gt;
              &lt;/div&gt;
              &lt;!-- End Avatar Group --&gt;
            &lt;/div&gt;

            &lt;div class="col-auto"&gt;
              &lt;!-- Avatar Group --&gt;
              &lt;div class="avatar-group avatar-group-sm mb-1"&gt;
                &lt;span class="avatar avatar-circle"&gt;
                  &lt;img class="avatar-img" src="..." alt="..."&gt;
                &lt;/span&gt;
                &lt;span class="avatar avatar-dark avatar-circle"&gt;
                  &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
                &lt;/span&gt;
                &lt;span class="avatar avatar-circle"&gt;
                  &lt;img class="avatar-img" src="..." alt="..."&gt;
                &lt;/span&gt;
                &lt;span class="avatar avatar-primary avatar-circle"&gt;
                  &lt;span class="avatar-initials"&gt;2+&lt;/span&gt;
                &lt;/span&gt;
              &lt;/div&gt;
              &lt;!-- End Avatar Group --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="status" class="nue-docs-heading">
    Status <a class="anchorjs-link" href="#status" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="avatar me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-sm-status avatar-status-primary"></span>
      </div>
      <div class="avatar avatar-circle me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-sm-status avatar-status-primary"></span>
      </div>

      <div class="avatar avatar-lg me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-status avatar-status-primary"></span>
      </div>
      <div class="avatar avatar-lg avatar-circle me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-status avatar-status-primary"></span>
      </div>

      <div class="avatar avatar-xl me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-status-primary"></span>
      </div>
      <div class="avatar avatar-xl avatar-circle me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-status-primary"></span>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="avatar"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-sm-status avatar-status-primary"&gt;&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="avatar avatar-circle me-2"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-sm-status avatar-status-primary"&gt;&lt;/span&gt;
          &lt;/div&gt;

          &lt;div class="avatar avatar-lg me-2"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-status avatar-status-primary"&gt;&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="avatar avatar-lg avatar-circle me-2"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-status avatar-status-primary"&gt;&lt;/span&gt;
          &lt;/div&gt;

          &lt;div class="avatar avatar-xl"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-status-primary"&gt;&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="avatar avatar-xl avatar-circle me-2"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-status-primary"&gt;&lt;/span&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="avatar avatar-circle me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-sm-status avatar-status-primary"></span>
      </div>
      <div class="avatar avatar-circle me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-sm-status avatar-status-secondary"></span>
      </div>
      <div class="avatar avatar-circle me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
      </div>
      <div class="avatar avatar-circle me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
      </div>
      <div class="avatar avatar-circle me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
      </div>
      <div class="avatar avatar-circle me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-sm-status avatar-status-info"></span>
      </div>
      <div class="avatar avatar-circle me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-sm-status avatar-status-light"></span>
      </div>
      <div class="avatar avatar-circle me-2">
        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
        <span class="avatar-status avatar-sm-status avatar-status-dark"></span>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="avatar avatar-circle me-2"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-sm-status avatar-status-primary"&gt;&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="avatar avatar-circle me-2"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-sm-status avatar-status-secondary"&gt;&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="avatar avatar-circle me-2"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-sm-status avatar-status-success"&gt;&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="avatar avatar-circle me-2"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-sm-status avatar-status-danger"&gt;&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="avatar avatar-circle me-2"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-sm-status avatar-status-warning"&gt;&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="avatar avatar-circle me-2"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-sm-status avatar-status-info"&gt;&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="avatar avatar-circle me-2"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-sm-status avatar-status-light"&gt;&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="avatar avatar-circle me-2"&gt;
            &lt;img class="avatar-img" src="..." alt="..."&gt;
            &lt;span class="avatar-status avatar-sm-status avatar-status-dark"&gt;&lt;/span&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>
@endsection