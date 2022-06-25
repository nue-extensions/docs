@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Advanced Select')

@section('js')
  <script>
      // INITIALIZATION OF SELECT
      // =======================================================
      Nue.components.NueSelect.init('.js-select')
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Advanced Select
    <x-slot:link>https://tom-select.js.org/examples/</x-slot:link>
    <x-slot:label>Dokumentasi Tom-select.js</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    How to use <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste the init function under <em><u>JS Plugins Init.</u></em>, before the closing <code>&lt;/body&gt;</code> tag, to enable it.</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF SELECT
          // =======================================================
          Nue.components.NueSelect.init('.js-select')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="max-width: 20rem;">
        <div class="tom-select-custom">
          <select class="js-select form-select" autocomplete="off" data-nue-tom-select-options='{
                    "placeholder": "Select a person...",
                    "hideSearch": true
                  }'>
            <option value="">Select a person...</option>
            <option value="4">Thomas Edison</option>
            <option value="1">Nikola</option>
            <option value="3">Nikola Tesla</option>
            <option value="5">Arnold Schwarzenegger</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom"&gt;
            &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                  data-nue-tom-select-options='{
                    "placeholder": "Select a person...",
                    &quot;hideSearch&quot;: true
                  }'&gt;
              &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
              &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
              &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
              &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
              &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="basic-example-1" class="nue-docs-heading">
    Custom placeholder <a class="anchorjs-link" href="#basic-example-1" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="tom-select-custom">
        <select class="js-select form-select" autocomplete="off" data-nue-tom-select-options='{
                    "placeholder": "<div><i class=\"bi-person me-2\"></i> Select member</div>",
                    "hideSearch": true,
                    "width": "20rem"
                  }'>
          <option value=""></option>
          <option value="4">Thomas Edison</option>
          <option value="1">Nikola</option>
          <option value="3">Nikola Tesla</option>
          <option value="5">Arnold Schwarzenegger</option>
        </select>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom"&gt;
            &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                    data-nue-tom-select-options='{
                        "placeholder": &quot;&lt;div&gt;&lt;i class=\&quot;bi-person me-2\&quot;&gt;&lt;/i&gt; Select member&lt;/div&gt;&quot;,
                        &quot;hideSearch&quot;: true,
                        &quot;width&quot;: &quot;20rem&quot;
                      }'&gt;
              &lt;option value=&quot;&quot;&gt;&lt;/option&gt;
              &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
              &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
              &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
              &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dropdown-width-example" class="nue-docs-heading">
    Dropdown width <a class="anchorjs-link" href="#dropdown-width-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="input-group">
        <input type="text" class="form-control" name="fullName" placeholder="Search name or emails" aria-label="Search name or emails">

        <div class="tom-select-custom">
          <select class="js-select form-select" autocomplete="off" data-nue-tom-select-options='{
                          "dropdownWidth": "300px",
                          "dropdownLeft": true
                        }'>
            <option value="4" selected>Thomas Edison</option>
            <option value="1">Nikola</option>
            <option value="3">Nikola Tesla</option>
            <option value="5">Arnold Schwarzenegger</option>
          </select>
        </div>

        <a class="btn btn-primary" href="javascript:;">Invite</a>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;fullName&quot; placeholder=&quot;Search name or emails&quot; aria-label=&quot;Search name or emails&quot; aria-describedby=&quot;fullName&quot;&gt;

            &lt;!-- Select --&gt;
            &lt;div class="tom-select-custom"&gt;
              &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                      data-nue-tom-select-options='{
                              &quot;dropdownWidth&quot;: &quot;300px&quot;,
                              &quot;dropdownLeft&quot;: true
                            }'&gt;
                &lt;option value=&quot;4&quot; selected&gt;Thomas Edison&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
                &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
              &lt;/select&gt;
            &lt;/div&gt;
            &lt;!-- End Select --&gt;

            &lt;a class=&quot;btn btn-primary&quot; href=&quot;javascript:;&quot;&gt;Invite&lt;/a&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-append-and-prepend-example" class="nue-docs-heading">
    With append and prepend <a class="anchorjs-link" href="#with-append-and-prepend-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="width: 40rem;">
        <div class="input-group mb-3">
          <div class="tom-select-custom">
            <select class="js-select form-select" autocomplete="off" data-nue-tom-select-options='{
                          "dropdownWidth": "300px"
                        }'>
              <option value="4" selected>Thomas Edison</option>
              <option value="1">Nikola</option>
              <option value="3">Nikola Tesla</option>
              <option value="5">Arnold Schwarzenegger</option>
            </select>
          </div>

          <input type="text" class="form-control" name="fullName" placeholder="Search name or emails" aria-label="Search name or emails">

          <a class="btn btn-primary" href="javascript:;">Search</a>
        </div>
        <div>

          <div class="input-group">
            <input type="text" class="form-control" name="fullName" placeholder="Search name or emails" aria-label="Search name or emails">

            <div class="tom-select-custom">
              <select class="js-select form-select" autocomplete="off" data-nue-tom-select-options='{
                          "dropdownWidth": "300px",
                          "dropdownLeft": true
                        }'>
                <option value="4" selected>Thomas Edison</option>
                <option value="1">Nikola</option>
                <option value="3">Nikola Tesla</option>
                <option value="5">Arnold Schwarzenegger</option>
              </select>
            </div>

            <a class="btn btn-primary" href="javascript:;">Search</a>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Prepend --&gt;
          &lt;div class=&quot;input-group mb-3&quot;&gt;
            &lt;!-- Select --&gt;
            &lt;div class="tom-select-custom"&gt;
              &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                      data-nue-tom-select-options='{
                            &quot;dropdownWidth&quot;: &quot;300px&quot;
                          }'&gt;
                &lt;option value=&quot;4&quot; selected&gt;Thomas Edison&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
                &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
              &lt;/select&gt;
            &lt;/div&gt;
            &lt;!-- End Select --&gt;

            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;fullName&quot; placeholder=&quot;Search name or emails&quot; aria-label=&quot;Search name or emails&quot; aria-describedby=&quot;fullName&quot;&gt;

            &lt;a class=&quot;btn btn-primary&quot; href=&quot;javascript:;&quot;&gt;Search&lt;/a&gt;
          &lt;/div&gt;&lt;div&gt;
          &lt;!-- End Prepend --&gt;

          &lt;!-- Append --&gt;
          &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;fullName&quot; placeholder=&quot;Search name or emails&quot; aria-label=&quot;Search name or emails&quot; aria-describedby=&quot;fullName&quot;&gt;

            &lt;!-- Select --&gt;
            &lt;div class="tom-select-custom"&gt;
              &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                      data-nue-tom-select-options='{
                            &quot;dropdownWidth&quot;: &quot;300px&quot;,
                            &quot;dropdownLeft&quot;: true
                          }'&gt;
                &lt;option value=&quot;4&quot; selected&gt;Thomas Edison&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
                &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
              &lt;/select&gt;
            &lt;/div&gt;
            &lt;!-- End Select --&gt;

            &lt;a class=&quot;btn btn-primary&quot; href=&quot;javascript:;&quot;&gt;Search&lt;/a&gt;
          &lt;/div&gt;
          &lt;!-- End Append --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="multiple-example" class="nue-docs-heading">
    Multiple <a class="anchorjs-link" href="#multiple-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="max-width: 40rem;">
        <div class="tom-select-custom tom-select-custom-with-tags">
          <select class="js-select form-select" autocomplete="off" multiple data-nue-tom-select-options='{
                    "placeholder": "Select a person..."
                  }'>
            <option value="">Select a person...</option>
            <option value="4">Thomas Edison</option>
            <option value="1">Nikola</option>
            <option value="3">Nikola Tesla</option>
            <option value="5">Arnold Schwarzenegger</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom tom-select-custom-with-tags"&gt;
            &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot; multiple
                    data-nue-tom-select-options='{
                      "placeholder": "Select a person..."
                    }'&gt;
              &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
              &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
              &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
              &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
              &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="multiple-selection-example" class="nue-docs-heading">
    Multiple selection <a class="anchorjs-link" href="#multiple-selection-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="max-width: 40rem;">
        <div class="tom-select-custom">
          <select class="js-select form-select" autocomplete="off" multiple data-nue-tom-select-options='{
                    "singleMultiple": true,
                    "hideSelected": false,
                    "placeholder": "Select user"
                  }'>
            <option value="">Select a person...</option>
            <option value="4" selected>Thomas Edison</option>
            <option value="1" selected>Nikola</option>
            <option value="3">Nikola Tesla</option>
            <option value="5">Arnold Schwarzenegger</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom"&gt;
            &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot; multiple
                    data-nue-tom-select-options='{
                      &quot;singleMultiple&quot;: true,
                      &quot;hideSelected&quot;: false,
                      &quot;placeholder&quot;: &quot;Select user&quot;
                    }'&gt;
               &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
               &lt;option value=&quot;4&quot; selected&gt;Thomas Edison&lt;/option&gt;
               &lt;option value=&quot;1&quot; selected&gt;Nikola&lt;/option&gt;
               &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
               &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-search-inside-dropdown-example" class="nue-docs-heading">
    With search inside dropdown <a class="anchorjs-link" href="#with-search-inside-dropdown-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="max-width: 40rem;">
        <div class="tom-select-custom">
          <select class="js-select form-select" autocomplete="off" data-nue-tom-select-options='{
                        "placeholder": "Select user..."
                      }'>
            <option value="">Select a person...</option>
            <option value="4">Thomas Edison</option>
            <option value="1">Nikola</option>
            <option value="3">Nikola Tesla</option>
            <option value="5">Arnold Schwarzenegger</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom"&gt;
            &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                    data-nue-tom-select-options='{
                      &quot;placeholder&quot;: &quot;Select user...&quot;
                    }'&gt;
              &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
              &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
              &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
              &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
              &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-search-inside-select-box-example" class="nue-docs-heading">
    With search inside select box <a class="anchorjs-link" href="#with-search-inside-select-box-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="max-width: 40rem;">
        <div class="tom-select-custom">
          <select class="js-select form-select" autocomplete="off" data-nue-tom-select-options='{
                    "searchInDropdown": false,
                    "hidePlaceholderOnSearch": true,
                    "placeholder": "Select a person..."
                  }'>
            <option value="">Select a person...</option>
            <option value="4">Thomas Edison</option>
            <option value="1">Nikola</option>
            <option value="3">Nikola Tesla</option>
            <option value="5">Arnold Schwarzenegger</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom"&gt;
            &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                    data-nue-tom-select-options='{
                      &quot;searchInDropdown&quot;: false,
                      &quot;hidePlaceholderOnSearch&quot;: true,
                      "placeholder": &quot;Select a person...&quot;
                    }'&gt;
              &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
              &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
              &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
              &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
              &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-icon-example" class="nue-docs-heading">
    With Icon <a class="anchorjs-link" href="#with-icon-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="max-width: 40rem;">
        <div class="tom-select-custom">
          <select class="js-select form-select">
            <option value="privacy1" data-option-template='<div class="d-flex align-items-start"><div class="flex-shrink-0"><i class="bi-globe"></i></div><div class="flex-grow-1 ms-2"><span class="d-block fw-semi-bold">Anyone</span><span class="tom-select-custom-hide small">Visible to anyone who can view your content. Accessible by installed apps.</span></div></div>'>Anyone</option>
            <option value="privacy2" data-option-template='<div class="d-flex align-items-start"><div class="flex-shrink-0"><i class="bi-lock"></i></div><div class="flex-grow-1 ms-2"><span class="d-block fw-semi-bold">Only you</span><span class="tom-select-custom-hide small">Only visible to you.</span></div></div>'>Only you</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom"&gt;
            &lt;select class=&quot;js-select form-select&quot;&gt;
              &lt;option value="privacy1" data-option-template='&lt;div class="d-flex align-items-start"&gt;&lt;div class="flex-shrink-0"&gt;&lt;i class="bi-globe"&gt;&lt;/i&gt;&lt;/div&gt;&lt;div class="flex-grow-1 ms-2"&gt;&lt;span class="d-block fw-semi-bold"&gt;Anyone&lt;/span&gt;&lt;span class="tom-select-custom-hide small"&gt;Visible to anyone who can view your content. Accessible by installed apps.&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;'&gt;Anyone&lt;/option&gt;
              &lt;option value="privacy2" data-option-template='&lt;div class="d-flex align-items-start"&gt;&lt;div class="flex-shrink-0"&gt;&lt;i class="bi-lock"&gt;&lt;/i&gt;&lt;/div&gt;&lt;div class="flex-grow-1 ms-2"&gt;&lt;span class="d-block fw-semi-bold"&gt;Only you&lt;/span&gt;&lt;span class="tom-select-custom-hide small"&gt;Only visible to you.&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;'&gt;Only you&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="optgroup-example" class="nue-docs-heading">
    Optgroup <a class="anchorjs-link" href="#optgroup-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="max-width: 40rem;">
        <div class="tom-select-custom">
          <select class="js-select form-select" autocomplete="off" data-nue-tom-select-options='{
                    "placeholder": "Select gear"
                  }'>
            <option value="">Select gear...</option>
            <optgroup label="Climbing">
              <option value="pitons">Pitons</option>
              <option value="cams">Cams</option>
              <option value="nuts">Nuts</option>
              <option value="bolts">Bolts</option>
              <option value="stoppers">Stoppers</option>
              <option value="sling">Sling</option>
            </optgroup>
            <optgroup label="Skiing">
              <option value="skis">Skis</option>
              <option value="skins">Skins</option>
              <option value="poles">Poles</option>
            </optgroup>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom"&gt;
            &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                    data-nue-tom-select-options='{
                      "placeholder": &quot;Select a person...&quot;
                    }'&gt;
              &lt;option value=&quot;&quot;&gt;Select gear...&lt;/option&gt;
              &lt;optgroup label=&quot;Climbing&quot;&gt;
                &lt;option value=&quot;pitons&quot;&gt;Pitons&lt;/option&gt;
                &lt;option value=&quot;cams&quot;&gt;Cams&lt;/option&gt;
                &lt;option value=&quot;nuts&quot;&gt;Nuts&lt;/option&gt;
                &lt;option value=&quot;bolts&quot;&gt;Bolts&lt;/option&gt;
                &lt;option value=&quot;stoppers&quot;&gt;Stoppers&lt;/option&gt;
                &lt;option value=&quot;sling&quot;&gt;Sling&lt;/option&gt;
              &lt;/optgroup&gt;
              &lt;optgroup label=&quot;Skiing&quot;&gt;
                &lt;option value=&quot;skis&quot;&gt;Skis&lt;/option&gt;
                &lt;option value=&quot;skins&quot;&gt;Skins&lt;/option&gt;
                &lt;option value=&quot;poles&quot;&gt;Poles&lt;/option&gt;
              &lt;/optgroup&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="custom-tags-example" class="nue-docs-heading">
    Custom tags <a class="anchorjs-link" href="#custom-tags-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="max-width: 40rem;">
        <div class="tom-select-custom">
          <select class="js-select form-select" autocomplete="off" multiple data-nue-tom-select-options='{
              "create": true,
              "placeholder": "Create custom tag..."
            }'>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom"&gt;
            &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot; multiple
              data-nue-tom-select-options='{
                &quot;create&quot;: true,
                "placeholder": "Create custom tag..."
              }'&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-images-example" class="nue-docs-heading">
    With images <a class="anchorjs-link" href="#with-images-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="max-width: 40rem;">
        <div class="tom-select-custom">
          <select class="js-select form-select" id="locationLabel">
            <option value="AF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/af.svg" alt="Afghanistan Flag" /><span class="text-truncate">Afghanistan</span></span>'>Afghanistan</option>
            <option value="GB" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="United Kingdom Flag" /><span class="text-truncate">United Kingdom</span></span>'>United Kingdom</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom"&gt;
            &lt;select class=&quot;js-select form-select&quot; id=&quot;locationLabel&quot;&gt;
              &lt;option value=&quot;SV&quot; data-option-template='&lt;span class=&quot;d-flex align-items-center&quot;&gt;&lt;img class=&quot;avatar avatar-xss avatar-circle me-2&quot; src=&quot;../node_modules/flag-icon-css/flags/1x1/sv.svg&quot; alt=&quot;El Salvador Flag&quot; /&gt;&lt;span class=&quot;text-truncate&quot;&gt;El Salvador&lt;/span&gt;&lt;/span&gt;'&gt;El Salvador&lt;/option&gt;
              &lt;option value=&quot;GQ&quot; data-option-template='&lt;span class=&quot;d-flex align-items-center&quot;&gt;&lt;img class=&quot;avatar avatar-xss avatar-circle me-2&quot; src=&quot;../node_modules/flag-icon-css/flags/1x1/gq.svg&quot; alt=&quot;Equatorial Guinea Flag&quot; /&gt;&lt;span class=&quot;text-truncate&quot;&gt;Equatorial Guinea&lt;/span&gt;&lt;/span&gt;'&gt;Equatorial Guinea&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dropup" class="nue-docs-heading">
    Dropup <a class="anchorjs-link" href="#dropup" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="max-width: 40rem;">
        <div class="tom-select-custom">
          <select class="js-select form-select" autocomplete="off" data-nue-tom-select-options='{
                    "placeholder": "Select a person...",
                    "hideSearch": true,
                    "dropup": true
                  }'>
            <option value="">Select a person...</option>
            <option value="4">Thomas Edison</option>
            <option value="1">Nikola</option>
            <option value="3">Nikola Tesla</option>
            <option value="5">Arnold Schwarzenegger</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom"&gt;
            &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                  data-nue-tom-select-options='{
                    "placeholder": "Select a person...",
                    &quot;hideSearch&quot;: true,
                    "dropup": true
                  }'&gt;
              &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
              &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
              &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
              &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
              &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="alignment" class="nue-docs-heading">
    Alignment <a class="anchorjs-link" href="#alignment" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="ms-auto" style="max-width: 40rem;">
        <div class="tom-select-custom tom-select-custom-end">
          <select class="js-select form-select" autocomplete="off" data-nue-tom-select-options='{
                    "placeholder": "Select a person...",
                    "hideSearch": true,
                    "dropdownWidth": "11rem"
                  }'>
            <option value="">Select a person...</option>
            <option value="4">Thomas Edison</option>
            <option value="1">Nikola</option>
            <option value="3">Nikola Tesla</option>
            <option value="5">Arnold</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom tom-select-custom-end"&gt;
            &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                  data-nue-tom-select-options='{
                    "placeholder": "Select a person...",
                    &quot;hideSearch&quot;: true,
                    "dropdownWidth": "11rem"
                  }'&gt;
              &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
              &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
              &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
              &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
              &lt;option value=&quot;5&quot;&gt;Arnold&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="responsive-alignment" class="nue-docs-heading">
    Responsive alignment <a class="anchorjs-link" href="#responsive-alignment" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="ms-auto" style="max-width: 40rem;">
        <div class="tom-select-custom tom-select-custom-lg-end">
          <select class="js-select form-select" autocomplete="off" data-nue-tom-select-options='{
                    "placeholder": "Select a person...",
                    "hideSearch": true,
                    "dropdownWidth": "11rem"
                  }'>
            <option value="">Select a person...</option>
            <option value="4">Thomas Edison</option>
            <option value="1">Nikola</option>
            <option value="3">Nikola Tesla</option>
            <option value="5">Arnold</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Select --&gt;
          &lt;div class="tom-select-custom tom-select-custom-lg-end"&gt;
            &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                  data-nue-tom-select-options='{
                    "placeholder": "Select a person...",
                    &quot;hideSearch&quot;: true,
                    "dropdownWidth": "11rem"
                  }'&gt;
              &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
              &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
              &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
              &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
              &lt;option value=&quot;5&quot;&gt;Arnold&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
          &lt;!-- End Select --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="sizing-example" class="nue-docs-heading">
    Sizing <a class="anchorjs-link" href="#sizing-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="mb-3">
        <div style="max-width: 40rem;">
          <div class="tom-select-custom">
            <select class="js-select form-select form-select-sm" autocomplete="off" data-nue-tom-select-options='{
                      "placeholder": "Select a person..."
                    }'>
              <option value="">Select a person...</option>
              <option value="4">Thomas Edison</option>
              <option value="1">Nikola</option>
              <option value="3">Nikola Tesla</option>
              <option value="5">Arnold Schwarzenegger</option>
            </select>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <div style="max-width: 40rem;">
          <div class="tom-select-custom">
            <select class="js-select form-select" autocomplete="off" data-nue-tom-select-options='{
                      "placeholder": "Select a person..."
                    }'>
              <option value="">Select a person...</option>
              <option value="4">Thomas Edison</option>
              <option value="1">Nikola</option>
              <option value="3">Nikola Tesla</option>
              <option value="5">Arnold Schwarzenegger</option>
            </select>
          </div>
        </div>
      </div>

      <div style="max-width: 40rem;">
        <div class="tom-select-custom">
          <select class="js-select form-select form-select-lg" autocomplete="off" data-nue-tom-select-options='{
                      "placeholder": "Select a person..."
                    }'>
            <option value="">Select a person...</option>
            <option value="4">Thomas Edison</option>
            <option value="1">Nikola</option>
            <option value="3">Nikola Tesla</option>
            <option value="5">Arnold Schwarzenegger</option>
          </select>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;mb-3&quot;&gt;
            &lt;div style=&quot;max-width: 40rem;&quot;&gt;
              &lt;!-- Select --&gt;
              &lt;div class="tom-select-custom"&gt;
                &lt;select class=&quot;js-select form-select form-select-sm&quot; autocomplete=&quot;off&quot;
                        data-nue-tom-select-options='{
                          "placeholder": "Select a person..."
                        }'&gt;
                  &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
                  &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
                  &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
                  &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
                  &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
                &lt;/select&gt;
              &lt;/div&gt;
              &lt;!-- End Select --&gt;
            &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class=&quot;mb-3&quot;&gt;
            &lt;div style=&quot;max-width: 40rem;&quot;&gt;
              &lt;!-- Select --&gt;
              &lt;div class="tom-select-custom"&gt;
                &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                        data-nue-tom-select-options='{
                          "placeholder": "Select a person..."
                        }'&gt;
                  &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
                  &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
                  &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
                  &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
                  &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
                &lt;/select&gt;
              &lt;/div&gt;
              &lt;!-- End Select --&gt;
            &lt;/div&gt;
          &lt;/div&gt;

          &lt;div style=&quot;max-width: 40rem;&quot;&gt;
            &lt;!-- Select --&gt;
            &lt;div class="tom-select-custom"&gt;
              &lt;select class=&quot;js-select form-select form-select-lg&quot; autocomplete=&quot;off&quot;
                      data-nue-tom-select-options='{
                        "placeholder": "Select a person..."
                      }'&gt;
                &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
                &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
                &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
              &lt;/select&gt;
            &lt;/div&gt;
            &lt;!-- End Select --&gt;
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

      <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Select</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <div class="tom-select-custom">
                <select class="js-select form-select" autocomplete="off">
                  <option value="">Select a person...</option>
                  <option value="4">Thomas Edison</option>
                  <option value="1">Nikola</option>
                  <option value="3">Nikola Tesla</option>
                  <option value="5">Arnold Schwarzenegger</option>
                </select>
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
          &lt;div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
            &lt;div class="modal-dialog"&gt;
              &lt;div class="modal-content"&gt;
                &lt;div class="modal-header"&gt;
                  &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Select&lt;/h5&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;

                &lt;div class="modal-body"&gt;
                  &lt;!-- Select --&gt;
                  &lt;div class="tom-select-custom"&gt;
                   &lt;select class=&quot;js-select form-select&quot; autocomplete=&quot;off&quot;
                           data-nue-tom-select-options='{
                             "placeholder": "Select a person..."
                           }'&gt;
                     &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
                     &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
                     &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
                     &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
                     &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
                    &lt;/select&gt;
                  &lt;/div&gt;
                  &lt;!-- End Select --&gt;
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
              <p><code>width</code></p>
            </td>
            <td>Set width for select field.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>dropdownWidth</code></p>
            </td>
            <td>Set width for dropdown.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>dropdownLeft</code></p>
            </td>
            <td>Align the drawdown to the left when the nue_smart_position plugin is enabled.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td>
              <p><code>hideSearch</code></p>
            </td>
            <td>Remove search field.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td>
              <p><code>disableSearch</code></p>
            </td>
            <td>Set disabled state for search field.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td>
              <p><code>singleMultiple</code></p>
            </td>
            <td>Enable "singleMultiple" mode for multiple select.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td>
              <p><code>plugins</code></p>
            </td>
            <td>Tom sleect and custom plugins.</td>
            <td><code>{nue_smart_position: {}}</code></td>
          </tr>

          <tr>
            <td>
              <p><code>searchInDropdown</code></p>
            </td>
            <td>Insert search field in dropdow.</td>
            <td><code>true</code></td>
          </tr>

          <tr>
            <td>
              <p><code>hidePlaceholderOnSearch</code></p>
            </td>
            <td>Hide placeholder on searhc or if item is seleted. <code>searchInDropdown</code> should be <code>false</code>.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td>
              <p><code>dropup</code></p>
            </td>
            <td>Place the menu on top.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td>
              <p><code>render</code></p>
            </td>
            <td>Custom render.</td>
            <td><code>
            render: {
              'option': function(data, escape) {
                return data.optionTemplate || `&lt;div&gt;${data.text}&lt;/div&gt;`
              },
              'item': function(data, escape) {
                return data.optionTemplate || `&lt;div&gt;${data.text}&lt;/div&gt;`
              }
            }
          </code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
