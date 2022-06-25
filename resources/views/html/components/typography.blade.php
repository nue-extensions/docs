@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Typography')

@section('content')
  <x-nue::docs::header>
    Typography
  </x-nue::docs::header>

  <h2 id="headings" class="nue-docs-heading">
    Headings <a class="anchorjs-link" href="#headings" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <table class="table table-thead-bordered table-nowrap">
        <thead class="thead-light">
          <tr>
            <th>Heading</th>
            <th>Example</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <p><code>&lt;h1&gt;&lt;/h1&gt;</code></p>
            </td>
            <td><span class="h1" style="font-size: calc(1.475rem + 2.7vw);">h1. Front heading</span></td>
          </tr>
          <tr>
            <td>
              <p><code>&lt;h2&gt;&lt;/h2&gt;</code></p>
            </td>
            <td><span class="h2" style="font-size: calc(1.425rem + 2.1vw);">h2. Front heading</span></td>
          </tr>
          <tr>
            <td>
              <p><code>&lt;h3&gt;&lt;/h3&gt;</code></p>
            </td>
            <td><span class="h3" style="font-size: calc(1.3375rem + 1.05vw);">h3. Front heading</span></td>
          </tr>
          <tr>
            <td>
              <p><code>&lt;h4&gt;&lt;/h4&gt;</code></p>
            </td>
            <td><span class="h4" style="font-size: calc(1.2875rem + 0.45vw);">h4. Front heading</span></td>
          </tr>
          <tr>
            <td>
              <p><code>&lt;h5&gt;&lt;/h5&gt;</code></p>
            </td>
            <td><span class="h5" style="font-size: calc(1.2625rem + 0.15vw);">h5. Front heading</span></td>
          </tr>
          <tr>
            <td>
              <p><code>&lt;h6&gt;&lt;/h6&gt;</code></p>
            </td>
            <td><span class="h6" style="font-size: 1.125rem;">h6. Front heading</span></td>
          </tr>
        </tbody>
      </table>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;h1&gt;h1. Front heading&lt;/h1&gt;
          &lt;h2&gt;h2. Front heading&lt;/h2&gt;
          &lt;h3&gt;h3. Front heading&lt;/h3&gt;
          &lt;h4&gt;h4. Front heading&lt;/h4&gt;
          &lt;h5&gt;h5. Front heading&lt;/h5&gt;
          &lt;h6&gt;h6. Front heading&lt;/h6&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <p class="h1" style="font-size: calc(1.475rem + 2.7vw);">h1. Front heading</p>
      <p class="h2" style="font-size: calc(1.425rem + 2.1vw);">h2. Front heading</p>
      <p class="h3" style="font-size: calc(1.3375rem + 1.05vw);">h3. Front heading</p>
      <p class="h4" style="font-size: calc(1.2875rem + 0.45vw);">h4. Front heading</p>
      <p class="h5" style="font-size: calc(1.2625rem + 0.15vw);">h5. Front heading</p>
      <p class="h6" style="font-size: 1.125rem;">h6. Front heading</p>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;p class="h1"&gt;h1. Front heading&lt;/p&gt;
          &lt;p class="h2"&gt;h2. Front heading&lt;/p&gt;
          &lt;p class="h3"&gt;h3. Front heading&lt;/p&gt;
          &lt;p class="h4"&gt;h4. Front heading&lt;/p&gt;
          &lt;p class="h5"&gt;h5. Front heading&lt;/p&gt;
          &lt;p class="h6"&gt;h6. Front heading&lt;/p&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="customizing-headings" class="nue-docs-heading">
    Customizing headings <a class="anchorjs-link" href="#customizing-headings" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>
  
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <h3>Fancy display heading <small class="text-muted">With faded secondary text</small></h3>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;h3&gt;Fancy display heading &lt;small class="text-muted"&gt;With faded secondary text&lt;/small&gt;&lt;/h3&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="display-headings" class="nue-docs-heading">
    Display headings <a class="anchorjs-link" href="#display-headings" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <table class="table">
        <tbody>
          <tr>
            <td><span class="display-1">Display 1</span></td>
          </tr>
          <tr>
            <td><span class="display-2">Display 2</span></td>
          </tr>
          <tr>
            <td><span class="display-3">Display 3</span></td>
          </tr>
          <tr>
            <td><span class="display-4">Display 4</span></td>
          </tr>
        </tbody>
      </table>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Table --&gt;
          &lt;table class="table"&gt;
            &lt;tbody&gt;
              &lt;tr&gt;
                &lt;td&gt;&lt;span class="display-1"&gt;Display 1&lt;/span&gt;&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
              &lt;td&gt;&lt;span class="display-2"&gt;Display 2&lt;/span&gt;&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
              &lt;td&gt;&lt;span class="display-3"&gt;Display 3&lt;/span&gt;&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
              &lt;td&gt;&lt;span class="display-4"&gt;Display 4&lt;/span&gt;&lt;/td&gt;
              &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
          &lt;!-- End Table --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="lead" class="nue-docs-heading">
    Lead <a class="anchorjs-link" href="#lead" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <p class="lead">This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is a key point.</p>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;p class="lead"&gt;This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is a key point.&lt;/p&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="inline-text-elements" class="nue-docs-heading">
    Inline text elements <a class="anchorjs-link" href="#inline-text-elements" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <p>You can use the mark tag to <mark>highlight</mark> text.</p>
      <p><del>This line of text is meant to be treated as deleted text.</del></p>
      <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
      <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
      <p><u>This line of text will render as underlined</u></p>
      <p><small>This line of text is meant to be treated as fine print.</small></p>
      <p><span class="text-dark fw-semi-bold">This line rendered as bold text.</span></p>
      <p><em>This line rendered as italicized text.</em></p>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;
          &lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;
          &lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;
          &lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;
          &lt;p&gt;&lt;u&gt;This line of text will render as underlined&lt;/u&gt;&lt;/p&gt;
          &lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;
          &lt;p&gt;&lt;span class="text-dark fw-semi-bold"&gt;This line rendered as bold text.&lt;/span&gt;&lt;/p&gt;
          &lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="abbreviations" class="nue-docs-heading">
    Abbreviations <a class="anchorjs-link" href="#abbreviations" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <p><abbr title="attribute">attr</abbr></p>
      <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;p&gt;&lt;abbr title="attribute"&gt;attr&lt;/abbr&gt;&lt;/p&gt;
          &lt;p&gt;&lt;abbr title="HyperText Markup Language" class="initialism"&gt;HTML&lt;/abbr&gt;&lt;/p&gt;&lt;/span&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="blockquotes" class="nue-docs-heading">
    Blockquotes <a class="anchorjs-link" href="#blockquotes" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <blockquote class="blockquote">A well-known quote, contained in a blockquote element.</blockquote>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;blockquote class="blockquote"&gt;A well-known quote, contained in a blockquote element.&lt;/blockquote&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="naming-a-source" class="nue-docs-heading">
    Naming a source <a class="anchorjs-link" href="#naming-a-source" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <figure>
        <blockquote class="blockquote">
          <p>A well-known quote, contained in a blockquote element.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </figcaption>
      </figure>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;figure&gt;
            &lt;blockquote class="blockquote"&gt;
              &lt;p&gt;A well-known quote, contained in a blockquote element.&lt;/p&gt;
            &lt;/blockquote&gt;
            &lt;figcaption class="blockquote-footer"&gt;
              Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;
            &lt;/figcaption&gt;
          &lt;/figure&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="alignment" class="nue-docs-heading">
    Alignment <a class="anchorjs-link" href="#alignment" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <figure class="text-center">
        <blockquote class="blockquote">
          <p>A well-known quote, contained in a blockquote element.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </figcaption>
      </figure>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;figure class="text-center"&gt;
            &lt;blockquote class="blockquote"&gt;
              &lt;p&gt;A well-known quote, contained in a blockquote element.&lt;/p&gt;
            &lt;/blockquote&gt;
            &lt;figcaption class="blockquote-footer"&gt;
              Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;
            &lt;/figcaption&gt;
          &lt;/figure&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <figure class="text-end">
        <blockquote class="blockquote">
          <p>A well-known quote, contained in a blockquote element.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </figcaption>
      </figure>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;figure class="text-end"&gt;
            &lt;blockquote class="blockquote"&gt;
              &lt;p&gt;A well-known quote, contained in a blockquote element.&lt;/p&gt;
            &lt;/blockquote&gt;
            &lt;figcaption class="blockquote-footer"&gt;
              Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;
            &lt;/figcaption&gt;
          &lt;/figure&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="size" class="nue-docs-heading">
    Size <a class="anchorjs-link" href="#size" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <figure>
        <blockquote class="blockquote blockquote-sm">
          <p>This is small size blockquote</p>
        </blockquote>
      </figure>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;figure&gt;
            &lt;blockquote class="blockquote blockquote-sm"&gt;
              &lt;p&gt;This is small size blockquote&lt;/p&gt;
            &lt;/blockquote&gt;
          &lt;/figure&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="description-list-alignment" class="nue-docs-heading">
    Description list alignment <a class="anchorjs-link" href="#description-list-alignment" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <dl class="row">
        <dt class="col-sm-3">Description lists</dt>
        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

        <dt class="col-sm-3">Euismod</dt>
        <dd class="col-sm-9">
          <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
          <p>Donec id elit non mi porta gravida at eget metus.</p>
        </dd>

        <dt class="col-sm-3">Malesuada porta</dt>
        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
        <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

        <dt class="col-sm-3">Nesting</dt>
        <dd class="col-sm-9">
          <dl class="row">
            <dt class="col-sm-4">Nested definition list</dt>
            <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
          </dl>
        </dd>
      </dl>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;dl class="row"&gt;
            &lt;dt class="col-sm-3"&gt;Description lists&lt;/dt&gt;
            &lt;dd class="col-sm-9"&gt;A description list is perfect for defining terms.&lt;/dd&gt;

            &lt;dt class="col-sm-3"&gt;Euismod&lt;/dt&gt;
            &lt;dd class="col-sm-9"&gt;
              &lt;p&gt;Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.&lt;/p&gt;
              &lt;p&gt;Donec id elit non mi porta gravida at eget metus.&lt;/p&gt;
            &lt;/dd&gt;

            &lt;dt class="col-sm-3"&gt;Malesuada porta&lt;/dt&gt;
            &lt;dd class="col-sm-9"&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/dd&gt;

            &lt;dt class="col-sm-3 text-truncate"&gt;Truncated term is truncated&lt;/dt&gt;
            &lt;dd class="col-sm-9"&gt;Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.&lt;/dd&gt;

            &lt;dt class="col-sm-3"&gt;Nesting&lt;/dt&gt;
            &lt;dd class="col-sm-9"&gt;
              &lt;dl class="row"&gt;
                &lt;dt class="col-sm-4"&gt;Nested definition list&lt;/dt&gt;
                &lt;dd class="col-sm-8"&gt;Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.&lt;/dd&gt;
              &lt;/dl&gt;
            &lt;/dd&gt;
          &lt;/dl&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection