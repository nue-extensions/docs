@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Scrollspy')

@section('js')
	<script>
		// INITIALIZATION OF STICKY BLOCKS
    // =======================================================
    new NueStickyBlock('.js-sticky-block', {
      targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
    })

    // INITIALIZATION OF SCROLLSPY
    // =======================================================
    new bootstrap.ScrollSpy(document.body, {
      target: '#navbarSettingsEg2',
      offset: 90
    })

    new NueScrollspy('#navbarVerticalNavMenuEg2', {
      breakpoint: 'lg',
      resetOffset: 'sm'
    })
	</script>
@endsection

@section('content')
  <x-nue::docs::header>
    Scrollspy
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/scrollspy/</x-slot:link>
    <x-slot:label>Bootstrap Scrollspy</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code></p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF SCROLLSPY
          // =======================================================
          new bootstrap.ScrollSpy(document.body, {
            target: '#navbarVerticalNavMenuSettingsEg',
            offset: 10
          })

          new NueScrollspy('#navbarVerticalNavMenuEg', {
            breakpoint: 'lg'
          })
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="how-it-works" class="nue-docs-heading">
    How it works <a class="anchorjs-link" href="#how-it-works" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Scrollspy has a few requirements to function properly:</p>

  <ul>
    <li>Scrollspy requires <code>data-nue-scrollspy-options='{ "target": "#yourID" }'</code> on <code>&lt;body&gt;</code> element and must point to an element with the target <code>ID</code>. And also, add the <code>.js-scrollspy</code> class to the element where this <code>ID</code> is placed.</li>
    <li>Scrollspy requires <code>position: relative;</code> on the element, you’re spying on, usually the <code>&lt;body&gt;</code>.</li>
    <li>When spying on elements other than the <code>&lt;body&gt;</code>, be sure to have a <code>height</code> set and <code>overflow-y: scroll;</code> applied.</li>
    <li>Anchors (<code>&lt;a&gt;</code>) are required and must point to an element with that <code>ID</code>.</li>
  </ul>

  <p>When successfully implemented, your nav or list group will update accordingly, moving the <code>.active</code> class from one item to the next based on their associated targets.</p>

  <h2 id="example" class="nue-docs-heading">
    Example <a class="anchorjs-link" href="#example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="container content-space-1">
        <div class="row">
          <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
            <div class="navbar-expand-md">
              <div class="d-grid">
                <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenuEg2" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenuEg2">
                  <span class="d-flex justify-content-between align-items-center">
                    <span class="text-dark mb-0">Menu</span>

                    <span class="navbar-toggler-default">
                      <i class="bi-list"></i>
                    </span>

                    <span class="navbar-toggler-toggled">
                      <i class="bi-x"></i>
                    </span>
                  </span>
                </button>
              </div>

              <div id="navbarVerticalNavMenuEg2" class="collapse navbar-collapse">
                <ul id="navbarSettingsEg2" class="js-sticky-block js-scrollspy nav nav-tabs nav-link-gray nav-vertical" data-nue-sticky-block-options='{
                     "parentSelector": "#navbarVerticalNavMenuEg2",
                     "targetSelector": "#header",
                     "breakpoint": "md",
                     "startPoint": "#navbarVerticalNavMenuEg2",
                     "endPoint": "#stickyBlockEndPointEg2",
                     "stickyOffsetTop": 20
                   }'>
                  <li class="nav-item">
                    <a class="nav-link active" href="#accountInfo">1. Accounts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#linksToOtherWebsInfo">2. Links to other websites</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#terminationInfo">3. Termination</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#goveringLawInfo">4. Governing law</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#changesInfo">5. Changes</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-8 col-lg-9">
            <div id="accountInfo" class="mb-7">
              <h4>1. Accounts</h4>

              <p>When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.</p>

              <p>You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.</p>

              <p>You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.</p>
            </div>

            <div id="linksToOtherWebsInfo" class="mb-7">
              <h4>2. Links to other websites</h4>

              <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by Front.</p>

              <p>Front has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Front shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>

              <p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
            </div>

            <div id="terminationInfo" class="mb-7">
              <h4>3. Termination</h4>

              <p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>

              <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>

              <p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>

              <p>Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.</p>

              <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
            </div>

            <div id="goveringLawInfo" class="mb-7">
              <h4>4. Governing law</h4>

              <p>These Terms shall be governed and construed in accordance with the laws of Jersey, without regard to its conflict of law provisions.</p>

              <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
            </div>

            <div id="changesInfo" class="mb-7">
              <h4>5. Changes</h4>

              <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>

              <p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
            </div>

            <div id="stickyBlockEndPointEg2"></div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Description --&gt;
          &lt;div class="container content-space-1"&gt;
            &lt;div class="row"&gt;
              &lt;div class="col-md-4 col-lg-3 mb-3 mb-md-0"&gt;
                &lt;!-- Navbar --&gt;
                &lt;div class="navbar-expand-md"&gt;
                  &lt;!-- Navbar Toggle --&gt;
                  &lt;div class="d-grid"&gt;
                    &lt;button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenuEg2" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenuEg2"&gt;
                      &lt;span class="d-flex justify-content-between align-items-center"&gt;
                        &lt;span class="text-dark mb-0"&gt;Menu&lt;/span&gt;

                        &lt;span class="navbar-toggler-default"&gt;
                          &lt;i class="bi-list"&gt;&lt;/i&gt;
                        &lt;/span&gt;

                        &lt;span class="navbar-toggler-toggled"&gt;
                          &lt;i class="bi-x"&gt;&lt;/i&gt;
                        &lt;/span&gt;
                      &lt;/span&gt;
                    &lt;/button&gt;
                  &lt;/div&gt;
                  &lt;!-- End Navbar Toggle --&gt;

                  &lt;!-- Navbar Collapse --&gt;
                  &lt;div id="navbarVerticalNavMenuEg2" class="collapse navbar-collapse"&gt;
                    &lt;ul id="navbarSettingsEg2" class="js-sticky-block js-scrollspy nav nav-tabs nav-link-gray nav-vertical"
                        data-nue-sticky-block-options='{
                         "parentSelector": "#navbarVerticalNavMenuEg2",
                         "targetSelector": "#header",
                         "breakpoint": "md",
                         "startPoint": "#navbarVerticalNavMenuEg2",
                         "endPoint": "#stickyBlockEndPointEg2",
                         "stickyOffsetTop": 20
                       }'&gt;
                      &lt;li class="nav-item"&gt;
                        &lt;a class="nav-link active" href="#content"&gt;1. Accounts&lt;/a&gt;
                      &lt;/li&gt;
                      &lt;li class="nav-item"&gt;
                        &lt;a class="nav-link" href="#linksToOtherWebsInfo"&gt;2. Links to other websites&lt;/a&gt;
                      &lt;/li&gt;
                      &lt;li class="nav-item"&gt;
                        &lt;a class="nav-link" href="#terminationInfo"&gt;3. Termination&lt;/a&gt;
                      &lt;/li&gt;
                      &lt;li class="nav-item"&gt;
                        &lt;a class="nav-link" href="#goveringLawInfo"&gt;4. Governing law&lt;/a&gt;
                      &lt;/li&gt;
                      &lt;li class="nav-item"&gt;
                        &lt;a class="nav-link" href="#changesInfo"&gt;5. Changes&lt;/a&gt;
                      &lt;/li&gt;
                    &lt;/ul&gt;
                  &lt;/div&gt;
                  &lt;!-- End Navbar Collapse --&gt;
                &lt;/div&gt;
                &lt;!-- End Navbar --&gt;
              &lt;/div&gt;
              &lt;!-- End Col --&gt;

              &lt;div class="col-md-8 col-lg-9"&gt;
                &lt;div class="mb-7"&gt;
                  &lt;p&gt;Thanks for using our products and services ("Services"). The Services are provided by Pixeel Ltd. ("Front"), located at 153 Williamson Plaza, Maggieberg, MT 09514, England, United Kingdom.&lt;/p&gt;

                  &lt;p&gt;By using our Services, you are agreeing to these terms. Please read them carefully.&lt;/p&gt;

                  &lt;p&gt;Our Services are very diverse, so sometimes additional terms or product requirements (including age requirements) may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.&lt;/p&gt;
                &lt;/div&gt;

                &lt;div id="accountInfo" class="mb-7"&gt;
                  &lt;h4&gt;1. Accounts&lt;/h4&gt;

                  &lt;p&gt;When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.&lt;/p&gt;

                  &lt;p&gt;You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.&lt;/p&gt;

                  &lt;p&gt;You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.&lt;/p&gt;
                &lt;/div&gt;

                &lt;div id="linksToOtherWebsInfo" class="mb-7"&gt;
                  &lt;h4&gt;2. Links to other websites&lt;/h4&gt;

                  &lt;p&gt;Our Service may contain links to third-party web sites or services that are not owned or controlled by Front.&lt;/p&gt;

                  &lt;p&gt;Front has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Front shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.&lt;/p&gt;

                  &lt;p&gt;We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.&lt;/p&gt;
                &lt;/div&gt;

                &lt;div id="terminationInfo" class="mb-7"&gt;
                  &lt;h4&gt;3. Termination&lt;/h4&gt;

                  &lt;p&gt;We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.&lt;/p&gt;

                  &lt;p&gt;All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.&lt;/p&gt;

                  &lt;p&gt;We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.&lt;/p&gt;

                  &lt;p&gt;Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.&lt;/p&gt;

                  &lt;p&gt;All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.&lt;/p&gt;
                &lt;/div&gt;

                &lt;div id="goveringLawInfo" class="mb-7"&gt;
                  &lt;h4&gt;4. Governing law&lt;/h4&gt;

                  &lt;p&gt;These Terms shall be governed and construed in accordance with the laws of Jersey, without regard to its conflict of law provisions.&lt;/p&gt;

                  &lt;p&gt;Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.&lt;/p&gt;
                &lt;/div&gt;

                &lt;div id="changesInfo" class="mb-7"&gt;
                  &lt;h4&gt;5. Changes&lt;/h4&gt;

                  &lt;p&gt;We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.&lt;/p&gt;

                  &lt;p&gt;By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.&lt;/p&gt;
                &lt;/div&gt;

                &lt;!-- End Sticky End Point --&gt;
                &lt;div id="stickyBlockEndPointEg2"&gt;&lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End Col --&gt;
            &lt;/div&gt;
            &lt;!-- End Row --&gt;
          &lt;/div&gt;
          &lt;!-- End Description --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- JS Plugins Init. --&gt;
          &lt;script&gt;
            (function() {
              // INITIALIZATION OF STICKY BLOCKS
              // =======================================================
              Promise.all(Array.from(document.images)
                .filter(img => !img.complete)
                .map(img => new Promise(resolve => {
                  img.onload = img.onerror = resolve
                })))
                .then(() => {
                  new NueStickyBlock('.js-sticky-block', {
                    targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
                  })
                })


              // INITIALIZATION OF SCROLLSPY
              // =======================================================
              new bootstrap.ScrollSpy(document.body, {
                target: '#navbarSettingsEg2',
                offset: 10
              })

              new NueScrollspy('#navbarVerticalNavMenuEg2', {
                breakpoint: 'lg'
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

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
              <p><code>collapsibleNav</code></p>
            </td>
            <td>Navigation selector to be collapsed before the scroll animation.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>breakpoint</code></p>
            </td>
            <td>Breakpoint navigation.</td>
            <td><code>lg</code></td>
          </tr>

          <tr>
            <td>
              <p><code>resetOffset</code></p>
            </td>
            <td>Disable offset on at a certain resolution.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td>
              <p><code>resolutionsList</code></p>
            </td>
            <td>Resolutions for breakpoint.</td>
            <td><code>{
              xs: 0,
              sm: 576,
              md: 768,
              lg: 992,
              xl: 1200
              }</code></td>
          </tr>

          <tr>
            <td>
              <p><code>scrollspyContainer</code></p>
            </td>
            <td>Element selector for which scrollspy is enabled.</td>
            <td><code>body</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection