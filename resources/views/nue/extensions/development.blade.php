@extends('nue-docs::app')
@section('title', 'Development')

@section('content')
  
  <x-nue::docs::header>
    Extensions Development
    <x-slot:description>Jadikan module "berulang"mu menjadi package.</x-slot:description>
  </x-nue::docs::header>

  <p>
    Nue Package bisa membantu kamu untuk membuat package kamu sendiri untuk menunjang pekerjaanmu.
    Saat ini, beberapa contoh extensions yang bisa kamu gunakan ada di <a href="https://github.com/nue-extensions" target="_blank">https://github.com/nue-extensions</a>.
  </p>

  <p>
    Di halaman dokumentasi ini, saya akan mencoba mempraktekkan langkah demi langkah membuat sebuah extension sampai bisa dipublikasi dan digunakan oleh semua orang. Hasil dari contoh ini bisa dilihat di <a href="https://github.com/nue-extensions/phpinfo" target="_blank">phpinfo</a>.
  </p>

  <hr class="my-4">
  <h1 class="mb-3">Buat Extensions Baru</h1>
  <p>
    Untuk memulai membuat extensions baru, kamu cukup menggunakan perintah melalui terminal:
  </p>

  <pre class="rounded mb-4">
    <code class="language-html" data-lang="html">
      php artisan nue:extend nue-extensions/phpinfo --namespace=Nue\\PHPInfo
    </code>
  </pre>

  <p>
    <b>PENJELASAN:</b>
    <ol>
      <li><code>nue-extensions/phpinfo</code> adalah nama package.<br/></li>
      <li><code>Nue\\PHPInfo</code> adalah namespace package. Ingat! Backlashnya ada 2.</li>
    </ol>
  </p>

  <p>
    Setelah menjalankan perintah ini, nue akan men-generate direktori <code>nue-extensions/phpinfo</code>, berikut struktur file yang dibuat:
  </p>

  <pre class="rounded mt-3 mb-3">
    <code class="language-html" data-lang="html">
      The extension scaffolding generated successfully. 

      /.../app/Nue/Extensions/nue-extensions/phpinfo
          ├── LICENSE
          ├── README.md
          ├── composer.json
          ├── resources
          │   └── views
          │       └── index.blade.php
          ├── routes
          │   └── web.php
          └── src
              ├── PHPInfo.php
              └── Http
              │   └── Controllers
              │       └── PHPInfoController.php
              └── Models
              └── Providers
                  └── PHPInfoServiceProvider.php
    </code>
  </pre>

  <p>
    <b>PENJELASAN RINGKAS:</b>
    <ol>
      <li><code>resources</code> adalah tempat kamu meletakkan file view.<br/></li>
      <li><code>src</code> utamanya adalah wadah kamu meletakkan logika program.</li>
      <li><code>routes/web.php</code> digunakan untuk menyimpan routing url kamu, dan</li>
      <li><code>database</code> untuk menempatkan file migrasi database dan seeder.</li>
    </ol>
  </p>

  <hr class="my-4">
  <h1 class="mb-3">Register Extensions</h1>

  <p>
    Setelah extensions dibuat, selanjutnya coba untuk menghubungkannya dengan project kamu dengan menginstall extensions selayaknya menginstall package lainnya. Buka file <code>composer.json</code> project kamu lalu tambahkan baris berikut:
  </p>

  <pre class="rounded mb-3">
    <code class="language-html" data-lang="html">
      "repositories": [
          {
              "type": "path",
              "url": "app/Nue/Extensions/nue-extensions/phpinfo"
          }
      ]
    </code>
  </pre>

  <p>
    Kemudian eksekusi perintah berikut untuk menyelesaikan proses.
  </p>

  <pre class="rounded mb-3">
    <code class="language-html" data-lang="html">
      composer require nue-extensions/phpinfo
    </code>
  </pre>

  <p class="mb-3">
    Pastikan extensions kamu telah terhubung dengan membuka <a href="http://localhost/nue/phpinfo" target="_blank">http://localhost/nue/phpinfo</a>.
  </p>

  <img src="https://raw.githubusercontent.com/novay/imagehost/master/github/nue-phpinfo.png" alt="" class="w-100">

  <hr class="my-4">
  <h1 class="mb-3">Write code</h1>
  
  <p>
    Secara umum, extensions yang akan coba saya buat hanya menampilkan sebuah halaman yang menyajikan semua informasi PHP yang berasal dari fungsi <code>phpinfo()</code>.
    Dengan kata lain, saya hanya butuh <b>satu route</b> dan <b>sebuah view</b> tanpa memiliki database.
  </p>

  <p>
    Selanjutnya saya akan coba menghapus beberapa direktori dan file yang tidak saya butuhkan sehingga struktur direktorinya menjadi sebagai berikut:
  </p>

  <pre class="rounded mb-3">
    <code class="language-html" data-lang="html">
      ├── LICENSE
      ├── README.md
      ├── composer.json
      ├── resources
      │   └── views
      │       └── index.blade.php
      ├── routes
      │   └── web.php
      └── src
          ├── NuePHPInfo.php
          └── Http
          │   └── Controllers
          │       └── PHPInfoController.php
          └── Providers
              └── PHPInfoServiceProvider.php
    </code>
  </pre>
  
  <hr class="my-4">
  <h3>Routing</h3>

  <p>
    Berikut isi dari file route yang di generate oleh Nue, tidak ada yang perlu diubah dari ini.
  </p>

  <pre class="rounded mb-3">
    <code class="language-html" data-lang="html">
      &lt;?php

      Route::group([
        'namespace' => 'Nue\PHPInfo\Http\Controllers', 
        'prefix' => 'nue'
      ], function() {

        Route::get('phpinfo', 'PHPInfoController@index');

      });
    </code>
  </pre>

  <p>
    Pada prosesnya, URL dari extensions ini akan menuju ke <code>Nue\PHPInfo\Http\Controllers\PHPInfoController</code> dengan method <code>index</code>.
  </p>

  <hr class="my-4">
  <h3>Logic Program</h3>
  
  <p>
    Saya tambahin logic untuk meng-collect phpinfo di <code>src/PHPInfo.php</code>.
  </p>

  <pre class="rounded mb-3">
    <code class="language-html" data-lang="html">
      &lt;?php

      namespace Nue\PHPInfo;

      use Novay\Nue\Extension;

      class PHPInfo extends Extension
      {
          public $views = __DIR__.'/../resources/views';

          public static function toCollection()
          {
              $what = static::config('what', INFO_ALL);

              ob_start();

              phpinfo($what);

              $phpinfo = ['phpinfo' => collect()];

              if (preg_match_all('#(?:&lt;h2&gt;(?:&lt;a name=".*?"&gt;)?(.*?)(?:&lt;/a&gt;)?&lt;/h2&gt;)|(?:&lt;tr(?: class=".*?")?&gt;&lt;t[hd](?: class=".*?")?&gt;(.*?)\s*&lt;/t[hd]&gt;(?:&lt;t[hd](?: class=".*?")?&gt;(.*?)\s*&lt;/t[hd]&gt;(?:&lt;t[hd](?: class=".*?")?&gt;(.*?)\s*&lt;/t[hd]&gt;)?)?&lt;/tr&gt;)#s', ob_get_clean(), $matches, PREG_SET_ORDER)) {

                  collect($matches)->each(function ($match) use (&$phpinfo) {
                      if (strlen($match[1])) {
                          $phpinfo[$match[1]] = collect();

                      } elseif (isset($match[3])) {
                          $keys = array_keys($phpinfo);

                          $phpinfo[end($keys)][$match[2]] = isset($match[4]) ? collect([$match[3], $match[4]]) : $match[3];
                      } else {
                          $keys = array_keys($phpinfo);

                          $phpinfo[end($keys)][] = $match[2];
                      }
                  });
              }

              ob_end_clean();

              return collect($phpinfo);
          }
      }
    </code>
  </pre>

  <hr class="my-4">
  <h3>Controllers</h3>
  <p>
    Saya coba panggil logic <code>toCollection()</code> dan mengirimnya ke view melalui controller.
  </p>

  <pre class="rounded mb-3">
    <code class="language-html" data-lang="html">
      &lt;?php

      namespace Nue\PHPInfo\Http\Controllers;

      use Illuminate\Routing\Controller;
      use Nue\PHPInfo\PHPInfo;

      class PHPInfoController extends Controller
      {
        ...
        public function index()
        {
            $info = PHPInfo::toCollection();

            return view('nue-phpinfo::index', compact('info'));
        }
      }
    </code>
  </pre>

  <hr class="my-4">
  <h3>Views</h3>
  <p>
    Sederhananya, saya hanya nge-looping isi dari phpinfo ke dalam table.
  </p>

  <hr class="my-4">
  <h1 class="mb-3">Modifikasi file composer.json & README.md</h1>
  <p>
    Setelah extentions kamu selesai, kamu bisa mengubah isi dari file <code>composer.json</code> dan mengubah isi seperti description, keywords, license dan authors dengan informasi pribadi kamu. Jangan lupa juga untuk memperbarui file <code>README.md</code> yang mungkin bisa kamu isi dengan dokumentasi atau informasi apapun yang berhubungan dengan package-mu.
  </p>

  <hr class="my-4">

  <h1>Remote installation</h1>

  <p>
    Apabila package sudah selesai dan ingin agar bisa digunakan oleh seluruh orang, kamu bisa melanjutkan langkah-langkah berikut.
  </p>

  <hr class="my-4">

  <h4>Unggah ke Github</h4>
  
  <p>
    Login ke akun Github kamu, buat repository, dan ikuti perintah berikut untuk nge-push source code kamu ke Github.
  </p>

  <pre class="rounded mb-3">
    <code class="language-html" data-lang="html">
      git init
      git remote add origin https://github.com/&lt;your-name&gt;/&lt;your-repository&gt;.git
      git add .
      git commit -am "Initial commit."
      git push origin master
    </code>
  </pre>

  <hr class="my-4">

  <h4>Release version</h4>
  <p>Selanjutnya rilis versi dari package kamu dengan perintah berikut:</p>

  <pre class="rounded mb-3">
    <code class="language-html" data-lang="html">
      git tag 0.0.1 && git push --tags
    </code>
  </pre>

  <p>
    Sebenarnya lebih mudah nge-rilis manual lewat website Github langsung.
  </p>

  <hr class="my-4">
  <h4>Submit ke <b>Packagist.org</b></h4>
  
  <p>
    Langkah selanjutnya adalah mendaftarkan project kamu ke <a href="https://packagist.org" target="_blank">Packagist.org</a>. Kalau kamu belum memiliki akun, cukup daftar menggunakan akun Github kamu, lalu buka menu <b>Submit</b> dan masukkan <b>URL lengkap repository</b> github kamu, lalu submit.
  </p>

  <p>After the submission is complete, you can install your extension via composer.</p>

  <hr class="my-4">
  <p>Kunjungi <a href="https://github.com/nue-extensions" target="_blank">https://github.com/nue-extensions</a> untuk melihat contoh-contoh implementasi extensions yang sudah rilis.</p>
@endsection