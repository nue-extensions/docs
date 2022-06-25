@php($i = 0)
@extends('nue-docs::app')
@section('title', 'SortableJS')

@section('js')
  <script>
    (function() {
      // INITIALIZATION OF SORTABLE
      // =======================================================
      Nue.components.NueSortable.init('.js-sortable')
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    SortableJS
    <x-slot:link>https://sortablejs.github.io/Sortable/</x-slot:link>
    <x-slot:label>Dokumentasi SortableJS</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>
  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code></p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF SORTABLE
          // =======================================================
          Nue.components.NueSortable.init('.js-sortable')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="simplelist-example" class="nue-docs-heading">
    Simple list example <a class="anchorjs-link" href="#simplelist-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-sortable sortablejs-custom list-group" data-nue-sortable-options='{
            "animation": 150,
            "group": "listGroup"
          }'>
        <div class="list-group-item">Item 1</div>
        <div class="list-group-item">Item 2</div>
        <div class="list-group-item">Item 3</div>
        <div class="list-group-item">Item 4</div>
        <div class="list-group-item">Item 5</div>
        <div class="list-group-item">Item 6</div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;div class="js-sortable sortablejs-custom list-group"
              data-nue-sortable-options='{
                "animation": 150,
                "group": "listGroup"
              }'&gt;
           &lt;div class="list-group-item"&gt;Item 1&lt;/div&gt;
           &lt;div class="list-group-item"&gt;Item 2&lt;/div&gt;
           &lt;div class="list-group-item"&gt;Item 3&lt;/div&gt;
           &lt;div class="list-group-item"&gt;Item 4&lt;/div&gt;
           &lt;div class="list-group-item"&gt;Item 5&lt;/div&gt;
           &lt;div class="list-group-item"&gt;Item 6&lt;/div&gt;
         &lt;/div&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="shared-lists" class="nue-docs-heading">
    Shared lists <a class="anchorjs-link" href="#shared-lists" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-md-6">
          <div class="js-sortable sortablejs-custom list-group" data-nue-sortable-options='{
                 "animation": 150,
                 "group": "listGroup"
               }'>
            <div class="list-group-item">Item 1</div>
            <div class="list-group-item">Item 2</div>
            <div class="list-group-item">Item 3</div>
            <div class="list-group-item">Item 4</div>
            <div class="list-group-item">Item 5</div>
            <div class="list-group-item">Item 6</div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="js-sortable sortablejs-custom list-group" data-nue-sortable-options='{
                 "animation": 150,
                 "group": "listGroup"
               }'>
            <div class="list-group-item bg-light">Item 1</div>
            <div class="list-group-item bg-light">Item 2</div>
            <div class="list-group-item bg-light">Item 3</div>
            <div class="list-group-item bg-light">Item 4</div>
            <div class="list-group-item bg-light">Item 5</div>
            <div class="list-group-item bg-light">Item 6</div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-md-6"&gt;
              &lt;!-- List Group --&gt;
              &lt;div class="js-sortable sortablejs-custom list-group"
                   data-nue-sortable-options='{
                     "animation": 150,
                     "group": "listGroup"
                   }'&gt;
                &lt;div class="list-group-item"&gt;Item 1&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 2&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 3&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 4&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 5&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 6&lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End List Group --&gt;
            &lt;/div&gt;

            &lt;div class="col-md-6"&gt;
              &lt;!-- List Group --&gt;
              &lt;div class="js-sortable sortablejs-custom list-group"
                   data-nue-sortable-options='{
                     "animation": 150,
                     "group": "listGroup"
                   }'&gt;
                &lt;div class="list-group-item bg-light"&gt;Item 1&lt;/div&gt;
                &lt;div class="list-group-item bg-light"&gt;Item 2&lt;/div&gt;
                &lt;div class="list-group-item bg-light"&gt;Item 3&lt;/div&gt;
                &lt;div class="list-group-item bg-light"&gt;Item 4&lt;/div&gt;
                &lt;div class="list-group-item bg-light"&gt;Item 5&lt;/div&gt;
                &lt;div class="list-group-item bg-light"&gt;Item 6&lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End List Group --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="disable-sorting" class="nue-docs-heading">
    Disable sorting <a class="anchorjs-link" href="#disable-sorting" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Try sorting the list on the left. It is not possible because it has it's sort option set to <code>false</code>. However, you can still drag from the list on the left to the list on the right.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-md-6">
          <div class="js-sortable sortablejs-custom list-group" data-nue-sortable-options='{
                 "animation": 150,
                 "group": {
                   "name": "listGroup3",
                   "pull": "clone",
                   "put": false
                 }
               }'>
            <div class="list-group-item">Item 1</div>
            <div class="list-group-item">Item 2</div>
            <div class="list-group-item">Item 3</div>
            <div class="list-group-item">Item 4</div>
            <div class="list-group-item">Item 5</div>
            <div class="list-group-item">Item 6</div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="js-sortable sortablejs-custom list-group" data-nue-sortable-options='{
                 "animation": 150,
                 "group": "listGroup3"
               }'>
            <div class="list-group-item bg-light">Item 1</div>
            <div class="list-group-item bg-light">Item 2</div>
            <div class="list-group-item bg-light">Item 3</div>
            <div class="list-group-item bg-light">Item 4</div>
            <div class="list-group-item bg-light">Item 5</div>
            <div class="list-group-item bg-light">Item 6</div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-md-6"&gt;
              &lt;!-- List Group --&gt;
              &lt;div class="js-sortable sortablejs-custom list-group"
                   data-nue-sortable-options='{
                     "animation": 150,
                     "group": {
                       "name": "listGroup3",
                       "pull": "clone",
                       "put": false
                     }
                   }'&gt;
                &lt;div class="list-group-item"&gt;Item 1&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 2&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 3&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 4&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 5&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 6&lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End List Group --&gt;
            &lt;/div&gt;

            &lt;div class="col-md-6"&gt;
              &lt;!-- List Group --&gt;
              &lt;div class="js-sortable sortablejs-custom list-group"
                   data-nue-sortable-options='{
                     "animation": 150,
                     "group": "listGroup3"
                   }'&gt;
                &lt;div class="list-group-item bg-light"&gt;Item 1&lt;/div&gt;
                &lt;div class="list-group-item bg-light"&gt;Item 2&lt;/div&gt;
                &lt;div class="list-group-item bg-light"&gt;Item 3&lt;/div&gt;
                &lt;div class="list-group-item bg-light"&gt;Item 4&lt;/div&gt;
                &lt;div class="list-group-item bg-light"&gt;Item 5&lt;/div&gt;
                &lt;div class="list-group-item bg-light"&gt;Item 6&lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End List Group --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="handle" class="nue-docs-heading">
    Handle <a class="anchorjs-link" href="#handle" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-sortable sortablejs-custom list-group" data-nue-sortable-options='{
            "animation": 150,
            "handle": ".sortablejs-custom-handle"
          }'>
        <div class="list-group-item">
          <i class="sortablejs-custom-handle bi-grip-horizontal list-group-icon"></i> Item 1
        </div>
        <div class="list-group-item">
          <i class="sortablejs-custom-handle bi-grip-horizontal list-group-icon"></i> Item 2
        </div>
        <div class="list-group-item">
          <i class="sortablejs-custom-handle bi-grip-horizontal list-group-icon"></i> Item 3
        </div>
        <div class="list-group-item">
          <i class="sortablejs-custom-handle bi-grip-horizontal list-group-icon"></i> Item 4
        </div>
        <div class="list-group-item">
          <i class="sortablejs-custom-handle bi-grip-horizontal list-group-icon"></i> Item 5
        </div>
        <div class="list-group-item">
          <i class="sortablejs-custom-handle bi-grip-horizontal list-group-icon"></i> Item 6
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;div class="js-sortable sortablejs-custom list-group"
              data-nue-sortable-options='{
                "animation": 150,
                "handle": ".sortablejs-custom-handle"
              }'&gt;
            &lt;div class="list-group-item"&gt;
              &lt;i class="sortablejs-custom-handle bi-grip-horizontal list-group-icon"&gt;&lt;/i&gt; Item 1
            &lt;/div&gt;
            &lt;div class="list-group-item"&gt;
              &lt;i class="sortablejs-custom-handle bi-grip-horizontal list-group-icon"&gt;&lt;/i&gt; Item 2
            &lt;/div&gt;
            &lt;div class="list-group-item"&gt;
              &lt;i class="sortablejs-custom-handle bi-grip-horizontal list-group-icon"&gt;&lt;/i&gt; Item 3
            &lt;/div&gt;
            &lt;div class="list-group-item"&gt;
              &lt;i class="sortablejs-custom-handle bi-grip-horizontal list-group-icon"&gt;&lt;/i&gt; Item 4
            &lt;/div&gt;
            &lt;div class="list-group-item"&gt;
              &lt;i class="sortablejs-custom-handle bi-grip-horizontal list-group-icon"&gt;&lt;/i&gt; Item 5
            &lt;/div&gt;
            &lt;div class="list-group-item"&gt;
              &lt;i class="sortablejs-custom-handle bi-grip-horizontal list-group-icon"&gt;&lt;/i&gt; Item 6
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="filter" class="nue-docs-heading">
    Filter <a class="anchorjs-link" href="#filter" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Try dragging the item with a red background. It cannot be done, because that item is filtered out using the <code>filter</code> option.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-sortable list-group" data-nue-sortable-options='{
              "animation": 150,
              "filter": ".sortablejs-custom-disabled"
            }'>
        <div class="list-group-item">Item 1</div>
        <div class="list-group-item sortablejs-custom-disabled bg-danger text-white">Filtered</div>
        <div class="list-group-item">Item 3</div>
        <div class="list-group-item">Item 4</div>
        <div class="list-group-item">Item 5</div>
        <div class="list-group-item">Item 6</div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;div class="js-sortable list-group"
               data-nue-sortable-options='{
                  "animation": 150,
                  "filter": ".sortablejs-custom-disabled"
                }'&gt;
            &lt;div class="list-group-item"&gt;Item 1&lt;/div&gt;
            &lt;div class="list-group-item sortablejs-custom-disabled bg-danger text-white"&gt;Filtered&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 3&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 4&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 5&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 6&lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="grid" class="nue-docs-heading">
    Grid <a class="anchorjs-link" href="#grid" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-sortable row" data-nue-sortable-options='{
             "animation": 150,
             "ghostClass": "sortablejs-custom-chosen-child"
           }'>
        <div class="col-md-2 mb-3">
          <div class="card">
            <div class="card-body text-center">1</div>
          </div>
        </div>

        <div class="col-md-2 mb-3">
          <div class="card">
            <div class="card-body text-center">2</div>
          </div>
        </div>

        <div class="col-md-2 mb-3">
          <div class="card">
            <div class="card-body text-center">3</div>
          </div>
        </div>

        <div class="col-md-2 mb-3">
          <div class="card">
            <div class="card-body text-center">4</div>
          </div>
        </div>

        <div class="col-md-2 mb-3">
          <div class="card">
            <div class="card-body text-center">5</div>
          </div>
        </div>

        <div class="col-md-2 mb-3">
          <div class="card">
            <div class="card-body text-center">6</div>
          </div>
        </div>

        <div class="col-md-2 mb-3">
          <div class="card">
            <div class="card-body text-center">7</div>
          </div>
        </div>

        <div class="col-md-2 mb-3">
          <div class="card">
            <div class="card-body text-center">8</div>
          </div>
        </div>

        <div class="col-md-2 mb-3">
          <div class="card">
            <div class="card-body text-center">9</div>
          </div>
        </div>

        <div class="col-md-2 mb-3">
          <div class="card">
            <div class="card-body text-center">10</div>
          </div>
        </div>

        <div class="col-md-2 mb-3">
          <div class="card">
            <div class="card-body text-center">11</div>
          </div>
        </div>

        <div class="col-md-2 mb-3">
          <div class="card">
            <div class="card-body text-center">12</div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;div class="js-sortable row"
               data-nue-sortable-options='{
                 "animation": 150,
                 "ghostClass": "sortablejs-custom-chosen-child"
               }'&gt;
            &lt;div class="col-md-2 mb-3"&gt;
              &lt;div class="card"&gt;
                &lt;div class="card-body text-center"&gt;1&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-md-2 mb-3"&gt;
              &lt;div class="card"&gt;
                &lt;div class="card-body text-center"&gt;2&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-md-2 mb-3"&gt;
              &lt;div class="card"&gt;
                &lt;div class="card-body text-center"&gt;3&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-md-2 mb-3"&gt;
              &lt;div class="card"&gt;
                &lt;div class="card-body text-center"&gt;4&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-md-2 mb-3"&gt;
              &lt;div class="card"&gt;
                &lt;div class="card-body text-center"&gt;5&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-md-2 mb-3"&gt;
              &lt;div class="card"&gt;
                &lt;div class="card-body text-center"&gt;6&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-md-2 mb-3"&gt;
              &lt;div class="card"&gt;
                &lt;div class="card-body text-center"&gt;7&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-md-2 mb-3"&gt;
              &lt;div class="card"&gt;
                &lt;div class="card-body text-center"&gt;8&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-md-2 mb-3"&gt;
              &lt;div class="card"&gt;
                &lt;div class="card-body text-center"&gt;9&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-md-2 mb-3"&gt;
              &lt;div class="card"&gt;
                &lt;div class="card-body text-center"&gt;10&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-md-2 mb-3"&gt;
              &lt;div class="card"&gt;
                &lt;div class="card-body text-center"&gt;11&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-md-2 mb-3"&gt;
              &lt;div class="card"&gt;
                &lt;div class="card-body text-center"&gt;12&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="nested" class="nue-docs-heading">
    Nested <a class="anchorjs-link" href="#nested" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-sortable list-group" data-nue-sortable-options='{
            "animation": 150,
            "group": "listGroup4",
            "fallbackOnBody": true
          }'>
        <div class="list-group-item">Item 1</div>
        <div class="list-group-item">Item 2</div>
        <div class="list-group-item">
          <h4 class="h5">Item 3</h4>

          <div class="js-sortable list-group" data-nue-sortable-options='{
                 "animation": 150,
                 "group": "listGroup5"
               }'>
            <div class="list-group-item">Item 3.1</div>
            <div class="list-group-item">Item 3.2</div>
            <div class="list-group-item">Item 3.3</div>
            <div class="list-group-item">Item 3.4</div>
          </div>
        </div>
        <div class="list-group-item">Item 4</div>
        <div class="list-group-item">Item 5</div>
        <div class="list-group-item">Item 6</div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;div class="js-sortable list-group"
              data-nue-sortable-options='{
                "animation": 150,
                "group": "listGroup4",
                "fallbackOnBody": true
              }'&gt;
            &lt;div class="list-group-item"&gt;Item 1&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 2&lt;/div&gt;
            &lt;div class="list-group-item"&gt;
              &lt;h4 class="h5"&gt;Item 3&lt;/h4&gt;

              &lt;div class="js-sortable list-group"
                   data-nue-sortable-options='{
                     "animation": 150,
                     "group": "listGroup5"
                   }'&gt;
                &lt;div class="list-group-item"&gt;Item 3.1&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 3.2&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 3.3&lt;/div&gt;
                &lt;div class="list-group-item"&gt;Item 3.4&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 4&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 5&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 6&lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="multiple-drag" class="nue-docs-heading">
    Multiple Drag <a class="anchorjs-link" href="#multiple-drag" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>The MultiDrag option allows for multiple items to be dragged at a time. You can click to "select" multiple items, and then drag them as one item.</p>

  <p>Use <code>"multiDrag": true</code></p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-sortable list-group" data-nue-sortable-options='{
             "animation": 150,
             "multiDrag": true,
             "selectedClass": "active"
           }'>
        <div class="list-group-item">Item 1</div>
        <div class="list-group-item">Item 2</div>
        <div class="list-group-item">Item 3</div>
        <div class="list-group-item">Item 4</div>
        <div class="list-group-item">Item 5</div>
        <div class="list-group-item">Item 6</div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;div class="js-sortable list-group"
               data-nue-sortable-options='{
                 "animation": 150,
                 "multiDrag": true,
                 "selectedClass": "active"
               }'&gt;
            &lt;div class="list-group-item"&gt;Item 1&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 2&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 3&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 4&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 5&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 6&lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="swap" class="nue-docs-heading">
    Swap <a class="anchorjs-link" href="#swap" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>The Swap option changes the behaviour of Sortable to allow for items to be swapped with eachother rather than sorted.</p>

  <p>Use <code>"swap": true</code></p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-sortable list-group" data-nue-sortable-options='{
             "animation": 150,
             "swap": true,
             "swapClass": "active"
           }'>
        <div class="list-group-item">Item 1</div>
        <div class="list-group-item">Item 2</div>
        <div class="list-group-item">Item 3</div>
        <div class="list-group-item">Item 4</div>
        <div class="list-group-item">Item 5</div>
        <div class="list-group-item">Item 6</div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;div class="js-sortable list-group"
               data-nue-sortable-options='{
                 "animation": 150,
                 "swap": true,
                 "swapClass": "active"
               }'&gt;
            &lt;div class="list-group-item"&gt;Item 1&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 2&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 3&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 4&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 5&lt;/div&gt;
            &lt;div class="list-group-item"&gt;Item 6&lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="data-href" class="nue-docs-heading">
    Links <a class="anchorjs-link" href="#data-href" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-sortable list-group">
        <a class="js-sortable list-group-item sortablejs-custom-handle" href="#">Sortable with link 1</a>
        <a class="js-sortable list-group-item sortablejs-custom-handle" href="#">Sortable with link 2</a>
        <a class="js-sortable list-group-item sortablejs-custom-handle" href="#">Sortable with link 3</a>
        <a class="js-sortable list-group-item sortablejs-custom-handle" href="#">Sortable with link 4</a>
        <a class="js-sortable list-group-item sortablejs-custom-handle" href="#">Sortable with link 5</a>
        <a class="js-sortable list-group-item sortablejs-custom-handle" href="#">Sortable with link 6</a>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Group --&gt;
          &lt;div class="js-sortable list-group"&gt;
            &lt;a class=&quot;js-sortable list-group-item sortablejs-custom-handle&quot; href=&quot;#&quot;&gt;Sortable with link 1&lt;/a&gt;
            &lt;a class=&quot;js-sortable list-group-item sortablejs-custom-handle&quot; href=&quot;#&quot;&gt;Sortable with link 2&lt;/a&gt;
            &lt;a class=&quot;js-sortable list-group-item sortablejs-custom-handle&quot; href=&quot;#&quot;&gt;Sortable with link 3&lt;/a&gt;
            &lt;a class=&quot;js-sortable list-group-item sortablejs-custom-handle&quot; href=&quot;#&quot;&gt;Sortable with link 4&lt;/a&gt;
            &lt;a class=&quot;js-sortable list-group-item sortablejs-custom-handle&quot; href=&quot;#&quot;&gt;Sortable with link 5&lt;/a&gt;
            &lt;a class=&quot;js-sortable list-group-item sortablejs-custom-handle&quot; href=&quot;#&quot;&gt;Sortable with link 6&lt;/a&gt;
          &lt;/div&gt;
          &lt;!-- End List Group --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="data-href-with-modal-example" class="nue-docs-heading">
    Data-href with modal example <a class="anchorjs-link" href="#data-href-with-modal-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-sortable list-group">
        <a class="js-sortable-modal-link list-group-item sortablejs-custom-handle" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:;">Sortable with modal link 1</a>
        <a class="js-sortable-modal-link list-group-item sortablejs-custom-handle" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:;">Sortable with modal link 2</a>
        <a class="js-sortable-modal-link list-group-item sortablejs-custom-handle" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:;">Sortable with modal link 3</a>
        <a class="js-sortable-modal-link list-group-item sortablejs-custom-handle" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:;">Sortable with modal link 4</a>
        <a class="js-sortable-modal-link list-group-item sortablejs-custom-handle" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:;">Sortable with modal link 5</a>
        <a class="js-sortable-modal-link list-group-item sortablejs-custom-handle" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:;">Sortable with modal link 6</a>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
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
          &lt;!-- List Group --&gt;
          &lt;div class=&quot;js-sortable list-group&quot;&gt;
            &lt;a class=&quot;js-sortable-modal-link list-group-item sortablejs-custom-handle&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot; href=&quot;javascript:;&quot;&gt;Sortable with modal link 1&lt;/a&gt;
            &lt;a class=&quot;js-sortable-modal-link list-group-item sortablejs-custom-handle&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot; href=&quot;javascript:;&quot;&gt;Sortable with modal link 2&lt;/a&gt;
            &lt;a class=&quot;js-sortable-modal-link list-group-item sortablejs-custom-handle&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot; href=&quot;javascript:;&quot;&gt;Sortable with modal link 3&lt;/a&gt;
            &lt;a class=&quot;js-sortable-modal-link list-group-item sortablejs-custom-handle&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot; href=&quot;javascript:;&quot;&gt;Sortable with modal link 4&lt;/a&gt;
            &lt;a class=&quot;js-sortable-modal-link list-group-item sortablejs-custom-handle&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot; href=&quot;javascript:;&quot;&gt;Sortable with modal link 5&lt;/a&gt;
            &lt;a class=&quot;js-sortable-modal-link list-group-item sortablejs-custom-handle&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot; href=&quot;javascript:;&quot;&gt;Sortable with modal link 6&lt;/a&gt;
          &lt;/div&gt;
          &lt;!-- End List Group --&gt;

          &lt;!-- Modal --&gt;
          &lt;div class=&quot;modal fade&quot; id=&quot;exampleModal&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
            &lt;div class=&quot;modal-dialog&quot;&gt;
              &lt;div class=&quot;modal-content&quot;&gt;
                &lt;div class=&quot;modal-header&quot;&gt;
                  &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLabel&quot;&gt;Modal title&lt;/h5&gt;
                  &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-body&quot;&gt;
                  ...
                &lt;/div&gt;
                &lt;div class=&quot;modal-footer&quot;&gt;
                  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
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

  <div class="card overflow-hidden">
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
            <td>
              <p><code>ghostClass</code></p>
            </td>
            <td>Class when draging.</td>
            <td><code>sortable-chosen-main</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection