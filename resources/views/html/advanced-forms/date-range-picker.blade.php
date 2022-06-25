@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Date Range Picker')

@section('js')
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATERANGEPICKER
      // =======================================================
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }

      Nue.components.NueDaterangepicker.init('#js-daterangepicker-predefined', {
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb)

      cb(start, end)

      Nue.components.NueDaterangepicker.init('.js-daterangepicker-times', {
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour')
      })

      Nue.components.NueDaterangepicker.init('.js-daterangepicker')

      Nue.components.NueDaterangepicker.init('.js-daterangepicker-clear')

      $('.js-daterangepicker-clear').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
      })

      $('.js-daterangepicker-clear').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('')
      })
    });
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Date Range Picker
    <x-slot:description>A JavaScript component for choosing date ranges, dates and times.</x-slot:description>
    <x-slot:link>https://www.daterangepicker.com/</x-slot:link>
    <x-slot:label>Dokumentasi Date Range Picker</x-slot:label>
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

  <h2 id="basix-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basix-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <input type="text" class="js-daterangepicker form-control daterangepicker-custom-input">
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;input type="text" class="js-daterangepicker form-control daterangepicker-custom-input"&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dropup" class="nue-docs-heading">
    Dropup <a class="anchorjs-link" href="#dropup" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <input type="text" class="js-daterangepicker form-control daterangepicker-custom-input" data-nue-daterangepicker-options='{
                 "drops": "up"
               }'>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;input type="text" class="js-daterangepicker form-control daterangepicker-custom-input"
                  data-nue-daterangepicker-options='{
                   "drops": "up"
                 }'&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="auto-apply" class="nue-docs-heading">
    Auto apply <a class="anchorjs-link" href="#auto-apply" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <input type="text" class="js-daterangepicker form-control daterangepicker-custom-input" data-nue-daterangepicker-options='{
                 "autoApply": true
               }'>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;input type="text" class="js-daterangepicker form-control daterangepicker-custom-input"
                  data-nue-daterangepicker-options='{
                   "autoApply": true
                 }'&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-time-picker" class="nue-docs-heading">
    With time picker <a class="anchorjs-link" href="#with-time-picker" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <input type="text" class="js-daterangepicker-times form-control daterangepicker-custom-input" data-nue-daterangepicker-options='{
                 "timePicker": true,
                 "locale": {
                   "format": "M/DD hh:mm A"
                 }
               }'>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;input type="text" class="js-daterangepicker-times form-control daterangepicker-custom-input"
                  data-nue-daterangepicker-options='{
                   "timePicker": true,
                   "locale": {
                     "format": "M/DD hh:mm A"
                   }
                 }'&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            $(document).on('ready', function () {
              Nue.components.NueDaterangepicker.init('.js-daterangepicker-times', {
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour')
              })
            });
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="initially-empty" class="nue-docs-heading">
    Initially empty <a class="anchorjs-link" href="#initially-empty" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <input type="text" class="js-daterangepicker-clear form-control daterangepicker-custom-input" placeholder="Select dates" data-nue-daterangepicker-options='{
                 "autoUpdateInput": false,
                 "locale": {
                   "cancelLabel": "Clear"
                 }
               }'>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;input type="text" class="js-daterangepicker-clear form-control daterangepicker-custom-input" placeholder="Select dates"
                  data-nue-daterangepicker-options='{
                   "autoUpdateInput": false,
                   "locale": {
                     "cancelLabel": "Clear"
                   }
                 }'&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            $(document).on('ready', function () {
               Nue.components.NueDaterangepicker.init('.js-daterangepicker-clear')

                $('.js-daterangepicker-clear').on('apply.daterangepicker', function(ev, picker) {
                  $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                })

                $('.js-daterangepicker-clear').on('cancel.daterangepicker', function(ev, picker) {
                  $(this).val('')
                })
            });
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="predefined-with-readonly" class="nue-docs-heading">
    Predefined with Readonly <a class="anchorjs-link" href="#predefined-with-readonly" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button id="js-daterangepicker-predefined" class="btn btn-white">
        <i class="bi-calendar-week me-1"></i>
        <span class="js-daterangepicker-predefined-preview"></span>
      </button>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;button id="js-daterangepicker-predefined" class="btn btn-white"&gt;
            &lt;i class="bi-calendar-week me-1"&gt;&lt;/i&gt;
            &lt;span class="js-daterangepicker-predefined-preview"&gt;&lt;/span&gt;
          &lt;/button&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            $(document).on('ready', function () {
              var start = moment().subtract(29, 'days');
              var end = moment();

              function cb(start, end) {
                $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
              }

              Nue.components.NueDaterangepicker.init('#js-daterangepicker-predefined', {
                startDate: start,
                endDate: end,
                ranges: {
                  'Today': [moment(), moment()],
                  'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                  'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                  'This Month': [moment().startOf('month'), moment().endOf('month')],
                  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
              }, cb)

              cb(start, end)
            })
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="with-arrow" class="nue-docs-heading">
    With arrow <a class="anchorjs-link" href="#with-arrow" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-md-50">
        <div class="input-group">
          <input type="text" id="with-arrow-field" class="js-daterangepicker form-control daterangepicker-custom-input">

          <div class="input-group-append input-group-text" onclick="$('#with-arrow-field').data('daterangepicker').toggle();">
            <i class="bi-chevron-down"></i>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Input Group --&gt;
          &lt;div class="input-group"&gt;
            &lt;input type="text" id="with-arrow-field" class="js-daterangepicker form-control daterangepicker-custom-input"&gt;

            &lt;div class="input-group-append input-group-text" onclick="$('#with-arrow-field').data('daterangepicker').toggle();"&gt;
              &lt;i class="bi-chevron-down"&gt;&lt;/i&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Input Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="nodal-example" class="nue-docs-heading">
    Modal example <a class="anchorjs-link" href="#nodal-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

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
              <input type="text" class="js-daterangepicker form-control daterangepicker-custom-input" data-nue-daterangepicker-options='{
                      "parentEl": "#exampleModal"
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
                  &lt;input type="text" class="js-daterangepicker form-control daterangepicker-custom-input"
                        data-nue-daterangepicker-options='{
                          "parentEl": "#exampleModal"
                        }'&gt;
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
            <th>Parameters</th>
            <th style="width: 50%;">Description</th>
            <th class="text-nowrap">Default value</th>
          </tr>
        </thead>

        <tbody>

          <tr>
            <td><code>nextArrow</code></td>
            <td>Next arrow template.</td>
            <td><code>&lt;i class="bi-chevron-right daterangepicker-custom-arrow">&lt;/i></code></td>
          </tr>

          <tr>
            <td><code>prevArrow</code></td>
            <td>Previous arrow template.</td>
            <td><code>&lt;i class="bi-chevron-left daterangepicker-custom-arrow">&lt;/i></code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
