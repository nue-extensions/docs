@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Accordion')

@section('content')
	<x-nue::docs::header>
		Accordion
		<x-slot:link>https://getbootstrap.com/docs/5.0/components/accordion</x-slot:link>
		<x-slot:label>Dokumentasi Bootstrap Accordion</x-slot:label>
	</x-nue::docs::header>

	<x-nue::docs::example i="{{ ++$i }}">
		<x-slot:preview>
			<div class="accordion" id="accordionExample">
				<div class="accordion-item">
					<div class="accordion-header" id="headingOne">
						<a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Accordion Item #1
						</a>
					</div>
					<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<div class="accordion-header" id="headingTwo">
						<a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Accordion Item #2
						</a>
					</div>
					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<div class="accordion-header" id="headingThree">
						<a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							Accordion Item #3
						</a>
					</div>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
						</div>
					</div>
				</div>
			</div>
		</x-slot:preview>
		<x-slot:code>
			<pre>
				<code class="language-markup" data-lang="html">
					&lt;!-- Accordion --&gt;
					&lt;div class="accordion" id="accordionExample"&gt;
					    &lt;div class="accordion-item"&gt;
					        &lt;div class="accordion-header" id="headingOne"&gt;
					            &lt;a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"&gt;
					                Accordion Item #1
					            &lt;/a&gt;
					        &lt;/div&gt;
					        &lt;div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample"&gt;
					            &lt;div class="accordion-body"&gt;
					                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
					            &lt;/div&gt;
					        &lt;/div&gt;
					    &lt;/div&gt;
					    &lt;div class="accordion-item"&gt;
					        &lt;div class="accordion-header" id="headingTwo"&gt;
					            &lt;a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"&gt;
					                Accordion Item #2
					            &lt;/a&gt;
					        &lt;/div&gt;
					        &lt;div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample"&gt;
					            &lt;div class="accordion-body"&gt;
					                &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
					            &lt;/div&gt;
					        &lt;/div&gt;
					    &lt;/div&gt;
					    &lt;div class="accordion-item"&gt;
					        &lt;div class="accordion-header" id="headingThree"&gt;
					            &lt;a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"&gt;
					                Accordion Item #3
					            &lt;/a&gt;
					        &lt;/div&gt;
					        &lt;div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample"&gt;
					            &lt;div class="accordion-body"&gt;
					                &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
					            &lt;/div&gt;
					        &lt;/div&gt;
					    &lt;/div&gt;
					&lt;/div&gt;
					&lt;!-- End Accordion --&gt;
				</code>
			</pre>
		</x-slot:code>
	</x-nue::docs::example>
@endsection