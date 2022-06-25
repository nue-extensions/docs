@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Steps')

@section('content')
  <x-nue::docs::header>
    Steps
  </x-nue::docs::header>

  <h2 id="horizontal-example" class="nue-docs-heading">
    Horizontal <a class="anchorjs-link" href="#horizontal-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step step-md">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">1</span>
            <div class="step-content">
              <h4 class="step-title">First step</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">2</span>
            <div class="step-content">
              <h4 class="step-title">Second step</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">3</span>
            <div class="step-content">
              <h4 class="step-title">Third step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step step-md"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;1&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;First step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;2&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;Second step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;3&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;Third step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">1</span>
            <div class="step-content">
              <h4>First step</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">2</span>
            <div class="step-content">
              <h4>Second step</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">3</span>
            <div class="step-content">
              <h4>Third step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;1&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;First step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;2&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Second step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;3&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Third step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="color-variations" class="nue-docs-heading">
    Color variations <a class="anchorjs-link" href="#color-variations" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-primary step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Primary</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-secondary step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Secondary</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-success step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Success</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-danger step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Danger</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-warning step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Warning</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-info step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Info</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-dark step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Dark</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-light step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Light</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Primary&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-secondary step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Secondary&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-success step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Success&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-danger step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Danger&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-warning step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Warning&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-info step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Info&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-dark step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Dark&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-light step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Light&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Primary</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-secondary step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Secondary</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-success step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Success</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-danger step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Danger</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-warning step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Warning</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Info</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Dark</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-light step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Light</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-soft-primary step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Primary&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-secondary step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Secondary&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-success step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Success&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-danger step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Danger&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-warning step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Warning&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-info step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Info&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-dark step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Dark&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-light step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Light&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="sizes" class="nue-docs-heading">
    Sizes <a class="anchorjs-link" href="#sizes" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step step-md step-icon-lg">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">1</span>
            <div class="step-content">
              <h4 class="step-title">First step</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">2</span>
            <div class="step-content">
              <h4 class="step-title">Second step</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">3</span>
            <div class="step-content">
              <h4 class="step-title">Third step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step step-md step-icon-lg"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;1&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;First step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;2&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;Second step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;3&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;Third step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step step-md step-icon-sm">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">1</span>
            <div class="step-content">
              <h4 class="step-title">First step</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">2</span>
            <div class="step-content">
              <h4 class="step-title">Second step</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">3</span>
            <div class="step-content">
              <h4 class="step-title">Third step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step step-md step-icon-sm"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;1&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;First step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;2&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;Second step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;3&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;Third step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step step-md step-icon-xs">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">1</span>
            <div class="step-content">
              <h4 class="step-title">First step</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">2</span>
            <div class="step-content">
              <h4 class="step-title">Second step</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">3</span>
            <div class="step-content">
              <h4 class="step-title">Third step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step step-md step-icon-xs"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;1&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;First step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;2&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;Second step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;3&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;Third step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="horizontally-center-aligned" class="nue-docs-heading">
    Horizontally center aligned <a class="anchorjs-link" href="#horizontally-center-aligned" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step step-md step-centered">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">1</span>
            <div class="step-content">
              <h4 class="step-title">First step</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">2</span>
            <div class="step-content">
              <h4 class="step-title">Second step</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">3</span>
            <div class="step-content">
              <h4 class="step-title">Third step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step step-md step-centered"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;1&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;First step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;2&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;Second step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;3&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4 class="step-title"&gt;Third step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="inline-steps" class="nue-docs-heading">
    Inline steps <a class="anchorjs-link" href="#inline-steps" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step step-xl step-inline">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">1</span>
            <div class="step-content">
              <span class="step-title">General info</span>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">2</span>
            <div class="step-content">
              <span class="step-title">Billing address</span>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">4</span>
            <div class="step-content">
              <span class="step-title">Confirmation</span>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step step-xl step-inline"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;1&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;span class="step-title"&gt;General info&lt;/span&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;2&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;span class="step-title"&gt;Billing address&lt;/span&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;4&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;span class="step-title"&gt;Confirmation&lt;/span&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="item-between" class="nue-docs-heading">
    Item between <a class="anchorjs-link" href="#item-between" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step step-xl step-inline step-item-between">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">1</span>
            <div class="step-content">
              <span class="step-title">General info</span>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">2</span>
            <div class="step-content">
              <span class="step-title">Billing address</span>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">3</span>
            <div class="step-content">
              <span class="step-title">Confirmation</span>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step step-xl step-inline step-item-between"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;1&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;span class="step-title"&gt;General info&lt;/span&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;2&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;span class="step-title"&gt;Billing address&lt;/span&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;3&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;span class="step-title"&gt;Confirmation&lt;/span&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="last-item-borderless" class="nue-docs-heading">
    Last item borderless <a class="anchorjs-link" href="#last-item-borderless" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Gunain <code>.step-border-last-0</code> untuk menghilangkan border yang muncul di item terakhir.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step step-md step-border-last-0">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">1</span>
            <div class="step-content">
              <h4>First step</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">2</span>
            <div class="step-content">
              <h4>Second step</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">3</span>
            <div class="step-content">
              <h4>Third step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step step-md step-border-last-0"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;1&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;First step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;2&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Second step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;3&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Third step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dashed-style" class="nue-docs-heading">
    Dashed style <a class="anchorjs-link" href="#dashed-style" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Gunain <code>.step-dashed</code> untuk menggunakan garis putus-putus.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step step-md step-dashed">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">1</span>
            <div class="step-content">
              <h4>First step</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">2</span>
            <div class="step-content">
              <h4>Second step</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">3</span>
            <div class="step-content">
              <h4>Third step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step step-md step-dashed"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;1&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;First step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;2&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Second step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;3&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Third step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="icon-style" class="nue-docs-heading">
    Icon style <a class="anchorjs-link" href="#icon-style" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Tambahin <code>.step-icon-pseudo</code> setelah class <code>.step-icon</code> untuk menggunakan gaya yang berbeda.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step step-md">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary step-icon-pseudo"></span>
            <div class="step-content">
              <h4>First step</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Second step</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary step-icon-pseudo"></span>
            <div class="step-content">
              <h4>Third step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step step-md step-dashed"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;First step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Second step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary step-icon-pseudo"&gt;&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Third step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Atau bisa menggunakan icons.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step step-md">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-chevron-right"></i>
            </span>
            <div class="step-content">
              <h4>First step</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-chevron-right"></i>
            </span>
            <div class="step-content">
              <h4>Second step</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-chevron-right"></i>
            </span>
            <div class="step-content">
              <h4>Third step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step step-md step-dashed"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;
                  &lt;i class="bi-chevron-right"&gt;&lt;/i&gt;
                &lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;First step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;
                  &lt;i class="bi-chevron-right"&gt;&lt;/i&gt;
                &lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Second step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;
                  &lt;i class="bi-chevron-right"&gt;&lt;/i&gt;
                &lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Third step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="avatars" class="nue-docs-heading">
    Avatars <a class="anchorjs-link" href="#avatars" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step">
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="">
            </div>
            <div class="step-content">
              <h4>Avatar</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="">
            </div>
            <div class="step-content">
              <h4>Avatar</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="">
            </div>
            <div class="step-content">
              <h4>Avatar</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;div class="step-avatar"&gt;
                  &lt;img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt=""&gt;
                &lt;/div&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Avatar&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;div class="step-avatar"&gt;
                  &lt;img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt=""&gt;
                &lt;/div&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Avatar&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;div class="step-avatar"&gt;
                  &lt;img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt=""&gt;
                &lt;/div&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Avatar&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="dividers" class="nue-docs-heading">
    Dividers <a class="anchorjs-link" href="#dividers" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Gunakan <code>.step-divider</code> untuk memisahkan jarak dengan tanggal, nama atau teks apapun.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step">
        <li class="step-item">
          <div class="step-content-wrapper">
            <small class="step-divider">Today</small>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="">
            </div>

            <div class="step-content">
              <h5 class="mb-1">
                <a class="text-dark" href="#">Iana Robinson</a>
              </h5>

              <p class="font-size-sm">Uploaded weekly reports to the task <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i></a></p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">
                <a class="text-dark" href="#">Bob Dean</a>
              </h5>

              <p class="font-size-sm">Marked project status as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <small class="step-divider">Yesterday</small>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="">
            </div>

            <div class="step-content">
              <h5 class="mb-1">
                <a class="text-dark" href="#">David Harrison</a>
              </h5>

              <p class="font-size-sm">Added 5 new card styles to <a class="link" href="#">Payments</a></p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">
                <a class="text-dark" href="#">David Lidell</a>
              </h5>

              <p class="font-size-sm">Added a new member to Front</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt="">
            </div>

            <div class="step-content">
              <h5 class="mb-1">
                <a class="text-dark" href="#">Rachel King</a>
              </h5>

              <p class="font-size-sm">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <small class="step-divider">Last week</small>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="">
            </div>

            <div class="step-content">
              <h5 class="mb-1">
                <a class="text-dark" href="#">Mark Williams</a>
              </h5>

              <p class="font-size-sm">Attached two files.</p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-2">
                      <i class="bi-paperclip"></i>
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span class="d-block text-dark text-truncate">Requirements.figma</span>
                      <small class="d-block">8mb</small>
                    </div>
                  </div>
                </li>

                <li class="list-group-item list-group-item-light">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-2">
                      <i class="bi-paperclip"></i>
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span class="d-block text-dark text-truncate">Requirements.sketch</span>
                      <small class="d-block">4mb</small>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">C</span>

            <div class="step-content">
              <h5 class="mb-1">
                <a class="text-dark" href="#">Costa Quinn</a>
              </h5>

              <p class="font-size-sm">Marked project status as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step"&gt;
            &lt;!-- Step Item --&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;small class="step-divider"&gt;Today&lt;/small&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;!-- End Step Item --&gt;

            &lt;!-- Step Item --&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;div class="step-avatar"&gt;
                  &lt;img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt=""&gt;
                &lt;/div&gt;

                &lt;div class="step-content"&gt;
                  &lt;h5 class="mb-1"&gt;
                    &lt;a class="text-dark" href="#"&gt;Iana Robinson&lt;/a&gt;
                  &lt;/h5&gt;

                  &lt;p class="font-size-sm"&gt;Uploaded weekly reports to the task &lt;a class="text-uppercase" href="#"&gt;&lt;i class="bi-journal-bookmark-fill"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;!-- End Step Item --&gt;

            &lt;!-- Step Item --&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-dark"&gt;B&lt;/span&gt;

                &lt;div class="step-content"&gt;
                  &lt;h5 class="mb-1"&gt;
                    &lt;a class="text-dark" href="#"&gt;Bob Dean&lt;/a&gt;
                  &lt;/h5&gt;

                  &lt;p class="font-size-sm"&gt;Marked project status as &lt;span class="badge badge-soft-primary badge-pill"&gt;&lt;span class="legend-indicator bg-primary"&gt;&lt;/span&gt;"In progress"&lt;/span&gt;&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;!-- End Step Item --&gt;

            &lt;!-- Step Item --&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;small class="step-divider"&gt;Yesterday&lt;/small&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;!-- End Step Item --&gt;

            &lt;!-- Step Item --&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;div class="step-avatar"&gt;
                  &lt;img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt=""&gt;
                &lt;/div&gt;

                &lt;div class="step-content"&gt;
                  &lt;h5 class="mb-1"&gt;
                    &lt;a class="text-dark" href="#"&gt;David Harrison&lt;/a&gt;
                  &lt;/h5&gt;

                  &lt;p class="font-size-sm"&gt;Added 5 new card styles to &lt;a href="#"&gt;Payments&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;!-- End Step Item --&gt;

            &lt;!-- Step Item --&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-info"&gt;D&lt;/span&gt;

                &lt;div class="step-content"&gt;
                  &lt;h5 class="mb-1"&gt;
                    &lt;a class="text-dark" href="#"&gt;David Lidell&lt;/a&gt;
                  &lt;/h5&gt;

                  &lt;p class="font-size-sm"&gt;Added a new member to Front&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;!-- End Step Item --&gt;

            &lt;!-- Step Item --&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;div class="step-avatar"&gt;
                  &lt;img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt=""&gt;
                &lt;/div&gt;

                &lt;div class="step-content"&gt;
                  &lt;h5 class="mb-1"&gt;
                    &lt;a class="text-dark" href="#"&gt;Rachel King&lt;/a&gt;
                  &lt;/h5&gt;

                  &lt;p class="font-size-sm"&gt;Earned a "Top endorsed" &lt;i class="bi-patch-check-fill text-primary"&gt;&lt;/i&gt; badge&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;!-- End Step Item --&gt;

            &lt;!-- Step Item --&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;small class="step-divider"&gt;Last week&lt;/small&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;!-- End Step Item --&gt;

            &lt;!-- Step Item --&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;div class="step-avatar"&gt;
                  &lt;img class="step-avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt=""&gt;
                &lt;/div&gt;

                &lt;div class="step-content"&gt;
                  &lt;h5 class="mb-1"&gt;
                    &lt;a class="text-dark" href="#"&gt;Mark Williams&lt;/a&gt;
                  &lt;/h5&gt;

                  &lt;p class="font-size-sm"&gt;Attached two files.&lt;/p&gt;

                  &lt;ul class="list-group list-group-sm"&gt;
                    &lt;!-- List Item --&gt;
                    &lt;li class="list-group-item list-group-item-light"&gt;
                      &lt;div class="d-flex"&gt;
                        &lt;div class="flex-shrink-0 me-2"&gt;
                          &lt;i class="bi-paperclip"&gt;&lt;/i&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 text-truncate ms-2"&gt;
                          &lt;span class="d-block text-dark text-truncate"&gt;Requirements.figma&lt;/span&gt;
                          &lt;small class="d-block"&gt;8mb&lt;/small&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;!-- End List Item --&gt;

                    &lt;!-- List Item --&gt;
                    &lt;li class="list-group-item list-group-item-light"&gt;
                      &lt;div class="d-flex"&gt;
                        &lt;div class="flex-shrink-0 me-2"&gt;
                          &lt;i class="bi-paperclip"&gt;&lt;/i&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 text-truncate ms-2"&gt;
                          &lt;span class="d-block text-dark text-truncate"&gt;Requirements.sketch&lt;/span&gt;
                          &lt;small class="d-block"&gt;4mb&lt;/small&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;!-- End List Item --&gt;
                  &lt;/ul&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;!-- End Step Item --&gt;

            &lt;!-- Step Item --&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;C&lt;/span&gt;

                &lt;div class="step-content"&gt;
                  &lt;h5 class="mb-1"&gt;
                    &lt;a class="text-dark" href="#"&gt;Costa Quinn&lt;/a&gt;
                  &lt;/h5&gt;

                  &lt;p class="font-size-sm"&gt;Marked project status as &lt;span class="badge badge-soft-primary badge-pill"&gt;&lt;span class="legend-indicator bg-primary"&gt;&lt;/span&gt;"In progress"&lt;/span&gt;&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;!-- End Step Item --&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="timeline" class="nue-docs-heading">
    Timeline <a class="anchorjs-link" href="#timeline" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <ul class="step step-timeline-md">
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">1</span>
            <div class="step-content">
              <h4>First step</h4>
              <p class="step-text">Achieve virtually any design and layout from within the one template.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">2</span>
            <div class="step-content">
              <h4>Second step</h4>
              <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">3</span>
            <div class="step-content">
              <h4>Third step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">4</span>
            <div class="step-content">
              <h4>Fourth step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>

        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">5</span>
            <div class="step-content">
              <h4>Fifth step</h4>
              <p class="step-text">Find what you need in one template and combine features at will.</p>
            </div>
          </div>
        </li>
      </ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Step --&gt;
          &lt;ul class="step step-timeline-md"&gt;
            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;1&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;First step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Achieve virtually any design and layout from within the one template.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;2&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Second step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;We strive to figure out ways to help your business grow through all platforms.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;3&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Third step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;4&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Fourth step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;

            &lt;li class="step-item"&gt;
              &lt;div class="step-content-wrapper"&gt;
                &lt;span class="step-icon step-icon-soft-primary"&gt;5&lt;/span&gt;
                &lt;div class="step-content"&gt;
                  &lt;h4&gt;Fifth step&lt;/h4&gt;
                  &lt;p class="step-text"&gt;Find what you need in one template and combine features at will.&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End Step --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection