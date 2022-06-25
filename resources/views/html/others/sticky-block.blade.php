@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Sticky Block')

@section('js')
@endsection

@section('content')
	<x-nue::docs::header>
    Sticky Block
  </x-nue::docs::header>

	<h2 id="how-to-use" class="nue-docs-heading">
		Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>
  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code></p>

	<pre class="rounded">
		<code class="language-html" data-lang="html">
			&lt;script&gt;
			   (function() {
			      // INITIALIZATION OF STICKY BLOCKS
			      // =======================================================
			      new NueStickyBlock('.js-sticky-block', {
			          targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
			      })
			   });
			&lt;/script&gt;
		</code>
	</pre>

	<h2 id="example" class="nue-docs-heading">
		Example <a class="anchorjs-link" href="#example" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<pre class="rounded">
		<code class="language-markup" data-lang="html">
			&lt;!-- Sticky Block --&gt;
			&lt;div id="stickyBlockStartPoint"&gt;
			  &lt;nav class="js-sticky-block bg-primary rounded"
			    data-nue-sticky-block-options='{
			      "parentSelector": "#stickyBlockStartPoint",
			      "breakpoint": "lg",
			      "startPoint": "#stickyBlockStartPoint",
			      "endPoint": "#stickyBlockEndPoint",
			      "stickyOffsetTop": 20,
			      "stickyOffsetBottom": 20
			    }'&gt;
			      Example text ...
			  &lt;/nav&gt;
			&lt;/div&gt;
			&lt;!-- End Sticky Block --&gt;
			&lt;!-- Sticky Block End Point --&gt;
			&lt;div id="stickyBlockEndPoint"&gt;&lt;/div&gt;
		</code>
	</pre>

	<h2 id="methods" class="nue-docs-heading">
		Methods <a class="anchorjs-link" href="#methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<div class="card">
		<div class="table-responsive">
			<table class="table">
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
							<p><code>parentSelector</code></p>
						</td>
						<td>Defines the parent element</td>
						<td><code>null</code></td>
					</tr>

					<tr>
						<td>
							<p><code>targetSelector</code></p>
						</td>
						<td>Determines the height of which element should be taken into account when calculating the <code>startPoint</code></td>
						<td><code>null</code></td>
					</tr>

					<tr>
						<td>
							<p><code>stickyOffsetTop</code></p>
						</td>
						<td>Determines the distance above the edge of the visible area</td>
						<td><code>0</code></td>
					</tr>

					<tr>
						<td>
							<p><code>stickyOffsetBottom</code></p>
						</td>
						<td>Determines the distance below the edge of the visible area</td>
						<td><code>0</code></td>
					</tr>

					<tr>
						<td>
							<p><code>startPoint</code></p>
						</td>
						<td>Determines upon reaching which block specified in the value, the sticks the block begins to become <code>fixed</code></td>
						<td><code>null</code></td>
					</tr>

					<tr>
						<td>
							<p><code>endPoint</code></p>
						</td>
						<td>Determines upon reaching which block specified in the value, the sticks the block ceases to be <code>fixed</code>. If the stick does not have a breakpoint, then set the value to <code>9999999</code>, that is, the maximum possible page height</td>
						<td><code>null</code></td>
					</tr>

					<tr>
						<td>
							<p><code>breakpoint</code></p>
						</td>
						<td>Determines with what permission the plugin is initialized. Resolution Map corresponds to Bootstrap 4</td>
						<td><code>'lg'</code></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection