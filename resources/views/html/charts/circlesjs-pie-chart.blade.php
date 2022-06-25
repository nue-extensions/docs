@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Circle.JS (Pie Chart)')

@section('js')
  <script>
    (function() {
      // INITIALIZATION OF CIRCLES
      // =======================================================
      setTimeout(() => {
        document.querySelectorAll('.js-circle').forEach(item => {
          Nue.components.NueCircles.init(item)
        })

        Nue.components.NueCircles.init(document.getElementById('theme-adaptive-circle'), {
          value: 54,
          maxValue: 100,
          duration: 2000,
          isViewportInit: true,
          colors: NueThemeAppearance.getAppearance() === 'dark' ? ['rgba(213,219,229,0.1)', '#c9cfd7'] : ['rgba(30, 32, 34, 0.1)', '#1e2022'],
          radius: 50,
          width: 4,
          additionalText: '',
          textFontSize: 26,
          textClass: 'circles-chart-content',
          textColor: NueThemeAppearance.getAppearance() === 'dark' ? '#c9cfd7' : '#1e2022'
        })
      })
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Circles (Pie chart)
    <x-slot:description>A lightweight JavaScript library that generates circular graphs in SVG.</x-slot:description>
    <x-slot:link>https://www.lugolabs.com/circles</x-slot:link>
    <x-slot:label>Dokumentasi Circles</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code></p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF CIRCLES
          // =======================================================
          setTimeout(() => {
            document.querySelectorAll('.js-circle').forEach(item => {
              Nue.components.NueCircles.init(item)
            })
          })
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div id="theme-adaptive-circle"></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(30, 32, 34, 0.1)", "#1e2022"],
                 "radius": 50,
                 "width": 4,
                 "additionalText": "",
                 "textFontSize": 26,
                 "textClass": "circles-chart-content",
                 "textColor": "#1e2022"
               }'&gt;&lt;/div&gt;
          &lt;!-- End Circle --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="text-class" class="nue-docs-heading">
    Text class <a class="anchorjs-link" href="#text-class" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>"secondaryText": ""</code> to add a secondary text.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-circle" data-nue-circles-options='{
             "value": 10,
             "maxValue": 100,
             "duration": 2000,
             "isViewportInit": true,
             "fgStrokeLinecap": "round",
             "fgStrokeMiterlimit": "10",
             "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
             "radius": 50,
             "width": 6,
             "additionalText": "",
             "textClass": "circles-chart-content",
             "textColor": "#377dff",
             "textFontSize": 32,
             "secondaryText": "some text",
             "secondaryTextColor": "#77838f",
             "secondaryTextFontSize": "13",
             "secondaryTextFontWeight": "400",
             "dividerSpace": "10"
           }'></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 10,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "fgStrokeLinecap": "round",
                 "fgStrokeMiterlimit": "10",
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 50,
                 "width": 6,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff",
                 "textFontSize": 32,
                 "secondaryText": "some text",
                 "secondaryTextColor": "#77838f",
                 "secondaryTextFontSize": "13",
                 "secondaryTextFontWeight": "400",
                 "dividerSpace": "10"
               }'&gt;&lt;/div&gt;
          &lt;!-- End Circle --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="colors" class="nue-docs-heading">
    Colors <a class="anchorjs-link" href="#colors" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>An array of colors. Add any color code <code>"colors": ["rgba(55, 125, 255, 0.1)", "#377dff"]</code> to change the appearance of a circle.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 50,
               "width": 4,
               "additionalText": "",
               "textFontSize": 26,
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(0, 201, 167, 0.1)", "#00c9a7"],
               "radius": 50,
               "width": 4,
               "additionalText": "",
               "textFontSize": 26,
               "textClass": "circles-chart-content",
               "textColor": "#00c9a7"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(0, 223, 252, 0.1)", "#00dffc"],
               "radius": 50,
               "width": 4,
               "additionalText": "",
               "textFontSize": 26,
               "textClass": "circles-chart-content",
               "textColor": "#00dffc"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(255, 193, 7, 0.1)", "#ffc107"],
               "radius": 50,
               "width": 4,
               "additionalText": "",
               "textFontSize": 26,
               "textClass": "circles-chart-content",
               "textColor": "#ffc107"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(222, 68, 55, 0.1)", "#de4437"],
               "radius": 50,
               "width": 4,
               "additionalText": "",
               "textFontSize": 26,
               "textClass": "circles-chart-content",
               "textColor": "#de4437"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(30, 32, 34, 0.1)", "#1e2022"],
               "radius": 50,
               "width": 4,
               "additionalText": "",
               "textFontSize": 26,
               "textClass": "circles-chart-content",
               "textColor": "#1e2022"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(119, 131, 143, 0.1)", "#77838f"],
               "radius": 50,
               "width": 4,
               "additionalText": "",
               "textFontSize": 26,
               "textClass": "circles-chart-content",
               "textColor": "#77838f"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(255, 255, 255, 0.1)", "#ffffff"],
               "radius": 50,
               "width": 4,
               "additionalText": "",
               "textFontSize": 26,
               "textClass": "circles-chart-content",
               "textColor": "#ffffff"
             }'></div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 50,
                 "width": 4,
                 "additionalText": "",
                 "textFontSize": 26,
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(0, 201, 167, 0.1)", "#00c9a7"],
                 "radius": 50,
                 "width": 4,
                 "additionalText": "",
                 "textFontSize": 26,
                 "textClass": "circles-chart-content",
                 "textColor": "#00c9a7"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(0, 223, 252, 0.1)", "#00dffc"],
                 "radius": 50,
                 "width": 4,
                 "additionalText": "",
                 "textFontSize": 26,
                 "textClass": "circles-chart-content",
                 "textColor": "#00dffc"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(255, 193, 7, 0.1)", "#ffc107"],
                 "radius": 50,
                 "width": 4,
                 "additionalText": "",
                 "textFontSize": 26,
                 "textClass": "circles-chart-content",
                 "textColor": "#ffc107"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(222, 68, 55, 0.1)", "#de4437"],
                 "radius": 50,
                 "width": 4,
                 "additionalText": "",
                 "textFontSize": 26,
                 "textClass": "circles-chart-content",
                 "textColor": "#de4437"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(30, 32, 34, 0.1)", "#1e2022"],
                 "radius": 50,
                 "width": 4,
                 "additionalText": "",
                 "textFontSize": 26,
                 "textClass": "circles-chart-content",
                 "textColor": "#1e2022"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(119, 131, 143, 0.1)", "#77838f"],
                 "radius": 50,
                 "width": 4,
                 "additionalText": "",
                 "textFontSize": 26,
                 "textClass": "circles-chart-content",
                 "textColor": "#77838f"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(255, 255, 255, 0.1)", "#ffffff"],
                 "radius": 50,
                 "width": 4,
                 "additionalText": "",
                 "textFontSize": 26,
                 "textClass": "circles-chart-content",
                 "textColor": "#ffffff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="size" class="nue-docs-heading">
    Size <a class="anchorjs-link" href="#size" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Fancy larger or smaller circles? Control them with <code>"radius":</code></p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row align-items-center">
        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 80,
               "width": 4,
               "textFontSize": 40,
               "textFontWeight": 700,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 60,
               "width": 4,
               "textFontSize": 28,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 40,
               "width": 4,
               "textFontSize": 22,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 30,
               "width": 4,
               "textFontSize": 16,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 80,
                 "width": 4,
                 "textFontSize": 40,
                 "textFontWeight": 700,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
          &lt;!-- End Circle --&gt;

          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 60,
                 "width": 4,
                 "textFontSize": 28,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
          &lt;!-- End Circle --&gt;

          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 40,
                 "width": 4,
                 "textFontSize": 22,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
          &lt;!-- End Circle --&gt;

          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 30,
                 "width": 4,
                 "textFontSize": 16,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
          &lt;!-- End Circle --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="stroke-width" class="nue-docs-heading">
    Stroke width <a class="anchorjs-link" href="#stroke-width" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Adjusted with of a ring with <code>"width":</code></p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row align-items-center">
        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 50,
               "width": 1,
               "textFontSize": 22,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 50,
               "width": 3,
               "textFontSize": 22,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 50,
               "width": 6,
               "textFontSize": 22,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 50,
               "width": 10,
               "textFontSize": 22,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 50,
               "width": 16,
               "textFontSize": 22,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 50,
                 "width": 1,
                 "textFontSize": 22,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 50,
                 "width": 3,
                 "textFontSize": 22,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 50,
                 "width": 6,
                 "textFontSize": 22,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 50,
                 "width": 10,
                 "textFontSize": 22,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 50,
                 "width": 16,
                 "textFontSize": 22,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="stroke-linecap" class="nue-docs-heading">
    Stroke linecap <a class="anchorjs-link" href="#stroke-linecap" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>The <code>stroke-linecap</code> attribute is a presentation attribute defining the shape to be used at the end of open subpaths when they are stroked.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row align-items-center">
        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 60,
               "width": 6,
               "textFontSize": 22,
               "fgStrokeLinecap": "square",
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 60,
               "width": 6,
               "textFontSize": 22,
               "fgStrokeLinecap": "round",
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 60,
                 "width": 6,
                 "textFontSize": 22,
                 "fgStrokeLinecap": "square",
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 60,
                 "width": 6,
                 "textFontSize": 22,
                 "fgStrokeLinecap": "round",
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="max-value" class="nue-docs-heading">
    Max value <a class="anchorjs-link" href="#max-value" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Returns the max value of a circle.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row align-items-center">
        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 17,
               "maxValue": 25,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 60,
               "width": 6,
               "textFontSize": 22,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 29,
               "maxValue": 50,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 60,
               "width": 6,
               "textFontSize": 22,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 17,
                 "maxValue": 25,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 60,
                 "width": 6,
                 "textFontSize": 22,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 29,
                 "maxValue": 50,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 60,
                 "width": 6,
                 "textFontSize": 22,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="type" class="nue-docs-heading">
    Type <a class="anchorjs-link" href="#type" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Any unit measurements or icons can be used to demonstrate the stats. Use <code>"type": ""</code> to show texts or numbers, or use <code>"type": "iconic", "icon": "&lt;i class=\"far fa-bell\"&gt;&lt;/i&gt;",</code> for icons.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row align-items-center">
        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 60,
               "width": 6,
               "textFontSize": 22,
               "type": "iconic",
               "icon": "<i class=\"bi-bell\"></i>",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 60,
               "width": 6,
               "textFontSize": 22,
               "additionalText": "%",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 60,
               "width": 6,
               "textFontSize": 22,
               "additionalText": "k",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 60,
                 "width": 6,
                 "textFontSize": 22,
                 "type": "iconic",
                 "icon": "&lt;i class=\"tio-notifications-on-outlined\"&gt;&lt;/i&gt;",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 60,
                 "width": 6,
                 "textFontSize": 22,
                 "additionalText": "%",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 60,
                 "width": 6,
                 "textFontSize": 22,
                 "additionalText": "k",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="animation-speed" class="nue-docs-heading">
    Animation speed <a class="anchorjs-link" href="#animation-speed" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Value in <code>ms</code> of animation's duration. For example, <code>"duration": 500</code></p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row align-items-center">
        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 500,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 60,
               "width": 6,
               "textFontSize": 22,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 60,
               "width": 6,
               "textFontSize": 22,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 54,
               "maxValue": 100,
               "duration": 5000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 60,
               "width": 6,
               "textFontSize": 22,
               "additionalText": "",
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 500,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 60,
                 "width": 6,
                 "textFontSize": 22,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 60,
                 "width": 6,
                 "textFontSize": 22,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 54,
                 "maxValue": 100,
                 "duration": 5000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 60,
                 "width": 6,
                 "textFontSize": 22,
                 "additionalText": "",
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="additional-text" class="nue-docs-heading">
    Additional text <a class="anchorjs-link" href="#additional-text" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Additional texts are useful to describe/highlight the main values and they can be added to the value either after, like this:</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-circle" data-nue-circles-options='{
             "value": 25,
             "maxValue": 100,
             "duration": 2000,
             "isViewportInit": true,
             "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
             "radius": 80,
             "width": 6,
             "fgStrokeLinecap": "round",
             "additionalText": " Top",
             "textFontSize": 24,
             "textClass": "circles-chart-content",
             "textColor": "#377dff"
           }'></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 25,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 80,
                 "width": 6,
                 "fgStrokeLinecap": "round",
                 "additionalText": " Top",
                 "textFontSize": 24,
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Or before the value, like this: <code>"additionalTextType": "prefix"</code> should be added to put the additional text before the value.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-circle" data-nue-circles-options='{
             "value": 70,
             "maxValue": 100,
             "duration": 2000,
             "isViewportInit": true,
             "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
             "radius": 80,
             "width": 6,
             "fgStrokeLinecap": "round",
             "additionalText": " Top ",
             "additionalTextType": "prefix",
             "textFontSize": 24,
             "textClass": "circles-chart-content",
             "textColor": "#377dff"
           }'></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 70,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 80,
                 "width": 6,
                 "fgStrokeLinecap": "round",
                 "additionalText": " Top ",
                 "additionalTextType": "prefix",
                 "textFontSize": 24,
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Control additional text size with <code>"textFontSize":</code></p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 10,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 80,
               "width": 6,
               "fgStrokeLinecap": "round",
               "additionalText": " Top ",
               "additionalTextType": "prefix",
               "textFontSize": 10,
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 10,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 80,
               "width": 6,
               "fgStrokeLinecap": "round",
               "additionalText": " Top ",
               "additionalTextType": "prefix",
               "textFontSize": 16,
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 10,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 80,
               "width": 6,
               "fgStrokeLinecap": "round",
               "additionalText": " Top ",
               "additionalTextType": "prefix",
               "textFontSize": 22,
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>

        <div class="js-circle col-auto mb-3" data-nue-circles-options='{
               "value": 10,
               "maxValue": 100,
               "duration": 2000,
               "isViewportInit": true,
               "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
               "radius": 80,
               "width": 6,
               "fgStrokeLinecap": "round",
               "additionalText": " Top ",
               "additionalTextType": "prefix",
               "textFontSize": 32,
               "textClass": "circles-chart-content",
               "textColor": "#377dff"
             }'></div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 10,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 80,
                 "width": 6,
                 "fgStrokeLinecap": "round",
                 "additionalText": " Top ",
                 "additionalTextType": "prefix",
                 "textFontSize": 10,
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 10,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 80,
                 "width": 6,
                 "fgStrokeLinecap": "round",
                 "additionalText": " Top ",
                 "additionalTextType": "prefix",
                 "textFontSize": 16,
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 10,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 80,
                 "width": 6,
                 "fgStrokeLinecap": "round",
                 "additionalText": " Top ",
                 "additionalTextType": "prefix",
                 "textFontSize": 22,
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;

            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 10,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 80,
                 "width": 6,
                 "fgStrokeLinecap": "round",
                 "additionalText": " Top ",
                 "additionalTextType": "prefix",
                 "textFontSize": 32,
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Control text font weight with <code>"textFontWeight":</code></p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">

        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <div class="card">
    <div class="card-header">
      <ul class="nav nav-segment" id="navTab13" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="nav-resultTab13" data-bs-toggle="pill" href="#nav-result13" role="tab" aria-controls="nav-result13" aria-selected="true">Preview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="nav-htmlTab13" data-bs-toggle="pill" href="#nav-html13" role="tab" aria-controls="nav-html13" aria-selected="false">HTML</a>
        </li>
      </ul>
    </div>

    <div class="tab-content" id="navTabContent13">
      <div class="tab-pane fade p-4 show active" id="nav-result13" role="tabpanel" aria-labelledby="nav-resultTab13">
        <div class="row">
          <div class="js-circle col-auto mb-3" data-nue-circles-options='{
                 "value": 10,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 80,
                 "width": 6,
                 "fgStrokeLinecap": "round",
                 "additionalText": " Top ",
                 "additionalTextType": "prefix",
                 "textFontSize": 32,
                 "textFontWeight": 400,
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'></div>

          <div class="js-circle col-auto mb-3" data-nue-circles-options='{
                 "value": 10,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 80,
                 "width": 6,
                 "fgStrokeLinecap": "round",
                 "additionalText": " Top ",
                 "additionalTextType": "prefix",
                 "textFontSize": 32,
                 "textFontWeight": 600,
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'></div>
        </div>
      </div>

      <div class="tab-pane fade" id="nav-html13" role="tabpanel" aria-labelledby="nav-htmlTab13">
        <pre>
          <code class="language-markup" data-lang="html">
            &lt;!-- Circle --&gt;
            &lt;div class="js-circle"
                 data-nue-circles-options='{
                   "value": 10,
                   "maxValue": 100,
                   "duration": 2000,
                   "isViewportInit": true,
                   "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                   "radius": 80,
                   "width": 6,
                   "fgStrokeLinecap": "round",
                   "additionalText": " Top ",
                   "additionalTextType": "prefix",
                   "textFontSize": 32,
                   "textFontWeight": 400,
                   "textClass": "circles-chart-content",
                   "textColor": "#377dff"
                 }'&gt;&lt;/div&gt;
              &lt;!-- End Circle --&gt;

              &lt;!-- Circle --&gt;
              &lt;div class="js-circle"
                 data-nue-circles-options='{
                   "value": 10,
                   "maxValue": 100,
                   "duration": 2000,
                   "isViewportInit": true,
                   "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                   "radius": 80,
                   "width": 6,
                   "fgStrokeLinecap": "round",
                   "additionalText": " Top ",
                   "additionalTextType": "prefix",
                   "textFontSize": 32,
                   "textFontWeight": 600,
                   "textClass": "circles-chart-content",
                   "textColor": "#377dff"
                 }'&gt;&lt;/div&gt;
              &lt;!-- End Circle --&gt;
          </code>
        </pre>
      </div>
    </div>
  </div>

  <h2 id="hide-value" class="nue-docs-heading">
    Hide value <a class="anchorjs-link" href="#hide-value" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Hide the value of a circle to make the additional text main value via <code>"isHideValue": true</code></p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-circle col-auto mb-3" data-nue-circles-options='{
             "value": 10,
             "maxValue": 100,
             "duration": 2000,
             "isViewportInit": true,
             "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
             "radius": 80,
             "width": 6,
             "fgStrokeLinecap": "round",
             "isHideValue": true,
             "additionalText": "Tripling",
             "additionalTextType": "prefix",
             "textFontSize": 22,
             "textFontWeight": 300,
             "textClass": "circles-chart-content",
             "textColor": "#377dff"
           }'></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Circle --&gt;
          &lt;div class="js-circle"
               data-nue-circles-options='{
                 "value": 10,
                 "maxValue": 100,
                 "duration": 2000,
                 "isViewportInit": true,
                 "colors": ["rgba(55, 125, 255, 0.1)", "#377dff"],
                 "radius": 80,
                 "width": 6,
                 "fgStrokeLinecap": "round",
                 "isHideValue": true,
                 "additionalText": "Tripling",
                 "additionalTextType": "prefix",
                 "textFontSize": 22,
                 "textFontWeight": 300,
                 "textClass": "circles-chart-content",
                 "textColor": "#377dff"
               }'&gt;&lt;/div&gt;
            &lt;!-- End Circle --&gt;
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
              <p><code>radius</code></p>
            </td>
            <td>The radius of the circles.</td>
            <td><code>80</code></td>
          </tr>

          <tr>
            <td>
              <p><code>duration</code></p>
            </td>
            <td>Value in <code>ms</code> of animation's duration; defaults to 500; if 0 or null is passed, the animation will not run.</td>
            <td><code>1000</code></td>
          </tr>

          <tr>
            <td>
              <p><code>wrpClass</code></p>
            </td>
            <td>Class name to apply on the generated element wrapping the whole circle.</td>
            <td><code>'circles-wrap'</code></td>
          </tr>

          <tr>
            <td>
              <p><code>colors</code></p>
            </td>
            <td>An array of colors, with the first item coloring the full circle (optional, it will be ['#EEE', '#F00'] if not specified).</td>
            <td><code>["#377dff", "#e7eaf3"]</code></td>
          </tr>

          <tr>
            <td>
              <p><code>isHideValue</code></p>
            </td>
            <td>Hides the animated value of the graph.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td>
              <p><code>dividerSpace</code></p>
            </td>
            <td>Distance between main and secondary texts.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>fgStrokeLinecap</code></p>
            </td>
            <td>
              The stroke-linecap attribute is a presentation attribute defining the shape to be used at the end of open subpaths when they are stroked. Available values:
              <ul>
                <li><code>square</code></li>
                <li><code>round</code></li>
                <li><code>butt</code></li>
              </ul>
            </td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>fgStrokeMiterlimit</code></p>
            </td>
            <td>The <code>stroke-miterlimit</code> attribute is a presentation attribute defining a limit on the ratio of the miter length to the <a class="https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/stroke-width">stroke-width</a> used to draw a miter join. When the limit is exceeded, the join is converted from a miter to a bevel.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>additionalTextType</code></p>
            </td>
            <td><code>additionalTextType</code> - if the value is "prefix", then the value of the <code>additionalText</code> parameter will be displayed before the numerical value of the chart, otherwise after that.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>additionalText</code></p>
            </td>
            <td>Postfix/prefix that is added to the numeric value of the graph.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>textFontSize</code></p>
            </td>
            <td>Font size of the numerical value of the graph.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>textFontWeight</code></p>
            </td>
            <td>Font weight of the numerical value of the graph.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>textColor</code></p>
            </td>
            <td>Graph numerical color.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>secondaryText</code></p>
            </td>
            <td>Text helper displayed below the numerical value of the graph.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>secondaryTextFontWeight</code></p>
            </td>
            <td>Font weight of the text helper.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>secondaryTextFontSize</code></p>
            </td>
            <td>Font size of the text helper.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>secondaryTextColor</code></p>
            </td>
            <td>Color of the text helper.</td>
            <td><code>null</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection