@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Count Characters')

@section('js')
  <script>
    (function() {
      // INITIALIZATION OF COUNT CHARACTERS
      // =======================================================
      new NueCountCharacters('.js-count-characters')
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Count Characters
    <x-slot:description>Show count characters in the field.</x-slot:description>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF COUNT CHARACTERS
          // =======================================================
          new NueCountCharacters('.js-count-characters')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>

    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">

        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <div class="card">
    <div class="card-header">
      <ul class="nav nav-segment" id="navTab1" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="nav-resultTab1" href="#nav-result1" data-bs-toggle="pill" data-bs-target="#nav-result1" role="tab" aria-controls="nav-result1" aria-selected="true">Preview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="nav-htmlTab1" href="#nav-html1" data-bs-toggle="pill" data-bs-target="#nav-html1" role="tab" aria-controls="nav-html1" aria-selected="false">HTML</a>
        </li>
      </ul>
    </div>

    <div class="tab-content" id="navTabContent1">
      <div class="tab-pane fade p-4 show active" id="nav-result1" role="tabpanel" aria-labelledby="nav-resultTab1">
        <div class="w-sm-50">
          <div class="d-flex justify-content-between">
            <label for="reviewLabel" class="form-label">Review</label>

            <span id="basicCountCharacters" class="text-muted"></span>
          </div>
          <textarea class="js-count-characters form-control" id="reviewLabel" placeholder="Textarea field" rows="4" data-nue-count-characters-options='{
                      "output": "#basicCountCharacters"
                    }'>As always, all Htmlstream products are excellent with a very good personalization.</textarea>
        </div>
      </div>

      <div class="tab-pane fade" id="nav-html1" role="tabpanel" aria-labelledby="nav-htmlTab1">
        <pre>
          <code class="language-markup" data-lang="html">
            &lt;!-- Form --&gt;
            &lt;div class="d-flex justify-content-between"&gt;
              &lt;label for="reviewLabel" class="form-label"&gt;Review&lt;/label&gt;

              &lt;span id="basicCountCharacters" class="text-muted"&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;textarea class="js-count-characters form-control" id="reviewLabel" placeholder="Textarea field" rows="4"
                      data-nue-count-characters-options='{
                        "output": "#basicCountCharacters"
                      }'&gt;As always, all Htmlstream products are excellent with a very good personalization.&lt;/textarea&gt;
            &lt;!-- End Form --&gt;
          </code>
        </pre>
      </div>
    </div>
  </div>

  <h2 id="max-length" class="nue-docs-heading">
    Max length <a class="anchorjs-link" href="#max-length" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-sm-50">
        <div class="d-flex justify-content-between">
          <label for="reviewLabelModalEg" class="form-label">Review</label>

          <span id="maxLengthCountCharacters" class="text-muted"></span>
        </div>
        <textarea class="js-count-characters form-control" id="reviewLabelModalEg" placeholder="Textarea field" rows="4" maxlength="100" data-nue-count-characters-options='{
                    "output": "#maxLengthCountCharacters"
                  }'>As always, all Htmlstream products are excellent with a very good personalization.</textarea>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form --&gt;
          &lt;div class="d-flex justify-content-between"&gt;
            &lt;label for="reviewLabelModalEg" class="form-label"&gt;Review&lt;/label&gt;

            &lt;span id="maxLengthCountCharacters" class="text-muted"&gt;&lt;/span&gt;
          &lt;/div&gt;
          &lt;textarea class="js-count-characters form-control" id="reviewLabelModalEg" placeholder="Textarea field" rows="4" maxlength="100"
                    data-nue-count-characters-options='{
                      "output": "#maxLengthCountCharacters"
                    }'&gt;As always, all Htmlstream products are excellent with a very good personalization.&lt;/textarea&gt;
          &lt;!-- End Form --&gt;
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
                <div class="d-flex justify-content-between">
                  <label for="reviewModalEgLabel" class="input-label">Review</label>

                  <span id="basicCountCharactersModalEg" class="text-muted"></span>
                </div>
                <textarea class="js-count-characters form-control" id="reviewModalEgLabel" placeholder="Textarea field" rows="4" data-nue-count-characters-options='{
                            "output": "#basicCountCharactersModalEg"
                          }'>As always, all Htmlstream products are excellent with a very good personalization.</textarea>
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
                    &lt;div class="d-flex justify-content-between"&gt;
                      &lt;label for="reviewModalEgLabel" class="input-label"&gt;Review&lt;/label&gt;

                      &lt;span id="basicCountCharactersModalEg" class="text-muted"&gt;&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;textarea class="js-count-characters form-control" id="reviewModalEgLabel" placeholder="Textarea field" rows="4"
                              data-nue-count-characters-options='{
                                "output": "#basicCountCharactersModalEg"
                              }'&gt;As always, all Htmlstream products are excellent with a very good personalization.&lt;/textarea&gt;
                    &lt;!-- End Form --&gt;
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
              <code>output</code>
            </td>
            <td>Element to display the number of characters.</td>
            <td>
              <code>null</code>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
