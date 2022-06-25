@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Toasts')

@section('js')
  <script>
    (function() {
      // INITIALIZATION OF LIVE TOAST
      // =======================================================
      const liveToast = new bootstrap.Toast(document.querySelector('#liveToast'))
      document.querySelector('#liveToastBtn').addEventListener('click', () => liveToast.show())
    })()
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Toasts
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/toasts</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Toasts</x-slot:label>
  </x-nue::docs::header>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="toast toast-show fade show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <div class="d-flex align-items-center flex-grow-1">
            <div class="flex-shrink-0">
              <img class="avatar avatar-sm avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt="">
            </div>
            <div class="flex-grow-1 ms-3">
              <h5 class="mb-0">Bob Dean</h5>
              <small class="ms-auto">11 mins ago</small>
            </div>
            <div class="text-end">
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
          </div>
        </div>
        <div class="toast-body">
          Hello, world! This is a toast message.
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Toast --&gt;
          &lt;div class="toast toast-show fade show" role="alert" aria-live="assertive" aria-atomic="true"&gt;
            &lt;div class="toast-header"&gt;
              &lt;div class="d-flex align-items-center flex-grow-1"&gt;
                &lt;div class="flex-shrink-0"&gt;
                  &lt;img class="avatar avatar-sm avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt=""&gt;
                &lt;/div&gt;
                &lt;div class="flex-grow-1 ms-3"&gt;
                  &lt;h5 class="mb-0"&gt;Bob Dean&lt;/h5&gt;
                  &lt;small class="ms-auto"&gt;11 mins ago&lt;/small&gt;
                &lt;/div&gt;
                &lt;div class="text-end"&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="toast-body"&gt;
              Hello, world! This is a toast message.
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Toast --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="live" class="nue-docs-heading">
    Live <a class="anchorjs-link" href="#live" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button id="liveToastBtn" class="btn btn-primary">Toast</button>

      <div id="liveToast" class="position-fixed toast hide" role="alert" aria-live="assertive" aria-atomic="true" style="top: 20px; right: 20px; z-index: 1000;">
        <div class="toast-header">
          <div class="d-flex align-items-center flex-grow-1">
            <div class="flex-shrink-0">
              <img class="avatar avatar-sm avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt="">
            </div>
            <div class="flex-grow-1 ms-3">
              <h5 class="mb-0">Bob Dean</h5>
              <small class="ms-auto">11 mins ago</small>
            </div>
            <div class="text-end">
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
          </div>
        </div>
        <div class="toast-body">
          Hello, world! This is a toast message.
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Toast Luncher --&gt;
          &lt;button id="liveToastBtn" class="btn btn-primary"&gt;Toast&lt;/button&gt;

          &lt;!-- Toast --&gt;
          &lt;div id="liveToast" class="position-fixed toast hide" role="alert" aria-live="assertive" aria-atomic="true" style="top: 20px; right: 20px; z-index: 1000;"&gt;
            &lt;div class="toast-header"&gt;
              &lt;div class="d-flex align-items-center flex-grow-1"&gt;
                &lt;div class="flex-shrink-0"&gt;
                  &lt;img class="avatar avatar-sm avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt=""&gt;
                &lt;/div&gt;
                &lt;div class="flex-grow-1 ms-3"&gt;
                  &lt;h5 class="mb-0"&gt;Bob Dean&lt;/h5&gt;
                  &lt;small class="ms-auto"&gt;11 mins ago&lt;/small&gt;
                &lt;/div&gt;
                &lt;div class="text-end"&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="toast-body"&gt;
              Hello, world! This is a toast message.
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Toast --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
              // INITIALIZATION OF LIVE TOAST
              // =======================================================
              const liveToast = new bootstrap.Toast(document.querySelector('#liveToast'))
              document.querySelector('#liveToastBtn').addEventListener('click', () => liveToast.show())
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="stacking" class="nue-docs-heading">
    Stacking <a class="anchorjs-link" href="#stacking" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="toast-container">
        <div class="toast toast-show fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <div class="d-flex align-items-center flex-grow-1">
              <div class="flex-shrink-0">
                <img class="avatar avatar-sm avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt="">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-0">Bob Dean</h5>
                <small class="ms-auto">11 mins ago</small>
              </div>
              <div class="text-end">
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
            </div>
          </div>
          <div class="toast-body">
            See? Just like this.
          </div>
        </div>

        <div class="toast toast-show fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <div class="d-flex align-items-center flex-grow-1">
              <div class="flex-shrink-0">
                <img class="avatar avatar-sm avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-0">Ella Lauda</h5>
                <small class="ms-auto">20 mins ago</small>
              </div>
              <div class="text-end">
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
            </div>
          </div>
          <div class="toast-body">
            Heads up, toasts will stack automatically
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="toast-container"&gt;
            &lt;!-- Toast --&gt;
            &lt;div class="toast toast-show fade show" role="alert" aria-live="assertive" aria-atomic="true"&gt;
              &lt;div class="toast-header"&gt;
                &lt;div class="d-flex align-items-center flex-grow-1"&gt;
                  &lt;div class="flex-shrink-0"&gt;
                    &lt;img class="avatar avatar-sm avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt=""&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow-1 ms-3"&gt;
                    &lt;h5 class="mb-0"&gt;Bob Dean&lt;/h5&gt;
                    &lt;small class="ms-auto"&gt;11 mins ago&lt;/small&gt;
                  &lt;/div&gt;
                  &lt;div class="text-end"&gt;
                    &lt;button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="toast-body"&gt;
                See? Just like this.
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Toast --&gt;

            &lt;!-- Toast --&gt;
            &lt;div class="toast toast-show fade show" role="alert" aria-live="assertive" aria-atomic="true"&gt;
              &lt;div class="toast-header"&gt;
                &lt;div class="d-flex align-items-center flex-grow-1"&gt;
                  &lt;div class="flex-shrink-0"&gt;
                    &lt;img class="avatar avatar-sm avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt=""&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow-1 ms-3"&gt;
                    &lt;h5 class="mb-0"&gt;Ella Lauda&lt;/h5&gt;
                    &lt;small class="ms-auto"&gt;20 mins ago&lt;/small&gt;
                  &lt;/div&gt;
                  &lt;div class="text-end"&gt;
                    &lt;button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="toast-body"&gt;
                Heads up, toasts will stack automatically
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Toast --&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="placement" class="nue-docs-heading">
    Placement <a class="anchorjs-link" href="#placement" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div class="toast toast-show fade show" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 0; right: 0;">
          <div class="toast-header">
            <div class="d-flex align-items-center flex-grow-1">
              <div class="flex-shrink-0">
                <img class="avatar avatar-sm avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt="">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-0">Bob Dean</h5>
                <small class="ms-auto">11 mins ago</small>
              </div>
              <div class="text-end">
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
            </div>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Toast --&gt;
          &lt;div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;"&gt;
            &lt;div class="toast toast-show fade show" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 0; right: 0;"&gt;
              &lt;div class="toast-header"&gt;
                &lt;div class="d-flex align-items-center flex-grow-1"&gt;
                  &lt;div class="flex-shrink-0"&gt;
                    &lt;img class="avatar avatar-sm avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt=""&gt;
                  &lt;/div&gt;
                  &lt;div class="flex-grow-1 ms-3"&gt;
                    &lt;h5 class="mb-0"&gt;Bob Dean&lt;/h5&gt;
                    &lt;small class="ms-auto"&gt;11 mins ago&lt;/small&gt;
                  &lt;/div&gt;
                  &lt;div class="text-end"&gt;
                    &lt;button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="toast-body"&gt;
                Hello, world! This is a toast message.
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Toast --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection