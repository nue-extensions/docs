@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Tables')

@section('content')
  <x-nue::docs::header>
    Tables
    <x-slot:link>https://getbootstrap.com/docs/5.0/content/tables/</x-slot:link>
    <x-slot:label>Bootstrap Tables</x-slot:label>
  </x-nue::docs::header>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Table --&gt;
          &lt;table class="table"&gt;
            &lt;thead&gt;
              &lt;tr&gt;
                &lt;th scope="col">#&lt;/th&gt;
                &lt;th scope="col">First&lt;/th&gt;
                &lt;th scope="col">Last&lt;/th&gt;
                &lt;th scope="col">Handle&lt;/th&gt;
              &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
              &lt;tr&gt;
                &lt;th scope="row">1&lt;/th&gt;
                &lt;td>Mark&lt;/td&gt;
                &lt;td>Otto&lt;/td&gt;
                &lt;td>@mdo&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th scope="row">2&lt;/th&gt;
                &lt;td>Jacob&lt;/td&gt;
                &lt;td>Thornton&lt;/td&gt;
                &lt;td>@fat&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th scope="row">3&lt;/th&gt;
                &lt;td>Larry&lt;/td&gt;
                &lt;td>the Bird&lt;/td&gt;
                &lt;td>@twitter&lt;/td&gt;
              &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
          &lt;!-- End Table --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="thead-light" class="nue-docs-heading">
    Thead light <a class="anchorjs-link" href="#thead-light" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use the modifier classes <code>.thead-light</code> to make <code>&lt;thead&gt;</code>s appear light.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Table --&gt;
          &lt;table class="table"&gt;
            &lt;thead class="thead-light"&gt;
              &lt;tr&gt;
                &lt;th scope="col">#&lt;/th&gt;
                &lt;th scope="col">First&lt;/th&gt;
                &lt;th scope="col">Last&lt;/th&gt;
                &lt;th scope="col">Handle&lt;/th&gt;
              &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
              &lt;tr&gt;
                &lt;th scope="row">1&lt;/th&gt;
                &lt;td>Mark&lt;/td&gt;
                &lt;td>Otto&lt;/td&gt;
                &lt;td>@mdo&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th scope="row">2&lt;/th&gt;
                &lt;td>Jacob&lt;/td&gt;
                &lt;td>Thornton&lt;/td&gt;
                &lt;td>@fat&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th scope="row">3&lt;/th&gt;
                &lt;td>Larry&lt;/td&gt;
                &lt;td>the Bird&lt;/td&gt;
                &lt;td>@twitter&lt;/td&gt;
              &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
          &lt;!-- End Table --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="table-thead-bordered" class="nue-docs-heading">
    Table thead bordered <a class="anchorjs-link" href="#table-thead-bordered" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Add border to the top of the <code>thead</code> with the <code>.thead-light</code> class where <code>.table-borderless</code> class is used.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <table class="table table-borderless table-thead-bordered">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Table --&gt;
          &lt;table class="table table-borderless table-thead-bordered"&gt;
            &lt;thead class="thead-light"&gt;
              &lt;tr&gt;
                &lt;th scope="col">#&lt;/th&gt;
                &lt;th scope="col">First&lt;/th&gt;
                &lt;th scope="col">Last&lt;/th&gt;
                &lt;th scope="col">Handle&lt;/th&gt;
              &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
              &lt;tr&gt;
                &lt;th scope="row">1&lt;/th&gt;
                &lt;td>Mark&lt;/td&gt;
                &lt;td>Otto&lt;/td&gt;
                &lt;td>@mdo&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th scope="row">2&lt;/th&gt;
                &lt;td>Jacob&lt;/td&gt;
                &lt;td>Thornton&lt;/td&gt;
                &lt;td>@fat&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th scope="row">3&lt;/th&gt;
                &lt;td>Larry&lt;/td&gt;
                &lt;td>the Bird&lt;/td&gt;
                &lt;td>@twitter&lt;/td&gt;
              &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
          &lt;!-- End Table --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="table-nowrap" class="nue-docs-heading">
    Table nowrap <a class="anchorjs-link" href="#table-nowrap" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p><code>.table-nowrap</code> fixes horizontal scrollbar/alignment in responsive.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="table-responsive">
        <table class="table table-nowrap">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Table --&gt;
          &lt;div class="div class="table-responsive""&gt;
            &lt;table class="table table-nowrap"&gt;
              &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th scope="col">#&lt;/th&gt;
                  &lt;th scope="col">First&lt;/th&gt;
                  &lt;th scope="col">Last&lt;/th&gt;
                  &lt;th scope="col">Handle&lt;/th&gt;
                &lt;/tr&gt;
              &lt;/thead&gt;
              &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;th scope="row">1&lt;/th&gt;
                  &lt;td>Mark&lt;/td&gt;
                  &lt;td>Otto&lt;/td&gt;
                  &lt;td>@mdo&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;th scope="row">2&lt;/th&gt;
                  &lt;td>Jacob&lt;/td&gt;
                  &lt;td>Thornton&lt;/td&gt;
                  &lt;td>@fat&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;th scope="row">3&lt;/th&gt;
                  &lt;td>Larry&lt;/td&gt;
                  &lt;td>the Bird&lt;/td&gt;
                  &lt;td>@twitter&lt;/td&gt;
                &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
          &lt;/div&gt;
          &lt;!-- End Table --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="table-align-middle" class="nue-docs-heading">
    Table align middle <a class="anchorjs-link" href="#table-align-middle" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Vertically center align <code>tbody</code> items with the <code>.table-align-middle</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="table-responsive">
        <table class="table table-align-middle">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark<br>Markus</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob<br>Jacy</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry<br>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Table --&gt;
          &lt;div class="div class="table-responsive""&gt;
            &lt;table class="table table-align-middle"&gt;
              &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th scope="col">#&lt;/th&gt;
                  &lt;th scope="col">First&lt;/th&gt;
                  &lt;th scope="col">Last&lt;/th&gt;
                  &lt;th scope="col">Handle&lt;/th&gt;
                &lt;/tr&gt;
              &lt;/thead&gt;
              &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;th scope="row">1&lt;/th&gt;
                  &lt;td>Mark&lt;br&gt;Markus&lt;/td&gt;
                  &lt;td>Otto&lt;/td&gt;
                  &lt;td>@mdo&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;th scope="row">2&lt;/th&gt;
                  &lt;td>Jacob&lt;br&gt;Jacy&lt;/td&gt;
                  &lt;td>Thornton&lt;/td&gt;
                  &lt;td>@fat&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;th scope="row">3&lt;/th&gt;
                  &lt;td>Larry&lt;br&gt;Larry&lt;/td&gt;
                  &lt;td>the Bird&lt;/td&gt;
                  &lt;td>@twitter&lt;/td&gt;
                &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
          &lt;/div&gt;
          &lt;!-- End Table --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="table-text-center" class="nue-docs-heading">
    Table text center <a class="anchorjs-link" href="#table-text-center" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Center align items with the <code>.table-text-center</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="table-responsive">
        <table class="table table-text-center">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Table --&gt;
          &lt;div class="div class="table-responsive""&gt;
            &lt;table class="table table-text-center"&gt;
              &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th scope="col">#&lt;/th&gt;
                  &lt;th scope="col">First&lt;/th&gt;
                  &lt;th scope="col">Last&lt;/th&gt;
                  &lt;th scope="col">Handle&lt;/th&gt;
                &lt;/tr&gt;
              &lt;/thead&gt;
              &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;th scope="row">1&lt;/th&gt;
                  &lt;td>Mark&lt;/td&gt;
                  &lt;td>Otto&lt;/td&gt;
                  &lt;td>@mdo&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;th scope="row">2&lt;/th&gt;
                  &lt;td>Jacob&lt;/td&gt;
                  &lt;td>Thornton&lt;/td&gt;
                  &lt;td>@fat&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;th scope="row">3&lt;/th&gt;
                  &lt;td>Larry&lt;/td&gt;
                  &lt;td>the Bird&lt;/td&gt;
                  &lt;td>@twitter&lt;/td&gt;
                &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
          &lt;/div&gt;
          &lt;!-- End Table --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="table-text-end" class="nue-docs-heading">
    Table text end <a class="anchorjs-link" href="#table-text-end" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Right align items with the <code>.table-text-end</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="table-responsive">
        <table class="table table-text-end">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Table --&gt;
          &lt;div class="div class="table-responsive""&gt;
            &lt;table class="table table-text-end"&gt;
              &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th scope="col">#&lt;/th&gt;
                  &lt;th scope="col">First&lt;/th&gt;
                  &lt;th scope="col">Last&lt;/th&gt;
                  &lt;th scope="col">Handle&lt;/th&gt;
                &lt;/tr&gt;
              &lt;/thead&gt;
              &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;th scope="row">1&lt;/th&gt;
                  &lt;td>Mark&lt;/td&gt;
                  &lt;td>Otto&lt;/td&gt;
                  &lt;td>@mdo&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;th scope="row">2&lt;/th&gt;
                  &lt;td>Jacob&lt;/td&gt;
                  &lt;td>Thornton&lt;/td&gt;
                  &lt;td>@fat&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;th scope="row">3&lt;/th&gt;
                  &lt;td>Larry&lt;/td&gt;
                  &lt;td>the Bird&lt;/td&gt;
                  &lt;td>@twitter&lt;/td&gt;
                &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
          &lt;/div&gt;
          &lt;!-- End Table --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="sizes" class="nue-docs-heading">
    Sizes <a class="anchorjs-link" href="#sizes" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>.table-lg</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <table class="table table-lg">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Table --&gt;
          &lt;table class="table table-lg"&gt;
            &lt;thead&gt;
              &lt;tr&gt;
                &lt;th scope="col">#&lt;/th&gt;
                &lt;th scope="col">First&lt;/th&gt;
                &lt;th scope="col">Last&lt;/th&gt;
                &lt;th scope="col">Handle&lt;/th&gt;
              &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
              &lt;tr&gt;
                &lt;th scope="row">1&lt;/th&gt;
                &lt;td>Mark&lt;/td&gt;
                &lt;td>Otto&lt;/td&gt;
                &lt;td>@mdo&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th scope="row">2&lt;/th&gt;
                &lt;td>Jacob&lt;/td&gt;
                &lt;td>Thornton&lt;/td&gt;
                &lt;td>@fat&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th scope="row">3&lt;/th&gt;
                &lt;td>Larry&lt;/td&gt;
                &lt;td>the Bird&lt;/td&gt;
                &lt;td>@twitter&lt;/td&gt;
              &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
          &lt;!-- End Table --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Use <code>.table-sm</code> class.</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Table --&gt;
          &lt;table class="table table-sm"&gt;
            &lt;thead&gt;
              &lt;tr&gt;
                &lt;th scope="col">#&lt;/th&gt;
                &lt;th scope="col">First&lt;/th&gt;
                &lt;th scope="col">Last&lt;/th&gt;
                &lt;th scope="col">Handle&lt;/th&gt;
              &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
              &lt;tr&gt;
                &lt;th scope="row">1&lt;/th&gt;
                &lt;td>Mark&lt;/td&gt;
                &lt;td>Otto&lt;/td&gt;
                &lt;td>@mdo&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th scope="row">2&lt;/th&gt;
                &lt;td>Jacob&lt;/td&gt;
                &lt;td>Thornton&lt;/td&gt;
                &lt;td>@fat&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th scope="row">3&lt;/th&gt;
                &lt;td>Larry&lt;/td&gt;
                &lt;td>the Bird&lt;/td&gt;
                &lt;td>@twitter&lt;/td&gt;
              &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
          &lt;!-- End Table --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="other-classes-to-note" class="nue-docs-heading">
    Other classes to note <a class="anchorjs-link" href="#other-classes-to-note" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <div class="card overflow-hidden">
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
            <td><code>.table-input-group</code></td>
            <td>Adds <code>min-width: 14rem;</code> to an <code>input-group</code></td>
          </tr>

          <tr>
            <td><code>.table-progress</code></td>
            <td>Replaces the default width and heights.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection