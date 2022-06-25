@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Checks & Switches')

@section('content')
	<x-nue::docs::header>
    Checks &amp; Switches
    <x-slot:link>https://getbootstrap.com/docs/5.0/forms/checks-radios</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Checks &amp; Radios</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="1">
    <x-slot:preview>
      <div class="form-check mb-3">
        <input type="checkbox" id="formCheck11" class="form-check-input">
        <label class="form-check-label" for="formCheck11">Unchecked</label>
      </div>

      <div class="form-check mb-3">
        <input type="checkbox" id="formCheck12" class="form-check-input" checked>
        <label class="form-check-label" for="formCheck12">Checked</label>
      </div>

      <div class="form-check mb-3">
        <input type="checkbox" id="formCheck13" class="form-check-input indeterminate-checkbox" checked>
        <label class="form-check-label" for="formCheck13">Indeterminate</label>
      </div>

      <div class="form-check mb-3">
        <input type="checkbox" id="formHelperCheck1" class="form-check-input">
        <label class="form-check-label" for="formHelperCheck1">Notify about new notifications</label>
        <div class="text-muted">You will receive notifications about actions to your email.</div>
      </div>

      <div class="form-check mb-3">
        <input type="checkbox" id="formCheck14" class="form-check-input" disabled>
        <label class="form-check-label" for="formCheck14">Unchecked and disabled</label>
      </div>

      <div class="form-check mb-3">
        <input type="checkbox" id="formCheck15" class="form-check-input" checked disabled>
        <label class="form-check-label" for="formCheck15">Checked and disabled</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Checkbox --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="checkbox" id="formCheck11" class="form-check-input"&gt;
            &lt;label class="form-check-label" for="formCheck11"&gt;Unchecked&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox --&gt;

          &lt;!-- Checkbox --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="checkbox" id="formCheck12" class="form-check-input" checked&gt;
            &lt;label class="form-check-label" for="formCheck12"&gt;Checked&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox --&gt;

          &lt;!-- Checkbox --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="checkbox" id="formCheck13" class="form-check-input indeterminate-checkbox" checked&gt;
            &lt;label class="form-check-label" for="formCheck13"&gt;Indeterminate&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox --&gt;

          &lt;!-- Checkbox --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="checkbox" id="formHelperCheck1" class="form-check-input"&gt;
            &lt;label class="form-check-label" for="formHelperCheck1"&gt;Notify about new notifications&lt;/label&gt;
            &lt;div class="text-muted"&gt;You will receive notifications about actions to your email.&lt;/div&gt;
          &lt;/div&gt;

          &lt;!-- Checkbox --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="checkbox" id="formCheck14" class="form-check-input" disabled&gt;
            &lt;label class="form-check-label" for="formCheck14"&gt;Unchecked and disabled&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox --&gt;

          &lt;!-- Checkbox --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="checkbox" id="formCheck15" class="form-check-input" checked disabled&gt;
            &lt;label class="form-check-label" for="formCheck15"&gt;Checked and disabled&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="2">
    <x-slot:preview>
      <div class="form-check mb-3">
        <input type="radio" id="formRadio1" class="form-check-input" name="formRadio">
        <label class="form-check-label" for="formRadio1">Unchecked</label>
      </div>

      <div class="form-check mb-3">
        <input type="radio" id="formRadio2" class="form-check-input" checked name="formRadio">
        <label class="form-check-label" for="formRadio2">Checked</label>
      </div>

      <div class="form-check mb-3">
        <input type="radio" id="formRadio4" class="form-check-input" name="formRadio">
        <label class="form-check-label" for="formRadio4">Notify about new notifications</label>
        <div class="text-muted">You will receive notifications about actions to your email.</div>
      </div>

      <div class="form-check mb-3">
        <input type="radio" id="formRadio5" class="form-check-input" disabled name="formRadio">
        <label class="form-check-label" for="formRadio5">Unchecked and disabled</label>
      </div>

      <div class="form-check mb-3">
        <input type="radio" id="formRadio6" class="form-check-input" checked disabled>
        <label class="form-check-label" for="formRadio6">Checked and disabled</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Checkbox --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="radio" id="formRadio1" class="form-check-input" name="formRadio"&gt;
            &lt;label class="form-check-label" for="formRadio1"&gt;Unchecked&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox --&gt;

          &lt;!-- Checkbox --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="radio" id="formRadio2" class="form-check-input" checked name="formRadio"&gt;
            &lt;label class="form-check-label" for="formRadio2"&gt;Checked&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox --&gt;

          &lt;!-- Checkbox --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="radio" id="formRadio4" class="form-check-input" name="formRadio"&gt;
            &lt;label class="form-check-label" for="formRadio4"&gt;Notify about new notifications&lt;/label&gt;
            &lt;div class="text-muted"&gt;You will receive notifications about actions to your email.&lt;/div&gt;
          &lt;/div&gt;

          &lt;!-- Checkbox --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="radio" id="formRadio5" class="form-check-input" disabled name="formRadio"&gt;
            &lt;label class="form-check-label" for="formRadio5"&gt;Unchecked and disabled&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox --&gt;

          &lt;!-- Checkbox --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="radio" id="formRadio6" class="form-check-input" checked disabled&gt;
            &lt;label class="form-check-label" for="formRadio6"&gt;Checked and disabled&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="3">
    <x-slot:preview>
      <div class="form-check form-check-inline">
        <input type="checkbox" id="formInlineCheck1" class="form-check-input">
        <label class="form-check-label" for="formInlineCheck1">Unchecked</label>
      </div>

      <div class="form-check form-check-inline">
        <input type="checkbox" id="formInlineCheck2" class="form-check-input indeterminate-checkbox" checked>
        <label class="form-check-label" for="formInlineCheck2">Indeterminate</label>
      </div>

      <div class="form-check form-check-inline">
        <input type="checkbox" id="formInlineCheck3" class="form-check-input" checked>
        <label class="form-check-label" for="formInlineCheck3">Checked</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form Check --&gt;
          &lt;div class="form-check form-check-inline"&gt;
            &lt;input type="checkbox" id="formInlineCheck1" class="form-check-input"&gt;
            &lt;label class="form-check-label" for="formInlineCheck1"&gt;Unchecked&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Form Check --&gt;

          &lt;!-- Form Check --&gt;
          &lt;div class="form-check form-check-inline"&gt;
            &lt;input type="checkbox" id="formInlineCheck2" class="form-check-input indeterminate-checkbox" checked&gt;
            &lt;label class="form-check-label" for="formInlineCheck2"&gt;Indeterminate&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Form Check --&gt;

          &lt;!-- Form Check --&gt;
          &lt;div class="form-check form-check-inline"&gt;
            &lt;input type="checkbox" id="formInlineCheck3" class="form-check-input" checked&gt;
            &lt;label class="form-check-label" for="formInlineCheck3"&gt;Checked&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Form Check --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="4">
    <x-slot:preview>
      <div class="form-check form-check-inline">
        <input type="radio" id="formInlineRadio1" class="form-check-input" name="formInlineRadio">
        <label class="form-check-label" for="formInlineRadio1">Unchecked</label>
      </div>

      <div class="form-check form-check-inline">
        <input type="radio" id="formInlineRadio2" class="form-check-input indeterminate-checkbox" checked name="formInlineRadio">
        <label class="form-check-label" for="formInlineRadio2">Checked</label>
      </div>

      <div class="form-check form-check-inline">
        <input type="radio" id="formInlineRadio3" class="form-check-input indeterminate-checkbox" name="formInlineRadio">
        <label class="form-check-label" for="formInlineRadio3">Unchecked</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form Check --&gt;
          &lt;div class="form-check form-check-inline"&gt;
            &lt;input type="radio" id="formInlineRadio1" class="form-check-input" name="formInlineRadio"&gt;
            &lt;label class="form-check-label" for="formInlineRadio1"&gt;Unchecked&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Form Check --&gt;

          &lt;!-- Form Check --&gt;
          &lt;div class="form-check form-check-inline"&gt;
            &lt;input type="radio" id="formInlineRadio2" class="form-check-input indeterminate-checkbox" checked name="formInlineRadio"&gt;
            &lt;label class="form-check-label" for="formInlineRadio2"&gt;Checked&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Form Check --&gt;

          &lt;!-- Form Check --&gt;
          &lt;div class="form-check form-check-inline"&gt;
            &lt;input type="radio" id="formInlineRadio3" class="form-check-input indeterminate-checkbox" name="formInlineRadio"&gt;
            &lt;label class="form-check-label" for="formInlineRadio3"&gt;Unchecked&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Form Check --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="5">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm mb-2 mb-sm-0">
          <label class="form-control" for="formControlRadioEg1">
            <span class="form-check">
              <input type="radio" class="form-check-input" name="formControlRadioEg" id="formControlRadioEg1" checked>
              <span class="form-check-label">Checked</span>
            </span>
          </label>
        </div>

        <div class="col-sm mb-2 mb-sm-0">
          <label class="form-control" for="formControlRadioEg2">
            <span class="form-check">
              <input type="radio" class="form-check-input" name="formControlRadioEg" id="formControlRadioEg2">
              <span class="form-check-label">Unchecked</span>
            </span>
          </label>
        </div>

        <div class="col-sm mb-2 mb-sm-0">
          <label class="form-control" for="formControlRadioEg3">
            <span class="form-check">
              <input type="radio" class="form-check-input" name="formControlRadioEg" id="formControlRadioEg3" disabled>
              <span class="form-check-label">Disabled</span>
            </span>
          </label>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-sm mb-2 mb-sm-0"&gt;
              &lt;!-- Form Radio --&gt;
              &lt;label class="form-control" for="formControlRadioEg1"&gt;
                &lt;span class="form-check"&gt;
                  &lt;input type="radio" class="form-check-input" name="formControlRadioEg" id="formControlRadioEg1" checked&gt;
                  &lt;span class="form-check-label"&gt;Checked&lt;/span&gt;
                &lt;/span&gt;
              &lt;/label&gt;
              &lt;!-- End Form Radio --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm mb-2 mb-sm-0"&gt;
              &lt;!-- Form Radio --&gt;
              &lt;label class="form-control" for="formControlRadioEg2"&gt;
                &lt;span class="form-check"&gt;
                  &lt;input type="radio" class="form-check-input" name="formControlRadioEg" id="formControlRadioEg2"&gt;
                  &lt;span class="form-check-label"&gt;Unchecked&lt;/span&gt;
                &lt;/span&gt;
              &lt;/label&gt;
              &lt;!-- End Form Radio --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm mb-2 mb-sm-0"&gt;
              &lt;!-- Form Radio --&gt;
              &lt;label class="form-control" for="formControlRadioEg3"&gt;
                &lt;span class="form-check"&gt;
                  &lt;input type="radio" class="form-check-input" name="formControlRadioEg" id="formControlRadioEg3" disabled&gt;
                  &lt;span class="form-check-label"&gt;Disabled&lt;/span&gt;
                &lt;/span&gt;
              &lt;/label&gt;
              &lt;!-- End Form Radio --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="form-check-reverse" class="nue-docs-heading">
    Checkbox reverse <a class="anchorjs-link" href="#form-check-reverse" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="6">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm mb-2 mb-sm-0">
          <label class="form-control" for="formControlRadioReverseEg1">
            <span class="form-check form-check-reverse">
              <input type="radio" class="form-check-input" name="formControlRadioReverseEg" id="formControlRadioReverseEg1" checked>
              <span class="form-check-label">Checked</span>
            </span>
          </label>
        </div>

        <div class="col-sm mb-2 mb-sm-0">
          <label class="form-control" for="formControlRadioReverseEg2">
            <span class="form-check form-check-reverse">
              <input type="radio" class="form-check-input" name="formControlRadioReverseEg" id="formControlRadioReverseEg2">
              <span class="form-check-label">Unchecked</span>
            </span>
          </label>
        </div>

        <div class="col-sm mb-2 mb-sm-0">
          <label class="form-control" for="formControlRadioReverseEg3">
            <span class="form-check form-check-reverse">
              <input type="radio" class="form-check-input" name="formControlRadioReverseEg" id="formControlRadioReverseEg3" disabled>
              <span class="form-check-label">Disabled</span>
            </span>
          </label>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-sm mb-2 mb-sm-0"&gt;
              &lt;!-- Form Radio --&gt;
              &lt;label class="form-control" for="formControlRadioReverseEg1"&gt;
                &lt;span class="form-check form-check-reverse"&gt;
                  &lt;input type="radio" class="form-check-input" name="formControlRadioReverseEg" id="formControlRadioReverseEg1" checked&gt;
                  &lt;span class="form-check-label"&gt;Checked&lt;/span&gt;
                &lt;/span&gt;
              &lt;/label&gt;
              &lt;!-- End Form Radio --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm mb-2 mb-sm-0"&gt;
              &lt;!-- Form Radio --&gt;
              &lt;label class="form-control" for="formControlRadioReverseEg2"&gt;
                &lt;span class="form-check form-check-reverse"&gt;
                  &lt;input type="radio" class="form-check-input" name="formControlRadioReverseEg" id="formControlRadioReverseEg2"&gt;
                  &lt;span class="form-check-label"&gt;Unchecked&lt;/span&gt;
                &lt;/span&gt;
              &lt;/label&gt;
              &lt;!-- End Form Radio --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm mb-2 mb-sm-0"&gt;
              &lt;!-- Form Radio --&gt;
              &lt;label class="form-control" for="formControlRadioReverseEg3"&gt;
                &lt;span class="form-check form-check-reverse"&gt;
                  &lt;input type="radio" class="form-check-input" name="formControlRadioReverseEg" id="formControlRadioReverseEg3" disabled&gt;
                  &lt;span class="form-check-label"&gt;Disabled&lt;/span&gt;
                &lt;/span&gt;
              &lt;/label&gt;
              &lt;!-- End Form Radio --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="colorful-form-check" class="nue-docs-heading">
    Colorful checkbox <a class="anchorjs-link" href="#colorful-form-check" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="7">
    <x-slot:preview>
      <div class="form-check form-check-inline form-check-primary">
        <input type="checkbox" id="colorfulFormInlineCheck1" class="form-check-input" checked>
        <label class="form-check-label" for="colorfulFormInlineCheck1">Primary</label>
      </div>

      <div class="form-check form-check-inline form-check-success">
        <input type="checkbox" id="colorfulFormInlineCheck2" class="form-check-input indeterminate-checkbox" checked>
        <label class="form-check-label" for="colorfulFormInlineCheck2">Success</label>
      </div>

      <div class="form-check form-check-inline form-check-danger">
        <input type="checkbox" id="colorfulFormInlineCheck3" class="form-check-input" checked>
        <label class="form-check-label" for="colorfulFormInlineCheck3">Danger</label>
      </div>

      <div class="form-check form-check-inline form-check-info">
        <input type="checkbox" id="colorfulFormInlineCheck4" class="form-check-input" checked>
        <label class="form-check-label" for="colorfulFormInlineCheck4">Info</label>
      </div>

      <div class="form-check form-check-inline form-check-warning">
        <input type="checkbox" id="colorfulFormInlineCheck5" class="form-check-input" checked>
        <label class="form-check-label" for="colorfulFormInlineCheck5">Warning</label>
      </div>

      <div class="form-check form-check-inline form-check-secondary">
        <input type="checkbox" id="colorfulFormInlineCheck6" class="form-check-input" checked>
        <label class="form-check-label" for="colorfulFormInlineCheck6">Secondary</label>
      </div>

      <div class="form-check form-check-inline form-check-dark">
        <input type="checkbox" id="colorfulFormInlineCheck7" class="form-check-input" checked>
        <label class="form-check-label" for="colorfulFormInlineCheck7">Dark</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-sm mb-2 mb-sm-0"&gt;
              &lt;!-- Form Radio --&gt;
              &lt;label class="form-control" for="formControlRadioReverseEg1"&gt;
                &lt;span class="form-check"&gt;
                  &lt;input type="radio" class="form-check-input" name="formControlRadioReverseEg" id="formControlRadioReverseEg1" checked&gt;
                  &lt;span class="form-check-label"&gt;Checked&lt;/span&gt;
                &lt;/span&gt;
              &lt;/label&gt;
              &lt;!-- End Form Radio --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm mb-2 mb-sm-0"&gt;
              &lt;!-- Form Radio --&gt;
              &lt;label class="form-control" for="formControlRadioReverseEg2"&gt;
                &lt;span class="form-check"&gt;
                  &lt;input type="radio" class="form-check-input" name="formControlRadioReverseEg" id="formControlRadioReverseEg2"&gt;
                  &lt;span class="form-check-label"&gt;Unchecked&lt;/span&gt;
                &lt;/span&gt;
              &lt;/label&gt;
              &lt;!-- End Form Radio --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm mb-2 mb-sm-0"&gt;
              &lt;!-- Form Radio --&gt;
              &lt;label class="form-control" for="formControlRadioReverseEg3"&gt;
                &lt;span class="form-check"&gt;
                  &lt;input type="radio" class="form-check-input" name="formControlRadioReverseEg" id="formControlRadioReverseEg3" disabled&gt;
                  &lt;span class="form-check-label"&gt;Disabled&lt;/span&gt;
                &lt;/span&gt;
              &lt;/label&gt;
              &lt;!-- End Form Radio --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="input-group-break" class="nue-docs-heading">
    Input group break <a class="anchorjs-link" href="#input-group-break" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="8">
    <x-slot:preview>
      <div class="input-group input-group-sm-vertical" style="max-width: 30rem;">
        <label class="form-control" for="editUserModalAccountTypeModalRadioEg1_1">
          <span class="form-check">
            <input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadioEg1_" id="editUserModalAccountTypeModalRadioEg1_1" checked>
            <span class="form-check-label">Individual</span>
          </span>
        </label>

        <label class="form-control" for="editUserModalAccountTypeModalRadioEg1_2">
          <span class="form-check">
            <input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadioEg1_" id="editUserModalAccountTypeModalRadioEg1_2">
            <span class="form-check-label">Company</span>
          </span>
        </label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="input-group input-group-sm-vertical"&gt;
            &lt;!-- Radio Check --&gt;
            &lt;label class="form-control" for="editUserModalAccountTypeModalRadioEg1_1"&gt;
              &lt;span class="form-check"&gt;
                &lt;input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadioEg1_" id="editUserModalAccountTypeModalRadioEg1_1" checked&gt;
                &lt;span class="form-check-label"&gt;Individual&lt;/span&gt;
              &lt;/span&gt;
            &lt;/label&gt;
            &lt;!-- End Radio Check --&gt;

            &lt;!-- Radio Check --&gt;
            &lt;label class="form-control" for="editUserModalAccountTypeModalRadioEg1_2"&gt;
              &lt;span class="form-check"&gt;
                &lt;input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadioEg1_" id="editUserModalAccountTypeModalRadioEg1_2"&gt;
                &lt;span class="form-check-label"&gt;Company&lt;/span&gt;
              &lt;/span&gt;
            &lt;/label&gt;
            &lt;!-- End Radio Check --&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="9">
    <x-slot:preview>
      <div class="input-group input-group-vertical" style="max-width: 30rem;">
        <label class="form-control" for="editUserModalAccountTypeModalRadioEg2_1">
          <span class="form-check">
            <input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadioEg2_" id="editUserModalAccountTypeModalRadioEg2_1" checked>
            <span class="form-check-label">Individual</span>
          </span>
        </label>

        <label class="form-control" for="editUserModalAccountTypeModalRadioEg2_2">
          <span class="form-check">
            <input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadioEg2_" id="editUserModalAccountTypeModalRadioEg2_2">
            <span class="form-check-label">Company</span>
          </span>
        </label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="input-group input-group-vertical"&gt;
            &lt;!-- Radio Check --&gt;
            &lt;label class="form-control" for="editUserModalAccountTypeModalRadioEg2_1"&gt;
              &lt;span class="form-check"&gt;
                &lt;input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadioEg2_" id="editUserModalAccountTypeModalRadioEg2_1" checked&gt;
                &lt;span class="form-check-label"&gt;Individual&lt;/span&gt;
              &lt;/span&gt;
            &lt;/label&gt;
            &lt;!-- End Radio Check --&gt;

            &lt;!-- Radio Check --&gt;
            &lt;label class="form-control" for="editUserModalAccountTypeModalRadioEg2_2"&gt;
              &lt;span class="form-check"&gt;
                &lt;input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadioEg2_" id="editUserModalAccountTypeModalRadioEg2_2"&gt;
                &lt;span class="form-check-label"&gt;Company&lt;/span&gt;
              &lt;/span&gt;
            &lt;/label&gt;
            &lt;!-- End Radio Check --&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="checkbox-select" class="nue-docs-heading">
    Checkbox select <a class="anchorjs-link" href="#checkbox-select" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="10">
    <x-slot:preview>
      <ul class="list-group list-group-flush navbar-card-list-group">
        <li class="list-group-item form-check-select">
          <div class="row">
            <div class="col-auto">
              <div class="d-flex align-items-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked>
                  <label class="form-check-label" for="notificationCheck1"></label>
                  <span class="form-check-stretched-bg"></span>
                </div>
                <img class="avatar avatar-sm avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="">
              </div>
            </div>

            <div class="col ms-n2">
              <h5 class="mb-1">Brian Warner</h5>
              <p class="text-body fs-5">changed an issue from "In Progress" to <span class="badge bg-success">Review</span></p>
            </div>

            <small class="col-auto text-muted text-cap">2hr</small>
          </div>

          <a class="stretched-link" href="#"></a>
        </li>

        <li class="list-group-item form-check-select">
          <div class="row">
            <div class="col-auto">
              <div class="d-flex align-items-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck2" checked>
                  <label class="form-check-label" for="notificationCheck2"></label>
                  <span class="form-check-stretched-bg"></span>
                </div>
                <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                  <span class="avatar-initials">K</span>
                </div>
              </div>
            </div>

            <div class="col ms-n2">
              <h5 class="mb-1">Klara Hampton</h5>
              <p class="text-body fs-5">mentioned you in a comment</p>
              <blockquote class="blockquote blockquote-sm">
                Nice work, love! You really nailed it. Keep it up!
              </blockquote>
            </div>

            <small class="col-auto text-muted text-cap">10hr</small>
          </div>

          <a class="stretched-link" href="#"></a>
        </li>

        <li class="list-group-item form-check-select">
          <div class="row">
            <div class="col-auto">
              <div class="d-flex align-items-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck3" checked>
                  <label class="form-check-label" for="notificationCheck3"></label>
                  <span class="form-check-stretched-bg"></span>
                </div>
                <div class="avatar avatar-sm avatar-circle">
                  <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="">
                </div>
              </div>
            </div>

            <div class="col ms-n2">
              <h5 class="mb-1">Ruby Walter</h5>
              <p class="text-body fs-5">joined the Slack group Nue Team</p>
            </div>

            <small class="col-auto text-muted text-cap">3dy</small>
          </div>

          <a class="stretched-link" href="#"></a>
        </li>

        <li class="list-group-item form-check-select">
          <div class="row">
            <div class="col-auto">
              <div class="d-flex align-items-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck4">
                  <label class="form-check-label" for="notificationCheck4"></label>
                  <span class="form-check-stretched-bg"></span>
                </div>
                <div class="avatar avatar-sm avatar-circle">
                  <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/svg/brands/google-icon.svg" alt="">
                </div>
              </div>
            </div>

            <div class="col ms-n2">
              <h5 class="mb-1">from Google</h5>
              <p class="text-body fs-5">Start using forms to capture the information of prospects visiting your Google website</p>
            </div>

            <small class="col-auto text-muted text-cap">17dy</small>
          </div>

          <a class="stretched-link" href="#"></a>
        </li>

        <li class="list-group-item form-check-select">
          <div class="row">
            <div class="col-auto">
              <div class="d-flex align-items-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck5">
                  <label class="form-check-label" for="notificationCheck5"></label>
                  <span class="form-check-stretched-bg"></span>
                </div>
                <div class="avatar avatar-sm avatar-circle">
                  <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt="">
                </div>
              </div>
            </div>

            <div class="col ms-n2">
              <h5 class="mb-1">Sara Villar</h5>
              <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-7 task</p>
            </div>

            <small class="col-auto text-muted text-cap">2mn</small>
          </div>

          <a class="stretched-link" href="#"></a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;ul class="list-group list-group-flush navbar-card-list-group"&gt;
            &lt;!-- Item --&gt;
            &lt;li class="list-group-item form-check-select"&gt;
              &lt;div class="row"&gt;
                &lt;div class="col-auto"&gt;
                  &lt;div class="d-flex align-items-center"&gt;
                    &lt;div class="form-check"&gt;
                      &lt;input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked&gt;
                      &lt;label class="form-check-label" for="notificationCheck1"&gt;&lt;/label&gt;
                      &lt;span class="form-check-stretched-bg"&gt;&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;img class="avatar avatar-sm avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt=""&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Col --&gt;

                &lt;div class="col ms-n2"&gt;
                  &lt;h5 class="mb-1"&gt;Brian Warner&lt;/h5&gt;
                  &lt;p class="text-body fs-5"&gt;changed an issue from "In Progress" to &lt;span class="badge bg-success"&gt;Review&lt;/span&gt;&lt;/p&gt;
                &lt;/div&gt;
                &lt;!-- End Col --&gt;

                &lt;small class="col-auto text-muted text-cap"&gt;2hr&lt;/small&gt;
                &lt;!-- End Col --&gt;
              &lt;/div&gt;
              &lt;!-- End Row --&gt;

              &lt;a class="stretched-link" href="#"&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;!-- End Item --&gt;

            &lt;!-- Item --&gt;
            &lt;li class="list-group-item form-check-select"&gt;
              &lt;div class="row"&gt;
                &lt;div class="col-auto"&gt;
                  &lt;div class="d-flex align-items-center"&gt;
                    &lt;div class="form-check"&gt;
                      &lt;input class="form-check-input" type="checkbox" value="" id="notificationCheck2" checked&gt;
                      &lt;label class="form-check-label" for="notificationCheck2"&gt;&lt;/label&gt;
                      &lt;span class="form-check-stretched-bg"&gt;&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="avatar avatar-sm avatar-soft-dark avatar-circle"&gt;
                      &lt;span class="avatar-initials"&gt;K&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Col --&gt;

                &lt;div class="col ms-n2"&gt;
                  &lt;h5 class="mb-1"&gt;Klara Hampton&lt;/h5&gt;
                  &lt;p class="text-body fs-5"&gt;mentioned you in a comment&lt;/p&gt;
                  &lt;blockquote class="blockquote blockquote-sm"&gt;
                    Nice work, love! You really nailed it. Keep it up!
                  &lt;/blockquote&gt;
                &lt;/div&gt;
                &lt;!-- End Col --&gt;

                &lt;small class="col-auto text-muted text-cap"&gt;10hr&lt;/small&gt;
                &lt;!-- End Col --&gt;
              &lt;/div&gt;
              &lt;!-- End Row --&gt;

              &lt;a class="stretched-link" href="#"&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;!-- End Item --&gt;

            &lt;!-- Item --&gt;
            &lt;li class="list-group-item form-check-select"&gt;
              &lt;div class="row"&gt;
                &lt;div class="col-auto"&gt;
                  &lt;div class="d-flex align-items-center"&gt;
                    &lt;div class="form-check"&gt;
                      &lt;input class="form-check-input" type="checkbox" value="" id="notificationCheck3" checked&gt;
                      &lt;label class="form-check-label" for="notificationCheck3"&gt;&lt;/label&gt;
                      &lt;span class="form-check-stretched-bg"&gt;&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="avatar avatar-sm avatar-circle"&gt;
                      &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt=""&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Col --&gt;

                &lt;div class="col ms-n2"&gt;
                  &lt;h5 class="mb-1"&gt;Ruby Walter&lt;/h5&gt;
                  &lt;p class="text-body fs-5"&gt;joined the Slack group Nue Team&lt;/p&gt;
                &lt;/div&gt;
                &lt;!-- End Col --&gt;

                &lt;small class="col-auto text-muted text-cap"&gt;3dy&lt;/small&gt;
                &lt;!-- End Col --&gt;
              &lt;/div&gt;
              &lt;!-- End Row --&gt;

              &lt;a class="stretched-link" href="#"&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;!-- End Item --&gt;

            &lt;!-- Item --&gt;
            &lt;li class="list-group-item form-check-select"&gt;
              &lt;div class="row"&gt;
                &lt;div class="col-auto"&gt;
                  &lt;div class="d-flex align-items-center"&gt;
                    &lt;div class="form-check"&gt;
                      &lt;input class="form-check-input" type="checkbox" value="" id="notificationCheck4"&gt;
                      &lt;label class="form-check-label" for="notificationCheck4"&gt;&lt;/label&gt;
                      &lt;span class="form-check-stretched-bg"&gt;&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="avatar avatar-sm avatar-circle"&gt;
                      &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/svg/brands/google-icon.svg" alt=""&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Col --&gt;

                &lt;div class="col ms-n2"&gt;
                  &lt;h5 class="mb-1"&gt;from Google&lt;/h5&gt;
                  &lt;p class="text-body fs-5"&gt;Start using forms to capture the information of prospects visiting your Google website&lt;/p&gt;
                &lt;/div&gt;
                &lt;!-- End Col --&gt;

                &lt;small class="col-auto text-muted text-cap"&gt;17dy&lt;/small&gt;
                &lt;!-- End Col --&gt;
              &lt;/div&gt;
              &lt;!-- End Row --&gt;

              &lt;a class="stretched-link" href="#"&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;!-- End Item --&gt;

            &lt;!-- Item --&gt;
            &lt;li class="list-group-item form-check-select"&gt;
              &lt;div class="row"&gt;
                &lt;div class="col-auto"&gt;
                  &lt;div class="d-flex align-items-center"&gt;
                    &lt;div class="form-check"&gt;
                      &lt;input class="form-check-input" type="checkbox" value="" id="notificationCheck5"&gt;
                      &lt;label class="form-check-label" for="notificationCheck5"&gt;&lt;/label&gt;
                      &lt;span class="form-check-stretched-bg"&gt;&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="avatar avatar-sm avatar-circle"&gt;
                      &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt=""&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Col --&gt;

                &lt;div class="col ms-n2"&gt;
                  &lt;h5 class="mb-1"&gt;Sara Villar&lt;/h5&gt;
                  &lt;p class="text-body fs-5"&gt;completed &lt;i class="bi-journal-bookmark-fill text-primary"&gt;&lt;/i&gt; FD-7 task&lt;/p&gt;
                &lt;/div&gt;
                &lt;!-- End Col --&gt;

                &lt;small class="col-auto text-muted text-cap"&gt;2mn&lt;/small&gt;
                &lt;!-- End Col --&gt;
              &lt;/div&gt;
              &lt;!-- End Row --&gt;

              &lt;a class="stretched-link" href="#"&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;!-- End Item --&gt;
          &lt;/ul&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="checkbox-switch" class="nue-docs-heading">
    Checkbox switch <a class="anchorjs-link" href="#checkbox-switch" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="11">
    <x-slot:preview>
      <div class="form-check form-check-inline form-check-switch">
        <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox1">
        <label class="form-check-label btn-sm" for="connectionsCheckbox1">
          <span class="form-check-default">
            <i class="bi-person-plus-fill"></i> Connect
          </span>
          <span class="form-check-active">
            <i class="bi-check-lg me-2"></i> Connected
          </span>
        </label>
      </div>

      <div class="form-check form-check-inline form-check-switch">
        <input class="form-check-input" type="checkbox" value="" id="starredCheckbox1" checked>
        <label class="form-check-label btn-icon btn-sm rounded-circle" for="starredCheckbox1">
          <span class="form-check-default" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin">
            <i class="bi-star"></i>
          </span>
          <span class="form-check-active" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinned">
            <i class="bi-star-fill"></i>
          </span>
        </label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form Check --&gt;
          &lt;div class="form-check form-check-switch"&gt;
            &lt;input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox1"&gt;
            &lt;label class="form-check-label btn-sm" for="connectionsCheckbox1"&gt;
              &lt;span class="form-check-default"&gt;
                &lt;i class="bi-person-plus-fill"&gt;&lt;/i&gt; Connect
              &lt;/span&gt;
              &lt;span class="form-check-active"&gt;
                &lt;i class="bi-check-lg me-2"&gt;&lt;/i&gt; Connected
              &lt;/span&gt;
            &lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Form Check --&gt;

          &lt;!-- Form Check --&gt;
          &lt;div class="form-check form-check-switch"&gt;
            &lt;input class="form-check-input" type="checkbox" value="" id="starredCheckbox1" checked&gt;
            &lt;label class="form-check-label btn-icon btn-sm rounded-circle" for="starredCheckbox1"&gt;
              &lt;span class="form-check-default" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin"&gt;
                &lt;i class="bi-star"&gt;&lt;/i&gt;
              &lt;/span&gt;
              &lt;span class="form-check-active" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinned"&gt;
                &lt;i class="bi-star-fill"&gt;&lt;/i&gt;
              &lt;/span&gt;
            &lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Form Check --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="checkbox-dashed" class="nue-docs-heading">
    Checkbox dashed <a class="anchorjs-link" href="#checkbox-dashed" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="12">
    <x-slot:preview>
      <label class="form-check form-check-dashed" for="logoUploader" style="max-width: 25rem;">
        <img id="logoImg" class="avatar avatar-xl avatar-4x3 avatar-centered h-100 mb-2" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-browse.svg" alt="" data-nue-theme-appearance="default">
        <img id="logoImg" class="avatar avatar-xl avatar-4x3 avatar-centered h-100 mb-2" src="https://cdn.btekno.id/templates/nue/svg/illustrations-light/oc-browse.svg" alt="" data-nue-theme-appearance="dark">

        <span class="d-block">Browse your file here</span>

        <input type="file" class="form-check-input" id="logoUploader">
      </label>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;label class="form-check form-check-dashed" for="logoUploader"&gt;
            &lt;img id="logoImg" class="avatar avatar-xl avatar-4x3 avatar-centered h-100 mb-2" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-browse.svg" alt=""&gt;

            &lt;span class="d-block"&gt;Browse your file here&lt;/span&gt;

            &lt;input type="file" class="form-check-input" id="logoUploader"&gt;
          &lt;/label&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="checkbox-pinned" class="nue-docs-heading">
    Select stretched <a class="anchorjs-link" href="#checkbox-pinned" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="13">
    <x-slot:preview>
      <div class="row">
        <div class="col-md mb-3">
          <div class="card card-lg form-check form-check-select-stretched h-100 zi-1">
            <div class="card-header text-center">
              <input type="radio" class="form-check-input" name="billingPricingRadio" id="billingPricingRadio1" value="basic">
              <label class="form-check-label" for="billingPricingRadio1"></label>

              <span class="card-subtitle">Basic</span>
              <h2 class="card-title display-3 text-dark">Free</h2>
              <p class="card-text">Forever free</p>
            </div>

            <div class="card-body d-flex justify-content-center">
              <ul class="list-checked list-checked-primary mb-0">
                <li class="list-checked-item">1 user</li>
                <li class="list-checked-item">Front plan features</li>
                <li class="list-checked-item">1 app</li>
              </ul>
            </div>

            <div class="card-footer border-0 text-center">
              <div class="d-grid mb-2">
                <button type="button" class="form-check-select-stretched-btn btn btn-white">Select plan</button>
              </div>
              <p class="card-text small">
                <i class="bi-question-circle me-1"></i> Terms &amp; conditions apply
              </p>
            </div>
          </div>
        </div>

        <div class="col-md mb-3">
          <div class="card card-lg form-check form-check-select-stretched h-100 zi-1">
            <div class="card-header text-center">
              <input type="radio" class="form-check-input" name="billingPricingRadio" id="billingPricingRadio2" checked value="starter">
              <label class="form-check-label" for="billingPricingRadio2"></label>

              <span class="card-subtitle">Starter</span>
              <h2 class="card-title display-3 text-dark">
                $<span id="pricingCount1" data-nue-toggle-switch-item-options='{
                         "min": 22,
                         "max": 32
                       }'>32</span>
                <span class="fs-6 text-muted">/ mon</span>
              </h2>
              <p class="card-text">Or prepay monthly</p>
            </div>

            <div class="card-body d-flex justify-content-center">
              <ul class="list-checked list-checked-primary mb-0">
                <li class="list-checked-item">3 users</li>
                <li class="list-checked-item">Front plan features</li>
                <li class="list-checked-item">3 apps</li>
                <li class="list-checked-item">Product support</li>
              </ul>
            </div>

            <div class="card-footer border-0 text-center">
              <div class="d-grid mb-2">
                <button type="button" class="form-check-select-stretched-btn btn btn-white">Select plan</button>
              </div>
              <p class="card-text small">
                <i class="bi-question-circle me-1"></i> Terms &amp; conditions apply
              </p>
            </div>
          </div>
        </div>

        <div class="col-md mb-3">
          <div class="card card-lg form-check form-check-select-stretched h-100 zi-1">
            <div class="card-header text-center">
              <input type="radio" class="form-check-input" name="billingPricingRadio" id="billingPricingRadio3" value="enterprise">
              <label class="form-check-label" for="billingPricingRadio3"></label>

              <span class="card-subtitle">Enterprise</span>
              <h2 class="card-title display-3 text-dark">
                $<span id="pricingCount2" data-nue-toggle-switch-item-options='{
                         "min": 42,
                         "max": 54
                       }'>54</span>
                <span class="fs-6 text-muted">/ mon</span>
              </h2>
              <p class="card-text">Or prepay annually</p>
            </div>

            <div class="card-body d-flex justify-content-center">
              <ul class="list-checked list-checked-primary mb-0">
                <li class="list-checked-item">Unlimited users</li>
                <li class="list-checked-item">Front plan features</li>
                <li class="list-checked-item">Unlimited apps</li>
                <li class="list-checked-item">Product support</li>
              </ul>
            </div>

            <div class="card-footer border-0 text-center">
              <div class="d-grid mb-2">
                <button type="button" class="form-check-select-stretched-btn btn btn-white">Select plan</button>
              </div>
              <p class="card-text small">
                <i class="bi-question-circle me-1"></i> Terms &amp; conditions apply
              </p>
            </div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-md mb-3"&gt;
              &lt;!-- Card --&gt;
              &lt;div class="card card-lg form-check form-check-select-stretched h-100 zi-1"&gt;
                &lt;div class="card-header text-center"&gt;
                  &lt;!-- Form Check --&gt;
                  &lt;input type="radio" class="form-check-input" name="billingPricingRadio" id="billingPricingRadio1" value="basic"&gt;
                  &lt;label class="form-check-label" for="billingPricingRadio1"&gt;&lt;/label&gt;
                  &lt;!-- End Form Check --&gt;

                  &lt;span class="card-subtitle"&gt;Basic&lt;/span&gt;
                  &lt;h2 class="card-title display-3 text-dark"&gt;Free&lt;/h2&gt;
                  &lt;p class="card-text"&gt;Forever free&lt;/p&gt;
                &lt;/div&gt;

                &lt;div class="card-body d-flex justify-content-center"&gt;
                  &lt;!-- List Checked --&gt;
                  &lt;ul class="list-checked list-checked-primary mb-0"&gt;
                    &lt;li class="list-checked-item"&gt;1 user&lt;/li&gt;
                    &lt;li class="list-checked-item"&gt;Front plan features&lt;/li&gt;
                    &lt;li class="list-checked-item"&gt;1 app&lt;/li&gt;
                  &lt;/ul&gt;
                  &lt;!-- End List Checked --&gt;
                &lt;/div&gt;

                &lt;div class="card-footer border-0 text-center"&gt;
                  &lt;div class="d-grid mb-2"&gt;
                    &lt;button type="button" class="form-check-select-stretched-btn btn btn-white"&gt;Select plan&lt;/button&gt;
                  &lt;/div&gt;
                  &lt;p class="card-text small"&gt;
                    &lt;i class="bi-question-circle me-1"&gt;&lt;/i&gt; Terms &amp; conditions apply
                  &lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End Card --&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;

            &lt;div class="col-md mb-3"&gt;
              &lt;!-- Card --&gt;
              &lt;div class="card card-lg form-check form-check-select-stretched h-100 zi-1"&gt;
                &lt;div class="card-header text-center"&gt;
                  &lt;!-- Form Check --&gt;
                  &lt;input type="radio" class="form-check-input" name="billingPricingRadio" id="billingPricingRadio2" checked value="starter"&gt;
                  &lt;label class="form-check-label" for="billingPricingRadio2"&gt;&lt;/label&gt;
                  &lt;!-- End Form Check --&gt;

                  &lt;span class="card-subtitle"&gt;Starter&lt;/span&gt;
                  &lt;h2 class="card-title display-3 text-dark"&gt;
                    $&lt;span id="pricingCount1"
                           data-nue-toggle-switch-item-options='{
                             "min": 22,
                             "max": 32
                           }'&gt;32&lt;/span&gt;
                    &lt;span class="fs-6 text-muted"&gt;/ mon&lt;/span&gt;
                  &lt;/h2&gt;
                  &lt;p class="card-text"&gt;Or prepay monthly&lt;/p&gt;
                &lt;/div&gt;

                &lt;div class="card-body d-flex justify-content-center"&gt;
                  &lt;!-- List Checked --&gt;
                  &lt;ul class="list-checked list-checked-primary mb-0"&gt;
                    &lt;li class="list-checked-item"&gt;3 users&lt;/li&gt;
                    &lt;li class="list-checked-item"&gt;Front plan features&lt;/li&gt;
                    &lt;li class="list-checked-item"&gt;3 apps&lt;/li&gt;
                    &lt;li class="list-checked-item"&gt;Product support&lt;/li&gt;
                  &lt;/ul&gt;
                  &lt;!-- End List Checked --&gt;
                &lt;/div&gt;

                &lt;div class="card-footer border-0 text-center"&gt;
                  &lt;div class="d-grid mb-2"&gt;
                    &lt;button type="button" class="form-check-select-stretched-btn btn btn-white"&gt;Select plan&lt;/button&gt;
                  &lt;/div&gt;
                  &lt;p class="card-text small"&gt;
                    &lt;i class="bi-question-circle me-1"&gt;&lt;/i&gt; Terms &amp; conditions apply
                  &lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End Card --&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;
            
            &lt;div class="col-md mb-3"&gt;
              &lt;!-- Card --&gt;
              &lt;div class="card card-lg form-check form-check-select-stretched h-100 zi-1"&gt;
                &lt;div class="card-header text-center"&gt;
                  &lt;!-- Form Check --&gt;
                  &lt;input type="radio" class="form-check-input" name="billingPricingRadio" id="billingPricingRadio3" value="enterprise"&gt;
                  &lt;label class="form-check-label" for="billingPricingRadio3"&gt;&lt;/label&gt;
                  &lt;!-- End Form Check --&gt;

                  &lt;span class="card-subtitle"&gt;Enterprise&lt;/span&gt;
                  &lt;h2 class="card-title display-3 text-dark"&gt;
                    $&lt;span id="pricingCount2"
                           data-nue-toggle-switch-item-options='{
                             "min": 42,
                             "max": 54
                           }'&gt;54&lt;/span&gt;
                    &lt;span class="fs-6 text-muted"&gt;/ mon&lt;/span&gt;
                  &lt;/h2&gt;
                  &lt;p class="card-text"&gt;Or prepay annually&lt;/p&gt;
                &lt;/div&gt;

                &lt;div class="card-body d-flex justify-content-center"&gt;
                  &lt;!-- List Checked --&gt;
                  &lt;ul class="list-checked list-checked-primary mb-0"&gt;
                    &lt;li class="list-checked-item"&gt;Unlimited users&lt;/li&gt;
                    &lt;li class="list-checked-item"&gt;Front plan features&lt;/li&gt;
                    &lt;li class="list-checked-item"&gt;Unlimited apps&lt;/li&gt;
                    &lt;li class="list-checked-item"&gt;Product support&lt;/li&gt;
                  &lt;/ul&gt;
                  &lt;!-- End List Checked --&gt;
                &lt;/div&gt;

                &lt;div class="card-footer border-0 text-center"&gt;
                  &lt;div class="d-grid mb-2"&gt;
                    &lt;button type="button" class="form-check-select-stretched-btn btn btn-white"&gt;Select plan&lt;/button&gt;
                  &lt;/div&gt;
                  &lt;p class="card-text small"&gt;
                    &lt;i class="bi-question-circle me-1"&gt;&lt;/i&gt; Terms &amp; conditions apply
                  &lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End Card --&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="label-highlighter" class="nue-docs-heading">
    Label Highlighter <a class="anchorjs-link" href="#label-highlighter" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="14">
    <x-slot:preview>
      <div class="w-md-50">
        <div class="row gx-3">
          <div class="col-6">
            <div class="form-check form-check-label-highlighter text-center">
              <input type="radio" class="form-check-input" name="labelHighlighterRadio" id="labelHighlighterRadio1" checked value="default">
              <label class="form-check-label mb-2" for="labelHighlighterRadio1">
                <img class="form-check-img" src="https://cdn.btekno.id/templates/nue/img/900x562/img1.jpg" alt="">
              </label>
              <span class="form-check-text">Light</span>
            </div>
          </div>

          <div class="col-6">
            <div class="form-check form-check-label-highlighter text-center">
              <input type="radio" class="form-check-input" name="labelHighlighterRadio" id="labelHighlighterRadio2" value="dark">
              <label class="form-check-label mb-2" for="labelHighlighterRadio2">
                <img class="form-check-img" src="https://cdn.btekno.id/templates/nue/img/900x562/img6.jpg" alt="">
              </label>
              <span class="form-check-text">Dark</span>
            </div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row gx-3"&gt;
            &lt;!-- Check --&gt;
            &lt;div class="col-6"&gt;
              &lt;div class="form-check form-check-label-highlighter text-center"&gt;
                &lt;input type="radio" class="form-check-input" name="labelHighlighterRadio" id="labelHighlighterRadio1" checked value="default"&gt;
                &lt;label class="form-check-label mb-2" for="labelHighlighterRadio1"&gt;
                  &lt;img class="form-check-img" src="https://cdn.btekno.id/templates/nue/img/900x562/img1.jpg" alt=""&gt;
                &lt;/label&gt;
                &lt;span class="form-check-text"&gt;Light&lt;/span&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Check --&gt;

            &lt;!-- Check --&gt;
            &lt;div class="col-6"&gt;
              &lt;div class="form-check form-check-label-highlighter text-center"&gt;
                &lt;input type="radio" class="form-check-input" name="labelHighlighterRadio" id="labelHighlighterRadio2" value="dark"&gt;
                &lt;label class="form-check-label mb-2" for="labelHighlighterRadio2"&gt;
                  &lt;img class="form-check-img" src="https://cdn.btekno.id/templates/nue/img/900x562/img6.jpg" alt=""&gt;
                &lt;/label&gt;
                &lt;span class="form-check-text"&gt;Dark&lt;/span&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Check --&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="switches" class="nue-docs-heading">
    Switches <a class="anchorjs-link" href="#switches" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="15">
    <x-slot:preview>
      <div class="form-check form-switch mb-4">
        <input type="checkbox" class="form-check-input" id="formSwitch1">
        <label class="form-check-label" for="formSwitch1">Unchecked</label>
      </div>

      <div class="form-check form-switch mb-4">
        <input type="checkbox" class="form-check-input" id="formSwitch2" checked>
        <label class="form-check-label" for="formSwitch2">Checked</label>
      </div>

      <div class="form-check form-switch form-switch-between mb-4">
        <label class="form-check-label">Off</label>
        <input type="checkbox" class="form-check-input">
        <label class="form-check-label">On</label>
      </div>

      <div class="form-check form-switch mb-4">
        <input type="checkbox" class="form-check-input" id="formSwitch4" disabled>
        <label class="form-check-label" for="formSwitch4">Disabled</label>
      </div>

      <div class="form-check form-switch mb-4">
        <input type="checkbox" class="form-check-input" id="formSwitch5" checked disabled>
        <label class="form-check-label" for="formSwitch5">Checked &amp; disabled</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Checkbox Switch --&gt;
          &lt;div class="form-check form-switch mb-4"&gt;
            &lt;input type="checkbox" class="form-check-input" id="formSwitch1"&gt;
            &lt;label class="form-check-label" for="formSwitch1"&gt;Unchecked&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox Switch --&gt;

          &lt;!-- Checkbox Switch --&gt;
          &lt;div class="form-check form-switch mb-4"&gt;
            &lt;input type="checkbox" class="form-check-input" id="formSwitch2" checked&gt;
            &lt;label class="form-check-label" for="formSwitch2"&gt;Checked&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox Switch --&gt;

          &lt;!-- Checkbox Switch --&gt;
          &lt;div class="form-check form-switch form-switch-between mb-4"&gt;
            &lt;label class="form-check-label"&gt;Off&lt;/label&gt;
            &lt;input type="checkbox" class="form-check-input"&gt;
            &lt;label class="form-check-label"&gt;On&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox Switch --&gt;

          &lt;!-- Checkbox Switch --&gt;
          &lt;div class="form-check form-switch mb-4"&gt;
            &lt;input type="checkbox" class="form-check-input" id="formSwitch4" disabled&gt;
            &lt;label class="form-check-label" for="formSwitch4"&gt;Disabled&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox Switch --&gt;

          &lt;!-- Checkbox Switch --&gt;
          &lt;div class="form-check form-switch mb-4"&gt;
            &lt;input type="checkbox" class="form-check-input" id="formSwitch5" checked disabled&gt;
            &lt;label class="form-check-label" for="formSwitch5"&gt;Checked &amp; disabled&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox Switch --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="switch-validation-states" class="nue-docs-heading">
    Validation states <a class="anchorjs-link" href="#switch-validation-states" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="16">
    <x-slot:preview>
      <div class="form-check mb-3">
        <input type="checkbox" id="validCheck" class="form-check-input is-valid" checked>
        <label class="form-check-valid" for="validCheck">Valid check</label>
      </div>

      <div class="form-check mb-3">
        <input type="checkbox" id="invalidCheck" class="form-check-input is-invalid" checked>
        <label class="form-check-invalid" for="invalidCheck">Invalid check</label>
      </div>

      <div class="form-check mb-3">
        <input type="radio" id="validRadio" class="form-check-input is-valid" checked>
        <label class="form-check-valid" for="validRadio">Valid radio</label>
      </div>

      <div class="form-check mb-3">
        <input type="radio" id="invalidRadio" class="form-check-input is-invalid" checked>
        <label class="form-check-invalid" for="invalidRadio">Invalid radio</label>
      </div>

      <div class="form-check form-switch mb-4">
        <input type="checkbox" class="form-check-input is-valid" id="validSwitch" checked>
        <label class="form-check-valid">Valid toggle switch</label>
      </div>

      <div class="form-check form-switch mb-4">
        <input type="checkbox" class="form-check-input is-invalid" id="invalidSwitch" checked>
        <label class="form-check-invalid">Invalid toggle switch</label>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Check --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="checkbox" id="validCheck" class="form-check-input is-valid" checked&gt;
            &lt;label class="form-check-valid" for="validCheck"&gt;Valid check&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Check --&gt;

          &lt;!-- Check --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="checkbox" id="invalidCheck" class="form-check-input is-invalid" checked&gt;
            &lt;label class="form-check-invalid" for="invalidCheck"&gt;Invalid check&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Check --&gt;

          &lt;!-- Check --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="radio" id="validRadio" class="form-check-input is-valid" checked&gt;
            &lt;label class="form-check-valid" for="validRadio"&gt;Valid radio&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Check --&gt;

          &lt;!-- Check --&gt;
          &lt;div class="form-check mb-3"&gt;
            &lt;input type="radio" id="invalidRadio" class="form-check-input is-invalid" checked&gt;
            &lt;label class="form-check-invalid" for="invalidRadio"&gt;Invalid radio&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Check --&gt;

          &lt;!-- Checkbox Switch --&gt;
          &lt;div class="form-check form-switch mb-4"&gt;
            &lt;input type="checkbox" class="form-check-input is-valid" id="validSwitch" checked&gt;
            &lt;label class="form-check-valid"&gt;Valid toggle switch&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox Switch --&gt;

          &lt;!-- Checkbox Switch --&gt;
          &lt;div class="form-check form-switch mb-4"&gt;
            &lt;input type="checkbox" class="form-check-input is-invalid" id="invalidSwitch" checked&gt;
            &lt;label class="form-check-invalid"&gt;Invalid toggle switch&lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Checkbox Switch --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection
