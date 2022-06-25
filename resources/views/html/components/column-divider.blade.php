@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Column Divider')

@section('content')
  <x-nue::docs::header>
    Column Divider
  </x-nue::docs::header>

  <p>Kamu bisa eksperimen pakai class ini : <code>.col-{-sm|-md|-lg|-xl}-divider</code></p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row col-sm-divider">
        <div class="col-sm text-end">
          <span class="d-block h4 mb-0">$72.46</span>
          <span class="d-block">last transaction</span>
        </div>
        <div class="col-sm text-start">
          <span class="d-block h4 text-success mb-0">
            <i class="bi-graph-up"></i> 12%
          </span>
          <span class="d-block">since last visit</span>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row col-sm-divider"&gt;
            &lt;div class="col-sm text-end"&gt;
              &lt;span class="d-block h4 mb-0"&gt;$72.46&lt;/span&gt;
              &lt;span class="d-block"&gt;last transaction&lt;/span&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;

            &lt;div class="col-sm text-start"&gt;
              &lt;span class="d-block h4 text-success mb-0"&gt;
                &lt;i class="bi-graph-up"&gt;&lt;/i&gt; 12%
              &lt;/span&gt;
              &lt;span class="d-block"&gt;since last visit&lt;/span&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>
@endsection