@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Quantity Counter')

@section('js')
  <script>
    // INITIALIZATION OF  QUANTITY COUNTER
    // =======================================================
    new NueQuantityCounter('.js-quantity-counter')
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Quantity Counter
    <x-slot:description>Quantity counter input idea for Shop systems or so.</x-slot:description>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>
  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF  QUANTITY COUNTER
          // =======================================================
          new NueQuantityCounter('.js-quantity-counter')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="quantity-counter" style="max-width: 20rem;">
        <div class="js-quantity-counter row align-items-center">
          <div class="col">
            <span class="d-block small">Select quantity</span>
            <input class="js-result form-control form-control-quantity-counter" type="text" value="1">
          </div>

          <div class="col-auto">
            <a class="js-minus btn btn-outline-secondary btn-xs btn-icon rounded-circle" href="javascript:;">
              <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
              </svg>
            </a>
            <a class="js-plus btn btn-outline-secondary btn-xs btn-icon rounded-circle" href="javascript:;">
              <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Quantity --&gt;
          &lt;div class="quantity-counter"&gt;
            &lt;div class="js-quantity-counter row align-items-center"&gt;
              &lt;div class="col"&gt;
                &lt;span class="d-block small"&gt;Select quantity&lt;/span&gt;
                &lt;input class="js-result form-control form-control-quantity-counter" type="text" value="1"&gt;
              &lt;/div&gt;
              &lt;!-- End Col --&gt;

              &lt;div class="col-auto"&gt;
                &lt;a class="js-minus btn btn-outline-secondary btn-xs btn-icon rounded-circle" href="javascript:;"&gt;
                  &lt;svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
                &lt;/a&gt;
                &lt;a class="js-plus btn btn-outline-secondary btn-xs btn-icon rounded-circle" href="javascript:;"&gt;
                  &lt;svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
                &lt;/a&gt;
              &lt;/div&gt;
              &lt;!-- End Col --&gt;
            &lt;/div&gt;
            &lt;!-- End Row --&gt;
          &lt;/div&gt;
          &lt;!-- End Quantity --&gt;
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
              <h5 class="modal-title" id="exampleModalLabel">Quantity Counter</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form>
                <div class="quantity-counter" style="max-width: 20rem;">
                  <div class="js-quantity-counter row align-items-center">
                    <div class="col">
                      <span class="d-block small">Select quantity</span>
                      <input class="js-result form-control form-control-quantity-counter" type="text" value="1">
                    </div>

                    <div class="col-auto">
                      <a class="js-minus btn btn-outline-secondary btn-xs btn-icon rounded-circle" href="javascript:;">
                        <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                        </svg>
                      </a>
                      <a class="js-plus btn btn-outline-secondary btn-xs btn-icon rounded-circle" href="javascript:;">
                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                        </svg>
                      </a>
                    </div>
                  </div>
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
                  &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Quantity Counter&lt;/h5&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;

                &lt;div class="modal-body"&gt;
                  &lt;form&gt;
                    &lt;!-- Quantity --&gt;
                    &lt;div class="quantity-counter"&gt;
                      &lt;div class="js-quantity-counter row align-items-center"&gt;
                        &lt;div class="col"&gt;
                          &lt;span class="d-block small"&gt;Select quantity&lt;/span&gt;
                          &lt;input class="js-result form-control form-control-quantity-counter" type="text" value="1"&gt;
                        &lt;/div&gt;
                        &lt;!-- End Col --&gt;

                        &lt;div class="col-auto"&gt;
                          &lt;a class="js-minus btn btn-outline-secondary btn-xs btn-icon rounded-circle" href="javascript:;"&gt;
                            &lt;svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor"/&gt;
                            &lt;/svg&gt;
                          &lt;/a&gt;
                          &lt;a class="js-plus btn btn-outline-secondary btn-xs btn-icon rounded-circle" href="javascript:;"&gt;
                            &lt;svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                              &lt;path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor"/&gt;
                            &lt;/svg&gt;
                          &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;!-- End Col --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Row --&gt;
                    &lt;/div&gt;
                    &lt;!-- End Quantity --&gt;
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
            <th>Parameter</th>
            <th style="width: 50%;">Deskripsi</th>
            <th class="text-nowrap">Nilai default</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <p><code>classMap.plus</code></p>
            </td>
            <td>Selector, inside the initialized element, which is responsible for adding a unit to the current value</td>
            <td><code>'.js-plus'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.minus</code></p>
            </td>
            <td>Selector, inside the initialized element, which is responsible for subtracting the unit from the current value</td>
            <td><code>'.js-minus'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>classMap.result</code></p>
            </td>
            <td>Selector, inside the initialized element, which is responsible for displaying the current value</td>
            <td><code>'.js-result'</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
