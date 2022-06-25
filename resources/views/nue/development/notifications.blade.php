@extends('nue-docs::app')
@section('title', 'Notifications')

@section('content')
	<x-nue::docs::header>
    Notifications (Toasr)
    <x-slot:description>
      Panduan untuk menampilkan notifikasi dalam Nue UI
    </x-slot:description>
  </x-nue::docs::header>


  <h2 id="toastr" class="hs-docs-heading">
    Built-in Toastr <a class="anchorjs-link" href="#toastr" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <br/>

  <p class="lead">
    Sederhananya, notifikasi ini maksudnya adalah untuk menginformasikan hasil dari proses yang bisa kamu kirim dari controllers atau routes.
    Nue sendiri menyediakan fitur Toastr bawaan, yaitu dengan contoh sebagai berikut:
  </p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      /**
       * Store a newly created resource in storage.
       *
       * @return mixed
       */
      public function store(Request $request)
      &#123;
          ...

          notify()->flash('Data berhasil disimpan.', 'success');
          return redirect()->back();
      &#125;
    </code>
  </pre>

  <br/>
  <p class="lead">
    Selain <code class="text-success">success</code>, juga tersedia <code class="text-warning">warning</code>, <code class="text-info">info</code>, <code class="text-primary">primary</code> dan <code class="text-danger">danger</code>.
  </p>

  
  <hr class="my-4">
  <br/>
  <h2 id="customize" class="hs-docs-heading">
    Build your own <a class="anchorjs-link" href="#customize" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p class="lead">
    <a href="https://github.com/novay/notify" target="_blank">Notify</a> is front-end framework agnostic, so you're free to easily implement the output however you choose.
  </p>

  <br/>
  <h3>Options</h3>
  
  <p class="lead">
    You can pass additional options to the flash method, which are then easily accessible within your view.
  </p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      notify()->flash('Welcome back!', 'success', [
        'timer' => 3000,
        'text' => 'It\'s really great to see you again',
      ]);
    </code>
  </pre>

  <br/>
  <p class="lead">
    Then, in your view.
  </p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &#64;if(notify()->ready())
          &lt;script&gt;
              swal(&#123;
                  title: "&#123;!! notify()->message() !!&#125;",
                  text: "&#123;!! notify()->option('text') !!&#125;",
                  type: "&#123;&#123; notify()->type() &#125;&#125;",
                  &#64;if (notify()->option('timer'))
                      timer: &#123;&#123; notify()->option('timer') &#125;&#125;,
                      showConfirmButton: false
                  &#64;endif
              &#125;);
          &lt;/script&gt;
      &#64;endif
    </code>
  </pre>

  <br/>
  <p class="lead">
    The above example uses SweetAlert, but the flexibily of Notify means you can easily use it with any JavaScript alert solution.
  </p>

@endsection