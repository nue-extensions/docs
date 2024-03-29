@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Spacing')

@section('content')
	<x-nue::docs::header>
    Spacing
  </x-nue::docs::header>

	<h2 id="margin-and-padding" class="nue-docs-heading">
		Margin and padding <a class="anchorjs-link" href="#margin-and-padding" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>Assign responsive-friendly <code>margin</code> or <code>padding</code> values to an element or a subset of its sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. Classes are built from a default Sass map ranging from <code>.25rem</code> to <code>3rem</code>.</p>

	<p>Using the CSS Grid layout module? Consider using <a class="link" href="#gap">the gap utility</a>.</p>

	<h2 id="notation" class="nue-docs-heading">
		Notation <a class="anchorjs-link" href="#notation" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>Spacing utilities that apply to all breakpoints, from <code>xs</code> to <code>xxl</code>, have no breakpoint abbreviation in them. This is because those classes are applied from <code>min-width: 0</code> and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.</p>

	<p>The classes are named using the format <code>{property}{sides}-{size}</code> for <code>xs</code> and <code>{property}{sides}-{breakpoint}-{size}</code> for <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, and <code>xxl</code>.</p>

	<p>Where <em>property</em> is one of:</p>

	<ul>
		<li><code>m</code> - for classes that set <code>margin</code></li>
		<li><code>p</code> - for classes that set <code>padding</code></li>
	</ul>

	<p>Where <em>sides</em> is one of:</p>

	<ul>
		<li><code>t</code> - for classes that set <code>margin-top</code> or <code>padding-top</code></li>
		<li><code>b</code> - for classes that set <code>margin-bottom</code> or <code>padding-bottom</code></li>
		<li><code>s</code> - for classes that set <code>margin-left</code> or <code>padding-left</code> in LTR, <code>margin-right</code> or <code>padding-right</code> in RTL</li>
		<li><code>e</code> - for classes that set <code>margin-right</code> or <code>padding-right</code> in LTR, <code>margin-left</code> or <code>padding-left</code> in RTL</li>
		<li><code>x</code> - for classes that set both <code>*-left</code> and <code>*-right</code></li>
		<li><code>y</code> - for classes that set both <code>*-top</code> and <code>*-bottom</code></li>
		<li>blank - for classes that set a <code>margin</code> or <code>padding</code> on all 4 sides of the element</li>
	</ul>

	<p>Where <em>size</em> is one of:</p>

	<ul>
		<li><code>0</code> - for classes that eliminate the <code>margin</code> or <code>padding</code> by setting it to <code>0</code></li>
		<li><code>1</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to <code>$spacer * .25</code></li>
		<li><code>2</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to <code>$spacer * .5</code></li>
		<li><code>3</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to <code>$spacer</code></li>
		<li><code>4</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to <code>$spacer * 1.5</code></li>
		<li><code>5</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to <code>$spacer * 3</code></li>
		<li><code>auto</code> - for classes that set the <code>margin</code> to auto</li>
	</ul>

	<p>(You can add more sizes by adding entries to the <code>$spacers</code> Sass map variable.)</p>

	<h2 id="content-space-notation" class="nue-docs-heading">
		Content-space notation <a class="anchorjs-link" href="#content-space-notation" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>The classes are named using the format <code>{property}{sides}-{size}</code> for <code>xs</code> and <code>{property}{sides}-{breakpoint}-{size}</code> for <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, and <code>xxl</code>.</p>

	<p>Where <em>property</em> is one of:</p>

	<ul>
		<li><code>content-space</code> - for classes that set <code>padding-top</code> and <code>padding-bottom</code></li>
	</ul>

	<p>Where <em>sides</em> is one of:</p>

	<ul>
		<li><code>content-space-t</code> - for classes that set <code>padding-top</code> or <code>padding-top</code></li>
		<li><code>content-space-b</code> - for classes that set <code>padding-bottom</code> or <code>padding-bottom</code></li>
	</ul>

	<p>Where <em>size</em> is one of:</p>

	<ul>
		<li><code>0</code> - for classes that eliminate the <code>padding</code> by setting it to <code>0</code></li>
		<li><code>1</code> - (by default) for classes that set the <code>padding</code> to <code>$content-spacer * 4</code></li>
		<li><code>2</code> - (by default) for classes that set the <code>padding</code> to <code>$content-spacer * 5</code></li>
		<li><code>3</code> - (by default) for classes that set the <code>padding</code> to <code>$content-spacer * 7.5</code></li>
		<li><code>4</code> - (by default) for classes that set the <code>padding</code> to <code>$content-spacer * 10</code></li>
		<li><code>auto</code> - for classes that set the <code>padding</code> to auto</li>
	</ul>

	<p>(You can add more sizes by adding entries to the <code>$content-spacers</code> Sass map variable.)</p>

	<h2 id="examples" class="nue-docs-heading">
		Examples <a class="anchorjs-link" href="#examples" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>Here are some representative examples of these classes:</p>

	<pre class="rounded mb-3">
		<code class="language-scss" data-lang="html">
			.mt-0 {
				margin-top: 0 !important;
			}

			.ms-1 {
				margin-left: ($spacer * .25) !important;
			}

			.px-2 {
				padding-left: ($spacer * .5) !important;
				padding-right: ($spacer * .5) !important;
			}

			.p-3 {
				padding: $spacer !important;
			}
		</code>
	</pre>

	<h2 id="horizontal-centering" class="nue-docs-heading">
		Horizontal centering <a class="anchorjs-link" href="#horizontal-centering" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>Additionally, Bootstrap also includes an <code>.mx-auto</code> class for horizontally centering fixed-width block level content—that is, content that has <code>display: block</code> and a <code>width</code> set—by setting the horizontal margins to <code>auto</code>.</p>

	<x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
    	<div class="bg-dark text-white mx-auto" style="width: 200px;">
				Centered element
			</div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
        	&lt;div class="mx-auto" style="width: 200px;"&gt;
						Centered element
					&lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

	<h2 id="negative-margin" class="nue-docs-heading">
		Negative margin <a class="anchorjs-link" href="#negative-margin" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>In CSS, <code>margin</code> properties can utilize negative values (<code>padding</code> cannot). These negative margins are <strong>disabled by default</strong>, but can be enabled in Sass by setting <code>$enable-negative-margins: true</code>.</p>

	<p>The syntax is nearly the same as the default, positive margin utilities, but with the addition of <code>n</code> before the requested size. Here&rsquo;s an example class that&rsquo;s the opposite of <code>.mt-1</code>:</p>

	<pre class="rounded mb-3">
		<code class="language-scss" data-lang="html">
			.mt-n1 {
				margin-top: -0.25rem !important;
			}
		</code>
	</pre>

	<h2 id="gap" class="nue-docs-heading">
		Gap <a class="anchorjs-link" href="#gap" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>When using <code>display: grid</code>, you can make use of <code>gap</code> utilities on the parent grid container. This can save on having to add margin utilities to individual grid items (children of a <code>display: grid</code> container). Gap utilities are responsive by default, and are generated via our utilities API, based on the <code>$spacers</code> Sass map.</p>

	<x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
    	<div class="d-grid gap-3">
				<div class="p-2 bg-light border">Grid item 1</div>
				<div class="p-2 bg-light border">Grid item 2</div>
				<div class="p-2 bg-light border">Grid item 3</div>
			</div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
        	&lt;div class="d-grid gap-3"&gt;
					&lt;div class="p-2 bg-light border"&gt;Grid item 1&lt;/div&gt;
					&lt;div class="p-2 bg-light border"&gt;Grid item 2&lt;/div&gt;
					&lt;div class="p-2 bg-light border"&gt;Grid item 3&lt;/div&gt;
					&lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
	<p>Support includes responsive options for all of Bootstrap&rsquo;s grid breakpoints, as well as six sizes from the <code>$spacers</code> map (<code>0</code>–<code>5</code>). There is no <code>.gap-auto</code> utility class as it&rsquo;s effectively the same as <code>.gap-0</code>.</p>
@endsection