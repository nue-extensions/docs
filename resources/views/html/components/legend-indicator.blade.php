@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Legend Indicator')

@section('content')
  <x-nue::docs::header>
    Legend indicator
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-inline list-px-2">
        <li class="list-inline-item d-inline-flex align-items-center">
          <span class="legend-indicator"></span> Default
        </li>
        <li class="list-inline-item d-inline-flex align-items-center">
          <span class="legend-indicator bg-primary"></span> Primary
        </li>
        <li class="list-inline-item d-inline-flex align-items-center">
          <span class="legend-indicator bg-info"></span> Info
        </li>
        <li class="list-inline-item d-inline-flex align-items-center">
          <span class="legend-indicator bg-danger"></span> Danger
        </li>
        <li class="list-inline-item d-inline-flex align-items-center">
          <span class="legend-indicator bg-success"></span> Success
        </li>
        <li class="list-inline-item d-inline-flex align-items-center">
          <span class="legend-indicator bg-warning"></span> Warning
        </li>
        <li class="list-inline-item d-inline-flex align-items-center">
          <span class="legend-indicator bg-dark"></span> Dark
        </li>
        <li class="list-inline-item d-inline-flex align-items-center">
          <span class="legend-indicator bg-light"></span> Light
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;ul class="list-inline"&gt;
            &lt;li class="list-inline-item d-inline-flex align-items-center"&gt;
              &lt;span class="legend-indicator"&gt;&lt;/span&gt;Default
            &lt;/li&gt;
            &lt;li class="list-inline-item d-inline-flex align-items-center"&gt;
              &lt;span class="legend-indicator bg-primary"&gt;&lt;/span&gt;Primary
            &lt;/li&gt;
            &lt;li class="list-inline-item d-inline-flex align-items-center"&gt;
              &lt;span class="legend-indicator bg-info"&gt;&lt;/span&gt;Info
            &lt;/li&gt;
            &lt;li class="list-inline-item d-inline-flex align-items-center"&gt;
              &lt;span class="legend-indicator bg-danger"&gt;&lt;/span&gt;Danger
            &lt;/li&gt;
            &lt;li class="list-inline-item d-inline-flex align-items-center"&gt;
              &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Success
            &lt;/li&gt;
            &lt;li class="list-inline-item d-inline-flex align-items-center"&gt;
              &lt;span class="legend-indicator bg-warning"&gt;&lt;/span&gt;Warning
            &lt;/li&gt;
            &lt;li class="list-inline-item d-inline-flex align-items-center"&gt;
              &lt;span class="legend-indicator bg-dark"&gt;&lt;/span&gt;Dark
            &lt;/li&gt;
            &lt;li class="list-inline-item d-inline-flex align-items-center"&gt;
              &lt;span class="legend-indicator bg-light"&gt;&lt;/span&gt;Light
            &lt;/li&gt;
          &lt;/ul&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>
@endsection