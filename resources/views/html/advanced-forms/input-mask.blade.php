@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Input Mask')

@section('js')
  <script>
    (function() {
      // INITIALIZATION OF INPUT MASK
      // =======================================================
      Nue.components.NueMask.init('.js-input-mask')
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Input Mask
    <x-slot:description>A plugin to make masks on form fields.</x-slot:description>
    <x-slot:link>https://igorescobar.github.io/jQuery-Mask-Plugin/</x-slot:link>
    <x-slot:label>Dokumentasi Input Mask</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>
  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF INPUT MASK
          // =======================================================
          Nue.components.NueMask.init('.js-input-mask')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="mb-4">
        <label for="PhoneNumberLabel" class="form-label">Phone Number</label>
        <input type="text" class="js-input-mask form-control" id="PhoneNumberLabel" placeholder="+x(xxx)xxx-xx-xx" data-nue-mask-options='{
            "mask": "+0(000)000-00-00"
          }'>
      </div>

      <div class="mb-4">
        <label for="MoneyLabel" class="form-label">Money</label>
        <input type="text" class="js-input-mask form-control" id="MoneyLabel" placeholder="$ x,xx.xx" data-nue-mask-options='{
            "mask": "$ 0,00.00"
          }'>
      </div>

      <div class="mb-4">
        <label for="CreditCardLabel" class="form-label">Credit Card</label>
        <input type="text" class="js-input-mask form-control" id="CreditCardLabel" placeholder="xxxx xxxx xxxx xxxx" data-nue-mask-options='{
            "mask": "0000 0000 0000 0000"
          }'>
      </div>

      <div class="mb-4">
        <label for="DateLabel" class="form-label">Date</label>
        <input type="text" class="js-input-mask form-control" id="DateLabel" placeholder="xx/xx/xxxx" data-nue-mask-options='{
            "mask": "00/00/0000"
          }'>
      </div>

      <div class="mb-4">
        <label for="HourLabel" class="form-label">Hour</label>
        <input type="text" class="js-input-mask form-control" id="HourLabel" placeholder="xx:xx:xx" data-nue-mask-options='{
            "mask": "00:00:00"
          }'>
      </div>

      <div class="mb-4">
        <label for="IPAddressLabel" class="form-label">IP Address</label>
        <input type="text" class="js-input-mask form-control" id="IPAddressLabel" placeholder="xxx.xxx.xxx.xxx" data-nue-mask-options='{
            "mask": "000.000.000.000"
          }'>
      </div>

      <div class="mb-4">
        <label for="MixedLabel" class="form-label">Mixed</label>
        <input type="text" class="js-input-mask form-control" id="MixedLabel" placeholder="AAA 000-S0S" data-nue-mask-options='{
            "mask": "AAA 000-S0S"
          }'>
      </div>

      <div class="mb-4">
        <label for="CPFLabel" class="form-label">CPF</label>
        <input type="text" class="js-input-mask form-control" id="CPFLabel" placeholder="xxx.xxx.xxx-xx" data-nue-mask-options='{
            "mask": "000.000.000-00"
          }'>
      </div>

      <div class="mb-4">
        <label for="CNPJLabel" class="form-label">CNPJ</label>
        <input type="text" class="js-input-mask form-control" id="CNPJLabel" placeholder="xx.xxx.xxx/xxxx-xx" data-nue-mask-options='{
            "mask": "00.000.000/0000-00"
          }'>
      </div>

      <div class="mb-4">
        <label for="PercentLabel" class="form-label">Percent</label>
        <input type="text" class="js-input-mask form-control" id="PercentLabel" placeholder="##x,xx%" data-nue-mask-options='{
            "mask": "##0,00%"
          }'>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Phone Number --&gt;
          &lt;div class="mb-4"&gt;
            &lt;label for="PhoneNumberLabel" class="form-label"&gt;Phone Number&lt;/label&gt;
            &lt;input type="text" class="js-input-mask form-control" id="PhoneNumberLabel" placeholder="+x(xxx)xxx-xx-xx"
              data-nue-mask-options='{
                "mask": "+0(000)000-00-00"
              }'&gt;
          &lt;/div&gt;
          &lt;!-- End Phone Number --&gt;

          &lt;!-- Money --&gt;
          &lt;div class="mb-4"&gt;
            &lt;label for="MoneyLabel" class="form-label"&gt;Money&lt;/label&gt;
            &lt;input type="text" class="js-input-mask form-control" id="MoneyLabel" placeholder="$ x,xx.xx"
              data-nue-mask-options='{
                "mask": "$ 0,00.00"
              }'&gt;
          &lt;/div&gt;
          &lt;!-- End Money --&gt;

          &lt;!-- Credit Card --&gt;
          &lt;div class="mb-4"&gt;
            &lt;label for="CreditCardLabel" class="form-label"&gt;Credit Card&lt;/label&gt;
            &lt;input type="text" class="js-input-mask form-control" id="CreditCardLabel" placeholder="xxxx xxxx xxxx xxxx"
              data-nue-mask-options='{
                "mask": "0000 0000 0000 0000"
              }'&gt;
          &lt;/div&gt;
          &lt;!-- End Credit Card --&gt;

          &lt;!-- Date --&gt;
          &lt;div class="mb-4"&gt;
            &lt;label for="DateLabel" class="form-label"&gt;Date&lt;/label&gt;
            &lt;input type="text" class="js-input-mask form-control" id="DateLabel" placeholder="xx/xx/xxxx"
              data-nue-mask-options='{
                "mask": "00/00/0000"
              }'&gt;
          &lt;/div&gt;
          &lt;!-- End Date --&gt;

          &lt;!-- Hour --&gt;
          &lt;div class="mb-4"&gt;
            &lt;label for="HourLabel" class="form-label"&gt;Hour&lt;/label&gt;
            &lt;input type="text" class="js-input-mask form-control" id="HourLabel" placeholder="xx:xx:xx"
              data-nue-mask-options='{
                "mask": "00:00:00"
              }'&gt;
          &lt;/div&gt;
          &lt;!-- End Hour --&gt;

          &lt;!-- IP Address --&gt;
          &lt;div class="mb-4"&gt;
            &lt;label for="IPAddressLabel" class="form-label"&gt;IP Address&lt;/label&gt;
            &lt;input type="text" class="js-input-mask form-control" id="IPAddressLabel" placeholder="xxx.xxx.xxx.xxx"
              data-nue-mask-options='{
                "mask": "000.000.000.000"
              }'&gt;
          &lt;/div&gt;
          &lt;!-- End IP Address --&gt;

          &lt;!-- Mixed --&gt;
          &lt;div class="mb-4"&gt;
            &lt;label for="MixedLabel" class="form-label"&gt;Mixed&lt;/label&gt;
            &lt;input type="text" class="js-input-mask form-control" id="MixedLabel" placeholder="AAA 000-S0S"
              data-nue-mask-options='{
                "mask": "AAA 000-S0S"
              }'&gt;
          &lt;/div&gt;
          &lt;!-- End Mixed --&gt;

          &lt;!-- CPF --&gt;
          &lt;div class="mb-4"&gt;
            &lt;label for="CPFLabel" class="form-label"&gt;CPF&lt;/label&gt;
            &lt;input type="text" class="js-input-mask form-control" id="CPFLabel" placeholder="xxx.xxx.xxx-xx"
              data-nue-mask-options='{
                "mask": "000.000.000-00"
              }'&gt;
          &lt;/div&gt;
          &lt;!-- End CPF --&gt;

          &lt;!-- CNPJ --&gt;
          &lt;div class="mb-4"&gt;
            &lt;label for="CNPJLabel" class="form-label"&gt;CNPJ&lt;/label&gt;
            &lt;input type="text" class="js-input-mask form-control" id="CNPJLabel" placeholder="xx.xxx.xxx/xxxx-xx"
              data-nue-mask-options='{
                "mask": "00.000.000/0000-00"
              }'&gt;
          &lt;/div&gt;
          &lt;!-- End CNPJ --&gt;

          &lt;!-- Percent --&gt;
          &lt;div class="mb-4"&gt;
            &lt;label for="PercentLabel" class="form-label"&gt;Percent&lt;/label&gt;
            &lt;input type="text" class="js-input-mask form-control" id="PercentLabel" placeholder="##x,xx%"
              data-nue-mask-options='{
                "mask": "##0,00%"
              }'&gt;
          &lt;/div&gt;
          &lt;!-- End Percent --&gt;
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
              <h5 class="modal-title" id="exampleModalLabel">Input Mask</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form>
                <div class="mb-4">
                  <label for="PhoneNumberModalLabel" class="form-label">Phone Number</label>
                  <input type="text" class="js-input-mask form-control" id="PhoneNumberModalLabel" placeholder="+x(xxx)xxx-xx-xx" data-nue-mask-options='{
                      "mask": "+0(000)000-00-00"
                    }'>
                </div>

                <div class="mb-4">
                  <label for="MoneyModalLabel" class="form-label">Money</label>
                  <input type="text" class="js-input-mask form-control" id="MoneyModalLabel" placeholder="$ x,xx.xx" data-nue-mask-options='{
                      "mask": "$ 0,00.00"
                    }'>
                </div>

                <div class="mb-4">
                  <label for="CreditCardModalLabel" class="form-label">Credit Card</label>
                  <input type="text" class="js-input-mask form-control" id="CreditCardModalLabel" placeholder="xxxx xxxx xxxx xxxx" data-nue-mask-options='{
                      "mask": "0000 0000 0000 0000"
                    }'>
                </div>

                <div class="mb-4">
                  <label for="DateModalLabel" class="form-label">Date</label>
                  <input type="text" class="js-input-mask form-control" id="DateModalLabel" placeholder="xx/xx/xxxx" data-nue-mask-options='{
                      "mask": "00/00/0000"
                    }'>
                </div>

                <div class="mb-4">
                  <label for="HourModalLabel" class="form-label">Hour</label>
                  <input type="text" class="js-input-mask form-control" id="HourModalLabel" placeholder="xx:xx:xx" data-nue-mask-options='{
                      "mask": "00:00:00"
                    }'>
                </div>

                <div class="mb-4">
                  <label for="IPAddressModalLabel" class="form-label">IP Address</label>
                  <input type="text" class="js-input-mask form-control" id="IPAddressModalLabel" placeholder="xxx.xxx.xxx.xxx" data-nue-mask-options='{
                      "mask": "000.000.000.000"
                    }'>
                </div>

                <div class="mb-4">
                  <label for="MixedModalLabel" class="form-label">Mixed</label>
                  <input type="text" class="js-input-mask form-control" id="MixedModalLabel" placeholder="AAA 000-S0S" data-nue-mask-options='{
                      "mask": "AAA 000-S0S"
                    }'>
                </div>

                <div class="mb-4">
                  <label for="CPFModalLabel" class="form-label">CPF</label>
                  <input type="text" class="js-input-mask form-control" id="CPFModalLabel" placeholder="xxx.xxx.xxx-xx" data-nue-mask-options='{
                      "mask": "000.000.000-00"
                    }'>
                </div>

                <div class="mb-4">
                  <label for="CNPJModalLabel" class="form-label">CNPJ</label>
                  <input type="text" class="js-input-mask form-control" id="CNPJModalLabel" placeholder="xx.xxx.xxx/xxxx-xx" data-nue-mask-options='{
                      "mask": "00.000.000/0000-00"
                    }'>
                </div>

                <div class="mb-4">
                  <label for="PercentModalLabel" class="form-label">Percent</label>
                  <input type="text" class="js-input-mask form-control" id="PercentModalLabel" placeholder="##x,xx%" data-nue-mask-options='{
                      "mask": "##0,00%"
                    }'>
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
                  &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Input Mask&lt;/h5&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;

                &lt;div class="modal-body"&gt;
                  &lt;form&gt;
                    &lt;!-- Phone Number --&gt;
                    &lt;div class="mb-4"&gt;
                      &lt;label for="PhoneNumberModalLabel" class="form-label"&gt;Phone Number&lt;/label&gt;
                      &lt;input type="text" class="js-input-mask form-control" id="PhoneNumberModalLabel" placeholder="+x(xxx)xxx-xx-xx"
                        data-nue-mask-options='{
                          "mask": "+0(000)000-00-00"
                        }'&gt;
                    &lt;/div&gt;
                    &lt;!-- End Phone Number --&gt;

                    &lt;!-- Money --&gt;
                    &lt;div class="mb-4"&gt;
                      &lt;label for="MoneyModalLabel" class="form-label"&gt;Money&lt;/label&gt;
                      &lt;input type="text" class="js-input-mask form-control" id="MoneyModalLabel" placeholder="$ x,xx.xx"
                        data-nue-mask-options='{
                          "mask": "$ 0,00.00"
                        }'&gt;
                    &lt;/div&gt;
                    &lt;!-- End Money --&gt;

                    &lt;!-- Credit Card --&gt;
                    &lt;div class="mb-4"&gt;
                      &lt;label for="CreditCardModalLabel" class="form-label"&gt;Credit Card&lt;/label&gt;
                      &lt;input type="text" class="js-input-mask form-control" id="CreditCardModalLabel" placeholder="xxxx xxxx xxxx xxxx"
                        data-nue-mask-options='{
                          "mask": "0000 0000 0000 0000"
                        }'&gt;
                    &lt;/div&gt;
                    &lt;!-- End Credit Card --&gt;

                    &lt;!-- Date --&gt;
                    &lt;div class="mb-4"&gt;
                      &lt;label for="DateModalLabel" class="form-label"&gt;Date&lt;/label&gt;
                      &lt;input type="text" class="js-input-mask form-control" id="DateModalLabel" placeholder="xx/xx/xxxx"
                        data-nue-mask-options='{
                          "mask": "00/00/0000"
                        }'&gt;
                    &lt;/div&gt;
                    &lt;!-- End Date --&gt;

                    &lt;!-- Hour --&gt;
                    &lt;div class="mb-4"&gt;
                      &lt;label for="HourModalLabel" class="form-label"&gt;Hour&lt;/label&gt;
                      &lt;input type="text" class="js-input-mask form-control" id="HourModalLabel" placeholder="xx:xx:xx"
                        data-nue-mask-options='{
                          "mask": "00:00:00"
                        }'&gt;
                    &lt;/div&gt;
                    &lt;!-- End Hour --&gt;

                    &lt;!-- IP Address --&gt;
                    &lt;div class="mb-4"&gt;
                      &lt;label for="IPAddressModalLabel" class="form-label"&gt;IP Address&lt;/label&gt;
                      &lt;input type="text" class="js-input-mask form-control" id="IPAddressModalLabel" placeholder="xxx.xxx.xxx.xxx"
                        data-nue-mask-options='{
                          "mask": "000.000.000.000"
                        }'&gt;
                    &lt;/div&gt;
                    &lt;!-- End IP Address --&gt;

                    &lt;!-- Mixed --&gt;
                    &lt;div class="mb-4"&gt;
                      &lt;label for="MixedModalLabel" class="form-label"&gt;Mixed&lt;/label&gt;
                      &lt;input type="text" class="js-input-mask form-control" id="MixedModalLabel" placeholder="AAA 000-S0S"
                        data-nue-mask-options='{
                          "mask": "AAA 000-S0S"
                        }'&gt;
                    &lt;/div&gt;
                    &lt;!-- End Mixed --&gt;

                    &lt;!-- CPF --&gt;
                    &lt;div class="mb-4"&gt;
                      &lt;label for="CPFModalLabel" class="form-label"&gt;CPF&lt;/label&gt;
                      &lt;input type="text" class="js-input-mask form-control" id="CPFModalLabel" placeholder="xxx.xxx.xxx-xx"
                        data-nue-mask-options='{
                          "mask": "000.000.000-00"
                        }'&gt;
                    &lt;/div&gt;
                    &lt;!-- End CPF --&gt;

                    &lt;!-- CNPJ --&gt;
                    &lt;div class="mb-4"&gt;
                      &lt;label for="CNPJModalLabel" class="form-label"&gt;CNPJ&lt;/label&gt;
                      &lt;input type="text" class="js-input-mask form-control" id="CNPJModalLabel" placeholder="xx.xxx.xxx/xxxx-xx"
                        data-nue-mask-options='{
                          "mask": "00.000.000/0000-00"
                        }'&gt;
                    &lt;/div&gt;
                    &lt;!-- End CNPJ --&gt;

                    &lt;!-- Percent --&gt;
                    &lt;div class="mb-4"&gt;
                      &lt;label for="PercentModalLabel" class="form-label"&gt;Percent&lt;/label&gt;
                      &lt;input type="text" class="js-input-mask form-control" id="PercentModalLabel" placeholder="##x,xx%"
                        data-nue-mask-options='{
                          "mask": "##0,00%"
                        }'&gt;
                    &lt;/div&gt;
                    &lt;!-- End Percent --&gt;
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
