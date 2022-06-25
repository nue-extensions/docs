@extends('nue-docs::app')
@section('title', 'Borders')

@section('content')
	<x-nue::docs::header>
		Borders
		<x-slot:link>https://getbootstrap.com/docs/5.0/utilities/borders</x-slot:link>
		<x-slot:label>Dokumentasi Bootstrap Borders</x-slot:label>
	</x-nue::docs::header>

	<h2 id="additive" class="nue-docs-heading">
		Additive <a class="anchorjs-link" href="#additive" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<x-nue::docs::example i="1">
		<x-slot:preview>
			<span class="border d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border-top d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border-right d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border-bottom d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border-left d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;span class="border"&gt;&lt;/span&gt;
					&lt;span class="border-top"&gt;&lt;/span&gt;
					&lt;span class="border-right"&gt;&lt;/span&gt;
					&lt;span class="border-bottom"&gt;&lt;/span&gt;
					&lt;span class="border-left"&gt;&lt;/span&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

	<h2 id="subtractive" class="nue-docs-heading">
		Subtractive <a class="anchorjs-link" href="#subtractive" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<x-nue::docs::example i="2">
		<x-slot:preview>
			<span class="border-0 d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-top-0 d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-right-0 d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-bottom-0 d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-left-0 d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;span class="border-0"&gt;&lt;/span&gt;
					&lt;span class="border border-top-0"&gt;&lt;/span&gt;
					&lt;span class="border border-right-0"&gt;&lt;/span&gt;
					&lt;span class="border border-bottom-0"&gt;&lt;/span&gt;
					&lt;span class="border border-left-0"&gt;&lt;/span&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

	<h2 id="border-color" class="nue-docs-heading">
		Border color <a class="anchorjs-link" href="#border-color" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<x-nue::docs::example i="3">
		<x-slot:preview>
			<span class="border border-primary d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-secondary d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-success d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-danger d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-warning d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-info d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-light d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-dark d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-white d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-white-10 d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;span class="border border-primary"&gt;&lt;/span&gt;
					&lt;span class="border border-secondary"&gt;&lt;/span&gt;
					&lt;span class="border border-success"&gt;&lt;/span&gt;
					&lt;span class="border border-danger"&gt;&lt;/span&gt;
					&lt;span class="border border-warning"&gt;&lt;/span&gt;
					&lt;span class="border border-info"&gt;&lt;/span&gt;
					&lt;span class="border border-light"&gt;&lt;/span&gt;
					&lt;span class="border border-dark"&gt;&lt;/span&gt;
					&lt;span class="border border-white"&gt;&lt;/span&gt;
					&lt;span class="border border-white-10"&gt;&lt;/span&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

	<h2 id="border-width" class="nue-docs-heading">
		Border width <a class="anchorjs-link" href="#border-width" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<x-nue::docs::example i="4">
		<x-slot:preview>
			<span class="border border-1 d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-2 d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-3 d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-4 d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
			<span class="border border-5 d-inline-block me-1" style="width: 4rem; height: 4rem;"></span>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;span class="border border-1"&gt;&lt;/span&gt;
					&lt;span class="border border-2"&gt;&lt;/span&gt;
					&lt;span class="border border-3"&gt;&lt;/span&gt;
					&lt;span class="border border-4"&gt;&lt;/span&gt;
					&lt;span class="border border-5"&gt;&lt;/span&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

	<h2 id="border-radius" class="nue-docs-heading">
		Border radius <a class="anchorjs-link" href="#border-radius" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<x-nue::docs::example i="5">
		<x-slot:preview>
			<span class="d-inline-block mb-1" style="width: 4rem; height: 4rem;"><img class="img-fluid rounded" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt="Example non-rounded image" /></span>
			<span class="d-inline-block mb-1" style="width: 4rem; height: 4rem;"><img class="img-fluid rounded-top" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt="Example top rounded image" /></span>
			<span class="d-inline-block mb-1" style="width: 4rem; height: 4rem;"><img class="img-fluid rounded-right" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt="Example right rounded image" /></span>
			<span class="d-inline-block mb-1" style="width: 4rem; height: 4rem;"><img class="img-fluid rounded-bottom" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt="Example bottom rounded image" /></span>
			<span class="d-inline-block mb-1" style="width: 4rem; height: 4rem;"><img class="img-fluid rounded-left" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt="Example left rounded image" /></span>
			<span class="d-inline-block mb-1" style="width: 4rem; height: 4rem;"><img class="img-fluid rounded-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt="Completely round image" /></span>
			<span class="d-inline-block mb-1" style="width: 4rem; height: 4rem;"><img class="img-fluid rounded-pill" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="Example pilled image" /></span>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;img class="img-fluid rounded" src="..." alt="Example non-rounded image" /&gt;
					&lt;img class="img-fluid rounded-top" src="..." alt="Example top rounded image" /&gt;
					&lt;img class="img-fluid rounded-right" src="..." alt="Example right rounded image" /&gt;
					&lt;img class="img-fluid rounded-bottom" src="..." alt="Example bottom rounded image" /&gt;
					&lt;img class="img-fluid rounded-left" src="..." alt="Example left rounded image" /&gt;
					&lt;img class="img-fluid rounded-circle" src="..." alt="Completely round image" /&gt;
					&lt;img class="img-fluid rounded-pill" src="..." alt="Example pilled image" /&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

	<h2 id="sizes" class="nue-docs-heading">
		Sizes <a class="anchorjs-link" href="#sizes" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<x-nue::docs::example i="6">
		<x-slot:preview>
			<span class="d-inline-block mb-1" style="width: 4rem; height: 4rem;"><img class="img-fluid rounded-0" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt="Example non-rounded image" /></span>
			<span class="d-inline-block mb-1" style="width: 4rem; height: 4rem;"><img class="img-fluid rounded-1" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt="Example small rounded image" /></span>
			<span class="d-inline-block mb-1" style="width: 4rem; height: 4rem;"><img class="img-fluid rounded-2" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt="Example default rounded image" /></span>
			<span class="d-inline-block mb-1" style="width: 4rem; height: 4rem;"><img class="img-fluid rounded-3" src="https://cdn.btekno.id/templates/nue/img/160x160/img1.jpg" alt="Example large rounded image" /></span>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;img class="img-fluid rounded-0" src="..." alt="Example non-rounded image" /&gt;
					&lt;img class="img-fluid rounded-1" src="..." alt="Example small rounded image" /&gt;
					&lt;img class="img-fluid rounded-2" src="..." alt="Example default rounded image" /&gt;
					&lt;img class="img-fluid rounded-3" src="..." alt="Example large rounded image" /&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>

@endsection