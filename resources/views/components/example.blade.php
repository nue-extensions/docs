<div class="card rounded-1">
	<div class="card-header p-2">
		<ul class="nav nav-segment" id="navTab{{ $i }}" role="tablist">
			@isset($preview)
				<li class="nav-item">
					<a class="nav-link active" id="nav-resultTab{{ $i }}" href="#nav-result{{ $i }}" data-bs-toggle="pill" data-bs-target="#nav-result{{ $i }}" role="tab" aria-controls="nav-result{{ $i }}" aria-selected="true">
						<span class="iconify" data-icon="heroicons-solid:eye"></span>
						Preview
					</a>
				</li>
			@endisset
			@isset($code)
				<li class="nav-item">
					<a class="nav-link" id="nav-htmlTab{{ $i }}" href="#nav-html{{ $i }}" data-bs-toggle="pill" data-bs-target="#nav-html{{ $i }}" role="tab" aria-controls="nav-html{{ $i }}" aria-selected="false">
						<span class="iconify" data-icon="heroicons-solid:code"></span>
						HTML
					</a>
				</li>
			@endisset
			@isset($css)
				<li class="nav-item">
					<a class="nav-link" id="nav-cssTab{{ $i }}" href="#nav-css{{ $i }}" data-bs-toggle="pill" data-bs-target="#nav-css{{ $i }}" role="tab" aria-controls="nav-css{{ $i }}" aria-selected="false">
						<span class="iconify" data-icon="fa-brands:css-square"></span>
						CSS
					</a>
				</li>
			@endisset
			@isset($js)
				<li class="nav-item">
					<a class="nav-link" id="nav-jsTab{{ $i }}" href="#nav-js{{ $i }}" data-bs-toggle="pill" data-bs-target="#nav-js{{ $i }}" role="tab" aria-controls="nav-js{{ $i }}" aria-selected="false">
						<span class="iconify" data-icon="fa-brands:js-square"></span>
						JS
					</a>
				</li>
			@endisset
		</ul>
	</div>
	<div class="tab-content" id="navTabContent1">
		@isset($preview)
			<div class="tab-pane fade p-4 show active" id="nav-result{{ $i }}" role="tabpanel" aria-labelledby="nav-resultTab{{ $i }}">
				{!! $preview !!}
			</div>
		@endisset
		@isset($code)
			<div class="tab-pane fade" id="nav-html{{ $i }}" role="tabpanel" aria-labelledby="nav-htmlTab{{ $i }}">
				{!! $code !!}
			</div>
		@endisset
		@isset($css)
			<div class="tab-pane fade" id="nav-css{{ $i }}" role="tabpanel" aria-labelledby="nav-cssTab{{ $i }}">
				{!! $css !!}
			</div>
		@endisset
		@isset($js)
			<div class="tab-pane fade" id="nav-js{{ $i }}" role="tabpanel" aria-labelledby="nav-jsTab{{ $i }}">
				{!! $js !!}
			</div>
		@endisset
	</div>
</div>