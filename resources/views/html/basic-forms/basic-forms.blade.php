@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Basic Forms')

@section('js')
@endsection

@section('content')
  <x-nue::docs::header>
    Basic Forms
    <x-slot:link>https://getbootstrap.com/docs/5.0/forms/overview</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Forms</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="1">
    <x-slot:preview>
      <form>
        <div class="mb-3">
          <label class="form-label" for="exampleFormControlInput1">Text</label>
          <input type="text" id="exampleFormControlInput1" class="form-control" placeholder="John Doe">
        </div>

        <div class="mb-3">
          <label class="form-label" for="exampleFormControlInput2">Text</label>
          <input type="text" id="exampleFormControlInput2" class="form-control form-control-title" placeholder="John Doe">
        </div>

        <div class="mb-3">
          <label class="form-label" for="exampleFormControlInput3">Password</label>
          <input type="password" id="exampleFormControlInput3" class="form-control" value="********">
        </div>

        <div class="mb-3">
          <label class="form-label">Helper text</label>
          <input type="password" class="form-control" value="**********">
          <span class="form-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</span>
        </div>

        <div class="mb-3">
          <label class="form-label" for="exampleFormControlInput4">Email</label>
          <input type="email" id="exampleFormControlInput4" class="form-control" placeholder="name@example.com">
        </div>

        <div class="mb-3">
          <label class="form-label" for="exampleFormControlSelect1">Select <span class="form-label-secondary">(Optional)</span></label>
          <select id="exampleFormControlSelect1" class="form-control">
            <option>Choose an option</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label" for="exampleFormControlSelect2">Multiple select</label>
          <select id="exampleFormControlSelect2" class="form-control" size="3" multiple>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label" for="exampleFormControlTextarea1">Textarea</label>
          <textarea id="exampleFormControlTextarea1" class="form-control" placeholder="Textarea field" rows="4"></textarea>
        </div>
      </form>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;form&gt;
            &lt;div class="mb-3"&gt;
              &lt;label class="form-label" for="exampleFormControlInput1"&gt;Text&lt;/label&gt;
              &lt;input type="text" id="exampleFormControlInput1" class="form-control" placeholder="John Doe"&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label class="form-label" for="exampleFormControlTitleInput2"&gt;Text&lt;/label&gt;
              &lt;input type="text" id="exampleFormControlTitleInput2" class="form-control form-control-title" placeholder="John Doe"&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label class="form-label" for="exampleFormControlInput3"&gt;Password&lt;/label&gt;
              &lt;input type="password" id="exampleFormControlInput3" class="form-control" value="********"&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label class="form-label"&gt;Helper text&lt;/label&gt;
              &lt;input type="password" class="form-control" value="**********"&gt;
              &lt;span class="form-text"&gt;Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.&lt;/span&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label class="form-label" for="exampleFormControlInput4"&gt;Email&lt;/label&gt;
              &lt;input type="email" id="exampleFormControlInput4" class="form-control" placeholder="name@example.com"&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label class="form-label" for="exampleFormControlSelect1"&gt;Select &lt;span class="form-label-secondary"&gt;(Optional)&lt;/span&gt;&lt;/label&gt;
              &lt;select id="exampleFormControlSelect1" class="form-control"&gt;
                &lt;option&gt;Choose an option&lt;/option&gt;
                &lt;option&gt;2&lt;/option&gt;
                &lt;option&gt;3&lt;/option&gt;
                &lt;option&gt;4&lt;/option&gt;
                &lt;option&gt;5&lt;/option&gt;
              &lt;/select&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label class="form-label" for="exampleFormControlSelect2"&gt;Multiple select&lt;/label&gt;
              &lt;select id="exampleFormControlSelect2" class="form-control" size="3" multiple&gt;
                &lt;option&gt;1&lt;/option&gt;
                &lt;option&gt;2&lt;/option&gt;
                &lt;option&gt;3&lt;/option&gt;
                &lt;option&gt;4&lt;/option&gt;
                &lt;option&gt;5&lt;/option&gt;
              &lt;/select&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label class="form-label" for="exampleFormControlTextarea1"&gt;Textarea&lt;/label&gt;
              &lt;textarea id="exampleFormControlTextarea1" class="form-control" placeholder="Textarea field" rows="4"&gt;&lt;/textarea&gt;
            &lt;/div&gt;
          &lt;/form&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="sizing" class="nue-docs-heading">
    Sizing <a class="anchorjs-link" href="#sizing" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="2">
    <x-slot:preview>
      <div class="w-md-50">
        <input class="form-control form-control-lg mb-2" type="text" placeholder=".form-control-lg">
        <input class="form-control mb-2" type="text" placeholder="Default input">
        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;input class="form-control form-control-lg" type="text" placeholder=".form-control-lg"&gt;
          &lt;input class="form-control" type="text" placeholder="Default input"&gt;
          &lt;input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="form-select" class="nue-docs-heading">
    Form select <a class="anchorjs-link" href="#form-select" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="3">
    <x-slot:preview>
      <div class="w-md-50">
        <select class="form-select">
          <option selected="">Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;select class="form-select"&gt;
            &lt;option selected=""&gt;Open this select menu&lt;/option&gt;
            &lt;option value="1"&gt;One&lt;/option&gt;
            &lt;option value="2"&gt;Two&lt;/option&gt;
            &lt;option value="3"&gt;Three&lt;/option&gt;
          &lt;/select&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="4">
    <x-slot:preview>
      <div class="w-md-50">
        <select class="form-select form-select-lg mb-3">
          <option selected="">Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

        <select class="form-select form-select-sm">
          <option selected="">Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;select class="form-select form-select-lg mb-3"&gt;
            &lt;option selected=""&gt;Open this select menu&lt;/option&gt;
            &lt;option value="1"&gt;One&lt;/option&gt;
            &lt;option value="2"&gt;Two&lt;/option&gt;
            &lt;option value="3"&gt;Three&lt;/option&gt;
          &lt;/select&gt;
          &lt;!-- End Select --&gt;

          &lt;!-- Select --&gt;
          &lt;select class="form-select form-select-sm"&gt;
            &lt;option selected=""&gt;Open this select menu&lt;/option&gt;
            &lt;option value="1"&gt;One&lt;/option&gt;
            &lt;option value="2"&gt;Two&lt;/option&gt;
            &lt;option value="3"&gt;Three&lt;/option&gt;
          &lt;/select&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="form-control-borderless" class="nue-docs-heading">
    Borderless <a class="anchorjs-link" href="#form-control-borderless" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="5">
    <x-slot:preview>
      <div class="w-md-50">
        <div class="mb-3">
          <label for="formControlBorderlessFullName" class="form-label">Full name</label>

          <input type="text" class="form-control form-control-borderless form-control-flush" id="formControlBorderlessFullName" placeholder="Mark Williams" aria-label="Mark Williams">
        </div>

        <div class="mb-3">
          <label for="formControlBorderlessEmail" class="form-label">Email</label>

          <input type="text" class="form-control form-control-borderless form-control-flush" id="formControlBorderlessEmail" placeholder="mark@example.com" aria-label="mark@example.com">
        </div>

        <div class="mb-3">
          <label for="formControlBorderlessGenderSelect" class="form-label">Gender</label>

          <select id="formControlBorderlessGenderSelect" class="form-select form-select-borderless">
            <option>Choose a gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form --&gt;
          &lt;div class="mb-3"&gt;
            &lt;label for="formControlBorderlessFullName" class="form-label"&gt;Full name&lt;/label&gt;

            &lt;input type="text" class="form-control form-control-borderless form-control-flush" id="formControlBorderlessFullName" placeholder="Mark Williams" aria-label="Mark Williams"&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;

          &lt;!-- Form --&gt;
          &lt;div class="mb-3"&gt;
            &lt;label for="formControlBorderlessEmail" class="form-label"&gt;Email&lt;/label&gt;

            &lt;input type="text" class="form-control form-control-borderless form-control-flush" id="formControlBorderlessEmail" placeholder="mark@example.com" aria-label="mark@example.com"&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;

          &lt;!-- Form --&gt;
          &lt;div class="mb-3"&gt;
            &lt;label for="formControlBorderlessGenderSelect" class="form-label"&gt;Gender&lt;/label&gt;

            &lt;select id="formControlBorderlessGenderSelect" class="form-select form-select-borderless"&gt;
              &lt;option&gt;Choose a gender&lt;/option&gt;
              &lt;option&gt;Male&lt;/option&gt;
              &lt;option&gt;Female&lt;/option&gt;
              &lt;option&gt;Other&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="form-control-light" class="nue-docs-heading">
    Light <a class="anchorjs-link" href="#form-control-light" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="6">
    <x-slot:preview>
      <div class="w-md-50">
        <div class="mb-3">
          <label for="formControlLightFullName" class="form-label">Full name</label>

          <input type="text" class="form-control form-control-light" id="formControlLightFullName" placeholder="Mark Williams" aria-label="Mark Williams">
        </div>

        <div class="mb-3">
          <label for="formControlLightEmail" class="form-label">Email</label>

          <input type="text" class="form-control form-control-light" id="formControlLightEmail" placeholder="mark@example.com" aria-label="mark@example.com">
        </div>

        <div class="mb-3">
          <label for="formControlLightGenderSelect" class="form-label">Gender</label>

          <select id="formControlLightGenderSelect" class="form-select form-select-light">
            <option>Choose a gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form --&gt;
          &lt;div class="mb-3"&gt;
            &lt;label for="formControlLightFullName" class="form-label"&gt;Full name&lt;/label&gt;

            &lt;input type="text" class="form-control form-control-light" id="formControlLightFullName" placeholder="Mark Williams" aria-label="Mark Williams"&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;

          &lt;!-- Form --&gt;
          &lt;div class="mb-3"&gt;
            &lt;label for="formControlLightEmail" class="form-label"&gt;Email&lt;/label&gt;

            &lt;input type="text" class="form-control form-control-light" id="formControlLightEmail" placeholder="mark@example.com" aria-label="mark@example.com"&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;

          &lt;!-- Form --&gt;
          &lt;div class="mb-3"&gt;
            &lt;label for="formControlLightGenderSelect" class="form-label"&gt;Gender&lt;/label&gt;

            &lt;select id="formControlLightGenderSelect" class="form-select form-select-light"&gt;
              &lt;option&gt;Choose a gender&lt;/option&gt;
              &lt;option&gt;Male&lt;/option&gt;
              &lt;option&gt;Female&lt;/option&gt;
              &lt;option&gt;Other&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="form-control-hover-light" class="nue-docs-heading">
    Hover light <a class="anchorjs-link" href="#form-control-hover-light" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="7">
    <x-slot:preview>
      <div class="w-md-50">
        <div class="mb-3">
          <label for="formControlHoverLightFullName" class="form-label">Full name</label>

          <input type="text" class="form-control form-control-hover-light" id="formControlHoverLightFullName" placeholder="Mark Williams" aria-label="Mark Williams">
        </div>

        <div class="mb-3">
          <label for="formControlHoverLightEmail" class="form-label">Email</label>

          <input type="text" class="form-control form-control-hover-light" id="formControlHoverLightEmail" placeholder="mark@example.com" aria-label="mark@example.com">
        </div>

        <div class="mb-3">
          <label for="formControlHoverLightGenderSelect" class="form-label">Gender</label>

          <select id="formControlHoverLightGenderSelect" class="form-select form-select-hover-light">
            <option>Choose a gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form --&gt;
          &lt;div class="mb-3"&gt;
            &lt;label for="formControlHoverLightFullName" class="form-label"&gt;Full name&lt;/label&gt;

            &lt;input type="text" class="form-control form-control-hover-light" id="formControlHoverLightFullName" placeholder="Mark Williams" aria-label="Mark Williams"&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;

          &lt;!-- Form --&gt;
          &lt;div class="mb-3"&gt;
            &lt;label for="formControlHoverLightEmail" class="form-label"&gt;Email&lt;/label&gt;

            &lt;input type="text" class="form-control form-control-hover-light" id="formControlHoverLightEmail" placeholder="mark@example.com" aria-label="mark@example.com"&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;

          &lt;!-- Form --&gt;
          &lt;div class="mb-3"&gt;
            &lt;label for="formControlHoverLightGenderSelect" class="form-label"&gt;Gender&lt;/label&gt;

            &lt;select id="formControlHoverLightGenderSelect" class="form-select form-select-hover-light"&gt;
              &lt;option&gt;Choose a gender&lt;/option&gt;
              &lt;option&gt;Male&lt;/option&gt;
              &lt;option&gt;Female&lt;/option&gt;
              &lt;option&gt;Other&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Form --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="custom-file-inputs" class="nue-docs-heading">
    Custom file inputs <a class="anchorjs-link" href="#custom-file-inputs" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="8">
    <x-slot:preview>
      <div class="w-md-50">
        <div class="mb-5">
          <input type="file" id="customFileEg1" class="form-control">
        </div>

        <div class="form-attachment-btn btn btn-sm btn-primary">Upload file
          <input type="file" class="form-attachment-btn-label" id="fileUploader">
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;input type="file" id="customFileEg1" class="form-control"&gt;

          &lt;div class="form-attachment-btn btn btn-sm btn-primary"&gt;Upload file
            &lt;input type="file" class="form-attachment-btn-label" id="fileUploader"&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="range-input" class="nue-docs-heading">
    Range input <a class="anchorjs-link" href="#range-input" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="9">
    <x-slot:preview>
      <input type="range" class="form-range" id="customRange1">
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;input type="range" class="form-range" id="customRange1"&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="disabled-and-readonly-fields" class="nue-docs-heading">
    Disabled &amp; Readonly Fields <a class="anchorjs-link" href="#disabled-and-readonly-fields" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="10">
    <x-slot:preview>
      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Readonly plain text</label>
        <div class="col-sm-9">
          <input type="text" class="form-control-plaintext" value="email@example.com" readonly>
        </div>
      </div>

      <div class="row">
        <label class="col-sm-3 col-form-label">Readonly field</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" value="Read only" readonly>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row mb-3"&gt;
            &lt;label class="col-sm-3 col-form-label"&gt;Readonly plain text&lt;/label&gt;
            &lt;div class="col-sm-9"&gt;
              &lt;input type="text" class="form-control-plaintext" value="email@example.com" readonly&gt;
            &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="row"&gt;
            &lt;label class="col-sm-3 col-form-label"&gt;Readonly field&lt;/label&gt;
            &lt;div class="col-sm-9"&gt;
              &lt;input type="text" class="form-control" value="Read only" readonly&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="11">
    <x-slot:preview>
      <div class="mb-3">
        <label class="form-label">Disabled input</label>
        <input type="text" class="form-control" placeholder="Disabled input" disabled>
      </div>

      <div class="mb-3">
        <label class="form-label">Disabled select</label>
        <select class="form-select" disabled>
          <option>Choose an option</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Disabled textarea</label>
        <textarea class="form-control" placeholder="Disabled textarea" disabled></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Disabled file input</label>
        <input type="file" id="customFileEg2" class="form-control" disabled>
      </div>

      <div class="mb-3">
        <label class="form-label">Disabled range input</label>
        <input type="range" class="form-range" value="3" min="0" max="10" disabled>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="mb-3"&gt;
            &lt;label class="form-label"&gt;Disabled input&lt;/label&gt;
            &lt;input type="text" class="form-control" placeholder="Disabled input" disabled&gt;
          &lt;/div&gt;

          &lt;div class="mb-3"&gt;
            &lt;label class="form-label"&gt;Disabled select&lt;/label&gt;
            &lt;select class="form-select" disabled&gt;
              &lt;option&gt;Choose an option&lt;/option&gt;
              &lt;option&gt;2&lt;/option&gt;
              &lt;option&gt;3&lt;/option&gt;
              &lt;option&gt;4&lt;/option&gt;
              &lt;option&gt;5&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;

          &lt;div class="mb-3"&gt;
            &lt;label class="form-label"&gt;Disabled textarea&lt;/label&gt;
            &lt;textarea class="form-control" placeholder="Disabled textarea" disabled&gt;&lt;/textarea&gt;
          &lt;/div&gt;

          &lt;div class="mb-3"&gt;
            &lt;label class="form-label"&gt;Disabled file input&lt;/label&gt;
            &lt;input type="file" id="customFileEg2" class="form-control" disabled&gt;
          &lt;/div&gt;

          &lt;div class="mb-3"&gt;
            &lt;label class="form-label"&gt;Disabled range input&lt;/label&gt;
            &lt;input type="range" class="form-range" value="3" min="0" max="10" disabled&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="validation-states" class="nue-docs-heading">
    Validation states <a class="anchorjs-link" href="#validation-states" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <br/>
  <x-nue::docs::example i="12">
    <x-slot:preview>
      <form>
        <div class="mb-3">
          <label for="validationValidInput1">Valid input</label>
          <input type="text" class="form-control is-valid" id="validationValidInput1" placeholder="Placeholder">
        </div>

        <div class="mb-3">
          <label for="validationValidSelect1">Valid select</label>
          <select class="form-select is-valid" id="validationValidSelect1">
            <option>Choose an option</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <span class="valid-feedback">Valid feedback</span>
        </div>

        <div class="mb-3">
          <label for="validationValidTextarea1">Valid textarea</label>
          <textarea class="form-control is-valid" placeholder="Textarea field" id="validationValidTextarea1" rows="4"></textarea>
        </div>

        <div class="mb-3">
          <label for="validationValidFileInput1">Valid file input</label>
          <input type="file" id="validationValidFileInput1" class="form-control is-valid">
        </div>
      </form>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;form&gt;
            &lt;div class="mb-3"&gt;
              &lt;label for="validationValidInput1"&gt;Valid input&lt;/label&gt;
              &lt;input type="text" class="form-control is-valid" id="validationValidInput1" placeholder="Placeholder"&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label for="validationValidSelect1"&gt;Valid select&lt;/label&gt;
              &lt;select class="form-select is-valid" id="validationValidSelect1"&gt;
                &lt;option&gt;Choose an option&lt;/option&gt;
                &lt;option&gt;2&lt;/option&gt;
                &lt;option&gt;3&lt;/option&gt;
                &lt;option&gt;4&lt;/option&gt;
                &lt;option&gt;5&lt;/option&gt;
              &lt;/select&gt;
              &lt;span class="valid-feedback"&gt;Valid feedback&lt;/span&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label for="validationValidTextarea1"&gt;Valid textarea&lt;/label&gt;
              &lt;textarea class="form-control is-valid" placeholder="Textarea field" id="validationValidTextarea1" rows="4"&gt;&lt;/textarea&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label for="validationValidFileInput1"&gt;Valid file input&lt;/label&gt;
              &lt;input type="file" id="validationValidFileInput1" class="form-control is-valid"&gt;
            &lt;/div&gt;
          &lt;/form&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="13">
    <x-slot:preview>
      <form>
        <div class="mb-3">
          <label for="validationInvalidInput1">Valid input</label>
          <input type="text" class="form-control is-invalid" id="validationInvalidInput1" placeholder="Placeholder">
        </div>

        <div class="mb-3">
          <label for="validationInvalidSelect1">Valid select</label>
          <select class="form-select is-invalid" id="validationInvalidSelect1">
            <option>Choose an option</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <span class="invalid-feedback">Valid feedback</span>
        </div>

        <div class="mb-3">
          <label for="validationInvalidTextarea1">Valid textarea</label>
          <textarea class="form-control is-invalid" placeholder="Textarea field" id="validationInvalidTextarea1" rows="4"></textarea>
        </div>

        <div class="mb-3">
          <label for="validationInvalidFileInput1">Valid file input</label>
          <input type="file" id="validationInvalidFileInput1" class="form-control is-invalid">
        </div>
      </form>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;form&gt;
            &lt;div class="mb-3"&gt;
              &lt;label for="validationInvalidInput1"&gt;Valid input&lt;/label&gt;
              &lt;input type="text" class="form-control is-invalid" id="validationInvalidInput1" placeholder="Placeholder"&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label for="validationInvalidSelect1"&gt;Valid select&lt;/label&gt;
              &lt;select class="form-select is-invalid" id="validationInvalidSelect1"&gt;
                &lt;option&gt;Choose an option&lt;/option&gt;
                &lt;option&gt;2&lt;/option&gt;
                &lt;option&gt;3&lt;/option&gt;
                &lt;option&gt;4&lt;/option&gt;
                &lt;option&gt;5&lt;/option&gt;
              &lt;/select&gt;
              &lt;span class="invalid-feedback"&gt;Valid feedback&lt;/span&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label for="validationInvalidTextarea1"&gt;Valid textarea&lt;/label&gt;
              &lt;textarea class="form-control is-invalid" placeholder="Textarea field" id="validationInvalidTextarea1" rows="4"&gt;&lt;/textarea&gt;
            &lt;/div&gt;

            &lt;div class="mb-3"&gt;
              &lt;label for="validationInvalidFileInput1"&gt;Valid file input&lt;/label&gt;
              &lt;input type="file" id="validationInvalidFileInput1" class="form-control is-invalid"&gt;
            &lt;/div&gt;
          &lt;/form&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="methods" class="nue-docs-heading">
    Validation methods <a class="anchorjs-link" href="#methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <div class="card mb-7">
    <div class="table-responsive">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>Parameters</th>
            <th class="text-nowrap">Description</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><code>data-nue-validation-equal-field</code></td>
            <td>The validator uses an element selector to compare the values of the current field and the field that was passed in as the selector.</td>
          </tr>

          <tr>
            <td><code>data-nue-validation-validate-class</code></td>
            <td>Attribute added to parent input element, instead of which validation classes will be added to customize styles. Make sure there is only one input inside the element with <code>data-nue-validation-validate-class</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
