<div class="docs-page-header">
  <div class="row align-items-center">
    <div class="col-sm">
      <h1 class="docs-page-header-title">{{ $slot }}</h1>
      @isset($description)
        <p class="docs-page-header-text">{{ $description }}</p>
      @endisset
      @isset($link)
        <a class="link" href="{{ $link }}" target="_blank">
          {{ $label }}
          <span class="iconify" data-icon="heroicons-solid:external-link"></span>
        </a>
      @endisset
    </div>
  </div>
</div>