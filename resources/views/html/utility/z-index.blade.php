@extends('nue-docs::app')
@section('title', 'Z-Index')

@section('content')
	<x-nue::docs::header>Z-index</x-nue::docs::header>
	
	<p><b>Class</b> ini digunakan untuk membuat menentukan posisi layer. Semakin kecil nilainya, semakin terbelakang posisi layernya.</p>
	<pre class="rounded">
		<code class="language-markup" data-lang="html">
			&lt;div class="zi-n1"&gt;&lt;/div&gt;
			&lt;div class="zi-0"&gt;&lt;/div&gt;
			&lt;div class="zi-1"&gt;&lt;/div&gt;
			&lt;div class="zi-2"&gt;&lt;/div&gt;
			&lt;div class="zi-3"&gt;&lt;/div&gt;
			&lt;div class="zi-99"&gt;&lt;/div&gt;
			&lt;div class="zi-999"&gt;&lt;/div&gt;
		</code>
	</pre>
@endsection