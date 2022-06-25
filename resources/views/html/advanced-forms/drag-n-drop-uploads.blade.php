@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Drag n Drop Uploads')

@section('js')
  <script>
    // INITIALIZATION OF DROPZONE
    // =======================================================
    Nue.components.NueDropzone.init('.js-dropzone')
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Drag’ n’ Drop File Uploads
    <x-slot:description>Drag'n'drop file-attach uploads with image previews.</x-slot:description>
    <x-slot:link>https://www.dropzonejs.com/</x-slot:link>
    <x-slot:label>Dokumentasi Dropzone.js</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF DROPZONE
          // =======================================================
          Nue.components.NueDropzone.init('.js-dropzone')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <form>
        <div id="basicExampleDropzone" class="js-dropzone row dz-dropzone dz-dropzone-card">
          <div class="dz-message">
            <img class="avatar avatar-xl avatar-4x3 mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-browse.svg" alt="" data-nue-theme-appearance="default">
            <img class="avatar avatar-xl avatar-4x3 mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations-light/oc-browse.svg" alt="" data-nue-theme-appearance="dark">

            <h5>Drag and drop your file here</h5>

            <p class="mb-2">or</p>

            <span class="btn btn-white btn-sm">Browse files</span>
          </div>
        </div>
      </form>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;form&gt;
            &lt;!-- Dropzone --&gt;
            &lt;div id="basicExampleDropzone" class="js-dropzone row dz-dropzone dz-dropzone-card"&gt;
              &lt;div class="dz-message"&gt;
                &lt;img class="avatar avatar-xl avatar-4x3 mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-browse.svg" alt=""&gt;

                &lt;h5&gt;Drag and drop your file here&lt;/h5&gt;

                &lt;p class="mb-2"&gt;or&lt;/p&gt;

                &lt;span class="btn btn-white btn-sm"&gt;Browse files&lt;/span&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Dropzone --&gt;
          &lt;/form&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="modal-example" class="nue-docs-heading">
    Modal example <a class="anchorjs-link" href="#modal-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Open modal</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Dropzone</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form>
                <div id="modalDropzone" class="js-dropzone row dz-dropzone dz-dropzone-card">
                  <div class="dz-message">
                    <img class="avatar avatar-xl avatar-4x3 mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-browse.svg" alt="" data-nue-theme-appearance="default">
                    <img class="avatar avatar-xl avatar-4x3 mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations-light/oc-browse.svg" alt="" data-nue-theme-appearance="dark">

                    <h5>Drag and drop your file here</h5>

                    <p class="mb-2">or</p>

                    <span class="btn btn-white btn-sm">Browse files</span>
                  </div>
                </div>
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"&gt;Open modal&lt;/button&gt;

          &lt;!-- Modal --&gt;
          &lt;div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
            &lt;div class="modal-dialog"&gt;
              &lt;div class="modal-content"&gt;
                &lt;div class="modal-header"&gt;
                  &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Dropzone&lt;/h5&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;

                &lt;div class="modal-body"&gt;
                  &lt;form&gt;
                    &lt;!-- Dropzone --&gt;
                    &lt;div id="modalDropzone" class="js-dropzone row dz-dropzone dz-dropzone-card"&gt;
                      &lt;div class="dz-message"&gt;
                        &lt;img class="avatar avatar-xl avatar-4x3 mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-browse.svg" alt=""&gt;

                        &lt;h5&gt;Drag and drop your file here&lt;/h5&gt;

                        &lt;p class="mb-2"&gt;or&lt;/p&gt;

                        &lt;span class="btn btn-white btn-sm"&gt;Browse files&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Dropzone --&gt;
                  &lt;/form&gt;
                &lt;/div&gt;

                &lt;div class="modal-footer"&gt;
                  &lt;button type="button" class="btn btn-white" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
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
            <td>
              <p><code>allowTypes</code></p>
            </td>
            <td>Supported file types. If empty all supported.</td>
            <td><code>[]</code></td>
          </tr>

          <tr>
            <td>
              <p><code>maxFileSize</code></p>
            </td>
            <td>Max size for uploading file.</td>
            <td><code>1024</code></td>
          </tr>

          <tr>
            <td>
              <p><code>mode</code></p>
            </td>
            <td>Supported two mods (image/simple). image - show image after uploading. simple - show file name after uploading.</td>
            <td><code>simple</code></td>
          </tr>

          <tr>
            <td>
              <p><code>targetAttr</code></p>
            </td>
            <td>Element selector with src for <code>image</code> mode.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>textTarget</code></p>
            </td>
            <td>Element selector for <code>simple</code> mode.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>resetTarget</code></p>
            </td>
            <td>Element selector to reset form.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>errorMessage</code></p>
            </td>
            <td>Error message text if the file size is larger than the allowed.</td>
            <td><code>'File is too big!'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>typeErrorMessage</code></p>
            </td>
            <td>Error message text if file type is not supported.</td>
            <td><code>'Unsupported file type'</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
