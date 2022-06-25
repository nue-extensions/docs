@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Copy to Clipboard')

@section('js')
  <script>
    (function() {
      // INITIALIZATION OF CLIPBOARD
      // =======================================================
      Nue.components.NueClipboard.init('.js-clipboard')
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Copy to Clipboard
    <x-slot:link>https://clipboardjs.com/</x-slot:link>
    <x-slot:label>Dokumentasi Clipboard.js</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    How to use <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Sisipkan script berikut, sebelum tag penutup <code>&lt;/body&gt;</code>, agar bisa digunakan.</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF CLIPBOARD
          // =======================================================
          Nue.components.NueClipboard.init('.js-clipboard')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <br/>
  <x-nue::docs::example i="1">
    <x-slot:preview>
      <div class="input-group input-group-merge">
        <input type="text" id="tooltipExample" class="form-control" value="I am a tooltip example">

        <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard!" data-nue-clipboard-options='{
             "type": "tooltip",
             "successText": "Copied!",
             "contentTarget": "#tooltipExample"
           }'>
          <i class="bi-clipboard"></i>
        </a>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Input Group --&gt;
          &lt;div class="input-group input-group-merge"&gt;
            &lt;input type="text" id="tooltipExample" class="form-control" value="I am a tooltip example"&gt;

            &lt;a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard!"
               data-nue-clipboard-options='{
                 "type": "tooltip",
                 "successText": "Copied!",
                 "contentTarget": "#tooltipExample"
               }'&gt;
              &lt;i class="bi-clipboard"&gt;&lt;/i&gt;
            &lt;/a&gt;
          &lt;/div&gt;
          &lt;!-- End Input Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="change-icon" class="nue-docs-heading">
    Change icons <a class="anchorjs-link" href="#change-icon" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="2">
    <x-slot:preview>
      <div class="input-group input-group-merge">
        <input type="text" id="iconExample" class="form-control" value="I am an icon example">

        <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-nue-clipboard-options='{
             "contentTarget": "#iconExample",
             "classChangeTarget": "#iconExampleLinkIcon",
             "defaultClass": "bi-clipboard",
             "successClass": "bi-check"
           }'>
          <i id="iconExampleLinkIcon" class="bi-clipboard"></i>
        </a>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Input Group --&gt;
          &lt;div class="input-group input-group-merge"&gt;
            &lt;input type="text" id="iconExample" class="form-control" value="I am an icon example"&gt;

            &lt;a class="js-clipboard input-group-append input-group-text" href="javascript:;"
               data-nue-clipboard-options='{
                 "contentTarget": "#iconExample",
                 "classChangeTarget": "#iconExampleLinkIcon",
                 "defaultClass": "bi-clipboard",
                 "successClass": "bi-check"
               }'&gt;
              &lt;i id="iconExampleLinkIcon" class="bi-clipboard"&gt;&lt;/i&gt;
            &lt;/a&gt;
          &lt;/div&gt;
          &lt;!-- End Input Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="cut-to-clipboard" class="nue-docs-heading">
    Cut to clipboard <a class="anchorjs-link" href="#cut-to-clipboard" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Tambahkan <code>action="cut"</code></p>

  <x-nue::docs::example i="3">
    <x-slot:preview>
      <div class="mb-4">
        <textarea id="cutExample" class="form-control">Cut text example in textarea.</textarea>
      </div>

      <button class="js-clipboard btn btn-primary" data-bs-toggle="tooltip" title="Copy to clipboard!" data-nue-clipboard-options='{
               "action": "cut",
               "type": "tooltip",
               "successText": "Copied!",
               "contentTarget": "#cutExample"
             }'>
        Cut to clipboard
      </button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="mb-4"&gt;
            &lt;textarea id="cutExample" class="form-control"&gt;Cut text example in textarea.&lt;/textarea&gt;
          &lt;/div&gt;

          &lt;button class="js-clipboard btn btn-primary" data-bs-toggle="tooltip" title="Copy to clipboard!"
                  data-nue-clipboard-options='{
                   "action": "cut",
                   "type": "tooltip",
                   "successText": "Copied!",
                   "contentTarget": "#cutExample"
                 }'&gt;
            Cut to clipboard
          &lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="modal-example" class="nue-docs-heading">
    Modal example <a class="anchorjs-link" href="#modal-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="4">
    <x-slot:preview>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Open modal
      </button>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Copy to Clipboard</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group input-group-merge">
                <input type="text" id="modalExample" class="form-control" value="I am a modal example">

                <a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard!" data-nue-clipboard-options='{
                     "type": "tooltip",
                     "successText": "Copied!",
                     "contentTarget": "#modalExample",
                     "container": "#exampleModal"
                   }'>
                  <i class="bi-clipboard"></i>
                </a>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Button trigger modal --&gt;
          &lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"&gt;
            Open modal
          &lt;/button&gt;
          &lt;!-- End Button trigger modal --&gt;

          &lt;!-- Modal --&gt;
          &lt;div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
            &lt;div class="modal-dialog"&gt;
              &lt;div class="modal-content"&gt;
                &lt;div class="modal-header"&gt;
                  &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Copy to Clipboard&lt;/h5&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="modal-body"&gt;
                  &lt;!-- Input Group --&gt;
                  &lt;div class="input-group input-group-merge"&gt;
                    &lt;input type="text" id="modalExample" class="form-control" value="I am a modal example"&gt;

                    &lt;a class="js-clipboard input-group-append input-group-text" href="javascript:;" data-bs-toggle="tooltip" title="Copy to clipboard!"
                       data-nue-clipboard-options='{
                         "type": "tooltip",
                         "successText": "Copied!",
                         "contentTarget": "#modalExample",
                         "container": "#exampleModal"
                       }'&gt;
                      &lt;i class="bi-clipboard"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;
                  &lt;!-- End Input Group --&gt;
                &lt;/div&gt;
                &lt;div class="modal-footer"&gt;
                  &lt;button type="button" class="btn btn-secondary" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
                  &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Modal --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="methods" class="nue-docs-heading">
    Methods <a class="anchorjs-link" href="#methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

      <div class="card overflow-hidden">
        <div class="table-responsive">
          <table class="table table-thead-bordered card-table">
            <thead class="thead-light">
              <tr>
                <th>Parameters</th>
                <th style="width: 50%;">Description</th>
                <th class="text-nowrap">Default value</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td><code>type</code></td>
                <td>Callback type.</td>
                <td><code>null</code></td>
              </tr>

              <tr>
                <td><code>contentTarget</code></td>
                <td>Content.</td>
                <td><code>null</code></td>
              </tr>

              <tr>
                <td><code>classChangeTarget</code></td>
                <td>Class to be changed.</td>
                <td><code>null</code></td>
              </tr>

              <tr>
                <td><code>defaultClass</code></td>
                <td>Default class for change target.</td>
                <td><code>null</code></td>
              </tr>

              <tr>
                <td><code>successText</code></td>
                <td>Add text when copy to clipboard is success.</td>
                <td><code>null</code></td>
              </tr>

              <tr>
                <td><code>successClass</code></td>
                <td>Add class when copy to clipboard is success.</td>
                <td><code>null</code></td>
              </tr>

              <tr>
                <td><code>originalTitle</code></td>
                <td>Default title for tooltip.</td>
                <td><code>null</code></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
@endsection
