@extends('nue-docs::app')
@section('title', 'Position')

@section('content')
	<x-nue::docs::header>
		Position
		<x-slot:link>https://getbootstrap.com/docs/5.0/utilities/position</x-slot:link>
		<x-slot:label>Dokumentasi Bootstrap Position</x-slot:label>
	</x-nue::docs::header>

	<h2 id="fixed-top" class="nue-docs-heading">
		Fixed top <a class="anchorjs-link" href="#fixed-top" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>Position an element at the top of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add additional CSS.</p>

	<pre class="rounded">
		<code class="language-markup" data-lang="html">
			&lt;div class="fixed-top"&gt;...&lt;/div&gt;
		</code>
	</pre>

	<h2 id="fixed-bottom" class="nue-docs-heading">
		Fixed bottom <a class="anchorjs-link" href="#fixed-bottom" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>Position an element at the bottom of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add additional CSS.</p>

	<pre class="rounded">
		<code class="language-markup" data-lang="html">
			&lt;div class="fixed-bottom"&gt;...&lt;/div&gt;
		</code>
	</pre>

	<h2 id="sticky-top" class="nue-docs-heading">
		Fixed bottom <a class="anchorjs-link" href="#sticky-top" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>Position an element at the top of the viewport, from edge to edge, but only after you scroll past it. The .sticky-top utility uses CSS’s position: sticky, which isn’t fully supported in all browsers.</p>

	<pre class="rounded">
		<code class="language-markup" data-lang="html">
			&lt;div class="sticky-top"&gt;...&lt;/div&gt;
		</code>
	</pre>

	<h2 id="position-values" class="nue-docs-heading">
		Position values <a class="anchorjs-link" href="#position-values" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>Quick positioning classes are available, and they are responsive.</p>

	<pre class="rounded mb-7">
		<code class="language-markup" data-lang="html">
			&lt;div class="position-static"&gt;...&lt;/div&gt;
			&lt;div class="position-relative"&gt;...&lt;/div&gt;
			&lt;div class="position-absolute"&gt;...&lt;/div&gt;
			&lt;div class="position-fixed"&gt;...&lt;/div&gt;
			&lt;div class="position-sticky"&gt;...&lt;/div&gt;

			&lt;div class="position-sm-static"&gt;...&lt;/div&gt;
			&lt;div class="position-sm-relative"&gt;...&lt;/div&gt;
			&lt;div class="position-sm-absolute"&gt;...&lt;/div&gt;
			&lt;div class="position-sm-fixed"&gt;...&lt;/div&gt;
			&lt;div class="position-sm-sticky"&gt;...&lt;/div&gt;

			&lt;div class="position-md-static"&gt;...&lt;/div&gt;
			&lt;div class="position-md-relative"&gt;...&lt;/div&gt;
			&lt;div class="position-md-absolute"&gt;...&lt;/div&gt;
			&lt;div class="position-md-fixed"&gt;...&lt;/div&gt;
			&lt;div class="position-md-sticky"&gt;...&lt;/div&gt;

			&lt;div class="position-lg-static"&gt;...&lt;/div&gt;
			&lt;div class="position-lg-relative"&gt;...&lt;/div&gt;
			&lt;div class="position-lg-absolute"&gt;...&lt;/div&gt;
			&lt;div class="position-lg-fixed"&gt;...&lt;/div&gt;
			&lt;div class="position-lg-sticky"&gt;...&lt;/div&gt;

			&lt;div class="position-xl-static"&gt;...&lt;/div&gt;
			&lt;div class="position-xl-relative"&gt;...&lt;/div&gt;
			&lt;div class="position-xl-absolute"&gt;...&lt;/div&gt;
			&lt;div class="position-xl-fixed"&gt;...&lt;/div&gt;
			&lt;div class="position-xl-sticky"&gt;...&lt;/div&gt;

			&lt;div class="position-xxl-static"&gt;...&lt;/div&gt;
			&lt;div class="position-xxl-relative"&gt;...&lt;/div&gt;
			&lt;div class="position-xxl-absolute"&gt;...&lt;/div&gt;
			&lt;div class="position-xxl-fixed"&gt;...&lt;/div&gt;
			&lt;div class="position-xxl-sticky"&gt;...&lt;/div&gt;
		</code>
	</pre>

	<h2 id="arrange-elements" class="nue-docs-heading">
		Arrange elements <a class="anchorjs-link" href="#arrange-elements" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>Arrange elements easily with the edge positioning utilities. The format is <code>{property}-{position}</code>.</p>

	<p>Where <em>property</em> is one of:</p>

	<ul>
		<li><code>top</code> - for the vertical <code>top</code> position</li>
		<li><code>start</code> - for the horizontal <code>left</code> position (in LTR)</li>
		<li><code>bottom</code> - for the vertical <code>bottom</code> position</li>
		<li><code>end</code> - for the horizontal <code>right</code> position (in LTR)</li>
	</ul>

	<p>Where <em>position</em> is one of:</p>

	<ul>
		<li><code>0</code> - for <code>0</code> edge position</li>
		<li><code>50</code> - for <code>50%</code> edge position</li>
		<li><code>100</code> - for <code>100%</code> edge position</li>
	</ul>

	<p>(You can add more position values by adding entries to the <code>$position-values</code> Sass map variable.)</p>

	<div class="card">
		<div class="card-header">
			<ul class="nav nav-segment" id="navTab1" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="nav-htmlTab1" href="#nav-html1" data-bs-toggle="pill" data-bs-target="#nav-html1" role="tab" aria-controls="nav-html1" aria-selected="true">Preview</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="nav-gulpTab1" href="#nav-gulp1" data-bs-toggle="pill" data-bs-target="#nav-gulp1" role="tab" aria-controls="nav-gulp1" aria-selected="false">HTML</a>
				</li>
			</ul>
		</div>

		<div class="tab-content" id="navTabContent1">
			<div class="tab-pane fade p-4 show active" id="nav-html1" role="tabpanel" aria-labelledby="nav-htmlTab1">
				<div class="position-relative bg-light" style="height: 200px;">
					<div class="position-absolute top-0 start-0" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-0 end-0" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-50 start-50" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute bottom-50 end-50" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute bottom-0 start-0" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute bottom-0 end-0" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
				</div>
			</div>

			<div class="tab-pane fade" id="nav-gulp1" role="tabpanel" aria-labelledby="nav-gulpTab1">
				<pre>
					<code class="language-html" data-lang="html">
						&lt;div class="top-0"&gt;...&lt;/div&gt;
						&lt;div class="right-0"&gt;...&lt;/div&gt;
						&lt;div class="bottom-0"&gt;...&lt;/div&gt;
						&lt;div class="left-0"&gt;...&lt;/div&gt;

						&lt;div class="top-sm-0"&gt;...&lt;/div&gt;
						&lt;div class="right-sm-0"&gt;...&lt;/div&gt;
						&lt;div class="bottom-sm-0"&gt;...&lt;/div&gt;
						&lt;div class="left-sm-0"&gt;...&lt;/div&gt;

						&lt;div class="top-md-0"&gt;...&lt;/div&gt;
						&lt;div class="right-md-0"&gt;...&lt;/div&gt;
						&lt;div class="bottom-md-0"&gt;...&lt;/div&gt;
						&lt;div class="left-md-0"&gt;...&lt;/div&gt;

						&lt;div class="top-lg-0"&gt;...&lt;/div&gt;
						&lt;div class="right-lg-0"&gt;...&lt;/div&gt;
						&lt;div class="bottom-lg-0"&gt;...&lt;/div&gt;
						&lt;div class="left-lg-0"&gt;...&lt;/div&gt;

						&lt;div class="top-xl-0"&gt;...&lt;/div&gt;
						&lt;div class="right-xl-0"&gt;...&lt;/div&gt;
						&lt;div class="bottom-xl-0"&gt;...&lt;/div&gt;
						&lt;div class="left-xl-0"&gt;...&lt;/div&gt;

						&lt;div class="top-xxl-0"&gt;...&lt;/div&gt;
						&lt;div class="right-xxl-0"&gt;...&lt;/div&gt;
						&lt;div class="bottom-xxl-0"&gt;...&lt;/div&gt;
						&lt;div class="left-xxl-0"&gt;...&lt;/div&gt;
					</code>
				</pre>
			</div>
		</div>
	</div>

	<h2 id="center-elements" class="nue-docs-heading">
		Center elements <a class="anchorjs-link" href="#center-elements" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>In addition, you can also center the elements with the transform utility class <code>.translate-middle</code>.</p>

	<p>This class applies the transformations <code>translateX(-50%)</code> and <code>translateY(-50%)</code> to the element which, in combination with the edge positioning utilities, allows you to absolute center an element.</p>

	<div class="card mb-7">
		<div class="card-header">
			<ul class="nav nav-segment" id="navTab2" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="nav-htmlTab2" href="#nav-html2" data-bs-toggle="pill" data-bs-target="#nav-html2" role="tab" aria-controls="nav-html2" aria-selected="true">Preview</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="nav-gulpTab2" href="#nav-gulp2" data-bs-toggle="pill" data-bs-target="#nav-gulp2" role="tab" aria-controls="nav-gulp2" aria-selected="false">HTML</a>
				</li>
			</ul>
		</div>

		<div class="tab-content" id="navTabContent2">
			<div class="tab-pane fade p-4 show active" id="nav-html2" role="tabpanel" aria-labelledby="nav-htmlTab2">
				<div class="position-relative bg-light" style="height: 200px;">
					<div class="position-absolute top-0 start-0 translate-middle" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-0 start-50 translate-middle" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-0 start-100 translate-middle" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-50 start-0 translate-middle" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-50 start-50 translate-middle" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-50 start-100 translate-middle" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-100 start-0 translate-middle" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-100 start-50 translate-middle" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-100 start-100 translate-middle" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
				</div>
			</div>

			<div class="tab-pane fade" id="nav-gulp2" role="tabpanel" aria-labelledby="nav-gulpTab2">
				<pre>
					<code class="language-html" data-lang="html">
						&lt;div class="position-relative"&gt;
						    &lt;div class="position-absolute top-0 start-0 translate-middle"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-0 start-50 translate-middle"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-0 start-100 translate-middle"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-50 start-0 translate-middle"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-50 start-50 translate-middle"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-50 start-100 translate-middle"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-100 start-0 translate-middle"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-100 start-50 translate-middle"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-100 start-100 translate-middle"&gt;&lt;/div&gt;
						&lt;/div&gt;

						&lt;div class="position-relative"&gt;
						    &lt;div class="position-absolute top-sm-0 start-sm-0 translate-middle-sm"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-0 start-sm-50 translate-middle-sm"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-0 start-sm-100 translate-middle-sm"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-50 start-sm-0 translate-middle-sm"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-50 start-sm-50 translate-middle-sm"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-50 start-sm-100 translate-middle-sm"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-100 start-sm-0 translate-middle-sm"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-100 start-sm-50 translate-middle-sm"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-100 start-sm-100 translate-middle-sm"&gt;&lt;/div&gt;
						&lt;/div&gt;

						&lt;div class="position-relative"&gt;
						    &lt;div class="position-absolute top-lg-0 start-lg-0 translate-middle-lg"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-0 start-lg-50 translate-middle-lg"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-0 start-lg-100 translate-middle-lg"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-50 start-lg-0 translate-middle-lg"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-50 start-lg-50 translate-middle-lg"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-50 start-lg-100 translate-middle-lg"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-100 start-lg-0 translate-middle-lg"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-100 start-lg-50 translate-middle-lg"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-100 start-lg-100 translate-middle-lg"&gt;&lt;/div&gt;
						&lt;/div&gt;

						&lt;div class="position-relative"&gt;
						    &lt;div class="position-absolute top-xl-0 start-xl-0 translate-middle-xl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-0 start-xl-50 translate-middle-xl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-0 start-xl-100 translate-middle-xl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-50 start-xl-0 translate-middle-xl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-50 start-xl-50 translate-middle-xl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-50 start-xl-100 translate-middle-xl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-100 start-xl-0 translate-middle-xl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-100 start-xl-50 translate-middle-xl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-100 start-xl-100 translate-middle-xl"&gt;&lt;/div&gt;
						&lt;/div&gt;

						&lt;div class="position-relative"&gt;
						    &lt;div class="position-absolute top-xxl-0 start-xxl-0 translate-middle-xxl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-0 start-xxl-50 translate-middle-xxl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-0 start-xxl-100 translate-middle-xxl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-50 start-xxl-0 translate-middle-xxl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-50 start-xxl-50 translate-middle-xxl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-50 start-xxl-100 translate-middle-xxl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-100 start-xxl-0 translate-middle-xxl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-100 start-xxl-50 translate-middle-xxl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-100 start-xxl-100 translate-middle-xxl"&gt;&lt;/div&gt;
						&lt;/div&gt;
					</code>
				</pre>
			</div>
		</div>
	</div>

	<p>By adding <code>.translate-middle-x</code> or <code>.translate-middle-y</code> classes, elements can be positioned only in horizontal or vertical direction.</p>

	<div class="card mb-7">
		<div class="card-header">
			<ul class="nav nav-segment" id="navTab3" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="nav-htmlTab3" href="#nav-html3" data-bs-toggle="pill" data-bs-target="#nav-html3" role="tab" aria-controls="nav-html3" aria-selected="true">Preview</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="nav-gulpTab3" href="#nav-gulp3" data-bs-toggle="pill" data-bs-target="#nav-gulp3" role="tab" aria-controls="nav-gulp3" aria-selected="false">HTML</a>
				</li>
			</ul>
		</div>

		<div class="tab-content" id="navTabContent3">
			<div class="tab-pane fade p-4 show active" id="nav-html3" role="tabpanel" aria-labelledby="nav-htmlTab3">
				<div class="position-relative bg-light" style="height: 200px;">
					<div class="position-absolute top-0 start-0" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-0 start-50 translate-middle-x" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-0 end-0" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-50 start-0 translate-middle-y" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-50 start-50 translate-middle" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute top-50 end-0 translate-middle-y" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute bottom-0 start-0" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute bottom-0 start-50 translate-middle-x" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
					<div class="position-absolute bottom-0 end-0" style="width: 2em; height: 2em; background-color: #212529; border-radius: .25rem;"></div>
				</div>
			</div>

			<div class="tab-pane fade" id="nav-gulp3" role="tabpanel" aria-labelledby="nav-gulpTab3">
				<pre>
					<code class="language-html" data-lang="html">
						&lt;div class="position-relative"&gt;
						    &lt;div class="position-absolute top-0 start-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-0 start-50 translate-middle-x"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-0 end-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-50 start-0 translate-middle-y"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-50 start-50 translate-middle"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-50 end-0 translate-middle-y"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-0 start-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-0 start-50 translate-middle-x"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-0 end-0"&gt;&lt;/div&gt;
						&lt;/div&gt;

						&lt;div class="position-relative"&gt;
						    &lt;div class="position-absolute top-sm-0 start-sm-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-0 start-sm-50 translate-middle-sm-x"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-0 end-sm-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-50 start-sm-0 translate-middle-sm-y"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-50 start-sm-50 translate-middle-sm"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-sm-50 end-sm-0 translate-middle-sm-y"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-sm-0 start-sm-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-sm-0 start-sm-50 translate-middle-sm-x"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-sm-0 end-sm-0"&gt;&lt;/div&gt;
						&lt;/div&gt;

						&lt;div class="position-relative"&gt;
						    &lt;div class="position-absolute top-lg-0 start-lg-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-0 start-lg-50 translate-middle-lg-x"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-0 end-lg-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-50 start-lg-0 translate-middle-lg-y"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-50 start-lg-50 translate-middle-lg"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-lg-50 end-lg-0 translate-middle-lg-y"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-lg-0 start-lg-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-lg-0 start-lg-50 translate-middle-lg-x"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-lg-0 end-lg-0"&gt;&lt;/div&gt;
						&lt;/div&gt;

						&lt;div class="position-relative"&gt;
						    &lt;div class="position-absolute top-xl-0 start-xl-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-0 start-xl-50 translate-middle-xl-x"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-0 end-xl-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-50 start-xl-0 translate-middle-xl-y"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-50 start-xl-50 translate-middle-xl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xl-50 end-xl-0 translate-middle-xl-y"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-xl-0 start-xl-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-xl-0 start-xl-50 translate-middle-xl-x"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-xl-0 end-xl-0"&gt;&lt;/div&gt;
						&lt;/div&gt;

						&lt;div class="position-relative"&gt;
						    &lt;div class="position-absolute top-xxl-0 start-xxl-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-0 start-xxl-50 translate-middle-xxl-x"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-0 end-xxl-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-50 start-xxl-0 translate-middle-xxl-y"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-50 start-xxl-50 translate-middle-xxl"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute top-xxl-50 end-xxl-0 translate-middle-xxl-y"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-xxl-0 start-xxl-0"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-xxl-0 start-xxl-50 translate-middle-xxl-x"&gt;&lt;/div&gt;
						    &lt;div class="position-absolute bottom-xxl-0 end-xxl-0"&gt;&lt;/div&gt;
						&lt;/div&gt;
					</code>
				</pre>
			</div>
		</div>
	</div>

	<h2 id="examples" class="nue-docs-heading">
		Examples <a class="anchorjs-link" href="#examples" aria-label="Anchor" data-anchorjs-icon="#"></a>
	</h2>

	<p>Here are some real life examples of these classes:</p>

	<div class="card mb-7">
		<div class="card-header">
			<ul class="nav nav-segment" id="navTab4" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="nav-htmlTab4" href="#nav-html4" data-bs-toggle="pill" data-bs-target="#nav-html4" role="tab" aria-controls="nav-html4" aria-selected="true">Preview</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="nav-gulpTab4" href="#nav-gulp4" data-bs-toggle="pill" data-bs-target="#nav-gulp4" role="tab" aria-controls="nav-gulp4" aria-selected="false">HTML</a>
				</li>
			</ul>
		</div>

		<div class="tab-content" id="navTabContent4">
			<div class="tab-pane fade p-4 show active" id="nav-html4" role="tabpanel" aria-labelledby="nav-htmlTab4">
				<div class="d-flex justify-content-around">
					<button type="button" class="btn btn-primary position-relative">
						Mails <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+99 <span class="visually-hidden">unread messages</span></span>
					</button>

					<button type="button" class="btn btn-dark position-relative">
						Marker <svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill" fill="#212529" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
						</svg>
					</button>

					<button type="button" class="btn btn-primary position-relative">
						Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
					</button>
				</div>
			</div>

			<div class="tab-pane fade" id="nav-gulp4" role="tabpanel" aria-labelledby="nav-gulpTab4">
				<pre>
					<code class="language-html" data-lang="html">
						&lt;button type="button" class="btn btn-primary position-relative"&gt;
						    Mails 
						    &lt;span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary"&gt;+99 &lt;span class="visually-hidden"&gt;unread messages&lt;/span&gt;&lt;/span&gt;
						&lt;/button&gt;

						&lt;button type="button" class="btn btn-dark position-relative"&gt;
						    Marker 
						    &lt;svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill" fill="#212529" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/&gt;&lt;/svg&gt;
						&lt;/button&gt;

						&lt;button type="button" class="btn btn-primary position-relative"&gt;
						    Alerts 
						    &lt;span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"&gt;&lt;span class="visually-hidden"&gt;unread messages&lt;/span&gt;&lt;/span&gt;
						&lt;/button&gt;
					</code>
				</pre>
			</div>
		</div>
	</div>

	<p>You can use these classes with existing components to create new ones. Remember that you can extend its functionality by adding entries to the <code>$position-values</code> variable.</p>

	<div class="card">
		<div class="card-header">
			<ul class="nav nav-segment" id="navTab5" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="nav-htmlTab5" href="#nav-html5" data-bs-toggle="pill" data-bs-target="#nav-html5" role="tab" aria-controls="nav-html5" aria-selected="true">Preview</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="nav-gulpTab5" href="#nav-gulp5" data-bs-toggle="pill" data-bs-target="#nav-gulp5" role="tab" aria-controls="nav-gulp5" aria-selected="false">HTML</a>
				</li>
			</ul>
		</div>

		<div class="tab-content" id="navTabContent5">
			<div class="tab-pane fade p-4 show active" id="nav-html5" role="tabpanel" aria-labelledby="nav-htmlTab5">
				<div class="position-relative m-5">
					<div class="progress" style="height: 1px;">
						<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary btn-icon rounded-pill" style="width: 2rem; height:2rem;">1</button>
					<button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary btn-icon rounded-pill" style="width: 2rem; height:2rem;">2</button>
					<button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary btn-icon rounded-pill" style="width: 2rem; height:2rem;">3</button>
				</div>
			</div>

			<div class="tab-pane fade" id="nav-gulp5" role="tabpanel" aria-labelledby="nav-gulpTab5">
				<pre>
					<code class="language-html" data-lang="html">
						&lt;div class="position-relative m-4"&gt;
						    &lt;div class="progress" style="height: 1px;"&gt;
						        &lt;div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
						    &lt;/div&gt;
						    &lt;button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary btn-icon rounded-pill" style="width: 2rem; height:2rem;"&gt;1&lt;/button&gt;
						    &lt;button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary btn-icon rounded-pill" style="width: 2rem; height:2rem;"&gt;2&lt;/button&gt;
						    &lt;button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary btn-icon rounded-pill" style="width: 2rem; height:2rem;"&gt;3&lt;/button&gt;
						&lt;/div&gt;
					</code>
				</pre>
			</div>
		</div>
	</div>
@endsection