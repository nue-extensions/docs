@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Cards')

@section('content')
  <x-nue::docs::header>
    Cards
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/card</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Cards</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card" style="max-width: 20rem;">
        <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">Card title</h3>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">
            <small class="text-muted">Last updated 3 mins ago</small>
          </p>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Card --&gt;
          &lt;div class="card" style="max-width: 20rem;"&gt;
            &lt;img class="card-img-top" src="..." alt="Card image cap"&gt;
            &lt;div class="card-body"&gt;
              &lt;h3 class="card-title"&gt;Card title&lt;/h3&gt;
              &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
              &lt;p class="card-text"&gt;
                &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
              &lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Card --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="titles-text-and-links" class="nue-docs-heading">
    Titles, text, and links <a class="anchorjs-link" href="#titles-text-and-links" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card" style="max-width: 20rem;">
        <div class="card-body">
          <span class="card-subtitle">Card subtitle</span>
          <h3 class="card-title">Card title</h3>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a class="card-link" href="#">Card link</a>
          <a class="card-link" href="#">Another link</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Card --&gt;
          &lt;div class="card" style="max-width: 20rem;"&gt;
            &lt;div class="card-body"&gt;
              &lt;span class="card-subtitle"&gt;Card subtitle&lt;/span&gt;
              &lt;h3 class="card-title"&gt;Card title&lt;/h3&gt;
              &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
              &lt;a class="card-link" href="#"&gt;Card link&lt;/a&gt;
              &lt;a class="card-link" href="#"&gt;Another link&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Card --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="card-header" class="nue-docs-heading">
    Header <a class="anchorjs-link" href="#card-header" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <h3 class="card-header-title">Featured</h3>
          <small class="text-muted">2 days ago</small>
        </div>
        <div class="card-body">
          <h3 class="card-title">Special title treatment</h3>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Card --&gt;
          &lt;div class="card"&gt;
            &lt;div class="card-header"&gt;
              &lt;h3 class="card-header-title"&gt;Featured&lt;/h3&gt;
              &lt;small class="text-muted"&gt;2 days ago&lt;/small&gt;
            &lt;/div&gt;
            &lt;div class="card-body"&gt;
              &lt;h3 class="card-title"&gt;Special title treatment&lt;/h3&gt;
              &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
              &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Card --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="card-header-content-between" class="nue-docs-heading">
    Header content between <a class="anchorjs-link" href="#card-header-content-between" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header card-header-content-md-between">
          <h3 class="card-header-title">Featured</h3>
          <small class="text-muted">2 days ago</small>
        </div>
        <div class="card-body">
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Card --&gt;
          &lt;div class="card"&gt;
            &lt;div class="card-header card-header-content-md-between"&gt;
              &lt;h3 class="card-header-title"&gt;Featured&lt;/h3&gt;
              &lt;small class="text-muted"&gt;2 days ago&lt;/small&gt;
            &lt;/div&gt;
            &lt;div class="card-body"&gt;
              &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Card --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="body" class="nue-docs-heading">
    Body <a class="anchorjs-link" href="#body" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-body">
          This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Card --&gt;
          &lt;div class="card"&gt;
            &lt;div class="card-body"&gt;
              This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Card --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="footer" class="nue-docs-heading">
    Footer <a class="anchorjs-link" href="#footer" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Special title treatment</h3>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer">
          2 days ago
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Card --&gt;
          &lt;div class="card"&gt;
            &lt;div class="card-body"&gt;
              &lt;h3 class="card-title"&gt;Special title treatment&lt;/h3&gt;
              &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
              &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
            &lt;/div&gt;
            &lt;div class="card-footer"&gt;
              2 days ago
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Card --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="sizing" class="nue-docs-heading">
    Sizing <a class="anchorjs-link" href="#sizing" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card card-sm" style="max-width: 20rem;">
        <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">Card title</h3>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">
            <small class="text-muted">Last updated 3 mins ago</small>
          </p>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Card --&gt;
          &lt;div class="card card-sm" style="max-width: 20rem;"&gt;
            &lt;img class="card-img-top" src="..." alt="Card image cap"&gt;
            &lt;div class="card-body"&gt;
              &lt;h3 class="card-title"&gt;Card title&lt;/h3&gt;
              &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
              &lt;p class="card-text"&gt;
                &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
              &lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Card --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card card-lg" style="max-width: 20rem;">
        <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">Card title</h3>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">
            <small class="text-muted">Last updated 3 mins ago</small>
          </p>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Card --&gt;
          &lt;div class="card card-lg" style="max-width: 20rem;"&gt;
            &lt;img class="card-img-top" src="..." alt="Card image cap"&gt;
            &lt;div class="card-body"&gt;
              &lt;h3 class="card-title"&gt;Card title&lt;/h3&gt;
              &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
              &lt;p class="card-text"&gt;
                &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
              &lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Card --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="images" class="nue-docs-heading">
    Images <a class="anchorjs-link" href="#images" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

      <p>Cards include a few options for working with images. Choose from appending "image caps" at either end of a card, overlaying images with card content, or simply embedding the image in a card.</p>

      <h2 id="image-caps" class="nue-docs-heading">
        Image caps <a class="anchorjs-link" href="#image-caps" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Similar to headers and footers, cards can include top and bottom “image caps”—images at the top or bottom of a card.</p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab8" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab8" href="#nav-result8" data-bs-toggle="pill" data-bs-target="#nav-result8" role="tab" aria-controls="nav-result8" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab8" href="#nav-html8" data-bs-toggle="pill" data-bs-target="#nav-html8" role="tab" aria-controls="nav-html8" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent8">
          <div class="tab-pane fade p-4 show active" id="nav-result8" role="tabpanel" aria-labelledby="nav-resultTab8">
            <div class="card mb-3" style="max-width: 20rem;">
              <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html8" role="tabpanel" aria-labelledby="nav-htmlTab8">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card mb-3"&gt;
                  &lt;img class="card-img-top" src="..." alt="Card image cap"&gt;
                  &lt;div class="card-body"&gt;
                    &lt;h3 class="card-title"&gt;Card title&lt;/h3&gt;
                    &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="image-overlays" class="nue-docs-heading">
        Image overlays <a class="anchorjs-link" href="#image-overlays" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Turn an image into a card background and overlay your card’s text. Depending on the image, you may or may not need additional styles or utilities.</p>

      <div class="card mb-3">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab9" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab9" href="#nav-result9" data-bs-toggle="pill" data-bs-target="#nav-result9" role="tab" aria-controls="nav-result9" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab9" href="#nav-html9" data-bs-toggle="pill" data-bs-target="#nav-html9" role="tab" aria-controls="nav-html9" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent9">
          <div class="tab-pane fade p-4 show active" id="nav-result9" role="tabpanel" aria-labelledby="nav-resultTab9">
            <div class="card">
              <img class="card-img card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img7.jpg" alt="Card image cap">
              <div class="card-img-overlay">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html9" role="tabpanel" aria-labelledby="nav-htmlTab9">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card"&gt;
                  &lt;img class="card-img card-img-top" src="..." alt="Card image cap"&gt;
                  &lt;div class="card-img-overlay"&gt;
                    &lt;h3 class="card-title"&gt;Card title&lt;/h3&gt;
                    &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                    &lt;p class="card-text"&gt;Last updated 3 mins ago&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <div class="alert alert-soft-dark" role="alert">
        <span class="fw-semi-bold">Heads up!</span> Note that content should not be larger than the height of the image. If content is larger than the image the content will be displayed outside the image.
      </div>

      <h2 id="horizontal" class="nue-docs-heading">
        Horizontal <a class="anchorjs-link" href="#horizontal" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with <code>.no-gutters</code> and use <code>.col-md-*</code> classes to make the card horizontal at the <code>md</code> breakpoint. Further adjustments may be needed depending on your card content.</p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab10" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab10" href="#nav-result10" data-bs-toggle="pill" data-bs-target="#nav-result10" role="tab" aria-controls="nav-result10" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab10" href="#nav-html10" data-bs-toggle="pill" data-bs-target="#nav-html10" role="tab" aria-controls="nav-html10" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent10">
          <div class="tab-pane fade p-4 show active" id="nav-result10" role="tabpanel" aria-labelledby="nav-resultTab10">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img class="img-fluid" src="https://cdn.btekno.id/templates/nue/img/documentation/img8.jpg" alt="Card image cap">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html10" role="tabpanel" aria-labelledby="nav-htmlTab10">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card mb-3" style="max-width: 540px;"&gt;
                  &lt;div class="row no-gutters"&gt;
                    &lt;div class="col-md-4"&gt;
                      &lt;img class="img-fluid" src="..." alt="Card image cap"&gt;
                    &lt;/div&gt;
                    &lt;div class="col-md-8"&gt;
                      &lt;div class="card-body"&gt;
                        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
                        &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in.&lt;/p&gt;
                        &lt;p class="card-text"&gt;&lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="card-layout" class="nue-docs-heading">
        Card layout <a class="anchorjs-link" href="#card-layout" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>In addition to styling the content within cards, Bootstrap includes a few options for laying out series of cards. For the time being, <span class="fw-semi-bold">these layout options are not yet responsive</span>.</p>

      <h2 id="card-groups" class="nue-docs-heading">
        Card groups <a class="anchorjs-link" href="#card-groups" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Use card groups to render cards as a single, attached element with equal width and height columns. Card groups start off stacked and use <code>display: flex;</code> to become attached with uniform dimensions starting at the <code>sm</code> breakpoint.</p>

      <div class="card mb-7">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab11" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab11" href="#nav-result11" data-bs-toggle="pill" data-bs-target="#nav-result11" role="tab" aria-controls="nav-result11" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab11" href="#nav-html11" data-bs-toggle="pill" data-bs-target="#nav-html11" role="tab" aria-controls="nav-html11" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent11">
          <div class="tab-pane fade p-4 show active" id="nav-result11" role="tabpanel" aria-labelledby="nav-resultTab11">
            <div class="card-group">
              <div class="card">
                <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="Image Description">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img2.jpg" alt="Image Description">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img3.jpg" alt="Image Description">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html11" role="tabpanel" aria-labelledby="nav-htmlTab11">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;div class="card-group"&gt;
                  &lt;div class="card"&gt;
                    &lt;img class="card-img-top" src="..." alt="Image Description"&gt;
                    &lt;div class="card-body"&gt;
                      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
                      &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                      &lt;p class="card-text"&gt;&lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="card"&gt;
                    &lt;img class="card-img-top" src="..." alt="Image Description"&gt;
                    &lt;div class="card-body"&gt;
                      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
                      &lt;p class="card-text"&gt;This card has supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                      &lt;p class="card-text"&gt;&lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="card"&gt;
                    &lt;img class="card-img-top" src="..." alt="Image Description"&gt;
                    &lt;div class="card-body"&gt;
                      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
                      &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.&lt;/p&gt;
                      &lt;p class="card-text"&gt;&lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <p>When using card groups with footers, their content will automatically line up.</p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab12" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab12" href="#nav-result12" data-bs-toggle="pill" data-bs-target="#nav-result12" role="tab" aria-controls="nav-result12" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab12" href="#nav-html12" data-bs-toggle="pill" data-bs-target="#nav-html12" role="tab" aria-controls="nav-html12" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent12">
          <div class="tab-pane fade p-4 show active" id="nav-result12" role="tabpanel" aria-labelledby="nav-resultTab12">
            <div class="card-group">
              <div class="card">
                <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="Image Description">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img2.jpg" alt="Image Description">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img3.jpg" alt="Image Description">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html12" role="tabpanel" aria-labelledby="nav-htmlTab12">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;div class="card-group"&gt;
                  &lt;div class="card"&gt;
                    &lt;img class="card-img-top" src="..." alt="Image Description"&gt;
                    &lt;div class="card-body"&gt;
                      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
                      &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="card-footer"&gt;
                      &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="card"&gt;
                    &lt;img class="card-img-top" src="..." alt="Image Description"&gt;
                    &lt;div class="card-body"&gt;
                      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
                      &lt;p class="card-text"&gt;This card has supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="card-footer"&gt;
                      &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="card"&gt;
                    &lt;img class="card-img-top" src="..." alt="Image Description"&gt;
                    &lt;div class="card-body"&gt;
                      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
                      &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="card-footer"&gt;
                      &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="card-transition" class="nue-docs-heading">
        Card transition <a class="anchorjs-link" href="#card-transition" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Add animation on hover using <code>.card-transition</code></p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab13" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab13" href="#nav-result13" data-bs-toggle="pill" data-bs-target="#nav-result13" role="tab" aria-controls="nav-result13" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab13" href="#nav-html13" data-bs-toggle="pill" data-bs-target="#nav-html13" role="tab" aria-controls="nav-html13" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent13">
          <div class="tab-pane fade p-4 show active" id="nav-result13" role="tabpanel" aria-labelledby="nav-resultTab13">
            <a class="card card-transition" href="#" style="max-width: 20rem;">
              <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="Image Description">
              <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text text-body">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </a>
          </div>

          <div class="tab-pane fade" id="nav-html13" role="tabpanel" aria-labelledby="nav-htmlTab13">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;a class="card card-transition" href="#"&gt;
                  &lt;img class="card-img-top" src="..." alt="Image Description"&gt;
                  &lt;div class="card-body"&gt;
                    &lt;h3 class="card-title"&gt;Card title&lt;/h3&gt;
                    &lt;p class="card-text text-body"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                  &lt;/div&gt;
                  &lt;div class="card-footer"&gt;
                    &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="card-ghost" class="nue-docs-heading">
        Card ghost <a class="anchorjs-link" href="#card-ghost" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Need a card that has no box-shadow and border colors? Use <code>.card-ghost</code></p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab14" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab14" href="#nav-result14" data-bs-toggle="pill" data-bs-target="#nav-result14" role="tab" aria-controls="nav-result14" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab14" href="#nav-html14" data-bs-toggle="pill" data-bs-target="#nav-html14" role="tab" aria-controls="nav-html14" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent14">
          <div class="tab-pane fade p-4 show active" id="nav-result14" role="tabpanel" aria-labelledby="nav-resultTab14">
            <div class="row">
              <div class="col-md-4">
                <div class="card card-bordered h-100">
                  <div class="card-body">
                    <h3>Billing address #1</h3>

                    <address class="text-body">
                      45 Roker Terrace<br>
                      Latheronwheel<br>
                      KW5 8NW, London<br>
                      UK <img class="avatar avatar-xss avatar-circle me-1" src="https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Great Britain Flag">
                    </address>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card card-bordered h-100">
                  <div class="card-body">
                    <h3>Billing address #2</h3>

                    <address class="text-body">
                      27 Thornton St<br>
                      Hundleby<br>
                      PE23 0ZJ, Manchester<br>
                      UK <img class="avatar avatar-xss avatar-circle me-1" src="https://cdn.btekno.id/templates/nue/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Great Britain Flag">
                    </address>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <a class="card card-ghost card-centered h-100" href="#">
                  <div class="card-body">
                    <div class="mb-2">
                      <i class="bi-building fs-2"></i>
                    </div>
                    Add a new address
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html14" role="tabpanel" aria-labelledby="nav-htmlTab14">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;div class="row"&gt;
                  &lt;div class="col-md-4"&gt;
                    &lt;!-- Card --&gt;
                    &lt;div class="card card-bordered h-100"&gt;
                      &lt;div class="card-body"&gt;
                        &lt;h3&gt;Billing address #1&lt;/h3&gt;

                        &lt;address class="text-body"&gt;
                          45 Roker Terrace&lt;br&gt;
                          Latheronwheel&lt;br&gt;
                          KW5 8NW, London&lt;br&gt;
                          UK &lt;img class="avatar avatar-xss avatar-circle me-1" src="../node_modules/flag-icon-css/flags/1x1/gb.svg" alt="Great Britain Flag"&gt;
                        &lt;/address&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Card --&gt;
                  &lt;/div&gt;
                  &lt;!-- End Col --&gt;

                  &lt;div class="col-md-4"&gt;
                    &lt;!-- Card --&gt;
                    &lt;div class="card card-bordered h-100"&gt;
                      &lt;div class="card-body"&gt;
                        &lt;h3&gt;Billing address #2&lt;/h3&gt;

                        &lt;address class="text-body"&gt;
                          27 Thornton St&lt;br&gt;
                          Hundleby&lt;br&gt;
                          PE23 0ZJ, Manchester&lt;br&gt;
                          UK &lt;img class="avatar avatar-xss avatar-circle me-1" src="../node_modules/flag-icon-css/flags/1x1/gb.svg" alt="Great Britain Flag"&gt;
                        &lt;/address&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Card --&gt;
                  &lt;/div&gt;
                  &lt;!-- End Col --&gt;

                  &lt;div class="col-md-4"&gt;
                    &lt;!-- Card --&gt;
                    &lt;a class="card card-ghost card-centered h-100" href="#"&gt;
                      &lt;div class="card-body"&gt;
                        &lt;div class="mb-2"&gt;
                          &lt;i class="bi-building fs-2"&gt;&lt;/i&gt;
                        &lt;/div&gt;
                        Add a new address
                      &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;!-- End Card --&gt;
                  &lt;/div&gt;
                  &lt;!-- End Col --&gt;
                &lt;/div&gt;
                &lt;!-- End Row --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="card-dashed" class="nue-docs-heading">
        Card dashed <a class="anchorjs-link" href="#card-dashed" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Use <code>.card-dashed</code></p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab15" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab15" href="#nav-result15" data-bs-toggle="pill" data-bs-target="#nav-result15" role="tab" aria-controls="nav-result15" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab15" href="#nav-html15" data-bs-toggle="pill" data-bs-target="#nav-html15" role="tab" aria-controls="nav-html15" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent15">
          <div class="tab-pane fade p-4 show active" id="nav-result15" role="tabpanel" aria-labelledby="nav-resultTab15">
            <div class="card card-dashed shadow-none" style="max-width: 20rem;">
              <div class="card-body text-center">
                <div class="mb-2">
                  <i class="bi-building fs-2"></i>
                </div>
                This is a card with dashed border style
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html15" role="tabpanel" aria-labelledby="nav-htmlTab15">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card card-dashed shadow-none"&gt;
                  &lt;div class="card-body text-center"&gt;
                    &lt;div class="mb-2"&gt;
                      &lt;i class="bi-building fs-2"&gt;&lt;/i&gt;
                    &lt;/div&gt;
                    This is a card with dashed border style
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="card-pinned" class="nue-docs-heading">
        Card pinned <a class="anchorjs-link" href="#card-pinned" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Need to place a component on top of a card image? Use <code>.card-pinned-top-start</code></p>

      <div class="card mb-7">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab16" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab16" href="#nav-result16" data-bs-toggle="pill" data-bs-target="#nav-result16" role="tab" aria-controls="nav-result16" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab16" href="#nav-html16" data-bs-toggle="pill" data-bs-target="#nav-html16" role="tab" aria-controls="nav-html16" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent16">
          <div class="tab-pane fade p-4 show active" id="nav-result16" role="tabpanel" aria-labelledby="nav-resultTab16">
            <div class="card h-100" style="max-width: 20rem;">
              <div class="card-pinned">
                <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="Image Description">

                <span class="card-pinned-top-start">
                  <span class="badge bg-primary rounded-pill">Top start aligned</span>
                </span>
              </div>

              <div class="card-body">
                <h3 class="card-title"><a class="text-dark" href="#">Objects and dimensions</a></h3>
                <p class="card-text">Learn the simplest way to select the object and change dimensions.</p>
              </div>

              <div class="card-footer">
                <a class="card-link" href="#">Learn more <i class="bi-chevron-right small ms-1"></i></a>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html16" role="tabpanel" aria-labelledby="nav-htmlTab16">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card h-100" style="max-width: 20rem;"&gt;
                  &lt;div class="card-pinned"&gt;
                    &lt;img class="card-img-top" src="..." alt="Image Description"&gt;

                    &lt;span class="card-pinned-top-start"&gt;
                      &lt;span class="badge bg-primary rounded-pill"&gt;Top start aligned&lt;/span&gt;
                    &lt;/span&gt;
                  &lt;/div&gt;

                  &lt;div class="card-body"&gt;
                    &lt;h3 class="card-title"&gt;&lt;a class="text-dark" href="#"&gt;Objects and dimensions&lt;/a&gt;&lt;/h3&gt;
                    &lt;p class="card-text"&gt;Learn the simplest way to select the object and change dimensions.&lt;/p&gt;
                  &lt;/div&gt;

                  &lt;div class="card-footer"&gt;
                    &lt;a class="card-link" href="#"&gt;Learn more &lt;i class="bi-chevron-right small ms-1"&gt;&lt;/i&gt;&lt;/a&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <p>or <code>.card-pinned-top-end</code></p>

      <div class="card mb-7">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab17" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab17" href="#nav-result17" data-bs-toggle="pill" data-bs-target="#nav-result17" role="tab" aria-controls="nav-result17" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab17" href="#nav-html17" data-bs-toggle="pill" data-bs-target="#nav-html17" role="tab" aria-controls="nav-html17" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent17">
          <div class="tab-pane fade p-4 show active" id="nav-result17" role="tabpanel" aria-labelledby="nav-resultTab17">
            <div class="card h-100" style="max-width: 20rem;">
              <div class="card-pinned">
                <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="Image Description">

                <span class="card-pinned-top-end">
                  <span class="badge bg-primary rounded-pill">Top end aligned</span>
                </span>
              </div>

              <div class="card-body">
                <h3 class="card-title"><a class="text-dark" href="#">Objects and dimensions</a></h3>
                <p class="card-text">Learn the simplest way to select the object and change dimensions.</p>
              </div>

              <div class="card-footer">
                <a class="card-link" href="#">Learn more <i class="bi-chevron-right small ms-1"></i></a>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html17" role="tabpanel" aria-labelledby="nav-htmlTab17">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card h-100" style="max-width: 20rem;"&gt;
                  &lt;div class="card-pinned"&gt;
                    &lt;img class="card-img-top" src="..." alt="Image Description"&gt;

                    &lt;span class="card-pinned-top-end"&gt;
                      &lt;span class="badge bg-primary rounded-pill"&gt;Top end aligned&lt;/span&gt;
                    &lt;/span&gt;
                  &lt;/div&gt;

                  &lt;div class="card-body"&gt;
                    &lt;h3 class="card-title"&gt;&lt;a class="text-dark" href="#"&gt;Objects and dimensions&lt;/a&gt;&lt;/h3&gt;
                    &lt;p class="card-text"&gt;Learn the simplest way to select the object and change dimensions.&lt;/p&gt;
                  &lt;/div&gt;

                  &lt;div class="card-footer"&gt;
                    &lt;a class="card-link" href="#"&gt;Learn more &lt;i class="bi-chevron-right small ms-1"&gt;&lt;/i&gt;&lt;/a&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <p>or <code>.card-pinned-bottom-start</code></p>

      <div class="card mb-7">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab18" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab18" href="#nav-result18" data-bs-toggle="pill" data-bs-target="#nav-result18" role="tab" aria-controls="nav-result18" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab18" href="#nav-html18" data-bs-toggle="pill" data-bs-target="#nav-html18" role="tab" aria-controls="nav-html18" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent18">
          <div class="tab-pane fade p-4 show active" id="nav-result18" role="tabpanel" aria-labelledby="nav-resultTab18">
            <div class="card h-100" style="max-width: 20rem;">
              <div class="card-pinned">
                <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="Image Description">

                <span class="card-pinned-bottom-start">
                  <span class="badge bg-primary rounded-pill">Top start aligned</span>
                </span>
              </div>

              <div class="card-body">
                <h3 class="card-title"><a class="text-dark" href="#">Objects and dimensions</a></h3>
                <p class="card-text">Learn the simplest way to select the object and change dimensions.</p>
              </div>

              <div class="card-footer">
                <a class="card-link" href="#">Learn more <i class="bi-chevron-right small ms-1"></i></a>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html18" role="tabpanel" aria-labelledby="nav-htmlTab18">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card h-100" style="max-width: 20rem;"&gt;
                  &lt;div class="card-pinned"&gt;
                    &lt;img class="card-img-top" src="..." alt="Image Description"&gt;

                    &lt;span class="card-pinned-bottom-start"&gt;
                      &lt;span class="badge bg-primary rounded-pill"&gt;Top start aligned&lt;/span&gt;
                    &lt;/span&gt;
                  &lt;/div&gt;

                  &lt;div class="card-body"&gt;
                    &lt;h3 class="card-title"&gt;&lt;a class="text-dark" href="#"&gt;Objects and dimensions&lt;/a&gt;&lt;/h3&gt;
                    &lt;p class="card-text"&gt;Learn the simplest way to select the object and change dimensions.&lt;/p&gt;
                  &lt;/div&gt;

                  &lt;div class="card-footer"&gt;
                    &lt;a class="card-link" href="#"&gt;Learn more &lt;i class="bi-chevron-right small ms-1"&gt;&lt;/i&gt;&lt;/a&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <p>or <code>.card-pinned-bottom-end</code></p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab19" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab19" href="#nav-result19" data-bs-toggle="pill" data-bs-target="#nav-result19" role="tab" aria-controls="nav-result19" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab19" href="#nav-html19" data-bs-toggle="pill" data-bs-target="#nav-html19" role="tab" aria-controls="nav-html19" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent19">
          <div class="tab-pane fade p-4 show active" id="nav-result19" role="tabpanel" aria-labelledby="nav-resultTab19">
            <div class="card h-100" style="max-width: 20rem;">
              <div class="card-pinned">
                <img class="card-img-top" src="https://cdn.btekno.id/templates/nue/img/documentation/img1.jpg" alt="Image Description">

                <span class="card-pinned-bottom-end">
                  <span class="badge bg-primary rounded-pill">Top end aligned</span>
                </span>
              </div>

              <div class="card-body">
                <h3 class="card-title"><a class="text-dark" href="#">Objects and dimensions</a></h3>
                <p class="card-text">Learn the simplest way to select the object and change dimensions.</p>
              </div>

              <div class="card-footer">
                <a class="card-link" href="#">Learn more <i class="bi-chevron-right small ms-1"></i></a>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html19" role="tabpanel" aria-labelledby="nav-htmlTab19">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card h-100" style="max-width: 20rem;"&gt;
                  &lt;div class="card-pinned"&gt;
                    &lt;img class="card-img-top" src="..." alt="Image Description"&gt;

                    &lt;span class="card-pinned-bottom-end"&gt;
                      &lt;span class="badge bg-primary rounded-pill"&gt;Top end aligned&lt;/span&gt;
                    &lt;/span&gt;
                  &lt;/div&gt;

                  &lt;div class="card-body"&gt;
                    &lt;h3 class="card-title"&gt;&lt;a class="text-dark" href="#"&gt;Objects and dimensions&lt;/a&gt;&lt;/h3&gt;
                    &lt;p class="card-text"&gt;Learn the simplest way to select the object and change dimensions.&lt;/p&gt;
                  &lt;/div&gt;

                  &lt;div class="card-footer"&gt;
                    &lt;a class="card-link" href="#"&gt;Learn more &lt;i class="bi-chevron-right small ms-1"&gt;&lt;/i&gt;&lt;/a&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="alert" class="nue-docs-heading">
        Alert <a class="anchorjs-link" href="#alert" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Use <code>.card-alert</code> with <code>alert</code> to remove the <code>border-radius</code> and <code>margin-bottom</code> to perfectly sit within a card body.</p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab20" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab20" href="#nav-result20" data-bs-toggle="pill" data-bs-target="#nav-result20" role="tab" aria-controls="nav-result20" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab20" href="#nav-html20" data-bs-toggle="pill" data-bs-target="#nav-html20" role="tab" aria-controls="nav-html20" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent20">
          <div class="tab-pane fade p-4 show active" id="nav-result20" role="tabpanel" aria-labelledby="nav-resultTab20">
            <div class="card">
              <div class="card-header">
                <h3 class="card-header-title">Featured</h3>
                <small class="text-muted">2 days ago</small>
              </div>

              <div class="alert alert-soft-dark card-alert text-center" role="alert">
                We need permission from your browser to show notifications. <a class="alert-link" href="#">Request permission</a>
              </div>

              <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html20" role="tabpanel" aria-labelledby="nav-htmlTab20">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card"&gt;
                  &lt;div class="card-header"&gt;
                    &lt;h3 class="card-header-title"&gt;Featured&lt;/h3&gt;
                    &lt;small class="text-muted"&gt;2 days ago&lt;/small&gt;
                  &lt;/div&gt;

                  &lt;div class="card-body"&gt;
                    &lt;h3 class="card-title"&gt;Card title&lt;/h3&gt;
                    &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                    &lt;p class="card-text"&gt;
                      &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
                    &lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="table" class="nue-docs-heading">
        Table <a class="anchorjs-link" href="#table" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p><code>.card-table</code> aligns table sizes with card body sizes.</p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab21" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab21" href="#nav-result21" data-bs-toggle="pill" data-bs-target="#nav-result21" role="tab" aria-controls="nav-result21" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab21" href="#nav-html21" data-bs-toggle="pill" data-bs-target="#nav-html21" role="tab" aria-controls="nav-html21" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent21">
          <div class="tab-pane fade p-4 show active" id="nav-result21" role="tabpanel" aria-labelledby="nav-resultTab21">
            <div class="card">
              <div class="card-header">
                <h4 class="card-header-title">Users</h4>
              </div>

              <div class="table-responsive">
                <table class="table table-nowrap table-align-middle">
                  <thead class="thead-light">
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Country</th>
                      <th>Status</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>
                        <a class="d-flex" href="../user-profile.html">
                          <div class="flex-shrink-0">
                            <div class="avatar avatar-circle">
                              <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="Image Description">
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                            <span class="d-block font-size-sm text-body">amanda@example.com</span>
                          </div>
                        </a>
                      </td>
                      <td>
                        <span class="d-block h5 mb-0">Director</span>
                        <span class="d-block font-size-sm">Human resources</span>
                      </td>
                      <td>United Kingdom</td>
                      <td>
                        <span class="legend-indicator bg-success"></span>Active
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <a class="d-flex" href="../user-profile.html">
                          <div class="flex-shrink-0">
                            <div class="avatar avatar-soft-primary avatar-circle">
                              <span class="avatar-initials">A</span>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <span class="d-block h5 text-inherit mb-0">Anne Richard</span>
                            <span class="d-block font-size-sm text-body">anne@example.com</span>
                          </div>
                        </a>
                      </td>
                      <td>
                        <span class="d-block h5 mb-0">Seller</span>
                        <span class="d-block font-size-sm">Branding products</span>
                      </td>
                      <td>United States</td>
                      <td>
                        <span class="legend-indicator bg-warning"></span>Pending
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <a class="d-flex" href="../user-profile.html">
                          <div class="flex-shrink-0">
                            <div class="avatar avatar-circle">
                              <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="Image Description">
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                            <span class="d-block font-size-sm text-body">david@example.com</span>
                          </div>
                        </a>
                      </td>
                      <td>
                        <span class="d-block h5 mb-0">Unknown</span>
                        <span class="d-block font-size-sm">Unknown</span>
                      </td>
                      <td>United States</td>
                      <td>
                        <span class="legend-indicator bg-success"></span>Active
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <a class="d-flex" href="../user-profile.html">
                          <div class="flex-shrink-0">
                            <div class="avatar avatar-circle">
                              <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="Image Description">
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                            <span class="d-block font-size-sm text-body">finch@example.com</span>
                          </div>
                        </a>
                      </td>
                      <td>
                        <span class="d-block h5 mb-0">Designer</span>
                        <span class="d-block font-size-sm">IT department</span>
                      </td>
                      <td>Argentina</td>
                      <td>
                        <span class="legend-indicator bg-danger"></span>Suspended
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <a class="d-flex" href="../user-profile.html">
                          <div class="flex-shrink-0">
                            <div class="avatar avatar-soft-dark avatar-circle">
                              <span class="avatar-initials">B</span>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                            <span class="d-block font-size-sm text-body">bob@example.com</span>
                          </div>
                        </a>
                      </td>
                      <td>
                        <span class="d-block h5 mb-0">Executive director</span>
                        <span class="d-block font-size-sm">Marketing</span>
                      </td>
                      <td>Austria</td>
                      <td>
                        <span class="legend-indicator bg-success"></span>Active
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html21" role="tabpanel" aria-labelledby="nav-htmlTab21">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card"&gt;
                  &lt;div class="card-header"&gt;
                    &lt;h4 class="card-header-title"&gt;Users&lt;/h4&gt;
                  &lt;/div&gt;

                  &lt;!-- Table --&gt;
                  &lt;div class="table-responsive"&gt;
                    &lt;table class="table table-nowrap table-align-middle"&gt;
                      &lt;thead class="thead-light"&gt;
                        &lt;tr&gt;
                          &lt;th&gt;Name&lt;/th&gt;
                          &lt;th&gt;Position&lt;/th&gt;
                          &lt;th&gt;Country&lt;/th&gt;
                          &lt;th&gt;Status&lt;/th&gt;
                        &lt;/tr&gt;
                      &lt;/thead&gt;

                      &lt;tbody&gt;
                        &lt;tr&gt;
                          &lt;td&gt;
                            &lt;a class="d-flex" href="../user-profile.html"&gt;
                              &lt;div class="flex-shrink-0"&gt;
                                &lt;div class="avatar avatar-circle"&gt;
                                  &lt;img class="avatar-img" src="..." alt="Image Description"&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                              &lt;div class="flex-grow-1 ms-3"&gt;
                                &lt;span class="d-block h5 text-inherit mb-0"&gt;Amanda Harvey &lt;i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-placement="top" title="Top endorsed"&gt;&lt;/i&gt;&lt;/span&gt;
                                &lt;span class="d-block font-size-sm text-body"&gt;amanda@example.com&lt;/span&gt;
                              &lt;/div&gt;
                            &lt;/a&gt;
                          &lt;/td&gt;
                          &lt;td&gt;
                            &lt;span class="d-block h5 mb-0"&gt;Director&lt;/span&gt;
                            &lt;span class="d-block font-size-sm"&gt;Human resources&lt;/span&gt;
                          &lt;/td&gt;
                          &lt;td&gt;United Kingdom&lt;/td&gt;
                          &lt;td&gt;
                            &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                          &lt;/td&gt;
                        &lt;/tr&gt;

                        &lt;tr&gt;
                          &lt;td&gt;
                            &lt;a class="d-flex" href="../user-profile.html"&gt;
                              &lt;div class="flex-shrink-0"&gt;
                                &lt;div class="avatar avatar-soft-primary avatar-circle"&gt;
                                  &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                              &lt;div class="flex-grow-1 ms-3"&gt;
                                &lt;span class="d-block h5 text-inherit mb-0"&gt;Anne Richard&lt;/span&gt;
                                &lt;span class="d-block font-size-sm text-body"&gt;anne@example.com&lt;/span&gt;
                              &lt;/div&gt;
                            &lt;/a&gt;
                          &lt;/td&gt;
                          &lt;td&gt;
                            &lt;span class="d-block h5 mb-0"&gt;Seller&lt;/span&gt;
                            &lt;span class="d-block font-size-sm"&gt;Branding products&lt;/span&gt;
                          &lt;/td&gt;
                          &lt;td&gt;United States&lt;/td&gt;
                          &lt;td&gt;
                            &lt;span class="legend-indicator bg-warning"&gt;&lt;/span&gt;Pending
                          &lt;/td&gt;
                        &lt;/tr&gt;

                        &lt;tr&gt;
                          &lt;td&gt;
                            &lt;a class="d-flex" href="../user-profile.html"&gt;
                              &lt;div class="flex-shrink-0"&gt;
                                &lt;div class="avatar avatar-circle"&gt;
                                  &lt;img class="avatar-img" src="..." alt="Image Description"&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                              &lt;div class="flex-grow-1 ms-3"&gt;
                                &lt;span class="d-block h5 text-inherit mb-0"&gt;David Harrison&lt;/span&gt;
                                &lt;span class="d-block font-size-sm text-body"&gt;david@example.com&lt;/span&gt;
                              &lt;/div&gt;
                            &lt;/a&gt;
                          &lt;/td&gt;
                          &lt;td&gt;
                            &lt;span class="d-block h5 mb-0"&gt;Unknown&lt;/span&gt;
                            &lt;span class="d-block font-size-sm"&gt;Unknown&lt;/span&gt;
                          &lt;/td&gt;
                          &lt;td&gt;United States&lt;/td&gt;
                          &lt;td&gt;
                            &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                          &lt;/td&gt;
                        &lt;/tr&gt;

                        &lt;tr&gt;
                          &lt;td&gt;
                            &lt;a class="d-flex" href="../user-profile.html"&gt;
                              &lt;div class="flex-shrink-0"&gt;
                                &lt;div class="avatar avatar-circle"&gt;
                                  &lt;img class="avatar-img" src="..." alt="Image Description"&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                              &lt;div class="flex-grow-1 ms-3"&gt;
                                &lt;span class="d-block h5 text-inherit mb-0"&gt;Finch Hoot&lt;/span&gt;
                                &lt;span class="d-block font-size-sm text-body"&gt;finch@example.com&lt;/span&gt;
                              &lt;/div&gt;
                            &lt;/a&gt;
                          &lt;/td&gt;
                          &lt;td&gt;
                            &lt;span class="d-block h5 mb-0"&gt;Designer&lt;/span&gt;
                            &lt;span class="d-block font-size-sm"&gt;IT department&lt;/span&gt;
                          &lt;/td&gt;
                          &lt;td&gt;Argentina&lt;/td&gt;
                          &lt;td&gt;
                            &lt;span class="legend-indicator bg-danger"&gt;&lt;/span&gt;Suspended
                          &lt;/td&gt;
                        &lt;/tr&gt;

                        &lt;tr&gt;
                          &lt;td&gt;
                            &lt;a class="d-flex" href="../user-profile.html"&gt;
                              &lt;div class="flex-shrink-0"&gt;
                                &lt;div class="avatar avatar-soft-dark avatar-circle"&gt;
                                  &lt;span class="avatar-initials"&gt;B&lt;/span&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                              &lt;div class="flex-grow-1 ms-3"&gt;
                                &lt;span class="d-block h5 text-inherit mb-0"&gt;Bob Dean&lt;/span&gt;
                                &lt;span class="d-block font-size-sm text-body"&gt;bob@example.com&lt;/span&gt;
                              &lt;/div&gt;
                            &lt;/a&gt;
                          &lt;/td&gt;
                          &lt;td&gt;
                            &lt;span class="d-block h5 mb-0"&gt;Executive director&lt;/span&gt;
                            &lt;span class="d-block font-size-sm"&gt;Marketing&lt;/span&gt;
                          &lt;/td&gt;
                          &lt;td&gt;Austria&lt;/td&gt;
                          &lt;td&gt;
                            &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                          &lt;/td&gt;
                        &lt;/tr&gt;
                      &lt;/tbody&gt;
                    &lt;/table&gt;
                  &lt;/div&gt;
                  &lt;!-- End Table --&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="card-centered" class="nue-docs-heading">
        Centered <a class="anchorjs-link" href="#card-centered" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Use <code>.card-centered</code> to center align a <code>.card-body</code> content.</p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab22" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab22" href="#nav-result22" data-bs-toggle="pill" data-bs-target="#nav-result22" role="tab" aria-controls="nav-result22" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab22" href="#nav-html22" data-bs-toggle="pill" data-bs-target="#nav-html22" role="tab" aria-controls="nav-html22" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent22">
          <div class="tab-pane fade p-4 show active" id="nav-result22" role="tabpanel" aria-labelledby="nav-resultTab22">
            <a class="card card-centered" href="#" style="max-width: 20rem; height: 15rem;">
              <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text text-body">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </a>
          </div>

          <div class="tab-pane fade" id="nav-html22" role="tabpanel" aria-labelledby="nav-htmlTab22">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;a class="card card-center" href="#" style="height: 15rem;"&gt;
                  &lt;div class="card-body"&gt;
                    &lt;h3 class="card-title"&gt;Card title&lt;/h3&gt;
                    &lt;p class="card-text text-body"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="card-body-height" class="nue-docs-heading">
        Body height <a class="anchorjs-link" href="#card-body-height" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Use <code>.card-body-height</code> to add a scrollable fixed content height.</p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab24" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab24" href="#nav-result24" data-bs-toggle="pill" data-bs-target="#nav-result24" role="tab" aria-controls="nav-result24" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab24" href="#nav-html24" data-bs-toggle="pill" data-bs-target="#nav-html24" role="tab" aria-controls="nav-html24" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent24">
          <div class="tab-pane fade p-4 show active" id="nav-result24" role="tabpanel" aria-labelledby="nav-resultTab24">
            <a class="card" href="#" style="max-width: 20rem;">
              <div class="card-body card-body-height">
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content.</p>
              </div>
            </a>
          </div>

          <div class="tab-pane fade" id="nav-html24" role="tabpanel" aria-labelledby="nav-htmlTab24">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;a class="card card-center" href="#"&gt;
                  &lt;div class="card-body card-body-height"&gt;
                    &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                    &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                    &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="card-cover-shadow" class="nue-docs-heading">
        Cover shadow <a class="anchorjs-link" href="#card-cover-shadow" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Use <code>.card-hover-shadow</code> to add a smooth animation with bolder shadow around a card.</p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab25" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab25" href="#nav-result25" data-bs-toggle="pill" data-bs-target="#nav-result25" role="tab" aria-controls="nav-result25" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab25" href="#nav-html25" data-bs-toggle="pill" data-bs-target="#nav-html25" role="tab" aria-controls="nav-html25" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent25">
          <div class="tab-pane fade p-4 show active" id="nav-result25" role="tabpanel" aria-labelledby="nav-resultTab25">
            <a class="card" href="#" style="max-width: 20rem;">
              <div class="card-body card-hover-shadow">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </a>
          </div>

          <div class="tab-pane fade" id="nav-html25" role="tabpanel" aria-labelledby="nav-htmlTab25">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;a class="card card-center" href="#"&gt;
                  &lt;div class="card-body card-hover-shadow"&gt;
                    &lt;h3 class="card-title"&gt;Card title&lt;/h3&gt;
                    &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="project" class="nue-docs-heading">
        Project <a class="anchorjs-link" href="#project" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Create beautiful project cards.</p>
      <p>Use <code>.card-progress-wrap</code> to wrap a <code>progress</code> at the top of a card. Whereas <code>.card-progress</code> along with the <code>.progress</code> to set a smaller height to the <code>progress</code> than its default size.</p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab27" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab27" href="#nav-result27" data-bs-toggle="pill" data-bs-target="#nav-result27" role="tab" aria-controls="nav-result27" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab27" href="#nav-html27" data-bs-toggle="pill" data-bs-target="#nav-html27" role="tab" aria-controls="nav-html27" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent27">
          <div class="tab-pane fade p-4 show active" id="nav-result27" role="tabpanel" aria-labelledby="nav-resultTab27">
            <div class="card card-hover-shadow text-center h-100" style="max-width: 25rem;">
              <div class="card-progress-wrap">
                <div class="progress card-progress">
                  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="25" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="card-body">
                <div class="row align-items-center text-start mb-4">
                  <div class="col">
                    <span class="badge bg-soft-secondary text-secondary p-2">To do</span>
                  </div>

                  <div class="col-auto">
                    <div class="dropdown">
                      <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown8" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-three-dots-vertical"></i>
                      </button>

                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown8">
                        <a class="dropdown-item" href="#">Rename project </a>
                        <a class="dropdown-item" href="#">Add to favorites</a>
                        <a class="dropdown-item" href="#">Archive project</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="d-flex justify-content-center mb-2">
                  <img class="avatar avatar-lg" src="https://cdn.btekno.id/templates/nue/svg/brands/google-webdev-icon.svg" alt="Image Description">
                </div>

                <div class="mb-4">
                  <h2 class="mb-1">Webdev</h2>

                  <span class="fs-5">Updated 2 hours ago</span>
                </div>

                <small class="card-subtitle">Members</small>

                <div class="d-flex justify-content-center">
                  <div class="avatar-group avatar-group-sm avatar-circle card-avatar-group">
                    <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly">
                      <span class="avatar-initials">B</span>
                    </a>
                    <a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Adam Keep">
                      <span class="avatar-initials">A</span>
                    </a>
                  </div>
                </div>

                <a class="stretched-link" href="#"></a>
              </div>

              <div class="card-footer">
                <div class="row col-divider">
                  <div class="col">
                    <span class="h4">19</span>
                    <span class="d-block fs-5">Tasks</span>
                  </div>

                  <div class="col">
                    <span class="h4">33</span>
                    <span class="d-block fs-5">Completed</span>
                  </div>

                  <div class="col">
                    <span class="h4">10</span>
                    <span class="d-block fs-5">Days left</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html27" role="tabpanel" aria-labelledby="nav-htmlTab27">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card card-hover-shadow text-center h-100" style="max-width: 25rem;"&gt;
                  &lt;div class="card-progress-wrap"&gt;
                    &lt;!-- Progress --&gt;
                    &lt;div class="progress card-progress"&gt;
                      &lt;div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="25" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Progress --&gt;
                  &lt;/div&gt;

                  &lt;!-- Body --&gt;
                  &lt;div class="card-body"&gt;
                    &lt;div class="row align-items-center text-start mb-4"&gt;
                      &lt;div class="col"&gt;
                        &lt;span class="badge bg-soft-secondary text-secondary p-2"&gt;To do&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;!-- End Col --&gt;

                      &lt;div class="col-auto"&gt;
                        &lt;!-- Dropdown --&gt;
                        &lt;div class="dropdown"&gt;
                          &lt;button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown8" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                            &lt;i class="bi-three-dots-vertical"&gt;&lt;/i&gt;
                          &lt;/button&gt;

                          &lt;div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown8"&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Rename project &lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Add to favorites&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Archive project&lt;/a&gt;
                            &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                            &lt;a class="dropdown-item text-danger" href="#"&gt;Delete&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!-- End Dropdown --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Col --&gt;
                    &lt;/div&gt;

                    &lt;div class="d-flex justify-content-center mb-2"&gt;
                      &lt;!-- Avatar --&gt;
                      &lt;img class="avatar avatar-lg" src="..." alt="Image Description"&gt;
                    &lt;/div&gt;

                    &lt;div class="mb-4"&gt;
                      &lt;h2 class="mb-1"&gt;Webdev&lt;/h2&gt;

                      &lt;span class="fs-5"&gt;Updated 2 hours ago&lt;/span&gt;
                    &lt;/div&gt;

                    &lt;small class="card-subtitle"&gt;Members&lt;/small&gt;

                    &lt;div class="d-flex justify-content-center"&gt;
                      &lt;!-- Avatar Group --&gt;
                      &lt;div class="avatar-group avatar-group-sm avatar-circle card-avatar-group"&gt;
                        &lt;a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot"&gt;
                          &lt;img class="avatar-img" src="..." alt="Image Description"&gt;
                        &lt;/a&gt;
                        &lt;a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly"&gt;
                          &lt;span class="avatar-initials"&gt;B&lt;/span&gt;
                        &lt;/a&gt;
                        &lt;a class="avatar" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone"&gt;
                          &lt;img class="avatar-img" src="..." alt="Image Description"&gt;
                        &lt;/a&gt;
                        &lt;a class="avatar avatar-soft-dark" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Adam Keep"&gt;
                          &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
                        &lt;/a&gt;
                      &lt;/div&gt;
                      &lt;!-- End Avatar Group --&gt;
                    &lt;/div&gt;

                    &lt;a class="stretched-link" href="#"&gt;&lt;/a&gt;
                  &lt;/div&gt;
                  &lt;!-- End Body --&gt;

                  &lt;!-- Footer --&gt;
                  &lt;div class="card-footer"&gt;
                    &lt;!-- Stats --&gt;
                    &lt;div class="row col-divider"&gt;
                      &lt;div class="col"&gt;
                        &lt;span class="h4"&gt;19&lt;/span&gt;
                        &lt;span class="d-block fs-5"&gt;Tasks&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;!-- End Col --&gt;

                      &lt;div class="col"&gt;
                        &lt;span class="h4"&gt;33&lt;/span&gt;
                        &lt;span class="d-block fs-5"&gt;Completed&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;!-- End Col --&gt;

                      &lt;div class="col"&gt;
                        &lt;span class="h4"&gt;10&lt;/span&gt;
                        &lt;span class="d-block fs-5"&gt;Days left&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;!-- End Col --&gt;
                    &lt;/div&gt;
                    &lt;!-- End Stats --&gt;
                  &lt;/div&gt;
                  &lt;!-- End Footer --&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="profile" class="nue-docs-heading">
        Profile <a class="anchorjs-link" href="#profile" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Create beautiful profile cards.</p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab28" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab28" href="#nav-result28" data-bs-toggle="pill" data-bs-target="#nav-result28" role="tab" aria-controls="nav-result28" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab28" href="#nav-html28" data-bs-toggle="pill" data-bs-target="#nav-html28" role="tab" aria-controls="nav-html28" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent28">
          <div class="tab-pane fade p-4 show active" id="nav-result28" role="tabpanel" aria-labelledby="nav-resultTab28">
            <div class="card h-100" style="max-width: 25rem;">
              <div class="card-pinned">
                <div class="card-pinned-top-end">
                  <div class="dropdown">
                    <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi-three-dots-vertical"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsDropdown2">
                      <a class="dropdown-item" href="#">Share connection</a>
                      <a class="dropdown-item" href="#">Block connection</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">Delete</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body text-center">
                <div class="avatar avatar-xl avatar-circle avatar-centered mb-3">
                  <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt="Image Description">
                  <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                </div>

                <h3 class="mb-1">
                  <a class="text-dark" href="#">Isabella Finley</a>
                </h3>

                <div class="mb-3">
                  <i class="bi-building me-1"></i>
                  <span>FrontApp</span>
                </div>

                <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Human resources</a></li>
                  <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Support</a></li>
                </ul>
              </div>

              <div class="card-footer">
                <div class="row justify-content-between align-items-center">
                  <div class="col-auto py-1">
                    <a class="fs-6 text-body" href="#">79 connections</a>
                  </div>

                  <div class="col-auto py-1">
                    <div class="form-check form-check-switch">
                      <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox2" checked>
                      <label class="form-check-label btn-sm" for="connectionsCheckbox2">
                        <span class="form-check-default">
                          <i class="bi-person-plus-fill"></i> Connect
                        </span>
                        <span class="form-check-active">
                          <i class="bi-check-lg me-2"></i> Connected
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html28" role="tabpanel" aria-labelledby="nav-htmlTab28">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card h-100" style="max-width: 25rem;"&gt;
                  &lt;div class="card-pinned"&gt;
                    &lt;div class="card-pinned-top-end"&gt;
                      &lt;!-- Dropdown --&gt;
                      &lt;div class="dropdown"&gt;
                        &lt;button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsDropdown2" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                          &lt;i class="bi-three-dots-vertical"&gt;&lt;/i&gt;
                        &lt;/button&gt;

                        &lt;div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsDropdown2"&gt;
                          &lt;a class="dropdown-item" href="#"&gt;Share connection&lt;/a&gt;
                          &lt;a class="dropdown-item" href="#"&gt;Block connection&lt;/a&gt;
                          &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                          &lt;a class="dropdown-item text-danger" href="#"&gt;Delete&lt;/a&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;!-- End Dropdown --&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;

                  &lt;!-- Body --&gt;
                  &lt;div class="card-body text-center"&gt;
                    &lt;!-- Avatar --&gt;
                    &lt;div class="avatar avatar-xl avatar-circle avatar-centered mb-3"&gt;
                      &lt;img class="avatar-img" src="..." alt="Image Description"&gt;
                      &lt;span class="avatar-status avatar-sm-status avatar-status-success"&gt;&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;!-- End Avatar --&gt;

                    &lt;h3 class="mb-1"&gt;
                      &lt;a class="text-dark" href="#"&gt;Isabella Finley&lt;/a&gt;
                    &lt;/h3&gt;

                    &lt;div class="mb-3"&gt;
                      &lt;i class="bi-building me-1"&gt;&lt;/i&gt;
                      &lt;span&gt;FrontApp&lt;/span&gt;
                    &lt;/div&gt;

                    &lt;!-- Badges --&gt;
                    &lt;ul class="list-inline mb-0"&gt;
                      &lt;li class="list-inline-item"&gt;&lt;a class="badge bg-soft-secondary text-secondary p-2" href="#"&gt;Human resources&lt;/a&gt;&lt;/li&gt;
                      &lt;li class="list-inline-item"&gt;&lt;a class="badge bg-soft-secondary text-secondary p-2" href="#"&gt;Support&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;!-- End Badges --&gt;
                  &lt;/div&gt;
                  &lt;!-- End Body --&gt;

                  &lt;!-- Footer --&gt;
                  &lt;div class="card-footer"&gt;
                    &lt;div class="row justify-content-between align-items-center"&gt;
                      &lt;div class="col-auto py-1"&gt;
                        &lt;a class="fs-6 text-body" href="#"&gt;79 connections&lt;/a&gt;
                      &lt;/div&gt;
                      &lt;!-- End Col --&gt;

                      &lt;div class="col-auto py-1"&gt;
                        &lt;!-- Form Check --&gt;
                        &lt;div class="form-check form-check-switch"&gt;
                          &lt;input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox2" checked&gt;
                          &lt;label class="form-check-label btn-sm" for="connectionsCheckbox2"&gt;
                            &lt;span class="form-check-default"&gt;
                              &lt;i class="bi-person-plus-fill"&gt;&lt;/i&gt; Connect
                            &lt;/span&gt;
                            &lt;span class="form-check-active"&gt;
                              &lt;i class="bi-check-lg me-2"&gt;&lt;/i&gt; Connected
                            &lt;/span&gt;
                          &lt;/label&gt;
                        &lt;/div&gt;
                        &lt;!-- End Form Check --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Col --&gt;
                    &lt;/div&gt;
                    &lt;!-- End Row --&gt;
                  &lt;/div&gt;
                  &lt;!-- End Footer --&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="team" class="nue-docs-heading">
        Team <a class="anchorjs-link" href="#team" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Create beautiful team cards with <code>list-group</code></p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab29" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab29" href="#nav-result29" data-bs-toggle="pill" data-bs-target="#nav-result29" role="tab" aria-controls="nav-result29" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab29" href="#nav-html29" data-bs-toggle="pill" data-bs-target="#nav-html29" role="tab" aria-controls="nav-html29" aria-selected="false">HTML</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="navTabContent29">
          <div class="tab-pane fade p-4 show active" id="nav-result29" role="tabpanel" aria-labelledby="nav-resultTab29">
            <div class="card h-100" style="max-width: 25rem;">
              <div class="card-body pb-0">
                <div class="row align-items-center mb-2">
                  <div class="col-9">
                    <h4 class="mb-1">
                      <a href="#">#digitalmarketing</a>
                    </h4>
                  </div>

                  <div class="col-3 text-end">
                    <div class="dropdowm">
                      <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="teamsDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-three-dots-vertical"></i>
                      </button>

                      <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown1">
                        <a class="dropdown-item" href="#">Rename team</a>
                        <a class="dropdown-item" href="#">Add to favorites</a>
                        <a class="dropdown-item" href="#">Archive team</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>

                <p>Our group promotes and sells products and services by leveraging online marketing tactics</p>
              </div>

              <div class="card-footer border-0 pt-0">
                <div class="list-group list-group-flush list-group-no-gutters">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">
                        <span class="card-subtitle">Industry:</span>
                      </div>

                      <div class="col-auto">
                        <a class="badge bg-soft-primary text-primary p-2" href="#">Marketing team</a>
                      </div>
                    </div>
                  </div>

                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">
                        <span class="card-subtitle">Rated:</span>
                      </div>

                      <div class="col-auto">
                        <div class="d-flex gap-1">
                          <img src="https://cdn.btekno.id/templates/nue/svg/illustrations/star.svg" alt="Review rating" width="14">
                          <img src="https://cdn.btekno.id/templates/nue/svg/illustrations/star.svg" alt="Review rating" width="14">
                          <img src="https://cdn.btekno.id/templates/nue/svg/illustrations/star.svg" alt="Review rating" width="14">
                          <img src="https://cdn.btekno.id/templates/nue/svg/illustrations/star.svg" alt="Review rating" width="14">
                          <img src="https://cdn.btekno.id/templates/nue/svg/illustrations/star-half.svg" alt="Review rating" width="14" data-nue-theme-appearance="default">
                          <img src="https://cdn.btekno.id/templates/nue/svg/illustrations-light/star-half.svg" alt="Review rating" width="14" data-nue-theme-appearance="dark">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">
                        <span class="card-subtitle">Members:</span>
                      </div>

                      <div class="col-auto">
                        <div class="avatar-group avatar-group-xs avatar-circle">
                          <span class="avatar" data-toggle="tooltip" data-placement="top" title="Ella Lauda">
                            <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="Image Description">
                          </span>
                          <span class="avatar" data-toggle="tooltip" data-placement="top" title="David Harrison">
                            <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-soft-dark" data-toggle="tooltip" data-placement="top" title="Antony Taylor">
                            <span class="avatar-initials">A</span>
                          </span>
                          <span class="avatar avatar-soft-info" data-toggle="tooltip" data-placement="top" title="Sara Iwens">
                            <span class="avatar-initials">S</span>
                          </span>
                          <span class="avatar" data-toggle="tooltip" data-placement="top" title="Finch Hoot">
                            <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-light avatar-circle" data-toggle="tooltip" data-placement="top" title="Sam Kart, Amanda Harvey and 1 more">
                            <span class="avatar-initials">+3</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html29" role="tabpanel" aria-labelledby="nav-htmlTab29">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card h-100" style="max-width: 25rem;"&gt;
                  &lt;!-- Body --&gt;
                  &lt;div class="card-body pb-0"&gt;
                    &lt;div class="row align-items-center mb-2"&gt;
                      &lt;div class="col-9"&gt;
                        &lt;h4 class="mb-1"&gt;
                          &lt;a href="#"&gt;#digitalmarketing&lt;/a&gt;
                        &lt;/h4&gt;
                      &lt;/div&gt;
                      &lt;!-- End Col --&gt;

                      &lt;div class="col-3 text-end"&gt;
                        &lt;!-- Dropdown --&gt;
                        &lt;div class="dropdowm"&gt;
                          &lt;button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="teamsDropdown1" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                            &lt;i class="bi-three-dots-vertical"&gt;&lt;/i&gt;
                          &lt;/button&gt;

                          &lt;div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="teamsDropdown1"&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Rename team&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Add to favorites&lt;/a&gt;
                            &lt;a class="dropdown-item" href="#"&gt;Archive team&lt;/a&gt;
                            &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                            &lt;a class="dropdown-item text-danger" href="#"&gt;Delete&lt;/a&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!-- End Dropdown --&gt;
                      &lt;/div&gt;
                      &lt;!-- End Col --&gt;
                    &lt;/div&gt;
                    &lt;!-- End Row --&gt;

                    &lt;p&gt;Our group promotes and sells products and services by leveraging online marketing tactics&lt;/p&gt;
                  &lt;/div&gt;
                  &lt;!-- End Body --&gt;

                  &lt;!-- Footer --&gt;
                  &lt;div class="card-footer border-0 pt-0"&gt;
                    &lt;div class="list-group list-group-flush list-group-no-gutters"&gt;
                      &lt;!-- List Item --&gt;
                      &lt;div class="list-group-item"&gt;
                        &lt;div class="row align-items-center"&gt;
                          &lt;div class="col"&gt;
                            &lt;span class="card-subtitle"&gt;Industry:&lt;/span&gt;
                          &lt;/div&gt;
                          &lt;!-- End Col --&gt;

                          &lt;div class="col-auto"&gt;
                            &lt;a class="badge bg-soft-primary text-primary p-2" href="#"&gt;Marketing team&lt;/a&gt;
                          &lt;/div&gt;
                          &lt;!-- End Col --&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;!-- End List Item --&gt;

                      &lt;!-- List Item --&gt;
                      &lt;div class="list-group-item"&gt;
                        &lt;div class="row align-items-center"&gt;
                          &lt;div class="col"&gt;
                            &lt;span class="card-subtitle"&gt;Rated:&lt;/span&gt;
                          &lt;/div&gt;
                          &lt;!-- End Col --&gt;

                          &lt;div class="col-auto"&gt;
                            &lt;!-- Stars --&gt;
                            &lt;div class="d-flex gap-1"&gt;
                              &lt;img src="https://cdn.btekno.id/templates/nue/svg/illustrations/star.svg" alt="Review rating" width="14"&gt;
                              &lt;img src="https://cdn.btekno.id/templates/nue/svg/illustrations/star.svg" alt="Review rating" width="14"&gt;
                              &lt;img src="https://cdn.btekno.id/templates/nue/svg/illustrations/star.svg" alt="Review rating" width="14"&gt;
                              &lt;img src="https://cdn.btekno.id/templates/nue/svg/illustrations/star.svg" alt="Review rating" width="14"&gt;
                              &lt;img src="https://cdn.btekno.id/templates/nue/svg/illustrations/star-half.svg" alt="Review rating" width="14"&gt;
                            &lt;/div&gt;
                            &lt;!-- End Stars --&gt;
                          &lt;/div&gt;
                          &lt;!-- End Col --&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;!-- End List Item --&gt;

                      &lt;!-- List Item --&gt;
                      &lt;div class="list-group-item"&gt;
                        &lt;div class="row align-items-center"&gt;
                          &lt;div class="col"&gt;
                            &lt;span class="card-subtitle"&gt;Members:&lt;/span&gt;
                          &lt;/div&gt;
                          &lt;!-- End Col --&gt;

                          &lt;div class="col-auto"&gt;
                            &lt;!-- Avatar Group --&gt;
                            &lt;div class="avatar-group avatar-group-xs avatar-circle"&gt;
                              &lt;span class="avatar" data-toggle="tooltip" data-placement="top" title="Ella Lauda"&gt;
                                &lt;img class="avatar-img" src="..." alt="Image Description"&gt;
                              &lt;/span&gt;
                              &lt;span class="avatar" data-toggle="tooltip" data-placement="top" title="David Harrison"&gt;
                                &lt;img class="avatar-img" src="..." alt="Image Description"&gt;
                              &lt;/span&gt;
                              &lt;span class="avatar avatar-soft-dark" data-toggle="tooltip" data-placement="top" title="Antony Taylor"&gt;
                                &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
                              &lt;/span&gt;
                              &lt;span class="avatar avatar-soft-info" data-toggle="tooltip" data-placement="top" title="Sara Iwens"&gt;
                                &lt;span class="avatar-initials"&gt;S&lt;/span&gt;
                              &lt;/span&gt;
                              &lt;span class="avatar" data-toggle="tooltip" data-placement="top" title="Finch Hoot"&gt;
                                &lt;img class="avatar-img" src="..." alt="Image Description"&gt;
                              &lt;/span&gt;
                              &lt;span class="avatar avatar-light avatar-circle" data-toggle="tooltip" data-placement="top" title="Sam Kart, Amanda Harvey and 1 more"&gt;
                                &lt;span class="avatar-initials"&gt;+3&lt;/span&gt;
                              &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;!-- End Avatar Group --&gt;
                          &lt;/div&gt;
                          &lt;!-- End Col --&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;!-- End List Item --&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Footer --&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="fullscreen" class="nue-docs-heading">
        Fullscreen <a class="anchorjs-link" href="#fullscreen" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Use <code>.card-header-content-between</code> to align items in the corners.</p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab30" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab30" href="#nav-result30" data-bs-toggle="pill" data-bs-target="#nav-result30" role="tab" aria-controls="nav-result30" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab30" href="#nav-html30" data-bs-toggle="pill" data-bs-target="#nav-html30" role="tab" aria-controls="nav-html30" aria-selected="false">HTML</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-jsTab30" href="#nav-js30" data-bs-toggle="pill" data-bs-target="#nav-js30" role="tab" aria-controls="nav-js30" aria-selected="false">JS</a>
            </li>
          </ul>
        </div>

        <div class="alert alert-soft-dark card-alert" role="alert">
          This example uses <span class="fw-semi-bold">Fullscreen</span> library.
        </div>

        <div class="tab-content" id="navTabContent30">
          <div class="tab-pane fade p-4 show active" id="nav-result30" role="tabpanel" aria-labelledby="nav-resultTab30">
            <div id="cardFullScreenEg" class="card card-centered">
              <div class="card-header card-header-content-between">
                <h3 class="card-header-title">Fullscreen card</h3>
                <a class="js-fullscreen-invoker btn btn-ghost-secondary btn-icon btn-sm btn-no-focus rounded-circle" href="javascript:;" data-nue-fullscreen-options='{
                     "targetEl": "#cardFullScreenEg"
                   }'>
                  <i class="bi-fullscreen nue-fullscreen-icon-default" data-bs-toggle="tooltip" data-bs-placement="top" title="Fullscreen"></i>
                  <i class="bi-fullscreen-exit nue-fullscreen-icon-active" data-bs-toggle="tooltip" data-bs-placement="top" title="Exit Fullscreen"></i>
                </a>
              </div>

              <div class="card-body">
                <img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-megaphone.svg" alt="Image Description" data-nue-theme-appearance="default">
                <img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations-light/oc-megaphone.svg" alt="Image Description" data-nue-theme-appearance="dark">
                <p>This is a fullscreen card body text.</p>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html30" role="tabpanel" aria-labelledby="nav-htmlTab30">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div id="cardFullScreenEg" class="card card-centered"&gt;
                  &lt;div class="card-header card-header-content-between"&gt;
                    &lt;h3 class="card-header-title"&gt;Fullscreen card&lt;/h3&gt;
                    &lt;a class="js-fullscreen-invoker btn btn-ghost-secondary btn-icon btn-sm btn-no-focus rounded-circle" href="javascript:;"
                       data-nue-fullscreen-options='{
                         "targetEl": "#cardFullScreenEg"
                       }'&gt;
                      &lt;i class="bi-fullscreen nue-fullscreen-icon-default" data-bs-toggle="tooltip" data-bs-placement="top" title="Fullscreen"&gt;&lt;/i&gt;
                      &lt;i class="bi-fullscreen-exit nue-fullscreen-icon-active" data-bs-toggle="tooltip" data-bs-placement="top" title="Exit Fullscreen"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;

                  &lt;div class="card-body"&gt;
                    &lt;img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-megaphone.svg" alt="Image Description"&gt;
                    &lt;p&gt;This is a fullscreen card body text.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>

          <div class="tab-pane fade" id="nav-js30" role="tabpanel" aria-labelledby="nav-jsTab30">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- JS Plugins Init. --&gt;
                &lt;script&gt;
                  (function() {
                    // INITIALIZATION OF FULLSCREEN
                    // =======================================================
                    new NueFullscreen('.js-fullscreen-invoker')
                  })()
                &lt;/script&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="fullscreen-methods" class="nue-docs-heading">
        Fullscreen methods <a class="anchorjs-link" href="#fullscreen-methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <div class="card">
        <div class="table-responsive">
          <table class="table table-thead-bordered card-table">
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
                  <code>targetEl</code>
                </td>
                <td>Element which will be fullscreen</td>
                <td>
                  <code>null</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>preventScrollClassName</code>
                </td>
                <td>Disable scroll</td>
                <td>
                  <code>.nue-fullscreen-on</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>toggleClassName</code>
                </td>
                <td>Class for target element</td>
                <td>
                  <code>.nue-fullscreen</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>mainContainerSelector</code>
                </td>
                <td>Element for <code>preventScrollClassName</code></td>
                <td>
                  <code>body</code>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <h2 id="loading-state" class="nue-docs-heading">
        Loading state <a class="anchorjs-link" href="#loading-state" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <p>Use Front's <code>nue-loading-state.js</code> plugin to show the loading state in your projects.</p>

      <div class="card mb-7">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab31" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab31" href="#nav-result31" data-bs-toggle="pill" data-bs-target="#nav-result31" role="tab" aria-controls="nav-result31" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab31" href="#nav-html31" data-bs-toggle="pill" data-bs-target="#nav-html31" role="tab" aria-controls="nav-html31" aria-selected="false">HTML</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-jsTab31" href="#nav-js31" data-bs-toggle="pill" data-bs-target="#nav-js31" role="tab" aria-controls="nav-js31" aria-selected="false">JS</a>
            </li>
          </ul>
        </div>

        <div class="alert alert-soft-dark card-alert" role="alert">
          This example uses <span class="fw-semi-bold">Loading state</span> library.
        </div>

        <div class="tab-content" id="navTabContent31">
          <div class="tab-pane fade p-4 show active" id="nav-result31" role="tabpanel" aria-labelledby="nav-resultTab31">
            <div id="cardLoadingEg" class="card card-centered">
              <div class="card-header card-header-content-between">
                <h3 class="card-header-title">Loading state card</h3>
                <a class="js-loading-state-invoker btn btn-ghost-secondary btn-icon btn-sm btn-no-focus rounded-circle" href="javascript:;" data-nue-loading-state-options='{
                     "targetEl": "#cardLoadingEg",
                     "loaderMode": "with-text",
                     "loaderExtendedClassNames": "text-dark"
                   }'>
                  <i class="bi-arrow-clockwise" data-bs-toggle="tooltip" data-bs-placement="top" title="Reload"></i>
                </a>
              </div>

              <div class="card-body">
                <img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-megaphone.svg" alt="Image Description" data-nue-theme-appearance="default">
                <img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations-light/oc-megaphone.svg" alt="Image Description" data-nue-theme-appearance="dark">
                <p>This is a loading state card body text.</p>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html31" role="tabpanel" aria-labelledby="nav-htmlTab31">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div id="cardLoadingEg" class="card card-centered"&gt;
                  &lt;div class="card-header card-header-content-between"&gt;
                    &lt;h3 class="card-header-title"&gt;Loading state card&lt;/h3&gt;
                    &lt;a class="js-loading-state-invoker btn btn-ghost-secondary btn-icon btn-sm btn-no-focus rounded-circle" href="javascript:;"
                       data-nue-loading-state-options='{
                         "targetEl": "#cardLoadingEg",
                         "loaderMode": "with-text",
                         "loaderExtendedClassNames": "text-dark"
                       }'&gt;
                      &lt;i class="bi-arrow-clockwise" data-bs-toggle="tooltip" data-bs-placement="top" title="Reload"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;

                  &lt;div class="card-body"&gt;
                    &lt;img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-megaphone.svg" alt="Image Description"&gt;
                    &lt;p&gt;This is a fullscreen card body text.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>

          <div class="tab-pane fade" id="nav-js31" role="tabpanel" aria-labelledby="nav-jsTab31">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- JS Implementing Plugins --&gt;
                &lt;!-- bundlejs:vendor [..] --&gt;
                &lt;script src="https://cdn.btekno.id/templates/nue/vendor/nue-loading-state/dist/nue-loading-state.min.js"&gt;&lt;/script&gt;

                &lt;!-- JS Plugins Init. --&gt;
                &lt;script&gt;
                  (function() {
                    // INITIALIZATION OF LOADING STATE
                    // =======================================================
                    new NueLoadingState('.js-loading-state-invoker')
                  })()
                &lt;/script&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <p>Tabbable example:</p>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab32" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab32" href="#nav-result32" data-bs-toggle="pill" data-bs-target="#nav-result32" role="tab" aria-controls="nav-result32" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab32" href="#nav-html32" data-bs-toggle="pill" data-bs-target="#nav-html32" role="tab" aria-controls="nav-html32" aria-selected="false">HTML</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-jsTab32" href="#nav-js32" data-bs-toggle="pill" data-bs-target="#nav-js32" role="tab" aria-controls="nav-js32" aria-selected="false">JS</a>
            </li>
          </ul>
        </div>

        <div class="alert alert-soft-dark card-alert" role="alert">
          This example uses <span class="fw-semi-bold">Loading state</span> library.
        </div>

        <div class="tab-content" id="navTabContent32">
          <div class="tab-pane fade p-4 show active" id="nav-result32" role="tabpanel" aria-labelledby="nav-resultTab32">
            <div class="card card-centered">
              <div class="card-header card-header-content-between">
                <h3 class="card-header-title">Loading state card</h3>

                <div class="text-center">
                  <ul class="nav nav-segment" role="tablist">
                    <li class="nav-item">
                      <a class="js-loading-state-invoker nav-link active" id="nav-one-eg1-tab" data-bs-toggle="pill" href="#nav-one-eg1" role="tab" aria-controls="nav-one-eg1" aria-selected="true" data-nue-loading-state-options='{
                           "targetEl": "#nav-one-eg1"
                         }'>Tab One</a>
                    </li>
                    <li class="nav-item">
                      <a class="js-loading-state-invoker nav-link" id="nav-two-eg1-tab" data-bs-toggle="pill" href="#nav-two-eg1" role="tab" aria-controls="nav-two-eg1" aria-selected="false" data-nue-loading-state-options='{
                           "targetEl": "#nav-two-eg1"
                         }'>Tab two</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="nav-one-eg1" role="tabpanel" aria-labelledby="nav-one-eg1-tab">
                    <img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-megaphone.svg" alt="Image Description" data-nue-theme-appearance="default">
                    <img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations-light/oc-megaphone.svg" alt="Image Description" data-nue-theme-appearance="dark">
                    <p>Tab one</p>
                  </div>

                  <div class="tab-pane fade" id="nav-two-eg1" role="tabpanel" aria-labelledby="nav-two-eg1-tab">
                    <img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-megaphone.svg" alt="Image Description" data-nue-theme-appearance="default">
                    <img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations-light/oc-megaphone.svg" alt="Image Description" data-nue-theme-appearance="dark">
                    <p>Tab two</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html32" role="tabpanel" aria-labelledby="nav-htmlTab32">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div class="card card-centered"&gt;
                  &lt;div class="card-header card-header-content-between"&gt;
                    &lt;h3 class="card-header-title"&gt;Loading state card&lt;/h3&gt;

                    &lt;!-- Nav --&gt;
                    &lt;div class="text-center"&gt;
                      &lt;ul class="nav nav-segment" role="tablist"&gt;
                        &lt;li class="nav-item"&gt;
                          &lt;a class="js-loading-state-invoker nav-link active" id="nav-one-eg1-tab" data-bs-toggle="pill" href="#nav-one-eg1" role="tab" aria-controls="nav-one-eg1" aria-selected="true"
                             data-nue-loading-state-options='{
                               "targetEl": "#nav-one-eg1"
                             }'&gt;Tab One&lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li class="nav-item"&gt;
                          &lt;a class="js-loading-state-invoker nav-link" id="nav-two-eg1-tab" data-bs-toggle="pill" href="#nav-two-eg1" role="tab" aria-controls="nav-two-eg1" aria-selected="false"
                             data-nue-loading-state-options='{
                               "targetEl": "#nav-two-eg1"
                             }'&gt;Tab two&lt;/a&gt;
                        &lt;/li&gt;
                      &lt;/ul&gt;
                    &lt;/div&gt;
                    &lt;!-- End Nav --&gt;
                  &lt;/div&gt;

                  &lt;div class="card-body"&gt;
                    &lt;!-- Tab Content --&gt;
                    &lt;div class="tab-content"&gt;
                      &lt;div class="tab-pane fade show active" id="nav-one-eg1" role="tabpanel" aria-labelledby="nav-one-eg1-tab"&gt;
                        &lt;img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-megaphone.svg" alt="Image Description"&gt;
                        &lt;p&gt;Tab one&lt;/p&gt;
                      &lt;/div&gt;

                      &lt;div class="tab-pane fade" id="nav-two-eg1" role="tabpanel" aria-labelledby="nav-two-eg1-tab"&gt;
                        &lt;img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-megaphone.svg" alt="Image Description"&gt;
                        &lt;p&gt;Tab two&lt;/p&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- End Tab Content --&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>

          <div class="tab-pane fade" id="nav-js32" role="tabpanel" aria-labelledby="nav-jsTab32">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- JS Plugins Init. --&gt;
                &lt;script&gt;
                  (function() {
                    // INITIALIZATION OF LOADING STATE
                    // =======================================================
                    new NueLoadingState('.js-loading-state-invoker')
                  })()
                &lt;/script&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="loading-state-methods" class="nue-docs-heading">
        Loading state methods <a class="anchorjs-link" href="#loading-state-methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <div class="card">
        <div class="table-responsive">
          <table class="table table-thead-bordered card-table">
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
                  <code>targetEl</code>
                </td>
                <td>Сontainer inside which will be loading</td>
                <td>
                  <code>null</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>targetElStyles</code>
                </td>
                <td>Optional styles for target el container</td>
                <td>
                  <code>{ position: '' }</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>eventType</code>
                </td>
                <td>Set trigger event<br>
                  Available options:
                  <ul>
                    <li><code>click</code></li>
                    <li><code>mouseenter</code></li>
                  </ul>
                </td>
                <td>
                  <code>click</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>loaderMode</code>
                </td>
                <td>
                  Available options:
                  <ul>
                    <li><code>simple</code></li>
                    <li><code>with-text</code></li>
                  </ul>
                </td>
                <td>
                  <code>simple</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>loaderText</code>
                </td>
                <td>Appears a text you enter if set to <code>with-text</code></td>
                <td>
                  <code>Loading...</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>removeLoaderDelay</code>
                </td>
                <td>Delay for hide overlay</td>
                <td>
                  <code>1500</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>loaderContainerClassNames</code>
                </td>
                <td>Classes for container</td>
                <td>
                  <code>nue-loader-wrapper</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>loaderContainerExtendedClassNames</code>
                </td>
                <td>Optional classes for container</td>
                <td>
                  <code>null</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>loaderClassNames</code>
                </td>
                <td>Classes for wrapper on simple mode</td>
                <td>
                  <code>nue-loader</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>loaderExtendedClassNames</code>
                </td>
                <td>Optional classes for wrapper on simple mode</td>
                <td>
                  <code>null</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>loaderWithTextClassNames</code>
                </td>
                <td>Classes for wrapper on <code>with-text</code> mode</td>
                <td>
                  <code>nue-loader-with-text</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>loaderIconClassNames</code>
                </td>
                <td>Classes for loader icon</td>
                <td>
                  <code>.spinner-border .spinner-border-sm .text-primary</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>loaderIconExtendedClassNames</code>
                </td>
                <td>Optional classes for loader icon</td>
                <td>
                  <code>null</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>loaderTextClassNames</code>
                </td>
                <td>Classes for loader text (<code>with-text</code> mode)</td>
                <td>
                  <code>nue-loader-text</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>loaderTextExtendedClassNames</code>
                </td>
                <td>Optional classes for loader text (<code>with-text</code> mode)</td>
                <td>
                  <code>null</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>beforeLoading</code>
                </td>
                <td>Callback function</td>
                <td>
                  <code>null</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>afterLoading</code>
                </td>
                <td>Callback function</td>
                <td>
                  <code>null</code>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <h2 id="remove-element" class="nue-docs-heading">
        Remove element <a class="anchorjs-link" href="#remove-element" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-segment" id="navTab33" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-resultTab33" href="#nav-result33" data-bs-toggle="pill" data-bs-target="#nav-result33" role="tab" aria-controls="nav-result33" aria-selected="true">Preview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-htmlTab33" href="#nav-html33" data-bs-toggle="pill" data-bs-target="#nav-html33" role="tab" aria-controls="nav-html33" aria-selected="false">HTML</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-jsTab33" href="#nav-js33" data-bs-toggle="pill" data-bs-target="#nav-js33" role="tab" aria-controls="nav-js33" aria-selected="false">JS</a>
            </li>
          </ul>
        </div>

        <div class="alert alert-soft-dark card-alert" role="alert">
          This example uses <span class="fw-semi-bold">Remove element</span> library.
        </div>

        <div class="tab-content" id="navTabContent33">
          <div class="tab-pane fade p-4 show active" id="nav-result33" role="tabpanel" aria-labelledby="nav-resultTab33">
            <div id="removableCardEg" class="card card-centered">
              <div class="card-header card-header-content-between">
                <h3 class="card-header-title">Remove element card</h3>
                <a class="js-remove-element-invoker btn btn-ghost-secondary btn-icon btn-sm btn-no-focus rounded-circle" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove" data-nue-remove-element-options='{
                     "targetEl": "#removableCardEg"
                   }'>
                  <i class="bi-x-lg"></i>
                </a>
              </div>

              <div class="card-body">
                <img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-megaphone.svg" alt="Image Description" data-nue-theme-appearance="default">
                <img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations-light/oc-megaphone.svg" alt="Image Description" data-nue-theme-appearance="dark">
                <p>This is a remove element card body text.</p>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-html33" role="tabpanel" aria-labelledby="nav-htmlTab33">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- Card --&gt;
                &lt;div id="removableCardEg" class="card card-centered"&gt;
                  &lt;div class="card-header card-header-content-between"&gt;
                    &lt;h3 class="card-header-title"&gt;Remove element card&lt;/h3&gt;
                    &lt;a class="js-remove-element-invoker btn btn-ghost-secondary btn-icon btn-sm btn-no-focus rounded-circle" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"
                       data-nue-remove-element-options='{
                         "targetEl": "#removableCardEg"
                       }'&gt;
                      &lt;i class="bi-x-lg"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;

                  &lt;div class="card-body"&gt;
                    &lt;img class="avatar avatar-xxl mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-megaphone.svg" alt="Image Description"&gt;
                    &lt;p&gt;This is a remove element card body text.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Card --&gt;
              </code>
            </pre>
          </div>

          <div class="tab-pane fade" id="nav-js33" role="tabpanel" aria-labelledby="nav-jsTab33">
            <pre>
              <code class="language-markup" data-lang="html">
                &lt;!-- JS Plugins Init. --&gt;
                &lt;script&gt;
                  (function() {
                    // INITIALIZATION OF REMOVE ELEMENT
                    // =======================================================
                    document.querySelectorAll('.js-remove-element-invoker').forEach(item => {
                      new NueRemoveElement(item).init()
                    })
                  })()
                &lt;/script&gt;
              </code>
            </pre>
          </div>
        </div>
      </div>

      <h2 id="remove-element-methods" class="nue-docs-heading">
        Remove element methods <a class="anchorjs-link" href="#remove-element-methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <div class="card">
        <div class="table-responsive">
          <table class="table table-thead-bordered card-table">
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
                  <code>targetEl</code>
                </td>
                <td>Element which will be deleted</td>
                <td>
                  <code>null</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>beforeDelete</code>
                </td>
                <td>Callback function</td>
                <td>
                  <code>null</code>
                </td>
              </tr>

              <tr>
                <td>
                  <code>afterDelete</code>
                </td>
                <td>Callback function</td>
                <td>
                  <code>null</code>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <h2 id="other-classes-to-note" class="nue-docs-heading">
        Other classes to note <a class="anchorjs-link" href="#other-classes-to-note" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>

      <div class="card">
        <div class="table-responsive">
          <table class="table table-thead-bordered card-table">
            <thead class="thead-light">
              <tr>
                <th style="width: 40%;">Class</th>
                <th>Description</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td><code>.card-dropdown-filter-centered</code></td>
                <td>Used to fix the sizing and positioning of the "Filter" dropdown card in the <a href="../users.html">Users</a> page on smaller devices.</td>
              </tr>

              <tr>
                <td><code>.card-avatar-group</code></td>
                <td>Fixes z-index issue where in card used a <code>.stretched-link</code> class.<br>Example: Cards with three dots icon on top right corner of a card in <a href="../user-profile-projects.html">User Profile Projects</a>.</td>
              </tr>

              <tr>
                <td><code>.card-dropdown-btn</code></td>
                <td>Fixes z-index issue where in card used a <code>.stretched-link</code> class.<br>Example: Cards with "More" button on top right corner of a card in <a href="../apps-file-manager.html">Apps file manager</a>.</td>
              </tr>

              <tr>
                <td><code>.card-nav-vertical</code></td>
                <td>Can be used to make sizing smaller and to change <code>flex-direction: row;</code> to <code>column</code> in a card where <code>.nav</code> component is utilized.<br>Example: "Teams" section in <a href="../user-profile.html">User profile</a>.</td>
              </tr>

              <tr>
                <td><code>.card-navbar-nav</code></td>
                <td>Sets width of the card to <code>100%</code> and adds extra <code>padding-top</code> and <code>padding-bottom</code> spaces.<br>Example: Left side navigation panel in <a href="../account-settings.html">Account settings</a>.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
@endsection