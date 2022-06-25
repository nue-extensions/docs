@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Form Search')

@section('js')
  <script>
    (function() {
      new NueFormSearch('.js-form-search')

      const clearTypeLoading = new NueFormSearch('#type-loading').getItem(0)

      clearTypeLoading.$el.addEventListener('input', function() {
        clearTypeLoading.loading()

        if (!clearTypeLoading.$el.value.length) {
          clearTypeLoading.loading(false)
        }
      })

      clearTypeLoading.$el.addEventListener('change', function() {
        clearTypeLoading.loading(false)
      })

      const clearInputLoading = new NueFormSearch('#clear-input-loading').getItem(0)
      const $loadingBtn = document.querySelector('#loadBtn')

      $loadingBtn.addEventListener('click', function() {
        $loadingBtn.setAttribute('disabled', true);
        clearInputLoading.loading()

        setTimeout(function() {
          clearInputLoading.loading(false);
          $loadingBtn.removeAttribute('disabled');
        }, 2000);
      })
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Form Search
    <x-slot:description>Form search plugin with clearing value options.</x-slot:description>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function () {
          // INITIALIZATION OF FORM SEARCH
          // =======================================================
          new NueFormSearch('.js-form-search')
        })()
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="example" class="nue-docs-heading">
    Example <a class="anchorjs-link" href="#example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="mb-4 w-md-50">
        <div class="input-group input-group-merge">
          <input type="text" class="js-form-search form-control" placeholder="Search..." data-nue-form-search-options='{
                   "clearIcon": "#clearIconBasicEg"
                 }'>
          <button type="button" class="input-group-append input-group-text">
            <i id="clearIconBasicEg" class="bi-x-lg" style="display: none;"></i>
          </button>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form --&gt;
          &lt;div class="mb-4 w-md-50"&gt;
            &lt;div class="input-group input-group-merge"&gt;
              &lt;input type="text" class="js-form-search form-control" placeholder="Search..."
                     data-nue-form-search-options='{
                       "clearIcon": "#clearIconBasicEg"
                     }'&gt;
              &lt;button type="button" class="input-group-append input-group-text"&gt;
                &lt;i id="clearIconBasicEg" class="bi-x-lg" style="display: none;"&gt;&lt;/i&gt;
              &lt;/button&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="toggle-icon" class="nue-docs-heading">
    Toggle icon <a class="anchorjs-link" href="#toggle-icon" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="mb-4 w-md-50">
        <div class="input-group input-group-merge">
          <input type="text" class="js-form-search form-control" placeholder="Search..." data-nue-form-search-options='{
                   "clearIcon": "#clearIconToggleEg",
                   "defaultIcon": "#defaultClearIconToggleEg"
                 }'>
          <button type="button" class="input-group-append input-group-text">
            <i id="clearIconToggleEg" class="bi-x-lg" style="display: none;"></i>
            <i id="defaultClearIconToggleEg" class="bi-search" style="display: none;"></i>
          </button>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form --&gt;
          &lt;div class="mb-4 w-md-50"&gt;
            &lt;div class="input-group input-group-merge"&gt;
              &lt;input type="text" class="js-form-search form-control" placeholder="Search..."
                     data-nue-form-search-options='{
                       "clearIcon": "#clearIcon2",
                       "defaultIcon": "#defaultClearIconToggleEg"
                     }'&gt;
              &lt;button type="button" class="input-group-append input-group-text"&gt;
                &lt;i id="clearIcon2" class="bi-x-lg" style="display: none;"&gt;&lt;/i&gt;
                &lt;i id="defaultClearIconToggleEg" class="bi-search" style="display: none;"&gt;&lt;/i&gt;
              &lt;/button&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="loading-event" class="nue-docs-heading">
    Loading event <a class="anchorjs-link" href="#loading-event" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="mb-4 w-md-50">
        <div class="input-group input-group-merge">
          <input type="text" class="form-control" id="type-loading" placeholder="Search..." data-nue-form-search-options='{
                   "clearIcon": "#clearIconLoadingEg",
                   "defaultIcon": "#clearIconLoadingDefaultEg",
                   "loadingIcon": "#typeLoadingIconEg"
                 }'>
          <button type="button" class="input-group-append input-group-text">
            <i id="clearIconLoadingEg" class="bi-x-lg" style="display: none;"></i>
            <i id="clearIconLoadingDefaultEg" class="bi-search" style="display: none;"></i>

            <span id="typeLoadingIconEg" class="spinner-border spinner-border-sm text-primary" role="status" style="display: none;">
              <span class="sr-only"></span>
            </span>
          </button>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form --&gt;
          &lt;div class="mb-4 w-md-50"&gt;
            &lt;div class="input-group input-group-merge"&gt;
              &lt;input type="text" class="form-control" id="type-loading" placeholder="Search..."
                     data-nue-form-search-options='{
                       "clearIcon": "#clearIconLoadingEg",
                       "defaultIcon": "#clearIconLoadingDefaultEg",
                       "loadingIcon": "#typeLoadingIconEg"
                     }'&gt;
              &lt;button type="button" class="input-group-append input-group-text"&gt;
                &lt;i id="clearIconLoadingEg" class="bi-x-lg" style="display: none;"&gt;&lt;/i&gt;
                &lt;i id="clearIconLoadingDefaultEg" class="bi-search" style="display: none;"&gt;&lt;/i&gt;

                &lt;span id="typeLoadingIconEg" class="spinner-border spinner-border-sm text-primary" role="status" style="display: none;"&gt;
                  &lt;span class="sr-only"&gt;&lt;/span&gt;
                &lt;/span&gt;
              &lt;/button&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
               const clearTypeLoading = new NueFormSearch('#type-loading').getItem(0)

                clearTypeLoading.$el.addEventListener('input', function() {
                  clearTypeLoading.loading()

                  if (!clearTypeLoading.$el.value.length) {
                    clearTypeLoading.loading(false)
                  }
                })

                clearTypeLoading.$el.addEventListener('change', function() {
                  clearTypeLoading.loading(false)
                })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="mb-4 w-md-50">
        <div class="input-group input-group-merge">
          <input type="text" class="form-control" id="clear-input-loading" placeholder="Search..." data-nue-form-search-options='{
                   "clearIcon": "#clearIconLoadingBtn",
                   "defaultIcon": "#defaultClearIconLoadingBtn",
                   "loadingIcon": "#loadingClearIcon"
                 }'>
          <button type="button" class="input-group-append input-group-text">
            <i id="clearIconLoadingBtn" class="bi-x-lg" style="display: none;"></i>
            <i id="defaultClearIconLoadingBtn" class="bi-search" style="display: none;"></i>

            <span id="loadingClearIcon" class="spinner-border spinner-border-sm text-primary" role="status" style="display: none;">
              <span class="sr-only"></span>
            </span>
          </button>
        </div>
      </div>

      <button id="loadBtn" class="btn btn-primary">Click for loading</button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form --&gt;
          &lt;div class="mb-4 w-md-50"&gt;
            &lt;div class="input-group input-group-merge"&gt;
              &lt;input type="text" class="form-control" id="clear-input-loading" placeholder="Search..."
                     data-nue-form-search-options='{
                       "clearIcon": "#clearIconLoadingBtn",
                       "defaultIcon": "#defaultClearIconLoadingBtn",
                       "loadingIcon": "#loadingClearIcon"
                     }'&gt;
              &lt;button type="button" class="input-group-append input-group-text"&gt;
                &lt;i id="clearIconLoadingBtn" class="bi-x-lg" style="display: none;"&gt;&lt;/i&gt;
                &lt;i id="defaultClearIconLoadingBtn" class="bi-search" style="display: none;"&gt;&lt;/i&gt;

                &lt;span id="loadingClearIcon" class="spinner-border spinner-border-sm text-primary" role="status" style="display: none;"&gt;
                  &lt;span class="sr-only"&gt;&lt;/span&gt;
                &lt;/span&gt;
              &lt;/button&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;

          &lt;button id="loadBtn" class="btn btn-primary"&gt;Click for loading&lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              const clearInputLoading = new NueFormSearch('#clear-input-loading').getItem(0)
              const $loadingBtn = document.querySelector('#loadBtn')

              $loadingBtn.addEventListener('click', function() {
                $loadingBtn.setAttribute('disabled', true);
                clearInputLoading.loading()

                setTimeout(function() {
                  clearInputLoading.loading(false);
                  $loadingBtn.removeAttribute('disabled');
                }, 2000);
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="drop-menu" class="nue-docs-heading">
    Drop menu <a class="anchorjs-link" href="#drop-menu" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="position-relative w-md-50 z-index-2">
        <div class="mb-4">
          <div class="input-group input-group-merge">
            <input type="text" class="js-form-search form-control" placeholder="Search..." data-nue-form-search-options='{
                     "clearIcon": "#clearIconMenuEg",
                     "defaultIcon": "#defaultIconMenuEg",
                     "dropMenuElement": "#dropMenuEg",
                     "dropMenuOffset": 20
                   }'>
            <button type="button" class="input-group-append input-group-text">
              <i id="clearIconMenuEg" class="bi-x-lg" style="display: none;"></i>
              <i id="defaultIconMenuEg" class="bi-search" style="display: none;"></i>
            </button>
          </div>
        </div>

        <div id="dropMenuEg" class="nue-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">
          <div class="card-body-height">
            <span class="dropdown-header">Recent searches</span>

            <div class="dropdown-item bg-transparent text-wrap">
              <a class="btn btn-soft-dark btn-xs rounded-pill" href="../index.html">
                Gulp <i class="bi-search ms-1"></i>
              </a>
              <a class="btn btn-soft-dark btn-xs rounded-pill" href="../index.html">
                Notification panel <i class="bi-search ms-1"></i>
              </a>
            </div>

            <div class="dropdown-divider"></div>

            <span class="dropdown-header">Tutorials</span>

            <a class="dropdown-item" href="../index.html">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <span class="icon icon-soft-dark icon-xs icon-circle">
                    <i class="bi-sliders"></i>
                  </span>
                </div>

                <div class="flex-grow-1 text-truncate ms-2">
                  <span>How to set up Gulp?</span>
                </div>
              </div>
            </a>

            <a class="dropdown-item" href="../index.html">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <span class="icon icon-soft-dark icon-xs icon-circle">
                    <i class="bi-paint-bucket"></i>
                  </span>
                </div>

                <div class="flex-grow-1 text-truncate ms-2">
                  <span>How to change theme color?</span>
                </div>
              </div>
            </a>

            <div class="dropdown-divider"></div>

            <span class="dropdown-header">Members</span>

            <a class="dropdown-item" href="../index.html">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-xs avatar-circle" src="../assets/img/160x160/img10.jpg" alt="Image Description">
                </div>
                <div class="flex-grow-1 text-truncate ms-2">
                  <span>Amanda Harvey <i class="bi-patch-check-fill text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                </div>
              </div>
            </a>

            <a class="dropdown-item" href="../index.html">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-xs avatar-circle" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                </div>
                <div class="flex-grow-1 text-truncate ms-2">
                  <span>David Harrison</span>
                </div>
              </div>
            </a>

            <a class="dropdown-item" href="../index.html">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-xs avatar-soft-info avatar-circle">
                    <span class="avatar-initials">A</span>
                  </div>
                </div>
                <div class="flex-grow-1 text-truncate ms-2">
                  <span>Anne Richard</span>
                </div>
              </div>
            </a>
          </div>

          <a class="card-footer text-center" href="../index.html">
            See all results <i class="bi-chevron-right small"></i>
          </a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="position-relative w-md-50 z-index-2"&gt;
            &lt;!-- Form --&gt;
            &lt;div class="mb-4"&gt;
              &lt;div class="input-group input-group-merge"&gt;
                &lt;input type="text" class="js-form-search form-control" placeholder="Search..."
                       data-nue-form-search-options='{
                         "clearIcon": "#clearIconMenuEg",
                         "defaultIcon": "#defaultIconMenuEg",
                         "dropMenuElement": "#dropMenuEg",
                         "dropMenuOffset": 20
                       }'&gt;
                &lt;button type="button" class="input-group-append input-group-text"&gt;
                  &lt;i id="clearIconMenuEg" class="bi-x-lg" style="display: none;"&gt;&lt;/i&gt;
                  &lt;i id="defaultIconMenuEg" class="bi-search" style="display: none;"&gt;&lt;/i&gt;
                &lt;/button&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Form --&gt;

            &lt;!-- Drop Menu --&gt;
            &lt;div id="dropMenuEg" class="nue-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless"&gt;
              &lt;!-- Body --&gt;
              &lt;div class="card-body-height"&gt;
                &lt;span class="dropdown-header"&gt;Recent searches&lt;/span&gt;

                &lt;div class="dropdown-item bg-transparent text-wrap"&gt;
                  &lt;a class="btn btn-soft-dark btn-xs rounded-pill" href="../index.html"&gt;
                    Gulp &lt;i class="bi-search ms-1"&gt;&lt;/i&gt;
                  &lt;/a&gt;
                  &lt;a class="btn btn-soft-dark btn-xs rounded-pill" href="../index.html"&gt;
                    Notification panel &lt;i class="bi-search ms-1"&gt;&lt;/i&gt;
                  &lt;/a&gt;
                &lt;/div&gt;

                &lt;div class="dropdown-divider"&gt;&lt;/div&gt;

                &lt;span class="dropdown-header"&gt;Tutorials&lt;/span&gt;

                &lt;a class="dropdown-item" href="../index.html"&gt;
                  &lt;div class="d-flex align-items-center"&gt;
                    &lt;div class="flex-shrink-0"&gt;
                      &lt;span class="icon icon-soft-dark icon-xs icon-circle"&gt;
                        &lt;i class="bi-sliders"&gt;&lt;/i&gt;
                      &lt;/span&gt;
                    &lt;/div&gt;

                    &lt;div class="flex-grow-1 text-truncate ms-2"&gt;
                      &lt;span&gt;How to set up Gulp?&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/a&gt;

                &lt;a class="dropdown-item" href="../index.html"&gt;
                  &lt;div class="d-flex align-items-center"&gt;
                    &lt;div class="flex-shrink-0"&gt;
                      &lt;span class="icon icon-soft-dark icon-xs icon-circle"&gt;
                        &lt;i class="bi-paint-bucket"&gt;&lt;/i&gt;
                      &lt;/span&gt;
                    &lt;/div&gt;

                    &lt;div class="flex-grow-1 text-truncate ms-2"&gt;
                      &lt;span&gt;How to change theme color?&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/a&gt;

                &lt;div class="dropdown-divider"&gt;&lt;/div&gt;

                &lt;span class="dropdown-header"&gt;Members&lt;/span&gt;

                &lt;a class="dropdown-item" href="../index.html"&gt;
                  &lt;div class="d-flex align-items-center"&gt;
                    &lt;div class="flex-shrink-0"&gt;
                      &lt;img class="avatar avatar-xs avatar-circle" src="../assets/img/160x160/img10.jpg" alt="Image Description"&gt;
                    &lt;/div&gt;
                    &lt;div class="flex-grow-1 text-truncate ms-2"&gt;
                      &lt;span&gt;Amanda Harvey &lt;i class="bi-patch-check-fill text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/a&gt;

                &lt;a class="dropdown-item" href="../index.html"&gt;
                  &lt;div class="d-flex align-items-center"&gt;
                    &lt;div class="flex-shrink-0"&gt;
                      &lt;img class="avatar avatar-xs avatar-circle" src="../assets/img/160x160/img3.jpg" alt="Image Description"&gt;
                    &lt;/div&gt;
                    &lt;div class="flex-grow-1 text-truncate ms-2"&gt;
                      &lt;span&gt;David Harrison&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/a&gt;

                &lt;a class="dropdown-item" href="../index.html"&gt;
                  &lt;div class="d-flex align-items-center"&gt;
                    &lt;div class="flex-shrink-0"&gt;
                      &lt;div class="avatar avatar-xs avatar-soft-info avatar-circle"&gt;
                        &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="flex-grow-1 text-truncate ms-2"&gt;
                      &lt;span&gt;Anne Richard&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/div&gt;
              &lt;!-- End Body --&gt;

              &lt;!-- Footer --&gt;
              &lt;a class="card-footer text-center" href="../index.html"&gt;
                See all results &lt;i class="bi-chevron-right small"&gt;&lt;/i&gt;
              &lt;/a&gt;
              &lt;!-- End Footer --&gt;
            &lt;/div&gt;
            &lt;!-- End Drop Menu --&gt;
          &lt;/div&gt;
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
              <h5 class="modal-title" id="exampleModalLabel">Form search</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <div class="mb-4">
                <div class="input-group input-group-merge">
                  <input type="text" class="js-form-search form-control" placeholder="Search..." data-nue-form-search-options='{
                           "clearIcon": "#clearIconModalEg"
                         }'>
                  <button type="button" class="input-group-append input-group-text">
                    <i id="clearIconModalEg" class="bi-x-lg" style="display: none;"></i>
                  </button>
                </div>
              </div>
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
                  &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Form search&lt;/h5&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;

                &lt;div class="modal-body"&gt;
                  &lt;!-- Form --&gt;
                  &lt;div class="mb-4"&gt;
                    &lt;div class="input-group input-group-merge"&gt;
                      &lt;input type="text" class="js-form-search form-control" placeholder="Search..."
                             data-nue-form-search-options='{
                               "clearIcon": "#clearIconModalEg"
                             }'&gt;
                      &lt;button type="button" class="input-group-append input-group-text"&gt;
                        &lt;i id="clearIconModalEg" class="bi-x-lg" style="display: none;"&gt;&lt;/i&gt;
                      &lt;/button&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Form --&gt;
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
            <td>
              <code>clearIcon</code>
            </td>
            <td>An element that when clicked will clear the field.</td>
            <td>
              <code>null</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>defaultIcon</code>
            </td>
            <td>The element that will be the default instead <code>clearIcon</code>.</td>
            <td>
              <code>null</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>loadingIcon</code>
            </td>
            <td>The element that will be instead <code>clearIcon and defaultIcon</code> on loading.</td>
            <td>
              <code>null</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>delay</code>
            </td>
            <td>Animation delay.</td>
            <td>
              <code>300</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>dropMenuElement</code>
            </td>
            <td>Drop menu element.</td>
            <td>
              <code>null</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>dropMenuOffset</code>
            </td>
            <td>Drop menu top offset.</td>
            <td>
              <code>0</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>activeClass</code>
            </td>
            <td> Class which will be added when input search is active.</td>
            <td>
              <code>null</code>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <h2 id="events" class="nue-docs-heading">
    Events <a class="anchorjs-link" href="#events" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <div class="card overflow-hidden">
    <div class="table-responsive">
      <table class="table table-thead-bordered card-table">
        <thead class="thead-light">
          <tr>
            <th>Name</th>
            <th>Description</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><code>clear</code></td>
            <td>Triggered when the field is cleared</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
