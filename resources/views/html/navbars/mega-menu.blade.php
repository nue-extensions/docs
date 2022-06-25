@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Mega Menu')

@section('content')
  <x-nue::docs::header>
   Mega Menu
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF MEGA MENU
          // =======================================================
          new NueMegaMenu('.js-mega-menu')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="how-it-works" class="nue-docs-heading">
    How it works <a class="anchorjs-link" href="#how-it-works" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Here's what you need to know before getting started with the mega menu:</p>

  <ul>
    <li>Mega menu requires a wrapping <code>.js-mega-menu</code> (or any other ID or class which you can replace with) along with <code>.navbar</code> class.</li>
    <li><code>.nue-has-mega-menu</code> - is a parent class that contains sub-elements within it.</li>
    <li><code>.nue-mega-menu</code> - is a child class that contains a container for the mega menu.</li>
    <li>Mega menus are responsive by default, but you can easily modify them to change that. Responsive behavior depends on our <code>nue-megamenu</code> JavaScript plugin.</li>
  </ul>

  <h2 id="example" class="nue-docs-heading">
    Example <a class="anchorjs-link" href="#example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <header class="docs-navbar navbar navbar-expand-lg navbar-end navbar-light bg-white">
        <div class="container">
          <div class="js-mega-menu navbar-nav-wrap">
            <a class="navbar-brand" href="/" aria-label="">
                <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo" data-nue-theme-appearance="default">
                <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.dark') }}" alt="Logo" data-nue-theme-appearance="dark">
            </a>
            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#megaMenuBasicToggler" aria-label="Toggle navigation" aria-expanded="false" aria-controls="megaMenuBasicToggler">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="megaMenuBasicToggler">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>

                <li class="nue-has-sub-menu nav-item">
                  <a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="headerWithMegaMenuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>

                  <div class="nue-sub-menu dropdown-menu" aria-labelledby="headerWithMegaMenuDropdown" style="min-width: 12rem;">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>

                    <div class="nue-has-sub-menu">
                      <a class="nue-mega-menu-invoker dropdown-item dropdown-toggle" href="#" id="megaMenuBasicDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sub dropdown</a>

                      <div class="nue-sub-menu dropdown-menu" aria-labelledby="megaMenuBasicDropDown" style="min-width: 230px;">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nue-has-mega-menu nav-item">
                  <a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuBasicMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>

                  <div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuBasicMegaMenu">
                    <div class="navbar-dropdown-menu-inner">
                      <div class="row">
                        <div class="col-sm-6 col-md">
                          <span class="dropdown-header">One</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md mb-3 mb-md-0">
                          <span class="dropdown-header">Two</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md mb-3 mb-md-0">
                          <span class="dropdown-header">Three</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md">
                          <span class="dropdown-header">Four</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Header --&gt;
          &lt;header class="docs-navbar navbar navbar-expand-lg navbar-end navbar-light bg-white"&gt;
            &lt;div class="container"&gt;
              &lt;div class="js-mega-menu navbar-nav-wrap"&gt;
                &lt;!-- Logo --&gt;
                &lt;a class="navbar-brand" href="" aria-label=""&gt;
                  &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                &lt;/a&gt;
                &lt;!-- End Logo --&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#megaMenuBasicToggler" aria-label="Toggle navigation" aria-expanded="false" aria-controls="megaMenuBasicToggler"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="megaMenuBasicToggler"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav ms-auto"&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                    &lt;/li&gt;

                    &lt;!-- Dropdown --&gt;
                    &lt;li class="nue-has-sub-menu nav-item"&gt;
                      &lt;a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="headerWithMegaMenuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/a&gt;

                      &lt;!-- Mega Menu --&gt;
                      &lt;div class="nue-sub-menu dropdown-menu" aria-labelledby="headerWithMegaMenuDropdown" style="min-width: 12rem;"&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                        &lt;div class="dropdown-divider"&gt;&lt;/div&gt;

                        &lt;!-- Dropdown --&gt;
                        &lt;div class="nue-has-sub-menu"&gt;
                          &lt;a class="nue-mega-menu-invoker dropdown-item dropdown-toggle" href="#" id="megaMenuBasicDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Sub dropdown&lt;/a&gt;

                          &lt;div class="nue-sub-menu dropdown-menu" aria-labelledby="megaMenuBasicDropDown" style="min-width: 230px;"&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                            &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!-- End Dropdown --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Mega Menu --&gt;
                    &lt;/li&gt;
                    &lt;!-- End Dropdown --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nue-has-mega-menu nav-item"&gt;
                      &lt;a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuBasicMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Mega menu&lt;/a&gt;

                      &lt;!-- Mega Menu --&gt;
                      &lt;div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuBasicMegaMenu"&gt;
                        &lt;!-- Main Content --&gt;
                        &lt;div class="navbar-dropdown-menu-inner"&gt;
                          &lt;div class="row"&gt;
                            &lt;div class="col-sm-6 col-md"&gt;
                              &lt;span class="dropdown-header"&gt;One&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md mb-3 mb-md-0"&gt;
                              &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md mb-3 mb-md-0"&gt;
                              &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md"&gt;
                              &lt;span class="dropdown-header"&gt;Four&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!-- End Row --&gt;
                        &lt;/div&gt;
                        &lt;!-- End Main Content --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Mega Menu --&gt;
                    &lt;/li&gt;
                    &lt;!-- End Nav Item --&gt;

                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
                    &lt;/li&gt;
                  &lt;/ul&gt;
                  &lt;!-- End Navbar --&gt;
                &lt;/nav&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/header&gt;
          &lt;!-- End Header --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="columns" class="nue-docs-heading">
    Columns <a class="anchorjs-link" href="#columns" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Adjust the size width of the mega menu, when using less columns or when the content of the container is less. Set maximum width via <code>data-nue-mega-menu-item-options='{ "desktop": { "maxWidth": "" } }'</code> attribute.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <header class="docs-navbar navbar navbar-expand-lg navbar-end navbar-light bg-white">
        <div class="container">
          <div class="js-mega-menu navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="">
              <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#megaMenuColumnsToggler" aria-label="Toggle navigation" aria-expanded="false" aria-controls="megaMenuColumnsToggler">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="megaMenuColumnsToggler">
              <ul class="navbar-nav ms-auto">
                <li class="nue-has-mega-menu nav-item" data-nue-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "20rem"
                      }
                    }'>
                  <a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuColumnsMegaMenu20rem" role="button" data-bs-toggle="dropdown" aria-expanded="false">20rem</a>

                  <div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuColumnsMegaMenu20rem">
                    <div class="navbar-dropdown-menu-inner">
                      <div class="row">
                        <div class="col-sm-6 col-md mb-3 mb-md-0">
                          <span class="dropdown-header">One</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md">
                          <span class="dropdown-header">Two</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nue-has-mega-menu nav-item" data-nue-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "30rem"
                      }
                    }'>
                  <a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuColumnsMegaMenu30rem" role="button" data-bs-toggle="dropdown" aria-expanded="false">30rem</a>

                  <div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuColumnsMegaMenu30rem">
                    <div class="navbar-dropdown-menu-inner">
                      <div class="row">
                        <div class="col-sm-6 col-md mb-3 mb-md-0">
                          <span class="dropdown-header">One</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md mb-3 mb-md-0">
                          <span class="dropdown-header">Two</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md">
                          <span class="dropdown-header">Three</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nue-has-mega-menu nav-item">
                  <a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuColumnsMegaMenuFullWidth" role="button" data-bs-toggle="dropdown" aria-expanded="false">Full width</a>

                  <div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuColumnsMegaMenuFullWidth">
                    <div class="navbar-dropdown-menu-inner">
                      <div class="row">
                        <div class="col-sm-6 col-md">
                          <span class="dropdown-header">One</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md mb-3 mb-md-0">
                          <span class="dropdown-header">Two</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md mb-3 mb-md-0">
                          <span class="dropdown-header">Three</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md">
                          <span class="dropdown-header">Four</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Header --&gt;
          &lt;header class="docs-navbar navbar navbar-expand-lg navbar-end navbar-light bg-white"&gt;
            &lt;div class="container"&gt;
              &lt;div class="js-mega-menu navbar-nav-wrap"&gt;
                &lt;!-- Logo --&gt;
                &lt;a class="navbar-brand" href="" aria-label=""&gt;
                  &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                &lt;/a&gt;
                &lt;!-- End Logo --&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#megaMenuColumnsToggler" aria-label="Toggle navigation" aria-expanded="false" aria-controls="megaMenuColumnsToggler"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="megaMenuColumnsToggler"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav ms-auto"&gt;
                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nue-has-mega-menu nav-item"
                        data-nue-mega-menu-item-options='{
                          "desktop": {
                            "position": "right",
                            "maxWidth": "20rem"
                          }
                        }'&gt;
                      &lt;a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuColumnsMegaMenu20rem" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;20rem&lt;/a&gt;

                      &lt;!-- Mega Menu --&gt;
                      &lt;div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuColumnsMegaMenu20rem"&gt;
                        &lt;!-- Main Content --&gt;
                        &lt;div class="navbar-dropdown-menu-inner"&gt;
                          &lt;div class="row"&gt;
                            &lt;div class="col-sm-6 col-md mb-3 mb-md-0"&gt;
                              &lt;span class="dropdown-header"&gt;One&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md"&gt;
                              &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!-- End Row --&gt;
                        &lt;/div&gt;
                        &lt;!-- End Main Content --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Mega Menu --&gt;
                    &lt;/li&gt;
                    &lt;!-- End Nav Item --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nue-has-mega-menu nav-item"
                        data-nue-mega-menu-item-options='{
                          "desktop": {
                            "position": "right",
                            "maxWidth": "30rem"
                          }
                        }'&gt;
                      &lt;a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuColumnsMegaMenu30rem" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;30rem&lt;/a&gt;

                      &lt;!-- Mega Menu --&gt;
                      &lt;div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuColumnsMegaMenu30rem"&gt;
                        &lt;!-- Main Content --&gt;
                        &lt;div class="navbar-dropdown-menu-inner"&gt;
                          &lt;div class="row"&gt;
                            &lt;div class="col-sm-6 col-md mb-3 mb-md-0"&gt;
                              &lt;span class="dropdown-header"&gt;One&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md mb-3 mb-md-0"&gt;
                              &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md"&gt;
                              &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!-- End Row --&gt;
                        &lt;/div&gt;
                        &lt;!-- End Main Content --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Mega Menu --&gt;
                    &lt;/li&gt;
                    &lt;!-- End Nav Item --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nue-has-mega-menu nav-item"&gt;
                      &lt;a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuColumnsMegaMenuFullWidth" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Full width&lt;/a&gt;

                      &lt;!-- Mega Menu --&gt;
                      &lt;div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuColumnsMegaMenuFullWidth"&gt;
                        &lt;!-- Main Content --&gt;
                        &lt;div class="navbar-dropdown-menu-inner"&gt;
                          &lt;div class="row"&gt;
                            &lt;div class="col-sm-6 col-md"&gt;
                              &lt;span class="dropdown-header"&gt;One&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md mb-3 mb-md-0"&gt;
                              &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md mb-3 mb-md-0"&gt;
                              &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md"&gt;
                              &lt;span class="dropdown-header"&gt;Four&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!-- End Row --&gt;
                        &lt;/div&gt;
                        &lt;!-- End Main Content --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Mega Menu --&gt;
                    &lt;/li&gt;
                    &lt;!-- End Nav Item --&gt;
                  &lt;/ul&gt;
                  &lt;!-- End Navbar --&gt;
                &lt;/nav&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/header&gt;
          &lt;!-- End Header --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="alignment" class="nue-docs-heading">
    Alignment <a class="anchorjs-link" href="#alignment" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <P>Set <code>"desktop": { "position": "left" }</code> to "left" or "right" to align the mega menu position according to that side.</P>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <header class="docs-navbar navbar navbar-expand-lg navbar-end navbar-light bg-white">
        <div class="container">
          <div class="js-mega-menu navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="">
              <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#megaMenuAlignmentToggler" aria-label="Toggle navigation" aria-expanded="false" aria-controls="megaMenuAlignmentToggler">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="megaMenuAlignmentToggler">
              <ul class="navbar-nav ms-auto">
                <li class="nue-has-mega-menu nav-item" data-nue-mega-menu-item-options='{
                      "desktop": {
                        "maxWidth": "85%"
                      }
                    }'>
                  <a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuAlignmentMegaMenu20rem" role="button" data-bs-toggle="dropdown" aria-expanded="false">Left aligned</a>

                  <div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuAlignmentMegaMenu20rem">
                    <div class="navbar-dropdown-menu-inner">
                      <div class="row">
                        <div class="col-sm-6 col-md mb-3 mb-md-0">
                          <span class="dropdown-header">One</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md">
                          <span class="dropdown-header">Two</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nue-has-mega-menu nav-item" data-nue-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "85%"
                      }
                    }'>
                  <a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuAlignmentMegaMenuRightAligned" role="button" data-bs-toggle="dropdown" aria-expanded="false">Right aligned</a>

                  <div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuAlignmentMegaMenuRightAligned">
                    <div class="navbar-dropdown-menu-inner">
                      <div class="row">
                        <div class="col-sm-6 col-md mb-3 mb-md-0">
                          <span class="dropdown-header">One</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md mb-3 mb-md-0">
                          <span class="dropdown-header">Two</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md">
                          <span class="dropdown-header">Three</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Header --&gt;
          &lt;header class="docs-navbar navbar navbar-expand-lg navbar-end navbar-light bg-white"&gt;
            &lt;div class="container"&gt;
              &lt;div class="js-mega-menu navbar-nav-wrap"&gt;
                &lt;!-- Logo --&gt;
                &lt;a class="navbar-brand" href="" aria-label=""&gt;
                  &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                &lt;/a&gt;
                &lt;!-- End Logo --&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#megaMenuAlignmentToggler" aria-label="Toggle navigation" aria-expanded="false" aria-controls="megaMenuAlignmentToggler"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="megaMenuAlignmentToggler"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav ms-auto"&gt;
                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nue-has-mega-menu nav-item"
                        data-nue-mega-menu-item-options='{
                          "desktop": {
                            "maxWidth": "85%"
                          }
                        }'&gt;
                      &lt;a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuAlignmentMegaMenu20rem" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Left aligned&lt;/a&gt;

                      &lt;!-- Mega Menu --&gt;
                      &lt;div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuAlignmentMegaMenu20rem"&gt;
                        &lt;!-- Main Content --&gt;
                        &lt;div class="navbar-dropdown-menu-inner"&gt;
                          &lt;div class="row"&gt;
                            &lt;div class="col-sm-6 col-md mb-3 mb-md-0"&gt;
                              &lt;span class="dropdown-header"&gt;One&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md"&gt;
                              &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!-- End Row --&gt;
                        &lt;/div&gt;
                        &lt;!-- End Main Content --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Mega Menu --&gt;
                    &lt;/li&gt;
                    &lt;!-- End Nav Item --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nue-has-mega-menu nav-item"
                        data-nue-mega-menu-item-options='{
                          "desktop": {
                            "position": "right",
                            "maxWidth": "85%"
                          }
                        }'&gt;
                      &lt;a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuAlignmentMegaMenuRightAligned" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Right aligned&lt;/a&gt;

                      &lt;!-- Mega Menu --&gt;
                      &lt;div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuAlignmentMegaMenuRightAligned"&gt;
                        &lt;!-- Main Content --&gt;
                        &lt;div class="navbar-dropdown-menu-inner"&gt;
                          &lt;div class="row"&gt;
                            &lt;div class="col-sm-6 col-md mb-3 mb-md-0"&gt;
                              &lt;span class="dropdown-header"&gt;One&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md mb-3 mb-md-0"&gt;
                              &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md"&gt;
                              &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!-- End Row --&gt;
                        &lt;/div&gt;
                        &lt;!-- End Main Content --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Mega Menu --&gt;
                    &lt;/li&gt;
                    &lt;!-- End Nav Item --&gt;
                  &lt;/ul&gt;
                  &lt;!-- End Navbar --&gt;
                &lt;/nav&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/header&gt;
          &lt;!-- End Header --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="responsive" class="nue-docs-heading">
    Responsive <a class="anchorjs-link" href="#responsive" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Set your collapsing breakpoint - Determines with what resolution mobile layout is enabled. Resolution Map corresponds to Bootstrap and requires the same <code>.navbar-expand{-sm|-md|-lg|-xl}</code> for responsive collapsing. This example collapses the mega menu at <code>768</code> / <code>md</code> breakpoint.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <header class="docs-navbar navbar navbar-expand-md navbar-end navbar-light bg-white">
        <div class="container">
          <div class="js-mega-menu-responsive navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="">
              <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#megaMenuResponsiveToggler" aria-label="Toggle navigation" aria-expanded="false" aria-controls="megaMenuResponsiveToggler">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="megaMenuResponsiveToggler">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>

                <li class="nue-has-sub-menu nav-item">
                  <a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="headerWithMegaMenuDropdownResponsive" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>

                  <div class="nue-sub-menu dropdown-menu" aria-labelledby="headerWithMegaMenuDropdownResponsive" style="min-width: 12rem;">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>

                    <div class="nue-has-sub-menu">
                      <a class="nue-mega-menu-invoker dropdown-item dropdown-toggle" href="#" id="megaMenuResponsiveDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sub dropdown</a>

                      <div class="nue-sub-menu dropdown-menu" aria-labelledby="megaMenuResponsiveDropDown" style="min-width: 230px;">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nue-has-mega-menu nav-item">
                  <a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuResponsiveMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>

                  <div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuResponsiveMegaMenu">
                    <div class="navbar-dropdown-menu-inner">
                      <div class="row">
                        <div class="col-sm-6 col-md">
                          <span class="dropdown-header">One</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md mb-3 mb-md-0">
                          <span class="dropdown-header">Two</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md mb-3 mb-md-0">
                          <span class="dropdown-header">Three</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>

                        <div class="col-sm-6 col-md">
                          <span class="dropdown-header">Four</span>
                          <a class="dropdown-item" href="#">One</a>
                          <a class="dropdown-item" href="#">Two</a>
                          <a class="dropdown-item" href="#">Three</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Header --&gt;
          &lt;header class="docs-navbar navbar navbar-expand-md navbar-end navbar-light bg-white"&gt;
            &lt;div class="container"&gt;
              &lt;div class="js-mega-menu-responsive navbar-nav-wrap"&gt;
                &lt;!-- Logo --&gt;
                &lt;a class="navbar-brand" href="" aria-label=""&gt;
                  &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                &lt;/a&gt;
                &lt;!-- End Logo --&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#megaMenuResponsiveToggler" aria-label="Toggle navigation" aria-expanded="false" aria-controls="megaMenuResponsiveToggler"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="megaMenuResponsiveToggler"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav ms-auto"&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                    &lt;/li&gt;

                    &lt;!-- Dropdown --&gt;
                    &lt;li class="nue-has-sub-menu nav-item"&gt;
                      &lt;a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="headerWithMegaMenuDropdownResponsive" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/a&gt;

                      &lt;!-- Mega Menu --&gt;
                      &lt;div class="nue-sub-menu dropdown-menu" aria-labelledby="headerWithMegaMenuDropdownResponsive" style="min-width: 12rem;"&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                        &lt;div class="dropdown-divider"&gt;&lt;/div&gt;

                        &lt;!-- Dropdown --&gt;
                        &lt;div class="nue-has-sub-menu"&gt;
                          &lt;a class="nue-mega-menu-invoker dropdown-item dropdown-toggle" href="#" id="megaMenuResponsiveDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Sub dropdown&lt;/a&gt;

                          &lt;div class="nue-sub-menu dropdown-menu" aria-labelledby="megaMenuResponsiveDropDown" style="min-width: 230px;"&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                            &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!-- End Dropdown --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Mega Menu --&gt;
                    &lt;/li&gt;
                    &lt;!-- End Dropdown --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nue-has-mega-menu nav-item"&gt;
                      &lt;a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="megaMenuResponsiveMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Mega menu&lt;/a&gt;

                      &lt;!-- Mega Menu --&gt;
                      &lt;div class="nue-mega-menu dropdown-menu w-100" aria-labelledby="megaMenuResponsiveMegaMenu"&gt;
                        &lt;!-- Main Content --&gt;
                        &lt;div class="navbar-dropdown-menu-inner"&gt;
                          &lt;div class="row"&gt;
                            &lt;div class="col-sm-6 col-md"&gt;
                              &lt;span class="dropdown-header"&gt;One&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md mb-3 mb-md-0"&gt;
                              &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md mb-3 mb-md-0"&gt;
                              &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;

                            &lt;div class="col-sm-6 col-md"&gt;
                              &lt;span class="dropdown-header"&gt;Four&lt;/span&gt;
                              &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!-- End Row --&gt;
                        &lt;/div&gt;
                        &lt;!-- End Main Content --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Mega Menu --&gt;
                    &lt;/li&gt;
                    &lt;!-- End Nav Item --&gt;

                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
                    &lt;/li&gt;
                  &lt;/ul&gt;
                  &lt;!-- End Navbar --&gt;
                &lt;/nav&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/header&gt;
          &lt;!-- End Header --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="methods" class="nue-docs-heading">
    Methods <a class="anchorjs-link" href="#methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <div class="card">
    <div class="table-responsive">
      <table class="table table-thead-bordered">
        <thead class="thead-light">
          <tr>
            <th>Parameters</th>
            <th style="width: 50%;">Description</th>
            <th class="text-nowrap">Default value</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <p><code>eventType</code></p>
            </td>
            <td>
              Defines the event on which the menu will be displayed. Valid values are:

              <ul>
                <li><code>click</code></li>
                <li><code>hover</code></li>
              </ul>
            </td>
            <td><code>hover</code></td>
          </tr>

          <tr>
            <td>
              <p><code>direction</code></p>
            </td>
            <td>
              Direction of the menus. Valid values are:

              <ul>
                <li><code>horizontal</code></li>
                <li><code>vertical</code></li>
              </ul>
            </td>
            <td><code>horizontal</code></td>
          </tr>

          <tr>
            <td>
              <p><code>breakpoint</code></p>
            </td>
            <td>Determines with what resolution mobile layout is enabled. Resolution Map corresponds to Bootstrap 4</td>
            <td><code>'lg'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>itemOptions.desktop.animationIn</code></p>
            </td>
            <td>Appearing effect</td>
            <td><code>'slideInUp'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>itemOptions.desktop.animationOut</code></p>
            </td>
            <td>Disappearing effect</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td>
              <p><code>itemOptions.desktop.position</code></p>
            </td>
            <td>Menu location during initialization</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>itemOptions.desktop.maxWidth</code></p>
            </td>
            <td>Sets the maximum width for the dropdown menu</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>rtl</code></p>
            </td>
            <td>If <code>true</code>, displays all items from right-to-left (RTL)</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td>
              <p><code>hideTimeOut</code></p>
            </td>
            <td>Delay of the disappearance of the menu</td>
            <td><code>300</code></td>
          </tr>

          <tr>
            <td>
              <p><code>sideBarRatio</code></p>
            </td>
            <td>Determines how much of the width the sidebar will occupy the dropdown list. Only works if <code>direction: 'vertical'</code></td>
            <td><code>1 / 4</code></td>
          </tr>

          <tr>
            <td>
              <p><code>pageContainer</code></p>
            </td>
            <td>Determines with respect to which element the drop-down menu will be positioned. Only works if <code>direction: 'vertical'</code></td>
            <td><code>$('body')</code></td>
          </tr>

          <tr>
            <td>
              <p><code>mobileSpeed</code></p>
            </td>
            <td>Opening speed of the menu in the mobile layout</td>
            <td><code>400</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.initialized</code></p>
            </td>
            <td>Class informing that the menu is ready to work</td>
            <td><code>'.nue-menu-initialized'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.mobileState</code></p>
            </td>
            <td>Class informing that the menu has moved to mobile layout</td>
            <td><code>'.nue-mobile-state'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.subMenu</code></p>
            </td>
            <td>Class for the sub menu. The script will look for exactly this class when working</td>
            <td><code>'.nue-sub-menu'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.hasSubMenu</code></p>
            </td>
            <td>Class for items that contain a sub menu. The script will look for exactly this class when working</td>
            <td><code>'.nue-has-sub-menu'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.hasSubMenuActive</code></p>
            </td>
            <td>Class given to an invoker when opening a sub menu</td>
            <td><code>'.nue-sub-menu-opened'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.megaMenu</code></p>
            </td>
            <td>Class for mega menu. The script will look for exactly this class when working</td>
            <td><code>'.nue-mega-menu'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.hasMegaMenu</code></p>
            </td>
            <td>Class for items that contain mega menus. The script will look for exactly this class when working</td>
            <td><code>'.nue-has-mega-menu'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.hasMegaMenuActive</code></p>
            </td>
            <td>Class given to an invoker when opening a mega menu</td>
            <td><code>'.nue-mega-menu-opened'</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection