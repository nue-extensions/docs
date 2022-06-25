@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Toggle Password')

@section('js')
  <script>
    // INITIALIZATION OF TOGGLE PASSWORD
    // =======================================================
    new NueTogglePassword('.js-toggle-password')
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Toggle Password
    <x-slot:description>Show or hide password field.</x-slot:description>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF TOGGLE PASSWORD
          // =======================================================
          new NueTogglePassword('.js-toggle-password')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-sm-50">
        <div class="d-flex justify-content-between align-items-center">
          <label class="form-label" for="signupSimpleLoginPassword">Password</label>
        </div>

        <div class="input-group input-group-merge" data-nue-validation-validate-class>
          <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSimpleLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-nue-toggle-password-options='{
                 "target": "#changePassTarget",
                 "defaultClass": "bi-eye-slash",
                 "showClass": "bi-eye",
                 "classChangeTarget": "#changePassIcon"
               }'>
          <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
            <i id="changePassIcon" class="bi-eye"></i>
          </a>
        </div>

        <span class="invalid-feedback">Please enter a valid password.</span>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="d-flex justify-content-between align-items-center"&gt;
            &lt;label class="form-label" for="signupSimpleLoginPassword"&gt;Password&lt;/label&gt;
          &lt;/div&gt;

          &lt;div class="input-group input-group-merge" data-nue-validation-validate-class&gt;
            &lt;input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSimpleLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8"
                  data-nue-toggle-password-options='{
                   "target": "#changePassTarget",
                   "defaultClass": "bi-eye-slash",
                   "showClass": "bi-eye",
                   "classChangeTarget": "#changePassIcon"
                 }'&gt;
            &lt;a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;"&gt;
              &lt;i id="changePassIcon" class="bi-eye"&gt;&lt;/i&gt;
            &lt;/a&gt;
          &lt;/div&gt;

          &lt;span class="invalid-feedback"&gt;Please enter a valid password.&lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-checkbox" class="nue-docs-heading">
    With Checkbox <a class="anchorjs-link" href="#with-checkbox" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-sm-50">
        <div class="mb-4">
          <label for="currentPasswordLabel" class="form-label">Current password</label>
          <input type="password" class="js-toggle-password form-control" id="currentPasswordLabel" placeholder="Enter password" value="TH6R95E9LsdT" data-nue-toggle-password-options='{
                   "target": "#changePasswordToggleCheckboxEg"
                 }'>
        </div>

        <div class="mb-4">
          <label for="newPasswordLabel" class="form-label">New password</label>
          <input type="password" class="js-toggle-password form-control" id="newPasswordLabel" placeholder="Enter password" data-nue-toggle-password-options='{
                   "target": "#changePasswordToggleCheckboxEg"
                 }'>
        </div>

        <div class="mb-4">
          <div class="form-check">
            <input type="checkbox" id="changePasswordToggleCheckboxEg" class="form-check-input">
            <label class="form-check-label" for="changePasswordToggleCheckboxEg">Show password</label>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form --&gt;
          &lt;div class="mb-4"&gt;
            &lt;label for="currentPasswordLabel" class="form-label"&gt;Current password&lt;/label&gt;
            &lt;input type="password" class="js-toggle-password form-control" id="currentPasswordLabel" placeholder="Enter password" value="TH6R95E9LsdT"
                   data-nue-toggle-password-options='{
                     "target": "#changePasswordToggleCheckboxEg"
                   }'&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;

          &lt;!-- Form --&gt;
          &lt;div class="mb-4"&gt;
            &lt;label for="newPasswordLabel" class="form-label"&gt;New password&lt;/label&gt;
            &lt;input type="password" class="js-toggle-password form-control" id="newPasswordLabel" placeholder="Enter password"
                   data-nue-toggle-password-options='{
                     "target": "#changePasswordToggleCheckboxEg"
                   }'&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;

          &lt;div class="mb-4"&gt;
            &lt;!-- Check --&gt;
            &lt;div class="form-check"&gt;
              &lt;input type="checkbox" id="changePasswordToggleCheckboxEg" class="form-check-input"&gt;
              &lt;label class="form-check-label" for="changePasswordToggleCheckboxEg"&gt;Show password&lt;/label&gt;
            &lt;/div&gt;
            &lt;!-- End Check --&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="show-default" class="nue-docs-heading">
    Show default <a class="anchorjs-link" href="#show-default" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-sm-50">
        <label for="showPasswordLabel" class="form-label">Password</label>

        <div class="input-group input-group-merge">
          <input type="password" class="js-toggle-password form-control" id="showPasswordLabel" placeholder="Enter password" value="TH6R95E9LsdT" data-nue-toggle-password-options='{
                   "target": ".js-password-toggle-show-target",
                   "show": true,
                   "defaultClass": "bi-eye-slash",
                   "showClass": "bi-eye",
                   "classChangeTarget": "#changePasswordShowIcon"
                 }'>
          <a class="js-password-toggle-show-target input-group-append input-group-text" href="javascript:;">
            <i id="changePasswordShowIcon"></i>
          </a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;label for="showPasswordLabel" class="form-label"&gt;Password&lt;/label&gt;

          &lt;div class="input-group input-group-merge"&gt;
            &lt;input type="password" class="js-toggle-password form-control" id="showPasswordLabel" placeholder="Enter password" value="TH6R95E9LsdT"
                   data-nue-toggle-password-options='{
                     "target": ".js-password-toggle-show-target",
                     "show": true,
                     "defaultClass": "bi-eye-slash",
                     "showClass": "bi-eye",
                     "classChangeTarget": "#changePasswordShowIcon"
                   }'&gt;
            &lt;a class="js-password-toggle-show-target input-group-append input-group-text" href="javascript:;"&gt;
              &lt;i id="changePasswordShowIcon"&gt;&lt;/i&gt;
            &lt;/a&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="multi-toggle" class="nue-docs-heading">
    Multi toggle <a class="anchorjs-link" href="#multi-toggle" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-sm-50 mb-4">
        <label class="multiTogglePasswordLabel">Current password</label>

        <div class="input-group input-group-merge">
          <input type="password" class="js-toggle-password form-control" id="multiToggleCurrentPasswordLabel" placeholder="Enter password" value="TH6R95E9LsdT" data-nue-toggle-password-options='{
                   "target": [".js-change-password-multi-1", ".js-change-password-multi-2"],
                   "defaultClass": "bi-eye-slash",
                   "showClass": "bi-eye",
                   "classChangeTarget": "#showMultiPassIcon1"
                 }'>
          <a class="js-change-password-multi-1 input-group-append input-group-text" href="javascript:;">
            <i id="showMultiPassIcon1"></i>
          </a>
        </div>
      </div>

      <div class="w-sm-50">
        <label class="multiToggleNewPasswordLabel">New password</label>

        <div class="input-group input-group-merge">
          <input type="password" class="js-toggle-password form-control" id="multiToggleNewPasswordLabel" placeholder="Enter password" value="TH6R95E9LsdT" data-nue-toggle-password-options='{
                   "target": [".js-change-password-multi-1", ".js-change-password-multi-2"],
                   "defaultClass": "bi-eye-slash",
                   "showClass": "bi-eye",
                   "classChangeTarget": "#showMultiPassIcon2"
                 }'>
          <a class="js-change-password-multi-2 input-group-append input-group-text" href="javascript:;">
            <i id="showMultiPassIcon2"></i>
          </a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form --&gt;
          &lt;div class="w-sm-50 mb-4"&gt;
            &lt;label class="multiTogglePasswordLabel"&gt;Current password&lt;/label&gt;

            &lt;div class="input-group input-group-merge"&gt;
              &lt;input type="password" class="js-toggle-password form-control" id="multiToggleCurrentPasswordLabel" placeholder="Enter password" value="TH6R95E9LsdT"
                     data-nue-toggle-password-options='{
                       "target": [".js-change-password-multi-1", ".js-change-password-multi-2"],
                       "defaultClass": "bi-eye-slash",
                       "showClass": "bi-eye",
                       "classChangeTarget": "#showMultiPassIcon1"
                     }'&gt;
              &lt;a class="js-change-password-multi-1 input-group-append input-group-text" href="javascript:;"&gt;
                &lt;i id="showMultiPassIcon1"&gt;&lt;/i&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;

          &lt;!-- Form --&gt;
          &lt;div class="w-sm-50"&gt;
            &lt;label class="multiToggleNewPasswordLabel"&gt;New password&lt;/label&gt;

            &lt;div class="input-group input-group-merge"&gt;
              &lt;input type="password" class="js-toggle-password form-control" id="multiToggleNewPasswordLabel" placeholder="Enter password" value="TH6R95E9LsdT"
                     data-nue-toggle-password-options='{
                       "target": [".js-change-password-multi-1", ".js-change-password-multi-2"],
                       "defaultClass": "bi-eye-slash",
                       "showClass": "bi-eye",
                       "classChangeTarget": "#showMultiPassIcon2"
                     }'&gt;
              &lt;a class="js-change-password-multi-2 input-group-append input-group-text" href="javascript:;"&gt;
                &lt;i id="showMultiPassIcon2"&gt;&lt;/i&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
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
              <h5 class="modal-title" id="exampleModalLabel">Toggle Password</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form>
                <label for="passwordModalEgLabel" class="form-label">Password</label>

                <div class="input-group input-group-merge">
                  <input type="password" class="js-toggle-password form-control" id="passwordModalEgLabel" placeholder="Enter password" value="TH6R95E9LsdT" data-nue-toggle-password-options='{
                           "target": ".js-password-toggle-target-modal-eg",
                           "defaultClass": "bi-eye-slash",
                           "showClass": "bi-eye",
                           "classChangeTarget": "#changePassIconModalEg"
                         }'>
                  <a class="js-password-toggle-target-modal-eg input-group-append input-group-text" href="javascript:;">
                    <i id="changePassIconModalEg"></i>
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
                  &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Toggle Password&lt;/h5&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;

                &lt;div class="modal-body"&gt;
                  &lt;form&gt;
                    &lt;!-- Form --&gt;
                    &lt;label for="passwordModalEgLabel" class="form-label"&gt;Password&lt;/label&gt;

                    &lt;div class="input-group input-group-merge"&gt;
                      &lt;input type="password" class="js-toggle-password form-control" id="passwordModalEgLabel" placeholder="Enter password" value="TH6R95E9LsdT"
                             data-nue-toggle-password-options='{
                               "target": ".js-password-toggle-target-modal-eg",
                               "defaultClass": "bi-eye-slash",
                               "showClass": "bi-eye",
                               "classChangeTarget": "#changePassIconModalEg"
                             }'&gt;
                      &lt;a class="js-password-toggle-target-modal-eg input-group-append input-group-text" href="javascript:;"&gt;
                        &lt;i id="changePassIconModalEg"&gt;&lt;/i&gt;
                      &lt;/a&gt;
                    &lt;/div&gt;
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
              <code>target</code>
            </td>
            <td>The element when clicked on which the password will be shown or hidden.</td>
            <td>
              <code>null</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>classChangeTarget</code>
            </td>
            <td>The element when showing or hiding the password will be changed class.</td>
            <td>
              <code>null</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>defaultClass</code>
            </td>
            <td>The class to be added by default to <code>classChangeTarget</code>.</td>
            <td>
              <code>null</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>showClass</code>
            </td>
            <td>The class to be added when passowrd is show to <code>classChangeTarget</code>.</td>
            <td>
              <code>null</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>show</code>
            </td>
            <td>Show password by default.</td>
            <td>
              <code>false</code>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
