@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Step Forms (Wizards)')

@section('js')
  <script>
    (function() {
      // INITIALIZATION OF STEP FORM
      // =======================================================
      new NueStepForm('.js-step-form', {
        finish ($el) {
          const $successMessageTempalte = $el.querySelector('.js-success-message').cloneNode(true)

          $successMessageTempalte.style.display = 'block'

          $el.style.display = 'none'
          $el.parentElement.appendChild($successMessageTempalte)
        }
      })

      new NueStepForm('.js-step-form-validate', {
        validator: NueBsValidation.init('.js-validate'),
        finish ($el) {
          const $successMessageTempalte = $el.querySelector('.js-success-message').cloneNode(true)

          $successMessageTempalte.style.display = 'block'

          $el.style.display = 'none'
          $el.parentElement.appendChild($successMessageTempalte)
        }
      })
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Step Forms (Wizard)
    <x-slot:description>Create a multi-step form to get more leads and increase engagement.</x-slot:description>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF STEP FORM
          // =======================================================
          new NueStepForm('.js-step-form', {
            finish ($el) {
              const $successMessageTempalte = $el.querySelector('.js-success-message').cloneNode(true)

              $successMessageTempalte.style.display = 'block'

              $el.style.display = 'none'
              $el.parentElement.appendChild($successMessageTempalte)
            }
          })
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <form class="js-step-form" data-nue-step-form-options='{
              "progressSelector": "#basicStepFormProgress",
              "stepsSelector": "#basicStepFormContent",
              "endSelector": "#createProjectFinishBtn"
            }'>
        <ul id="basicStepFormProgress" class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7">
          <li class="step-item">
            <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                "targetSelector": "#basicStepDetails"
              }'>
              <span class="step-icon step-icon-soft-dark">1</span>
              <div class="step-content">
                <span class="step-title">Details</span>
              </div>
            </a>
          </li>

          <li class="step-item">
            <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                 "targetSelector": "#basicStepTerms"
               }'>
              <span class="step-icon step-icon-soft-dark">2</span>
              <div class="step-content">
                <span class="step-title">Terms</span>
              </div>
            </a>
          </li>

          <li class="step-item">
            <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                 "targetSelector": "#basicStepMembers"
               }'>
              <span class="step-icon step-icon-soft-dark">3</span>
              <div class="step-content">
                <span class="step-title">Members</span>
              </div>
            </a>
          </li>
        </ul>

        <div id="basicStepFormContent">
          <div id="basicStepDetails" class="active">
            <h4>Details content</h4>

            <p>...</p>

            <div class="d-flex align-items-center">
              <div class="ms-auto">
                <button type="button" class="btn btn-primary" data-nue-step-form-next-options='{
                          "targetSelector": "#basicStepTerms"
                        }'>
                  Next <i class="bi-chevron-right small"></i>
                </button>
              </div>
            </div>
          </div>

          <div id="basicStepTerms" style="display: none;">
            <h4>Terms content</h4>

            <p>...</p>

            <div class="d-flex align-items-center">
              <button type="button" class="btn btn-ghost-secondary me-2" data-nue-step-form-prev-options='{
                   "targetSelector": "#basicStepDetails"
                 }'>
                <i class="bi-chevron-left small"></i> Previous step
              </button>

              <div class="ms-auto">
                <button type="button" class="btn btn-primary" data-nue-step-form-next-options='{
                          "targetSelector": "#basicStepMembers"
                        }'>
                  Next <i class="bi-chevron-right small"></i>
                </button>
              </div>
            </div>
          </div>

          <div id="basicStepMembers" style="display: none;">
            <h4>Members content</h4>

            <p>...</p>

            <div class="d-sm-flex align-items-center">
              <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2" data-nue-step-form-prev-options='{
                   "targetSelector": "#basicStepTerms"
                 }'>
                <i class="bi-chevron-left small"></i> Previous step
              </button>

              <div class="d-flex justify-content-end ms-auto">
                <button type="button" class="btn btn-white me-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                <button id="createProjectFinishBtn" type="button" class="btn btn-primary">Create project</button>
              </div>
            </div>
          </div>
        </div>

        <div id="basicStepSuccessMessage" class="js-success-message" style="display:none;">
          <div class="text-center">
            <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-hi-five.svg" alt="" style="max-width: 15rem;">

            <div class="mb-4">
              <h2>Successful!</h2>
              <p>New project has been successfully created.</p>
            </div>

            <div class="d-flex justify-content-center gap-3">
              <a class="btn btn-white" href="#">
                <i class="bi-chevron-left small ms-1"></i> Back to projects
              </a>
              <a class="btn btn-primary" href="#">
                <i class="tio-city me-1"></i> Add new project
              </a>
            </div>
          </div>
        </div>
      </form>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step Form --&gt;
          &lt;form class="js-step-form"
                data-nue-step-form-options='{
                  "progressSelector": "#basicStepFormProgress",
                  "stepsSelector": "#basicStepFormContent",
                  "endSelector": "#createProjectFinishBtn"
                }'&gt;
            &lt;!-- Step --&gt;
            &lt;ul id="basicStepFormProgress" class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7"&gt;
              &lt;li class="step-item"&gt;
                &lt;a class="step-content-wrapper" href="javascript:;"
                   data-nue-step-form-next-options='{
                    "targetSelector": "#basicStepDetails"
                  }'&gt;
                  &lt;span class="step-icon step-icon-soft-dark"&gt;1&lt;/span&gt;
                  &lt;div class="step-content"&gt;
                    &lt;span class="step-title"&gt;Details&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/li&gt;

              &lt;li class="step-item"&gt;
                &lt;a class="step-content-wrapper" href="javascript:;"
                   data-nue-step-form-next-options='{
                     "targetSelector": "#basicStepTerms"
                   }'&gt;
                  &lt;span class="step-icon step-icon-soft-dark"&gt;2&lt;/span&gt;
                  &lt;div class="step-content"&gt;
                    &lt;span class="step-title"&gt;Terms&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/li&gt;

              &lt;li class="step-item"&gt;
                &lt;a class="step-content-wrapper" href="javascript:;"
                   data-nue-step-form-next-options='{
                     "targetSelector": "#basicStepMembers"
                   }'&gt;
                  &lt;span class="step-icon step-icon-soft-dark"&gt;3&lt;/span&gt;
                  &lt;div class="step-content"&gt;
                    &lt;span class="step-title"&gt;Members&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- End Step --&gt;

            &lt;!-- Content Step Form --&gt;
            &lt;div id="basicStepFormContent"&gt;
              &lt;div id="basicStepDetails" class="active"&gt;
                &lt;h4&gt;Details content&lt;/h4&gt;

                &lt;p&gt;...&lt;/p&gt;

                &lt;!-- Footer --&gt;
                &lt;div class="d-flex align-items-center"&gt;
                  &lt;div class="ms-auto"&gt;
                    &lt;button type="button" class="btn btn-primary"
                            data-nue-step-form-next-options='{
                              "targetSelector": "#basicStepTerms"
                            }'&gt;
                      Next &lt;i class="bi-chevron-right small"&gt;&lt;/i&gt;
                    &lt;/button&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Footer --&gt;
              &lt;/div&gt;

              &lt;div id="basicStepTerms" style="display: none;"&gt;
                &lt;h4&gt;Terms content&lt;/h4&gt;

                &lt;p&gt;...&lt;/p&gt;

                &lt;!-- Footer --&gt;
                &lt;div class="d-flex align-items-center"&gt;
                  &lt;button type="button" class="btn btn-ghost-secondary me-2"
                     data-nue-step-form-prev-options='{
                       "targetSelector": "#basicStepDetails"
                     }'&gt;
                    &lt;i class="bi-chevron-left small"&gt;&lt;/i&gt; Previous step
                  &lt;/button&gt;

                  &lt;div class="ms-auto"&gt;
                    &lt;button type="button" class="btn btn-primary"
                            data-nue-step-form-next-options='{
                              "targetSelector": "#basicStepMembers"
                            }'&gt;
                      Next &lt;i class="bi-chevron-right small"&gt;&lt;/i&gt;
                    &lt;/button&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Footer --&gt;
              &lt;/div&gt;

              &lt;div id="basicStepMembers" style="display: none;"&gt;
                &lt;h4&gt;Members content&lt;/h4&gt;

                &lt;p&gt;...&lt;/p&gt;

                &lt;!-- Footer --&gt;
                &lt;div class="d-sm-flex align-items-center"&gt;
                  &lt;button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
                     data-nue-step-form-prev-options='{
                       "targetSelector": "#basicStepTerms"
                     }'&gt;
                    &lt;i class="bi-chevron-left small"&gt;&lt;/i&gt; Previous step
                  &lt;/button&gt;

                  &lt;div class="d-flex justify-content-end ms-auto"&gt;
                    &lt;button type="button" class="btn btn-white me-2" data-dismiss="modal" aria-label="Close"&gt;Cancel&lt;/button&gt;
                    &lt;button id="createProjectFinishBtn" type="button" class="btn btn-primary"&gt;Create project&lt;/button&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Footer --&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Content Step Form --&gt;

            &lt;!-- Message Body --&gt;
            &lt;div id="basicStepSuccessMessage" class="js-success-message" style="display:none;"&gt;
              &lt;div class="text-center"&gt;
                &lt;img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-hi-five.svg" alt="" style="max-width: 15rem;"&gt;

                &lt;div class="mb-4"&gt;
                  &lt;h2&gt;Successful!&lt;/h2&gt;
                  &lt;p&gt;New project has been successfully created.&lt;/p&gt;
                &lt;/div&gt;

                &lt;div class="d-flex justify-content-center gap-3"&gt;
                  &lt;a class="btn btn-white" href="#"&gt;
                    &lt;i class="bi-chevron-left small ms-1"&gt;&lt;/i&gt; Back to projects
                  &lt;/a&gt;
                  &lt;a class="btn btn-primary" href="#"&gt;
                    &lt;i class="tio-city me-1"&gt;&lt;/i&gt; Add new project
                  &lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Message Body --&gt;
          &lt;/form&gt;
          &lt;!-- End Step Form --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="vertical-steps" class="nue-docs-heading">
    Vertical steps <a class="anchorjs-link" href="#vertical-steps" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <form class="js-step-form" data-nue-step-form-options='{
              "progressSelector": "#basicVerStepFormProgress",
              "stepsSelector": "#basicVerStepFormContent",
              "endSelector": "#basicVerStepFinishBtn"
            }'>
        <div class="row">
          <div class="col-lg-3">
            <ul id="basicVerStepFormProgress" class="js-step-progress step step-icon-sm mb-7">
              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                    "targetSelector": "#basicVerStepDetails"
                  }'>
                  <span class="step-icon step-icon-soft-dark">1</span>
                  <div class="step-content pb-5">
                    <span class="step-title">Details</span>
                  </div>
                </a>
              </li>

              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                     "targetSelector": "#basicVerStepTerms"
                   }'>
                  <span class="step-icon step-icon-soft-dark">2</span>
                  <div class="step-content pb-5">
                    <span class="step-title">Terms</span>
                  </div>
                </a>
              </li>

              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                     "targetSelector": "#basicVerStepMembers"
                   }'>
                  <span class="step-icon step-icon-soft-dark">3</span>
                  <div class="step-content pb-5">
                    <span class="step-title">Members</span>
                  </div>
                </a>
              </li>
            </ul>
          </div>

          <div class="col-lg-9">
            <div id="basicVerStepFormContent">
              <div id="basicVerStepDetails" class="card card-body active" style="min-height: 15rem;">
                <h4>Details content</h4>

                <p>...</p>

                <div class="d-flex align-items-center mt-auto">
                  <div class="ms-auto">
                    <button type="button" class="btn btn-primary" data-nue-step-form-next-options='{
                              "targetSelector": "#basicVerStepTerms"
                            }'>
                      Next <i class="bi-chevron-right small"></i>
                    </button>
                  </div>
                </div>
              </div>

              <div id="basicVerStepTerms" class="card card-body" style="display: none; min-height: 15rem;">
                <h4>Terms content</h4>

                <p>...</p>

                <div class="d-flex align-items-center mt-auto">
                  <button type="button" class="btn btn-ghost-secondary me-2" data-nue-step-form-prev-options='{
                       "targetSelector": "#basicVerStepDetails"
                     }'>
                    <i class="bi-chevron-left small"></i> Previous step
                  </button>

                  <div class="ms-auto">
                    <button type="button" class="btn btn-primary" data-nue-step-form-next-options='{
                              "targetSelector": "#basicVerStepMembers"
                            }'>
                      Next <i class="bi-chevron-right small"></i>
                    </button>
                  </div>
                </div>
              </div>

              <div id="basicVerStepMembers" class="card card-body" style="display: none; min-height: 15rem;">
                <h4>Members content</h4>

                <p>...</p>

                <div class="d-sm-flex align-items-center mt-auto">
                  <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2" data-nue-step-form-prev-options='{
                       "targetSelector": "#basicVerStepTerms"
                     }'>
                    <i class="bi-chevron-left small"></i> Previous step
                  </button>

                  <div class="d-flex justify-content-end ms-auto">
                    <button type="button" class="btn btn-white me-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button id="basicVerStepFinishBtn" type="button" class="btn btn-primary">Create project</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="basicVerStepSuccessMessage" class="js-success-message" style="display:none;">
          <div class="text-center">
            <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-hi-five.svg" alt="" style="max-width: 15rem;">

            <div class="mb-4">
              <h2>Successful!</h2>
              <p>New project has been successfully created.</p>
            </div>

            <div class="d-flex justify-content-center">
              <a class="btn btn-white me-3" href="#">
                <i class="bi-chevron-left small ms-1"></i> Back to projects
              </a>
              <a class="btn btn-primary" href="#">
                <i class="tio-city me-1"></i> Add new project
              </a>
            </div>
          </div>
        </div>
      </form>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step Form --&gt;
          &lt;form class="js-step-form"
                data-nue-step-form-options='{
                  "progressSelector": "#basicVerStepFormProgress",
                  "stepsSelector": "#basicVerStepFormContent",
                  "endSelector": "#basicVerStepFinishBtn"
                }'&gt;
            &lt;div class="row"&gt;
              &lt;div class="col-lg-3"&gt;
                &lt;!-- Step --&gt;
                &lt;ul id="basicVerStepFormProgress" class="js-step-progress step step-icon-sm mb-7"&gt;
                  &lt;li class="step-item"&gt;
                    &lt;a class="step-content-wrapper" href="javascript:;"
                       data-nue-step-form-next-options='{
                        "targetSelector": "#basicVerStepDetails"
                      }'&gt;
                      &lt;span class="step-icon step-icon-soft-dark"&gt;1&lt;/span&gt;
                      &lt;div class="step-content pb-5"&gt;
                        &lt;span class="step-title"&gt;Details&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/li&gt;

                  &lt;li class="step-item"&gt;
                    &lt;a class="step-content-wrapper" href="javascript:;"
                       data-nue-step-form-next-options='{
                         "targetSelector": "#basicVerStepTerms"
                       }'&gt;
                      &lt;span class="step-icon step-icon-soft-dark"&gt;2&lt;/span&gt;
                      &lt;div class="step-content pb-5"&gt;
                        &lt;span class="step-title"&gt;Terms&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/li&gt;

                  &lt;li class="step-item"&gt;
                    &lt;a class="step-content-wrapper" href="javascript:;"
                       data-nue-step-form-next-options='{
                         "targetSelector": "#basicVerStepMembers"
                       }'&gt;
                      &lt;span class="step-icon step-icon-soft-dark"&gt;3&lt;/span&gt;
                      &lt;div class="step-content pb-5"&gt;
                        &lt;span class="step-title"&gt;Members&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
                &lt;!-- End Step --&gt;
              &lt;/div&gt;

              &lt;div class="col-lg-9"&gt;
                &lt;!-- Content Step Form --&gt;
                &lt;div id="basicVerStepFormContent"&gt;
                  &lt;div id="basicVerStepDetails" class="card card-body active" style="min-height: 15rem;"&gt;
                    &lt;h4&gt;Details content&lt;/h4&gt;

                    &lt;p&gt;...&lt;/p&gt;

                    &lt;!-- Footer --&gt;
                    &lt;div class="d-flex align-items-center mt-auto"&gt;
                      &lt;div class="ms-auto"&gt;
                        &lt;button type="button" class="btn btn-primary"
                                data-nue-step-form-next-options='{
                                  "targetSelector": "#basicVerStepTerms"
                                }'&gt;
                          Next &lt;i class="bi-chevron-right small"&gt;&lt;/i&gt;
                        &lt;/button&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Footer --&gt;
                  &lt;/div&gt;

                  &lt;div id="basicVerStepTerms" class="card card-body" style="display: none; min-height: 15rem;"&gt;
                    &lt;h4&gt;Terms content&lt;/h4&gt;

                    &lt;p&gt;...&lt;/p&gt;

                    &lt;!-- Footer --&gt;
                    &lt;div class="d-flex align-items-center mt-auto"&gt;
                      &lt;button type="button" class="btn btn-ghost-secondary me-2"
                         data-nue-step-form-prev-options='{
                           "targetSelector": "#basicVerStepDetails"
                         }'&gt;
                        &lt;i class="bi-chevron-left small"&gt;&lt;/i&gt; Previous step
                      &lt;/button&gt;

                      &lt;div class="ms-auto"&gt;
                        &lt;button type="button" class="btn btn-primary"
                                data-nue-step-form-next-options='{
                                  "targetSelector": "#basicVerStepMembers"
                                }'&gt;
                          Next &lt;i class="bi-chevron-right small"&gt;&lt;/i&gt;
                        &lt;/button&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Footer --&gt;
                  &lt;/div&gt;

                  &lt;div id="basicVerStepMembers" class="card card-body" style="display: none; min-height: 15rem;"&gt;
                    &lt;h4&gt;Members content&lt;/h4&gt;

                    &lt;p&gt;...&lt;/p&gt;

                    &lt;!-- Footer --&gt;
                    &lt;div class="d-sm-flex align-items-center mt-auto"&gt;
                      &lt;button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
                         data-nue-step-form-prev-options='{
                           "targetSelector": "#basicVerStepTerms"
                         }'&gt;
                        &lt;i class="bi-chevron-left small"&gt;&lt;/i&gt; Previous step
                      &lt;/button&gt;

                      &lt;div class="d-flex justify-content-end ms-auto"&gt;
                        &lt;button type="button" class="btn btn-white me-2" data-dismiss="modal" aria-label="Close"&gt;Cancel&lt;/button&gt;
                        &lt;button id="basicVerStepFinishBtn" type="button" class="btn btn-primary"&gt;Create project&lt;/button&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Footer --&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Content Step Form --&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Row --&gt;

            &lt;!-- Message Body --&gt;
            &lt;div id="basicVerStepSuccessMessage" class="js-success-message" style="display:none;"&gt;
              &lt;div class="text-center"&gt;
                &lt;img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-hi-five.svg" alt="" style="max-width: 15rem;"&gt;

                &lt;div class="mb-4"&gt;
                  &lt;h2&gt;Successful!&lt;/h2&gt;
                  &lt;p&gt;New project has been successfully created.&lt;/p&gt;
                &lt;/div&gt;

                &lt;div class="d-flex justify-content-center"&gt;
                  &lt;a class="btn btn-white me-3" href="#"&gt;
                    &lt;i class="bi-chevron-left small ms-1"&gt;&lt;/i&gt; Back to projects
                  &lt;/a&gt;
                  &lt;a class="btn btn-primary" href="#"&gt;
                    &lt;i class="tio-city me-1"&gt;&lt;/i&gt; Add new project
                  &lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Message Body --&gt;
          &lt;/form&gt;
          &lt;!-- End Step Form --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="basic-form-example" class="nue-docs-heading">
    Basic form example <a class="anchorjs-link" href="#basic-form-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <form class="js-step-form" data-nue-step-form-options='{
              "progressSelector": "#basicFormProgress",
              "stepsSelector": "#basicFormContent",
              "endSelector": "#basicFormFinishBtn"
            }'>
        <ul id="basicFormProgress" class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7">
          <li class="step-item">
            <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                "targetSelector": "#basicFormAccount"
              }'>
              <span class="step-icon step-icon-soft-dark">1</span>
              <div class="step-content">
                <span class="step-title">Account</span>
              </div>
            </a>
          </li>

          <li class="step-item">
            <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                 "targetSelector": "#basicFormProfile"
               }'>
              <span class="step-icon step-icon-soft-dark">2</span>
              <div class="step-content">
                <span class="step-title">Profile</span>
              </div>
            </a>
          </li>

          <li class="step-item">
            <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                 "targetSelector": "#basicFormAddress"
               }'>
              <span class="step-icon step-icon-soft-dark">3</span>
              <div class="step-content">
                <span class="step-title">Address</span>
              </div>
            </a>
          </li>
        </ul>

        <div id="basicFormContent">
          <div id="basicFormAccount" class="active">
            <div class="row mb-4">
              <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label">Username</label>

              <div class="col-sm-9">
                <input type="password" class="form-control" name="username" id="usernameLabel" placeholder="Username" aria-label="Username">
              </div>
            </div>

            <div class="row mb-4">
              <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label">New password</label>

              <div class="col-sm-9">
                <input type="password" class="form-control" name="newPassword" id="newPasswordLabel" placeholder="New password" aria-label="New password">
              </div>
            </div>

            <div class="row mb-4">
              <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label">Current password</label>

              <div class="col-sm-9">
                <input type="password" class="form-control" name="currentPassword" id="currentPasswordLabel" placeholder="Current password" aria-label="Current password">
              </div>
            </div>

            <div class="d-flex align-items-center">
              <div class="ms-auto">
                <button type="button" class="btn btn-primary" data-nue-step-form-next-options='{
                          "targetSelector": "#basicFormProfile"
                        }'>
                  Next <i class="bi-chevron-right small"></i>
                </button>
              </div>
            </div>
          </div>

          <div id="basicFormProfile" style="display: none;">
            <div class="row mb-4">
              <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label">First name</label>

              <div class="col-sm-9">
                <input type="password" class="form-control" name="firstName" id="firstNameLabel" placeholder="First name" aria-label="First name">
              </div>
            </div>

            <div class="row mb-4">
              <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label">Last name</label>

              <div class="col-sm-9">
                <input type="password" class="form-control" name="lastName" id="lastNameLabel" placeholder="Last name" aria-label="Last name">
              </div>
            </div>

            <div class="row mb-4">
              <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label">Email</label>

              <div class="col-sm-9">
                <input type="password" class="form-control" name="email" id="emailLabel" placeholder="Email address" aria-label="Email address">
              </div>
            </div>

            <div class="d-flex align-items-center">
              <button type="button" class="btn btn-ghost-secondary me-2" data-nue-step-form-prev-options='{
                   "targetSelector": "#basicFormAccount"
                 }'>
                <i class="bi-chevron-left small"></i> Previous step
              </button>

              <div class="ms-auto">
                <button type="button" class="btn btn-primary" data-nue-step-form-next-options='{
                          "targetSelector": "#basicFormAddress"
                        }'>
                  Next <i class="bi-chevron-right small"></i>
                </button>
              </div>
            </div>
          </div>

          <div id="basicFormAddress" style="display: none;">
            <div class="row mb-4">
              <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label">Address 1</label>

              <div class="col-sm-9">
                <input type="password" class="form-control" name="address1" id="address1Label" placeholder="Address 1" aria-label="Address 1">
              </div>
            </div>

            <div class="row mb-4">
              <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label">Address 2 <span class="form-label-secondary">(Optional)</span></label>

              <div class="col-sm-9">
                <input type="password" class="form-control" name="address2" id="address2Label" placeholder="Address 2" aria-label="Address 2">
              </div>
            </div>

            <div class="d-sm-flex align-items-center">
              <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2" data-nue-step-form-prev-options='{
                   "targetSelector": "#basicFormProfile"
                 }'>
                <i class="bi-chevron-left small"></i> Previous step
              </button>

              <div class="d-flex justify-content-end ms-auto">
                <button type="button" class="btn btn-white me-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                <button id="basicFormFinishBtn" type="button" class="btn btn-primary">Save Changes</button>
              </div>
            </div>
          </div>
        </div>

        <div id="basicFormSuccessMessage" class="js-success-message" style="display:none;">
          <div class="text-center">
            <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-hi-five.svg" alt="" style="max-width: 15rem;">

            <div class="mb-4">
              <h2>Successful!</h2>
              <p>Your changes have been successfully saved.</p>
            </div>

            <div class="d-flex justify-content-center">
              <a class="btn btn-white me-3" href="#">
                <i class="bi-chevron-left small ms-1"></i> Back to projects
              </a>
              <a class="btn btn-primary" href="#">
                <i class="tio-city me-1"></i> Add new project
              </a>
            </div>
          </div>
        </div>
      </form>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step Form --&gt;
          &lt;form class="js-step-form"
                data-nue-step-form-options='{
                  "progressSelector": "#basicFormProgress",
                  "stepsSelector": "#basicFormContent",
                  "endSelector": "#basicFormFinishBtn"
                }'&gt;
            &lt;!-- Step --&gt;
            &lt;ul id="basicFormProgress" class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7"&gt;
              &lt;li class="step-item"&gt;
                &lt;a class="step-content-wrapper" href="javascript:;"
                   data-nue-step-form-next-options='{
                    "targetSelector": "#basicFormAccount"
                  }'&gt;
                  &lt;span class="step-icon step-icon-soft-dark"&gt;1&lt;/span&gt;
                  &lt;div class="step-content"&gt;
                    &lt;span class="step-title"&gt;Account&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/li&gt;

              &lt;li class="step-item"&gt;
                &lt;a class="step-content-wrapper" href="javascript:;"
                   data-nue-step-form-next-options='{
                     "targetSelector": "#basicFormProfile"
                   }'&gt;
                  &lt;span class="step-icon step-icon-soft-dark"&gt;2&lt;/span&gt;
                  &lt;div class="step-content"&gt;
                    &lt;span class="step-title"&gt;Profile&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/li&gt;

              &lt;li class="step-item"&gt;
                &lt;a class="step-content-wrapper" href="javascript:;"
                   data-nue-step-form-next-options='{
                     "targetSelector": "#basicFormAddress"
                   }'&gt;
                  &lt;span class="step-icon step-icon-soft-dark"&gt;3&lt;/span&gt;
                  &lt;div class="step-content"&gt;
                    &lt;span class="step-title"&gt;Address&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- End Step --&gt;

            &lt;!-- Content Step Form --&gt;
            &lt;div id="basicFormContent"&gt;
              &lt;div id="basicFormAccount" class="active"&gt;
                &lt;!-- Form Group --&gt;
                &lt;div class="row mb-4"&gt;
                  &lt;label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label"&gt;Username&lt;/label&gt;

                  &lt;div class="col-sm-9"&gt;
                    &lt;input type="password" class="form-control" name="username" id="usernameLabel" placeholder="Username" aria-label="Username"&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Form Group --&gt;
                &lt;div class="row mb-4"&gt;
                  &lt;label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label"&gt;New password&lt;/label&gt;

                  &lt;div class="col-sm-9"&gt;
                    &lt;input type="password" class="form-control" name="newPassword" id="newPasswordLabel" placeholder="New password" aria-label="New password"&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Form Group --&gt;
                &lt;div class="row mb-4"&gt;
                  &lt;label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label"&gt;Current password&lt;/label&gt;

                  &lt;div class="col-sm-9"&gt;
                    &lt;input type="password" class="form-control" name="currentPassword" id="currentPasswordLabel" placeholder="Current password" aria-label="Current password"&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Footer --&gt;
                &lt;div class="d-flex align-items-center"&gt;
                  &lt;div class="ms-auto"&gt;
                    &lt;button type="button" class="btn btn-primary"
                            data-nue-step-form-next-options='{
                              "targetSelector": "#basicFormProfile"
                            }'&gt;
                      Next &lt;i class="bi-chevron-right small"&gt;&lt;/i&gt;
                    &lt;/button&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Footer --&gt;
              &lt;/div&gt;

              &lt;div id="basicFormProfile" style="display: none;"&gt;
                &lt;!-- Form Group --&gt;
                &lt;div class="row mb-4"&gt;
                  &lt;label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label"&gt;First name&lt;/label&gt;

                  &lt;div class="col-sm-9"&gt;
                    &lt;input type="password" class="form-control" name="firstName" id="firstNameLabel" placeholder="First name" aria-label="First name"&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Form Group --&gt;
                &lt;div class="row mb-4"&gt;
                  &lt;label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label"&gt;Last name&lt;/label&gt;

                  &lt;div class="col-sm-9"&gt;
                    &lt;input type="password" class="form-control" name="lastName" id="lastNameLabel" placeholder="Last name" aria-label="Last name"&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Form Group --&gt;
                &lt;div class="row mb-4"&gt;
                  &lt;label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label"&gt;Email&lt;/label&gt;

                  &lt;div class="col-sm-9"&gt;
                    &lt;input type="password" class="form-control" name="email" id="emailLabel" placeholder="Email address" aria-label="Email address"&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Footer --&gt;
                &lt;div class="d-flex align-items-center"&gt;
                  &lt;button type="button" class="btn btn-ghost-secondary me-2"
                     data-nue-step-form-prev-options='{
                       "targetSelector": "#basicFormAccount"
                     }'&gt;
                    &lt;i class="bi-chevron-left small"&gt;&lt;/i&gt; Previous step
                  &lt;/button&gt;

                  &lt;div class="ms-auto"&gt;
                    &lt;button type="button" class="btn btn-primary"
                            data-nue-step-form-next-options='{
                              "targetSelector": "#basicFormAddress"
                            }'&gt;
                      Next &lt;i class="bi-chevron-right small"&gt;&lt;/i&gt;
                    &lt;/button&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Footer --&gt;
              &lt;/div&gt;

              &lt;div id="basicFormAddress" style="display: none;"&gt;
                &lt;!-- Form Group --&gt;
                &lt;div class="row mb-4"&gt;
                  &lt;label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label"&gt;Address 1&lt;/label&gt;

                  &lt;div class="col-sm-9"&gt;
                    &lt;input type="password" class="form-control" name="address1" id="address1Label" placeholder="Address 1" aria-label="Address 1"&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Form Group --&gt;
                &lt;div class="row mb-4"&gt;
                  &lt;label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label"&gt;Address 2 &lt;span class="form-label-secondary"&gt;(Optional)&lt;/span&gt;&lt;/label&gt;

                  &lt;div class="col-sm-9"&gt;
                    &lt;input type="password" class="form-control" name="address2" id="address2Label" placeholder="Address 2" aria-label="Address 2"&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Footer --&gt;
                &lt;div class="d-sm-flex align-items-center"&gt;
                  &lt;button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
                     data-nue-step-form-prev-options='{
                       "targetSelector": "#basicFormProfile"
                     }'&gt;
                    &lt;i class="bi-chevron-left small"&gt;&lt;/i&gt; Previous step
                  &lt;/button&gt;

                  &lt;div class="d-flex justify-content-end ms-auto"&gt;
                    &lt;button type="button" class="btn btn-white me-2" data-dismiss="modal" aria-label="Close"&gt;Cancel&lt;/button&gt;
                    &lt;button id="basicFormFinishBtn" type="button" class="btn btn-primary"&gt;Save Changes&lt;/button&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Footer --&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Content Step Form --&gt;

            &lt;!-- Message Body --&gt;
            &lt;div id="basicFormSuccessMessage" class="js-success-message" style="display:none;"&gt;
              &lt;div class="text-center"&gt;
                &lt;img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-hi-five.svg" alt="" style="max-width: 15rem;"&gt;

                &lt;div class="mb-4"&gt;
                  &lt;h2&gt;Successful!&lt;/h2&gt;
                  &lt;p&gt;Your changes have been successfully saved.&lt;/p&gt;
                &lt;/div&gt;

                &lt;div class="d-flex justify-content-center"&gt;
                  &lt;a class="btn btn-white me-3" href="#"&gt;
                    &lt;i class="bi-chevron-left small ms-1"&gt;&lt;/i&gt; Back to projects
                  &lt;/a&gt;
                  &lt;a class="btn btn-primary" href="#"&gt;
                    &lt;i class="tio-city me-1"&gt;&lt;/i&gt; Add new project
                  &lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Message Body --&gt;
          &lt;/form&gt;
          &lt;!-- End Step Form --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="validation-form" class="nue-docs-heading">
    Validation form <a class="anchorjs-link" href="#validation-form" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <form class="js-step-form-validate js-validate" data-nue-step-form-options='{
              "progressSelector": "#validationFormProgress",
              "stepsSelector": "#validationFormContent",
              "endSelector": "#validationFormFinishBtn",
              "isValidate": true
            }'>
        <ul id="validationFormProgress" class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7">
          <li class="step-item">
            <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                "targetSelector": "#validationFormAccount"
              }'>
              <span class="step-icon step-icon-soft-dark">1</span>
              <div class="step-content">
                <span class="step-title">Account</span>
              </div>
            </a>
          </li>

          <li class="step-item">
            <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                 "targetSelector": "#validationFormProfile"
               }'>
              <span class="step-icon step-icon-soft-dark">2</span>
              <div class="step-content">
                <span class="step-title">Profile</span>
              </div>
            </a>
          </li>

          <li class="step-item">
            <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                 "targetSelector": "#validationFormAddress"
               }'>
              <span class="step-icon step-icon-soft-dark">3</span>
              <div class="step-content">
                <span class="step-title">Address</span>
              </div>
            </a>
          </li>
        </ul>

        <div id="validationFormContent">
          <div id="validationFormAccount" class="active">
            <div class="row mb-4">
              <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Username</label>

              <div class="col-sm-9">
                <div class="js-form-message">
                  <input type="password" class="form-control" name="username" id="validationFormUsernameLabel" placeholder="Username" aria-label="Username" required data-msg="Please enter your username.">
                  <span class="invalid-feedback">Please enter a valid username.</span>
                </div>
              </div>
            </div>

            <div class="row mb-4">
              <label for="validationFormNewPasswordLabel" class="col-sm-3 col-form-label form-label">New password</label>

              <div class="col-sm-9">
                <div class="js-form-message">
                  <input type="password" class="form-control" name="newPassword" id="validationFormNewPasswordLabel" placeholder="New password" aria-label="New password" required data-msg="Your password is invalid. Please try again.">
                  <span class="invalid-feedback">Please enter a valid password.</span>
                </div>
              </div>
            </div>

            <div class="row mb-4">
              <label for="validationFormCurrentPasswordLabel" class="col-sm-3 col-form-label form-label">Current password</label>

              <div class="col-sm-9">
                <div class="js-form-message">
                  <input type="password" class="form-control" name="currentPassword" id="validationFormCurrentPasswordLabel" placeholder="Current password" aria-label="Current password" required data-msg="Password does not match the confirm password.">
                  <span class="invalid-feedback">Please enter a valid current password.</span>
                </div>
              </div>
            </div>

            <div class="d-flex align-items-center">
              <div class="ms-auto">
                <button type="button" class="btn btn-primary" data-nue-step-form-next-options='{
                          "targetSelector": "#validationFormProfile"
                        }'>
                  Next <i class="bi-chevron-right small"></i>
                </button>
              </div>
            </div>
          </div>

          <div id="validationFormProfile" style="display: none;">
            <div class="row mb-4">
              <label for="validationFormFirstNameLabel" class="col-sm-3 col-form-label form-label">First name</label>

              <div class="col-sm-9">
                <div class="js-form-message">
                  <input type="password" class="form-control" name="firstName" id="validationFormFirstNameLabel" placeholder="First name" aria-label="First name" required data-msg="Please enter your first name.">
                  <span class="invalid-feedback">Please enter a valid first name.</span>
                </div>
              </div>
            </div>

            <div class="row mb-4">
              <label for="validationFormLastNameLabel" class="col-sm-3 col-form-label form-label">Last name</label>

              <div class="col-sm-9">
                <div class="js-form-message">
                  <input type="password" class="form-control" name="lastName" id="validationFormLastNameLabel" placeholder="Last name" aria-label="Last name" required data-msg="Please enter your last name.">
                  <span class="invalid-feedback">Please enter a valid last name.</span>
                </div>
              </div>
            </div>

            <div class="row mb-4">
              <label for="validationFormEmailLabel" class="col-sm-3 col-form-label form-label">Email</label>

              <div class="col-sm-9">
                <div class="js-form-message">
                  <input type="password" class="form-control" name="email" id="validationFormEmailLabel" placeholder="Email address" aria-label="Email address" required data-msg="Please enter a valid email address.">
                  <span class="invalid-feedback">Please enter a valid email.</span>
                </div>
              </div>
            </div>

            <div class="d-flex align-items-center">
              <button type="button" class="btn btn-ghost-secondary me-2" data-nue-step-form-prev-options='{
                   "targetSelector": "#validationFormAccount"
                 }'>
                <i class="bi-chevron-left small"></i> Previous step
              </button>

              <div class="ms-auto">
                <button type="button" class="btn btn-primary" data-nue-step-form-next-options='{
                          "targetSelector": "#validationFormAddress"
                        }'>
                  Next <i class="bi-chevron-right small"></i>
                </button>
              </div>
            </div>
          </div>

          <div id="validationFormAddress" style="display: none;">
            <div class="row mb-4">
              <label for="validationFormAddress1Label" class="col-sm-3 col-form-label form-label">Address 1</label>

              <div class="col-sm-9">
                <div class="js-form-message">
                  <input type="password" class="form-control" name="address1" id="validationFormAddress1Label" placeholder="Address 1" aria-label="Address 1" required data-msg="Please enter your address.">
                  <span class="invalid-feedback">Please enter a valid address.</span>
                </div>
              </div>
            </div>

            <div class="row mb-4">
              <label for="validationFormAddress2Label" class="col-sm-3 col-form-label form-label">Address 2 <span class="form-label-secondary">(Optional)</span></label>

              <div class="col-sm-9">
                <input type="password" class="form-control" name="address2" id="validationFormAddress2Label" placeholder="Address 2" aria-label="Address 2">
              </div>
            </div>

            <div class="d-sm-flex align-items-center">
              <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2" data-nue-step-form-prev-options='{
                   "targetSelector": "#validationFormProfile"
                 }'>
                <i class="bi-chevron-left small"></i> Previous step
              </button>

              <div class="d-flex justify-content-end ms-auto">
                <button type="button" class="btn btn-white me-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                <button id="validationFormFinishBtn" type="button" class="btn btn-primary">Save Changes</button>
              </div>
            </div>
          </div>
        </div>

        <div id="validationFormSuccessMessage" class="js-success-message" style="display:none;">
          <div class="text-center">
            <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-hi-five.svg" alt="" style="max-width: 15rem;">

            <div class="mb-4">
              <h2>Successful!</h2>
              <p>Your changes have been successfully saved.</p>
            </div>

            <div class="d-flex justify-content-center">
              <a class="btn btn-white me-3" href="#">
                <i class="bi-chevron-left small ms-1"></i> Back to projects
              </a>
              <a class="btn btn-primary" href="#">
                <i class="tio-city me-1"></i> Add new project
              </a>
            </div>
          </div>
        </div>
      </form>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step Form --&gt;
          &lt;form class=&quot;js-step-form-validate js-validate&quot;
            data-nue-step-form-options='{
              &quot;progressSelector&quot;: &quot;#validationFormProgress&quot;,
              &quot;stepsSelector&quot;: &quot;#validationFormContent&quot;,
              &quot;endSelector&quot;: &quot;#validationFormFinishBtn&quot;,
              &quot;isValidate&quot;: true
            }'&gt;
            &lt;!-- Step --&gt;
            &lt;ul id=&quot;validationFormProgress&quot; class=&quot;js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7&quot;&gt;
              &lt;li class=&quot;step-item&quot;&gt;
                &lt;a class=&quot;step-content-wrapper&quot; href=&quot;javascript:;&quot;
                   data-nue-step-form-next-options='{
                    &quot;targetSelector&quot;: &quot;#validationFormAccount&quot;
                  }'&gt;
                  &lt;span class=&quot;step-icon step-icon-soft-dark&quot;&gt;1&lt;/span&gt;
                  &lt;div class=&quot;step-content&quot;&gt;
                    &lt;span class=&quot;step-title&quot;&gt;Account&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/li&gt;

              &lt;li class=&quot;step-item&quot;&gt;
                &lt;a class=&quot;step-content-wrapper&quot; href=&quot;javascript:;&quot;
                   data-nue-step-form-next-options='{
                     &quot;targetSelector&quot;: &quot;#validationFormProfile&quot;
                   }'&gt;
                  &lt;span class=&quot;step-icon step-icon-soft-dark&quot;&gt;2&lt;/span&gt;
                  &lt;div class=&quot;step-content&quot;&gt;
                    &lt;span class=&quot;step-title&quot;&gt;Profile&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/li&gt;

              &lt;li class=&quot;step-item&quot;&gt;
                &lt;a class=&quot;step-content-wrapper&quot; href=&quot;javascript:;&quot;
                   data-nue-step-form-next-options='{
                     &quot;targetSelector&quot;: &quot;#validationFormAddress&quot;
                   }'&gt;
                  &lt;span class=&quot;step-icon step-icon-soft-dark&quot;&gt;3&lt;/span&gt;
                  &lt;div class=&quot;step-content&quot;&gt;
                    &lt;span class=&quot;step-title&quot;&gt;Address&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- End Step --&gt;

            &lt;!-- Content Step Form --&gt;
            &lt;div id=&quot;validationFormContent&quot;&gt;
              &lt;div id=&quot;validationFormAccount&quot; class=&quot;active&quot;&gt;
                &lt;!-- Form Group --&gt;
                &lt;div class=&quot;row mb-4&quot;&gt;
                  &lt;label for=&quot;validationFormUsernameLabel&quot; class=&quot;col-sm-3 col-form-label form-label&quot;&gt;Username&lt;/label&gt;

                  &lt;div class=&quot;col-sm-9&quot;&gt;
                    &lt;div class=&quot;js-form-message&quot;&gt;
                      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;username&quot; id=&quot;validationFormUsernameLabel&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; required data-msg=&quot;Please enter your username.&quot;&gt;
                      &lt;span class=&quot;invalid-feedback&quot;&gt;Please enter a valid username.&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Form Group --&gt;
                &lt;div class=&quot;row mb-4&quot;&gt;
                  &lt;label for=&quot;validationFormNewPasswordLabel&quot; class=&quot;col-sm-3 col-form-label form-label&quot;&gt;New password&lt;/label&gt;

                  &lt;div class=&quot;col-sm-9&quot;&gt;
                    &lt;div class=&quot;js-form-message&quot;&gt;
                      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;newPassword&quot; id=&quot;validationFormNewPasswordLabel&quot; placeholder=&quot;New password&quot; aria-label=&quot;New password&quot; required data-msg=&quot;Your password is invalid. Please try again.&quot;&gt;
                      &lt;span class=&quot;invalid-feedback&quot;&gt;Please enter a valid password.&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Form Group --&gt;
                &lt;div class=&quot;row mb-4&quot;&gt;
                  &lt;label for=&quot;validationFormCurrentPasswordLabel&quot; class=&quot;col-sm-3 col-form-label form-label&quot;&gt;Current password&lt;/label&gt;

                  &lt;div class=&quot;col-sm-9&quot;&gt;
                    &lt;div class=&quot;js-form-message&quot;&gt;
                      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;currentPassword&quot; id=&quot;validationFormCurrentPasswordLabel&quot; placeholder=&quot;Current password&quot; aria-label=&quot;Current password&quot; required data-msg=&quot;Password does not match the confirm password.&quot;&gt;
                      &lt;span class=&quot;invalid-feedback&quot;&gt;Please enter a valid current password.&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Footer --&gt;
                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                  &lt;div class=&quot;ms-auto&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;
                            data-nue-step-form-next-options='{
                              &quot;targetSelector&quot;: &quot;#validationFormProfile&quot;
                            }'&gt;
                      Next &lt;i class=&quot;bi-chevron-right small&quot;&gt;&lt;/i&gt;
                    &lt;/button&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Footer --&gt;
              &lt;/div&gt;

              &lt;div id=&quot;validationFormProfile&quot; style=&quot;display: none;&quot;&gt;
                &lt;!-- Form Group --&gt;
                &lt;div class=&quot;row mb-4&quot;&gt;
                  &lt;label for=&quot;validationFormFirstNameLabel&quot; class=&quot;col-sm-3 col-form-label form-label&quot;&gt;First name&lt;/label&gt;

                  &lt;div class=&quot;col-sm-9&quot;&gt;
                    &lt;div class=&quot;js-form-message&quot;&gt;
                      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;firstName&quot; id=&quot;validationFormFirstNameLabel&quot; placeholder=&quot;First name&quot; aria-label=&quot;First name&quot; required data-msg=&quot;Please enter your first name.&quot;&gt;
                      &lt;span class=&quot;invalid-feedback&quot;&gt;Please enter a valid first name.&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Form Group --&gt;
                &lt;div class=&quot;row mb-4&quot;&gt;
                  &lt;label for=&quot;validationFormLastNameLabel&quot; class=&quot;col-sm-3 col-form-label form-label&quot;&gt;Last name&lt;/label&gt;

                  &lt;div class=&quot;col-sm-9&quot;&gt;
                    &lt;div class=&quot;js-form-message&quot;&gt;
                      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;lastName&quot; id=&quot;validationFormLastNameLabel&quot; placeholder=&quot;Last name&quot; aria-label=&quot;Last name&quot; required data-msg=&quot;Please enter your last name.&quot;&gt;
                      &lt;span class=&quot;invalid-feedback&quot;&gt;Please enter a valid last name.&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Form Group --&gt;
                &lt;div class=&quot;row mb-4&quot;&gt;
                  &lt;label for=&quot;validationFormEmailLabel&quot; class=&quot;col-sm-3 col-form-label form-label&quot;&gt;Email&lt;/label&gt;

                  &lt;div class=&quot;col-sm-9&quot;&gt;
                    &lt;div class=&quot;js-form-message&quot;&gt;
                      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;email&quot; id=&quot;validationFormEmailLabel&quot; placeholder=&quot;Email address&quot; aria-label=&quot;Email address&quot; required data-msg=&quot;Please enter a valid email address.&quot;&gt;
                      &lt;span class=&quot;invalid-feedback&quot;&gt;Please enter a valid email.&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Footer --&gt;
                &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                  &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-secondary me-2&quot;
                     data-nue-step-form-prev-options='{
                       &quot;targetSelector&quot;: &quot;#validationFormAccount&quot;
                     }'&gt;
                    &lt;i class=&quot;bi-chevron-left small&quot;&gt;&lt;/i&gt; Previous step
                  &lt;/button&gt;

                  &lt;div class=&quot;ms-auto&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;
                            data-nue-step-form-next-options='{
                              &quot;targetSelector&quot;: &quot;#validationFormAddress&quot;
                            }'&gt;
                      Next &lt;i class=&quot;bi-chevron-right small&quot;&gt;&lt;/i&gt;
                    &lt;/button&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Footer --&gt;
              &lt;/div&gt;

              &lt;div id=&quot;validationFormAddress&quot; style=&quot;display: none;&quot;&gt;
                &lt;!-- Form Group --&gt;
                &lt;div class=&quot;row mb-4&quot;&gt;
                  &lt;label for=&quot;validationFormAddress1Label&quot; class=&quot;col-sm-3 col-form-label form-label&quot;&gt;Address 1&lt;/label&gt;

                  &lt;div class=&quot;col-sm-9&quot;&gt;
                    &lt;div class=&quot;js-form-message&quot;&gt;
                      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;address1&quot; id=&quot;validationFormAddress1Label&quot; placeholder=&quot;Address 1&quot; aria-label=&quot;Address 1&quot; required data-msg=&quot;Please enter your address.&quot;&gt;
                      &lt;span class=&quot;invalid-feedback&quot;&gt;Please enter a valid address.&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Form Group --&gt;
                &lt;div class=&quot;row mb-4&quot;&gt;
                  &lt;label for=&quot;validationFormAddress2Label&quot; class=&quot;col-sm-3 col-form-label form-label&quot;&gt;Address 2 &lt;span class=&quot;form-label-secondary&quot;&gt;(Optional)&lt;/span&gt;&lt;/label&gt;

                  &lt;div class=&quot;col-sm-9&quot;&gt;
                    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;address2&quot; id=&quot;validationFormAddress2Label&quot; placeholder=&quot;Address 2&quot; aria-label=&quot;Address 2&quot;&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Form Group --&gt;

                &lt;!-- Footer --&gt;
                &lt;div class=&quot;d-sm-flex align-items-center&quot;&gt;
                  &lt;button type=&quot;button&quot; class=&quot;btn btn-ghost-secondary mb-3 mb-sm-0 me-2&quot;
                     data-nue-step-form-prev-options='{
                       &quot;targetSelector&quot;: &quot;#validationFormProfile&quot;
                     }'&gt;
                    &lt;i class=&quot;bi-chevron-left small&quot;&gt;&lt;/i&gt; Previous step
                  &lt;/button&gt;

                  &lt;div class=&quot;d-flex justify-content-end ms-auto&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-white me-2&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;Cancel&lt;/button&gt;
                    &lt;button id=&quot;validationFormFinishBtn&quot; type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save Changes&lt;/button&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Footer --&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Content Step Form --&gt;

            &lt;!-- Message Body --&gt;
            &lt;div id=&quot;validationFormSuccessMessage&quot; class=&quot;js-success-message&quot; style=&quot;display:none;&quot;&gt;
              &lt;div class=&quot;text-center&quot;&gt;
                &lt;img class=&quot;img-fluid mb-3&quot; src=&quot;https://cdn.btekno.id/templates/nue/svg/illustrations/oc-hi-five.svg&quot; alt=&quot;&quot; style=&quot;max-width: 15rem;&quot;&gt;

                &lt;div class=&quot;mb-4&quot;&gt;
                  &lt;h2&gt;Successful!&lt;/h2&gt;
                  &lt;p&gt;Your changes have been successfully saved.&lt;/p&gt;
                &lt;/div&gt;

                &lt;div class=&quot;d-flex justify-content-center&quot;&gt;
                  &lt;a class=&quot;btn btn-white me-3&quot; href=&quot;#&quot;&gt;
                    &lt;i class=&quot;bi-chevron-left small ms-1&quot;&gt;&lt;/i&gt; Back to projects
                  &lt;/a&gt;
                  &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;
                    &lt;i class=&quot;tio-city me-1&quot;&gt;&lt;/i&gt; Add new project
                  &lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Message Body --&gt;
          &lt;/form&gt;
          &lt;!-- End Step Form --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- JS Front --&gt;
          &lt;script src="https://cdn.btekno.id/templates/nue/js/hs.bs-validation.js"&gt;&lt;/script&gt;

          &lt;!-- JS Plugins Init. --&gt;
          &lt;script&gt;
            (function() {
              // INITIALIZATION OF STEP FORM
              // =======================================================
               new NueStepForm('.js-step-form-validate', {
                 validator: NueBsValidation.init('.js-validate'),
                 finish ($el) {
                   const $successMessageTempalte = $el.querySelector('.js-success-message').cloneNode(true)

                   $successMessageTempalte.style.display = 'block'

                   $el.style.display = 'none'
                   $el.parentElement.appendChild($successMessageTempalte)
                 }
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
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
              <h5 class="modal-title" id="exampleModalLabel">Step Forms</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form class="js-step-form" data-nue-step-form-options='{
                      "progressSelector": "#modalStepFormProgress",
                      "stepsSelector": "#modalStepFormContent",
                      "endSelector": "#modalStepFinishBtn"
                    }'>
                <ul id="modalStepFormProgress" class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7">
                  <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                        "targetSelector": "#modalStepDetails"
                      }'>
                      <span class="step-icon step-icon-soft-dark">1</span>
                      <div class="step-content">
                        <span class="step-title">Details</span>
                      </div>
                    </a>
                  </li>

                  <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                         "targetSelector": "#modalStepTerms"
                       }'>
                      <span class="step-icon step-icon-soft-dark">2</span>
                      <div class="step-content">
                        <span class="step-title">Terms</span>
                      </div>
                    </a>
                  </li>

                  <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;" data-nue-step-form-next-options='{
                         "targetSelector": "#modalStepMembers"
                       }'>
                      <span class="step-icon step-icon-soft-dark">3</span>
                      <div class="step-content">
                        <span class="step-title">Members</span>
                      </div>
                    </a>
                  </li>
                </ul>

                <div id="modalStepFormContent">
                  <div id="modalStepDetails" class="active">
                    <h4>Details content</h4>

                    <p>...</p>

                    <div class="d-flex align-items-center">
                      <div class="ms-auto">
                        <button type="button" class="btn btn-primary" data-nue-step-form-next-options='{
                                  "targetSelector": "#modalStepTerms"
                                }'>
                          Next <i class="bi-chevron-right small"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div id="modalStepTerms" style="display: none;">
                    <h4>Terms content</h4>

                    <p>...</p>

                    <div class="d-flex align-items-center">
                      <button type="button" class="btn btn-ghost-secondary me-2" data-nue-step-form-prev-options='{
                           "targetSelector": "#modalStepDetails"
                         }'>
                        <i class="bi-chevron-left small"></i> Previous step
                      </button>

                      <div class="ms-auto">
                        <button type="button" class="btn btn-primary" data-nue-step-form-next-options='{
                                  "targetSelector": "#modalStepMembers"
                                }'>
                          Next <i class="bi-chevron-right small"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div id="modalStepMembers" style="display: none;">
                    <h4>Members content</h4>

                    <p>...</p>

                    <div class="d-sm-flex align-items-center">
                      <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2" data-nue-step-form-prev-options='{
                           "targetSelector": "#modalStepTerms"
                         }'>
                        <i class="bi-chevron-left small"></i> Previous step
                      </button>

                      <div class="d-flex justify-content-end ms-auto">
                        <button type="button" class="btn btn-white me-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                        <button id="modalStepFinishBtn" type="button" class="btn btn-primary">Create project</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="modalStepSuccessMessage" class="js-success-message" style="display:none;">
                  <div class="text-center">
                    <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-hi-five.svg" alt="" style="max-width: 15rem;">

                    <div class="mb-4">
                      <h2>Successful!</h2>
                      <p>New project has been successfully created.</p>
                    </div>

                    <div class="d-flex justify-content-center">
                      <a class="btn btn-white me-3" href="#">
                        <i class="bi-chevron-left small ms-1"></i> Back to projects
                      </a>
                      <a class="btn btn-primary" href="#">
                        <i class="tio-city me-1"></i> Add new project
                      </a>
                    </div>
                  </div>
                </div>
              </form>
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
                  &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Step Forms&lt;/h5&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;

                &lt;div class="modal-body"&gt;
                  &lt;!-- Step Form --&gt;
                  &lt;form class="js-step-form"
                        data-nue-step-form-options='{
                          "progressSelector": "#modalStepFormProgress",
                          "stepsSelector": "#modalStepFormContent",
                          "endSelector": "#createProjectFinishBtn"
                        }'&gt;
                    &lt;!-- Step --&gt;
                    &lt;ul id="modalStepFormProgress" class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7"&gt;
                      &lt;li class="step-item"&gt;
                        &lt;a class="step-content-wrapper" href="javascript:;"
                           data-nue-step-form-next-options='{
                            "targetSelector": "#modalStepDetails"
                          }'&gt;
                          &lt;span class="step-icon step-icon-soft-dark"&gt;1&lt;/span&gt;
                          &lt;div class="step-content"&gt;
                            &lt;span class="step-title"&gt;Details&lt;/span&gt;
                          &lt;/div&gt;
                        &lt;/a&gt;
                      &lt;/li&gt;

                      &lt;li class="step-item"&gt;
                        &lt;a class="step-content-wrapper" href="javascript:;"
                           data-nue-step-form-next-options='{
                             "targetSelector": "#modalStepTerms"
                           }'&gt;
                          &lt;span class="step-icon step-icon-soft-dark"&gt;2&lt;/span&gt;
                          &lt;div class="step-content"&gt;
                            &lt;span class="step-title"&gt;Terms&lt;/span&gt;
                          &lt;/div&gt;
                        &lt;/a&gt;
                      &lt;/li&gt;

                      &lt;li class="step-item"&gt;
                        &lt;a class="step-content-wrapper" href="javascript:;"
                           data-nue-step-form-next-options='{
                             "targetSelector": "#modalStepMembers"
                           }'&gt;
                          &lt;span class="step-icon step-icon-soft-dark"&gt;3&lt;/span&gt;
                          &lt;div class="step-content"&gt;
                            &lt;span class="step-title"&gt;Members&lt;/span&gt;
                          &lt;/div&gt;
                        &lt;/a&gt;
                      &lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;!-- End Step --&gt;

                    &lt;!-- Content Step Form --&gt;
                    &lt;div id="modalStepFormContent"&gt;
                      &lt;div id="modalStepDetails" class="active"&gt;
                        &lt;h4&gt;Details content&lt;/h4&gt;

                        &lt;p&gt;...&lt;/p&gt;

                        &lt;!-- Footer --&gt;
                        &lt;div class="d-flex align-items-center"&gt;
                          &lt;div class="ms-auto"&gt;
                            &lt;button type="button" class="btn btn-primary"
                                    data-nue-step-form-next-options='{
                                      "targetSelector": "#modalStepTerms"
                                    }'&gt;
                              Next &lt;i class="bi-chevron-right small"&gt;&lt;/i&gt;
                            &lt;/button&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!-- End Footer --&gt;
                      &lt;/div&gt;

                      &lt;div id="modalStepTerms" style="display: none;"&gt;
                        &lt;h4&gt;Terms content&lt;/h4&gt;

                        &lt;p&gt;...&lt;/p&gt;

                        &lt;!-- Footer --&gt;
                        &lt;div class="d-flex align-items-center"&gt;
                          &lt;button type="button" class="btn btn-ghost-secondary me-2"
                             data-nue-step-form-prev-options='{
                               "targetSelector": "#modalStepDetails"
                             }'&gt;
                            &lt;i class="bi-chevron-left small"&gt;&lt;/i&gt; Previous step
                          &lt;/button&gt;

                          &lt;div class="ms-auto"&gt;
                            &lt;button type="button" class="btn btn-primary"
                                    data-nue-step-form-next-options='{
                                      "targetSelector": "#modalStepMembers"
                                    }'&gt;
                              Next &lt;i class="bi-chevron-right small"&gt;&lt;/i&gt;
                            &lt;/button&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!-- End Footer --&gt;
                      &lt;/div&gt;

                      &lt;div id="modalStepMembers" style="display: none;"&gt;
                        &lt;h4&gt;Members content&lt;/h4&gt;

                        &lt;p&gt;...&lt;/p&gt;

                        &lt;!-- Footer --&gt;
                        &lt;div class="d-sm-flex align-items-center"&gt;
                          &lt;button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
                             data-nue-step-form-prev-options='{
                               "targetSelector": "#modalStepTerms"
                             }'&gt;
                            &lt;i class="bi-chevron-left small"&gt;&lt;/i&gt; Previous step
                          &lt;/button&gt;

                          &lt;div class="d-flex justify-content-end ms-auto"&gt;
                            &lt;button type="button" class="btn btn-white me-2" data-dismiss="modal" aria-label="Close"&gt;Cancel&lt;/button&gt;
                            &lt;button id="createProjectFinishBtn" type="button" class="btn btn-primary"&gt;Create project&lt;/button&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!-- End Footer --&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Content Step Form --&gt;

                    &lt;!-- Message Body --&gt;
                    &lt;div id="modalStepSuccessMessage" class="js-success-message" style="display:none;"&gt;
                      &lt;div class="text-center"&gt;
                        &lt;img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-hi-five.svg" alt="" style="max-width: 15rem;"&gt;

                        &lt;div class="mb-4"&gt;
                          &lt;h2&gt;Successful!&lt;/h2&gt;
                          &lt;p&gt;New project has been successfully created.&lt;/p&gt;
                        &lt;/div&gt;

                        &lt;div class="d-flex justify-content-center"&gt;
                          &lt;a class="btn btn-white me-3" href="#"&gt;
                            &lt;i class="bi-chevron-left small ms-1"&gt;&lt;/i&gt; Back to projects
                          &lt;/a&gt;
                          &lt;a class="btn btn-primary" href="#"&gt;
                            &lt;i class="tio-city me-1"&gt;&lt;/i&gt; Add new project
                          &lt;/a&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Message Body --&gt;
                  &lt;/form&gt;
                  &lt;!-- End Step Form --&gt;
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
              <p><code>progressSelector</code></p>
            </td>
            <td>A selector that contains a block with progress in the form of numbered or text identifiers of a specific form</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>stepsSelector</code></p>
            </td>
            <td>ID of the block that contains the blocks with steps</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>nextSelector</code></p>
            </td>
            <td>Selector, when clicked, the transition to the next step will be carried out</td>
            <td><code>'[data-nue-step-form-next-options]'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>prevSelector</code></p>
            </td>
            <td>Selector, when clicked, the transition to the previous step will be carried out</td>
            <td><code>'[data-nue-step-form-prev-options]'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>isValidate</code></p>
            </td>
            <td>If true, then includes field validation at each step, according to the rules of the <code>jquery.validation</code> plugin</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.active</code></p>
            </td>
            <td>Class that will be given to the element of progress with an active step</td>
            <td><code>'active'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.error</code></p>
            </td>
            <td>Will be add to step item if validation has errors</td>
            <td><code>'is-invalid'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.checked</code></p>
            </td>
            <td>Class to be given to the validated progress element</td>
            <td><code>'checked'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.focus</code></p>
            </td>
            <td>Class to be given to the focused progress element</td>
            <td><code>'focus'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.required</code></p>
            </td>
            <td>Сlass that should be added to <code>.step-item</code> if the step container has a required field</td>
            <td><code>.js-step-required</code></td>
          </tr>

          <tr>
            <td>
              <p><code>finish</code></p>
            </td>
            <td>Сalled after the last step</td>
            <td><code>() => {}</code></td>
          </tr>

          <tr>
            <td>
              <p><code>onNextStep</code></p>
            </td>
            <td>Сalled after going to the next step</td>
            <td><code>() => {}</code></td>
          </tr>

          <tr>
            <td>
              <p><code>onPrevStep</code></p>
            </td>
            <td>Сalled after going to the previous step</td>
            <td><code>() => {}</code></td>
          </tr>

          <tr>
            <td>
              <p><code>preventNextStep</code></p>
            </td>
            <td>Сalled before going to the next step. Return promise is required</td>
            <td><code>() => {
              return new Promise((resolve, reject) => {
                resolve()
              })
            }</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
