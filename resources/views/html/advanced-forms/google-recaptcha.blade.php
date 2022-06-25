@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Google reCAPTCHA')

@section('js')
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
  <script>
    // INITIALIZATION OF GOOGLE RECAPTCHA
    // =======================================================
    var verifyCallback = function (response) {
      alert('Success!')
    }

    var onloadCallback = function () {
      grecaptcha.render('googleReCaptchaBasicEg', {
        'sitekey': '6Lcnj5ggAAAAAPRqP7hsileOoLFJXbfU4PT4mSGF',
        'theme': 'light'
      })

      grecaptcha.render('googleReCaptchaDarkTheme', {
        'sitekey': '6Lcnj5ggAAAAAPRqP7hsileOoLFJXbfU4PT4mSGF',
        'theme': 'dark'
      })

      grecaptcha.render('googleReCaptchaCallbackFunction', {
        'sitekey': '6Lcnj5ggAAAAAPRqP7hsileOoLFJXbfU4PT4mSGF',
        'callback': verifyCallback,
        'theme': 'light'
      })

      grecaptcha.render('googleReCaptchaModal', {
        'sitekey': '6Lcnj5ggAAAAAPRqP7hsileOoLFJXbfU4PT4mSGF',
        'theme': 'light'
      })
    }
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Google reCAPTCHA
    <x-slot:link>https://developers.google.com/recaptcha/intro</x-slot:link>
    <x-slot:label>Dokumentasi reCAPTCHA</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>
  <ol>
    <li>
      Masuk ke halaman <a href="http://www.google.com/recaptcha/admin" rel="noopener" target="_blank">Google reCAPTCHA</a>. 
      Bila kamu gak punya akun Google, buat dulu, terus balik ke <a href="http://www.google.com/recaptcha/admin" rel="noopener" target="_blank">halaman reCAPTCHA</a>.
    </li>
    <li>
      <a href="https://www.google.com/recaptcha/admin/create" target="_blank">Daftarkan</a> websitemu buat dapetin <b>Key</b>-nya.
    </li>
    <li>Kolom Label, isi terserah.</li>
    <li>Kemudian, pilih <b>reCAPTCHA v2</b> dan biarkan tetap <b>"I'm not a robot" Checkbox</b></li>
    <li>Untuk kolom Domain, masukkan nama domain yang bakal kamu online-kan. Kalau masih di lokal, kamu bisa masukin juga <code>127.0.0.1</code> atau <code>localhost</code> menggunakan icon tambah disana.</li>
    <li>Ceklis <b>Accept the reCAPTCHA Terms of Service</b> lalu Submit.</li>
    <li>Kamu bakal dikasih <b>Site key</b> dan <b>Secret key</b>-nya untuk digunain.</li>
  </ol>

  <br/>
  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code></p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"&gt;&lt;/script&gt;
      &lt;script&gt;
        // INITIALIZATION OF GOOGLE RECAPTCHA
        // =======================================================
        var onloadCallback = function() {
          grecaptcha.render('element (ID)', {
            'sitekey' : 'SITE_KEY',
            'theme' : 'light'
          });
        };
      &lt;/script&gt;
    </code>
  </pre>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div id="googleReCaptchaBasicEg"></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div id="googleReCaptchaBasicEg"&gt;&lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dark-theme" class="nue-docs-heading">
    Tema Gelap <a class="anchorjs-link" href="#dark-theme" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Tambahin <code>'theme': 'dark'</code></p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div id="googleReCaptchaDarkTheme"></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div id="googleReCaptchaDarkTheme"&gt;&lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="callback-function" class="nue-docs-heading">
    Fungsi Callback <a class="anchorjs-link" href="#callback-function" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Tambahin <code>'callback': verifyCallback (function)</code>.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div id="googleReCaptchaCallbackFunction"></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div id="googleReCaptchaCallbackFunction"&gt;&lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            // INITIALIZATION OF GOOGLE RECAPTCHA
            // =======================================================
            var verifyCallback = function(response) {
              alert('Success!');
            };

            var onloadCallback = function() {
              grecaptcha.render('example1', {
                'sitekey' : 'SITE_KEY',
                'theme' : 'light',
                'callback' : verifyCallback
              });
            };
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="modal-example" class="nue-docs-heading">
    Pakai Modal <a class="anchorjs-link" href="#modal-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Buka
      </button>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Google reCAPTCHA</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
              <div id="googleReCaptchaModal"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary">Simpan</button>
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
                  &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Google reCAPTCHA&lt;/h5&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="modal-body"&gt;
                  &lt;div id="googleReCaptchaModal"&gt;&lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="modal-footer"&gt;
                  &lt;button type="button" class="btn btn-secondary" data-bs-dismiss="modal"&gt;Tutup&lt;/button&gt;
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

@endsection
