@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Leaflet')

@section('js')
  <script>
    (function() {
      // INITIALIZATION OF LEAFLET
      // =======================================================
      const leaflet = Nue.components.NueLeaflet.init(document.getElementById('map'))

      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        id: 'mapbox/light-v9'
      }).addTo(leaflet)
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Maps (Leaflet)
    <x-slot:description>Mobile-friendly interactive map library.</x-slot:description>
    <x-slot:link>https://leafletjs.com/</x-slot:link>
    <x-slot:label>Dokumentasi Leaflet</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF LEAFLET
          // =======================================================
          const leaflet = Nue.components.NueLeaflet.init(document.getElementById('map'))

          L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            id: 'mapbox/light-v9'
          }).addTo(leaflet)
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="container-fluid">
        <div id="map" class="leaflet" data-nue-leaflet-options='{
               "map": {
                 "scrollWheelZoom": false,
                 "coords": [37.4040344, -122.0289704]
               },
               "marker": [
                 {
                   "coords": [37.4040344, -122.0289704],
                   "icon": {
                     "iconUrl": "https://cdn.btekno.id/templates/nue/svg/components/map-pin.svg",
                     "iconSize": [50, 45]
                   },
                   "popup": {
                     "text": "153 Williamson Plaza, Maggieberg"
                   }
                 }
               ]
              }'></div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Leaflet --&gt;
          &lt;div class="container-fluid"&gt;
            &lt;div id="map" class="leaflet"
                 data-nue-leaflet-options='{
                   "map": {
                     "scrollWheelZoom": false,
                     "coords": [37.4040344, -122.0289704]
                   },
                   "marker": [
                     {
                       "coords": [37.4040344, -122.0289704],
                       "icon": {
                         "iconUrl": "https://cdn.btekno.id/templates/nue/svg/components/map-pin.svg",
                         "iconSize": [50, 45]
                       },
                       "popup": {
                         "text": "153 Williamson Plaza, Maggieberg"
                       }
                     }
                   ]
                  }'&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Leaflet --&gt;
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
              <p><code>allowTypes</code></p>
            </td>
            <td>Supported file types. If empty all supported.</td>
            <td><code>[]</code></td>
          </tr>

          <tr>
            <td>
              <p><code>maxFileSize</code></p>
            </td>
            <td>Max size for uploading file.</td>
            <td><code>1024</code></td>
          </tr>

          <tr>
            <td>
              <p><code>mode</code></p>
            </td>
            <td>Supported two mods (image/simple). image - show image after uploading. simple - show file name after uploading.</td>
            <td><code>simple</code></td>
          </tr>

          <tr>
            <td>
              <p><code>targetAttr</code></p>
            </td>
            <td>Element selector with src for <code>image</code> mode.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>textTarget</code></p>
            </td>
            <td>Element selector for <code>simple</code> mode.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>resetTarget</code></p>
            </td>
            <td>Element selector to reset form.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>errorMessage</code></p>
            </td>
            <td>Error message text if the file size is larger than the allowed.</td>
            <td><code>'File is too big!'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>typeErrorMessage</code></p>
            </td>
            <td>Error message text if file type is not supported.</td>
            <td><code>'Unsupported file type'</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection