@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Lists')

@section('content')
  <x-nue::docs::header>
    Lists
  </x-nue::docs::header>

  <h2 id="unstyled" class="nue-docs-heading">
    Unstyled <a class="anchorjs-link" href="#unstyled" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <span class="fw-semi-bold">This only applies to immediate children list items</span>, meaning you will need to add the class for any nested lists as well.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-unstyled">
        <li>Dashboard</li>
        <li>Profile</li>
        <li>
          Account

          <ul>
            <li>Settings</li>
            <li>Billing</li>
            <li>Invoice</li>
          </ul>
        </li>
        <li>Projects</li>
        <li>
          Tasks
          <ol>
            <li>One</li>
            <li>Two</li>
            <li>Three</li>
          </ol>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List --&gt;
          &lt;ul class="list-unstyled"&gt;
            &lt;li&gt;Dashboard&lt;/li&gt;
            &lt;li&gt;Profile&lt;/li&gt;
            &lt;li&gt;
              Account

              &lt;ul&gt;
                &lt;li&gt;Settings&lt;/li&gt;
                &lt;li&gt;Billing&lt;/li&gt;
                &lt;li&gt;Invoice&lt;/li&gt;
              &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li&gt;Projects&lt;/li&gt;
            &lt;li&gt;
              Tasks
              &lt;ol&gt;
                &lt;li&gt;One&lt;/li&gt;
                &lt;li&gt;Two&lt;/li&gt;
                &lt;li&gt;Three&lt;/li&gt;
              &lt;/ol&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="unstyled-spacings" class="nue-docs-heading">
    Unstyled spacings <a class="anchorjs-link" href="#unstyled-spacings" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>You can add vertical spacings between lists with modifier classes.</p>

  <p>Use <code>.list-py-1</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-unstyled list-py-1">
        <li>Dashboard</li>
        <li>Profile</li>
        <li>Account</li>
        <li>Projects</li>
        <li>Tasks</li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List --&gt;
          &lt;ul class="list-unstyled list-py-1"&gt;
            &lt;li&gt;Dashboard&lt;/li&gt;
            &lt;li&gt;Profile&lt;/li&gt;
            &lt;li&gt;Account&lt;/li&gt;
            &lt;li&gt;Projects&lt;/li&gt;
            &lt;li&gt;Tasks&lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Use <code>.list-py-2</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-unstyled list-py-2">
        <li>Dashboard</li>
        <li>Profile</li>
        <li>Account</li>
        <li>Projects</li>
        <li>Tasks</li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List --&gt;
          &lt;ul class="list-unstyled list-py-2"&gt;
            &lt;li&gt;Dashboard&lt;/li&gt;
            &lt;li&gt;Profile&lt;/li&gt;
            &lt;li&gt;Account&lt;/li&gt;
            &lt;li&gt;Projects&lt;/li&gt;
            &lt;li&gt;Tasks&lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Use <code>.list-py-3</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-unstyled list-py-3">
        <li>Dashboard</li>
        <li>Profile</li>
        <li>Account</li>
        <li>Projects</li>
        <li>Tasks</li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List --&gt;
          &lt;ul class="list-unstyled list-py-3"&gt;
            &lt;li&gt;Dashboard&lt;/li&gt;
            &lt;li&gt;Profile&lt;/li&gt;
            &lt;li&gt;Account&lt;/li&gt;
            &lt;li&gt;Projects&lt;/li&gt;
            &lt;li&gt;Tasks&lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="horizontal-spacings" class="nue-docs-heading">
    Horizontal spacings <a class="anchorjs-link" href="#horizontal-spacings" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>You can add horizontal spacings between lists with modifier classes.</p>

  <p>Use <code>.list-px-1</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-inline list-px-1">
        <li class="list-inline-item">Dashboard</li>
        <li class="list-inline-item">Profile</li>
        <li class="list-inline-item">Account</li>
        <li class="list-inline-item">Projects</li>
        <li class="list-inline-item">Tasks</li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List --&gt;
          &lt;ul class="list-inline list-px-1"&gt;
            &lt;li class="list-inline-item"&gt;Dashboard&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Profile&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Account&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Projects&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Tasks&lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Use <code>.list-px-2</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-inline list-px-2">
        <li class="list-inline-item">Dashboard</li>
        <li class="list-inline-item">Profile</li>
        <li class="list-inline-item">Account</li>
        <li class="list-inline-item">Projects</li>
        <li class="list-inline-item">Tasks</li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List --&gt;
          &lt;ul class="list-inline list-px-2"&gt;
            &lt;li class="list-inline-item"&gt;Dashboard&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Profile&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Account&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Projects&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Tasks&lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Use <code>.list-px-3</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-inline list-px-3">
        <li class="list-inline-item">Dashboard</li>
        <li class="list-inline-item">Profile</li>
        <li class="list-inline-item">Account</li>
        <li class="list-inline-item">Projects</li>
        <li class="list-inline-item">Tasks</li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List --&gt;
          &lt;ul class="list-inline list-px-3"&gt;
            &lt;li class="list-inline-item"&gt;Dashboard&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Profile&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Account&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Projects&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Tasks&lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="inline" class="nue-docs-heading">
    Inline <a class="anchorjs-link" href="#inline" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Remove a list's bullets and apply some light <code>margin</code> with a combination of two classes, <code>.list-inline</code> and <code>.list-inline-item</code>.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-inline">
        <li class="list-inline-item">Dashboard</li>
        <li class="list-inline-item">Profile</li>
        <li class="list-inline-item">Account</li>
        <li class="list-inline-item">Projects</li>
        <li class="list-inline-item">Tasks</li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List --&gt;
          &lt;ul class="list-inline"&gt;
            &lt;li class="list-inline-item"&gt;Dashboard&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Profile&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Account&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Projects&lt;/li&gt;
            &lt;li class="list-inline-item"&gt;Tasks&lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="list-separator" class="nue-docs-heading">
    List separator <a class="anchorjs-link" href="#list-separator" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>.list-separator</code> class with the <code>.list-inline</code> class for an inline separator with a circled shape.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-inline list-separator">
        <li class="list-inline-item">
          <a class="list-separator-link" href="#">FAQ</a>
        </li>
        <li class="list-inline-item">
          <a class="list-separator-link" href="#">License</a>
        </li>
        <li class="list-inline-item">
          <a class="list-separator-link" href="#">Terms &amp; conditions</a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Separator --&gt;
          &lt;ul class="list-inline list-separator"&gt;
            &lt;li class="list-inline-item"&gt;
              &lt;a class="list-separator-link" href="#"&gt;FAQ&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="list-inline-item"&gt;
              &lt;a class="list-separator-link" href="#"&gt;License&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="list-inline-item"&gt;
              &lt;a class="list-separator-link" href="#"&gt;Terms &amp; conditions&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List Separator --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Use <code>.list-separator-light</code> for a light version in a dark background.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-inline list-separator list-separator-light">
        <li class="list-inline-item">
          <a class="list-separator-link" href="#">FAQ</a>
        </li>
        <li class="list-inline-item">
          <a class="list-separator-link" href="#">License</a>
        </li>
        <li class="list-inline-item">
          <a class="list-separator-link" href="#">Terms &amp; conditions</a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- List Separator --&gt;
          &lt;ul class="list-inline list-separator list-separator-light"&gt;
            &lt;li class="list-inline-item"&gt;
              &lt;a class="list-separator-link" href="#"&gt;FAQ&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="list-inline-item"&gt;
              &lt;a class="list-separator-link" href="#"&gt;License&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="list-inline-item"&gt;
              &lt;a class="list-separator-link" href="#"&gt;Terms &amp; conditions&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End List Separator --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="list-comment" class="nue-docs-heading">
    List comment <a class="anchorjs-link" href="#list-comment" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>.list-comment</code> class and <code>.list-comment-item</code> as a child class for a comment style listing.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="list-comment">
        <li class="list-comment-item">
          <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0">
              <img class="avatar avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="">
            </div>

            <div class="flex-grow-1 ms-3">
              <div class="d-flex justify-content-between align-items-center">
                <h6>Dave Austin</h6>
                <span class="d-block">1 day ago</span>
              </div>
            </div>
          </div>

          <p>As a Special Education teacher this resonates so well with me. Fighting with gen ed teachers to flatten for the students with learning disabilities. It also confirms some things for me in my writing.</p>

          <a class="link" href="#">Reply <i class="bi-chevron-right small ms-1 small ms-1"></i></a>

          <ul class="list-comment">
            <li class="list-comment-item">
              <div class="d-flex align-items-center mb-3">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="">
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6>Christina Kray</h6>
                    <span class="d-block">1 day ago</span>
                  </div>
                </div>
              </div>

              <p>Love it Dave! We're all about keeping it up.</p>

              <a class="link" href="#">Reply <i class="bi-chevron-right small ms-1 small ms-1"></i></a>
            </li>
          </ul>
        </li>

        <li class="list-comment-item">
          <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0">
              <img class="avatar avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt="">
            </div>

            <div class="flex-grow-1 ms-3">
              <div class="d-flex justify-content-between align-items-center">
                <h6>Hanna Wolfe</h6>
                <span class="d-block">2 days ago</span>
              </div>
            </div>
          </div>

          <p>Since our attention spans seem to be shrinking by the day — keeping it simple is more important than ever.</p>

          <a class="link" href="#">Reply <i class="bi-chevron-right small ms-1 small ms-1"></i></a>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Comment --&gt;
          &lt;ul class="list-comment"&gt;
            &lt;!-- Item --&gt;
            &lt;li class="list-comment-item"&gt;
              &lt;!-- Media --&gt;
              &lt;div class="d-flex align-items-center mb-3"&gt;
                &lt;div class="flex-shrink-0"&gt;
                  &lt;img class="avatar avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt=""&gt;
                &lt;/div&gt;

                &lt;div class="flex-grow-1 ms-3"&gt;
                  &lt;div class="d-flex justify-content-between align-items-center"&gt;
                    &lt;h6&gt;Dave Austin&lt;/h6&gt;
                    &lt;span class="d-block"&gt;1 day ago&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End Media --&gt;

              &lt;p&gt;As a Special Education teacher this resonates so well with me. Fighting with gen ed teachers to flatten for the students with learning disabilities. It also confirms some things for me in my writing.&lt;/p&gt;

              &lt;a class="link" href="#"&gt;Reply &lt;i class="bi-chevron-right small ms-1 small ms-1"&gt;&lt;/i&gt;&lt;/a&gt;

              &lt;!-- Comment --&gt;
              &lt;ul class="list-comment"&gt;
                &lt;!-- Item --&gt;
                &lt;li class="list-comment-item"&gt;
                  &lt;!-- Media --&gt;
                  &lt;div class="d-flex align-items-center mb-3"&gt;
                    &lt;div class="flex-shrink-0"&gt;
                      &lt;img class="avatar avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt=""&gt;
                    &lt;/div&gt;

                    &lt;div class="flex-grow-1 ms-3"&gt;
                      &lt;div class="d-flex justify-content-between align-items-center"&gt;
                        &lt;h6&gt;Christina Kray&lt;/h6&gt;
                        &lt;span class="d-block"&gt;1 day ago&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Media --&gt;

                  &lt;p&gt;Love it Dave! We're all about keeping it up.&lt;/p&gt;

                  &lt;a class="link" href="#"&gt;Reply &lt;i class="bi-chevron-right small ms-1 small ms-1"&gt;&lt;/i&gt;&lt;/a&gt;
                &lt;/li&gt;
                &lt;!-- End Item --&gt;
              &lt;/ul&gt;
              &lt;!-- End Comment --&gt;
            &lt;/li&gt;
            &lt;!-- End Item --&gt;

            &lt;!-- Item --&gt;
            &lt;li class="list-comment-item"&gt;
              &lt;!-- Media --&gt;
              &lt;div class="d-flex align-items-center mb-3"&gt;
                &lt;div class="flex-shrink-0"&gt;
                  &lt;img class="avatar avatar-circle" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt=""&gt;
                &lt;/div&gt;

                &lt;div class="flex-grow-1 ms-3"&gt;
                  &lt;div class="d-flex justify-content-between align-items-center"&gt;
                    &lt;h6&gt;Hanna Wolfe&lt;/h6&gt;
                    &lt;span class="d-block"&gt;2 days ago&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End Media --&gt;

              &lt;p&gt;Since our attention spans seem to be shrinking by the day — keeping it simple is more important than ever.&lt;/p&gt;

              &lt;a class="link" href="#"&gt;Reply &lt;i class="bi-chevron-right small ms-1 small ms-1"&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;!-- End Item --&gt;
          &lt;/ul&gt;
          &lt;!-- End Comment --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="list-checked" class="nue-docs-heading">
    List checked <a class="anchorjs-link" href="#list-checked" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Replacing the default <code>list-style</code> and left margin on list items with 3 different styles of checkboxes.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm">
          <ul class="list-checked list-checked-primary">
            <li class="list-checked-item">Dashboard</li>
            <li class="list-checked-item">Profile</li>
            <li class="list-checked-item">Tasks</li>
            <li class="list-checked-item">Projects</li>
            <li class="list-checked-item">Members</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-checked list-checked-bg-primary">
            <li class="list-checked-item">Dashboard</li>
            <li class="list-checked-item">Profile</li>
            <li class="list-checked-item">Tasks</li>
            <li class="list-checked-item">Projects</li>
            <li class="list-checked-item">Members</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-checked list-checked-soft-bg-primary">
            <li class="list-checked-item">Dashboard</li>
            <li class="list-checked-item">Profile</li>
            <li class="list-checked-item">Tasks</li>
            <li class="list-checked-item">Projects</li>
            <li class="list-checked-item">Members</li>
          </ul>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-sm"&gt;
              &lt;!-- List Checked --&gt;
              &lt;ul class="list-checked list-checked-primary"&gt;
                &lt;li class="list-checked-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Checked --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Checked --&gt;
              &lt;ul class="list-checked list-checked-bg-primary"&gt;
                &lt;li class="list-checked-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Checked --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Checked --&gt;
              &lt;ul class="list-checked list-checked-soft-bg-primary"&gt;
                &lt;li class="list-checked-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Checked --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="list-checked-sizings" class="nue-docs-heading">
    List checked Sizings <a class="anchorjs-link" href="#list-checked-sizings" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>.list-checked-sm</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm">
          <ul class="list-checked list-checked-sm list-checked-primary">
            <li class="list-checked-item">Dashboard</li>
            <li class="list-checked-item">Profile</li>
            <li class="list-checked-item">Tasks</li>
            <li class="list-checked-item">Projects</li>
            <li class="list-checked-item">Members</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-checked list-checked-sm list-checked-bg-primary">
            <li class="list-checked-item">Dashboard</li>
            <li class="list-checked-item">Profile</li>
            <li class="list-checked-item">Tasks</li>
            <li class="list-checked-item">Projects</li>
            <li class="list-checked-item">Members</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-checked list-checked-sm list-checked-soft-bg-primary">
            <li class="list-checked-item">Dashboard</li>
            <li class="list-checked-item">Profile</li>
            <li class="list-checked-item">Tasks</li>
            <li class="list-checked-item">Projects</li>
            <li class="list-checked-item">Members</li>
          </ul>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-sm"&gt;
              &lt;!-- List Checked --&gt;
              &lt;ul class="list-checked list-checked-sm list-checked-primary"&gt;
                &lt;li class="list-checked-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Checked --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Checked --&gt;
              &lt;ul class="list-checked list-checked-sm list-checked-bg-primary"&gt;
                &lt;li class="list-checked-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Checked --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Checked --&gt;
              &lt;ul class="list-checked list-checked-sm list-checked-soft-bg-primary"&gt;
                &lt;li class="list-checked-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Checked --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Use <code>.list-checked-lg</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm">
          <ul class="list-checked list-checked-lg list-checked-primary">
            <li class="list-checked-item">Dashboard</li>
            <li class="list-checked-item">Profile</li>
            <li class="list-checked-item">Tasks</li>
            <li class="list-checked-item">Projects</li>
            <li class="list-checked-item">Members</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-checked list-checked-lg list-checked-bg-primary">
            <li class="list-checked-item">Dashboard</li>
            <li class="list-checked-item">Profile</li>
            <li class="list-checked-item">Tasks</li>
            <li class="list-checked-item">Projects</li>
            <li class="list-checked-item">Members</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-checked list-checked-lg list-checked-soft-bg-primary">
            <li class="list-checked-item">Dashboard</li>
            <li class="list-checked-item">Profile</li>
            <li class="list-checked-item">Tasks</li>
            <li class="list-checked-item">Projects</li>
            <li class="list-checked-item">Members</li>
          </ul>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-sm"&gt;
              &lt;!-- List Checked --&gt;
              &lt;ul class="list-checked list-checked-lg list-checked-primary"&gt;
                &lt;li class="list-checked-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Checked --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Checked --&gt;
              &lt;ul class="list-checked list-checked-lg list-checked-bg-primary"&gt;
                &lt;li class="list-checked-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Checked --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Checked --&gt;
              &lt;ul class="list-checked list-checked-lg list-checked-soft-bg-primary"&gt;
                &lt;li class="list-checked-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-checked-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Checked --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="list-checked-color-variations" class="nue-docs-heading">
    Color variations <a class="anchorjs-link" href="#list-checked-color-variations" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm">
          <ul class="list-checked list-checked-primary">
            <li class="list-checked-item">Primary</li>
          </ul>
          <ul class="list-checked list-checked-secondary">
            <li class="list-checked-item">Secondary</li>
          </ul>
          <ul class="list-checked list-checked-success">
            <li class="list-checked-item">Success</li>
          </ul>
          <ul class="list-checked list-checked-danger">
            <li class="list-checked-item">Danger</li>
          </ul>
          <ul class="list-checked list-checked-warning">
            <li class="list-checked-item">Warning</li>
          </ul>
          <ul class="list-checked list-checked-info">
            <li class="list-checked-item">Info</li>
          </ul>
          <ul class="list-checked list-checked-light">
            <li class="list-checked-item">Light</li>
          </ul>
          <ul class="list-checked list-checked-dark">
            <li class="list-checked-item">Dark</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-checked list-checked-bg-primary">
            <li class="list-checked-item">Primary</li>
          </ul>
          <ul class="list-checked list-checked-bg-secondary">
            <li class="list-checked-item">Secondary</li>
          </ul>
          <ul class="list-checked list-checked-bg-success">
            <li class="list-checked-item">Success</li>
          </ul>
          <ul class="list-checked list-checked-bg-danger">
            <li class="list-checked-item">Danger</li>
          </ul>
          <ul class="list-checked list-checked-bg-warning">
            <li class="list-checked-item">Warning</li>
          </ul>
          <ul class="list-checked list-checked-bg-info">
            <li class="list-checked-item">Info</li>
          </ul>
          <ul class="list-checked list-checked-bg-light">
            <li class="list-checked-item">Light</li>
          </ul>
          <ul class="list-checked list-checked-bg-dark">
            <li class="list-checked-item">Dark</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-checked list-checked-soft-bg-primary">
            <li class="list-checked-item">Primary</li>
          </ul>
          <ul class="list-checked list-checked-soft-bg-secondary">
            <li class="list-checked-item">Secondary</li>
          </ul>
          <ul class="list-checked list-checked-soft-bg-success">
            <li class="list-checked-item">Success</li>
          </ul>
          <ul class="list-checked list-checked-soft-bg-danger">
            <li class="list-checked-item">Danger</li>
          </ul>
          <ul class="list-checked list-checked-soft-bg-warning">
            <li class="list-checked-item">Warning</li>
          </ul>
          <ul class="list-checked list-checked-soft-bg-info">
            <li class="list-checked-item">Info</li>
          </ul>
          <ul class="list-checked list-checked-soft-bg-light">
            <li class="list-checked-item">Light</li>
          </ul>
          <ul class="list-checked list-checked-soft-bg-dark">
            <li class="list-checked-item">Dark</li>
          </ul>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-sm"&gt;
              &lt;!-- List Checked --&gt;
              &lt;ul class="list-checked list-checked-primary"&gt;
                &lt;li class="list-checked-item"&gt;Primary&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-secondary"&gt;
                &lt;li class="list-checked-item"&gt;Secondary&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-success"&gt;
                &lt;li class="list-checked-item"&gt;Success&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-danger"&gt;
                &lt;li class="list-checked-item"&gt;Danger&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-warning"&gt;
                &lt;li class="list-checked-item"&gt;Warning&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-info"&gt;
                &lt;li class="list-checked-item"&gt;Info&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-light"&gt;
                &lt;li class="list-checked-item"&gt;Light&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-dark"&gt;
                &lt;li class="list-checked-item"&gt;Dark&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Checked --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Checked --&gt;
              &lt;ul class="list-checked list-checked-bg-primary"&gt;
                &lt;li class="list-checked-item"&gt;Primary&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-bg-secondary"&gt;
                &lt;li class="list-checked-item"&gt;Secondary&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-bg-success"&gt;
                &lt;li class="list-checked-item"&gt;Success&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-bg-danger"&gt;
                &lt;li class="list-checked-item"&gt;Danger&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-bg-warning"&gt;
                &lt;li class="list-checked-item"&gt;Warning&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-bg-info"&gt;
                &lt;li class="list-checked-item"&gt;Info&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-bg-light"&gt;
                &lt;li class="list-checked-item"&gt;Light&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-bg-dark"&gt;
                &lt;li class="list-checked-item"&gt;Dark&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Checked --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Checked --&gt;
              &lt;ul class="list-checked list-checked-soft-bg-primary"&gt;
                &lt;li class="list-checked-item"&gt;Primary&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-soft-bg-secondary"&gt;
                &lt;li class="list-checked-item"&gt;Secondary&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-soft-bg-success"&gt;
                &lt;li class="list-checked-item"&gt;Success&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-soft-bg-danger"&gt;
                &lt;li class="list-checked-item"&gt;Danger&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-soft-bg-warning"&gt;
                &lt;li class="list-checked-item"&gt;Warning&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-soft-bg-info"&gt;
                &lt;li class="list-checked-item"&gt;Info&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-soft-bg-light"&gt;
                &lt;li class="list-checked-item"&gt;Light&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-checked list-checked-soft-bg-dark"&gt;
                &lt;li class="list-checked-item"&gt;Dark&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Checked --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="list-pointer" class="nue-docs-heading">
    List pointer <a class="anchorjs-link" href="#list-pointer" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Replacing the default <code>list-style</code> and left margin on list items with 3 different styles of checkboxes.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm">
          <ul class="list-pointer list-pointer-primary">
            <li class="list-pointer-item">Dashboard</li>
            <li class="list-pointer-item">Profile</li>
            <li class="list-pointer-item">Tasks</li>
            <li class="list-pointer-item">Projects</li>
            <li class="list-pointer-item">Members</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-pointer list-pointer-bg-primary">
            <li class="list-pointer-item">Dashboard</li>
            <li class="list-pointer-item">Profile</li>
            <li class="list-pointer-item">Tasks</li>
            <li class="list-pointer-item">Projects</li>
            <li class="list-pointer-item">Members</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-pointer list-pointer-soft-bg-primary">
            <li class="list-pointer-item">Dashboard</li>
            <li class="list-pointer-item">Profile</li>
            <li class="list-pointer-item">Tasks</li>
            <li class="list-pointer-item">Projects</li>
            <li class="list-pointer-item">Members</li>
          </ul>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-sm"&gt;
              &lt;!-- List Pointer --&gt;
              &lt;ul class="list-pointer list-pointer-primary"&gt;
                &lt;li class="list-pointer-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Pointer --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Pointer --&gt;
              &lt;ul class="list-pointer list-pointer-bg-primary"&gt;
                &lt;li class="list-pointer-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Pointer --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Pointer --&gt;
              &lt;ul class="list-pointer list-pointer-soft-bg-primary"&gt;
                &lt;li class="list-pointer-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Pointer --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="list-pointer-sizings" class="nue-docs-heading">
    List pointer Sizings <a class="anchorjs-link" href="#list-pointer-sizings" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>.list-pointer-sm</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm">
          <ul class="list-pointer list-pointer-sm list-pointer-primary">
            <li class="list-pointer-item">Dashboard</li>
            <li class="list-pointer-item">Profile</li>
            <li class="list-pointer-item">Tasks</li>
            <li class="list-pointer-item">Projects</li>
            <li class="list-pointer-item">Members</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-pointer list-pointer-sm list-pointer-bg-primary">
            <li class="list-pointer-item">Dashboard</li>
            <li class="list-pointer-item">Profile</li>
            <li class="list-pointer-item">Tasks</li>
            <li class="list-pointer-item">Projects</li>
            <li class="list-pointer-item">Members</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-pointer list-pointer-sm list-pointer-soft-bg-primary">
            <li class="list-pointer-item">Dashboard</li>
            <li class="list-pointer-item">Profile</li>
            <li class="list-pointer-item">Tasks</li>
            <li class="list-pointer-item">Projects</li>
            <li class="list-pointer-item">Members</li>
          </ul>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-sm"&gt;
              &lt;!-- List Pointer --&gt;
              &lt;ul class="list-pointer list-pointer-sm list-pointer-primary"&gt;
                &lt;li class="list-pointer-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Pointer --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Pointer --&gt;
              &lt;ul class="list-pointer list-pointer-sm list-pointer-bg-primary"&gt;
                &lt;li class="list-pointer-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Pointer --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Pointer --&gt;
              &lt;ul class="list-pointer list-pointer-sm list-pointer-soft-bg-primary"&gt;
                &lt;li class="list-pointer-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Pointer --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Use <code>.list-pointer-lg</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm">
          <ul class="list-pointer list-pointer-lg list-pointer-primary">
            <li class="list-pointer-item">Dashboard</li>
            <li class="list-pointer-item">Profile</li>
            <li class="list-pointer-item">Tasks</li>
            <li class="list-pointer-item">Projects</li>
            <li class="list-pointer-item">Members</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-pointer list-pointer-lg list-pointer-bg-primary">
            <li class="list-pointer-item">Dashboard</li>
            <li class="list-pointer-item">Profile</li>
            <li class="list-pointer-item">Tasks</li>
            <li class="list-pointer-item">Projects</li>
            <li class="list-pointer-item">Members</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-pointer list-pointer-lg list-pointer-soft-bg-primary">
            <li class="list-pointer-item">Dashboard</li>
            <li class="list-pointer-item">Profile</li>
            <li class="list-pointer-item">Tasks</li>
            <li class="list-pointer-item">Projects</li>
            <li class="list-pointer-item">Members</li>
          </ul>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-sm"&gt;
              &lt;!-- List Pointer --&gt;
              &lt;ul class="list-pointer list-pointer-lg list-pointer-primary"&gt;
                &lt;li class="list-pointer-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Pointer --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Pointer --&gt;
              &lt;ul class="list-pointer list-pointer-lg list-pointer-bg-primary"&gt;
                &lt;li class="list-pointer-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Pointer --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Pointer --&gt;
              &lt;ul class="list-pointer list-pointer-lg list-pointer-soft-bg-primary"&gt;
                &lt;li class="list-pointer-item"&gt;Dashboard&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Profile&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Tasks&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Projects&lt;/li&gt;
                &lt;li class="list-pointer-item"&gt;Members&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Pointer --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="list-pointer-color-variations" class="nue-docs-heading">
    Color variations <a class="anchorjs-link" href="#list-pointer-color-variations" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row">
        <div class="col-sm">
          <ul class="list-pointer list-pointer-primary">
            <li class="list-pointer-item">Primary</li>
          </ul>
          <ul class="list-pointer list-pointer-secondary">
            <li class="list-pointer-item">Secondary</li>
          </ul>
          <ul class="list-pointer list-pointer-success">
            <li class="list-pointer-item">Success</li>
          </ul>
          <ul class="list-pointer list-pointer-danger">
            <li class="list-pointer-item">Danger</li>
          </ul>
          <ul class="list-pointer list-pointer-warning">
            <li class="list-pointer-item">Warning</li>
          </ul>
          <ul class="list-pointer list-pointer-info">
            <li class="list-pointer-item">Info</li>
          </ul>
          <ul class="list-pointer list-pointer-light">
            <li class="list-pointer-item">Light</li>
          </ul>
          <ul class="list-pointer list-pointer-dark">
            <li class="list-pointer-item">Dark</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-pointer list-pointer-bg-primary">
            <li class="list-pointer-item">Primary</li>
          </ul>
          <ul class="list-pointer list-pointer-bg-secondary">
            <li class="list-pointer-item">Secondary</li>
          </ul>
          <ul class="list-pointer list-pointer-bg-success">
            <li class="list-pointer-item">Success</li>
          </ul>
          <ul class="list-pointer list-pointer-bg-danger">
            <li class="list-pointer-item">Danger</li>
          </ul>
          <ul class="list-pointer list-pointer-bg-warning">
            <li class="list-pointer-item">Warning</li>
          </ul>
          <ul class="list-pointer list-pointer-bg-info">
            <li class="list-pointer-item">Info</li>
          </ul>
          <ul class="list-pointer list-pointer-bg-light">
            <li class="list-pointer-item">Light</li>
          </ul>
          <ul class="list-pointer list-pointer-bg-dark">
            <li class="list-pointer-item">Dark</li>
          </ul>
        </div>

        <div class="col-sm">
          <ul class="list-pointer list-pointer-soft-bg-primary">
            <li class="list-pointer-item">Primary</li>
          </ul>
          <ul class="list-pointer list-pointer-soft-bg-secondary">
            <li class="list-pointer-item">Secondary</li>
          </ul>
          <ul class="list-pointer list-pointer-soft-bg-success">
            <li class="list-pointer-item">Success</li>
          </ul>
          <ul class="list-pointer list-pointer-soft-bg-danger">
            <li class="list-pointer-item">Danger</li>
          </ul>
          <ul class="list-pointer list-pointer-soft-bg-warning">
            <li class="list-pointer-item">Warning</li>
          </ul>
          <ul class="list-pointer list-pointer-soft-bg-info">
            <li class="list-pointer-item">Info</li>
          </ul>
          <ul class="list-pointer list-pointer-soft-bg-light">
            <li class="list-pointer-item">Light</li>
          </ul>
          <ul class="list-pointer list-pointer-soft-bg-dark">
            <li class="list-pointer-item">Dark</li>
          </ul>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row"&gt;
            &lt;div class="col-sm"&gt;
              &lt;!-- List Pointer --&gt;
              &lt;ul class="list-pointer list-pointer-primary"&gt;
                &lt;li class="list-pointer-item"&gt;Primary&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-secondary"&gt;
                &lt;li class="list-pointer-item"&gt;Secondary&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-success"&gt;
                &lt;li class="list-pointer-item"&gt;Success&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-danger"&gt;
                &lt;li class="list-pointer-item"&gt;Danger&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-warning"&gt;
                &lt;li class="list-pointer-item"&gt;Warning&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-info"&gt;
                &lt;li class="list-pointer-item"&gt;Info&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-light"&gt;
                &lt;li class="list-pointer-item"&gt;Light&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-dark"&gt;
                &lt;li class="list-pointer-item"&gt;Dark&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Pointer --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Pointer --&gt;
              &lt;ul class="list-pointer list-pointer-bg-primary"&gt;
                &lt;li class="list-pointer-item"&gt;Primary&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-bg-secondary"&gt;
                &lt;li class="list-pointer-item"&gt;Secondary&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-bg-success"&gt;
                &lt;li class="list-pointer-item"&gt;Success&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-bg-danger"&gt;
                &lt;li class="list-pointer-item"&gt;Danger&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-bg-warning"&gt;
                &lt;li class="list-pointer-item"&gt;Warning&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-bg-info"&gt;
                &lt;li class="list-pointer-item"&gt;Info&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-bg-light"&gt;
                &lt;li class="list-pointer-item"&gt;Light&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-bg-dark"&gt;
                &lt;li class="list-pointer-item"&gt;Dark&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Pointer --&gt;
            &lt;/div&gt;

            &lt;div class="col-sm"&gt;
              &lt;!-- List Pointer --&gt;
              &lt;ul class="list-pointer list-pointer-soft-bg-primary"&gt;
                &lt;li class="list-pointer-item"&gt;Primary&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-soft-bg-secondary"&gt;
                &lt;li class="list-pointer-item"&gt;Secondary&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-soft-bg-success"&gt;
                &lt;li class="list-pointer-item"&gt;Success&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-soft-bg-danger"&gt;
                &lt;li class="list-pointer-item"&gt;Danger&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-soft-bg-warning"&gt;
                &lt;li class="list-pointer-item"&gt;Warning&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-soft-bg-info"&gt;
                &lt;li class="list-pointer-item"&gt;Info&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-soft-bg-light"&gt;
                &lt;li class="list-pointer-item"&gt;Light&lt;/li&gt;
              &lt;/ul&gt;
              &lt;ul class="list-pointer list-pointer-soft-bg-dark"&gt;
                &lt;li class="list-pointer-item"&gt;Dark&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End List Pointer --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection