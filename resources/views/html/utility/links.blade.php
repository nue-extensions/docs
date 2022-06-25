@extends('nue-docs::app')
@section('title', 'Links')

@section('content')
	<x-nue::docs::header>
		Links
		<x-slot:link>https://getbootstrap.com/docs/5.0/helpers/colored-links</x-slot:link>
		<x-slot:label>Dokumentasi Bootstrap Links</x-slot:label>
	</x-nue::docs::header>

	<x-nue::docs::example i="1">
		<x-slot:preview>
			<a href="#" class="link-primary me-2">Primary link</a>
			<a href="#" class="link-secondary me-2">Secondary link</a>
			<a href="#" class="link-success me-2">Success link</a>
			<a href="#" class="link-danger me-2">Danger link</a>
			<a href="#" class="link-warning me-2">Warning link</a>
			<a href="#" class="link-info me-2">Info link</a>
			<a href="#" class="link-light me-2">Light link</a>
			<a href="#" class="link-dark me-2">Dark link</a>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;a href="#" class="link-primary"&gt;Primary link&lt;/a&gt;
					&lt;a href="#" class="link-secondary"&gt;Secondary link&lt;/a&gt;
					&lt;a href="#" class="link-success"&gt;Success link&lt;/a&gt;
					&lt;a href="#" class="link-danger"&gt;Danger link&lt;/a&gt;
					&lt;a href="#" class="link-warning"&gt;Warning link&lt;/a&gt;
					&lt;a href="#" class="link-info"&gt;Info link&lt;/a&gt;
					&lt;a href="#" class="link-light"&gt;Light link&lt;/a&gt;
					&lt;a href="#" class="link-dark"&gt;Dark link&lt;/a&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

	<h2 id="link-classes" class="nue-docs-heading">
		Link bold <a class="anchorjs-link" href="#link-classes" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>Tambahkan <code>.link</code> untuk mempertebal font.</p>
	<x-nue::docs::example i="2">
		<x-slot:preview>
			<a href="#" class="link link-primary me-2">Primary link</a>
			<a href="#" class="link link-secondary me-2">Secondary link</a>
			<a href="#" class="link link-success me-2">Success link</a>
			<a href="#" class="link link-danger me-2">Danger link</a>
			<a href="#" class="link link-warning me-2">Warning link</a>
			<a href="#" class="link link-info me-2">Info link</a>
			<a href="#" class="link link-light me-2">Light link</a>
			<a href="#" class="link link-dark me-2">Dark link</a>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;a href="#" class="link link-primary"&gt;Primary link&lt;/a&gt;
					&lt;a href="#" class="link link-secondary"&gt;Secondary link&lt;/a&gt;
					&lt;a href="#" class="link link-success"&gt;Success link&lt;/a&gt;
					&lt;a href="#" class="link link-danger"&gt;Danger link&lt;/a&gt;
					&lt;a href="#" class="link link-warning"&gt;Warning link&lt;/a&gt;
					&lt;a href="#" class="link link-info"&gt;Info link&lt;/a&gt;
					&lt;a href="#" class="link link-light"&gt;Light link&lt;/a&gt;
					&lt;a href="#" class="link link-dark"&gt;Dark link&lt;/a&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

	<h2 id="link-collapse" class="nue-docs-heading">
		Read More (Less) <a class="anchorjs-link" href="#link-collapse" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<x-nue::docs::example i="3">
		<x-slot:preview>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

			<div class="collapse" id="collapseBrand">
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>

			<a class="link-sm link-collapse" href="#collapseBrand" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseBrand">
				<span class="link-collapse-default">Read more</span>
				<span class="link-collapse-active">Read less</span>
			</a>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.&lt;/p&gt;

					&lt;!-- View More - Collapse --&gt;
					&lt;div class="collapse" id="collapseBrand"&gt;
					    Duis aute irure dolor in reprehenderit in voluptate velit esse.
					&lt;/div&gt;
					&lt;!-- End View More - Collapse --&gt;

					&lt;!-- Link --&gt;
					&lt;a class="link-sm link-collapse" href="#collapseBrand" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseBrand"&gt;
					    &lt;span class="link-collapse-default"&gt;Read more&lt;/span&gt;
					    &lt;span class="link-collapse-active"&gt;Read less&lt;/span&gt;
					&lt;/a&gt;
					&lt;!-- End Link --&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

@endsection