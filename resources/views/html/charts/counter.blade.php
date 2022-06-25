@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Counter')

@section('js')
  <script>
    (function() {
      // INITIALIZATION OF COUNTER
      // =======================================================
      new NueCounter('.js-counter')
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Counter
    <x-slot:description>Animate a number from zero (counting up towards it).</x-slot:description>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code></p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF COUNTER
          // =======================================================
          new NueCounter('.js-counter')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row text-center">
        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
          <div class="js-counter h1 mb-1">52147</div>
          <span>Code Lines</span>
        </div>

        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
          <div class="js-counter h1 mb-1">24583</div>
          <span>Projects</span>
        </div>

        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
          <div class="js-counter h1 mb-1">7348</div>
          <span>Working Hours</span>
        </div>

        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
          <div class="js-counter h1 mb-1">87904</div>
          <span>Job Offers</span>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row text-center"&gt;
            &lt;div class="col-lg-3 col-sm-6 mb-5 mb-lg-0"&gt;
              &lt;div class="js-counter h1 mb-1"&gt;52147&lt;/div&gt;
              &lt;span&gt;Code Lines&lt;/span&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;

            &lt;div class="col-lg-3 col-sm-6 mb-5 mb-lg-0"&gt;
              &lt;div class="js-counter h1 mb-1"&gt;24583&lt;/div&gt;
              &lt;span&gt;Projects&lt;/span&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;

            &lt;div class="col-lg-3 col-sm-6 mb-5 mb-lg-0"&gt;
              &lt;div class="js-counter h1 mb-1"&gt;7348&lt;/div&gt;
              &lt;span&gt;Working Hours&lt;/span&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;

            &lt;div class="col-lg-3 col-sm-6 mb-5 mb-lg-0"&gt;
              &lt;div class="js-counter h1 mb-1"&gt;87904&lt;/div&gt;
              &lt;span&gt;Job Offers&lt;/span&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Comma separated:</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row text-center">
        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
          <div class="js-counter h1 mb-1" data-nue-counter-options='{
                 "isCommaSeparated": true
               }'>52147</div>
          <span>Code Lines</span>
        </div>

        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
          <div class="js-counter h1 mb-1" data-nue-counter-options='{
                 "isCommaSeparated": true
               }'>24583</div>
          <span>Projects</span>
        </div>

        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
          <div class="js-counter h1 mb-1" data-nue-counter-options='{
                 "isCommaSeparated": true
               }'>7348</div>
          <span>Working Hours</span>
        </div>

        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
          <div class="js-counter h1 mb-1" data-nue-counter-options='{
                 "isCommaSeparated": true
               }'>87904</div>
          <span>Job Offers</span>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row text-center"&gt;
            &lt;div class="col-lg-3 col-sm-6 mb-5 mb-lg-0"&gt;
              &lt;div class="js-counter h1 mb-1"
                    data-nue-counter-options='{
                     "isCommaSeparated": true
                   }'&gt;52147&lt;/div&gt;
              &lt;span&gt;Code Lines&lt;/span&gt;
            &lt;/div&gt;

            &lt;div class="col-lg-3 col-sm-6 mb-5 mb-lg-0"&gt;
              &lt;div class="js-counter h1 mb-1"
                    data-nue-counter-options='{
                     "isCommaSeparated": true
                   }'&gt;24583&lt;/div&gt;
              &lt;span&gt;Projects&lt;/span&gt;
            &lt;/div&gt;

            &lt;div class="col-lg-3 col-sm-6 mb-5 mb-lg-0"&gt;
              &lt;div class="js-counter h1 mb-1"
                    data-nue-counter-options='{
                     "isCommaSeparated": true
                   }'&gt;7348&lt;/div&gt;
              &lt;span&gt;Working Hours&lt;/span&gt;
            &lt;/div&gt;

            &lt;div class="col-lg-3 col-sm-6 mb-5 mb-lg-0"&gt;
              &lt;div class="js-counter h1 mb-1"
                    data-nue-counter-options='{
                     "isCommaSeparated": true
                   }'&gt;87904&lt;/div&gt;
              &lt;span&gt;Job Offers&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Reduced to thousand:</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row text-center">
        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
          <div class="js-counter h1 mb-1" data-nue-counter-options='{
                 "isReduceThousandsTo": true
               }'>52147</div>
          <span>Code Lines</span>
        </div>

        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
          <div class="js-counter h1 mb-1" data-nue-counter-options='{
                 "isReduceThousandsTo": true
               }'>24583</div>
          <span>Projects</span>
        </div>

        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
          <div class="js-counter h1 mb-1" data-nue-counter-options='{
                 "isReduceThousandsTo": true
               }'>7348</div>
          <span>Working Hours</span>
        </div>

        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
          <div class="js-counter h1 mb-1" data-nue-counter-options='{
                 "isReduceThousandsTo": true
               }'>87904</div>
          <span>Job Offers</span>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row text-center"&gt;
            &lt;div class="col-lg-3 col-sm-6 mb-5 mb-lg-0"&gt;
              &lt;div class="js-counter h1 mb-1"
                    data-nue-counter-options='{
                     "isReduceThousandsTo": true
                   }'&gt;52147&lt;/div&gt;
              &lt;span&gt;Code Lines&lt;/span&gt;
            &lt;/div&gt;

            &lt;div class="col-lg-3 col-sm-6 mb-5 mb-lg-0"&gt;
              &lt;div class="js-counter h1 mb-1"
                    data-nue-counter-options='{
                     "isReduceThousandsTo": true
                   }'&gt;24583&lt;/div&gt;
              &lt;span&gt;Projects&lt;/span&gt;
            &lt;/div&gt;

            &lt;div class="col-lg-3 col-sm-6 mb-5 mb-lg-0"&gt;
              &lt;div class="js-counter h1 mb-1"
                    data-nue-counter-options='{
                     "isReduceThousandsTo": true
                   }'&gt;7348&lt;/div&gt;
              &lt;span&gt;Working Hours&lt;/span&gt;
            &lt;/div&gt;

            &lt;div class="col-lg-3 col-sm-6 mb-5 mb-lg-0"&gt;
              &lt;div class="js-counter h1 mb-1"
                    data-nue-counter-options='{
                     "isReduceThousandsTo": true
                   }'&gt;87904&lt;/div&gt;
              &lt;span&gt;Job Offers&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="methods" class="nue-docs-heading">
    Methods <a class="anchorjs-link" href="#methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <div class="card overflow-hidden">
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
            <td>
              <code>isCommaSeparated</code>
            </td>
            <td>If <code>true</code>, then substitute a comma after thousandths</td>
            <td>
              <code>false</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>isReduceThousandsTo</code>
            </td>
            <td>Postfix after numerical value</td>
            <td>
              <code>false</code>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection