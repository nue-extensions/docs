@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Field Attachment')

@section('js')
  <script>
    // INITIALIZATION OF FILE ATTACH
    // =======================================================
    new NueFileAttach('.js-file-attach')
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    File Attachments
    <x-slot:description>File attachment library.</x-slot:description>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF FILE ATTACH
          // =======================================================
          new NueFileAttach('.js-file-attach')
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
        <label for="basicFormFile" class="js-file-attach form-label" data-nue-file-attach-options='{
                "textTarget": "[for=\"customFile\"]"
               }'>File input example</label>
        <input class="form-control" type="file" id="basicFormFile">
      </form>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;form&gt;
            &lt;label for="basicFormFile" class="js-file-attach form-label"
                   data-nue-file-attach-options='{
                    "textTarget": "[for=\"customFile\"]"
                   }'&gt;File input example&lt;/label&gt;
            &lt;input class="form-control" type="file" id="basicFormFile"&gt;
          &lt;/form&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="custom-file-btn" class="nue-docs-heading">
    Custom file button <a class="anchorjs-link" href="#custom-file-btn" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <form>
        <label for="btnAttachFormFile" class="js-file-attach form-attachment-btn btn btn-sm btn-primary" data-nue-file-attach-options='{
                "textTarget": "[for=\"customFile\"]"
               }'>File input example</label>
        <input class="form-attachment-btn-label" type="file" id="btnAttachFormFile">
      </form>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;form&gt;
            &lt;label for="btnAttachFormFile" class="js-file-attach form-attachment-btn btn btn-sm btn-primary"
                   data-nue-file-attach-options='{
                    "textTarget": "[for=\"customFile\"]"
                   }'&gt;File input example&lt;/label&gt;
            &lt;input class="form-attachment-btn-label" type="file" id="btnAttachFormFile"&gt;
          &lt;/form&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="avatar-uploader" class="nue-docs-heading">
    Avatar uploader <a class="anchorjs-link" href="#avatar-uploader" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <form>
        <div class="d-flex align-items-center">
          <label class="avatar avatar-xl avatar-circle" for="avatarUploader">
            <img id="avatarImg" class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt="">
          </label>

          <div class="d-flex gap-3 ms-4">
            <div class="form-attachment-btn btn btn-sm btn-primary">Upload photo
              <input type="file" class="js-file-attach form-attachment-btn-label" id="avatarUploader" data-nue-file-attach-options='{
                        "textTarget": "#avatarImg",
                        "mode": "image",
                        "targetAttr": "src",
                        "resetTarget": ".js-file-attach-reset-img",
                        "resetImg": "https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg",
                        "allowTypes": [".png", ".jpeg", ".jpg"]
                     }'>
            </div>

            <button type="button" class="js-file-attach-reset-img btn btn-white btn-sm">Delete</button>
          </div>
        </div>
      </form>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;form&gt;
            &lt;!-- Media --&gt;
            &lt;div class="d-flex align-items-center"&gt;
              &lt;!-- Avatar --&gt;
              &lt;label class="avatar avatar-xl avatar-circle" for="avatarUploader"&gt;
                &lt;img id="avatarImg" class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt=""&gt;
              &lt;/label&gt;

              &lt;div class="d-flex gap-3 ms-4"&gt;
                &lt;div class="form-attachment-btn btn btn-sm btn-primary"&gt;Upload photo
                  &lt;input type="file" class="js-file-attach form-attachment-btn-label" id="avatarUploader"
                         data-nue-file-attach-options='{
                            "textTarget": "#avatarImg",
                            "mode": "image",
                            "targetAttr": "src",
                            "resetTarget": ".js-file-attach-reset-img",
                            "resetImg": "https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg",
                            "allowTypes": [".png", ".jpeg", ".jpg"]
                         }'&gt;
                &lt;/div&gt;
                &lt;!-- End Avatar --&gt;

                &lt;button type="button" class="js-file-attach-reset-img btn btn-white btn-sm"&gt;Delete&lt;/button&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Media --&gt;
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
              <h5 class="modal-title" id="exampleModalLabel">File attachment</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form>
                <div class="d-flex align-items-center">
                  <label class="avatar avatar-xl avatar-circle" for="avatarModalUploader">
                    <img id="avatarModalImg" class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt="">
                  </label>

                  <div class="d-flex gap-3 ms-4">
                    <div class="form-attachment-btn btn btn-sm btn-primary">Upload photo
                      <input type="file" class="js-file-attach form-attachment-btn-label" id="avatarModalUploader" data-nue-file-attach-options='{
                                "textTarget": "#avatarModalImg",
                                "mode": "image",
                                "targetAttr": "src",
                                "resetTarget": ".js-file-attach-reset-img",
                                "resetImg": "https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg",
                                "allowTypes": [".png", ".jpeg", ".jpg"]
                             }'>
                    </div>

                    <button type="button" class="js-file-attach-reset-img btn btn-white btn-sm">Delete</button>
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
                  &lt;h5 class="modal-title" id="exampleModalLabel"&gt;File attachment&lt;/h5&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;

                &lt;div class="modal-body"&gt;
                  &lt;form&gt;
                    &lt;!-- Media --&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                      &lt;!-- Avatar --&gt;
                      &lt;label class="avatar avatar-xl avatar-circle" for="avatarModalUploader"&gt;
                        &lt;img id="avatarModalImg" class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt=""&gt;
                      &lt;/label&gt;

                      &lt;div class="d-flex gap-3 ms-4"&gt;
                        &lt;div class="form-attachment-btn btn btn-sm btn-primary"&gt;Upload photo
                          &lt;input type="file" class="js-file-attach form-attachment-btn-label" id="avatarModalUploader"
                                 data-nue-file-attach-options='{
                                    "textTarget": "#avatarModalImg",
                                    "mode": "image",
                                    "targetAttr": "src",
                                    "resetTarget": ".js-file-attach-reset-img",
                                    "resetImg": "https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg",
                                    "allowTypes": [".png", ".jpeg", ".jpg"]
                                 }'&gt;
                        &lt;/div&gt;
                        &lt;!-- End Avatar --&gt;

                        &lt;button type="button" class="js-file-attach-reset-img btn btn-white btn-sm"&gt;Delete&lt;/button&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Media --&gt;
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
