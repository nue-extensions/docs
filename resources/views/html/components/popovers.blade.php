@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Popovers')

@section('content')
  <x-nue::docs::header>
    Popover
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/popovers</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Popover</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-lg-3">
          <a class="d-block text-center" href="javascript:;" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="And here's some amazing content. It's very engaging. Right?">
            <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-top.svg" alt="">
            <h4>Popover on top</h4>
          </a>
        </div>

        <div class="col-lg-3">
          <a class="d-block text-center" href="javascript:;" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="right" data-bs-content="And here's some amazing content. It's very engaging. Right?">
            <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-right.svg" alt="">
            <h4>Popover on right</h4>
          </a>
        </div>

        <div class="col-lg-3">
          <a class="d-block text-center" href="javascript:;" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-content="And here's some amazing content. It's very engaging. Right?">
            <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-bottom.svg" alt="">
            <h4>Popover on bottom</h4>
          </a>
        </div>

        <div class="col-lg-3">
          <a class="d-block text-center" href="javascript:;" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="left" data-bs-content="And here's some amazing content. It's very engaging. Right?">
            <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-left.svg" alt="">
            <h4>Popover on left</h4>
          </a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-lg-3"&gt;
              &lt;a class="d-block text-center" href="#" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;
                &lt;img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-top.svg" alt=""&gt;
                &lt;h4&gt;Popover on top&lt;/h4&gt;
              &lt;/a&gt;
            &lt;/div&gt;

            &lt;div class="col-lg-3"&gt;
              &lt;a class="d-block text-center" href="#" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;
                &lt;img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-Backward.svg" alt=""&gt;
                &lt;h4&gt;Popover on right&lt;/h4&gt;
              &lt;/a&gt;
            &lt;/div&gt;

            &lt;div class="col-lg-3"&gt;
              &lt;a class="d-block text-center" href="#" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;
                &lt;img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-bottom.svg" alt=""&gt;
                &lt;h4&gt;Popover on bottom&lt;/h4&gt;
              &lt;/a&gt;
            &lt;/div&gt;

            &lt;div class="col-lg-3"&gt;
              &lt;a class="d-block text-center" href="#" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;
                &lt;img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-left.svg" alt=""&gt;
                &lt;h4&gt;Popover on left&lt;/h4&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dark" class="nue-docs-heading">
    Dark <a class="anchorjs-link" href="#dark" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-lg-3">
          <a class="d-block text-center" href="javascript:;" data-bs-popover-dark data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" title="Top example" data-bs-content="And here's some amazing content. It's very engaging. Right?">
            <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-top.svg" alt="">
            <h4>Popover on top</h4>
          </a>
        </div>

        <div class="col-lg-3">
          <a class="d-block text-center" href="javascript:;" data-bs-popover-dark data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="right" title="Right example" data-bs-content="And here's some amazing content. It's very engaging. Right?">
            <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-right.svg" alt="">
            <h4>Popover on right</h4>
          </a>
        </div>

        <div class="col-lg-3">
          <a class="d-block text-center" href="javascript:;" data-bs-popover-dark data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom" title="Bottom example" data-bs-content="And here's some amazing content. It's very engaging. Right?">
            <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-bottom.svg" alt="">
            <h4>Popover on bottom</h4>
          </a>
        </div>

        <div class="col-lg-3">
          <a class="d-block text-center" href="javascript:;" data-bs-popover-dark data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="left" title="Left example" data-bs-content="And here's some amazing content. It's very engaging. Right?">
            <img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-left.svg" alt="">
            <h4>Popover on left</h4>
          </a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-lg-3"&gt;
              &lt;a class="d-block text-center" href="#" data-bs-popover-dark data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" title="Top example" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;
                &lt;img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-top.svg" alt=""&gt;
                &lt;h4&gt;Popover on top&lt;/h4&gt;
              &lt;/a&gt;
            &lt;/div&gt;

            &lt;div class="col-lg-3"&gt;
              &lt;a class="d-block text-center" href="#" data-bs-popover-dark data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" title="Right example" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;
                &lt;img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-right.svg" alt=""&gt;
                &lt;h4&gt;Popover on right&lt;/h4&gt;
              &lt;/a&gt;
            &lt;/div&gt;

            &lt;div class="col-lg-3"&gt;
              &lt;a class="d-block text-center" href="#" data-bs-popover-dark data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Bottom example" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;
                &lt;img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-bottom.svg" alt=""&gt;
                &lt;h4&gt;Popover on bottom&lt;/h4&gt;
              &lt;/a&gt;
            &lt;/div&gt;

            &lt;div class="col-lg-3"&gt;
              &lt;a class="d-block text-center" href="#" data-bs-popover-dark data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" title="Left example" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;
                &lt;img class="img-fluid mb-3" src="https://cdn.btekno.id/templates/nue/svg/components/popover-left.svg" alt=""&gt;
                &lt;h4&gt;Popover on left&lt;/h4&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <div class="mb-10">&nbsp;</div>

@endsection