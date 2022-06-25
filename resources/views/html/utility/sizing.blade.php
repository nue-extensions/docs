@extends('nue-docs::app')
@section('title', 'Sizing')

@section('content')
	<x-nue::docs::header>
		Sizing
		<x-slot:link>https://getbootstrap.com/docs/5.0/utilities/sizing</x-slot:link>
		<x-slot:label>Dokumentasi Bootstrap Sizing</x-slot:label>
	</x-nue::docs::header>

	<h2 id="relative-to-the-parent" class="nue-docs-heading">
		Relative to the parent <a class="anchorjs-link" href="#relative-to-the-parent" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<pre class="rounded mb-3">
		<code class="language-markup" data-lang="html">
			&lt;div class="w-25"&gt;Width 25%&lt;/div&gt;
			&lt;div class="w-50"&gt;Width 50%&lt;/div&gt;
			&lt;div class="w-75"&gt;Width 75%&lt;/div&gt;
			&lt;div class="w-85"&gt;Width 85%&lt;/div&gt;
			&lt;div class="w-100"&gt;Width 100%&lt;/div&gt;
			&lt;div class="w-auto"&gt;Width auto&lt;/div&gt;
		</code>
	</pre>

	<pre class="rounded mb-7">
		<code class="language-markup" data-lang="html">
			&lt;div class="h-25"&gt;Height 25%&lt;/div&gt;
			&lt;div class="h-50"&gt;Height 50%&lt;/div&gt;
			&lt;div class="h-75"&gt;Height 75%&lt;/div&gt;
			&lt;div class="h-100"&gt;Height 100%&lt;/div&gt;
			&lt;div class="h-auto"&gt;Height auto&lt;/div&gt;
		</code>
	</pre>

	<p>Kamu juga bisa gunain <code>max-width: 100%;</code>, <code>min-height: 100%;</code> dan <code>max-height: 100%;</code> kalau dibutuhkan.</p>

	<pre class="rounded mb-3">
		<code class="language-markup" data-lang="html">
			&lt;div class="mw-100"&gt;Max-width: 100%&lt;/div&gt;
		</code>
	</pre>

	<pre class="rounded mb-3">
		<code class="language-markup" data-lang="html">
			&lt;div class="mh-100"&gt;Max-height: 100%&lt;/div&gt;
		</code>
	</pre>

	<pre class="rounded">
		<code class="language-markup" data-lang="html">
			&lt;div class="min-h-100"&gt;Min-height: 100%&lt;/div&gt;
		</code>
	</pre>

	<h2 id="relative-to-the-viewport" class="nue-docs-heading">
		Relative to the viewport <a class="anchorjs-link" href="#relative-to-the-viewport" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<pre class="rounded mb-7">
		<code class="language-markup" data-lang="html">
			&lt;div class="min-vw-100"&gt;Min-width 100vh&lt;/div&gt;
			&lt;div class="min-vh-100"&gt;Min-height 100vh&lt;/div&gt;

			&lt;div class="min-vw-sm-100"&gt;Min-width 100vh&lt;/div&gt;
			&lt;div class="min-vh-sm-100"&gt;Min-height 100vh&lt;/div&gt;

			&lt;div class="min-vw-md-100"&gt;Min-width 100vh&lt;/div&gt;
			&lt;div class="min-vh-md-100"&gt;Min-height 100vh&lt;/div&gt;

			&lt;div class="min-vw-lg-100"&gt;Min-width 100vh&lt;/div&gt;
			&lt;div class="min-vh-lg-100"&gt;Min-height 100vh&lt;/div&gt;

			&lt;div class="min-vw-xl-100"&gt;Min-width 100vh&lt;/div&gt;
			&lt;div class="min-vh-xl-100"&gt;Min-height 100vh&lt;/div&gt;

			&lt;div class="vw-100"&gt;Width 100vh&lt;/div&gt;

			&lt;div class="vh-30"&gt;Height 30vh&lt;/div&gt;
			&lt;div class="vh-50"&gt;Height 50vh&lt;/div&gt;
			&lt;div class="vh-70"&gt;Height 70vh&lt;/div&gt;
			&lt;div class="vh-100"&gt;Height 100vh&lt;/div&gt;

			&lt;div class="vh-sm-30"&gt;Height 30vh&lt;/div&gt;
			&lt;div class="vh-sm-50"&gt;Height 50vh&lt;/div&gt;
			&lt;div class="vh-sm-70"&gt;Height 70vh&lt;/div&gt;
			&lt;div class="vh-sm-100"&gt;Height 100vh&lt;/div&gt;

			&lt;div class="vh-md-30"&gt;Height 30vh&lt;/div&gt;
			&lt;div class="vh-md-50"&gt;Height 50vh&lt;/div&gt;
			&lt;div class="vh-md-70"&gt;Height 70vh&lt;/div&gt;
			&lt;div class="vh-md-100"&gt;Height 100vh&lt;/div&gt;

			&lt;div class="vh-lg-30"&gt;Height 30vh&lt;/div&gt;
			&lt;div class="vh-lg-50"&gt;Height 50vh&lt;/div&gt;
			&lt;div class="vh-lg-70"&gt;Height 70vh&lt;/div&gt;
			&lt;div class="vh-lg-100"&gt;Height 100vh&lt;/div&gt;

			&lt;div class="vh-xl-30"&gt;Height 30vh&lt;/div&gt;
			&lt;div class="vh-xl-50"&gt;Height 50vh&lt;/div&gt;
			&lt;div class="vh-xl-70"&gt;Height 70vh&lt;/div&gt;
			&lt;div class="vh-xl-100"&gt;Height 100vh&lt;/div&gt;
		</code>
	</pre>
@endsection