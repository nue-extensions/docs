@extends('nue-docs::app')
@section('title', 'Colors')

@section('content')
	<x-nue::docs::header>
		Colors
		<x-slot:link>https://getbootstrap.com/docs/5.0/utilities/colors</x-slot:link>
		<x-slot:label>Dokumentasi Bootstrap Colors</x-slot:label>
	</x-nue::docs::header>

	<h2 id="color" class="nue-docs-heading">
		Color <a class="anchorjs-link" href="#color" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<x-nue::docs::example i="1">
		<x-slot:preview>
			<p class="text-primary">.text-primary</p>
			<p class="text-primary-light">.text-primary-light</p>
			<p class="text-primary-dark">.text-primary-dark</p>
			<p class="text-body">.text-body</p>
			<p class="text-success">.text-success</p>
			<p class="text-danger">.text-danger</p>
			<p class="text-warning">.text-warning</p>
			<p class="text-info">.text-info</p>
			<p class="text-dark">.text-dark</p>
			<p class="text-body">.text-body</p>
			<p class="text-muted">.text-muted</p>
			<p class="text-black-50">.text-black-50</p>
			<p class="text-white bg-dark">.text-white</p>
			<p class="text-white-70 bg-dark">.text-white-70</p>
			<p class="text-white-50 bg-dark">.text-white-50</p>
			<p class="text-reset">.text-reset</p>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;p class="text-primary"&gt;.text-primary&lt;/p&gt;
					&lt;p class="text-primary-light"&gt;.text-primary-light&lt;/p&gt;
					&lt;p class="text-primary-dark"&gt;.text-primary-dark&lt;/p&gt;
					&lt;p class="text-body"&gt;.text-body&lt;/p&gt;
					&lt;p class="text-success"&gt;.text-success&lt;/p&gt;
					&lt;p class="text-danger"&gt;.text-danger&lt;/p&gt;
					&lt;p class="text-warning"&gt;.text-warning&lt;/p&gt;
					&lt;p class="text-info"&gt;.text-info&lt;/p&gt;
					&lt;p class="text-dark"&gt;.text-dark&lt;/p&gt;
					&lt;p class="text-body"&gt;.text-body&lt;/p&gt;
					&lt;p class="text-muted"&gt;.text-muted&lt;/p&gt;
					&lt;p class="text-black-50"&gt;.text-black-50&lt;/p&gt;
					&lt;p class="text-white bg-dark"&gt;.text-white&lt;/p&gt;
					&lt;p class="text-white-70 bg-dark"&gt;.text-white-70&lt;/p&gt;
					&lt;p class="text-white-50 bg-dark"&gt;.text-white-50&lt;/p&gt;
					&lt;p class="text-reset"&gt;.text-reset&lt;/p&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

@endsection