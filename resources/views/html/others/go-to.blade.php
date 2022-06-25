@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Go To')

@section('content')
  <x-nue::docs::header>
    Go To
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF GO TO
          // =======================================================
          document.querySelectorAll('.js-go-to').forEach(item => {
            new NueGoTo(item).init()
          })
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="example" class="nue-docs-heading">
    Example <a class="anchorjs-link" href="#example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Below is a <em>static</em> Go to (meaning its <code>position</code> have been overridden for demonstration purposes. However the HTML markups in the clipboard are not).</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <a class="go-to position-relative d-inline-flex" href="javascript:;">
        <i class="bi-chevron-up"></i>
      </a>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Go to --&gt;
          &lt;a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
             data-nue-go-to-options='{
               "offsetTop": 700,
               "position": {
                 "init": {
                   "right": 32
                 },
                 "show": {
                   "bottom": 32
                 },
                 "hide": {
                   "bottom": -32
                 }
               }
             }'&gt;
            &lt;i class="bi-chevron-up"&gt;&lt;/i&gt;
          &lt;/a&gt;
          &lt;!-- End Go to --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="referenced-to-a-page" class="nue-docs-heading">
    Referenced to a page <a class="anchorjs-link" href="#referenced-to-a-page" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <a class="go-to position-relative d-inline-flex" href="" data-nue-go-to-options='{
           "isReferencedToOtherPage": 700
         }'>
        <i class="bi-chevron-up"></i>
      </a>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Go to --&gt;
          &lt;a class="js-go-to go-to position-fixed" href="" style="visibility: hidden;"
             data-nue-go-to-options='{
               "isReferencedToOtherPage": 700
               "offsetTop": 700,
               "position": {
                 "init": {
                   "right": 32
                 },
                 "show": {
                   "bottom": 32
                 },
                 "hide": {
                   "bottom": -32
                 }
               }
             }'&gt;
            &lt;i class="bi-chevron-up"&gt;&lt;/i&gt;
          &lt;/a&gt;
          &lt;!-- End Go to --&gt;
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
            <th>Parameters</th>
            <th style="width: 50%;">Description</th>
            <th class="text-nowrap">Default value</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><code>targetSelector</code></td>
            <td>An element to which the browser window will scroll, by clicking on the element to be initialized</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td><code>compensationSelector</code></td>
            <td>An element whose height will be taken into account when calculating the point, upon reaching which the scroll will end</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td><code>animationInit</code></td>
            <td>Name of the class that is responsible for the activation of css animation</td>
            <td><code>'animated'</code></td>
          </tr>

          <tr>
            <td><code>animationIn</code></td>
            <td>Name of the class, css-animation, which is given when the initialized element</td>
            <td><code>'fadeIn'</code></td>
          </tr>

          <tr>
            <td><code>animationOut</code></td>
            <td>Name of the class, css-animation, which is given when the initialized element disappears</td>
            <td><code>'fadeOut'</code></td>
          </tr>

          <tr>
            <td><code>duration</code></td>
            <td>Animation duration</td>
            <td><code>400</code></td>
          </tr>

          <tr>
            <td><code>offsetTop</code></td>
            <td>Distance that must be scrolled for the initialized object to appear</td>
            <td><code>0</code></td>
          </tr>

          <tr>
            <td><code>position.init</code></td>
            <td>CSS properties <code>top</code> || <code>bottom</code> || <code>left</code> || <code>right</code>, which are added when the element is initialized</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td><code>position.hide</code></td>
            <td>CSS properties <code>top</code> || <code>bottom</code> || <code>left</code> || <code>right</code>, which are added when the element is disappears</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td><code>position.show</code></td>
            <td>CSS properties <code>top</code> || <code>bottom</code> || <code>left</code> || <code>right</code>, which are added when an element appears</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td><code>isReferencedToOtherPage</code></td>
            <td>if <code>true</code>, then allows you to go to another page, disabling the scroll function to the element specified in <code>targetSelector</code></td>
            <td><code>null</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection