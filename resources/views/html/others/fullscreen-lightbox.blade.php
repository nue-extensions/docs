@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Fullscreen Lightbox')

@section('content')
  <x-nue::docs::header>
    Fullscreen Lightbox
    <x-slot:description>Simple and powerful lightbox for displaying photos, HTML5 or YouTube videos in clean overlaying box.</x-slot:description>
    <x-slot:link>https://fslightbox.com/javascript</x-slot:link>
    <x-slot:label>Dokumentasi Fullscreen Lightbox</x-slot:label>
  </x-nue::docs::header>

  <h2 id="gallery" class="nue-docs-heading">
    Galeri <a class="anchorjs-link" href="#gallery" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0">
          <a href="https://cdn.btekno.id/templates/nue/img/documentation/img1-lg.jpg" data-fslightbox="gallery">
            <img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="...">
          </a>
        </div>

        <div class="col-sm-4 mb-3 mb-sm-0">
          <a href="https://cdn.btekno.id/templates/nue/img/documentation/img2-lg.jpg" data-fslightbox="gallery">
            <img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img2.jpg" alt="...">
          </a>
        </div>

        <div class="col-sm-4">
          <a href="https://cdn.btekno.id/templates/nue/img/documentation/img3-lg.jpg" data-fslightbox="gallery">
            <img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img3.jpg" alt="...">
          </a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-sm-4 mb-3 mb-sm-0"&gt;
              &lt;!-- Media Viewer --&gt;
              &lt;a href="https://cdn.btekno.id/templates/nue/img/documentation/img1-lg.jpg" data-fslightbox="gallery"&gt;
                &lt;img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="..."&gt;
              &lt;/a&gt;
              &lt;!-- End Media Viewer --&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;

            &lt;div class="col-sm-4 mb-3 mb-sm-0"&gt;
              &lt;!-- Media Viewer --&gt;
              &lt;a href="https://cdn.btekno.id/templates/nue/img/documentation/img2-lg.jpg" data-fslightbox="gallery"&gt;
                &lt;img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img2.jpg" alt="..."&gt;
              &lt;/a&gt;
              &lt;!-- End Media Viewer --&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;

            &lt;div class="col-sm-4"&gt;
              &lt;!-- Media Viewer --&gt;
              &lt;a href="https://cdn.btekno.id/templates/nue/img/documentation/img3-lg.jpg" data-fslightbox="gallery"&gt;
                &lt;img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img3.jpg" alt="..."&gt;
              &lt;/a&gt;
              &lt;!-- End Media Viewer --&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="html5-videos" class="nue-docs-heading">
    HTML5 videos <a class="anchorjs-link" href="#html5-videos" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0">
          <a data-fslightbox="html5-video" data-video-poster="https://cdn.btekno.id/templates/nue/video/working-in-office.jpg" href="https://cdn.btekno.id/templates/nue/video/working-in-office.mp4">
            <img class="img-fluid" src="https://cdn.btekno.id/templates/nue/video/working-in-office.jpg" alt="...">
          </a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Gallery --&gt;
          &lt;div class="row"&gt;
            &lt;div class="col-sm-4 mb-3 mb-sm-0"&gt;
              &lt;a data-fslightbox="html5-video" data-video-poster="https://cdn.btekno.id/templates/nue/video/working-in-office.jpg" href="https://cdn.btekno.id/templates/nue/video/working-in-office.mp4"&gt;
                &lt;img class="img-fluid" src="https://cdn.btekno.id/templates/nue/video/working-in-office.jpg" alt="..."&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Gallery --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="youtube-videos" class="nue-docs-heading">
    YouTube videos <a class="anchorjs-link" href="#youtube-videos" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0">
          <a data-fslightbox="youtube-video" data-video-poster="https://cdn.btekno.id/templates/nue/img/1920x1080/img1.jpg" href="https://www.youtube.com/watch?v=d4eDWc8g0e0">
            <img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/1920x1080/img1.jpg" alt="...">
          </a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Gallery --&gt;
          &lt;div class="row"&gt;
            &lt;div class="col-sm-4 mb-3 mb-sm-0"&gt;
              &lt;a data-fslightbox="youtube-video" data-video-poster="https://cdn.btekno.id/templates/nue/img/1920x1080/img1.jpg" href="https://www.youtube.com/watch?v=d4eDWc8g0e0"&gt;
                &lt;img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/1920x1080/img1.jpg" alt="..."&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Gallery --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection