@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Progress')

@section('content')
  <x-nue::docs::header>
    Progress
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/progress</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Progress</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-lg-50">
        <div class="progress mb-2">
          <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-lg-50">
        <div class="progress">
          <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="200"></div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="labels" class="nue-docs-heading">
    Labels <a class="anchorjs-link" href="#labels" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-lg-50">
        <div class="progress" style="height: 16px;">
          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;25%&lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="height" class="nue-docs-heading">
    Height <a class="anchorjs-link" href="#height" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-lg-50">
        <div class="progress mb-2" style="height: 4px;">
          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2" style="height: 20px;">
          <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="progress" style="height: 4px;"&gt;
            &lt;div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress" style="height: 8px;"&gt;
            &lt;div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress" style="height: 20px;"&gt;
            &lt;div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="vertical-progress" class="nue-docs-heading">
    Vertical progress <a class="anchorjs-link" href="#vertical-progress" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-lg-50">
        <div class="row">
          <div class="col mb-5 mb-lg-0">
            <div class="progress-vertical rounded">
              <div class="bg-primary rounded-bottom" role="progressbar" style="height: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col mb-5 mb-lg-0">
            <div class="progress-vertical rounded">
              <div class="bg-primary rounded-bottom" role="progressbar" style="height: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col mb-5 mb-lg-0">
            <div class="progress-vertical rounded">
              <div class="bg-primary rounded-bottom" role="progressbar" style="height: 23%;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col mb-5 mb-lg-0">
            <div class="progress-vertical rounded">
              <div class="bg-primary rounded-bottom" role="progressbar" style="height: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col mb-5 mb-lg-0">
            <div class="progress-vertical rounded">
              <div class="bg-primary rounded-bottom" role="progressbar" style="height: 26%;" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col mb-5 mb-lg-0">
            <div class="progress-vertical rounded">
              <div class="bg-primary rounded-bottom" role="progressbar" style="height: 98%;" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col mb-5 mb-lg-0">
            <div class="progress-vertical rounded">
              <div class="bg-primary rounded-bottom" role="progressbar" style="height: 71%;" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col mb-5 mb-lg-0">
            <div class="progress-vertical rounded">
              <div class="bg-primary rounded-bottom" role="progressbar" style="height: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="w-md-50"&gt;
            &lt;div class="row"&gt;
              &lt;div class="col mb-5 mb-lg-0"&gt;
                &lt;div class="progress-vertical rounded"&gt;
                  &lt;div class="bg-primary rounded-bottom" role="progressbar" style="height: 45%;"&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="col mb-5 mb-lg-0"&gt;
                &lt;div class="progress-vertical rounded"&gt;
                  &lt;div class="bg-primary rounded-bottom" role="progressbar" style="height: 80%;"&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="col mb-5 mb-lg-0"&gt;
                &lt;div class="progress-vertical rounded"&gt;
                  &lt;div class="bg-primary rounded-bottom" role="progressbar" style="height: 23%;"&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="col mb-5 mb-lg-0"&gt;
                &lt;div class="progress-vertical rounded"&gt;
                  &lt;div class="bg-primary rounded-bottom" role="progressbar" style="height: 39%;"&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="col mb-5 mb-lg-0"&gt;
                &lt;div class="progress-vertical rounded"&gt;
                  &lt;div class="bg-primary rounded-bottom" role="progressbar" style="height: 26%;"&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="col mb-5 mb-lg-0"&gt;
                &lt;div class="progress-vertical rounded"&gt;
                  &lt;div class="bg-primary rounded-bottom" role="progressbar" style="height: 98%;"&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="col mb-5 mb-lg-0"&gt;
                &lt;div class="progress-vertical rounded"&gt;
                  &lt;div class="bg-primary rounded-bottom" role="progressbar" style="height: 71%;"&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="col mb-5 mb-lg-0"&gt;
                &lt;div class="progress-vertical rounded"&gt;
                  &lt;div class="bg-primary rounded-bottom" role="progressbar" style="height: 55%;"&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="multiple-bars" class="nue-docs-heading">
    Multiple bars <a class="anchorjs-link" href="#multiple-bars" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-lg-50">
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
          <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
            &lt;div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="striped" class="nue-docs-heading">
    Striped <a class="anchorjs-link" href="#striped" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-lg-50">
        <div class="progress mb-2">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="backgrounds" class="nue-docs-heading">
    Backgrounds <a class="anchorjs-link" href="#backgrounds" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="w-lg-50">
        <div class="progress mb-2">
          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="progress"&gt;
            &lt;div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection