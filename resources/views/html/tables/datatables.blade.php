@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Datatable')

@section('js')
	<script>
		// INITIALIZATION OF SORTABLE
    // =======================================================
    Nue.components.NueSortable.init('.js-sortable')


    // INITIALIZATION OF DATATABLES
    // =======================================================
    Nue.components.NueDatatables.init('.js-datatable')


    // INITIALIZATION OF DATATABLES
    // =======================================================
    const datatbleWithFilter = Nue.components.NueDatatables.getItem('datatbleWithFilter')

    document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
      item.addEventListener('change', function(e) {
        const elVal = e.target.value,
                targetColumnIndex = e.target.getAttribute('data-target-column-index'),
                targetTable = e.target.getAttribute('data-target-table');

        Nue.components.NueDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
      })
    })

    // INITIALIZATION OF DATATABLES
    // =======================================================
    Nue.components.NueDatatables.init('.js-datatable-checkboxes', {
      select: {
        style: 'multi',
        selector: 'td:first-child input[type="checkbox"]',
        classMap: {
          checkAll: '#datatableWithCheckboxSelectAll',
          counter: '#datatableWithCheckboxSelectCounter',
          counterInfo: '#datatableWithCheckboxSelectCounterInfo'
        }
      }
    })


    // INITIALIZATION OF SELECT
    // =======================================================
    Nue.components.NueSelect.init('.js-select')


    // INITIALIZATION OF DATATABLES
    // =======================================================
    const datatableColumnSearch = Nue.components.NueDatatables.getItem('datatableColumnSearch')

    document.getElementById('column1_search').addEventListener('keyup', function () {
      datatableColumnSearch
        .columns(0)
        .search(this.value)
        .draw()
    })

    document.getElementById('column2_search').addEventListener('keyup', function () {
      datatableColumnSearch
        .columns(1)
        .search(this.value)
        .draw()
    })

    document.getElementById('column3_search').addEventListener('keyup', function () {
      datatableColumnSearch
        .columns(2)
        .search(this.value)
        .draw()
    })


    // INITIALIZATION OF DATATABLES
    // =======================================================
    const datatableDatepickerFilter = Nue.components.NueDatatables.getItem('datatableDatepickerFilter')

    Nue.components.NueDaterangepicker.init('.js-daterangepicker')
    const daterangepicker = Nue.components.NueDaterangepicker.getItem(0)

    var startDate = null,
            endDate = null

    daterangepicker.on('apply.daterangepicker', function (ev, picker) {
      this.value = picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY')

      startDate = moment(picker.startDate.format('MM/DD/YYYY'))
      endDate = moment(picker.endDate.format('MM/DD/YYYY'))

      datatableDatepickerFilter.draw()
    })

    daterangepicker.on('cancel.daterangepicker', function (ev, picker) {
      this.value = ''

      startDate = null
      endDate = null

      datatableDatepickerFilter.draw()
    })

    $.fn.dataTable.ext.search.push(
      function (settings, data, dataIndex) {
        if (!startDate || !endDate) return true
        let compareDate = moment(moment(data[4]).format('MM/DD/YYYY'))
        return compareDate.isBetween(startDate, endDate)
      }
    )


    // INITIALIZATION OF DATATABLES
    // =======================================================
    const datatableSortingColumn = Nue.components.NueDatatables.getItem('columnSorting')

    document.getElementById('toggleColumn_position').addEventListener('change', function (e) {
      datatableSortingColumn.columns(1).visible(e.target.checked)
    })

    document.getElementById('toggleColumn_country').addEventListener('change', function (e) {
      datatableSortingColumn.columns(2).visible(e.target.checked)
    })

    document.getElementById('toggleColumn_status').addEventListener('change', function (e) {
      datatableSortingColumn.columns(3).visible(e.target.checked)
    })


    // INITIALIZATION OF DATATABLES
    // =======================================================
    const exportDatatable = Nue.components.NueDatatables.getItem('exportDatatable')

    document.getElementById('export-copy').addEventListener('click', function () {
      exportDatatable.button('.buttons-copy').trigger()
    })

    document.getElementById('export-excel').addEventListener('click', function () {
      exportDatatable.button('.buttons-excel').trigger()
    })

    document.getElementById('export-csv').addEventListener('click', function () {
      exportDatatable.button('.buttons-csv').trigger()
    })

    document.getElementById('export-pdf').addEventListener('click', function () {
      exportDatatable.button('.buttons-pdf').trigger()
    })

    document.getElementById('export-print').addEventListener('click', function () {
      exportDatatable.button('.buttons-print').trigger()
    })


    // INITIALIZATION OF DATATABLES
    // =======================================================
    const data = [
      {
        "id": "1",
        "name": "Tiger Nixon",
        "position": "System Architect",
        "salary": "$320,800",
        "start_date": "2011/04/25",
        "office": "Edinburgh",
        "extn": "5421"
      },
      {
        "id": "2",
        "name": "Garrett Winters",
        "position": "Accountant",
        "salary": "$170,750",
        "start_date": "2011/07/25",
        "office": "Tokyo",
        "extn": "8422"
      },
      {
        "id": "3",
        "name": "Ashton Cox",
        "position": "Junior Technical Author",
        "salary": "$86,000",
        "start_date": "2009/01/12",
        "office": "San Francisco",
        "extn": "1562"
      },
      {
        "id": "4",
        "name": "Cedric Kelly",
        "position": "Senior Javascript Developer",
        "salary": "$433,060",
        "start_date": "2012/03/29",
        "office": "Edinburgh",
        "extn": "6224"
      },
      {
        "id": "5",
        "name": "Airi Satou",
        "position": "Accountant",
        "salary": "$162,700",
        "start_date": "2008/11/28",
        "office": "Tokyo",
        "extn": "5407"
      }
    ]

    /* Formatting function for row details - modify as you need */
    function format (d) {
      // `d` is the original data object for the row
      return '<table>'+
              '<tr>'+
              '<td>Full name:</td>'+
              '<td>'+d.name+'</td>'+
              '</tr>'+
              '<tr>'+
              '<td>Extension number:</td>'+
              '<td>'+d.extn+'</td>'+
              '</tr>'+
              '<tr>'+
              '<td>Extra info:</td>'+
              '<td>And any further details here (images etc)...</td>'+
              '</tr>'+
              '</table>'
    }

    Nue.components.NueDatatables.init('#datatableChildRows', {
      "data": data,
      "columns": [
        {
          "className": 'details-control',
          "orderable": false,
          "data": null,
          "defaultContent": ''
        },
        { "data": "name" },
        { "data": "position" },
        { "data": "office" },
        { "data": "salary" }
      ],
      order: []
    })

    const datatableCollapasble = Nue.components.NueDatatables.getItem('datatableChildRows')

    // ADD EVENT LISTENER FOR OPENING AND CLOSING DETAILS
    // =======================================================
    document.querySelector('#datatableChildRows tbody').addEventListener('click', function (e) {
      if (!e.target.closest('td.details-control')) return
      const tr = e.target.closest('tr'),
        row = datatableCollapasble.row(tr);

      if (row.child.isShown()) {
        // This row is already open - close it
        row.child.hide()
        tr.classList.remove('shown')
      }
      else {
        // Open this row
        row.child(format(row.data())).show()
        tr.classList.add('shown')
      }
    })
	</script>
@endsection

@section('content')
  <x-nue::docs::header>
    Datatables
    <x-slot:link>https://datatables.net/</x-slot:link>
    <x-slot:label>Dokumentasi Datatables</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste the init function under <em><u>JS Plugins Init.</u></em>, before the closing <code>&lt;/body&gt;</code> tag, to enable it.</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function () {
          // INITIALIZATION OF DATATABLES
          // =======================================================
          Nue.components.NueDatatables.init('.js-datatable')
        })()
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <h4 class="card-header-title">Users</h4>
        </div>

        <div class="table-responsive datatable-custom">
          <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                         "order": []
                       }'>
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
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
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
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
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
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;table-responsive datatable-custom&quot;&gt;
            &lt;table class=&quot;js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                   data-nue-datatables-options='{
                           &quot;order&quot;: []
                         }'&gt;
              &lt;thead class=&quot;thead-light&quot;&gt;
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
              &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                  &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;ms-3&quot;&gt;
                  &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United Kingdom&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                 &lt;td&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td&gt;
              &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                  &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;ms-3&quot;&gt;
                  &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td&gt;
              &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                  &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;ms-3&quot;&gt;
                  &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Argentina&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                 &lt;td&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Austria&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-pagination" class="nue-docs-heading">
    With pagination <a class="anchorjs-link" href="#with-pagination" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <h4 class="card-header-title">Users</h4>
        </div>

        <div class="table-responsive datatable-custom">
          <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                         "order": [],
                         "isResponsive": false,
                         "isShowPaging": false,
                         "pagination": "datatableWithPaginationPagination"
                       }'>
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
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
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
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
                </td>
                <td>Austria</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">ella@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">All departments</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lori Hunter</span>
                      <span class="d-block fs-5 text-body">hunter@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Estonia</td>
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
                      <span class="d-block fs-5 text-body">mark@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>Canada</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Costa Quinn</span>
                      <span class="d-block fs-5 text-body">costa@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">All departments</span>
                </td>
                <td>France</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">R</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Rachel Doe <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">rachel@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Accountant</span>
                  <span class="d-block fs-5">Finance</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Linda Bates</span>
                      <span class="d-block fs-5 text-body">linda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Brian Halligan</span>
                      <span class="d-block fs-5 text-body">brian@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Accounting</span>
                </td>
                <td>France</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">C</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Chris Mathew</span>
                      <span class="d-block fs-5 text-body">chris@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Switzerland</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Clarice Boone <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">clarice@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lewis Clarke</span>
                      <span class="d-block fs-5 text-body">lewis@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Switzerland</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Sam Kart</span>
                      <span class="d-block fs-5 text-body">sam@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">Branding</span>
                </td>
                <td>Canada</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">J</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Johnny Appleseed</span>
                      <span class="d-block fs-5 text-body">johnny@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Accountant</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">P</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Phileas Fogg</span>
                      <span class="d-block fs-5 text-body">phileas@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">Branding</span>
                </td>
                <td>Spain</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Mark Williams <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">mark@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">Branding</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">T</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Timothy Silva</span>
                      <span class="d-block fs-5 text-body">timothy@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Italy</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">G</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Gary Bishop <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">gary@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Latvia</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">Y</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Yorker Scogings</span>
                      <span class="d-block fs-5 text-body">yorker@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>Norway</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">F</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Frank Phillips</span>
                      <span class="d-block fs-5 text-body">frank@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>Norway</td>
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
                      <span class="d-block fs-5 text-body">eliz@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="card-footer">
          <div class="d-flex justify-content-center justify-content-sm-end">
            <nav id="datatableWithPaginationPagination" aria-label="Activity pagination"></nav>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;card&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
              &lt;h4 class=&quot;card-header-title&quot;&gt;Users&lt;/h4&gt;
            &lt;/div&gt;

            &lt;!-- Table --&gt;
            &lt;div class=&quot;table-responsive datatable-custom&quot;&gt;
              &lt;table class=&quot;js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                     data-nue-datatables-options='{
                             &quot;order&quot;: [],
                             &quot;isResponsive&quot;: false,
                             &quot;isShowPaging&quot;: false,
                             &quot;pagination&quot;: &quot;datatableWithPaginationPagination&quot;
                           }'&gt;
                &lt;thead class=&quot;thead-light&quot;&gt;
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
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Argentina&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Austria&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Ella Lauda &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;ella@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;All departments&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;L&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Lori Hunter&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;hunter@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Estonia&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;M&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Mark Colbert&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;mark@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Canada&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Costa Quinn&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;costa@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;All departments&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;France&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;R&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Rachel Doe &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;rachel@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Accountant&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Finance&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Linda Bates&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;linda@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Brian Halligan&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;brian@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Accounting&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;France&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;C&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Chris Mathew&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;chris@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Switzerland&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Clarice Boone &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;clarice@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;L&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Lewis Clarke&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;lewis@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Switzerland&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Sam Kart&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;sam@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Canada&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;J&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Johnny Appleseed&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;johnny@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Accountant&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;P&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Phileas Fogg&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;phileas@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Spain&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Mark Williams &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;mark@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;T&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Timothy Silva&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;timothy@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Italy&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;G&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Gary Bishop &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;gary@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Latvia&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;Y&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Yorker Scogings&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;yorker@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Norway&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;F&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Frank Phillips&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;frank@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Norway&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;E&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Elizabeth Carter&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;eliz@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;
                &lt;/tbody&gt;
              &lt;/table&gt;
            &lt;/div&gt;
            &lt;!-- End Table --&gt;

            &lt;!-- Footer --&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
              &lt;!-- Pagination --&gt;
              &lt;div class=&quot;d-flex justify-content-center justify-content-sm-end&quot;&gt;
                &lt;nav id=&quot;datatableWithPaginationPagination&quot; aria-label=&quot;Activity pagination&quot;&gt;&lt;/nav&gt;
              &lt;/div&gt;
              &lt;!-- End Pagination --&gt;
            &lt;/div&gt;
            &lt;!-- End Footer --&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <br/>
  <p>Example with entries:</p>
  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <h4 class="card-header-title">Users</h4>
        </div>

        <div class="table-responsive datatable-custom">
          <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                         "order": [],
                         "info": {
                           "totalQty": "#datatableEntriesInfoTotalQty"
                         },
                         "entries": "#datatableEntries",
                         "isResponsive": false,
                         "isShowPaging": false,
                         "pagination": "datatableEntriesPagination"
                       }'>
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
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
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
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
                </td>
                <td>Austria</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">ella@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">All departments</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lori Hunter</span>
                      <span class="d-block fs-5 text-body">hunter@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Estonia</td>
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
                      <span class="d-block fs-5 text-body">mark@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>Canada</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Costa Quinn</span>
                      <span class="d-block fs-5 text-body">costa@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">All departments</span>
                </td>
                <td>France</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">R</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Rachel Doe <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">rachel@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Accountant</span>
                  <span class="d-block fs-5">Finance</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Linda Bates</span>
                      <span class="d-block fs-5 text-body">linda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Brian Halligan</span>
                      <span class="d-block fs-5 text-body">brian@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Accounting</span>
                </td>
                <td>France</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">C</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Chris Mathew</span>
                      <span class="d-block fs-5 text-body">chris@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Switzerland</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Clarice Boone <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">clarice@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lewis Clarke</span>
                      <span class="d-block fs-5 text-body">lewis@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Switzerland</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Sam Kart</span>
                      <span class="d-block fs-5 text-body">sam@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">Branding</span>
                </td>
                <td>Canada</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">J</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Johnny Appleseed</span>
                      <span class="d-block fs-5 text-body">johnny@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Accountant</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">P</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Phileas Fogg</span>
                      <span class="d-block fs-5 text-body">phileas@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">Branding</span>
                </td>
                <td>Spain</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Mark Williams <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">mark@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">Branding</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">T</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Timothy Silva</span>
                      <span class="d-block fs-5 text-body">timothy@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Italy</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">G</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Gary Bishop <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">gary@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Latvia</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">Y</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Yorker Scogings</span>
                      <span class="d-block fs-5 text-body">yorker@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>Norway</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">F</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Frank Phillips</span>
                      <span class="d-block fs-5 text-body">frank@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>Norway</td>
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
                      <span class="d-block fs-5 text-body">eliz@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="card-footer">
          <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div class="col-sm mb-2 mb-sm-0">
              <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                <span class="me-2">Showing:</span>

                <div class="tom-select-custom">
                  <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-nue-tom-select-options='{
                      "searchInDropdown": false,
                      "hideSearch": true
                    }'>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8" selected>8</option>
                    <option value="12">12</option>
                  </select>
                </div>

                <span class="text-secondary me-2">of</span>

                <span id="datatableEntriesInfoTotalQty"></span>
              </div>
            </div>

            <div class="col-sm-auto">
              <div class="d-flex justify-content-center justify-content-sm-end">
                <nav id="datatableEntriesPagination" aria-label="Activity pagination"></nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;card&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
              &lt;h4 class=&quot;card-header-title&quot;&gt;Users&lt;/h4&gt;
            &lt;/div&gt;

            &lt;!-- Table --&gt;
            &lt;div class=&quot;table-responsive datatable-custom&quot;&gt;
              &lt;table class=&quot;js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                     data-nue-datatables-options='{
                             &quot;order&quot;: [],
                             &quot;info&quot;: {
                               &quot;totalQty&quot;: &quot;#datatableEntriesInfoTotalQty&quot;
                             },
                             &quot;entries&quot;: &quot;#datatableEntries&quot;,
                             &quot;isResponsive&quot;: false,
                             &quot;isShowPaging&quot;: false,
                             &quot;pagination&quot;: &quot;datatableEntriesPagination&quot;
                           }'&gt;
                &lt;thead class=&quot;thead-light&quot;&gt;
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
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Argentina&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Austria&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Ella Lauda &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;ella@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;All departments&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;L&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Lori Hunter&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;hunter@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Estonia&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;M&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Mark Colbert&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;mark@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Canada&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Costa Quinn&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;costa@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;All departments&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;France&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;R&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Rachel Doe &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;rachel@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Accountant&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Finance&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Linda Bates&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;linda@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Brian Halligan&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;brian@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Accounting&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;France&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;C&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Chris Mathew&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;chris@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Switzerland&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Clarice Boone &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;clarice@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;L&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Lewis Clarke&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;lewis@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Switzerland&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Sam Kart&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;sam@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Canada&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;J&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Johnny Appleseed&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;johnny@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Accountant&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;P&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Phileas Fogg&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;phileas@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Spain&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Mark Williams &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;mark@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;T&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Timothy Silva&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;timothy@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Italy&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;G&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Gary Bishop &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;gary@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Latvia&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;Y&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Yorker Scogings&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;yorker@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Norway&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;F&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Frank Phillips&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;frank@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Norway&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;E&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Elizabeth Carter&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;eliz@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;
                &lt;/tbody&gt;
              &lt;/table&gt;
            &lt;/div&gt;
            &lt;!-- End Table --&gt;

            &lt;!-- Footer --&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
              &lt;!-- Pagination --&gt;
              &lt;div class=&quot;row justify-content-center justify-content-sm-between align-items-sm-center&quot;&gt;
                &lt;div class=&quot;col-sm mb-2 mb-sm-0&quot;&gt;
                  &lt;div class=&quot;d-flex justify-content-center justify-content-sm-start align-items-center&quot;&gt;
                    &lt;span class=&quot;me-2&quot;&gt;Showing:&lt;/span&gt;

                    &lt;!-- Select --&gt;
                    &lt;div class=&quot;tom-select-custom&quot;&gt;
                      &lt;select id=&quot;datatableEntries&quot; class=&quot;js-select form-select form-select-borderless w-auto&quot; autocomplete=&quot;off&quot;
                              data-nue-tom-select-options='{
                          &quot;searchInDropdown&quot;: false,
                          &quot;hideSearch&quot;: true
                        }'&gt;
                        &lt;option value=&quot;4&quot;&gt;4&lt;/option&gt;
                        &lt;option value=&quot;6&quot;&gt;6&lt;/option&gt;
                        &lt;option value=&quot;8&quot; selected&gt;8&lt;/option&gt;
                        &lt;option value=&quot;12&quot;&gt;12&lt;/option&gt;
                      &lt;/select&gt;
                    &lt;/div&gt;
                    &lt;!-- End Select --&gt;

                    &lt;span class=&quot;text-secondary me-2&quot;&gt;of&lt;/span&gt;

                    &lt;!-- Pagination Quantity --&gt;
                    &lt;span id=&quot;datatableEntriesInfoTotalQty&quot;&gt;&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/div&gt;

                &lt;div class=&quot;col-sm-auto&quot;&gt;
                  &lt;div class=&quot;d-flex justify-content-center justify-content-sm-end&quot;&gt;
                    &lt;!-- Pagination --&gt;
                    &lt;nav id=&quot;datatableEntriesPagination&quot; aria-label=&quot;Activity pagination&quot;&gt;&lt;/nav&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End Pagination --&gt;
            &lt;/div&gt;
            &lt;!-- End Footer --&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              // INITIALIZATION OF SELECT
              // =======================================================
              Nue.components.NueSelect.init('.js-select')

              document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
                  item.addEventListener('change', function(e) {
                    const elVal = e.target.value,
                            targetColumnIndex = e.target.getAttribute('data-target-column-index'),
                            targetTable = e.target.getAttribute('data-target-table');

                    Nue.components.NueDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
                  })
                })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="with-search" class="nue-docs-heading">
    With search <a class="anchorjs-link" href="#with-search" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-12 col-md">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header-title">Users</h5>
              </div>
            </div>

            <div class="col-auto">
              <form>
                <div class="input-group input-group-merge input-group-flush">
                  <div class="input-group-prepend input-group-text">
                    <i class="bi-search"></i>
                  </div>
                  <input id="datatableWithSearchInput" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="table-responsive datatable-custom">
          <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                         "order": [],
                         "search": "#datatableWithSearchInput",
                         "isResponsive": false,
                         "isShowPaging": false,
                         "pagination": "datatableWithSearchPagination"
                       }'>
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
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
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
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
                </td>
                <td>Austria</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">ella@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">All departments</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lori Hunter</span>
                      <span class="d-block fs-5 text-body">hunter@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Estonia</td>
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
                      <span class="d-block fs-5 text-body">mark@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>Canada</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Costa Quinn</span>
                      <span class="d-block fs-5 text-body">costa@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">All departments</span>
                </td>
                <td>France</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">R</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Rachel Doe <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">rachel@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Accountant</span>
                  <span class="d-block fs-5">Finance</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Linda Bates</span>
                      <span class="d-block fs-5 text-body">linda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Brian Halligan</span>
                      <span class="d-block fs-5 text-body">brian@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Accounting</span>
                </td>
                <td>France</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">C</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Chris Mathew</span>
                      <span class="d-block fs-5 text-body">chris@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Switzerland</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Clarice Boone <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">clarice@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lewis Clarke</span>
                      <span class="d-block fs-5 text-body">lewis@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Switzerland</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Sam Kart</span>
                      <span class="d-block fs-5 text-body">sam@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">Branding</span>
                </td>
                <td>Canada</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">J</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Johnny Appleseed</span>
                      <span class="d-block fs-5 text-body">johnny@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Accountant</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">P</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Phileas Fogg</span>
                      <span class="d-block fs-5 text-body">phileas@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">Branding</span>
                </td>
                <td>Spain</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Mark Williams <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">mark@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">Branding</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">T</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Timothy Silva</span>
                      <span class="d-block fs-5 text-body">timothy@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Italy</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">G</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Gary Bishop <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">gary@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Latvia</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">Y</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Yorker Scogings</span>
                      <span class="d-block fs-5 text-body">yorker@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>Norway</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">F</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Frank Phillips</span>
                      <span class="d-block fs-5 text-body">frank@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>Norway</td>
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
                      <span class="d-block fs-5 text-body">eliz@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="card-footer">
          <div class="d-flex justify-content-center justify-content-sm-end">
            <nav id="datatableWithSearchPagination" aria-label="Activity pagination"></nav>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;card&quot;&gt;
            &lt;!-- Header --&gt;
            &lt;div class=&quot;card-header&quot;&gt;
              &lt;div class=&quot;row justify-content-between align-items-center flex-grow-1&quot;&gt;
                &lt;div class=&quot;col-12 col-md&quot;&gt;
                  &lt;div class=&quot;d-flex justify-content-between align-items-center&quot;&gt;
                    &lt;h5 class=&quot;card-header-title&quot;&gt;Users&lt;/h5&gt;
                  &lt;/div&gt;
                &lt;/div&gt;

                &lt;div class=&quot;col-auto&quot;&gt;
                  &lt;!-- Filter --&gt;
                  &lt;form&gt;
                    &lt;!-- Search --&gt;
                    &lt;div class=&quot;input-group input-group-merge input-group-flush&quot;&gt;
                      &lt;div class=&quot;input-group-prepend input-group-text&quot;&gt;
                        &lt;i class=&quot;bi-search&quot;&gt;&lt;/i&gt;
                      &lt;/div&gt;
                      &lt;input id=&quot;datatableWithSearchInput&quot; type=&quot;search&quot; class=&quot;form-control&quot; placeholder=&quot;Search users&quot; aria-label=&quot;Search users&quot;&gt;
                    &lt;/div&gt;
                    &lt;!-- End Search --&gt;
                  &lt;/form&gt;
                  &lt;!-- End Filter --&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Header --&gt;

            &lt;!-- Table --&gt;
            &lt;div class=&quot;table-responsive datatable-custom&quot;&gt;
              &lt;table class=&quot;js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                     data-nue-datatables-options='{
                             &quot;order&quot;: [],
                             &quot;search&quot;: &quot;#datatableWithSearchInput&quot;,
                             &quot;isResponsive&quot;: false,
                             &quot;isShowPaging&quot;: false,
                             &quot;pagination&quot;: &quot;datatableWithSearchPagination&quot;
                           }'&gt;
                &lt;thead class=&quot;thead-light&quot;&gt;
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
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Argentina&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Austria&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Ella Lauda &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;ella@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;All departments&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;L&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Lori Hunter&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;hunter@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Estonia&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;M&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Mark Colbert&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;mark@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Canada&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Costa Quinn&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;costa@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;All departments&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;France&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;R&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Rachel Doe &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;rachel@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Accountant&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Finance&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Linda Bates&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;linda@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Brian Halligan&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;brian@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Accounting&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;France&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;C&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Chris Mathew&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;chris@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Switzerland&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Clarice Boone &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;clarice@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;L&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Lewis Clarke&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;lewis@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Switzerland&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Sam Kart&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;sam@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Canada&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;J&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Johnny Appleseed&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;johnny@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Accountant&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;P&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Phileas Fogg&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;phileas@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Spain&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Mark Williams &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;mark@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;T&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Timothy Silva&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;timothy@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Italy&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;G&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Gary Bishop &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;gary@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Latvia&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;Y&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Yorker Scogings&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;yorker@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Norway&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;F&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Frank Phillips&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;frank@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Norway&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;E&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Elizabeth Carter&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;eliz@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;
                &lt;/tbody&gt;
              &lt;/table&gt;
            &lt;/div&gt;
            &lt;!-- End Table --&gt;

            &lt;!-- Footer --&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
              &lt;!-- Pagination --&gt;
              &lt;div class=&quot;d-flex justify-content-center justify-content-sm-end&quot;&gt;
                &lt;nav id=&quot;datatableWithSearchPagination&quot; aria-label=&quot;Activity pagination&quot;&gt;&lt;/nav&gt;
              &lt;/div&gt;
              &lt;!-- End Pagination --&gt;
            &lt;/div&gt;
            &lt;!-- End Footer --&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="with-filter" class="nue-docs-heading">
    With filter <a class="anchorjs-link" href="#with-filter" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header card-header-content-between">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-12 col-md-auto">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header-title">Users</h5>
              </div>
            </div>

            <div class="col-md-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <div class="tom-select-custom">
                    <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless" autocomplete="off" data-target-column-index="1" data-target-table="datatbleWithFilter" data-nue-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true,
                            "dropdownWidth": "10rem"
                          }'>
                      <option value="null" selected>Any</option>
                      <option value="Accountant">Accountant</option>
                      <option value="Co-founder">Co-founder</option>
                      <option value="Designer">Designer</option>
                      <option value="Developer">Developer</option>
                      <option value="Director">Director</option>
                    </select>
                  </div>
                </div>

                <div class="col">
                  <form>
                    <div class="input-group input-group-merge input-group-flush">
                      <div class="input-group-prepend input-group-text">
                        <i class="bi-search"></i>
                      </div>
                      <input id="datatableWithFilterSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="table-responsive datatable-custom">
          <table id="datatbleWithFilter" class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                         "columnDefs": [{
                            "targets": [1],
                            "orderable": false
                         }],
                         "order": [],
                         "search": "#datatableWithFilterSearch",
                         "isResponsive": false,
                         "isShowPaging": false,
                         "pagination": "datatableWithFilterPagination"
                       }'>
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
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
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
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
                </td>
                <td>Austria</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">ella@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">All departments</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lori Hunter</span>
                      <span class="d-block fs-5 text-body">hunter@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Estonia</td>
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
                      <span class="d-block fs-5 text-body">mark@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>Canada</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Costa Quinn</span>
                      <span class="d-block fs-5 text-body">costa@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">All departments</span>
                </td>
                <td>France</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">R</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Rachel Doe <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">rachel@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Accountant</span>
                  <span class="d-block fs-5">Finance</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Linda Bates</span>
                      <span class="d-block fs-5 text-body">linda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Brian Halligan</span>
                      <span class="d-block fs-5 text-body">brian@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Accounting</span>
                </td>
                <td>France</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">C</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Chris Mathew</span>
                      <span class="d-block fs-5 text-body">chris@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Switzerland</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Clarice Boone <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">clarice@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lewis Clarke</span>
                      <span class="d-block fs-5 text-body">lewis@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Switzerland</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Sam Kart</span>
                      <span class="d-block fs-5 text-body">sam@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">Branding</span>
                </td>
                <td>Canada</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">J</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Johnny Appleseed</span>
                      <span class="d-block fs-5 text-body">johnny@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Accountant</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">P</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Phileas Fogg</span>
                      <span class="d-block fs-5 text-body">phileas@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">Branding</span>
                </td>
                <td>Spain</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Mark Williams <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">mark@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">Branding</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">T</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Timothy Silva</span>
                      <span class="d-block fs-5 text-body">timothy@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Italy</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">G</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Gary Bishop <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">gary@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Developer</span>
                  <span class="d-block fs-5">Mobile app</span>
                </td>
                <td>Latvia</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">Y</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Yorker Scogings</span>
                      <span class="d-block fs-5 text-body">yorker@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>Norway</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">F</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Frank Phillips</span>
                      <span class="d-block fs-5 text-body">frank@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>Norway</td>
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
                      <span class="d-block fs-5 text-body">eliz@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="card-footer">
          <div class="d-flex justify-content-center justify-content-sm-end">
            <nav id="datatableWithFilterPagination" aria-label="Activity pagination"></nav>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;card&quot;&gt;
            &lt;!-- Header --&gt;
            &lt;div class=&quot;card-header&quot;&gt;
              &lt;div class=&quot;row justify-content-between align-items-center flex-grow-1&quot;&gt;
                &lt;div class=&quot;col-12 col-md&quot;&gt;
                  &lt;div class=&quot;d-flex justify-content-between align-items-center&quot;&gt;
                    &lt;h5 class=&quot;card-header-title&quot;&gt;Users&lt;/h5&gt;
                  &lt;/div&gt;
                &lt;/div&gt;

                &lt;div class=&quot;col-md-auto&quot;&gt;
                  &lt;!-- Filter --&gt;
                  &lt;div class=&quot;row align-items-center&quot;&gt;
                    &lt;div class=&quot;col-auto&quot;&gt;
                      &lt;!-- Select --&gt;
                      &lt;div class=&quot;tom-select-custom&quot;&gt;
                        &lt;select class=&quot;js-select js-datatable-filter form-select form-select-sm form-select-borderless&quot; autocomplete=&quot;off&quot;
                                data-target-column-index=&quot;1&quot;
                                data-target-table=&quot;datatbleWithFilter&quot;
                                data-nue-tom-select-options='{
                                &quot;searchInDropdown&quot;: false,
                                &quot;hideSearch&quot;: true,
                                &quot;dropdownWidth&quot;: &quot;10rem&quot;
                              }'&gt;
                          &lt;option value=&quot;null&quot; selected&gt;Any&lt;/option&gt;
                          &lt;option value=&quot;Accountant&quot;&gt;Accountant&lt;/option&gt;
                          &lt;option value=&quot;Co-founder&quot;&gt;Co-founder&lt;/option&gt;
                          &lt;option value=&quot;Designer&quot;&gt;Designer&lt;/option&gt;
                          &lt;option value=&quot;Developer&quot;&gt;Developer&lt;/option&gt;
                          &lt;option value=&quot;Director&quot;&gt;Director&lt;/option&gt;
                        &lt;/select&gt;
                      &lt;/div&gt;
                      &lt;!-- End Select --&gt;
                    &lt;/div&gt;

                    &lt;div class=&quot;col&quot;&gt;
                      &lt;form&gt;
                        &lt;!-- Search --&gt;
                        &lt;div class=&quot;input-group input-group-merge input-group-flush&quot;&gt;
                          &lt;div class=&quot;input-group-prepend input-group-text&quot;&gt;
                            &lt;i class=&quot;bi-search&quot;&gt;&lt;/i&gt;
                          &lt;/div&gt;
                          &lt;input id=&quot;datatableWithFilterSearch&quot; type=&quot;search&quot; class=&quot;form-control&quot; placeholder=&quot;Search users&quot; aria-label=&quot;Search users&quot;&gt;
                        &lt;/div&gt;
                        &lt;!-- End Search --&gt;
                      &lt;/form&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Filter --&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Header --&gt;

            &lt;!-- Table --&gt;
            &lt;div class=&quot;table-responsive datatable-custom&quot;&gt;
              &lt;table id=&quot;datatbleWithFilter&quot; class=&quot;js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                     data-nue-datatables-options='{
                             &quot;columnDefs&quot;: [{
                                &quot;targets&quot;: [1],
                                &quot;orderable&quot;: false
                             }],
                             &quot;order&quot;: [],
                             &quot;search&quot;: &quot;#datatableWithFilterSearch&quot;,
                             &quot;isResponsive&quot;: false,
                             &quot;isShowPaging&quot;: false,
                             &quot;pagination&quot;: &quot;datatableWithFilterPagination&quot;
                           }'&gt;
                &lt;thead class=&quot;thead-light&quot;&gt;
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
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Argentina&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Austria&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Ella Lauda &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;ella@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;All departments&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;L&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Lori Hunter&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;hunter@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Estonia&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;M&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Mark Colbert&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;mark@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Canada&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Costa Quinn&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;costa@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;All departments&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;France&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;R&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Rachel Doe &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;rachel@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Accountant&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Finance&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Linda Bates&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;linda@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Brian Halligan&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;brian@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Accounting&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;France&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;C&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Chris Mathew&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;chris@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Switzerland&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Clarice Boone &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;clarice@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;L&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Lewis Clarke&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;lewis@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Switzerland&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Sam Kart&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;sam@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Canada&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;J&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Johnny Appleseed&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;johnny@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Accountant&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;P&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Phileas Fogg&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;phileas@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Spain&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Mark Williams &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;mark@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;T&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Timothy Silva&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;timothy@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Italy&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;G&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Gary Bishop &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;gary@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Developer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Mobile app&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Latvia&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;Y&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Yorker Scogings&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;yorker@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Norway&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;F&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Frank Phillips&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;frank@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Norway&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;E&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Elizabeth Carter&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;eliz@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;
                &lt;/tbody&gt;
              &lt;/table&gt;
            &lt;/div&gt;
            &lt;!-- End Table --&gt;

            &lt;!-- Footer --&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
              &lt;!-- Pagination --&gt;
              &lt;div class=&quot;d-flex justify-content-center justify-content-sm-end&quot;&gt;
                &lt;nav id=&quot;datatableWithFilterPagination&quot; aria-label=&quot;Activity pagination&quot;&gt;&lt;/nav&gt;
              &lt;/div&gt;
              &lt;!-- End Pagination --&gt;
            &lt;/div&gt;
            &lt;!-- End Footer --&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
              (function () {
                 // INITIALIZATION OF SELECT
                // =======================================================
                Nue.components.NueSelect.init('.js-select')
              })()
            &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="checkbox-select" class="nue-docs-heading">
    Checkbox select <a class="anchorjs-link" href="#checkbox-select" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between align-items-center">
            <div class="col-md">
              <h5 class="card-header-title">Users</h5>
            </div>

            <div class="col-auto">
              <div id="datatableWithCheckboxSelectCounterInfo" class="me-2" style="display: none;">
                <div class="d-flex align-items-center">
                  <span class="fs-5 me-3">
                    <span id="datatableWithCheckboxSelectCounter">0</span>
                    Selected
                  </span>
                  <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                    <i class="bi bi-trash"></i> Delete
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="table-responsive datatable-custom">
          <table class="js-datatable-checkboxes table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                         "columnDefs": [{
                            "targets": [0],
                            "orderable": false
                         }],
                         "order": []
                       }'>
            <thead class="thead-light">
              <tr>
                <th class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="datatableWithCheckboxSelectAll">
                    <label class="form-check-label" for="datatableWithCheckboxSelectAll"></label>
                  </div>
                </th>
                <th class="table-column-ps-0">Name</th>
                <th>Position</th>
                <th>Country</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck1">
                    <label class="form-check-label" for="usersDataCheck1"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck2">
                    <label class="form-check-label" for="usersDataCheck2"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">A</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Anne Richard</span>
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck3">
                    <label class="form-check-label" for="usersDataCheck3"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck4">
                    <label class="form-check-label" for="usersDataCheck4"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="usersDataCheck5">
                    <label class="form-check-label" for="usersDataCheck5"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
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
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;card&quot;&gt;
            &lt;!-- Header --&gt;
            &lt;div class=&quot;card-header&quot;&gt;
              &lt;div class=&quot;d-flex justify-content-between align-items-center&quot;&gt;
                &lt;div class=&quot;col-md&quot;&gt;
                  &lt;h5 class=&quot;card-header-title&quot;&gt;Users&lt;/h5&gt;
                &lt;/div&gt;

                &lt;div class=&quot;col-auto&quot;&gt;
                  &lt;!-- Datatable Info --&gt;
                  &lt;div id=&quot;datatableWithCheckboxSelectCounterInfo&quot; class=&quot;me-2&quot; style=&quot;display: none;&quot;&gt;
                    &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                        &lt;span class=&quot;fs-5 me-3&quot;&gt;
                          &lt;span id=&quot;datatableWithCheckboxSelectCounter&quot;&gt;0&lt;/span&gt;
                          Selected
                        &lt;/span&gt;
                      &lt;a class=&quot;btn btn-sm btn-outline-danger&quot; href=&quot;javascript:;&quot;&gt;
                        &lt;i class=&quot;bi bi-trash&quot;&gt;&lt;/i&gt; Delete
                      &lt;/a&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Datatable Info --&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Header --&gt;

            &lt;!-- Table --&gt;
            &lt;div class=&quot;table-responsive datatable-custom&quot;&gt;
              &lt;table class=&quot;js-datatable-checkboxes table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                     data-nue-datatables-options='{
                             &quot;columnDefs&quot;: [{
                                &quot;targets&quot;: [0],
                                &quot;orderable&quot;: false
                             }],
                             &quot;order&quot;: []
                           }'&gt;
                &lt;thead class=&quot;thead-light&quot;&gt;
                &lt;tr&gt;
                  &lt;th class=&quot;table-column-pe-0&quot;&gt;
                    &lt;div class=&quot;form-check&quot;&gt;
                      &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;datatableWithCheckboxSelectAll&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;datatableWithCheckboxSelectAll&quot;&gt;&lt;/label&gt;
                    &lt;/div&gt;
                  &lt;/th&gt;
                  &lt;th class=&quot;table-column-ps-0&quot;&gt;Name&lt;/th&gt;
                  &lt;th&gt;Position&lt;/th&gt;
                  &lt;th&gt;Country&lt;/th&gt;
                  &lt;th&gt;Status&lt;/th&gt;
                &lt;/tr&gt;
                &lt;/thead&gt;

                &lt;tbody&gt;
                &lt;tr&gt;
                    &lt;td class=&quot;table-column-pe-0&quot;&gt;
                      &lt;div class=&quot;form-check&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;usersDataCheck1&quot;&gt;
                        &lt;label class=&quot;form-check-label&quot; for=&quot;usersDataCheck1&quot;&gt;&lt;/label&gt;
                      &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td class=&quot;table-column-ps-0&quot;&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                        &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                 &lt;td class=&quot;table-column-pe-0&quot;&gt;
                   &lt;div class=&quot;form-check&quot;&gt;
                     &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;usersDataCheck2&quot;&gt;
                     &lt;label class=&quot;form-check-label&quot; for=&quot;usersDataCheck2&quot;&gt;&lt;/label&gt;
                   &lt;/div&gt;
                 &lt;/td&gt;
                 &lt;td class=&quot;table-column-ps-0&quot;&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                    &lt;/div&gt;
                   &lt;/a&gt;
                 &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td class=&quot;table-column-pe-0&quot;&gt;
                    &lt;div class=&quot;form-check&quot;&gt;
                      &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;usersDataCheck3&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;usersDataCheck3&quot;&gt;&lt;/label&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td class=&quot;table-column-ps-0&quot;&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                        &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td class=&quot;table-column-pe-0&quot;&gt;
                    &lt;div class=&quot;form-check&quot;&gt;
                      &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;usersDataCheck4&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;usersDataCheck4&quot;&gt;&lt;/label&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                  &lt;td class=&quot;table-column-ps-0&quot;&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                        &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Argentina&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td class=&quot;table-column-pe-0&quot;&gt;
                    &lt;div class=&quot;form-check&quot;&gt;
                      &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;usersDataCheck5&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;usersDataCheck5&quot;&gt;&lt;/label&gt;
                    &lt;/div&gt;
                  &lt;/td&gt;
                   &lt;td class=&quot;table-column-ps-0&quot;&gt;
                      &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                       &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                         &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class=&quot;ms-3&quot;&gt;
                         &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                         &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                       &lt;/div&gt;
                     &lt;/a&gt;
                    &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Austria&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
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
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              // INITIALIZATION OF DATATABLES
              // =======================================================
              Nue.components.NueDatatables.init('.js-datatable-checkboxes', {
                select: {
                  style: 'multi',
                  selector: 'td:first-child input[type="checkbox"]',
                  classMap: {
                    checkAll: '#datatableWithCheckboxSelectAll',
                    counter: '#datatableWithCheckboxSelectCounter',
                    counterInfo: '#datatableWithCheckboxSelectCounterInfo'
                  }
                }
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="column-search" class="nue-docs-heading">
    Column search <a class="anchorjs-link" href="#column-search" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <h5 class="card-header-title">Users</h5>
        </div>

        <div class="table-responsive datatable-custom">
          <table id="datatableColumnSearch" class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                         "order": [],
                         "orderCellsTop": true
                       }'>
            <thead class="thead-light">
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Country</th>
                <th>Status</th>
              </tr>
              <tr>
                <th>
                  <input type="text" id="column1_search" class="form-control form-control-sm" placeholder="Search names">
                </th>
                <th>
                  <input type="text" id="column2_search" class="form-control form-control-sm" placeholder="Search positions">
                </th>
                <th>
                  <input type="text" id="column3_search" class="form-control form-control-sm" placeholder="Search countries">
                </th>
                <th>
                  <div class="tom-select-custom">
                    <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless" autocomplete="off" data-target-column-index="3" data-target-table="datatableColumnSearch" data-nue-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true,
                            "dropdownWidth": "10rem"
                          }'>
                      <option value="null" selected>Any</option>
                      <option value="Active">Active</option>
                      <option value="Pending">Pending</option>
                      <option value="Suspended">Suspended</option>
                    </select>
                  </div>
                </th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>
                  <span class="d-block h5 text-hover-primary mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                  <span class="d-block fs-5 text-body">amanda@example.com</span>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <span class="d-block h5 text-hover-primary mb-0">Anne Richard</span>
                  <span class="d-block fs-5 text-body">anne@example.com</span>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <span class="d-block h5 text-hover-primary mb-0">David Harrison</span>
                  <span class="d-block fs-5 text-body">david@example.com</span>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <span class="d-block h5 text-hover-primary mb-0">Finch Hoot</span>
                  <span class="d-block fs-5 text-body">finch@example.com</span>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <span class="d-block h5 text-hover-primary mb-0">Bob Dean</span>
                  <span class="d-block fs-5 text-body">bob@example.com</span>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
                </td>
                <td>Austria</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <span class="d-block h5 text-hover-primary mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                  <span class="d-block fs-5 text-body">ella@example.com</span>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Co-founder</span>
                  <span class="d-block fs-5">All departments</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
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
          &lt;div class=&quot;table-responsive datatable-custom&quot;&gt;
            &lt;table id=&quot;datatableColumnSearch&quot; class=&quot;js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                   data-nue-datatables-options='{
                           &quot;order&quot;: [],
                           &quot;orderCellsTop&quot;: true
                         }'&gt;
              &lt;thead class=&quot;thead-light&quot;&gt;
              &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Position&lt;/th&gt;
                &lt;th&gt;Country&lt;/th&gt;
                &lt;th&gt;Status&lt;/th&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th&gt;
                  &lt;input type=&quot;text&quot; id=&quot;column1_search&quot; class=&quot;form-control form-control-sm&quot; placeholder=&quot;Search names&quot;&gt;
                &lt;/th&gt;
                &lt;th&gt;
                  &lt;input type=&quot;text&quot; id=&quot;column2_search&quot; class=&quot;form-control form-control-sm&quot; placeholder=&quot;Search positions&quot;&gt;
                &lt;/th&gt;
                &lt;th&gt;
                  &lt;input type=&quot;text&quot; id=&quot;column3_search&quot; class=&quot;form-control form-control-sm&quot; placeholder=&quot;Search countries&quot;&gt;
                &lt;/th&gt;
                &lt;th&gt;
                  &lt;div class=&quot;tom-select-custom&quot;&gt;
                    &lt;select class=&quot;js-select js-datatable-filter form-select form-select-sm form-select-borderless&quot; autocomplete=&quot;off&quot;
                            data-target-column-index=&quot;3&quot;
                            data-target-table=&quot;datatableColumnSearch&quot;
                            data-nue-tom-select-options='{
                              &quot;searchInDropdown&quot;: false,
                              &quot;hideSearch&quot;: true,
                              &quot;dropdownWidth&quot;: &quot;10rem&quot;
                            }'&gt;
                      &lt;option value=&quot;null&quot; selected&gt;Any&lt;/option&gt;
                      &lt;option value=&quot;Active&quot;&gt;Active&lt;/option&gt;
                      &lt;option value=&quot;Pending&quot;&gt;Pending&lt;/option&gt;
                      &lt;option value=&quot;Suspended&quot;&gt;Suspended&lt;/option&gt;
                    &lt;/select&gt;
                  &lt;/div&gt;
                &lt;/th&gt;
              &lt;/tr&gt;
              &lt;/thead&gt;

              &lt;tbody&gt;
              &lt;tr&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 text-hover-primary mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United Kingdom&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 text-hover-primary mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 text-hover-primary mb-0&quot;&gt;David Harrison&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 text-hover-primary mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Argentina&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 text-hover-primary mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Austria&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 text-hover-primary mb-0&quot;&gt;Ella Lauda &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;ella@example.com&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Co-founder&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;All departments&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United Kingdom&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              // INITIALIZATION OF SELECT
              // =======================================================
              Nue.components.NueSelect.init('.js-select')


              // INITIALIZATION OF DATATABLES
              // =======================================================
              Nue.components.NueDatatables.init('.js-datatable')
              const datatableColumnSearch = Nue.components.NueDatatables.getItem('datatableColumnSearch')

              document.getElementById('column1_search').addEventListener('keyup', function () {
                datatableColumnSearch
                  .columns(0)
                  .search(this.value)
                  .draw()
              })

              document.getElementById('column2_search').addEventListener('keyup', function () {
                datatableColumnSearch
                  .columns(1)
                  .search(this.value)
                  .draw()
              })

              document.getElementById('column3_search').addEventListener('keyup', function () {
                datatableColumnSearch
                  .columns(2)
                  .search(this.value)
                  .draw()
              })

              document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
                  item.addEventListener('change', function(e) {
                    const elVal = e.target.value,
                            targetColumnIndex = e.target.getAttribute('data-target-column-index'),
                            targetTable = e.target.getAttribute('data-target-table');

                    Nue.components.NueDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
                  })
                })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="date-picker-filter" class="nue-docs-heading">
    Date picker filter <a class="anchorjs-link" href="#date-picker-filter" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center flex-grow-1">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <h4 class="card-header-title">Users</h4>
            </div>

            <div class="col-sm-6">
              <input type="text" class="js-daterangepicker form-control daterangepicker-custom-input" placeholder="Select dates" data-nue-daterangepicker-options='{
                         "autoUpdateInput": false,
                         "locale": {
                           "cancelLabel": "Clear"
                         }
                       }'>
            </div>
          </div>
        </div>

        <div class="table-responsive datatable-custom">
          <table id="datatableDatepickerFilter" class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                         "order": [],
                         "isResponsive": false,
                         "isShowPaging": false,
                         "pagination": "datatableDatepickerFilterPagination"
                       }'>
            <thead class="thead-light">
              <tr>
                <th>Name</th>
                <th>Created at</th>
                <th>Country</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>25/07/2020</td>
                <td>United Kingdom</td>
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
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>12/01/2019</td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>29/03/2020</td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>28/11/2018</td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>02/12/2020</td>
                <td>Austria</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">ella@example.com</span>
                    </div>
                  </a>
                </td>
                <td>06/08/2020</td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lori Hunter</span>
                      <span class="d-block fs-5 text-body">hunter@example.com</span>
                    </div>
                  </a>
                </td>
                <td>14/10/2019</td>
                <td>Estonia</td>
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
                      <span class="d-block fs-5 text-body">mark@example.com</span>
                    </div>
                  </a>
                </td>
                <td>15/09/2019</td>
                <td>Canada</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Costa Quinn</span>
                      <span class="d-block fs-5 text-body">costa@example.com</span>
                    </div>
                  </a>
                </td>
                <td>13/12/2018</td>
                <td>France</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">R</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Rachel Doe <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">rachel@example.com</span>
                    </div>
                  </a>
                </td>
                <td>19/12/2018</td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Linda Bates</span>
                      <span class="d-block fs-5 text-body">linda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>2013/03/03</td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Brian Halligan</span>
                      <span class="d-block fs-5 text-body">brian@example.com</span>
                    </div>
                  </a>
                </td>
                <td>16/10/2018</td>
                <td>France</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">C</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Chris Mathew</span>
                      <span class="d-block fs-5 text-body">chris@example.com</span>
                    </div>
                  </a>
                </td>
                <td>18/12/2020</td>
                <td>Switzerland</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Clarice Boone <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">clarice@example.com</span>
                    </div>
                  </a>
                </td>
                <td>17/03/2019</td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lewis Clarke</span>
                      <span class="d-block fs-5 text-body">lewis@example.com</span>
                    </div>
                  </a>
                </td>
                <td>27/11/2020</td>
                <td>Switzerland</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Sam Kart</span>
                      <span class="d-block fs-5 text-body">sam@example.com</span>
                    </div>
                  </a>
                </td>
                <td>09/06/2019</td>
                <td>Canada</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">J</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Johnny Appleseed</span>
                      <span class="d-block fs-5 text-body">johnny@example.com</span>
                    </div>
                  </a>
                </td>
                <td>10/04/2019</td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">P</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Phileas Fogg</span>
                      <span class="d-block fs-5 text-body">phileas@example.com</span>
                    </div>
                  </a>
                </td>
                <td>13/10/2020</td>
                <td>Spain</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Mark Williams <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">mark@example.com</span>
                    </div>
                  </a>
                </td>
                <td>26/09/2020</td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">T</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Timothy Silva</span>
                      <span class="d-block fs-5 text-body">timothy@example.com</span>
                    </div>
                  </a>
                </td>
                <td>03/09/2020</td>
                <td>Italy</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">G</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Gary Bishop <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">gary@example.com</span>
                    </div>
                  </a>
                </td>
                <td>25/06/2019</td>
                <td>Latvia</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">Y</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Yorker Scogings</span>
                      <span class="d-block fs-5 text-body">yorker@example.com</span>
                    </div>
                  </a>
                </td>
                <td>12/12/2020</td>
                <td>Norway</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">F</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Frank Phillips</span>
                      <span class="d-block fs-5 text-body">frank@example.com</span>
                    </div>
                  </a>
                </td>
                <td>20/09/2019</td>
                <td>Norway</td>
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
                      <span class="d-block fs-5 text-body">eliz@example.com</span>
                    </div>
                  </a>
                </td>
                <td>09/10/2019</td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="card-footer">
          <div class="d-flex justify-content-center justify-content-sm-end">
            <nav id="datatableDatepickerFilterPagination" aria-label="Activity pagination"></nav>
          </div>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;card&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
              &lt;div class=&quot;row align-items-center flex-grow-1&quot;&gt;
                &lt;div class=&quot;col-sm-6 mb-2 mb-sm-0&quot;&gt;
                  &lt;h4 class=&quot;card-header-title&quot;&gt;Users&lt;/h4&gt;
                &lt;/div&gt;

                &lt;div class=&quot;col-sm-6&quot;&gt;
                  &lt;!-- Daterangepicker --&gt;
                    &lt;input type=&quot;text&quot; class=&quot;js-daterangepicker form-control daterangepicker-custom-input&quot; placeholder=&quot;Select dates&quot;
                           data-nue-daterangepicker-options='{
                             &quot;autoUpdateInput&quot;: false,
                             &quot;locale&quot;: {
                               &quot;cancelLabel&quot;: &quot;Clear&quot;
                             }
                           }'&gt;
                  &lt;!-- End Daterangepicker --&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End Row --&gt;
            &lt;/div&gt;

            &lt;!-- Table --&gt;
            &lt;div class=&quot;table-responsive datatable-custom&quot;&gt;
              &lt;table id=&quot;datatableDatepickerFilter&quot; class=&quot;js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                     data-nue-datatables-options='{
                             &quot;order&quot;: [],
                             &quot;isResponsive&quot;: false,
                             &quot;isShowPaging&quot;: false,
                             &quot;pagination&quot;: &quot;datatableDatepickerFilterPagination&quot;
                           }'&gt;
                &lt;thead class=&quot;thead-light&quot;&gt;
                &lt;tr&gt;
                  &lt;th&gt;Name&lt;/th&gt;
                  &lt;th&gt;Created at&lt;/th&gt;
                  &lt;th&gt;Country&lt;/th&gt;
                  &lt;th&gt;Status&lt;/th&gt;
                &lt;/tr&gt;
                &lt;/thead&gt;

                &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;25/07/2020&lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;12/01/2019&lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;29/03/2020&lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;28/11/2018&lt;/td&gt;
                  &lt;td&gt;Argentina&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;02/12/2020&lt;/td&gt;
                  &lt;td&gt;Austria&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Ella Lauda &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;ella@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;06/08/2020&lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;L&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Lori Hunter&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;hunter@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;14/10/2019&lt;/td&gt;
                  &lt;td&gt;Estonia&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;M&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Mark Colbert&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;mark@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;15/09/2019&lt;/td&gt;
                  &lt;td&gt;Canada&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Costa Quinn&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;costa@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;13/12/2018&lt;/td&gt;
                  &lt;td&gt;France&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;R&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Rachel Doe &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;rachel@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;19/12/2018&lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img8.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Linda Bates&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;linda@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;2013/03/03&lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Brian Halligan&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;brian@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;16/10/2018&lt;/td&gt;
                  &lt;td&gt;France&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;C&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Chris Mathew&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;chris@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;18/12/2020&lt;/td&gt;
                  &lt;td&gt;Switzerland&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img7.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Clarice Boone &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;clarice@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;17/03/2019&lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;L&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Lewis Clarke&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;lewis@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;27/11/2020&lt;/td&gt;
                  &lt;td&gt;Switzerland&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img4.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Sam Kart&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;sam@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;09/06/2019&lt;/td&gt;
                  &lt;td&gt;Canada&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;J&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Johnny Appleseed&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;johnny@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;10/04/2019&lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;P&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Phileas Fogg&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;phileas@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;13/10/2020&lt;/td&gt;
                  &lt;td&gt;Spain&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img6.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Mark Williams &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;mark@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;26/09/2020&lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;T&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Timothy Silva&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;timothy@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;03/09/2020&lt;/td&gt;
                  &lt;td&gt;Italy&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;G&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Gary Bishop &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;gary@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;25/06/2019&lt;/td&gt;
                  &lt;td&gt;Latvia&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;Y&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Yorker Scogings&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;yorker@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;12/12/2020&lt;/td&gt;
                  &lt;td&gt;Norway&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;F&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Frank Phillips&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;frank@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;20/09/2019&lt;/td&gt;
                  &lt;td&gt;Norway&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;E&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Elizabeth Carter&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;eliz@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;09/10/2019&lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;
                &lt;/tbody&gt;
              &lt;/table&gt;
            &lt;/div&gt;
            &lt;!-- End Table --&gt;

            &lt;!-- Footer --&gt;
            &lt;div class=&quot;card-footer&quot;&gt;
              &lt;!-- Pagination --&gt;
              &lt;div class=&quot;d-flex justify-content-center justify-content-sm-end&quot;&gt;
                &lt;nav id=&quot;datatableDatepickerFilterPagination&quot; aria-label=&quot;Activity pagination&quot;&gt;&lt;/nav&gt;
              &lt;/div&gt;
              &lt;!-- End Pagination --&gt;
            &lt;/div&gt;
            &lt;!-- End Footer --&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              // INITIALIZATION OF DATATABLES
              // =======================================================
              Nue.components.NueDatatables.init('.js-datatable')
              const datatableDatepickerFilter = Nue.components.NueDatatables.getItem('datatableDatepickerFilter')

              Nue.components.NueDaterangepicker.init('.js-daterangepicker')
              const daterangepicker = Nue.components.NueDaterangepicker.getItem(0)

              var startDate = null,
                      endDate = null

              daterangepicker.on('apply.daterangepicker', function (ev, picker) {
                this.value = picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY')

                startDate = moment(picker.startDate.format('MM/DD/YYYY'))
                endDate = moment(picker.endDate.format('MM/DD/YYYY'))

                datatableDatepickerFilter.draw()
              })

              daterangepicker.on('cancel.daterangepicker', function (ev, picker) {
                this.value = ''

                startDate = null
                endDate = null

                datatableDatepickerFilter.draw()
              })

              $.fn.dataTable.ext.search.push(
                function (settings, data, dataIndex) {
                  if (!startDate || !endDate) return true
                  let compareDate = moment(moment(data[4]).format('MM/DD/YYYY'))
                  return compareDate.isBetween(startDate, endDate)
                }
              )
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="column-show-hide" class="nue-docs-heading">
    Column show/hide <a class="anchorjs-link" href="#column-show-hide" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md">
              <h4 class="card-header-title">Users</h4>
            </div>

            <div class="col-auto">
              <div class="dropdown">
                <button class="btn btn-ghost-secondary" type="button" id="dropdownMenuButtonGhostPrimary" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-table"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonGhostPrimary">
                  <div class="d-flex align-items-center justify-content-between form-check form-switch form-switch-between mb-3">
                    <label class="form-check-label">Country</label>
                    <input type="checkbox" id="toggleColumn_country" class="form-check-input" checked>
                  </div>

                  <div class="d-flex align-items-center justify-content-between form-check form-switch form-switch-between mb-3">
                    <label class="form-check-label">Position</label>
                    <input type="checkbox" id="toggleColumn_position" class="form-check-input" checked>
                  </div>

                  <div class="d-flex align-items-center justify-content-between form-check form-switch form-switch-between">
                    <label class="form-check-label">Status</label>
                    <input type="checkbox" id="toggleColumn_status" class="form-check-input" checked>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="table-responsive datatable-custom">
          <table id="columnSorting" class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                         "order": []
                       }'>
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
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
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
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
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
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;card&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
              &lt;div class=&quot;row justify-content-between align-items-center flex-grow-1&quot;&gt;
                &lt;div class=&quot;col-md&quot;&gt;
                  &lt;h4 class=&quot;card-header-title&quot;&gt;Users&lt;/h4&gt;
                &lt;/div&gt;

                &lt;div class=&quot;col-auto&quot;&gt;
                  &lt;!-- Dropdown --&gt;
                  &lt;div class=&quot;dropdown&quot;&gt;
                    &lt;button class=&quot;btn btn-ghost-secondary&quot; type=&quot;button&quot; id=&quot;dropdownMenuButtonGhostPrimary&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                      &lt;i class=&quot;bi bi-table&quot;&gt;&lt;/i&gt;
                    &lt;/button&gt;
                    &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButtonGhostPrimary&quot;&gt;
                      &lt;div class=&quot;d-flex align-items-center justify-content-between form-check form-switch form-switch-between mb-3&quot;&gt;
                        &lt;label class=&quot;form-check-label&quot;&gt;Country&lt;/label&gt;
                        &lt;input type=&quot;checkbox&quot; id=&quot;toggleColumn_country&quot; class=&quot;form-check-input&quot; checked&gt;
                      &lt;/div&gt;

                      &lt;div class=&quot;d-flex align-items-center justify-content-between form-check form-switch form-switch-between mb-3&quot;&gt;
                        &lt;label class=&quot;form-check-label&quot;&gt;Position&lt;/label&gt;
                        &lt;input type=&quot;checkbox&quot; id=&quot;toggleColumn_position&quot; class=&quot;form-check-input&quot; checked&gt;
                      &lt;/div&gt;

                      &lt;div class=&quot;d-flex align-items-center justify-content-between form-check form-switch form-switch-between&quot;&gt;
                        &lt;label class=&quot;form-check-label&quot;&gt;Status&lt;/label&gt;
                        &lt;input type=&quot;checkbox&quot; id=&quot;toggleColumn_status&quot; class=&quot;form-check-input&quot; checked&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Dropdown --&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;!-- Table --&gt;
            &lt;div class=&quot;table-responsive datatable-custom&quot;&gt;
              &lt;table id=&quot;columnSorting&quot; class=&quot;js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                     data-nue-datatables-options='{
                             &quot;order&quot;: []
                           }'&gt;
                &lt;thead class=&quot;thead-light&quot;&gt;
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
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Argentina&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Austria&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
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
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              // INITIALIZATION OF DATATABLES
              // =======================================================
              Nue.components.NueDatatables.init('.js-datatable')
              const datatableSortingColumn = Nue.components.NueDatatables.getItem('columnSorting')

              document.getElementById('toggleColumn_position').addEventListener('change', function (e) {
                datatableSortingColumn.columns(1).visible(e.target.checked)
              })

              document.getElementById('toggleColumn_country').addEventListener('change', function (e) {
                datatableSortingColumn.columns(2).visible(e.target.checked)
              })

              document.getElementById('toggleColumn_status').addEventListener('change', function (e) {
                datatableSortingColumn.columns(3).visible(e.target.checked)
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="drag-n-drop" class="nue-docs-heading">
    Drag' n' drop <a class="anchorjs-link" href="#drag-n-drop" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <h4 class="card-header-title">Users</h4>
        </div>

        <div class="table-responsive datatable-custom">
          <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                         "columnDefs": [{
                            "targets": [0],
                            "orderable": false
                          }],
                         "order": []
                       }'>
            <thead class="thead-light">
              <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Country</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody class="js-sortable" data-nue-sortable-options='{
                         "animation": 150,
                         "handle": ".sortablejs-custom-handle"
                       }'>
              <tr>
                <td class="table-column-pe-0">
                  <i class="sortablejs-custom-handle bi bi-grip-vertical"></i>
                </td>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <i class="sortablejs-custom-handle bi bi-grip-vertical"></i>
                </td>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">A</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Anne Richard</span>
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <i class="sortablejs-custom-handle bi bi-grip-vertical"></i>
                </td>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <i class="sortablejs-custom-handle bi bi-grip-vertical"></i>
                </td>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <i class="sortablejs-custom-handle bi bi-grip-vertical"></i>
                </td>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
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
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;table-responsive datatable-custom&quot;&gt;
            &lt;table class=&quot;js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                   data-nue-datatables-options='{
                           &quot;columnDefs&quot;: [{
                              &quot;targets&quot;: [0],
                              &quot;orderable&quot;: false
                            }],
                           &quot;order&quot;: []
                         }'&gt;
              &lt;thead class=&quot;thead-light&quot;&gt;
              &lt;tr&gt;
                &lt;th&gt;&lt;/th&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Position&lt;/th&gt;
                &lt;th&gt;Country&lt;/th&gt;
                &lt;th&gt;Status&lt;/th&gt;
              &lt;/tr&gt;
              &lt;/thead&gt;

              &lt;tbody class=&quot;js-sortable&quot; data-nue-sortable-options='{
                           &quot;animation&quot;: 150,
                           &quot;handle&quot;: &quot;.sortablejs-custom-handle&quot;
                         }'&gt;
              &lt;tr&gt;
                &lt;td class=&quot;table-column-pe-0&quot;&gt;
                  &lt;i class=&quot;sortablejs-custom-handle bi bi-grip-vertical&quot;&gt;&lt;/i&gt;
                &lt;/td&gt;
                &lt;td&gt;
              &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                  &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;ms-3&quot;&gt;
                  &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United Kingdom&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td class=&quot;table-column-pe-0&quot;&gt;
                  &lt;i class=&quot;sortablejs-custom-handle bi bi-grip-vertical&quot;&gt;&lt;/i&gt;
                &lt;/td&gt;
                 &lt;td&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td class=&quot;table-column-pe-0&quot;&gt;
                  &lt;i class=&quot;sortablejs-custom-handle bi bi-grip-vertical&quot;&gt;&lt;/i&gt;
                &lt;/td&gt;
                &lt;td&gt;
              &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                  &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;ms-3&quot;&gt;
                  &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td class=&quot;table-column-pe-0&quot;&gt;
                  &lt;i class=&quot;sortablejs-custom-handle bi bi-grip-vertical&quot;&gt;&lt;/i&gt;
                &lt;/td&gt;
                &lt;td&gt;
              &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                  &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;ms-3&quot;&gt;
                  &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Argentina&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td class=&quot;table-column-pe-0&quot;&gt;
                  &lt;i class=&quot;sortablejs-custom-handle bi bi-grip-vertical&quot;&gt;&lt;/i&gt;
                &lt;/td&gt;
                 &lt;td&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Austria&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              // INITIALIZATION OF SORTABLE
              // =======================================================
              Nue.components.NueSortable.init('.js-sortable')


              // INITIALIZATION OF DATATABLES
              // =======================================================
              Nue.components.NueDatatables.init('.js-datatable')
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="export-options" class="nue-docs-heading">
    Export options <a class="anchorjs-link" href="#export-options" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md">
              <h4 class="card-header-title">Users</h4>
            </div>

            <div class="col-auto">
              <div class="dropdown me-2">
                <button type="button" class="btn btn-white btn-sm dropdown-toggle" id="usersExportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi-download me-2"></i> Export
                </button>

                <div class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="usersExportDropdown">
                  <span class="dropdown-header">Options</span>
                  <a id="export-copy" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="https://cdn.btekno.id/templates/nue/svg/illustrations/copy-icon.svg" alt="...">
                    Copy
                  </a>
                  <a id="export-print" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="https://cdn.btekno.id/templates/nue/svg/illustrations/print-icon.svg" alt="...">
                    Print
                  </a>
                  <div class="dropdown-divider"></div>
                  <span class="dropdown-header">Download options</span>
                  <a id="export-excel" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="https://cdn.btekno.id/templates/nue/svg/brands/excel-icon.svg" alt="...">
                    Excel
                  </a>
                  <a id="export-csv" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="https://cdn.btekno.id/templates/nue/svg/components/placeholder-csv-format.svg" alt="...">
                    .CSV
                  </a>
                  <a id="export-pdf" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="https://cdn.btekno.id/templates/nue/svg/brands/pdf-icon.svg" alt="...">
                    PDF
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="table-responsive datatable-custom">
          <table id="exportDatatable" class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                          "dom": "Bfrtip",
                          "buttons": [
                            {
                              "extend": "copy",
                              "className": "d-none"
                            },
                            {
                              "extend": "excel",
                              "className": "d-none"
                            },
                            {
                              "extend": "csv",
                              "className": "d-none"
                            },
                            {
                              "extend": "pdf",
                              "className": "d-none"
                            },
                            {
                              "extend": "print",
                              "className": "d-none"
                            }
                         ],
                         "order": []
                       }'>
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
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
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
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
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
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;card&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
              &lt;div class=&quot;row justify-content-between align-items-center flex-grow-1&quot;&gt;
                &lt;div class=&quot;col-md&quot;&gt;
                  &lt;h4 class=&quot;card-header-title&quot;&gt;Users&lt;/h4&gt;
                &lt;/div&gt;

                &lt;div class=&quot;col-auto&quot;&gt;
                  &lt;!-- Dropdown --&gt;
                  &lt;div class=&quot;dropdown me-2&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-white btn-sm dropdown-toggle&quot; id=&quot;usersExportDropdown&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                      &lt;i class=&quot;bi-download me-2&quot;&gt;&lt;/i&gt; Export
                    &lt;/button&gt;

                    &lt;div class=&quot;dropdown-menu dropdown-menu-sm-end&quot; aria-labelledby=&quot;usersExportDropdown&quot;&gt;
                      &lt;span class=&quot;dropdown-header&quot;&gt;Options&lt;/span&gt;
                      &lt;a id=&quot;export-copy&quot; class=&quot;dropdown-item&quot; href=&quot;javascript:;&quot;&gt;
                        &lt;img class=&quot;avatar avatar-xss avatar-4x3 me-2&quot; src=&quot;https://cdn.btekno.id/templates/nue/svg/illustrations/copy-icon.svg&quot; alt=&quot;...&quot;&gt;
                        Copy
                      &lt;/a&gt;
                      &lt;a id=&quot;export-print&quot; class=&quot;dropdown-item&quot; href=&quot;javascript:;&quot;&gt;
                        &lt;img class=&quot;avatar avatar-xss avatar-4x3 me-2&quot; src=&quot;https://cdn.btekno.id/templates/nue/svg/illustrations/print-icon.svg&quot; alt=&quot;...&quot;&gt;
                        Print
                      &lt;/a&gt;
                      &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                      &lt;span class=&quot;dropdown-header&quot;&gt;Download options&lt;/span&gt;
                      &lt;a id=&quot;export-excel&quot; class=&quot;dropdown-item&quot; href=&quot;javascript:;&quot;&gt;
                        &lt;img class=&quot;avatar avatar-xss avatar-4x3 me-2&quot; src=&quot;https://cdn.btekno.id/templates/nue/svg/brands/excel-icon.svg&quot; alt=&quot;...&quot;&gt;
                        Excel
                      &lt;/a&gt;
                      &lt;a id=&quot;export-csv&quot; class=&quot;dropdown-item&quot; href=&quot;javascript:;&quot;&gt;
                        &lt;img class=&quot;avatar avatar-xss avatar-4x3 me-2&quot; src=&quot;https://cdn.btekno.id/templates/nue/svg/components/placeholder-csv-format.svg&quot; alt=&quot;...&quot;&gt;
                        .CSV
                      &lt;/a&gt;
                      &lt;a id=&quot;export-pdf&quot; class=&quot;dropdown-item&quot; href=&quot;javascript:;&quot;&gt;
                        &lt;img class=&quot;avatar avatar-xss avatar-4x3 me-2&quot; src=&quot;https://cdn.btekno.id/templates/nue/svg/brands/pdf-icon.svg&quot; alt=&quot;...&quot;&gt;
                        PDF
                      &lt;/a&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Dropdown --&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;!-- Table --&gt;
            &lt;div class=&quot;table-responsive datatable-custom&quot;&gt;
              &lt;table id=&quot;exportDatatable&quot; class=&quot;js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                     data-nue-datatables-options='{
                              &quot;dom&quot;: &quot;Bfrtip&quot;,
                              &quot;buttons&quot;: [
                                {
                                  &quot;extend&quot;: &quot;copy&quot;,
                                  &quot;className&quot;: &quot;d-none&quot;
                                },
                                {
                                  &quot;extend&quot;: &quot;excel&quot;,
                                  &quot;className&quot;: &quot;d-none&quot;
                                },
                                {
                                  &quot;extend&quot;: &quot;csv&quot;,
                                  &quot;className&quot;: &quot;d-none&quot;
                                },
                                {
                                  &quot;extend&quot;: &quot;pdf&quot;,
                                  &quot;className&quot;: &quot;d-none&quot;
                                },
                                {
                                  &quot;extend&quot;: &quot;print&quot;,
                                  &quot;className&quot;: &quot;d-none&quot;
                                }
                             ],
                             &quot;order&quot;: []
                           }'&gt;
                &lt;thead class=&quot;thead-light&quot;&gt;
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
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United Kingdom&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;United States&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                  &lt;td&gt;
                &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                  &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                    &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;ms-3&quot;&gt;
                    &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
              &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Argentina&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;tr&gt;
                   &lt;td&gt;
                    &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                      &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                        &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class=&quot;ms-3&quot;&gt;
                        &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                        &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                      &lt;/div&gt;
                    &lt;/a&gt;
                  &lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                    &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                  &lt;/td&gt;
                  &lt;td&gt;Austria&lt;/td&gt;
                  &lt;td&gt;
                    &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
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
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              // INITIALIZATION OF DATATABLES
              // =======================================================
              Nue.components.NueDatatables.init('.js-datatable')
              const exportDatatable = Nue.components.NueDatatables.getItem('exportDatatable')

              document.getElementById('export-copy').addEventListener('click', function () {
                exportDatatable.button('.buttons-copy').trigger()
              })

              document.getElementById('export-excel').addEventListener('click', function () {
                exportDatatable.button('.buttons-excel').trigger()
              })

              document.getElementById('export-csv').addEventListener('click', function () {
                exportDatatable.button('.buttons-csv').trigger()
              })

              document.getElementById('export-pdf').addEventListener('click', function () {
                exportDatatable.button('.buttons-pdf').trigger()
              })

              document.getElementById('export-print').addEventListener('click', function () {
                exportDatatable.button('.buttons-print').trigger()
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="column-fixed" class="nue-docs-heading">
    Column fixed <a class="anchorjs-link" href="#column-fixed" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <h4 class="card-header-title">Users</h4>
        </div>

        <div class="table-responsive datatable-custom datatable-custom-centered">
          <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                        "scrolly": true,
                        "scrollX": true,

                        "scrollCollapse": true,
                        "paging": false,
                        "fixedColumns": true,
                        "order": []
                       }'>
            <thead class="thead-light">
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Country</th>
                <th>Status</th>
                <th>Position</th>
                <th>Country</th>
                <th>Status</th>
                <th>Country</th>
                <th>Status</th>
                <th>Position</th>
                <th>Country</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="bg-white">
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td class="bg-white">
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">A</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Anne Richard</span>
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td class="bg-white">
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td class="bg-white">
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td class="bg-white">
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
                </td>
                <td>Austria</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
                </td>
                <td>Austria</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>Austria</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
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
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;table-responsive datatable-custom datatable-custom-centered&quot;&gt;
            &lt;table class=&quot;js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                   data-nue-datatables-options='{
                          &quot;scrolly&quot;: true,
                          &quot;scrollX&quot;: true,
                          &quot;scrollCollapse&quot;: true,
                          &quot;paging&quot;: false,
                          &quot;fixedColumns&quot;: true,
                          &quot;order&quot;: []
                         }'&gt;
              &lt;thead class=&quot;thead-light&quot;&gt;
              &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Position&lt;/th&gt;
                &lt;th&gt;Country&lt;/th&gt;
                &lt;th&gt;Status&lt;/th&gt;
                &lt;th&gt;Position&lt;/th&gt;
                &lt;th&gt;Country&lt;/th&gt;
                &lt;th&gt;Status&lt;/th&gt;
                &lt;th&gt;Country&lt;/th&gt;
                &lt;th&gt;Status&lt;/th&gt;
                &lt;th&gt;Position&lt;/th&gt;
                &lt;th&gt;Country&lt;/th&gt;
                &lt;th&gt;Status&lt;/th&gt;
              &lt;/tr&gt;
              &lt;/thead&gt;

              &lt;tbody&gt;
              &lt;tr&gt;
                &lt;td class=&quot;bg-white&quot;&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                      &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United Kingdom&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United Kingdom&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
                &lt;td&gt;United Kingdom&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United Kingdom&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                 &lt;td class=&quot;bg-white&quot;&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td class=&quot;bg-white&quot;&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                      &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td class=&quot;bg-white&quot;&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                      &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Argentina&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Argentina&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                &lt;/td&gt;
                &lt;td&gt;Argentina&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Argentina&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td class=&quot;bg-white&quot;&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Austria&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Austria&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
                &lt;td&gt;Austria&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Austria&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="header-fixed-height" class="nue-docs-heading">
    Header with fixed height <a class="anchorjs-link" href="#header-fixed-height" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <h4 class="card-header-title">Users</h4>
        </div>

        <div class="table-responsive datatable-custom">
          <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-nue-datatables-options='{
                        "scrollY": 300,
                        "paging": false,
                        "order": []
                       }'>
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
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
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
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
                </td>
                <td>Austria</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                      <span class="d-block fs-5 text-body">amanda@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Director</span>
                  <span class="d-block fs-5">Human resources</span>
                </td>
                <td>United Kingdom</td>
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
                      <span class="d-block fs-5 text-body">anne@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Seller</span>
                  <span class="d-block fs-5">Branding products</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">David Harrison</span>
                      <span class="d-block fs-5 text-body">david@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Unknown</span>
                  <span class="d-block fs-5">Unknown</span>
                </td>
                <td>United States</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Finch Hoot</span>
                      <span class="d-block fs-5 text-body">finch@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Designer</span>
                  <span class="d-block fs-5">IT department</span>
                </td>
                <td>Argentina</td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Suspended
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Bob Dean</span>
                      <span class="d-block fs-5 text-body">bob@example.com</span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">Executive director</span>
                  <span class="d-block fs-5">Marketing</span>
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
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;table-responsive datatable-custom&quot;&gt;
            &lt;table class=&quot;js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;
                   data-nue-datatables-options='{
                          &quot;scrollY&quot;: 300,
                          &quot;paging&quot;: false,
                          &quot;order&quot;: []
                         }'&gt;
              &lt;thead class=&quot;thead-light&quot;&gt;
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
              &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                  &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;ms-3&quot;&gt;
                  &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United Kingdom&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                 &lt;td&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td&gt;
              &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                  &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;ms-3&quot;&gt;
                  &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td&gt;
              &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                  &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;ms-3&quot;&gt;
                  &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Argentina&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                 &lt;td&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Austria&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td&gt;
              &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                  &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;ms-3&quot;&gt;
                  &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Amanda Harvey &lt;i class=&quot;bi-patch-check-fill text-primary&quot; data-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Top endorsed&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;amanda@example.com&lt;/span&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Human resources&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United Kingdom&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                 &lt;td&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Anne Richard&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;anne@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Seller&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Branding products&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-warning&quot;&gt;&lt;/span&gt;Pending
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td&gt;
              &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                  &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;ms-3&quot;&gt;
                  &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;David Harrison&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;david@example.com&lt;/span&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Unknown&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Unknown&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                &lt;td&gt;
              &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                &lt;div class=&quot;avatar avatar-circle&quot;&gt;
                  &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot; alt=&quot;...&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;ms-3&quot;&gt;
                  &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Finch Hoot&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;finch@example.com&lt;/span&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Designer&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;IT department&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Argentina&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-danger&quot;&gt;&lt;/span&gt;Suspended
                &lt;/td&gt;
              &lt;/tr&gt;

              &lt;tr&gt;
                 &lt;td&gt;
                  &lt;a class=&quot;d-flex align-items-center&quot; href=&quot;&quot;&gt;
                    &lt;div class=&quot;avatar avatar-soft-primary avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;B&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ms-3&quot;&gt;
                      &lt;span class=&quot;d-block h5 text-inherit mb-0&quot;&gt;Bob Dean&lt;/span&gt;
                      &lt;span class=&quot;d-block fs-5 text-body&quot;&gt;bob@example.com&lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;d-block h5 mb-0&quot;&gt;Executive director&lt;/span&gt;
                  &lt;span class=&quot;d-block fs-5&quot;&gt;Marketing&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Austria&lt;/td&gt;
                &lt;td&gt;
                  &lt;span class=&quot;legend-indicator bg-success&quot;&gt;&lt;/span&gt;Active
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;/tbody&gt;
            &lt;/table&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="datatable-collapsible" class="nue-docs-heading">
    Collapsible rows <a class="anchorjs-link" href="#datatable-collapsible" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="card">
        <div class="card-header">
          <h4 class="card-header-title">Data</h4>
        </div>

        <div class="table-responsive datatable-custom datatable-custom-collapsible">
          <table id="datatableChildRows" class="display nowrap table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Salary</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class=&quot;table-responsive datatable-custom datatable-custom-collapsible&quot;&gt;
            &lt;table id=&quot;datatableChildRows&quot; class=&quot;display nowrap table table-borderless table-thead-bordered table-nowrap table-align-middle card-table&quot;&gt;
              &lt;thead&gt;
              &lt;tr&gt;
                &lt;th&gt;&lt;/th&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Position&lt;/th&gt;
                &lt;th&gt;Office&lt;/th&gt;
                &lt;th&gt;Salary&lt;/th&gt;
              &lt;/tr&gt;
              &lt;/thead&gt;
            &lt;/table&gt;
          &lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            // INITIALIZATION OF DATATABLES
            // =======================================================
            const data = [
              {
                &quot;id&quot;: &quot;1&quot;,
                &quot;name&quot;: &quot;Tiger Nixon&quot;,
                &quot;position&quot;: &quot;System Architect&quot;,
                &quot;salary&quot;: &quot;$320,800&quot;,
                &quot;start_date&quot;: &quot;2011/04/25&quot;,
                &quot;office&quot;: &quot;Edinburgh&quot;,
                &quot;extn&quot;: &quot;5421&quot;
              },
              {
                &quot;id&quot;: &quot;2&quot;,
                &quot;name&quot;: &quot;Garrett Winters&quot;,
                &quot;position&quot;: &quot;Accountant&quot;,
                &quot;salary&quot;: &quot;$170,750&quot;,
                &quot;start_date&quot;: &quot;2011/07/25&quot;,
                &quot;office&quot;: &quot;Tokyo&quot;,
                &quot;extn&quot;: &quot;8422&quot;
              },
              {
                &quot;id&quot;: &quot;3&quot;,
                &quot;name&quot;: &quot;Ashton Cox&quot;,
                &quot;position&quot;: &quot;Junior Technical Author&quot;,
                &quot;salary&quot;: &quot;$86,000&quot;,
                &quot;start_date&quot;: &quot;2009/01/12&quot;,
                &quot;office&quot;: &quot;San Francisco&quot;,
                &quot;extn&quot;: &quot;1562&quot;
              },
              {
                &quot;id&quot;: &quot;4&quot;,
                &quot;name&quot;: &quot;Cedric Kelly&quot;,
                &quot;position&quot;: &quot;Senior Javascript Developer&quot;,
                &quot;salary&quot;: &quot;$433,060&quot;,
                &quot;start_date&quot;: &quot;2012/03/29&quot;,
                &quot;office&quot;: &quot;Edinburgh&quot;,
                &quot;extn&quot;: &quot;6224&quot;
              },
              {
                &quot;id&quot;: &quot;5&quot;,
                &quot;name&quot;: &quot;Airi Satou&quot;,
                &quot;position&quot;: &quot;Accountant&quot;,
                &quot;salary&quot;: &quot;$162,700&quot;,
                &quot;start_date&quot;: &quot;2008/11/28&quot;,
                &quot;office&quot;: &quot;Tokyo&quot;,
                &quot;extn&quot;: &quot;5407&quot;
              }
            ]

            /* Formatting function for row details - modify as you need */
            function format (d) {
              // `d` is the original data object for the row
              return '&lt;table&gt;'+
                      '&lt;tr&gt;'+
                      '&lt;td&gt;Full name:&lt;/td&gt;'+
                      '&lt;td&gt;'+d.name+'&lt;/td&gt;'+
                      '&lt;/tr&gt;'+
                      '&lt;tr&gt;'+
                      '&lt;td&gt;Extension number:&lt;/td&gt;'+
                      '&lt;td&gt;'+d.extn+'&lt;/td&gt;'+
                      '&lt;/tr&gt;'+
                      '&lt;tr&gt;'+
                      '&lt;td&gt;Extra info:&lt;/td&gt;'+
                      '&lt;td&gt;And any further details here (images etc)...&lt;/td&gt;'+
                      '&lt;/tr&gt;'+
                      '&lt;/table&gt;'
            }

            Nue.components.NueDatatables.init('#datatableChildRows', {
              &quot;data&quot;: data,
              &quot;columns&quot;: [
                {
                  &quot;className&quot;: 'details-control',
                  &quot;orderable&quot;: false,
                  &quot;data&quot;: null,
                  &quot;defaultContent&quot;: ''
                },
                { &quot;data&quot;: &quot;name&quot; },
                { &quot;data&quot;: &quot;position&quot; },
                { &quot;data&quot;: &quot;office&quot; },
                { &quot;data&quot;: &quot;salary&quot; }
              ],
              order: []
            })

            const datatableCollapasble = Nue.components.NueDatatables.getItem('datatableChildRows')

            // ADD EVENT LISTENER FOR OPENING AND CLOSING DETAILS
            // =======================================================
            document.querySelector('#datatableChildRows tbody').addEventListener('click', function (e) {
              if (!e.target.closest('td.details-control')) return
              const tr = e.target.closest('tr'),
                row = datatableCollapasble.row(tr);

              if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide()
                tr.classList.remove('shown')
              }
              else {
                // Open this row
                row.child(format(row.data())).show()
                tr.classList.add('shown')
              }
            })
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
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
            <td><code>paging</code></td>
            <td>Enable pagination.</td>
            <td><code>true</code></td>
          </tr>

          <tr>
            <td><code>info.currentInterval</code></td>
            <td>Pages interval info template.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td><code>info.divider</code></td>
            <td>Divider for current interval. Example: Showing 1 <code>to</code> 10 of 24 entries.</td>
            <td><code>"to"</code></td>
          </tr>

          <tr>
            <td><code>pagination</code></td>
            <td>Pagination template.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td><code>paginationClasses</code></td>
            <td>Pagination class.</td>
            <td><code>pagination</code></td>
          </tr>

          <tr>
            <td><code>paginationLinksClasses</code></td>
            <td>Pagination links classes.</td>
            <td><code>page-link</code></td>
          </tr>

          <tr>
            <td><code>paginationItemsClasses</code></td>
            <td>Pagination items classes.</td>
            <td><code>page-item</code></td>
          </tr>

          <tr>
            <td><code>paginationPrevLinkClasses</code></td>
            <td>Pagination previous class.</td>
            <td><code>page-item</code></td>
          </tr>

          <tr>
            <td><code>paginationPrevLinkClasses</code></td>
            <td>Pagination previous link class.</td>
            <td><code>page-link</code></td>
          </tr>

          <tr>
            <td><code>paginationNextClasses</code></td>
            <td>Pagination next class.</td>
            <td><code>page-item</code></td>
          </tr>

          <tr>
            <td><code>paginationNextLinkClasses</code></td>
            <td>Pagination next link class.</td>
            <td><code>page-link</code></td>
          </tr>

          <tr>
            <td><code>paginationPrevLinkMarkup</code></td>
            <td>Pagination previous template.</td>
            <td><code>&lt;span aria-hidden="true">Prev&lt;/span></code></td>
          </tr>

          <tr>
            <td><code>paginationNextLinkMarkup</code></td>
            <td>Pagination next template.</td>
            <td><code>&lt;span aria-hidden="true">Next&lt;/span></code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection