@extends('nue-docs::app')
@section('title', 'Introduction')

@section('content')
  <div class="row justify-content-md-between align-items-md-center mb-10">
    <div class="col-md-6 col-xl-5">
      <div class="mb-4">
        <h1 class="display-3 mb-3">
          Percepat <span class="text-primary text-highlight-warning">projek</span> mu dengan UI siap pakai.
        </h1>
        <p class="lead">
          Jangan persulit pekerjaanmu dengan memikirkan bentuk dan tampilan yang sebenarnya begitu-begitu juga.
          Gas, pakai yang sudah ada aja.
        </p>
      </div>
      <div class="d-flex flex-wrap gap-2">
        <div class="bg-soft-secondary text-center rounded p-3" style="min-width: 7rem;">
          <span class="text-cap mb-1" style="font-size: 0.75rem;">Bootstrap</span>
          <h2 class="h1 fw-normal mb-0">5.0</h2>
        </div>

        <div class="bg-soft-secondary text-center rounded p-3" style="min-width: 7rem;">
          <span class="text-cap mb-1" style="font-size: 0.75rem;">jQuery</span>
          <h2 class="h1 fw-normal mb-0">3.4</h2>
        </div>

        <div class="bg-soft-secondary text-center rounded p-3" style="min-width: 7rem;">
          <span class="text-cap mb-1" style="font-size: 0.75rem;">Nue UI</span>
          <h2 class="h1 fw-normal mb-0">2.0</h2>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xl-6">
      <img class="img-fluid" src="https://cdn.btekno.id/templates/v2/svg/illustrations/oc-project-development.svg" alt="" data-nue-theme-appearance="default">
      <img class="img-fluid" src="https://cdn.btekno.id/templates/v2/svg/illustrations-light/oc-project-development.svg" alt="" data-nue-theme-appearance="dark">
    </div>
  </div>
@endsection