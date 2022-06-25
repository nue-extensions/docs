@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Navbar Vertical Aside')

@section('content')
  <x-nue::docs::header>
    Navbar Vertical Aside
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    How to use <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code></p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF SCROLLSPY
          // =======================================================
          new bootstrap.ScrollSpy(document.body, {
            target: '#navbarVerticalNavMenuSettingsEg',
            offset: 10
          })

          new NueScrollspy('#navbarVerticalNavMenuEg', {
            breakpoint: 'lg'
          })
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="methods" class="nue-docs-heading">
    Methods <a class="anchorjs-link" href="#methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <div class="card overflow-hidden">
    <div class="table-responsive">
      <table class="table table-thead-bordered card-table">
        <thead class="thead-light">
          <tr>
            <th>Parameter</th>
            <th style="width: 50%;">Deskripsi</th>
            <th class="text-nowrap">Nilai default</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><code>mainContainer</code></td>
            <td>Page container</td>
            <td><code>body</code></td>
          </tr>

          <tr>
            <td><code>minClass</code></td>
            <td>Class for sidebar on mini mode</td>
            <td><code>.navbar-vertical-aside-mini-mode</code></td>
          </tr>

          <tr>
            <td><code>closedClass</code></td>
            <td>Class for sidebar when closed</td>
            <td><code>.navbar-vertical-aside-closed-mode</code></td>
          </tr>

          <tr>
            <td><code>transitionOnClassName</code></td>
            <td>Class for transition effect</td>
            <td><code>.navbar-vertical-aside-transition-on</code></td>
          </tr>

          <tr>
            <td><code>mobileOverlayClass</code></td>
            <td>Class for overlay</td>
            <td><code>.navbar-vertical-aside-mobile-overlay</code></td>
          </tr>

          <tr>
            <td><code>toggleInvokerClass</code></td>
            <td>Element for toggle sidebar</td>
            <td><code>.navbar-vertical-aside-toggle-invoker</code></td>
          </tr>

          <tr>
            <td><code>subMenuClass</code></td>
            <td>Submenu class</td>
            <td><code>.navbar-vertical-aside-submenu</code></td>
          </tr>

          <tr>
            <td><code>subMenuInvokerClass</code></td>
            <td>Element for toggle submenu in sidebar</td>
            <td><code>.navbar-vertical-aside-open-submenu-invoker</code></td>
          </tr>

          <tr>
            <td><code>subMenuInvokerActiveClass</code></td>
            <td>Class for opened submenu in sidebar</td>
            <td><code>.show</code></td>
          </tr>

          <tr>
            <td><code>hasSubMenuClass</code></td>
            <td>The element that contains the submenu</td>
            <td><code>.navbar-vertical-aside-has-menu</code></td>
          </tr>

          <tr>
            <td><code>subMenuAnimationSpeed</code></td>
            <td>Animation speed for submenu</td>
            <td><code>200</code></td>
          </tr>

          <tr>
            <td><code>subMenuOpenEvent</code></td>
            <td>Action which will be toggle submenu (hover, click)</td>
            <td><code>hover</code></td>
          </tr>

          <tr>
            <td><code>showClassNames</code></td>
            <td>Add class to main container to control the display sidebar</td>
            <td><code>
              showClassNames: {
                xs: 'navbar-vertical-aside-show-xs',
                sm: 'navbar-vertical-aside-show-sm',
                md: 'navbar-vertical-aside-show-md',
                lg: 'navbar-vertical-aside-show-lg',
                xl: 'navbar-vertical-aside-show-xl'
                },
            </code></td>
          </tr>

          <tr>
            <td><code>onMini</code></td>
            <td>Callback event, called when sidebar is mini mode</td>
            <td><code>() {}</code></td>
          </tr>

          <tr>
            <td><code>onFull</code></td>
            <td>Callback event, called when sidebar is full mode</td>
            <td><code>() {}</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection