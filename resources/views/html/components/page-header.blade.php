@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Page Header')

@section('content')
  <x-nue::docs::header>
    Page header
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm">
            <h2 class="page-header-title">Users</h2>
            <p class="page-header-text">This is a description text.</p>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Page Header --&gt;
          &lt;div class="page-header"&gt;
            &lt;div class="row align-items-center"&gt;
              &lt;div class="col-sm"&gt;
                &lt;h2 class="page-header-title"&gt;Users&lt;/h2&gt;
                &lt;p class="page-header-text"&gt;This is a description text.&lt;/p&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Page Header --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="reset" class="nue-docs-heading">
    Reset <a class="anchorjs-link" href="#reset" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>.page-header-reset</code> to remove border and padding spaces.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="page-header page-header-reset">
        <div class="row align-items-center">
          <div class="col-sm">
            <h2 class="page-header-title">Users</h2>
            <p class="page-header-text">This is a description text.</p>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Page Header --&gt;
          &lt;div class="page-header page-header-reset"&gt;
            &lt;div class="row align-items-center"&gt;
              &lt;div class="col-sm"&gt;
                &lt;h2 class="page-header-title"&gt;Users&lt;/h2&gt;
                &lt;p class="page-header-text"&gt;This is a description text.&lt;/p&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Page Header --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="button" class="nue-docs-heading">
    Button <a class="anchorjs-link" href="#button" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">
            <h2 class="page-header-title">Users</h2>
          </div>

          <div class="col-sm-auto">
            <a class="btn btn-primary btn-sm" href="javascript:;">
              <i class="bi-people-fille me-1"></i> Invite users
            </a>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Page Header --&gt;
          &lt;div class="page-header"&gt;
            &lt;div class="row align-items-center"&gt;
              &lt;div class="col-sm mb-2 mb-sm-0"&gt;
                &lt;h2 class="page-header-title"&gt;Users&lt;/h2&gt;
              &lt;/div&gt;

              &lt;div class="col-sm-auto"&gt;
                &lt;a class="btn btn-primary btn-sm" href="javascript:;"&gt;
                  &lt;i class="bi-people-fille me-1"&gt;&lt;/i&gt; Invite users
                &lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Page Header --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="breadcrumb" class="nue-docs-heading">
    Breadcrumb <a class="anchorjs-link" href="#breadcrumb" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Overview</li>
              </ol>
            </nav>

            <h2 class="page-header-title">Users</h2>
          </div>

          <div class="col-sm-auto">
            <a class="btn btn-primary btn-sm" href="javascript:;">
              <i class="bi-people-fille me-1"></i> Invite users
            </a>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Page Header --&gt;
          &lt;div class="page-header"&gt;
            &lt;div class="row align-items-center"&gt;
              &lt;div class="col-sm mb-2 mb-sm-0"&gt;
                &lt;nav aria-label="breadcrumb"&gt;
                  &lt;ol class="breadcrumb breadcrumb-no-gutter"&gt;
                    &lt;li class="breadcrumb-item"&gt;&lt;a class="breadcrumb-link" href="javascript:;"&gt;Pages&lt;/a&gt;&lt;/li&gt;
                    &lt;li class="breadcrumb-item"&gt;&lt;a class="breadcrumb-link" href="javascript:;"&gt;Users&lt;/a&gt;&lt;/li&gt;
                    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Overview&lt;/li&gt;
                  &lt;/ol&gt;
                &lt;/nav&gt;

                &lt;h2 class="page-header-title"&gt;Users&lt;/h2&gt;
              &lt;/div&gt;

              &lt;div class="col-sm-auto"&gt;
                &lt;a class="btn btn-primary btn-sm" href="javascript:;"&gt;
                  &lt;i class="bi-people-fille me-1"&gt;&lt;/i&gt; Invite users
                &lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Page Header --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="nav" class="nue-docs-heading">
    Nav <a class="anchorjs-link" href="#nav" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">
            <h2 class="page-header-title">Users</h2>
          </div>

          <div class="col-sm-auto">
            <ul class="nav nav-segment">
              <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Page Header --&gt;
          &lt;div class="page-header"&gt;
            &lt;div class="row align-items-center"&gt;
              &lt;div class="col-sm mb-2 mb-sm-0"&gt;
                &lt;h2 class="page-header-title"&gt;Users&lt;/h2&gt;
              &lt;/div&gt;

              &lt;div class="col-sm-auto"&gt;
                &lt;!-- Nav --&gt;
                &lt;ul class="nav nav-segment"&gt;
                  &lt;li class="nav-item"&gt;
                    &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                  &lt;/li&gt;
                  &lt;li class="nav-item"&gt;
                    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
                  &lt;/li&gt;
                  &lt;li class="nav-item"&gt;
                    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
                &lt;!-- End Nav --&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Page Header --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="nav-tabs" class="nue-docs-heading">
    Nav tabs <a class="anchorjs-link" href="#nav-tabs" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>.page-header-tabs</code> class with a <code>.nav-tabs</code> class to align the borders in one line.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">
            <h2 class="page-header-title">Users</h2>
          </div>

          <div class="col-sm-auto">
            <a class="btn btn-primary btn-sm" href="javascript:;">
              <i class="bi-people-fille me-1"></i> Invite users
            </a>
          </div>
        </div>

        <ul class="nav nav-tabs page-header-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Page Header --&gt;
          &lt;div class="page-header"&gt;
            &lt;div class="row align-items-center"&gt;
              &lt;div class="col-sm mb-2 mb-sm-0"&gt;
                &lt;h2 class="page-header-title"&gt;Users&lt;/h2&gt;
              &lt;/div&gt;

              &lt;div class="col-sm-auto"&gt;
                &lt;a class="btn btn-primary btn-sm" href="javascript:;"&gt;
                  &lt;i class="bi-people-fille me-1"&gt;&lt;/i&gt; Invite users
                &lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;!-- Nav --&gt;
            &lt;ul class="nav nav-tabs page-header-tabs"&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- End Nav --&gt;
          &lt;/div&gt;
          &lt;!-- End Page Header --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection