@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Pagination')

@section('content')
  <x-nue::docs::header>
    Pagination
    <x-slot:link>https://getbootstrap.com/docs/5.0/components/pagination</x-slot:link>
    <x-slot:label>Dokumentasi Bootstrap Pagination</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Pagination --&gt;
          &lt;nav aria-label="Page navigation example"&gt;
            &lt;ul class="pagination"&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;Previous&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/nav&gt;
          &lt;!-- End Pagination --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="working-with-icons" class="nue-docs-heading">
    Working with icons <a class="anchorjs-link" href="#working-with-icons" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="visually-hidden">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span class="visually-hidden">Next</span>
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Pagination --&gt;
          &lt;nav aria-label="Page navigation example"&gt;
            &lt;ul class="pagination"&gt;
              &lt;li class="page-item"&gt;
                &lt;a class="page-link" href="#" aria-label="Previous"&gt;
                  &lt;span aria-hidden="true"&gt;&laquo;&lt;/span&gt;
                  &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
                &lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;
                &lt;a class="page-link" href="#" aria-label="Next"&gt;
                  &lt;span aria-hidden="true"&gt;&raquo;&lt;/span&gt;
                  &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
                &lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/nav&gt;
          &lt;!-- End Pagination --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="disabled-and-active-states" class="nue-docs-heading">
    Disabled and active states <a class="anchorjs-link" href="#disabled-and-active-states" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Pagination links are customizable for different circumstances. Use <code>.disabled</code> for links that appear un-clickable and <code>.active</code> to indicate the current page.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active">
            <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Pagination --&gt;
          &lt;nav aria-label="..."&gt;
            &lt;ul class="pagination"&gt;
              &lt;li class="page-item disabled"&gt;
                &lt;a class="page-link" href="#" tabindex="-1"&gt;Previous&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item active"&gt;
                &lt;a class="page-link" href="#"&gt;2 &lt;span class="visually-hidden"&gt;(current)&lt;/span&gt;&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;
                &lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/nav&gt;
          &lt;!-- End Pagination --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="sizing" class="nue-docs-heading">
    Sizing <a class="anchorjs-link" href="#sizing" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <nav aria-label="...">
        <ul class="pagination pagination-lg">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">1</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
      </nav>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Pagination --&gt;
          &lt;nav aria-label="..."&gt;
            &lt;ul class="pagination pagination-lg"&gt;
              &lt;li class="page-item disabled"&gt;
                &lt;a class="page-link" href="#" tabindex="-1"&gt;1&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/nav&gt;
          &lt;!-- End Pagination --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <nav aria-label="...">
        <ul class="pagination pagination-sm">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">1</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
      </nav>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Pagination --&gt;
          &lt;nav aria-label="..."&gt;
            &lt;ul class="pagination pagination-sm"&gt;
              &lt;li class="page-item disabled"&gt;
                &lt;a class="page-link" href="#" tabindex="-1"&gt;1&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/nav&gt;
          &lt;!-- End Pagination --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="alignment" class="nue-docs-heading">
    Alignment <a class="anchorjs-link" href="#alignment" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Change the alignment of pagination components with <a class="link" href="http://getbootstrap.com/docs/4.5/utilities/flex/" target="_blank">flexbox utilities <i class="bi-box-arrow-up-right"></i></a>.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Pagination --&gt;
          &lt;nav aria-label="Page navigation example"&gt;
            &lt;ul class="pagination justify-content-center"&gt;
              &lt;li class="page-item disabled"&gt;
                &lt;a class="page-link" href="#" tabindex="-1"&gt;Previous&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;
                &lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/nav&gt;
          &lt;!-- End Pagination --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Pagination --&gt;
          &lt;nav aria-label="Page navigation example"&gt;
            &lt;ul class="pagination justify-content-end"&gt;
              &lt;li class="page-item disabled"&gt;
                &lt;a class="page-link" href="#" tabindex="-1"&gt;Previous&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;
                &lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/nav&gt;
          &lt;!-- End Pagination --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-pager" class="nue-docs-heading">
    With pager <a class="anchorjs-link" href="#with-pager" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <nav class="d-sm-flex justify-content-sm-between align-items-sm-center text-center" aria-label="Page navigation example">
        <ul class="pagination justify-content-center justify-content-sm-end">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>

        <small class="text-muted">Showing 3 of 8</small>
      </nav>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Pagination --&gt;
          &lt;nav class="d-sm-flex justify-content-sm-between align-items-sm-center text-center" aria-label="Page navigation example"&gt;
            &lt;ul class="pagination justify-content-center justify-content-sm-end"&gt;
              &lt;li class="page-item disabled"&gt;
                &lt;a class="page-link" href="#" tabindex="-1"&gt;Previous&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
              &lt;li class="page-item"&gt;
                &lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;

            &lt;small class="text-muted"&gt;Showing 3 of 8&lt;/small&gt;
          &lt;/nav&gt;
          &lt;!-- End Pagination --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

@endsection