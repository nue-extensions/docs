@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Toggle Switch')

@section('js')
  <script>
    (function() {
      // INITIALIZATION OF TOGGLE SWITCH
      // =======================================================
      new NueToggleSwitch('.js-toggle-switch')
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Toggle Switch
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF TOGGLE SWITCH
          // =======================================================
          new NueToggleSwitch('.js-toggle-switch')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="d-flex justify-content-center mb-4">
        <div class="form-check form-switch form-switch-between">
          <label class="form-check-label">Monthly</label>
          <input class="js-toggle-switch form-check-input" type="checkbox" data-nue-toggle-switch-options='{
                   "targetSelector": "#pricingCount1, #pricingCount2, #pricingCount3"
                 }'>
          <label class="form-check-label">Annually</label>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-3 mb-3 mb-md-0">
          <h2 id="pricingCount1" class="display-4 text-center" data-nue-toggle-switch-item-options='{
                   "min": 19,
                   "max": 29
                 }'>19</h2>
        </div>

        <div class="col-md-3 mb-3 mb-md-0">
          <h2 id="pricingCount2" class="display-4 text-center" data-nue-toggle-switch-item-options='{
                   "min": 39,
                   "max": 49
                 }'>39</h2>
        </div>

        <div class="col-md-3 mb-3 mb-md-0">
          <h2 id="pricingCount3" class="display-4 text-center" data-nue-toggle-switch-item-options='{
                   "min": 59,
                   "max": 69
                 }'>59</h2>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form Switch --&gt;
          &lt;div class="d-flex justify-content-center mb-4"&gt;
            &lt;div class="form-check form-switch form-switch-between"&gt;
              &lt;label class="form-check-label"&gt;Monthly&lt;/label&gt;
              &lt;input class="js-toggle-switch form-check-input" type="checkbox"
                     data-nue-toggle-switch-options='{
                       "targetSelector": "#pricingCount1, #pricingCount2, #pricingCount3"
                     }'&gt;
              &lt;label class="form-check-label"&gt;Annually&lt;/label&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Form Switch --&gt;

          &lt;div class="row justify-content-center"&gt;
            &lt;div class="col-md-3 mb-3 mb-md-0"&gt;
              &lt;h2 id="pricingCount1" class="display-4 text-center"
                     data-nue-toggle-switch-item-options='{
                       "min": 19,
                       "max": 29
                     }'&gt;19&lt;/h2&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;

            &lt;div class="col-md-3 mb-3 mb-md-0"&gt;
              &lt;h2 id="pricingCount2" class="display-4 text-center"
                     data-nue-toggle-switch-item-options='{
                       "min": 39,
                       "max": 49
                     }'&gt;39&lt;/h2&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;

            &lt;div class="col-md-3 mb-3 mb-md-0"&gt;
              &lt;h2 id="pricingCount3" class="display-4 text-center"
                     data-nue-toggle-switch-item-options='{
                       "min": 59,
                       "max": 69
                     }'&gt;59&lt;/h2&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="modal-example" class="nue-docs-heading">
    Pakai Modal <a class="anchorjs-link" href="#modal-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Open modal</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Toggle Switch</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>

            <div class="modal-body">
              <form>
                <div class="d-flex justify-content-center mb-4">
                  <div class="form-check form-switch form-switch-between">
                    <label class="form-check-label">Monthly</label>
                    <input class="js-toggle-switch form-check-input" type="checkbox" data-nue-toggle-switch-options='{
                             "targetSelector": "#pricingCountModal1, #pricingCountModal2, #pricingCountModal3"
                           }'>
                    <label class="form-check-label">Annually</label>
                  </div>
                </div>

                <div class="row justify-content-center">
                  <div class="col-md-3 mb-3 mb-md-0">
                    <h2 id="pricingCountModal1" class="display-4 text-center" data-nue-toggle-switch-item-options='{
                             "min": 19,
                             "max": 29
                           }'>19</h2>
                  </div>

                  <div class="col-md-3 mb-3 mb-md-0">
                    <h2 id="pricingCountModal2" class="display-4 text-center" data-nue-toggle-switch-item-options='{
                             "min": 39,
                             "max": 49
                           }'>39</h2>
                  </div>

                  <div class="col-md-3 mb-3 mb-md-0">
                    <h2 id="pricingCountModal3" class="display-4 text-center" data-nue-toggle-switch-item-options='{
                             "min": 59,
                             "max": 69
                           }'>59</h2>
                  </div>
                </div>
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-white" data-bs-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary">Simpan</button>
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
                  &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Toggle Switch&lt;/h5&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"&gt;&lt;/button&gt;
                &lt;/div&gt;

                &lt;div class="modal-body"&gt;
                  &lt;form&gt;
                    &lt;!-- Form Switch --&gt;
                    &lt;div class="d-flex justify-content-center mb-4"&gt;
                      &lt;div class="form-check form-switch form-switch-between"&gt;
                        &lt;label class="form-check-label"&gt;Monthly&lt;/label&gt;
                        &lt;input class="js-toggle-switch form-check-input" type="checkbox"
                               data-nue-toggle-switch-options='{
                                 "targetSelector": "#pricingCountModal1, #pricingCountModal2, #pricingCountModal3"
                               }'&gt;
                        &lt;label class="form-check-label"&gt;Annually&lt;/label&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Form Switch --&gt;

                    &lt;div class="row justify-content-center"&gt;
                      &lt;div class="col-md-3 mb-3 mb-md-0"&gt;
                        &lt;h2 id="pricingCountModal1" class="display-4 text-center"
                               data-nue-toggle-switch-item-options='{
                                 "min": 19,
                                 "max": 29
                               }'&gt;19&lt;/h2&gt;
                      &lt;/div&gt;
                      &lt;!-- End Col --&gt;

                      &lt;div class="col-md-3 mb-3 mb-md-0"&gt;
                        &lt;h2 id="pricingCountModal2" class="display-4 text-center"
                               data-nue-toggle-switch-item-options='{
                                 "min": 39,
                                 "max": 49
                               }'&gt;39&lt;/h2&gt;
                      &lt;/div&gt;
                      &lt;!-- End Col --&gt;

                      &lt;div class="col-md-3 mb-3 mb-md-0"&gt;
                        &lt;h2 id="pricingCountModal3" class="display-4 text-center"
                               data-nue-toggle-switch-item-options='{
                                 "min": 59,
                                 "max": 69
                               }'&gt;59&lt;/h2&gt;
                      &lt;/div&gt;
                      &lt;!-- End Col --&gt;
                    &lt;/div&gt;
                    &lt;!-- End Row --&gt;
                  &lt;/form&gt;
                &lt;/div&gt;

                &lt;div class="modal-footer"&gt;
                  &lt;button type="button" class="btn btn-white" data-bs-dismiss="modal"&gt;Tutup&lt;/button&gt;
                  &lt;button type="button" class="btn btn-primary"&gt;Simpan&lt;/button&gt;
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
            <th>Parameter</th>
            <th style="width: 50%;">Deskripsi</th>
            <th class="text-nowrap">Nilai default</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <p><code>targetSelector</code></p>
            </td>
            <td>Target <b>Class</b> yang ingin nilainya berubah dari <code>min</code> ke <code>max</code> dengan animasi (perhitungan), untuk setiap element yang ditentukan dalam bentuk array. Intinya, menampilkan hitungan naik/turun.</td>
            <td><code>undefined</code></td>
          </tr>

          <tr>
            <td>
              <p><code>isChecked</code></p>
            </td>
            <td><code>true</code> bisa digunakan supaya target otomatis aktif ketika pertama kali di load.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td>
              <p><code>eventType</code></p>
            </td>
            <td>Event untuk menjalankan script.</td>
            <td><code>'change'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>min</code></p>
            </td>
            <td>Nilai awal.</td>
            <td>-</td>
          </tr>

          <tr>
            <td>
              <p><code>max</code></p>
            </td>
            <td>Nilai maksimal.</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
