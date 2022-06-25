@extends('nue-docs::app')
@section('title', 'Shadows')

@section('content')
	<x-nue::docs::header>
		Shadow
		<x-slot:link>https://getbootstrap.com/docs/5.0/utilities/shadows</x-slot:link>
		<x-slot:label>Dokumentasi Bootstrap Shadow</x-slot:label>
	</x-nue::docs::header>

	<x-nue::docs::example i="1">
		<x-slot:preview>
			<div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>
			<div class="shadow-sm p-3 mb-5 bg-white rounded">Small shadow</div>
			<div class="shadow p-3 mb-5 bg-white rounded">Regular shadow</div>
			<div class="shadow-lg p-3 mb-5 bg-white rounded">Larger shadow</div>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;div class="shadow-none p-3 mb-5 bg-light rounded"&gt;No shadow&lt;/div&gt;
					&lt;div class="shadow-sm p-3 mb-5 bg-white rounded"&gt;Small shadow&lt;/div&gt;
					&lt;div class="shadow p-3 mb-5 bg-white rounded"&gt;Regular shadow&lt;/div&gt;
					&lt;div class="shadow-lg p-3 mb-5 bg-white rounded"&gt;Larger shadow&lt;/div&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>
@endsection