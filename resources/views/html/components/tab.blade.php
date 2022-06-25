@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Tab')

@section('content')
  <x-nue::docs::header>
    Tab
    <x-slot:link>https://getbootstrap.com/docs/5.2/components/navs-tabs</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Tab</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav nav-segment mb-3" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="nav-one-eg1-tab" href="#nav-one-eg1" data-bs-toggle="pill" data-bs-target="#nav-one-eg1" role="tab" aria-controls="nav-one-eg1" aria-selected="true">Tab One</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="nav-two-eg1-tab" href="#nav-two-eg1" data-bs-toggle="pill" data-bs-target="#nav-two-eg1" role="tab" aria-controls="nav-two-eg1" aria-selected="false">Tab two</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="nav-three-eg1-tab" href="#nav-three-eg1" data-bs-toggle="pill" data-bs-target="#nav-three-eg1" role="tab" aria-controls="nav-three-eg1" aria-selected="false">Tab Three</a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane fade show active" id="nav-one-eg1" role="tabpanel" aria-labelledby="nav-one-eg1-tab">
          <p>First tab content...</p>
        </div>

        <div class="tab-pane fade" id="nav-two-eg1" role="tabpanel" aria-labelledby="nav-two-eg1-tab">
          <p>Second tab content...</p>
        </div>

        <div class="tab-pane fade" id="nav-three-eg1" role="tabpanel" aria-labelledby="nav-three-eg1-tab">
          <p>Third tab content...</p>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav nav-segment nav-pills mb-7" role="tablist"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" id="nav-one-eg1-tab" href="#nav-one-eg1" data-bs-toggle="pill" data-bs-target="#nav-one-eg1" role="tab" aria-controls="nav-one-eg1" aria-selected="true"&gt;Tab One&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" id="nav-two-eg1-tab" href="#nav-two-eg1" data-bs-toggle="pill" data-bs-target="#nav-two-eg1" role="tab" aria-controls="nav-two-eg1" aria-selected="false"&gt;Tab two&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" id="nav-three-eg1-tab" href="#nav-three-eg1" data-bs-toggle="pill" data-bs-target="#nav-three-eg1" role="tab" aria-controls="nav-three-eg1" aria-selected="false"&gt;Tab Three&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;

          &lt;!-- Tab Content --&gt;
          &lt;div class="tab-content"&gt;
            &lt;div class="tab-pane fade show active" id="nav-one-eg1" role="tabpanel" aria-labelledby="nav-one-eg1-tab"&gt;
              &lt;p&gt;First tab content...&lt;/p&gt;
            &lt;/div&gt;

            &lt;div class="tab-pane fade" id="nav-two-eg1" role="tabpanel" aria-labelledby="nav-two-eg1-tab"&gt;
              &lt;p&gt;Second tab content...&lt;/p&gt;
            &lt;/div&gt;

            &lt;div class="tab-pane fade" id="nav-three-eg1" role="tabpanel" aria-labelledby="nav-three-eg1-tab"&gt;
              &lt;p&gt;Third tab content...&lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Tab Content --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav nav-pills justify-content-left mb-3" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="nav-one-eg2-tab" href="#nav-one-eg2" data-bs-toggle="pill" data-bs-target="#nav-one-eg2" role="tab" aria-controls="nav-one-eg2" aria-selected="true">
            <div class="d-flex align-items-center">
              <i class="bi-house"></i> Tab one
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="nav-two-eg2-tab" href="#nav-two-eg2" data-bs-toggle="pill" data-bs-target="#nav-two-eg2" role="tab" aria-controls="nav-two-eg2" aria-selected="false">
            <div class="d-flex align-items-center">
              <i class="bi-person"></i> Tab two
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="nav-three-eg2-tab" href="#nav-three-eg2" data-bs-toggle="pill" data-bs-target="#nav-three-eg2" role="tab" aria-controls="nav-three-eg2" aria-selected="false">
            <div class="d-flex align-items-center">
              <i class="bi-gear"></i> Tab three
            </div>
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane fade show active" id="nav-one-eg2" role="tabpanel" aria-labelledby="nav-one-eg2-tab">
          <p>First tab content...</p>
        </div>

        <div class="tab-pane fade" id="nav-two-eg2" role="tabpanel" aria-labelledby="nav-two-eg2-tab">
          <p>Second tab content...</p>
        </div>

        <div class="tab-pane fade" id="nav-three-eg2" role="tabpanel" aria-labelledby="nav-three-eg2-tab">
          <p>Third tab content...</p>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav nav-pills justify-content-left mb-7" role="tablist"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" id="nav-one-eg2-tab" href="#nav-one-eg2" data-bs-toggle="pill" data-bs-target="#nav-one-eg2" role="tab" aria-controls="nav-one-eg2" aria-selected="true"&gt;
                &lt;div class="d-flex align-items-center"&gt;
                  &lt;i class="bi-house"&gt;&lt;/i&gt; Tab one
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" id="nav-two-eg2-tab" href="#nav-two-eg2" data-bs-toggle="pill" data-bs-target="#nav-two-eg2" role="tab" aria-controls="nav-two-eg2" aria-selected="false"&gt;
                &lt;div class="d-flex align-items-center"&gt;
                  &lt;i class="bi-person"&gt;&lt;/i&gt; Tab two
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" id="nav-three-eg2-tab" href="#nav-three-eg2" data-bs-toggle="pill" data-bs-target="#nav-three-eg2" role="tab" aria-controls="nav-three-eg2" aria-selected="false"&gt;
                &lt;div class="d-flex align-items-center"&gt;
                  &lt;i class="bi-gear"&gt;&lt;/i&gt; Tab three
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;

          &lt;!-- Tab Content --&gt;
          &lt;div class="tab-content"&gt;
            &lt;div class="tab-pane fade show active" id="nav-one-eg2" role="tabpanel" aria-labelledby="nav-one-eg2-tab"&gt;
              &lt;p&gt;First tab content...&lt;/p&gt;
            &lt;/div&gt;

            &lt;div class="tab-pane fade" id="nav-two-eg2" role="tabpanel" aria-labelledby="nav-two-eg2-tab"&gt;
              &lt;p&gt;Second tab content...&lt;/p&gt;
            &lt;/div&gt;

            &lt;div class="tab-pane fade" id="nav-three-eg2" role="tabpanel" aria-labelledby="nav-three-eg2-tab"&gt;
              &lt;p&gt;Third tab content...&lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Tab Content --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection