@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Navbar')

@section('js')
	<script>
    new NueMegaMenu('.js-mega-menu', {
      desktop: {
        position: 'left'
      }
    })
	</script>
@endsection

@section('content')
  <x-nue::docs::header>
    Navbar
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/navbar/</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Navbar</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF NAVBAR
          // =======================================================
          new NueHeader('#header').init()
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="using-mega-menu-with-header" class="nue-docs-heading">
    Using mega menu with header <a class="anchorjs-link" href="#using-mega-menu-with-header" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste the init function under <em><u>JS Plugins Init.</u></em>, before the closing <code>&lt;/body&gt;</code> tag, to enable it.</p>

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

  <h2 id="basic" class="nue-docs-heading">
    Basic <a class="anchorjs-link" href="#basic" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <header class="docs-navbar navbar navbar-expand-lg navbar-end mb-3">
        <div class="container">
          <div class="navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="Nue">
              <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenu">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenu">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownSubMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>

                  <div class="dropdown-menu" aria-labelledby="dropdownSubMenu" style="min-width: 230px;">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link dropdown-toggle" href="#" id="megaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>

                  <div class="dropdown-menu w-100" aria-labelledby="megaMenu">
                    <div class="row">
                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">One</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Two</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Three</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                      </div>

                      <div class="col-lg-3">
                        <span class="dropdown-header">Four</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
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

      <header class="docs-navbar navbar navbar-expand-lg navbar-end navbar-light bg-white mb-3">
        <div class="container">
          <div class="navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="Nue">
              <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuLightEg" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuLightEg">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuLightEg">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownSubMenuLightEg" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>

                  <div class="dropdown-menu" aria-labelledby="dropdownSubMenuLightEg" style="min-width: 230px;">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link dropdown-toggle" href="#" id="megaMenuLightEg" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>

                  <div class="dropdown-menu w-100" aria-labelledby="megaMenuLightEg">
                    <div class="row">
                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">One</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Two</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Three</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                      </div>

                      <div class="col-lg-3">
                        <span class="dropdown-header">Four</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
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

      <header class="docs-navbar navbar navbar-expand-lg navbar-end navbar-dark bg-primary">
        <div class="container">
          <div class="navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="Nue">
              <img class="navbar-brand-logo" src="https://cdn.btekno.id/templates/nue/svg/logos/logo-white.svg" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuDark" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuDark">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuDark">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownSubMenuDarkEg" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>

                  <div class="dropdown-menu" aria-labelledby="dropdownSubMenuDarkEg" style="min-width: 230px;">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link dropdown-toggle" href="#" id="megaMenuDarkEg" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>

                  <div class="dropdown-menu w-100" aria-labelledby="megaMenuDarkEg">
                    <div class="row">
                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">One</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Two</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Three</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                      </div>

                      <div class="col-lg-3">
                        <span class="dropdown-header">Four</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
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
          &lt;header class="navbar navbar-expand-lg navbar-end mb-3"&gt;
            &lt;div class="container"&gt;
              &lt;div class="navbar-nav-wrap"&gt;
                &lt;div class="navbar-brand-wrapper"&gt;
                  &lt;!-- Logo --&gt;
                  &lt;a class="navbar-brand" href="" aria-label="Nue"&gt;
                    &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                  &lt;/a&gt;
                  &lt;!-- End Logo --&gt;
                &lt;/div&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenu"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenu"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav"&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                    &lt;/li&gt;

                    &lt;!-- Dropdown --&gt;
                    &lt;li class="nav-item dropdown"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="dropdownSubMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/a&gt;

                      &lt;div class="dropdown-menu" aria-labelledby="dropdownSubMenu" style="min-width: 230px;"&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                        &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;!-- End Dropdown --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="megaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Mega menu&lt;/a&gt;

                      &lt;div class="dropdown-menu w-100" aria-labelledby="megaMenu"&gt;
                        &lt;div class="row"&gt;
                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;One&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3"&gt;
                            &lt;span class="dropdown-header"&gt;Four&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
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

          &lt;!-- Header --&gt;
          &lt;header class="navbar navbar-expand-lg navbar-end navbar-light bg-white mb-3"&gt;
            &lt;div class="container"&gt;
              &lt;div class="navbar-nav-wrap"&gt;
                &lt;div class="navbar-brand-wrapper"&gt;
                  &lt;!-- Logo --&gt;
                  &lt;a class="navbar-brand" href="" aria-label="Nue"&gt;
                    &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                  &lt;/a&gt;
                  &lt;!-- End Logo --&gt;
                &lt;/div&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuLightEg" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuLightEg"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuLightEg"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav"&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                    &lt;/li&gt;

                    &lt;!-- Dropdown --&gt;
                    &lt;li class="nav-item dropdown"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="dropdownSubMenuLightEg" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/a&gt;

                      &lt;div class="dropdown-menu" aria-labelledby="dropdownSubMenuLightEg" style="min-width: 230px;"&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                        &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;!-- End Dropdown --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="megaMenuLightEg" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Mega menu&lt;/a&gt;

                      &lt;div class="dropdown-menu w-100" aria-labelledby="megaMenuLightEg"&gt;
                        &lt;div class="row"&gt;
                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;One&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3"&gt;
                            &lt;span class="dropdown-header"&gt;Four&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
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

          &lt;!-- Header --&gt;
          &lt;header class="navbar navbar-expand-lg navbar-end navbar-dark bg-primary"&gt;
            &lt;div class="container"&gt;
              &lt;div class="navbar-nav-wrap"&gt;
                &lt;div class="navbar-brand-wrapper"&gt;
                  &lt;!-- Logo --&gt;
                  &lt;a class="navbar-brand" href="" aria-label="Nue"&gt;
                    &lt;img class="navbar-brand-logo" src="https://cdn.btekno.id/templates/nue/svg/logos/logo-white.svg" alt="Logo"&gt;
                  &lt;/a&gt;
                  &lt;!-- End Logo --&gt;
                &lt;/div&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuDark" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuDark"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuDark"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav"&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                    &lt;/li&gt;

                    &lt;!-- Dropdown --&gt;
                    &lt;li class="nav-item dropdown"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="dropdownSubMenuDarkEg" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/a&gt;

                      &lt;div class="dropdown-menu" aria-labelledby="dropdownSubMenuDarkEg" style="min-width: 230px;"&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                        &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;!-- End Dropdown --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="megaMenuDarkEg" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Mega menu&lt;/a&gt;

                      &lt;div class="dropdown-menu w-100" aria-labelledby="megaMenuDarkEg"&gt;
                        &lt;div class="row"&gt;
                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;One&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3"&gt;
                            &lt;span class="dropdown-header"&gt;Four&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
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

  <h2 id="height" class="nue-docs-heading">
    Height <a class="anchorjs-link" href="#height" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>.navbar-height</code> for fixed height navbar.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <header class="docs-navbar navbar navbar-expand-lg navbar-end mb-3">
        <div class="container">
          <div class="navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="Nue">
              <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuHeight" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuHeight">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuHeight">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarHeightDropdownSubMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>

                  <div class="dropdown-menu" aria-labelledby="navbarHeightDropdownSubMenu" style="min-width: 230px;">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarHeightMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>

                  <div class="dropdown-menu w-100" aria-labelledby="navbarHeightMegaMenu">
                    <div class="row">
                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">One</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Two</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Three</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                      </div>

                      <div class="col-lg-3">
                        <span class="dropdown-header">Four</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
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
          &lt;header class="navbar navbar-expand-lg navbar-end mb-3"&gt;
            &lt;div class="container"&gt;
              &lt;div class="navbar-nav-wrap"&gt;
                &lt;div class="navbar-brand-wrapper"&gt;
                  &lt;!-- Logo --&gt;
                  &lt;a class="navbar-brand" href="" aria-label="Nue"&gt;
                    &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                  &lt;/a&gt;
                  &lt;!-- End Logo --&gt;
                &lt;/div&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuHeight" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuHeight"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuHeight"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav"&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                    &lt;/li&gt;

                    &lt;!-- Dropdown --&gt;
                    &lt;li class="nav-item dropdown"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="navbarHeightDropdownSubMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/a&gt;

                      &lt;div class="dropdown-menu" aria-labelledby="navbarHeightDropdownSubMenu" style="min-width: 230px;"&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                        &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;!-- End Dropdown --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="navbarHeightMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Mega menu&lt;/a&gt;

                      &lt;div class="dropdown-menu w-100" aria-labelledby="navbarHeightMegaMenu"&gt;
                        &lt;div class="row"&gt;
                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;One&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3"&gt;
                            &lt;span class="dropdown-header"&gt;Four&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
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

  <h2 id="shadow" class="nue-docs-heading">
    Shadow <a class="anchorjs-link" href="#shadow" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>.navbar-shadow</code> to add shadow.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <header class="docs-navbar navbar navbar-expand-lg navbar-shadow navbar-end mb-3">
        <div class="container">
          <div class="navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="Nue">
              <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuShadow" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuShadow">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuShadow">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarShadowDropdownSubMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>

                  <div class="dropdown-menu" aria-labelledby="navbarShadowDropdownSubMenu" style="min-width: 230px;">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarShadowMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>

                  <div class="dropdown-menu w-100" aria-labelledby="navbarShadowMegaMenu">
                    <div class="row">
                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">One</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Two</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Three</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                      </div>

                      <div class="col-lg-3">
                        <span class="dropdown-header">Four</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
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
          &lt;header class="navbar navbar-expand-lg navbar-shadow navbar-end mb-3"&gt;
            &lt;div class="container"&gt;
              &lt;div class="navbar-nav-wrap"&gt;
                &lt;div class="navbar-brand-wrapper"&gt;
                  &lt;!-- Logo --&gt;
                  &lt;a class="navbar-brand" href="" aria-label="Nue"&gt;
                    &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                  &lt;/a&gt;
                  &lt;!-- End Logo --&gt;
                &lt;/div&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuShadow" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuShadow"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuShadow"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav"&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                    &lt;/li&gt;

                    &lt;!-- Dropdown --&gt;
                    &lt;li class="nav-item dropdown"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="navbarShadowDropdownSubMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/a&gt;

                      &lt;div class="dropdown-menu" aria-labelledby="navbarShadowDropdownSubMenu" style="min-width: 230px;"&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                        &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;!-- End Dropdown --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="navbarShadowMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Mega menu&lt;/a&gt;

                      &lt;div class="dropdown-menu w-100" aria-labelledby="navbarShadowMegaMenu"&gt;
                        &lt;div class="row"&gt;
                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;One&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3"&gt;
                            &lt;span class="dropdown-header"&gt;Four&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
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

  <h2 id="navbar-alignments" class="nue-docs-heading">
    Navbar alignments <a class="anchorjs-link" href="#navbar-alignments" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>By default, navbars are left aligned.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <header class="docs-navbar navbar navbar-expand-lg navbar-shadow mb-3">
        <div class="container">
          <div class="navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="Nue">
              <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuLeftAligned" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuLeftAligned">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuLeftAligned">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarLeftAlignedDropdownSubMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>

                  <div class="dropdown-menu" aria-labelledby="navbarLeftAlignedDropdownSubMenu" style="min-width: 230px;">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarLeftAlignedMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>

                  <div class="dropdown-menu w-100" aria-labelledby="navbarLeftAlignedMegaMenu">
                    <div class="row">
                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">One</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Two</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Three</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                      </div>

                      <div class="col-lg-3">
                        <span class="dropdown-header">Four</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
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
          &lt;header class="navbar navbar-expand-lg navbar-shadow navbar-end mb-3"&gt;
            &lt;div class="container"&gt;
              &lt;div class="navbar-nav-wrap"&gt;
                &lt;div class="navbar-brand-wrapper"&gt;
                  &lt;!-- Logo --&gt;
                  &lt;a class="navbar-brand" href="" aria-label="Nue"&gt;
                    &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                  &lt;/a&gt;
                  &lt;!-- End Logo --&gt;
                &lt;/div&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuLeftAligned" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuLeftAligned"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuLeftAligned"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav"&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                    &lt;/li&gt;

                    &lt;!-- Dropdown --&gt;
                    &lt;li class="nav-item dropdown"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="navbarLeftAlignedDropdownSubMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/a&gt;

                      &lt;div class="dropdown-menu" aria-labelledby="navbarLeftAlignedDropdownSubMenu" style="min-width: 230px;"&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                        &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;!-- End Dropdown --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="navbarLeftAlignedMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Mega menu&lt;/a&gt;

                      &lt;div class="dropdown-menu w-100" aria-labelledby="navbarLeftAlignedMegaMenu"&gt;
                        &lt;div class="row"&gt;
                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;One&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3"&gt;
                            &lt;span class="dropdown-header"&gt;Four&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
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

  <br/>
  <p>Use <code>.navbar-end</code> class to right align the navbar</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <header class="docs-navbar navbar navbar-expand-lg navbar-shadow navbar-end mb-3">
        <div class="container">
          <div class="navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="Nue">
              <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuRightAligned" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuRightAligned">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuRightAligned">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarRightAlignedDropdownSubMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>

                  <div class="dropdown-menu" aria-labelledby="navbarRightAlignedDropdownSubMenu" style="min-width: 230px;">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarRightAlignedMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>

                  <div class="dropdown-menu w-100" aria-labelledby="navbarRightAlignedMegaMenu">
                    <div class="row">
                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">One</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Two</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Three</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                      </div>

                      <div class="col-lg-3">
                        <span class="dropdown-header">Four</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
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
          &lt;header class="navbar navbar-expand-lg navbar-shadow navbar-end mb-3"&gt;
            &lt;div class="container"&gt;
              &lt;div class="navbar-nav-wrap"&gt;
                &lt;div class="navbar-brand-wrapper"&gt;
                  &lt;!-- Logo --&gt;
                  &lt;a class="navbar-brand" href="" aria-label="Nue"&gt;
                    &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                  &lt;/a&gt;
                  &lt;!-- End Logo --&gt;
                &lt;/div&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuRightAligned" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuRightAligned"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuRightAligned"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav"&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                    &lt;/li&gt;

                    &lt;!-- Dropdown --&gt;
                    &lt;li class="nav-item dropdown"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="navbarRightAlignedDropdownSubMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/a&gt;

                      &lt;div class="dropdown-menu" aria-labelledby="navbarRightAlignedDropdownSubMenu" style="min-width: 230px;"&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                        &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;!-- End Dropdown --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="navbarRightAlignedMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Mega menu&lt;/a&gt;

                      &lt;div class="dropdown-menu w-100" aria-labelledby="navbarRightAlignedMegaMenu"&gt;
                        &lt;div class="row"&gt;
                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;One&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3"&gt;
                            &lt;span class="dropdown-header"&gt;Four&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
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

  <h2 id="navbar-dropdown-menu-bordereless" class="nue-docs-heading">
    Dropdown menu borderless <a class="anchorjs-link" href="#navbar-dropdown-menu-bordereless" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>.navbar-dropdown-menu-borderless</code> class next to <code>.dropdown-menu</code> to drop the border color and border radius from a dropdown menu.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <header class="docs-navbar navbar navbar-expand-lg mb-3">
        <div class="container">
          <div class="navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="Nue">
              <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuBorderless" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuBorderless">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuBorderless">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarBorderlessDropdownSubMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>

                  <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarBorderlessDropdownSubMenu" style="min-width: 230px;">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarBorderlessMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>

                  <div class="dropdown-menu navbar-dropdown-menu-borderless w-100" aria-labelledby="navbarBorderlessMegaMenu">
                    <div class="row">
                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">One</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Two</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <span class="dropdown-header">Three</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                      </div>

                      <div class="col-lg-3">
                        <span class="dropdown-header">Four</span>

                        <a class="dropdown-item" href="#">One</a>
                        <a class="dropdown-item" href="#">Two</a>
                        <a class="dropdown-item" href="#">Three</a>
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
          &lt;header class="navbar navbar-expand-lg navbar-end mb-3"&gt;
            &lt;div class="container"&gt;
              &lt;div class="navbar-nav-wrap"&gt;
                &lt;div class="navbar-brand-wrapper"&gt;
                  &lt;!-- Logo --&gt;
                  &lt;a class="navbar-brand" href="" aria-label="Nue"&gt;
                    &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                  &lt;/a&gt;
                  &lt;!-- End Logo --&gt;
                &lt;/div&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuBorderless" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuBorderless"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuBorderless"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav"&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                    &lt;/li&gt;

                    &lt;!-- Dropdown --&gt;
                    &lt;li class="nav-item dropdown"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="navbarBorderlessDropdownSubMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/a&gt;

                      &lt;div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarBorderlessDropdownSubMenu" style="min-width: 230px;"&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                        &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                        &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;!-- End Dropdown --&gt;

                    &lt;!-- Nav Item --&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;a class="nav-link dropdown-toggle" href="#" id="navbarBorderlessMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Mega menu&lt;/a&gt;

                      &lt;div class="dropdown-menu navbar-dropdown-menu-borderless w-100" aria-labelledby="navbarBorderlessMegaMenu"&gt;
                        &lt;div class="row"&gt;
                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;One&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Two&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3 mb-3 mb-lg-0"&gt;
                            &lt;span class="dropdown-header"&gt;Three&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                          &lt;/div&gt;

                          &lt;div class="col-lg-3"&gt;
                            &lt;span class="dropdown-header"&gt;Four&lt;/span&gt;

                            &lt;a class="dropdown-item" href="#"&gt;One&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Two&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Three&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
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

  <h2 id="with-nue-mega-menu" class="nue-docs-heading">
    With <code>nue-mega-menu.js</code> <a class="anchorjs-link" href="#with-nue-mega-menu" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Want to add show/hide animations or change the event type to <code>hover</code>? <code>nue-mega-menu.js</code> is the way to do them and many more.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <header class="docs-navbar navbar navbar-expand-lg navbar-end navbar-light bg-white">
        <div class="container">
          <div class="js-mega-menu navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="Nue">
              <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuWithMegaMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuWithMegaMenu">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuWithMegaMenu">
              <ul class="navbar-nav">
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
                      <a class="nue-mega-menu-invoker dropdown-item dropdown-toggle" href="#" id="navbarWithMegaMenuDropdownSub" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sub dropdown</a>

                      <div class="nue-sub-menu dropdown-menu" aria-labelledby="navbarWithMegaMenuDropdownSub" style="min-width: 230px;">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nue-has-mega-menu nav-item">
                  <a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="navbarWithMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>

                  <div class="nue-mega-menu nue-position-right dropdown-menu w-100" aria-labelledby="navbarWithMegaMenu">
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
                &lt;a class="navbar-brand" href="" aria-label="Nue"&gt;
                  &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                &lt;/a&gt;
                &lt;!-- End Logo --&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavMenuWithMegaMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuWithMegaMenu"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavMenuWithMegaMenu"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav"&gt;
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
                          &lt;a class="nue-mega-menu-invoker dropdown-item dropdown-toggle" href="#" id="navbarWithMegaMenuDropdownSub" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Sub dropdown&lt;/a&gt;

                          &lt;div class="nue-sub-menu dropdown-menu" aria-labelledby="navbarWithMegaMenuDropdownSub" style="min-width: 230px;"&gt;
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
                      &lt;a class="nue-mega-menu-invoker nav-link dropdown-toggle" href="#" id="navbarWithMegaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Mega menu&lt;/a&gt;

                      &lt;!-- Mega Menu --&gt;
                      &lt;div class="nue-mega-menu nue-position-right dropdown-menu w-100" aria-labelledby="navbarWithMegaMenu"&gt;
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
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function() {
              // INITIALIZATION OF MEGA MENU
              // =======================================================
              new NueMegaMenu('.js-mega-menu', {
                desktop: {
                  position: 'left'
                }
              })
            });
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="user-dropdown" class="nue-docs-heading">
    User dropdown <a class="anchorjs-link" href="#user-dropdown" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <header class="docs-navbar navbar navbar-expand-lg navbar-end navbar-light bg-white">
        <div class="container">
          <div class="navbar-nav-wrap">
            <a class="navbar-brand" href="" aria-label="Nue">
              <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
            </a>

            <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavUserDropdown" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavUserDropdown">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>

            <nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavUserDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <div class="dropdown">
                    <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                      <div class="avatar avatar-sm avatar-circle">
                        <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="">
                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                      </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                      <div class="dropdown-item-text">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-sm avatar-circle">
                            <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="">
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h5 class="mb-0">Mark Williams</h5>
                            <p class="card-text text-body">mark@site.com</p>
                          </div>
                        </div>
                      </div>

                      <div class="dropdown-divider"></div>

                      <div class="dropdown">
                        <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false">Set status</a>

                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1">
                          <a class="dropdown-item" href="#">
                            <span class="legend-indicator bg-success me-1"></span> Available
                          </a>
                          <a class="dropdown-item" href="#">
                            <span class="legend-indicator bg-danger me-1"></span> Busy
                          </a>
                          <a class="dropdown-item" href="#">
                            <span class="legend-indicator bg-warning me-1"></span> Away
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#"> Reset status
                          </a>
                        </div>
                      </div>

                      <a class="dropdown-item" href="#">Profile &amp; account</a>
                      <a class="dropdown-item" href="#">Settings</a>

                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="avatar avatar-sm avatar-dark avatar-circle">
                              <span class="avatar-initials">Nue</span>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-2">
                            <h5 class="mb-0">Nue <span class="badge bg-primary rounded-pill text-uppercase ms-1">PRO</span></h5>
                            <span class="card-text">nue.example.com</span>
                          </div>
                        </div>
                      </a>

                      <div class="dropdown-divider"></div>

                      <div class="dropdown">
                        <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown2" data-bs-toggle="dropdown" aria-expanded="false">Customization</a>

                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown2">
                          <a class="dropdown-item" href="#">
                            Invite people
                          </a>
                          <a class="dropdown-item" href="#">
                            Analytics
                            <i class="bi-box-arrow-in-up-right"></i>
                          </a>
                          <a class="dropdown-item" href="#">
                            Customize Nue
                            <i class="bi-box-arrow-in-up-right"></i>
                          </a>
                        </div>
                      </div>

                      <a class="dropdown-item" href="#">Manage team</a>

                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item" href="#">Sign out</a>
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
              &lt;div class="navbar-nav-wrap"&gt;
                &lt;!-- Logo --&gt;
                &lt;a class="navbar-brand" href="" aria-label="Nue"&gt;
                  &lt;img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo"&gt;
                &lt;/a&gt;
                &lt;!-- End Logo --&gt;

                &lt;!-- Toggle --&gt;
                &lt;button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarNavUserDropdown" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavUserDropdown"&gt;
                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/button&gt;
                &lt;!-- End Toggle --&gt;

                &lt;nav class="navbar-nav-wrap-col collapse navbar-collapse" id="navbarNavUserDropdown"&gt;
                  &lt;!-- Navbar --&gt;
                  &lt;ul class="navbar-nav"&gt;
                    &lt;li class="nav-item"&gt;
                      &lt;!-- Account --&gt;
                      &lt;div class="dropdown"&gt;
                        &lt;a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation&gt;
                          &lt;div class="avatar avatar-sm avatar-circle"&gt;
                            &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt=""&gt;
                            &lt;span class="avatar-status avatar-sm-status avatar-status-success"&gt;&lt;/span&gt;
                          &lt;/div&gt;
                        &lt;/a&gt;

                        &lt;div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;"&gt;
                          &lt;div class="dropdown-item-text"&gt;
                            &lt;div class="d-flex align-items-center"&gt;
                              &lt;div class="avatar avatar-sm avatar-circle"&gt;
                                &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt=""&gt;
                              &lt;/div&gt;
                              &lt;div class="flex-grow-1 ms-3"&gt;
                                &lt;h5 class="mb-0"&gt;Mark Williams&lt;/h5&gt;
                                &lt;p class="card-text text-body"&gt;mark@site.com&lt;/p&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;

                          &lt;div class="dropdown-divider"&gt;&lt;/div&gt;

                          &lt;!-- Dropdown --&gt;
                          &lt;div class="dropdown"&gt;
                            &lt;a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false"&gt;Set status&lt;/a&gt;

                            &lt;div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1"&gt;
                              &lt;a class="dropdown-item" href="#"&gt;
                                &lt;span class="legend-indicator bg-success me-1"&gt;&lt;/span&gt; Available
                              &lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;
                                &lt;span class="legend-indicator bg-danger me-1"&gt;&lt;/span&gt; Busy
                              &lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;
                                &lt;span class="legend-indicator bg-warning me-1"&gt;&lt;/span&gt; Away
                              &lt;/a&gt;
                              &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                              &lt;a class="dropdown-item" href="#"&gt; Reset status
                              &lt;/a&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!-- End Dropdown --&gt;

                          &lt;a class="dropdown-item" href="#"&gt;Profile &amp; account&lt;/a&gt;
                          &lt;a class="dropdown-item" href="#"&gt;Settings&lt;/a&gt;

                          &lt;div class="dropdown-divider"&gt;&lt;/div&gt;

                          &lt;a class="dropdown-item" href="#"&gt;
                            &lt;div class="d-flex align-items-center"&gt;
                              &lt;div class="flex-shrink-0"&gt;
                                &lt;div class="avatar avatar-sm avatar-dark avatar-circle"&gt;
                                  &lt;span class="avatar-initials"&gt;Nue&lt;/span&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                              &lt;div class="flex-grow-1 ms-2"&gt;
                                &lt;h5 class="mb-0"&gt;Nue &lt;span class="badge bg-primary rounded-pill text-uppercase ms-1"&gt;PRO&lt;/span&gt;&lt;/h5&gt;
                                &lt;span class="card-text"&gt;nue.example.com&lt;/span&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/a&gt;

                          &lt;div class="dropdown-divider"&gt;&lt;/div&gt;

                          &lt;!-- Dropdown --&gt;
                          &lt;div class="dropdown"&gt;
                            &lt;a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown2" data-bs-toggle="dropdown" aria-expanded="false"&gt;Customization&lt;/a&gt;

                            &lt;div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown2"&gt;
                              &lt;a class="dropdown-item" href="#"&gt;
                                Invite people
                              &lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;
                                Analytics
                                &lt;i class="bi-box-arrow-in-up-right"&gt;&lt;/i&gt;
                              &lt;/a&gt;
                              &lt;a class="dropdown-item" href="#"&gt;
                                Customize Nue
                                &lt;i class="bi-box-arrow-in-up-right"&gt;&lt;/i&gt;
                              &lt;/a&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;!-- End Dropdown --&gt;

                          &lt;a class="dropdown-item" href="#"&gt;Manage team&lt;/a&gt;

                          &lt;div class="dropdown-divider"&gt;&lt;/div&gt;

                          &lt;a class="dropdown-item" href="#"&gt;Sign out&lt;/a&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;!-- End Account --&gt;
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
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function() {
              // INITIALIZATION OF BOOTSTRAP DROPDOWN
              // =======================================================
              NueBsDropdown.init()
            });
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="vertical" class="nue-docs-heading">
    Vertical <a class="anchorjs-link" href="#vertical" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Create a vertical navigation with <code>.navbar-vertical</code>.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="navbar navbar-vertical" style="max-width: 16rem;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Pages</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Users</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Navbar Vertical --&gt;
          &lt;div class="navbar navbar-vertical" style="max-width: 16rem;"&gt;
            &lt;!-- Navbar --&gt;
            &lt;ul class="navbar-nav navbar-nav-lg nav-tabs"&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
              &lt;/li&gt;

              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Pages&lt;/a&gt;
              &lt;/li&gt;

              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Users&lt;/a&gt;
              &lt;/li&gt;

              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Settings&lt;/a&gt;
              &lt;/li&gt;

              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link disabled" href="#"&gt;Disabled&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- End Navbar --&gt;
          &lt;/div&gt;
          &lt;!-- End Navbar Vertical --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="vertical-toggler" class="nue-docs-heading">
    Toggler <a class="anchorjs-link" href="#vertical-toggler" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Navbar will be collapsed below medium size resolution. Reduce browser size to see it in action.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="navbar navbar-vertical navbar-expand-md">
        <div class="d-grid flex-grow-1">
          <button type="button" class="navbar-toggler btn btn-white" data-bs-toggle="collapse" data-bs-target="#navbarTogglerNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarTogglerNavMenu">
            <span class="d-flex justify-content-between align-items-center">
              <span>Nav menu</span>

              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>

              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </span>
          </button>
        </div>

        <div id="navbarTogglerNavMenu" class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Pages</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Users</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Settings</a>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Navbar Vertical --&gt;
          &lt;div class="navbar navbar-vertical navbar-expand-md"&gt;
            &lt;!-- Navbar Toggle --&gt;
            &lt;div class="d-grid flex-grow-1"&gt;
              &lt;button type="button" class="navbar-toggler btn btn-white" data-bs-toggle="collapse" data-bs-target="#navbarTogglerNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarTogglerNavMenu"&gt;
                &lt;span class="d-flex justify-content-between align-items-center"&gt;
                  &lt;span&gt;Nav menu&lt;/span&gt;

                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;

                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/span&gt;
              &lt;/button&gt;
            &lt;/div&gt;
            &lt;!-- End Navbar Toggle --&gt;

            &lt;div id="navbarTogglerNavMenu" class="collapse navbar-collapse"&gt;
              &lt;!-- Navbar --&gt;
              &lt;ul class="navbar-nav"&gt;
                &lt;li class="nav-item"&gt;
                  &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                &lt;/li&gt;

                &lt;li class="nav-item"&gt;
                  &lt;a class="nav-link" href="#"&gt;Pages&lt;/a&gt;
                &lt;/li&gt;

                &lt;li class="nav-item"&gt;
                  &lt;a class="nav-link" href="#"&gt;Users&lt;/a&gt;
                &lt;/li&gt;

                &lt;li class="nav-item"&gt;
                  &lt;a class="nav-link" href="#"&gt;Settings&lt;/a&gt;
                &lt;/li&gt;

                &lt;li class="nav-item"&gt;
                  &lt;a class="nav-link disabled" href="#"&gt;Disabled&lt;/a&gt;
                &lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End Navbar --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Navbar Vertical --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="collapseable-menu" class="nue-docs-heading">
    Collapseable menu <a class="anchorjs-link" href="#collapseable-menu" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="navbar navbar-vertical navbar-expand-md">
        <div class="d-grid flex-grow-1">
          <button type="button" class="navbar-toggler btn btn-white" data-bs-toggle="collapse" data-bs-target="#navbarCollapseableMenuNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarCollapseableMenuNavMenu">
            <span class="d-flex justify-content-between align-items-center">
              <span>Nav menu</span>

              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>

              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </span>
          </button>
        </div>

        <div id="navbarCollapseableMenuNavMenu" class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>

            <li id="navbarVerticalMenuCollapseableMenu">
              <div class="nav-item">
                <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesCollapseableMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesCollapseableMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesCollapseableMenu">
                  <span class="nav-link-title">Users</span>
                </a>

                <div id="navbarVerticalMenuPagesCollapseableMenu" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenuCollapseableMenu">
                  <a class="nav-link" href="#">Overview</a>
                  <a class="nav-link" href="#">Leaderboard</a>
                  <a class="nav-link" href="#">Add User</a>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Settings</a>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Navbar Vertical --&gt;
          &lt;div class="navbar navbar-vertical navbar-expand-md"&gt;
            &lt;!-- Navbar Toggle --&gt;
            &lt;div class="d-grid flex-grow-1"&gt;
              &lt;button type="button" class="navbar-toggler btn btn-white" data-bs-toggle="collapse" data-bs-target="#navbarCollapseableMenuNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarCollapseableMenuNavMenu"&gt;
                &lt;span class="d-flex justify-content-between align-items-center"&gt;
                  &lt;span&gt;Nav menu&lt;/span&gt;

                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;

                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/span&gt;
              &lt;/button&gt;
            &lt;/div&gt;
            &lt;!-- End Navbar Toggle --&gt;

            &lt;div id="navbarCollapseableMenuNavMenu" class="collapse navbar-collapse"&gt;
              &lt;!-- Navbar --&gt;
              &lt;ul class="navbar-nav"&gt;
                &lt;li class="nav-item"&gt;
                  &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
                &lt;/li&gt;

                &lt;!-- Collapse --&gt;
                &lt;li id="navbarVerticalMenuCollapseableMenu"&gt;
                  &lt;div class="nav-item"&gt;
                    &lt;a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesCollapseableMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesCollapseableMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesCollapseableMenu"&gt;
                      &lt;span class="nav-link-title"&gt;Users&lt;/span&gt;
                    &lt;/a&gt;

                    &lt;div id="navbarVerticalMenuPagesCollapseableMenu" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenuCollapseableMenu"&gt;
                      &lt;a class="nav-link" href="#"&gt;Overview&lt;/a&gt;
                      &lt;a class="nav-link" href="#"&gt;Leaderboard&lt;/a&gt;
                      &lt;a class="nav-link" href="#"&gt;Add User&lt;/a&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;!-- End Collapse --&gt;

                &lt;li class="nav-item"&gt;
                  &lt;a class="nav-link" href="#"&gt;Settings&lt;/a&gt;
                &lt;/li&gt;

                &lt;li class="nav-item"&gt;
                  &lt;a class="nav-link disabled" href="#"&gt;Disabled&lt;/a&gt;
                &lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End Navbar --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Navbar Vertical --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="card-with-nav-tab" class="nue-docs-heading">
    Card with nav tab <a class="anchorjs-link" href="#card-with-nav-tab" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5" style="max-width: 15rem;">
        <div class="d-grid">
          <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenuCardTabs" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenuCardTabs">
            <span class="d-flex justify-content-between align-items-center">
              <span class="text-dark">Menu</span>

              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>

              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </span>
          </button>
        </div>

        <div id="navbarVerticalNavMenuCardTabs" class="collapse navbar-collapse">
          <div id="navbarSettingsCardWithNavTab" class="card card-navbar-nav nav nav-tabs nav-vertical">
            <span class="dropdown-header">Account</span>

            <a class="nav-link active" href="#">
              <i class="bi-house nav-icon"></i> Active
            </a>
            <div id="navbarVerticalMenuCardTabs">
              <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesCardTabs" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesCardTabs" aria-expanded="false" aria-controls="navbarVerticalMenuPagesCardTabs">
                <i class="bi-stickies nav-icon"></i>
                <span class="nav-link-title">Users</span>
              </a>

              <div id="navbarVerticalMenuPagesCardTabs" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenuCardTabs">
                <a class="nav-link" href="#">Overview</a>
                <a class="nav-link" href="#">Leaderboard</a>
                <a class="nav-link" href="#">Add User</a>
              </div>
            </div>
            <a class="nav-link" href="#">
              <i class="bi-app-indicator nav-icon"></i> Password
            </a>

            <div class="dropdown-divider"></div>

            <span class="dropdown-header">Settings</span>

            <a class="nav-link" href="#">
              <i class="bi-sliders nav-icon"></i> Settings
            </a>
            <a class="nav-link" href="#">
              <i class="bi-box-arrow-right nav-icon"></i> Log Out
            </a>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Navbar --&gt;
          &lt;div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5" style="max-width: 15rem;"&gt;
            &lt;!-- Navbar Toggle --&gt;
            &lt;div class="d-grid"&gt;
              &lt;button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenuCardTabs" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenuCardTabs"&gt;
                &lt;span class="d-flex justify-content-between align-items-center"&gt;
                  &lt;span class="text-dark"&gt;Menu&lt;/span&gt;

                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;

                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/span&gt;
              &lt;/button&gt;
            &lt;/div&gt;
            &lt;!-- End Navbar Toggle --&gt;

            &lt;!-- Navbar Collapse --&gt;
            &lt;div id="navbarVerticalNavMenuCardTabs" class="collapse navbar-collapse"&gt;
              &lt;div id="navbarSettingsCardWithNavTab" class="card card-navbar-nav nav nav-tabs nav-vertical"&gt;
                &lt;span class="dropdown-header"&gt;Account&lt;/span&gt;

                &lt;a class="nav-link active" href="#"&gt;
                  &lt;i class="bi-house nav-icon"&gt;&lt;/i&gt; Active
                &lt;/a&gt;
                &lt;!-- Collapse --&gt;
                &lt;div id="navbarVerticalMenuCardTabs"&gt;
                  &lt;a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesCardTabs" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesCardTabs" aria-expanded="false" aria-controls="navbarVerticalMenuPagesCardTabs"&gt;
                    &lt;i class="bi-stickies nav-icon"&gt;&lt;/i&gt;
                    &lt;span class="nav-link-title"&gt;Users&lt;/span&gt;
                  &lt;/a&gt;

                  &lt;div id="navbarVerticalMenuPagesCardTabs" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenuCardTabs"&gt;
                    &lt;a class="nav-link" href="#"&gt;Overview&lt;/a&gt;
                    &lt;a class="nav-link" href="#"&gt;Leaderboard&lt;/a&gt;
                    &lt;a class="nav-link" href="#"&gt;Add User&lt;/a&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Collapse --&gt;
                &lt;a class="nav-link" href="#"&gt;
                  &lt;i class="bi-app-indicator nav-icon"&gt;&lt;/i&gt; Password
                &lt;/a&gt;

                &lt;div class="dropdown-divider"&gt;&lt;/div&gt;

                &lt;span class="dropdown-header"&gt;Settings&lt;/span&gt;

                &lt;a class="nav-link" href="#"&gt;
                  &lt;i class="bi-sliders nav-icon"&gt;&lt;/i&gt; Settings
                &lt;/a&gt;
                &lt;a class="nav-link" href="#"&gt;
                  &lt;i class="bi-box-arrow-right nav-icon"&gt;&lt;/i&gt; Log Out
                &lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Navbar Collapse --&gt;
          &lt;/div&gt;
          &lt;!-- End Navbar --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="card-with-nav-pills" class="nue-docs-heading">
    Card with nav pills <a class="anchorjs-link" href="#card-with-nav-pills" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5" style="max-width: 15rem;">
        <div class="d-grid">
          <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenuCardPills" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenuCardPills">
            <span class="d-flex justify-content-between align-items-center">
              <span class="text-dark">Menu</span>

              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>

              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </span>
          </button>
        </div>

        <div id="navbarVerticalNavMenuCardPills" class="collapse navbar-collapse">
          <div id="navbarSettingsCardWithNav" class="card card-navbar-nav nav nav-pills nav-vertical">
            <span class="dropdown-header">Account</span>

            <a class="nav-link active" href="#">
              <i class="bi-house nav-icon"></i> Active
            </a>
            <div id="navbarVerticalMenuCardPills">
              <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesCardPills" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesCardPills" aria-expanded="false" aria-controls="navbarVerticalMenuPagesCardPills">
                <i class="bi-stickies nav-icon"></i>
                <span class="nav-link-title">Users</span>
              </a>

              <div id="navbarVerticalMenuPagesCardPills" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenuCardPills">
                <a class="nav-link" href="#">Overview</a>
                <a class="nav-link" href="#">Leaderboard</a>
                <a class="nav-link" href="#">Add User</a>
              </div>
            </div>
            <a class="nav-link" href="#">
              <i class="bi-app-indicator nav-icon"></i> Password
            </a>

            <div class="dropdown-divider"></div>

            <span class="dropdown-header">Settings</span>

            <a class="nav-link" href="#">
              <i class="bi-sliders nav-icon"></i> Settings
            </a>
            <a class="nav-link" href="#">
              <i class="bi-box-arrow-right nav-icon"></i> Log Out
            </a>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Navbar --&gt;
          &lt;div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5" style="max-width: 15rem;"&gt;
            &lt;!-- Navbar Toggle --&gt;
            &lt;div class="d-grid"&gt;
              &lt;button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenuCardPills" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenuCardPills"&gt;
                &lt;span class="d-flex justify-content-between align-items-center"&gt;
                  &lt;span class="text-dark"&gt;Menu&lt;/span&gt;

                  &lt;span class="navbar-toggler-default"&gt;
                    &lt;i class="bi-list"&gt;&lt;/i&gt;
                  &lt;/span&gt;

                  &lt;span class="navbar-toggler-toggled"&gt;
                    &lt;i class="bi-x"&gt;&lt;/i&gt;
                  &lt;/span&gt;
                &lt;/span&gt;
              &lt;/button&gt;
            &lt;/div&gt;
            &lt;!-- End Navbar Toggle --&gt;

            &lt;!-- Navbar Collapse --&gt;
            &lt;div id="navbarVerticalNavMenuCardPills" class="collapse navbar-collapse"&gt;
              &lt;div id="navbarSettingsCardWithNav" class="card card-navbar-nav nav nav-pills nav-vertical"&gt;
                &lt;span class="dropdown-header"&gt;Account&lt;/span&gt;

                &lt;a class="nav-link active" href="#"&gt;
                  &lt;i class="bi-house nav-icon"&gt;&lt;/i&gt; Active
                &lt;/a&gt;
                &lt;!-- Collapse --&gt;
                &lt;div id="navbarVerticalMenuCardPills"&gt;
                  &lt;a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesCardPills" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesCardPills" aria-expanded="false" aria-controls="navbarVerticalMenuPagesCardPills"&gt;
                    &lt;i class="bi-stickies nav-icon"&gt;&lt;/i&gt;
                    &lt;span class="nav-link-title"&gt;Users&lt;/span&gt;
                  &lt;/a&gt;

                  &lt;div id="navbarVerticalMenuPagesCardPills" class="nav-collapse collapse" data-bs-parent="#navbarVerticalMenuCardPills"&gt;
                    &lt;a class="nav-link" href="#"&gt;Overview&lt;/a&gt;
                    &lt;a class="nav-link" href="#"&gt;Leaderboard&lt;/a&gt;
                    &lt;a class="nav-link" href="#"&gt;Add User&lt;/a&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Collapse --&gt;
                &lt;a class="nav-link" href="#"&gt;
                  &lt;i class="bi-app-indicator nav-icon"&gt;&lt;/i&gt; Password
                &lt;/a&gt;

                &lt;div class="dropdown-divider"&gt;&lt;/div&gt;

                &lt;span class="dropdown-header"&gt;Settings&lt;/span&gt;

                &lt;a class="nav-link" href="#"&gt;
                  &lt;i class="bi-sliders nav-icon"&gt;&lt;/i&gt; Settings
                &lt;/a&gt;
                &lt;a class="nav-link" href="#"&gt;
                  &lt;i class="bi-box-arrow-right nav-icon"&gt;&lt;/i&gt; Log Out
                &lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Navbar Collapse --&gt;
          &lt;/div&gt;
          &lt;!-- End Navbar --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="responsive-behaviors" class="nue-docs-heading">
    Responsive behaviors <a class="anchorjs-link" href="#responsive-behaviors" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Placement classes can utilize <code>.navbar-*{-sm|-md|-lg|-xl}</code>. Learn more <a class="link" href="#behaviors">placement behaviors</a>.</p>

  <p>Navbars can utilize <code>.navbar-toggler</code>, <code>.navbar-collapse</code>, and <code>.navbar-expand{-sm|-md|-lg|-xl}</code> classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.</p>

  <p>For navbars that never collapse, add the <code>.navbar-expand</code> class on the navbar. For navbars that always collapse, don't add any <code>.navbar-expand</code> class.</p>

  <h2 id="methods" class="nue-docs-heading">
    Methods <a class="anchorjs-link" href="#methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-nue-header-options='{}'</code>.</p>

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
              <p><code>fixMoment</code></p>
            </td>
            <td>The distance after which the <code>js-navbar-fix-moment</code> class will be added to the initialized element, which initializes the animation specified in <code>fixEffect</code></td>
            <td><code>0</code></td>
          </tr>

          <tr>
            <td>
              <p><code>fixMomentClasses</code></p>
            </td>
            <td>
              If the header contains elements with the class navbar-section, then it adds the classes specified in
              <pre class="rounded">
                <code class="language-html" data-lang="html">
                  data-nue-header-item-options='{
                    "fixMomentClasses": "bg-dark"
                  }'
                </code>
              </pre>
              Otherwise, it searches for the given parameter in <code>data-nue-header-options</code> and adds classes to the header. These classes are added when the scroll value is greater than or equal to the value in <code>fixMoment</code>
            </td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>fixMomentExclude</code></p>
            </td>
            <td>
              If the header contains elements with the class <code>navbar-section</code>, then removes the classes specified in the elements
              <pre class="rounded">
                <code class="language-html" data-lang="html">
                  data-nue-header-item-options='{
                    "fixMomentExclude": "bg-white"
                  }'
                </code>
              </pre>
              Otherwise, it looks for this parameter in <code>data-nue-header-options</code> and removes the classes from the header. These classes are deleted when the scroll value is greater than or equal to the value in <code>fixMoment</code>
            </td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>fixEffect</code></p>
            </td>
            <td>Determines with what effect the initialized element disappears. There are 2 options: <code>slide</code>, <code>fade</code></td>
            <td><code>'slide'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>breakpoint</code></p>
            </td>
            <td>Determines with what permission the plugin is initialized.</td>
            <td><code>'lg'</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <h2 id="placement-classes" class="nue-docs-heading">
    Placement classes <a class="anchorjs-link" href="#placement-classes" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>List of available classes and their descriptions.</p>

  <div class="card">
    <div class="table-responsive">
      <table class="table table-thead-bordered">
        <thead class="thead-light">
          <tr>
            <th>Parameters</th>
            <th style="width: 50%;">Description</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <p><code>.navbar-absolute-{media-type}-top</code></p>
            </td>
            <td>Practically the same as static, but the geometry of this type of header is not taken into account when rendering the page (because of <code>position: absolute;</code>). This type of header is well suited for transparent/half-transparent header designs that are displayed on top of the slider/hero/etc. Its geometry is taken into account when rendering a page.</td>
          </tr>

          <tr>
            <td>
              <p><code>.navbar-sticky-{media-type}-top</code></p>
            </td>
            <td>It is displayed as sticking to the top of the screen always (<code>position: fixed; top: 0;</code>). The geometry of this header is also excluded from the calculation of the positioning of all elements on the page.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <h2 id="behaviors" class="nue-docs-heading">
    Behaviors <a class="anchorjs-link" href="#behaviors" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>List of available classes and their descriptions.</p>

  <div class="card mb-7">
    <div class="table-responsive">
      <table class="table table-thead-bordered">
        <thead class="thead-light">
          <tr>
            <th>Parameters</th>
            <th style="width: 50%;">Description</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <p><code>.navbar-show-hide</code></p>
            </td>
            <td>
              Show/hide an item when scrolling to the user specified time. This moment is given in the form of the number of scrolled pixels, through the attribute <code>data-navbar-fix-moment=""</code>. There are 3 available options for how to show/hide an element using the <code>data-navbar-fix-effect=""</code> attribute:

              <ul>
                <li>slide</li>
                <li>fade</li>
                <li>show-hide</li>
              </ul>
            </td>
          </tr>

          <tr>
            <td>
              <p><code>.navbar-toggle</code></p>
            </td>
            <td>Show/hide one of the header sections (preferably the very first) at the user specified time. This moment is specified as the number of scrolled pixels, through the attribute <code>data-navbar-fix-moment=""</code>. For this, the section itself needs to be given the class <code>.navbar-section-hidden</code>.</td>
          </tr>

          <tr>
            <td>
              <p><code>.navbar-invulnerable<span>-{media-type}</span></code></p>
            </td>
            <td>
              This class is auxiliary and is used to reset the previous behavior (with the previous permission, if the user has changed the window size) on a certain viewport. For example, if the user wants to open/show a section on <code>-xs, -sm</code>, but not higher. (Because Nue alike Bootstrap is developed mobile first, a strategy in which we optimize code for mobile devices first and then scale up components as necessary using CSS media queries.), having set <code>-sm</code> it will work and on permissions above, in order to prevent it use this class.<br>For example:

              <pre class="rounded">
                <code class="language-html" data-lang="html">
                  &lt;header class="navbar-toggle-section navbar-invulnerable-md"&gt;
                    ...
                  &lt;/header&gt;
                </code>
              </pre>

              here the behavior of <code>toggle-section</code> will work until the resolution is <code>-md (that is, xs, sm)</code>, on viewport <code>-md</code> it will not work.
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <h2 id="behaviors-examples" class="nue-docs-heading">
    Behavior examples <a class="anchorjs-link" href="#behaviors-examples" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <div class="card">
    <div class="table-responsive">
      <table class="table table-thead-bordered">
        <thead class="thead-light">
          <tr>
            <th>These placement classes can have the following behavior classes</th>
            <th style="width: 50%;">Description</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <p><code>.navbar-absolute-{media-type}-top</code></p>
            </td>
            <td>
              <ul>
                <li><code>.navbar-show-hide-{media-type}</code></li>
                <li><code>.navbar-change-logo-{media-type}</code></li>
                <li><code>.navbar-change-appearance-{media-type}</code></li>
              </ul>
            </td>
          </tr>

          <tr>
            <td>
              <p><code>.navbar-sticky-{media-type}-top</code></p>
            </td>
            <td>
              <ul>
                <li><code>.navbar-show-hide-{media-type}</code></li>
                <li><code>.navbar-change-logo-{media-type}</code></li>
                <li><code>.navbar-change-appearance-{media-type}</code></li>
                <li><code>.navbar-toggle-section-{media-type}</code></li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection