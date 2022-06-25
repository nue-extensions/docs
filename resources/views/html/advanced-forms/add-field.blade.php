@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Add Field')

@section('js')
  <script>
    new NueAddField('.js-add-field')
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Add Field
    <x-slot:description>Add Field dynamic fields creation.</x-slot:description>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF ADD FIELD
          // =======================================================
          new NueAddField('.js-add-field')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-add-field row mb-4" data-nue-add-field-options='{
              "template": "#addEmailFieldTemplate",
              "container": "#addEmailFieldContainer",
              "defaultCreated": 0
            }'>
        <label for="phoneLabelEg1" class="col-sm-3 col-form-label form-label">Email</label>

        <div class="col-sm-9">
          <input type="email" class="js-input-mask form-control" name="email" id="phoneLabelEg1" placeholder="Enter email" aria-label="Enter email">

          <div id="addEmailFieldContainer"></div>

          <a href="javascript:;" class="js-create-field form-link">
            <i class="bi-plus-circle me-1"></i> Add field
          </a>
        </div>
      </div>

      <div id="addEmailFieldTemplate" style="display: none;">
        <div class="input-group-add-field">
          <input type="email" class="js-input-mask form-control" data-name="email" placeholder="Enter email" aria-label="Enter email">
        </div>

        <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
          <i class="bi-x-lg"></i>
        </a>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form --&gt;
          &lt;div class="js-add-field row mb-4"
               data-nue-add-field-options='{
                  "template": "#addEmailFieldTemplate",
                  "container": "#addEmailFieldContainer",
                  "defaultCreated": 0
                }'&gt;
            &lt;label for="phoneLabelEg1" class="col-sm-3 col-form-label form-label"&gt;Email&lt;/label&gt;

            &lt;div class="col-sm-9"&gt;
              &lt;input type="email" class="js-input-mask form-control" name="email" id="phoneLabelEg1" placeholder="Enter email" aria-label="Enter email"&gt;

              &lt;!-- Container For Input Field --&gt;
              &lt;div id="addEmailFieldContainer"&gt;&lt;/div&gt;

              &lt;a href="javascript:;" class="js-create-field form-link"&gt;
                &lt;i class="bi-plus-circle me-1"&gt;&lt;/i&gt; Add field
              &lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;

          &lt;!-- Add Phone Input Field --&gt;
          &lt;div id="addEmailFieldTemplate" style="display: none;"&gt;
            &lt;div class="input-group-add-field"&gt;
              &lt;input type="email" class="js-input-mask form-control" data-name="email" placeholder="Enter email" aria-label="Enter email"&gt;
            &lt;/div&gt;

            &lt;a class="js-delete-field input-group-add-field-delete" href="javascript:;"&gt;
              &lt;i class="bi-x-lg"&gt;&lt;/i&gt;
            &lt;/a&gt;
          &lt;/div&gt;
          &lt;!-- End Add Phone Input Field --&gt;
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
                <div class="js-add-field row mb-4" data-nue-add-field-options='{
                        "template": "#addEmailFieldTemplateModal",
                        "container": "#addEmailFieldContainerModal",
                        "defaultCreated": 0
                      }'>
                  <label for="phoneLabelEg2" class="col-sm-3 col-form-label form-label">Email</label>

                  <div class="col-sm-9">
                    <input type="email" class="js-input-mask form-control" name="email" id="phoneLabelEg2" placeholder="Enter email" aria-label="Enter email">

                    <div id="addEmailFieldContainerModal"></div>

                    <a href="javascript:;" class="js-create-field form-link">
                      <i class="bi-plus-circle me-1"></i> Add field
                    </a>
                  </div>
                </div>

                <div id="addEmailFieldTemplateModal" style="display: none;">
                  <div class="input-group-add-field">
                    <input type="email" class="js-input-mask form-control" data-name="email" placeholder="Enter email" aria-label="Enter email">
                  </div>

                  <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                    <i class="bi-x-lg"></i>
                  </a>
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
                    &lt;!-- Form --&gt;
                    &lt;div class="js-add-field row mb-4"
                         data-nue-add-field-options='{
                            "template": "#addEmailFieldTemplateModal",
                            "container": "#addEmailFieldContainerModal",
                            "defaultCreated": 0
                          }'&gt;
                      &lt;label for="phoneLabelEg2" class="col-sm-3 col-form-label form-label"&gt;Email&lt;/label&gt;

                      &lt;div class="col-sm-9"&gt;
                        &lt;input type="email" class="js-input-mask form-control" name="email" id="phoneLabelEg2" placeholder="Enter email" aria-label="Enter email"&gt;

                        &lt;!-- Container For Input Field --&gt;
                        &lt;div id="addEmailFieldContainerModal"&gt;&lt;/div&gt;

                        &lt;a href="javascript:;" class="js-create-field form-link"&gt;
                          &lt;i class="bi-plus-circle me-1"&gt;&lt;/i&gt; Add field
                        &lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Form --&gt;

                    &lt;!-- Add Phone Input Field --&gt;
                    &lt;div id="addEmailFieldTemplateModal" style="display: none;"&gt;
                      &lt;div class="input-group-add-field"&gt;
                        &lt;input type="email" class="js-input-mask form-control" data-name="email" placeholder="Enter email" aria-label="Enter email"&gt;
                      &lt;/div&gt;

                      &lt;a class="js-delete-field input-group-add-field-delete" href="javascript:;"&gt;
                        &lt;i class="bi-x-lg"&gt;&lt;/i&gt;
                      &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;!-- End Add Phone Input Field --&gt;
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
            <td><code>createTrigger</code></td>
            <td>Trigger for add fields.</td>
            <td><code>.js-create-field</code></td>
          </tr>

          <tr>
            <td><code>deleteTrigger</code></td>
            <td>Trigger for delete field.</td>
            <td><code>.js-delete-field</code></td>
          </tr>

          <tr>
            <td><code>limit</code></td>
            <td>Limit of the fields.</td>
            <td><code>10</code></td>
          </tr>

          <tr>
            <td><code>defaultCreated</code></td>
            <td>Count created by default fields.</td>
            <td><code>1</code></td>
          </tr>

          <tr>
            <td><code>nameSeparator</code></td>
            <td>Separator for name attribute.</td>
            <td><code>_</code></td>
          </tr>

          <tr>
            <td><code>addedField</code></td>
            <td>Call when field is added.</td>
            <td><code>function() {}</code></td>
          </tr>

          <tr>
            <td><code>deletedField</code></td>
            <td>Call when field is removed.</td>
            <td><code>function() {}</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
