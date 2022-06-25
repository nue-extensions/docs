@extends('nue-docs::app')
@section('title', 'Content (Layout)')

@section('content')
	<x-nue::docs::header>
    Content (Layout)
    <x-slot:description>
      Buat kamu yang ingin menggunakan UI dari Nue Package
    </x-slot:description>
  </x-nue::docs::header>

  <h2 id="blank" class="hs-docs-heading">
    Blank Layout <a class="anchorjs-link" href="#blank" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <br/>

  <p class="lead">
  	Kamu bisa menggunakan <b>Blank Layout</b> untuk bereksperimen pada halaman penuh, tanpa ada <b>header</b> dan <b>sidebar</b>.<br/>
  	Contoh penggunaan dari jenis layout ini saya gunakan pada halaman Login.
  </p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &#64;extends('layouts.blank')
			&#64;section('title', 'Your title')

			&#64;section('js')
			&#64;endsection

			&#64;section('css')
			&#64;endsection

			&#64;section('content')
			  &#123;&#123;--  Your content --&#125;&#125;
			&#64;endsection
    </code>
  </pre>

  <hr class="my-4">

  <h2 id="app" class="hs-docs-heading">
    App Layout <a class="anchorjs-link" href="#app" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <br/>
  
  <p class="lead">
  	Untuk halaman admin yang notabene menampilkan header dan menu sidebar, kamu wajib menggunakan <b>App Layout</b>.<br/>
  	Untuk menggunakannya, kamu cukup menggunakan format berikut pada blade view kamu:
  </p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &#64;extends('layouts.app')
			&#64;section('title', 'Your title')

			&#64;section('js')
			&#64;endsection

			&#64;section('css')
			&#64;endsection

			&#64;section('content')
			  &#123;&#123;--  Your content --&#125;&#125;
			&#64;endsection
    </code>
  </pre>

  <hr class="my-4">

  <ul class="lead">
  	<li>Section <code>title</code> akan di push ke <code>&lt;title&gt; ... &lt;title&gt;</code> dalam tag head.</li>
  	<li>Section <code>css</code> kamu bisa masukkan <b>stylesheet</b> atau memanggil <b>cdn</b> yang akan kamu gunakan dalam halaman.</li>
  	<li>Section <code>js</code> kamu bisa masukkan <b>javascript</b> atau memanggil <b>cdn</b> yang akan kamu gunakan dalam halaman.</li>
  	<li>Section <code>content</code> merupakan tampilan utama dari konten yang ingin kamu sajikan.</li>
  </ul>

@endsection