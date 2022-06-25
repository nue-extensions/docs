@php($i = 0)
@extends('nue-docs::app')
@section('title', 'JSVectorMap')

@section('js')
  <script>
    (function() {
     
      // INITIALIZATION OF VECTOR MAP
      // =======================================================
      const markers = [
        {
          "coords": [38, -97],
          "name": "United States",
          "active": 200,
          "new": 40,
          "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/us.svg",
          "code": "US"
        },
        {
          "coords": [20, 77],
          "name": "India",
          "active": 300,
          "new": 100,
          "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/in.svg",
          "code": "IN"
        },
        {
          "coords": [60, -105],
          "name": "Canada",
          "active": 400,
          "new": 500,
          "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/ca.svg",
          "code": "CA"
        },
        {
          "coords": [51, 9],
          "name": "Germany",
          "active": 120,
          "new": 600,
          "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/de.svg",
          "code": "DE"
        },
        {
          "coords": [54, -2],
          "name": "United Kingdom",
          "active": 140,
          "new": 100,
          "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/gb.svg",
          "code": "GB"
        },
        {
          "coords": [1.3, 103.8],
          "name": "Singapore",
          "active": 56,
          "new": 0,
          "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/sg.svg",
          "code": "SG"
        },
        {
          "coords": [9.0, 8.6],
          "name": "Nigeria",
          "active": 34,
          "new": 2,
          "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/ng.svg",
          "code": "NG"
        },
        {
          "coords": [61.5, 105.3],
          "name": "Russia",
          "active": 135,
          "new": 46,
          "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/ru.svg",
          "code": "RU"
        },
        {
          "coords": [35.8, 104.1],
          "name": "China",
          "active": 325,
          "new": 75,
          "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/cn.svg",
          "code": "CN"
        },
        {
          "coords": [-10, -51],
          "name": "Brazil",
          "active": 242,
          "new": 17,
          "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/br.svg",
          "code": "BR"
        }
      ];
      const tooltipTemplate = function(marker) {
        return `
          <span class="d-flex align-items-center mb-2">
            <img class="avatar avatar-xss avatar-circle" src="${marker.flag}" alt="Flag">
            <span class="h5 ms-2 mb-0">${marker.name}</span>
          </span>
          <div class="d-flex justify-content-between" style="max-width: 10rem;">
            <strong>Active:</strong>
            <span class="ms-2">${marker.active}</span>
          </div>
          <div class="d-flex justify-content-between" style="max-width: 10rem;">
            <strong>New:</strong>
            <span class="ms-2">${marker.new}</span>
          </div>
        `;
      };

      Nue.components.NueJsVectorMap.init('.js-jsvectormap', {
        backgroundColor: NueThemeAppearance.getAppearance() === 'dark' ? '#25282a' : '#132144',
        markers,
        onRegionTooltipShow(tooltip, code) {
          let marker = markers.find(function (marker) {
            return marker.code === code;
          });

          if (marker) {
            tooltip.selector.innerHTML = tooltipTemplate(marker);
          } else {
            tooltip.selector.style.display = 'none';
          }
        },
        onMarkerTooltipShow: function(tooltip, code){
          tooltip.selector.innerHTML = tooltipTemplate(markers[code]);
        },
      });
    })()
  </script>
@endsection


@section('content')
  <x-nue::docs::header>
    Maps (JSVectorMap)
    <x-slot:description>A lightweight JavaScript library for creating interactive maps and pretty data visualization.</x-slot:description>
    <x-slot:link>https://themustafaomar.com/open-source/jsvectormap/</x-slot:link>
    <x-slot:label>Dokumentasi JSVectorMap</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    How to use <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF VECTOR MAP
          // =======================================================
          Nue.components.NueJsVectorMap.init('.js-jsvectormap')
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="height: 20.5rem;">
        <div class="js-jsvectormap jsvectormap-custom" data-nue-js-vector-map-options='{
              "regionStyle": {
                "initial": {
                  "fill": "#bdc5d1"
                },
                "hover": {
                  "fill": "#77838f"
                }
              },
              "backgroundColor": "#fff",
              "markerStyle": {
                "initial": {
                  "stroke-width": 2,
                  "fill": "#377dff",
                  "stroke": "#fff",
                  "stroke-opacity": 1,
                  "r": 6
                },
                "hover": {
                  "fill": "#377dff",
                  "stroke": "#377dff"
                }
              }
            }'>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- JSVector Map --&gt;
          &lt;div style="height: 20.5rem;"&gt;
            &lt;div class="js-jsvectormap jsvectormap-custom"
                data-nue-js-vector-map-options='{
                  "regionStyle": {
                    "initial": {
                      "fill": "#bdc5d1"
                    },
                    "hover": {
                      "fill": "#77838f"
                    }
                  },
                  "backgroundColor": "#fff",
                  "markerStyle": {
                    "initial": {
                      "stroke-width": 2,
                      "fill": "#377dff",
                      "stroke": "#fff",
                      "stroke-opacity": 1,
                      "r": 6
                    },
                    "hover": {
                      "fill": "#377dff",
                      "stroke": "#377dff"
                    }
                  }
                }'&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End JSVector Map --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="custom-with-tags" class="nue-docs-heading">
    Custom with tags <a class="anchorjs-link" href="#custom-with-tags" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div style="height: 30rem;">
        <div class="js-jsvectormap jsvectormap-custom" data-nue-js-vector-map-options='{
                "focusOn": {
                  "coords": [25, 12],
                  "scale": 1.5,
                  "animate": true
                },
                "regionStyle": {
                  "initial": {
                    "fill": "rgba(55, 125, 255, .3)"
                  },
                  "hover": {
                    "fill": "#377dff"
                  }
                },
                "backgroundColor": "#132144",
                "markerStyle": {
                  "initial": {
                    "stroke-width": 2,
                    "fill": "rgba(255,255,255,.5)",
                    "stroke": "rgba(255,255,255,.5)",
                    "r": 6
                  },
                  "hover": {
                    "fill": "#fff",
                    "stroke": "#fff"
                  }
                }
              }'>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Vector Map --&gt;
          &lt;div style="height: 30rem;"&gt;
            &lt;div class="js-jsvectormap jsvectormap-custom"
                  data-nue-js-vector-map-options='{
                    "focusOn": {
                      "coords": [25, 12],
                      "scale": 1.5,
                      "animate": true
                    },
                    "regionStyle": {
                      "initial": {
                        "fill": "rgba(55, 125, 255, .3)"
                      },
                      "hover": {
                        "fill": "#377dff"
                      }
                    },
                    "backgroundColor": "#132144",
                    "markerStyle": {
                      "initial": {
                        "stroke-width": 2,
                        "fill": "rgba(255,255,255,.5)",
                        "stroke": "rgba(255,255,255,.5)",
                        "r": 6
                      },
                      "hover": {
                        "fill": "#fff",
                        "stroke": "#fff"
                      }
                    }
                  }'&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Vector Map --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- JS Plugins Init. --&gt;
          &lt;script&gt;
            (function() {
              // INITIALIZATION OF VECTOR MAP
              // =======================================================
              const markers = [
                {
                  "coords": [38, -97],
                  "name": "United States",
                  "active": 200,
                  "new": 40,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/us.svg",
                  "code": "US"
                },
                {
                  "coords": [20, 77],
                  "name": "India",
                  "active": 300,
                  "new": 100,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/in.svg",
                  "code": "IN"
                },
                {
                  "coords": [60, -105],
                  "name": "Canada",
                  "active": 400,
                  "new": 500,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/ca.svg",
                  "code": "CA"
                },
                {
                  "coords": [51, 9],
                  "name": "Germany",
                  "active": 120,
                  "new": 600,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/de.svg",
                  "code": "DE"
                },
                {
                  "coords": [54, -2],
                  "name": "United Kingdom",
                  "active": 140,
                  "new": 100,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/gb.svg",
                  "code": "GB"
                },
                {
                  "coords": [1.3, 103.8],
                  "name": "Singapore",
                  "active": 56,
                  "new": 0,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/sg.svg",
                  "code": "SG"
                },
                {
                  "coords": [9.0, 8.6],
                  "name": "Nigeria",
                  "active": 34,
                  "new": 2,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/ng.svg",
                  "code": "NG"
                },
                {
                  "coords": [61.5, 105.3],
                  "name": "Russia",
                  "active": 135,
                  "new": 46,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/ru.svg",
                  "code": "RU"
                },
                {
                  "coords": [35.8, 104.1],
                  "name": "China",
                  "active": 325,
                  "new": 75,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/cn.svg",
                  "code": "CN"
                },
                {
                  "coords": [-10, -51],
                  "name": "Brazil",
                  "active": 242,
                  "new": 17,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/br.svg",
                  "code": "BR"
                }
              ];
              const tooltipTemplate = function(marker) {
                return `
                  &lt;span class="d-flex align-items-center mb-2"&gt;
                    &lt;img class="avatar avatar-xss avatar-circle" src="${marker.flag}" alt="Flag"&gt;
                    &lt;span class="h5 ms-2 mb-0"&gt;${marker.name}&lt;/span&gt;
                  &lt;/span&gt;
                  &lt;div class="d-flex justify-content-between" style="max-width: 10rem;"&gt;
                    &lt;strong&gt;Active:&lt;/strong&gt;
                    &lt;span class="ms-2"&gt;${marker.active}&lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="d-flex justify-content-between" style="max-width: 10rem;"&gt;
                    &lt;strong&gt;New:&lt;/strong&gt;
                    &lt;span class="ms-2"&gt;${marker.new}&lt;/span&gt;
                  &lt;/div&gt;
                `;
              };

              Nue.components.NueJsVectorMap.init('.js-jsvectormap', {
                markers,
                onRegionTooltipShow(tooltip, code) {
                  let marker = markers.find(function (marker) {
                    return marker.code === code;
                  });

                  if (marker) {
                    tooltip.selector.innerHTML = tooltipTemplate(marker);
                  } else {
                    tooltip.selector.style.display = 'none';
                  }
                },
                onMarkerTooltipShow: function(tooltip, code){
                  tooltip.selector.innerHTML = tooltipTemplate(markers[code]);
                },
              });
            })()
          &lt;/script&gt;&lt;!-- JS Plugins Init. --&gt;
          &lt;script&gt;
            (function() {
              // INITIALIZATION OF VECTOR MAP
              // =======================================================
              const markers = [
                {
                  "coords": [38, -97],
                  "name": "United States",
                  "active": 200,
                  "new": 40,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/us.svg",
                  "code": "US"
                },
                {
                  "coords": [20, 77],
                  "name": "India",
                  "active": 300,
                  "new": 100,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/in.svg",
                  "code": "IN"
                },
                {
                  "coords": [60, -105],
                  "name": "Canada",
                  "active": 400,
                  "new": 500,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/ca.svg",
                  "code": "CA"
                },
                {
                  "coords": [51, 9],
                  "name": "Germany",
                  "active": 120,
                  "new": 600,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/de.svg",
                  "code": "DE"
                },
                {
                  "coords": [54, -2],
                  "name": "United Kingdom",
                  "active": 140,
                  "new": 100,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/gb.svg",
                  "code": "GB"
                },
                {
                  "coords": [1.3, 103.8],
                  "name": "Singapore",
                  "active": 56,
                  "new": 0,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/sg.svg",
                  "code": "SG"
                },
                {
                  "coords": [9.0, 8.6],
                  "name": "Nigeria",
                  "active": 34,
                  "new": 2,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/ng.svg",
                  "code": "NG"
                },
                {
                  "coords": [61.5, 105.3],
                  "name": "Russia",
                  "active": 135,
                  "new": 46,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/ru.svg",
                  "code": "RU"
                },
                {
                  "coords": [35.8, 104.1],
                  "name": "China",
                  "active": 325,
                  "new": 75,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/cn.svg",
                  "code": "CN"
                },
                {
                  "coords": [-10, -51],
                  "name": "Brazil",
                  "active": 242,
                  "new": 17,
                  "flag": "https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/br.svg",
                  "code": "BR"
                }
              ];
              const tooltipTemplate = function(marker) {
                return `
                  &lt;span class="d-flex align-items-center mb-2"&gt;
                    &lt;img class="avatar avatar-xss avatar-circle" src="${marker.flag}" alt="Flag"&gt;
                    &lt;span class="h5 ms-2 mb-0"&gt;${marker.name}&lt;/span&gt;
                  &lt;/span&gt;
                  &lt;div class="d-flex justify-content-between" style="max-width: 10rem;"&gt;
                    &lt;strong&gt;Active:&lt;/strong&gt;
                    &lt;span class="ms-2"&gt;${marker.active}&lt;/span&gt;
                  &lt;/div&gt;
                  &lt;div class="d-flex justify-content-between" style="max-width: 10rem;"&gt;
                    &lt;strong&gt;New:&lt;/strong&gt;
                    &lt;span class="ms-2"&gt;${marker.new}&lt;/span&gt;
                  &lt;/div&gt;
                `;
              };

              Nue.components.NueJsVectorMap.init('.js-jsvectormap', {
                markers,
                onRegionTooltipShow(tooltip, code) {
                  let marker = markers.find(function (marker) {
                    return marker.code === code;
                  });

                  if (marker) {
                    tooltip.selector.innerHTML = tooltipTemplate(marker);
                  } else {
                    tooltip.selector.style.display = 'none';
                  }
                },
                onMarkerTooltipShow: function(tooltip, code){
                  tooltip.selector.innerHTML = tooltipTemplate(markers[code]);
                },
              });
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

@endsection