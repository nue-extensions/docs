@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Devices')

@section('content')
  <x-nue::docs::header>
    Devices
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="d-flex justify-content-center">
        <figure class="device-browser">
          <div class="device-browser-header">
            <div class="device-browser-header-btn-list">
              <span class="device-browser-header-btn-list-btn"></span>
              <span class="device-browser-header-btn-list-btn"></span>
              <span class="device-browser-header-btn-list-btn"></span>
            </div>
            <div class="device-browser-header-browser-bar">https://nue.btekno.id/</div>
          </div>

          <div class="device-browser-frame">
            <img class="device-browser-img" src="https://raw.githubusercontent.com/novay/imagehost/master/nue-package.png" alt="">
          </div>
        </figure>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Browser Device --&gt;
          &lt;figure class="device-browser"&gt;
            &lt;div class="device-browser-header"&gt;
              &lt;div class="device-browser-header-btn-list"&gt;
                &lt;span class="device-browser-header-btn-list-btn"&gt;&lt;/span&gt;
                &lt;span class="device-browser-header-btn-list-btn"&gt;&lt;/span&gt;
                &lt;span class="device-browser-header-btn-list-btn"&gt;&lt;/span&gt;
              &lt;/div&gt;
              &lt;div class="device-browser-header-browser-bar"&gt;https://nue.btekno.id/&lt;/div&gt;
            &lt;/div&gt;
            
            &lt;div class="device-browser-frame"&gt;
              &lt;img class="device-browser-img" src="..." alt=""&gt;
            &lt;/div&gt;
          &lt;/figure&gt;
          &lt;!-- End Browser Device --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Pakai <code>.device-browser-lg</code> biar agak gedean.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="d-flex justify-content-center">
        <figure class="device-browser device-browser-lg">
          <div class="device-browser-header">
            <div class="device-browser-header-btn-list">
              <span class="device-browser-header-btn-list-btn"></span>
              <span class="device-browser-header-btn-list-btn"></span>
              <span class="device-browser-header-btn-list-btn"></span>
            </div>
            <div class="device-browser-header-browser-bar">https://nue.btekno.id/</div>
          </div>

          <div class="device-browser-frame">
            <img class="device-browser-img" src="https://raw.githubusercontent.com/novay/imagehost/master/nue-package.png" alt="">
          </div>
        </figure>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Browser Device --&gt;
          &lt;figure class="device-browser device-browser-lg"&gt;
            &lt;div class="device-browser-header"&gt;
              &lt;div class="device-browser-header-btn-list"&gt;
                &lt;span class="device-browser-header-btn-list-btn"&gt;&lt;/span&gt;
                &lt;span class="device-browser-header-btn-list-btn"&gt;&lt;/span&gt;
                &lt;span class="device-browser-header-btn-list-btn"&gt;&lt;/span&gt;
              &lt;/div&gt;
              &lt;div class="device-browser-header-browser-bar"&gt;https://nue.btekno.id/&lt;/div&gt;
            &lt;/div&gt;
            
            &lt;div class="device-browser-frame"&gt;
              &lt;img class="device-browser-img" src="..." alt=""&gt;
            &lt;/div&gt;
          &lt;/figure&gt;
          &lt;!-- End Browser Device --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection