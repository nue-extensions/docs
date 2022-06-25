@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Navs')

@section('content')
  <x-nue::docs::header>
    Navs
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/navs-tabs/</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Navs</x-slot:label>
  </x-nue::docs::header>

  <h2 id="base-nav" class="nue-docs-heading">
    Base nav <a class="anchorjs-link" href="#base-nav" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Centered with <code>.justify-content-center</code>:</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav justify-content-center"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Centered with <code>.justify-content-end</code>:</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav justify-content-end"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="sizes" class="nue-docs-heading">
    Sizes <a class="anchorjs-link" href="#sizes" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>.nav-sm</code> for smaller size</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav nav-sm">
        <li class="nav-item">
          <a class="nav-link active" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Media</a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav nav-sm"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" href="#"&gt;Dashboard&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Profile&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Settings&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Media&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Use <code>.nav-lg</code> for larger size</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav nav-lg">
        <li class="nav-item">
          <a class="nav-link active" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Media</a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav nav-lg"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" href="#"&gt;Dashboard&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Profile&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Settings&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Media&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="fill-and-justify" class="nue-docs-heading">
    Fill and justify <a class="anchorjs-link" href="#fill-and-justify" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Force your <code>.nav’s</code> contents to extend the full available width one of two modifier classes. To proportionately fill all available space with your <code>.nav-items</code>, use <code>.nav-fill</code>. Notice that all horizontal space is occupied, but not every nav item has the same width.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav nav-pills nav-fill"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="nav-tabs" class="nue-docs-heading">
    Nav tabs <a class="anchorjs-link" href="#nav-tabs" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed interface.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav nav-tabs"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="nav-pills" class="nue-docs-heading">
    Nav pills <a class="anchorjs-link" href="#nav-pills" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav nav-pills"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="nav-segment" class="nue-docs-heading">
    Nav segment <a class="anchorjs-link" href="#nav-segment" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav nav-segment">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav nav-segment"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="nav-icon" class="nue-docs-heading">
    Nav icon <a class="anchorjs-link" href="#nav-icon" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav nav-segment">
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <i class="bi-house nav-icon"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi-person nav-icon"></i> Profile
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi-sliders nav-icon"></i> Settings
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
            <i class="bi-image nav-icon"></i> Media
          </a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav nav-segment"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" href="#"&gt;
                &lt;i class="bi-house nav-icon"&gt;&lt;/i&gt; Dashboard
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;
                &lt;i class="bi-person nav-icon"&gt;&lt;/i&gt; Profile
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;
                &lt;i class="bi-sliders nav-icon"&gt;&lt;/i&gt; Settings
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;
                &lt;i class="bi-image nav-icon"&gt;&lt;/i&gt; Media
              &lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="nav-light" class="nue-docs-heading">
    Nav light <a class="anchorjs-link" href="#nav-light" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav nav-light">
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <i class="bi-house nav-icon"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi-person nav-icon"></i> Profile
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi-sliders nav-icon"></i> Settings
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
            <i class="bi-image nav-icon"></i> Media
          </a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav --&gt;
          &lt;ul class="nav nav-light"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" href="#"&gt;
                &lt;i class="bi-house nav-icon"&gt;&lt;/i&gt; Dashboard
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;
                &lt;i class="bi-person nav-icon"&gt;&lt;/i&gt; Profile
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;
                &lt;i class="bi-sliders nav-icon"&gt;&lt;/i&gt; Settings
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;
                &lt;i class="bi-image nav-icon"&gt;&lt;/i&gt; Media
              &lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="nav-vertical" class="nue-docs-heading">
    Nav vertical <a class="anchorjs-link" href="#nav-vertical" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Stack your navigation by changing the flex item direction with the <code>.nav-vertical</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="nav nav-vertical">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav Vertical --&gt;
          &lt;ul class="nav nav-vertical"&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
              &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Nav Vertical --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="nav-scroller" class="nue-docs-heading">
    Nav scroller <a class="anchorjs-link" href="#nav-scroller" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Make arrows visible by setting a <code>max-width</code> size.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-nav-scroller nue-nav-scroller-horizontal" style="max-width: 22rem;">
        <span class="nue-nav-scroller-arrow-prev" style="display: none;">
          <a class="nue-nav-scroller-arrow-link" href="javascript:;">
            <i class="bi-chevron-left"></i>
          </a>
        </span>

        <span class="nue-nav-scroller-arrow-next" style="display: none;">
          <a class="nue-nav-scroller-arrow-link" href="javascript:;">
            <i class="bi-chevron-right"></i>
          </a>
        </span>

        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tasks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
        </ul>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav Scroller --&gt;
          &lt;div class="js-nav-scroller nue-nav-scroller-horizontal" style="max-width: 22rem;"&gt;
            &lt;span class="nue-nav-scroller-arrow-prev" style="display: none;"&gt;
              &lt;a class="nue-nav-scroller-arrow-link" href="javascript:;"&gt;
                &lt;i class="bi-chevron-left"&gt;&lt;/i&gt;
              &lt;/a&gt;
            &lt;/span&gt;

            &lt;span class="nue-nav-scroller-arrow-next" style="display: none;"&gt;
              &lt;a class="nue-nav-scroller-arrow-link" href="javascript:;"&gt;
                &lt;i class="bi-chevron-right"&gt;&lt;/i&gt;
              &lt;/a&gt;
            &lt;/span&gt;

            &lt;!-- Nav --&gt;
            &lt;ul class="nav"&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link active" href="#"&gt;Dashboard&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Profile&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Projects&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Tasks&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Settings&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- End Nav --&gt;
          &lt;/div&gt;
          &lt;!-- End Nav Scroller --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function() {
              // INITIALIZATION OF NAV SCROLLER
              // =======================================================
              $('.js-nav-scroller').each(function () {
                new NueNavScroller($(this)).init()
              });
            });
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <br/>
  <p>Or don't, then they will appear when the side of the content is smaller than the content size. Reduce the browser size to see in action.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-nav-scroller nue-nav-scroller-horizontal">
        <span class="nue-nav-scroller-arrow-prev" style="display: none;">
          <a class="nue-nav-scroller-arrow-link" href="javascript:;">
            <i class="bi-chevron-left"></i>
          </a>
        </span>

        <span class="nue-nav-scroller-arrow-next" style="display: none;">
          <a class="nue-nav-scroller-arrow-link" href="javascript:;">
            <i class="bi-chevron-right"></i>
          </a>
        </span>

        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tasks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Log out</a>
          </li>
        </ul>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav Scroller --&gt;
          &lt;div class="js-nav-scroller nue-nav-scroller-horizontal"&gt;

            &lt;span class="nue-nav-scroller-arrow-prev" style="display: none;"&gt;
              &lt;a class="nue-nav-scroller-arrow-link" href="javascript:;"&gt;
                &lt;i class="bi-chevron-left"&gt;&lt;/i&gt;
              &lt;/a&gt;
            &lt;/span&gt;

            &lt;span class="nue-nav-scroller-arrow-next" style="display: none;"&gt;
              &lt;a class="nue-nav-scroller-arrow-link" href="javascript:;"&gt;
                &lt;i class="bi-chevron-right"&gt;&lt;/i&gt;
              &lt;/a&gt;
            &lt;/span&gt;

            &lt;!-- Nav --&gt;
            &lt;ul class="nav nav-tabs"&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link active" href="#"&gt;Dashboard&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Profile&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Projects&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Tasks&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Settings&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Log out&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- End Nav --&gt;
          &lt;/div&gt;
          &lt;!-- End Nav Scroller --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function() {
              // INITIALIZATION OF NAV SCROLLER
              // =======================================================
              $('.js-nav-scroller').each(function () {
                new NueNavScroller($(this)).init()
              });
            });
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="nav-scroller-vertical" class="nue-docs-heading">
    Vertical <a class="anchorjs-link" href="#nav-scroller-vertical" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>"type": "vertical"</code> for vertical alignment and the <code>.nue-nav-scroller-vertical</code> class for a scrollbar.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-nav-scroller nue-nav-scroller-vertical" style="max-height: 12rem; max-width: 22rem;" data-nue-nav-scroller-options='{
             "type": "vertical"
           }'>

        <span class="nue-nav-scroller-arrow-prev" style="display: none;">
          <a class="nue-nav-scroller-arrow-link" href="javascript:;">
            <i class="bi-chevron-left"></i>
          </a>
        </span>

        <span class="nue-nav-scroller-arrow-next" style="display: none;">
          <a class="nue-nav-scroller-arrow-link" href="javascript:;">
            <i class="bi-chevron-right"></i>
          </a>
        </span>

        <ul class="nav nav-vertical">
          <li class="nav-item">
            <a class="nav-link active" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tasks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Log out</a>
          </li>
        </ul>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Nav Scroller --&gt;
          &lt;div class="js-nav-scroller nue-nav-scroller-vertical" style="max-height: 12rem; max-width: 22rem;"
               data-nue-nav-scroller-options='{
                 "type": "vertical"
               }'&gt;

            &lt;span class="nue-nav-scroller-arrow-prev" style="display: none;"&gt;
              &lt;a class="nue-nav-scroller-arrow-link" href="javascript:;"&gt;
                &lt;i class="bi-chevron-left"&gt;&lt;/i&gt;
              &lt;/a&gt;
            &lt;/span&gt;

            &lt;span class="nue-nav-scroller-arrow-next" style="display: none;"&gt;
              &lt;a class="nue-nav-scroller-arrow-link" href="javascript:;"&gt;
                &lt;i class="bi-chevron-right"&gt;&lt;/i&gt;
              &lt;/a&gt;
            &lt;/span&gt;

            &lt;!-- Nav --&gt;
            &lt;ul class="nav nav-vertical"&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link active" href="#"&gt;Dashboard&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Profile&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Projects&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Tasks&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Settings&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Log out&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- End Nav --&gt;
          &lt;/div&gt;
          &lt;!-- End Nav Scroller --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function() {
              // INITIALIZATION OF NAV SCROLLER
              // =======================================================
              document.querySelectorAll('.js-nav-scroller').forEach(item => {
                new NueNavScroller(item).init()
              })
            });
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="nav-scroller-methods" class="nue-docs-heading">
    Nav scroller methods <a class="anchorjs-link" href="#nav-scroller-methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <div class="card mb-7">
    <div class="table-responsive">
      <table class="table table-thead-bordered table-nowrap">
        <thead class="thead-light">
          <tr>
            <th>Parameters</th>
            <th style="width: 50%;">Description</th>
            <th class="text-nowrap">Default value</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <code>type</code>
            </td>
            <td>
              Scrollbar type, <code>vertical</code> or <code>horizontal</code>.
            </td>
            <td>
              <code>horizontal</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>target</code>
            </td>
            <td>Element to which the scrollbar will move.</td>
            <td>
              <code>.active</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>delay</code>
            </td>
            <td>Animation delay.</td>
            <td>
              <code>20</code>
            </td>
          </tr>

          <tr>
            <td>
              <code>offset</code>
            </td>
            <td>Indent back for scrollbar.</td>
            <td>
              <code>0</code>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection