@extends('nue-docs::app')
@section('title', 'Backgrounds')

@section('content')
	<x-nue::docs::header>
		Backgrounds
		<x-slot:link>https://getbootstrap.com/docs/5.0/utilities/background</x-slot:link>
		<x-slot:label>Dokumentasi Bootstrap Background</x-slot:label>
	</x-nue::docs::header>

	<x-nue::docs::example i="1">
		<x-slot:preview>
			<div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
			<div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
			<div class="p-3 mb-2 bg-success text-white">.bg-success</div>
			<div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
			<div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
			<div class="p-3 mb-2 bg-info text-white">.bg-info</div>
			<div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
			<div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
			<div class="p-3 mb-2 bg-body text-dark">.bg-body</div>
			<div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
			<div class="p-3 mb-2 bg-transparent text-dark">.bg-transparent</div>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;div class="p-3 mb-2 bg-primary text-white"&gt;.bg-primary&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-secondary text-white"&gt;.bg-secondary&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-success text-white"&gt;.bg-success&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-danger text-white"&gt;.bg-danger&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-warning text-dark"&gt;.bg-warning&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-info text-white"&gt;.bg-info&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-light text-dark"&gt;.bg-light&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-dark text-white"&gt;.bg-dark&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-body text-dark"&gt;.bg-body&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-white text-dark"&gt;.bg-white&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-transparent text-dark"&gt;.bg-transparent&lt;/div&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

	<h2 id="background-soft-color" class="nue-docs-heading">
		Background soft color <a class="anchorjs-link" href="#background-soft-color" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<x-nue::docs::example i="2">
		<x-slot:preview>
			<div class="p-3 mb-2 bg-soft-primary text-primary">.bg-soft-primary</div>
			<div class="p-3 mb-2 bg-soft-primary-light text-primary">.bg-soft-primary-light</div>
			<div class="p-3 mb-2 bg-soft-secondary text-secondary">.bg-soft-secondary</div>
			<div class="p-3 mb-2 bg-soft-success text-success">.bg-soft-success</div>
			<div class="p-3 mb-2 bg-soft-danger text-danger">.bg-soft-danger</div>
			<div class="p-3 mb-2 bg-soft-warning text-warning">.bg-soft-warning</div>
			<div class="p-3 mb-2 bg-soft-info text-info">.bg-soft-info</div>
			<div class="p-3 mb-2 bg-soft-light text-body">.bg-soft-light</div>
			<div class="p-3 mb-2 bg-soft-dark text-dark">.bg-soft-dark</div>
			<div class="p-3 mb-2 bg-soft-body text-body">.bg-soft-body</div>
			<div class="p-3 mb-2 bg-soft-white text-body">.bg-soft-white</div>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;div class="p-3 mb-2 bg-soft-primary text-primary"&gt;.bg-soft-primary&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-soft-primary-light text-primary"&gt;.bg-soft-primary-light&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-soft-secondary text-secondary"&gt;.bg-soft-secondary&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-soft-success text-success"&gt;.bg-soft-success&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-soft-danger text-danger"&gt;.bg-soft-danger&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-soft-warning text-warning"&gt;.bg-soft-warning&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-soft-info text-info"&gt;.bg-soft-info&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-soft-light text-light"&gt;.bg-soft-light&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-soft-dark text-dark"&gt;.bg-soft-dark&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-soft-body text-body"&gt;.bg-soft-body&lt;/div&gt;
					&lt;div class="p-3 mb-2 bg-soft-white text-white"&gt;.bg-soft-white&lt;/div&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

	<h2 id="background-gradient" class="nue-docs-heading">
		Background gradient <a class="anchorjs-link" href="#background-gradient" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<x-nue::docs::example i="3">
		<x-slot:preview>
			<div class="p-3 mb-2 gradient-y-lg-dark text-white">.gradient-y-lg-dark</div>
			<div class="p-3 mb-2 gradient-radial-sm-primary text-body">.gradient-radial-sm-primary</div>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;div class="p-3 mb-2 gradient-y-lg-dark text-white"&gt;.gradient-y-lg-dark&lt;/div&gt;
					&lt;div class="p-3 mb-2 gradient-radial-sm-primary text-white"&gt;.gradient-radial-sm-primary&lt;/div&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

	<h2 id="background-img-hero" class="nue-docs-heading">
		Background image hero <a class="anchorjs-link" href="#background-img-hero" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>Gunakan <code>.bg-img-start</code> untuk fokus posisi dari atas.</p>
	<x-nue::docs::example i="4">
		<x-slot:preview>
			<div class="bg-img-start" style="background-image: url(https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg); height: 250px;"></div>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;div class="bg-img-start" style="background-image: url(...); height: 250px;"&gt;&lt;/div&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

	<br/><br/>
	<p>Gunakan <code>.bg-img-center</code> untuk fokus posisi rata-tengah.</p>
	<x-nue::docs::example i="5">
		<x-slot:preview>
			<div class="bg-img-center" style="background-image: url(https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg); height: 250px;"></div>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;div class="bg-img-center" style="background-image: url(...); height: 250px;"&gt;&lt;/div&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

	<br/><br/>
	<p>Gunakan <code>.bg-img-end</code> untuk fokus posisi dari bawah.</p>
	<x-nue::docs::example i="6">
		<x-slot:preview>
			<div class="bg-img-end" style="background-image: url(https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg); height: 250px;"></div>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;div class="bg-img-start" style="background-image: url(...); height: 250px;"&gt;&lt;/div&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>
@endsection