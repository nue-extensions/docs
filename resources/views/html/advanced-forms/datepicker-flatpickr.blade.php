@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Datepicker (Flatpickr)')

@section('js')
  <script>
    (function() {
      // INITIALIZATION OF FLATPICKR
      // =======================================================
      Nue.components.NueFlatpickr.init('.js-flatpickr')

      Nue.components.NueFlatpickr.init('#js-flatpickr-disabling-dates', {
        disable: [
          function (date) {
            // return true to disable
            return (date.getDay() === 0 || date.getDay() === 6);
          }
        ]
      })
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Datepicker (Flatpickr)
    <x-slot:description>Flatpickr is a lightweight and powerful datetime picker.</x-slot:description>
    <x-slot:link>https://flatpickr.js.org/</x-slot:link>
    <x-slot:label>Dokumentasi Flatpickr</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF FLATPICKR
          // =======================================================
          Nue.components.NueFlatpickr.init('.js-flatpickr')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="custom-file-input" class="nue-docs-heading">
    Custom file input <a class="anchorjs-link" href="#custom-file-input" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates" data-nue-flatpickr-options='{
                 "dateFormat": "d/m/Y"
               }'>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Flatpickr --&gt;
          &lt;input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates"
                 data-nue-flatpickr-options='{
                   "dateFormat": "d/m/Y"
                 }'&gt;
          &lt;!-- End Flatpickr --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="date-time" class="nue-docs-heading">
    DateTime <a class="anchorjs-link" href="#date-time" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates" data-nue-flatpickr-options='{
                 "dateFormat": "d/m/Y",
                 "enableTime": true
               }'>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Flatpickr --&gt;
          &lt;input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates"
                 data-nue-flatpickr-options='{
                   "dateFormat": "d/m/Y",
                   "enableTime": true
                 }'&gt;
          &lt;!-- End Flatpickr --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-value" class="nue-docs-heading">
    With value <a class="anchorjs-link" href="#with-value" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates" value="21/06/2019" data-nue-flatpickr-options='{
                 "dateFormat": "d/m/Y"
               }'>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Flatpickr --&gt;
          &lt;input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates" value="21/06/2019"
                 data-nue-flatpickr-options='{
                   "dateFormat": "d/m/Y"
                 }'&gt;
          &lt;!-- End Flatpickr --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="external-elements" class="nue-docs-heading">
    External elements <a class="anchorjs-link" href="#external-elements" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <div class="form-group">
          <label for="projectDeadlineFlatpickrNewProjectLabel" class="input-label">Due date</label>

          <div id="projectDeadlineNewProjectFlatpickr" class="js-flatpickr flatpickr-custom input-group" data-nue-flatpickr-options='{
                "appendTo": "#projectDeadlineNewProjectFlatpickr",
                "dateFormat": "d/m/Y",
                "wrap": true
              }'>
            <div class="input-group-prepend input-group-text" data-bs-toggle>
              <i class="bi-calendar-week"></i>
            </div>

            <input type="text" class="flatpickr-custom-form-control form-control" id="projectDeadlineFlatpickrNewProjectLabel" placeholder="Select dates" data-input value="29/06/2020">
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form Group --&gt;
          &lt;div class="form-group"&gt;
            &lt;label for="projectDeadlineFlatpickrNewProjectLabel" class="input-label"&gt;Due date&lt;/label&gt;

            &lt;div id="projectDeadlineNewProjectFlatpickr" class="js-flatpickr flatpickr-custom input-group"
                 data-nue-flatpickr-options='{
                  "appendTo": "#projectDeadlineNewProjectFlatpickr",
                  "dateFormat": "d/m/Y",
                  "wrap": true
                }'&gt;
              &lt;div class="input-group-prepend input-group-text" data-bs-toggle&gt;
                &lt;i class="bi-calendar-week"&gt;&lt;/i&gt;
              &lt;/div&gt;

              &lt;input type="text" class="flatpickr-custom-form-control form-control" id="projectDeadlineFlatpickrNewProjectLabel" placeholder="Select dates" data-input value="29/06/2020"&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Form Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="range-dates" class="nue-docs-heading">
    Range dates <a class="anchorjs-link" href="#range-dates" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>range</code> dates.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates" data-nue-flatpickr-options='{
                 "dateFormat": "d/m/Y",
                 "mode": "range"
               }'>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Flatpickr --&gt;
          &lt;input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates"
                 data-nue-flatpickr-options='{
                   "dateFormat": "d/m/Y",
                   "mode": "range"
                 }'&gt;
          &lt;!-- End Flatpickr --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="multiple-dates" class="nue-docs-heading">
    Multiple dates <a class="anchorjs-link" href="#multiple-dates" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>multiple</code> mode.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates" data-nue-flatpickr-options='{
                 "dateFormat": "d/m/Y",
                 "mode": "multiple"
               }'>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Flatpickr --&gt;
          &lt;input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates"
                 data-nue-flatpickr-options='{
                   "dateFormat": "d/m/Y",
                   "mode": "multiple"
                 }'&gt;
          &lt;!-- End Flatpickr --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="plain-text" class="nue-docs-heading">
    Plain Text <a class="anchorjs-link" href="#plain-text" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>"inline": true</code></p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <input type="text" class="js-flatpickr d-none" placeholder="Select dates" data-nue-flatpickr-options='{
                 "dateFormat": "d/m/Y",
                 "inline": true
               }'>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Flatpickr --&gt;
          &lt;input type="text" class="js-flatpickr d-none" placeholder="Select dates"
                 data-nue-flatpickr-options='{
                   "dateFormat": "d/m/Y",
                   "inline": true
                 }'&gt;
          &lt;!-- End Flatpickr --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="disabling-dates" class="nue-docs-heading">
    Disabling dates <a class="anchorjs-link" href="#disabling-dates" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Your can write custom javascript function.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <input type="text" id="js-flatpickr-disabling-dates" class="form-control flatpickr-custom" placeholder="Select dates" data-nue-flatpickr-options='{
                 "dateFormat": "d/m/Y"
               }'>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Flatpickr --&gt;
          &lt;input type="text" id="js-flatpickr-disabling-dates" class="form-control flatpickr-custom" placeholder="Select dates"
                 data-nue-flatpickr-options='{
                   "dateFormat": "d/m/Y"
                 }'&gt;
          &lt;!-- End Flatpickr --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            Nue.components.NueFlatpickr.init('#js-flatpickr-disabling-dates', {
              disable: [
                function (date) {
                  // return true to disable
                  return (date.getDay() === 0 || date.getDay() === 6);
                }
              ]
            })
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="modal-example" class="nue-docs-heading">
    Modal example <a class="anchorjs-link" href="#modal-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Your can write custom javascript function.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Open modal
      </button>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Flatpickr</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates" data-nue-flatpickr-options='{
                       "dateFormat": "d/m/Y"
                     }'>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Button trigger modal --&gt;
          &lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"&gt;
            Open modal
          &lt;/button&gt;
          &lt;!-- End Button trigger modal --&gt;

          &lt;!-- Modal --&gt;
          &lt;div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
            &lt;div class="modal-dialog"&gt;
              &lt;div class="modal-content"&gt;
                &lt;div class="modal-header"&gt;
                  &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Flatpickr&lt;/h5&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="modal-body"&gt;
                  &lt;!-- Flatpickr --&gt;
                  &lt;input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates"
                         data-nue-flatpickr-options='{
                           "dateFormat": "d/m/Y"
                         }'&gt;
                  &lt;!-- End Flatpickr --&gt;
                &lt;/div&gt;
                &lt;div class="modal-footer"&gt;
                  &lt;button type="button" class="btn btn-secondary" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
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
      <table class="table table-thead-bordered card-table">
        <thead class="thead-light">
          <tr>
            <th>Parameter</th>
            <th style="width: 50%;">Deskripsi</th>
            <th class="text-nowrap">Nilai default</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><code>mode</code></td>
            <td>Pilihan Mode.</td>
            <td><code>single</code></td>
          </tr>

          <tr>
            <td><code>dateFormat</code></td>
            <td>Format tanggal.</td>
            <td><code>d M Y</code></td>
          </tr>

          <tr>
            <td><code>maxDate</code></td>
            <td>The maximum date that a user can pick to (inclusive).</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td><code>locale.firstDayOfWeek</code></td>
            <td>Day number.</td>
            <td><code>1</code></td>
          </tr>

          <tr>
            <td><code>locale.weekdays.shorthand</code></td>
            <td>Singkat nama hari.</td>
            <td><code>["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]</code></td>
          </tr>

          <tr>
            <td><code>locale.rangeSeparator</code></td>
            <td>Range separator in the field.</td>
            <td><code>-</code></td>
          </tr>

          <tr>
            <td><code>nextArrow</code></td>
            <td>Icon panah Next.</td>
            <td><code>&lt;i class="tio-chevron-right flatpickr-custom-arrow">&lt;/i></code></td>
          </tr>

          <tr>
            <td><code>prevArrow</code></td>
            <td>Icoon panah Previous.</td>
            <td><code>&lt;i class="tio-chevron-left flatpickr-custom-arrow">&lt;/i></code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
