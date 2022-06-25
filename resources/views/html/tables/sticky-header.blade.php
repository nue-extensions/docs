@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Sticky Header')

@section('js')
	<script>
		// INITIALIZATION OF STICKY HEADER
      // =======================================================
      new NueTableStickyHeader('.js-sticky-header', {
        offsetTop: "60px"
      }).init();
	</script>
@endsection

@section('content')
  <x-nue::docs::header>
    Sticky Header
    <x-slot:description>Make a table thead sticky to the top of a page, card or any other content.</x-slot:description>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code></p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        $(document).on('ready', function () {
          // INITIALIZATION OF STICKY HEADER
          // =======================================================
          new NueTableStickyHeader('.js-sticky-header', {
            offsetTop: "60px"
          }).init();
        });
      &lt;/script&gt;
    </code>
  </pre>

  <br/>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-sticky-header">
        <div class="table-responsive">
          <table class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle">
            <thead class="thead-light">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Country</th>
                <th scope="col">Status</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-6 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-6">Human resources</span>
                </td>
                <td>United Kingdom <span class="visually-hidden">Code: GB</span></td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">A</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Anne Richard</span>
                      <span class="d-block fs-6 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-6">Branding products</span>
                </td>
                <td>United States <span class="visually-hidden">Code: US</span></td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-6 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-6">Unknown</span>
                </td>
                <td>United States <span class="visually-hidden">Code: US</span></td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-6 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-6">IT department</span>
                </td>
                <td>Argentina <span class="visually-hidden">Code: AR</span></td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-dark avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-6 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-6">Marketing</span>
                </td>
                <td>Austria <span class="visually-hidden">Code: AT</span></td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Ella Lauda <i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-6 text-body">ella@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-6">All departments</span>
                </td>
                <td>United Kingdom <span class="visually-hidden">Code: GB</span></td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-info avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lori Hunter</span>
                      <span class="d-block fs-6 text-body">hunter@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-6">Mobile app</span>
                </td>
                <td>Estonia <span class="visually-hidden">Code: EE</span></td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">M</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Mark Colbert</span>
                      <span class="d-block fs-6 text-body">mark@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-6">Human resources</span>
                </td>
                <td>Canada <span class="visually-hidden">Code: CA</span></td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Costa Quinn</span>
                      <span class="d-block fs-6 text-body">costa@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-6">All departments</span>
                </td>
                <td>France <span class="visually-hidden">Code: FR</span></td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-danger avatar-circle">
                      <span class="avatar-initials">R</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Rachel Doe <i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-6 text-body">rachel@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Accountant</span>
                  <span class="d-block fs-6">Finance</span>
                </td>
                <td>United States <span class="visually-hidden">Code: US</span></td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Linda Bates</span>
                      <span class="d-block fs-6 text-body">linda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-6">Unknown</span>
                </td>
                <td>United Kingdom <span class="visually-hidden">Code: UK</span></td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-info avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Brian Halligan</span>
                      <span class="d-block fs-6 text-body">brian@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-6">Accounting</span>
                </td>
                <td>France <span class="visually-hidden">Code: FR</span></td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-dark avatar-circle">
                      <span class="avatar-initials">C</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Chris Mathew</span>
                      <span class="d-block fs-6 text-body">chris@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-6">Mobile app</span>
                </td>
                <td>Switzerland <span class="visually-hidden">Code: CH</span></td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Clarice Boone <i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-6 text-body">clarice@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-6">Branding products</span>
                </td>
                <td>United Kingdom <span class="visually-hidden">Code: UK</span></td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-dark avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lewis Clarke</span>
                      <span class="d-block fs-6 text-body">lewis@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-6">IT department</span>
                </td>
                <td>Switzerland <span class="visually-hidden">Code: CH</span></td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Sam Kart</span>
                      <span class="d-block fs-6 text-body">sam@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-6">Branding</span>
                </td>
                <td>Canada <span class="visually-hidden">Code: CA</span></td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-danger avatar-circle">
                      <span class="avatar-initials">J</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Johnny Appleseed</span>
                      <span class="d-block fs-6 text-body">johnny@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Accountant</span>
                  <span class="d-block fs-6">Human resources</span>
                </td>
                <td>United States <span class="visually-hidden">Code: US</span></td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-danger avatar-circle">
                      <span class="avatar-initials">P</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Phileas Fogg</span>
                      <span class="d-block fs-6 text-body">phileas@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-6">Branding</span>
                </td>
                <td>Spain <span class="visually-hidden">Code: ES</span></td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Mark Williams <i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-6 text-body">mark@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-6">Branding</span>
                </td>
                <td>United Kingdom <span class="visually-hidden">Code: GB</span></td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-dark avatar-circle">
                      <span class="avatar-initials">T</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Timothy Silva</span>
                      <span class="d-block fs-6 text-body">timothy@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-6">Mobile app</span>
                </td>
                <td>Italy <span class="visually-hidden">Code: IT</span></td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-dark avatar-circle">
                      <span class="avatar-initials">G</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Gary Bishop <i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-6 text-body">gary@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-6">Mobile app</span>
                </td>
                <td>Latvia <span class="visually-hidden">Code: LV</span></td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-dark avatar-circle">
                      <span class="avatar-initials">Y</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Yorker Scogings</span>
                      <span class="d-block fs-6 text-body">yorker@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-6">Branding products</span>
                </td>
                <td>Norway <span class="visually-hidden">Code: NO</span></td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-info avatar-circle">
                      <span class="avatar-initials">F</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Frank Phillips</span>
                      <span class="d-block fs-6 text-body">frank@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-6">Unknown</span>
                </td>
                <td>Norway <span class="visually-hidden">Code: NO</span></td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">E</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Elizabeth Carter</span>
                      <span class="d-block fs-6 text-body">eliz@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-6">Unknown</span>
                </td>
                <td>United States <span class="visually-hidden">Code: UK</span></td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="js-sticky-header"&gt;
            &lt;!-- Table --&gt;
            &lt;div class="table-responsive"&gt;
              &lt;table class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle"&gt;
                &lt;thead class="thead-light"&gt;
                  &lt;tr&gt;
                    &lt;th scope="col"&gt;Name&lt;/th&gt;
                    &lt;th scope="col"&gt;Position&lt;/th&gt;
                    &lt;th scope="col"&gt;Country&lt;/th&gt;
                    &lt;th scope="col"&gt;Status&lt;/th&gt;
                  &lt;/tr&gt;
                &lt;/thead&gt;

                &lt;tbody&gt;
                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-circle"&gt;
                          &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt=""&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Amanda Harvey &lt;i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"&gt;&lt;/i&gt;&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;amanda@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Director&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Human resources&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;United Kingdom &lt;span class="visually-hidden"&gt;Code: GB&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-primary avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;A&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Anne Richard&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;anne@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Seller&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Branding products&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;United States &lt;span class="visually-hidden"&gt;Code: US&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-warning"&gt;&lt;/span&gt;Pending
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-circle"&gt;
                          &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt=""&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;David Harrison&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;david@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Unknown&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Unknown&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;United States &lt;span class="visually-hidden"&gt;Code: US&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-circle"&gt;
                          &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt=""&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Finch Hoot&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;finch@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Designer&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;IT department&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Argentina &lt;span class="visually-hidden"&gt;Code: AR&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-danger"&gt;&lt;/span&gt;Suspended
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-dark avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;B&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Bob Dean&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;bob@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Executive director&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Marketing&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Austria &lt;span class="visually-hidden"&gt;Code: AT&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-circle"&gt;
                          &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt=""&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Ella Lauda &lt;i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"&gt;&lt;/i&gt;&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;ella@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Co-founder&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;All departments&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;United Kingdom &lt;span class="visually-hidden"&gt;Code: GB&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-info avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;L&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Lori Hunter&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;hunter@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Developer&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Mobile app&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Estonia &lt;span class="visually-hidden"&gt;Code: EE&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-primary avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;M&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Mark Colbert&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;mark@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Executive director&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Human resources&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Canada &lt;span class="visually-hidden"&gt;Code: CA&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-circle"&gt;
                          &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt=""&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Costa Quinn&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;costa@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Co-founder&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;All departments&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;France &lt;span class="visually-hidden"&gt;Code: FR&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-warning"&gt;&lt;/span&gt;Pending
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-danger avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;R&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Rachel Doe &lt;i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"&gt;&lt;/i&gt;&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;rachel@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Accountant&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Finance&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;United States &lt;span class="visually-hidden"&gt;Code: US&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-circle"&gt;
                          &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt=""&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Linda Bates&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;linda@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Unknown&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Unknown&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;United Kingdom &lt;span class="visually-hidden"&gt;Code: UK&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-danger"&gt;&lt;/span&gt;Suspended
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-info avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;B&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Brian Halligan&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;brian@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Director&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Accounting&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;France &lt;span class="visually-hidden"&gt;Code: FR&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-dark avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;C&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Chris Mathew&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;chris@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Developer&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Mobile app&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Switzerland &lt;span class="visually-hidden"&gt;Code: CH&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-warning"&gt;&lt;/span&gt;Pending
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-circle"&gt;
                          &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt=""&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Clarice Boone &lt;i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"&gt;&lt;/i&gt;&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;clarice@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Seller&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Branding products&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;United Kingdom &lt;span class="visually-hidden"&gt;Code: UK&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-dark avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;L&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Lewis Clarke&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;lewis@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Co-founder&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;IT department&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Switzerland &lt;span class="visually-hidden"&gt;Code: CH&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-warning"&gt;&lt;/span&gt;Pending
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-circle"&gt;
                          &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt=""&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Sam Kart&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;sam@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Designer&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Branding&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Canada &lt;span class="visually-hidden"&gt;Code: CA&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-warning"&gt;&lt;/span&gt;Pending
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-danger avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;J&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Johnny Appleseed&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;johnny@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Accountant&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Human resources&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;United States &lt;span class="visually-hidden"&gt;Code: US&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-danger avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;P&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Phileas Fogg&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;phileas@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Designer&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Branding&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Spain &lt;span class="visually-hidden"&gt;Code: ES&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-danger"&gt;&lt;/span&gt;Suspended
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-circle"&gt;
                          &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt=""&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Mark Williams &lt;i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"&gt;&lt;/i&gt;&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;mark@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Co-founder&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Branding&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;United Kingdom &lt;span class="visually-hidden"&gt;Code: GB&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-dark avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;T&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Timothy Silva&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;timothy@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Developer&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Mobile app&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Italy &lt;span class="visually-hidden"&gt;Code: IT&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-warning"&gt;&lt;/span&gt;Pending
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-dark avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;G&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Gary Bishop &lt;i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"&gt;&lt;/i&gt;&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;gary@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Developer&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Mobile app&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Latvia &lt;span class="visually-hidden"&gt;Code: LV&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Active
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-dark avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;Y&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Yorker Scogings&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;yorker@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Seller&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Branding products&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Norway &lt;span class="visually-hidden"&gt;Code: NO&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-danger"&gt;&lt;/span&gt;Suspended
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-info avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;F&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Frank Phillips&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;frank@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Unknown&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Unknown&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Norway &lt;span class="visually-hidden"&gt;Code: NO&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-danger"&gt;&lt;/span&gt;Suspended
                    &lt;/td&gt;
                  &lt;/tr&gt;

                  &lt;tr&gt;
                    &lt;td&gt;
                      &lt;a class="d-flex align-items-center" href=""&gt;
                        &lt;div class="avatar avatar-soft-primary avatar-circle"&gt;
                          &lt;span class="avatar-initials"&gt;E&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1 ms-3"&gt;
                          &lt;span class="d-block h5 text-inherit mb-0"&gt;Elizabeth Carter&lt;/span&gt;
                          &lt;span class="d-block fs-6 text-body"&gt;eliz@example.com&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                    &lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="d-block h5 mb-0"&gt;Unknown&lt;/span&gt;
                      &lt;span class="d-block fs-6"&gt;Unknown&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td&gt;United States &lt;span class="visually-hidden"&gt;Code: UK&lt;/span&gt;&lt;/td&gt;
                    &lt;td&gt;
                      &lt;span class="legend-indicator bg-warning"&gt;&lt;/span&gt;Pending
                    &lt;/td&gt;
                  &lt;/tr&gt;
                &lt;/tbody&gt;
              &lt;/table&gt;
            &lt;/div&gt;
            &lt;!-- End Table --&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="methods" class="nue-docs-heading">
    Methods <a class="anchorjs-link" href="#methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <div class="card overflow-hidden">
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
              <p><code>offsetTop</code></p>
            </td>
            <td>Add custom offset from top in px</td>
            <td><code>0</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection