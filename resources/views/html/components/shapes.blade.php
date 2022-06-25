@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Shapes')

@section('content')
  <x-nue::docs::header>
    Shapes
  </x-nue::docs::header>

  <h2 id="curved" class="nue-docs-heading">
    Curved <a class="anchorjs-link" href="#curved" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="d-flex justify-content-center w-lg-75 mx-lg-auto">
        <div class="shape-container">
          <img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="...">

          <div class="shape shape-bottom zi-1">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
              <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
            </svg>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Shape Container --&gt;
          &lt;div class="shape-container"&gt;
            &lt;img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="..."&gt;

            &lt;!-- Shape --&gt;
            &lt;div class="shape shape-bottom zi-1"&gt;
              &lt;svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1"&gt;
                &lt;path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"&gt;&lt;/path&gt;
              &lt;/svg&gt;
            &lt;/div&gt;
            &lt;!-- End Shape --&gt;
          &lt;/div&gt;
          &lt;!-- End Shape Container --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="angles" class="nue-docs-heading">
    Angles <a class="anchorjs-link" href="#angles" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Selipkan class <code>.shape-top</code> untuk potong sisi atas.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm-6 mb-5 mb-sm-0">
          <div class="shape-container">
            <img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="...">

            <div class="shape shape-top zi-1">
              <svg width="3000" height="600" viewBox="0 0 3000 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0H3000V600L0 0Z" fill="#fff" />
              </svg>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="shape-container">
            <img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="...">

            <div class="shape shape-top zi-1">
              <svg width="3000" height="600" viewBox="0 0 3000 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3000 0H0V600L3000 0Z" fill="#fff" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Shape Container --&gt;
          &lt;div class="shape-container"&gt;
            &lt;img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="..."&gt;

            &lt;div class="shape shape-top zi-1"&gt;
              &lt;svg width="3000" height="600" viewBox="0 0 3000 600" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M0 0H3000V600L0 0Z" fill="#fff"/&gt;
              &lt;/svg&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Shape Container --&gt;

          &lt;!-- Shape Container --&gt;
          &lt;div class="shape-container"&gt;
            &lt;img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="..."&gt;

            &lt;div class="shape shape-top zi-1"&gt;
              &lt;svg width="3000" height="600" viewBox="0 0 3000 600" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M3000 0H0V600L3000 0Z" fill="#fff"/&gt;
              &lt;/svg&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Shape Container --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Gunakan <code>.shape-bottom</code> untuk memotong di sisi bawah.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm-6 mb-5 mb-sm-0">
          <div class="shape-container">
            <img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="...">

            <div class="shape shape-bottom zi-1">
              <svg width="3000" height="600" viewBox="0 0 3000 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 600H3000V0L0 600Z" fill="#fff" />
              </svg>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="shape-container">
            <img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="...">

            <div class="shape shape-bottom zi-1">
              <svg width="3000" height="600" viewBox="0 0 3000 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3000 600H0V0L3000 600Z" fill="#fff" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Shape Container --&gt;
          &lt;div class="shape-container"&gt;
            &lt;img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="..."&gt;

            &lt;div class="shape shape-bottom zi-1"&gt;
              &lt;svg width="3000" height="600" viewBox="0 0 3000 600" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M0 600H3000V0L0 600Z" fill="#fff"/&gt;
              &lt;/svg&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Shape Container --&gt;

          &lt;!-- Shape Container --&gt;
          &lt;div class="shape-container"&gt;
            &lt;img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="..."&gt;

            &lt;div class="shape shape-bottom zi-1"&gt;
              &lt;svg width="3000" height="600" viewBox="0 0 3000 600" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M3000 600H0V0L3000 600Z" fill="#fff"/&gt;
              &lt;/svg&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Shape Container --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection