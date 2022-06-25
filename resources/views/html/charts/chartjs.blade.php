@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Chart.js')

@section('js')
	<script>
  	// INITIALIZATION OF CHARTJS
    // =======================================================
    Chart.plugins.unregister(ChartDataLabels)

    Nue.components.NueChartJS.init('.js-chart')

    // INITIALIZATION OF LINE UPDATING CHARTJS
    // =======================================================
    const updatingChartDatasets = [
      [
        [18,51,60,38,88,50,40,52,88,80,60,70],
        [27,38,60,77,40,50,49,29,42,27,42,50]
      ],
      [
        [77,40,50,49,27,38,60,42,50,29,42,27],
        [60,38,18,51,88,50,40,52,60,70,88,80]
      ]
    ]

    Nue.components.NueChartJS.init(document.querySelector('#updatingLineChart'), {
      data: {
        datasets: [
          {
            data: updatingChartDatasets[0][0]
          },
          {
            data: updatingChartDatasets[0][1]
          }
        ]
      }
    })

    const updatingLineChart = Nue.components.NueChartJS.getItem('updatingLineChart')

    // Call when tab is clicked
    document.querySelectorAll('[data-toggle="chart"]').forEach(item => {
      item.addEventListener('click', e => {
        let keyDataset = e.currentTarget.getAttribute('data-datasets')

        // Update datasets for chart
        updatingLineChart.data.datasets.forEach(function(dataset, key) {
          dataset.data = updatingChartDatasets[keyDataset][key];
        })
        updatingLineChart.update()
      })
    })

    // INITIALIZATION OF BAR UPDATING CHARTJS
    // =======================================================
    Nue.components.NueChartJS.init(document.querySelector('#updatingBarChart'));

    const updatingBarChart = Nue.components.NueChartJS.getItem('updatingBarChart')

    // Call when tab is clicked
    document.querySelectorAll('[data-toggle="chart-bar"]').forEach(item => {
      item.addEventListener('click', e => {
        let keyDataset = e.currentTarget.getAttribute('data-datasets')

        if (keyDataset === 'lastWeek') {
          updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
          updatingBarChart.data.datasets = [
            {
              "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
              "backgroundColor": "#377dff",
              "hoverBackgroundColor": "#377dff",
              "borderColor": "#377dff"
            },
            {
              "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
              "backgroundColor": "#e7eaf3",
              "borderColor": "#e7eaf3"
            }
          ];
          updatingBarChart.update();
        } else {
          updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
          updatingBarChart.data.datasets = [
            {
              "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
              "backgroundColor": "#377dff",
              "hoverBackgroundColor": "#377dff",
              "borderColor": "#377dff"
            },
            {
              "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
              "backgroundColor": "#e7eaf3",
              "borderColor": "#e7eaf3"
            }
          ]
          updatingBarChart.update();
        }
      })
    })

    // INITIALIZATION OF DOUGHNUT UPDATING CHARTJS
    // =======================================================
    Nue.components.NueChartJS.init(document.querySelector('#updatingDoughnutChart'));

    var updatingDoughnutChart =  Nue.components.NueChartJS.getItem('updatingDoughnutChart')

    // Datasets for chart, can be loaded from AJAX request
    var updatingDoughnutChartDatasets = [
      [
        [45, 25, 30]
      ],
      [
        [35, 50, 15]
      ]
    ]

    // Set datasets for chart when page is loaded
    updatingDoughnutChart.data.datasets.forEach(function(dataset, key) {
      dataset.data = updatingDoughnutChartDatasets[0][key];
    });
    updatingDoughnutChart.update();

    // Call when tab is clicked
    document.querySelectorAll('[data-toggle="chart-doughnut"]').forEach(item => {
      item.addEventListener('click', e => {
        let keyDataset = e.currentTarget.getAttribute('data-datasets')

        // Update datasets for chart
        updatingDoughnutChart.data.datasets.forEach(function(dataset, key) {
          dataset.data = updatingDoughnutChartDatasets[keyDataset][key];
        });
        updatingDoughnutChart.update();
      })
    })

    // INITIALIZATION OF DOUGHNUT-HALF CHARTJS
    // =======================================================
    Nue.components.NueChartJS.init(document.querySelector('.js-chartjs-doughnut-half'), {
      options: {
        tooltips: {
          postfix: "%"
        },
        cutoutPercentage: 85,
        rotation: 1 * Math.PI,
        circumference: 1 * Math.PI
      }
    })

    // INITIALIZATION OF DOUGHNUT-HALF UPDATING CHARTJS
    // =======================================================
    Nue.components.NueChartJS.init(document.querySelector('.js-chartjs-doughnut-half-dynamic'), {
      options: {
        tooltips: {
          postfix: "%"
        },
        cutoutPercentage: 85,
        rotation: 1 * Math.PI,
        circumference: 1 * Math.PI
      }
    })

    const halfChart = Nue.components.NueChartJS.getItem('updatingDoughnutHalfChart')

    document.querySelector('#updatingBarChartControl').addEventListener("change", e => {
      let $balance = document.querySelector('#js-chartjs-half-balance')
      if (e.target.checked) {
        halfChart.data.datasets[0].data[1] = 90
        $balance.innerHTML = "$110,351.00"
      } else {
        halfChart.data.datasets[0].data[1] = 35
        $balance.innerHTML = "$150,238.00"
      }

      halfChart.update();
    })

    // INITIALIZATION OF BUBBLE CHARTJS WITH DATALABELS PLUGIN
    // =======================================================
    document.querySelectorAll('.js-chart-datalabels').forEach(item => {
      Nue.components.NueChartJS.init(item, {
        plugins: [ChartDataLabels],
        options: {
          plugins: {
            datalabels: {
              anchor: function(context) {
                var value = context.dataset.data[context.dataIndex];
                return value.r < 20 ? 'end' : 'center';
              },
              align: function(context) {
                var value = context.dataset.data[context.dataIndex];
                return value.r < 20 ? 'end' : 'center';
              },
              color: function(context) {
                var value = context.dataset.data[context.dataIndex];
                return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
              },
              font: function(context) {
                var value = context.dataset.data[context.dataIndex],
                        fontSize = 25;

                if (value.r > 50) {
                  fontSize = 35;
                }

                if (value.r > 70) {
                  fontSize = 55;
                }

                return {
                  weight: 'lighter',
                  size: fontSize
                };
              },
              offset: 2,
              padding: 0
            }
          }
        },
      });
    })

    // INITIALIZATION OF MATRIX CHARTJS WITH CHARTJS MATRIX PLUGIN
    // =======================================================
    function generateHoursData() {
      var data = [];
      var dt = moment().subtract(365, 'days').startOf('day');
      var end = moment().startOf('day');
      while(dt <= end) {
        data.push({
          x: dt.format('YYYY-MM-DD'),
          y: dt.format('e'),
          d: dt.format('YYYY-MM-DD'),
          v: Math.random() * 24
        });
        dt = dt.add(1, 'day');
      }
      return data;
    }

    Nue.components.NueChartMatrixJS.init(document.querySelector('.js-chart-matrix'), {
      data: {
        datasets: [{
          label: 'Commits',
          data: generateHoursData(),
          width: function(ctx) {
            var a = ctx.chart.chartArea;
            return (a.right - a.left) / 70;
          },
          height: function(ctx) {
            var a = ctx.chart.chartArea;
            return (a.bottom - a.top) / 10;
          }
        }]
      },
      options: {
        tooltips: {
          callbacks: {
            title: function() { return '';},
            label: function(item, data) {
              var v = data.datasets[item.datasetIndex].data[item.index];

              if (v.v.toFixed() > 0) {
                return '<span class="fw-semi-bold">' + v.v.toFixed() + 'hours</span> on ' + v.d;
              }  else {
                return '<span class="fw-semi-bold">No time</span> on ' + v.d;
              }
            }
          }
        },
        scales: {
          xAxes: [{
            position: 'bottom',
            type: 'time',
            offset: true,
            time: {
              unit: 'week',
              round: 'week',
              displayFormats: {
                week: 'MMM'
              }
            },
            ticks: {
              "labelOffset": 20,
              "maxRotation": 0,
              "minRotation": 0,
              "fontSize": 12,
              "fontColor": "rgba(22, 52, 90, 0.5)",
              "maxTicksLimit": 12,
            },
            gridLines: {
              display: false
            }
          }],
          yAxes: [{
            type: 'time',
            offset: true,
            time: {
              unit: 'day',
              parser: 'e',
              displayFormats: {
                day: 'ddd'
              }
            },
            ticks: {
              "fontSize": 12,
              "fontColor": "rgba(22, 52, 90, 0.5)",
              "maxTicksLimit": 2,
            },
            gridLines: {
              display: false
            }
          }]
        }
      }
    });
	</script>
@endsection

@section('content')
  <x-nue::docs::header>
    Chart.js
    <x-slot:link>https://www.chartjs.org</x-slot:link>
    <x-slot:label>Dokumentasi Chart.js</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code></p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF CHARTJS
          // =======================================================
          document.querySelectorAll('.js-chart').forEach(item => {
            Nue.components.NueChartJS.init(item)
          })
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="line-chart" class="nue-docs-heading">
    Line chart <a class="anchorjs-link" href="#line-chart" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row align-items-sm-center mb-4">
        <div class="col-sm mb-3 mb-sm-0">
          <div class="d-flex align-items-center">
            <span class="h1 mb-0">$7,431.14 USD</span>
          </div>
        </div>

        <div class="col-sm-auto">
          <div class="row font-size-sm">
            <div class="col-auto">
              <span class="legend-indicator bg-primary"></span> Income
            </div>
            <div class="col-auto">
              <span class="legend-indicator bg-info"></span> Expenses
            </div>
          </div>
        </div>
      </div>

      <div class="chartjs-custom" style="height: 18rem;">
        <canvas id="project" class="js-chart" data-nue-chartjs-options='{
                        "type": "line",
                        "data": {
                           "labels": ["Feb","Jan","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
                           "datasets": [{
                            "data": [18,51,60,38,88,50,40,52,88,80,60,70],
                            "backgroundColor": "transparent",
                            "borderColor": "#377dff",
                            "borderWidth": 2,
                            "pointRadius": 0,
                            "hoverBorderColor": "#377dff",
                            "pointBackgroundColor": "#377dff",
                            "pointBorderColor": "#fff",
                            "pointHoverRadius": 0
                          },
                          {
                            "data": [27,38,60,77,40,50,49,29,42,27,42,50],
                            "backgroundColor": "transparent",
                            "borderColor": "#00c9db",
                            "borderWidth": 2,
                            "pointRadius": 0,
                            "hoverBorderColor": "#00c9db",
                            "pointBackgroundColor": "#00c9db",
                            "pointBorderColor": "#fff",
                            "pointHoverRadius": 0
                          }]
                        },
                        "options": {
                           "scales": {
                              "yAxes": [{
                                "gridLines": {
                                  "color": "#e7eaf3",
                                  "drawBorder": false,
                                  "zeroLineColor": "#e7eaf3"
                                },
                                "ticks": {
                                  "min": 0,
                                  "max": 100,
                                  "stepSize": 20,
                                  "fontColor": "#97a4af",
                                  "fontFamily": "Open Sans, sans-serif",
                                  "padding": 10,
                                  "postfix": "k"
                                }
                              }],
                              "xAxes": [{
                                "gridLines": {
                                  "display": false,
                                  "drawBorder": false
                                },
                                "ticks": {
                                  "fontSize": 12,
                                  "fontColor": "#97a4af",
                                  "fontFamily": "Open Sans, sans-serif",
                                  "padding": 5
                                }
                              }]
                          },
                          "tooltips": {
                            "prefix": "$",
                            "postfix": "k",
                            "hasIndicator": true,
                            "mode": "index",
                            "intersect": false,
                            "lineMode": true,
                            "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                          },
                          "hover": {
                            "mode": "nearest",
                            "intersect": true
                          }
                        }
                      }'>
        </canvas>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row align-items-sm-center mb-4"&gt;
            &lt;div class="col-sm mb-3 mb-sm-0"&gt;
              &lt;div class="d-flex align-items-center"&gt;
                &lt;span class="h1 mb-0"&gt;$7,431.14 USD&lt;/span&gt;

                &lt;span class="text-success me-2"&gt;
                  &lt;i class="tio-trending-up"&gt;&lt;/i&gt; 25.3%
                &lt;/span&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-sm-auto"&gt;
              &lt;!-- Legend Indicators --&gt;
              &lt;div class="row font-size-sm"&gt;
                &lt;div class="col-auto"&gt;
                  &lt;span class="legend-indicator bg-primary"&gt;&lt;/span&gt; Income
                &lt;/div&gt;
                &lt;div class="col-auto"&gt;
                  &lt;span class="legend-indicator bg-info"&gt;&lt;/span&gt; Expenses
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End Legend Indicators --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;

          &lt;!-- Line Chart --&gt;
          &lt;div class="chartjs-custom" style="height: 18rem;"&gt;
            &lt;canvas class="js-chart"
                    data-nue-chartjs-options='{
                      "type": "line",
                      "data": {
                         "labels": ["Feb","Jan","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
                         "datasets": [{
                          "data": [18,51,60,38,88,50,40,52,88,80,60,70],
                          "backgroundColor": "transparent",
                          "borderColor": "#377dff",
                          "borderWidth": 2,
                          "pointRadius": 0,
                          "hoverBorderColor": "#377dff",
                          "pointBackgroundColor": "#377dff",
                          "pointBorderColor": "#fff",
                          "pointHoverRadius": 0
                        },
                        {
                          "data": [27,38,60,77,40,50,49,29,42,27,42,50],
                          "backgroundColor": "transparent",
                          "borderColor": "#00c9db",
                          "borderWidth": 2,
                          "pointRadius": 0,
                          "hoverBorderColor": "#00c9db",
                          "pointBackgroundColor": "#00c9db",
                          "pointBorderColor": "#fff",
                          "pointHoverRadius": 0
                        }]
                      },
                      "options": {
                         "scales": {
                            "yAxes": [{
                              "gridLines": {
                                "color": "#e7eaf3",
                                "drawBorder": false,
                                "zeroLineColor": "#e7eaf3"
                              },
                              "ticks": {
                                "min": 0,
                                "max": 100,
                                "stepSize": 20,
                                "fontColor": "#97a4af",
                                "fontFamily": "Open Sans, sans-serif",
                                "padding": 10,
                                "postfix": "k"
                              }
                            }],
                            "xAxes": [{
                              "gridLines": {
                                "display": false,
                                "drawBorder": false
                              },
                              "ticks": {
                                "fontSize": 12,
                                "fontColor": "#97a4af",
                                "fontFamily": "Open Sans, sans-serif",
                                "padding": 5
                              }
                            }]
                        },
                        "tooltips": {
                          "prefix": "$",
                          "postfix": "k",
                          "hasIndicator": true,
                          "mode": "index",
                          "intersect": false,
                          "lineMode": true,
                          "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                        },
                        "hover": {
                          "mode": "nearest",
                          "intersect": true
                        }
                      }
                    }'&gt;
            &lt;/canvas&gt;
          &lt;/div&gt;
          &lt;!-- End Line Chart --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="updating-line-chart" class="nue-docs-heading">
    Updating line chart <a class="anchorjs-link" href="#updating-line-chart" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Use <code>"gradientPosition": {"x0": 0, "y0": 0, "x1": 0, "y1": 200}</code> to set position for gradient.</p>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row align-items-sm-center mb-4">
        <div class="col-sm mb-3 mb-sm-0">
          <div class="d-flex align-items-center">
            <span class="h1 mb-0">$7,431.14 USD</span>
          </div>
        </div>

        <div class="col-sm-auto">
          <ul class="nav nav-segment" id="projectsTab" role="tablist">
            <li class="nav-item" data-toggle="chart" data-datasets="0" data-trigger="click" data-action="toggle">
              <a class="nav-link active" href="javascript:;" data-bs-toggle="tab">
                <span class="legend-indicator bg-primary"></span> This week
              </a>
            </li>
            <li class="nav-item" data-toggle="chart" data-datasets="1" data-trigger="click" data-action="toggle">
              <a class="nav-link" href="javascript:;" data-bs-toggle="tab">
                <span class="legend-indicator bg-info"></span> Last week
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="chartjs-custom" style="height: 18rem;">
        <canvas id="updatingLineChart" data-nue-chartjs-options='{
                        "type": "line",
                        "data": {
                           "labels": ["Feb","Jan","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
                           "datasets": [{
                            "backgroundColor": ["rgba(55, 125, 255, .5)", "rgba(255, 255, 255, .2)"],
                            "borderColor": "#377dff",
                            "borderWidth": 2,
                            "pointRadius": 0,
                            "hoverBorderColor": "#377dff",
                            "pointBackgroundColor": "#377dff",
                            "pointBorderColor": "#fff",
                            "pointHoverRadius": 0
                          },
                          {
                            "backgroundColor": ["rgba(0, 201, 219, .5)", "rgba(255, 255, 255, .2)"],
                            "borderColor": "#00c9db",
                            "borderWidth": 2,
                            "pointRadius": 0,
                            "hoverBorderColor": "#00c9db",
                            "pointBackgroundColor": "#00c9db",
                            "pointBorderColor": "#fff",
                            "pointHoverRadius": 0
                          }]
                        },
                        "options": {
                          "gradientPosition": {"y1": 200},
                           "scales": {
                              "yAxes": [{
                                "gridLines": {
                                  "color": "#e7eaf3",
                                  "drawBorder": false,
                                  "zeroLineColor": "#e7eaf3"
                                },
                                "ticks": {
                                  "min": 0,
                                  "max": 100,
                                  "stepSize": 20,
                                  "fontColor": "#97a4af",
                                  "fontFamily": "Open Sans, sans-serif",
                                  "padding": 10,
                                  "postfix": "k"
                                }
                              }],
                              "xAxes": [{
                                "gridLines": {
                                  "display": false,
                                  "drawBorder": false
                                },
                                "ticks": {
                                  "fontSize": 12,
                                  "fontColor": "#97a4af",
                                  "fontFamily": "Open Sans, sans-serif",
                                  "padding": 5
                                }
                              }]
                          },
                          "tooltips": {
                            "prefix": "$",
                            "postfix": "k",
                            "hasIndicator": true,
                            "mode": "index",
                            "intersect": false,
                            "lineMode": true,
                            "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                          },
                          "hover": {
                            "mode": "nearest",
                            "intersect": true
                          }
                        }
                      }'>
        </canvas>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row align-items-sm-center mb-4"&gt;
            &lt;div class="col-sm mb-3 mb-sm-0"&gt;
              &lt;div class="d-flex align-items-center"&gt;
                &lt;span class="h1 mb-0"&gt;$7,431.14 USD&lt;/span&gt;
              &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="col-sm-auto"&gt;
              &lt;!-- Nav --&gt;
              &lt;ul class="nav nav-segment" id="projectsTab" role="tablist"&gt;
                &lt;li class="nav-item" data-toggle="chart" data-datasets="0" data-trigger="click" data-action="toggle"&gt;
                  &lt;a class="nav-link active" href="javascript:;" data-bs-toggle="tab"&gt;
                    &lt;span class="legend-indicator bg-primary"&gt;&lt;/span&gt; This week
                  &lt;/a&gt;
                &lt;/li&gt;
                &lt;li class="nav-item" data-toggle="chart" data-datasets="1" data-trigger="click" data-action="toggle"&gt;
                  &lt;a class="nav-link" href="javascript:;" data-bs-toggle="tab"&gt;
                    &lt;span class="legend-indicator bg-info"&gt;&lt;/span&gt; Last week
                  &lt;/a&gt;
                &lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- End Nav --&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;

          &lt;!-- Line Chart --&gt;
          &lt;div class="chartjs-custom" style="height: 18rem;"&gt;
            &lt;canvas id="updatingLineChart"
                    data-nue-chartjs-options='{
                      "type": "line",
                      "data": {
                         "labels": ["Feb","Jan","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
                         "datasets": [{
                          "backgroundColor": ["rgba(55, 125, 255, .5)", "rgba(255, 255, 255, .2)"],
                          "borderColor": "#377dff",
                          "borderWidth": 2,
                          "pointRadius": 0,
                          "hoverBorderColor": "#377dff",
                          "pointBackgroundColor": "#377dff",
                          "pointBorderColor": "#fff",
                          "pointHoverRadius": 0
                        },
                        {
                          "backgroundColor": ["rgba(0, 201, 219, .5)", "rgba(255, 255, 255, .2)"],
                          "borderColor": "#00c9db",
                          "borderWidth": 2,
                          "pointRadius": 0,
                          "hoverBorderColor": "#00c9db",
                          "pointBackgroundColor": "#00c9db",
                          "pointBorderColor": "#fff",
                          "pointHoverRadius": 0
                        }]
                      },
                      "options": {
                        "gradientPosition": {"y1": 200},
                         "scales": {
                            "yAxes": [{
                              "gridLines": {
                                "color": "#e7eaf3",
                                "drawBorder": false,
                                "zeroLineColor": "#e7eaf3"
                              },
                              "ticks": {
                                "min": 0,
                                "max": 100,
                                "stepSize": 20,
                                "fontColor": "#97a4af",
                                "fontFamily": "Open Sans, sans-serif",
                                "padding": 10,
                                "postfix": "k"
                              }
                            }],
                            "xAxes": [{
                              "gridLines": {
                                "display": false,
                                "drawBorder": false
                              },
                              "ticks": {
                                "fontSize": 12,
                                "fontColor": "#97a4af",
                                "fontFamily": "Open Sans, sans-serif",
                                "padding": 5
                              }
                            }]
                        },
                        "tooltips": {
                          "prefix": "$",
                          "postfix": "k",
                          "hasIndicator": true,
                          "mode": "index",
                          "intersect": false,
                          "lineMode": true,
                          "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                        },
                        "hover": {
                          "mode": "nearest",
                          "intersect": true
                        }
                      }
                    }'&gt;
            &lt;/canvas&gt;
          &lt;/div&gt;
          &lt;!-- End Line Chart --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              // INITIALIZATION OF UPDATING CHARTJS
              // =======================================================
              const updatingChartDatasets = [
                [
                  [18,51,60,38,88,50,40,52,88,80,60,70],
                  [27,38,60,77,40,50,49,29,42,27,42,50]
                ],
                [
                  [77,40,50,49,27,38,60,42,50,29,42,27],
                  [60,38,18,51,88,50,40,52,60,70,88,80]
                ]
              ]

              Nue.components.NueChartJS.init(document.querySelector('#updatingLineChart'), {
                data: {
                  datasets: [
                    {
                      data: updatingChartDatasets[0][0]
                    },
                    {
                      data: updatingChartDatasets[0][1]
                    }
                  ]
                }
              });

              const updatingLineChart = Nue.components.NueChartJS.getItem('updatingLineChart')

              // Call when tab is clicked
              document.querySelectorAll('[data-toggle="chart"]').forEach(item => {
                item.addEventListener('click', e => {
                  let keyDataset = e.currentTarget.getAttribute('data-datasets')

                  // Update datasets for chart
                  updatingLineChart.data.datasets.forEach(function(dataset, key) {
                    dataset.data = updatingChartDatasets[keyDataset][key];
                  })
                  updatingLineChart.update()
                })
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="strong-line-chart" class="nue-docs-heading">
    Strong line chart <a class="anchorjs-link" href="#strong-line-chart" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="chartjs-custom" style="height: 18rem;">
        <canvas id="strong-line-chart" class="js-chart" data-nue-chartjs-options='{
                    "type": "line",
                    "data": {
                       "labels": ["6:00 PM","6:00 PM","6:01 PM","6:01 PM","6:02 PM","6:02 PM","6:03 PM","6:03 PM","6:04 PM","6:04 PM","6:05 PM","6:05 PM","6:06 PM","6:06 PM","6:07 PM","6:07 PM","6:08 PM","6:08 PM","6:09 PM","6:09 PM","6:10 PM","6:10 PM","6:11 PM","6:11 PM","6:12 PM","6:12 PM","6:13 PM","6:13 PM","6:14 PM","6:14 PM","6:15 PM","6:15 PM","6:16 PM","6:16 PM","6:17 PM","6:17 PM","6:18 PM","6:18 PM","6:19 PM","6:19 PM","6:20 PM","6:20 PM","6:21 PM","6:21 PM","6:22 PM","6:22 PM","6:23 PM","6:23 PM","6:24 PM","6:24 PM","6:25 PM","6:25 PM","6:26 PM","6:26 PM","6:27 PM","6:27 PM","6:28 PM","6:28 PM","6:29 PM","6:29 PM","6:30 PM","6:30 PM","6:31 PM","6:31 PM","6:32 PM","6:32 PM","6:33 PM","6:33 PM","6:34 PM","6:34 PM","6:35 PM","6:35 PM","6:36 PM","6:36 PM","6:37 PM","6:37 PM","6:38 PM","6:38 PM","6:39 PM","6:39 PM","6:40 PM","6:40 PM","6:41 PM","6:41 PM","6:42 PM","6:42 PM","6:43 PM","6:43 PM","6:44 PM","6:44 PM","6:45 PM","6:45 PM","6:46 PM","6:46 PM","6:47 PM","6:47 PM","6:48 PM","6:48 PM","6:49 PM","6:49 PM","6:50 PM","6:50 PM","6:51 PM","6:51 PM","6:52 PM","6:52 PM","6:53 PM","6:53 PM","6:54 PM","6:54 PM","6:55 PM","6:55 PM","6:56 PM","6:56 PM","6:57 PM","6:57 PM","6:58 PM","6:58 PM","6:59 PM","6:59 PM"],
                       "datasets": [{
                        "data": [8516, 8520, 8547, 8575, 8588, 8604, 8601, 8595, 8617, 8612, 8607, 8632, 8636, 8641, 8638, 8641, 8624, 8633, 8643, 8630, 8646, 8662, 8670, 8667, 8658, 8660, 8657, 8648, 8645, 8647, 8652, 8637, 8647, 8640, 8667, 8658, 8660, 8713, 8703, 8705, 8747, 8620, 8635, 8680, 8675, 8667, 8620, 8645, 8645, 8625, 8635, 8645, 8665, 8660, 8670, 8640, 8650, 8640, 8635, 8645, 8695, 8703, 8705, 8640, 8650, 8640, 8620, 8610, 8640, 8630, 8610, 8620, 8600, 8590, 8610, 8620, 8600, 8610, 8605, 8610, 8660, 8665, 8664, 8640, 8645, 8650, 8610, 8620, 8630, 8670, 8675, 8674, 8660, 8665, 8650, 8610, 8612, 8607, 8632, 8636, 8641, 8638, 8641, 8638, 8641, 8624, 8633, 8643, 8630, 8646, 8662, 8638, 8641, 8624, 8633, 8643, 8630, 8646, 8632, 8636],
                        "backgroundColor": "transparent",
                        "borderColor": "#377dff",
                        "borderWidth": 2,
                        "pointBackgroundColor": "transparent",
                        "pointHoverBackgroundColor": "#377dff",
                        "pointBorderColor": "transparent",
                        "pointHoverBorderColor": "#377dff",
                        "pointRadius": 2,
                        "pointHoverRadius": 2,
                        "lineTension": 0
                      }]
                    },
                    "options": {
                       "scales": {
                        "yAxes": [{
                          "display": false
                        }],
                        "xAxes": [{
                          "gridLines": {
                            "display": false,
                            "drawBorder": false
                          },
                          "ticks": {
                            "labelOffset": 40,
                            "maxTicksLimit": 6,
                            "padding": 20,
                            "maxRotation": 0,
                            "minRotation": 0,
                            "fontSize": 12,
                            "fontColor": "rgba(0, 0, 0, 0.4)"
                          }
                        }]
                      },
                      "hover": {
                         "mode": "nearest",
                         "intersect": false
                       },
                      "tooltips": {
                        "prefix": "$",
                        "intersect": false
                      }
                    }
                  }'>
        </canvas>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Chartjs --&gt;
          &lt;div class="chartjs-custom" style="height: 18rem;"&gt;
            &lt;canvas class="js-chart"
                data-nue-chartjs-options='{
                  "type": "line",
                  "data": {
                     "labels": ["6:00 PM","6:00 PM","6:01 PM","6:01 PM","6:02 PM","6:02 PM","6:03 PM","6:03 PM","6:04 PM","6:04 PM","6:05 PM","6:05 PM","6:06 PM","6:06 PM","6:07 PM","6:07 PM","6:08 PM","6:08 PM","6:09 PM","6:09 PM","6:10 PM","6:10 PM","6:11 PM","6:11 PM","6:12 PM","6:12 PM","6:13 PM","6:13 PM","6:14 PM","6:14 PM","6:15 PM","6:15 PM","6:16 PM","6:16 PM","6:17 PM","6:17 PM","6:18 PM","6:18 PM","6:19 PM","6:19 PM","6:20 PM","6:20 PM","6:21 PM","6:21 PM","6:22 PM","6:22 PM","6:23 PM","6:23 PM","6:24 PM","6:24 PM","6:25 PM","6:25 PM","6:26 PM","6:26 PM","6:27 PM","6:27 PM","6:28 PM","6:28 PM","6:29 PM","6:29 PM","6:30 PM","6:30 PM","6:31 PM","6:31 PM","6:32 PM","6:32 PM","6:33 PM","6:33 PM","6:34 PM","6:34 PM","6:35 PM","6:35 PM","6:36 PM","6:36 PM","6:37 PM","6:37 PM","6:38 PM","6:38 PM","6:39 PM","6:39 PM","6:40 PM","6:40 PM","6:41 PM","6:41 PM","6:42 PM","6:42 PM","6:43 PM","6:43 PM","6:44 PM","6:44 PM","6:45 PM","6:45 PM","6:46 PM","6:46 PM","6:47 PM","6:47 PM","6:48 PM","6:48 PM","6:49 PM","6:49 PM","6:50 PM","6:50 PM","6:51 PM","6:51 PM","6:52 PM","6:52 PM","6:53 PM","6:53 PM","6:54 PM","6:54 PM","6:55 PM","6:55 PM","6:56 PM","6:56 PM","6:57 PM","6:57 PM","6:58 PM","6:58 PM","6:59 PM","6:59 PM"],
                     "datasets": [{
                      "data": [8516, 8520, 8547, 8575, 8588, 8604, 8601, 8595, 8617, 8612, 8607, 8632, 8636, 8641, 8638, 8641, 8624, 8633, 8643, 8630, 8646, 8662, 8670, 8667, 8658, 8660, 8657, 8648, 8645, 8647, 8652, 8637, 8647, 8640, 8667, 8658, 8660, 8713, 8703, 8705, 8747, 8620, 8635, 8680, 8675, 8667, 8620, 8645, 8645, 8625, 8635, 8645, 8665, 8660, 8670, 8640, 8650, 8640, 8635, 8645, 8695, 8703, 8705, 8640, 8650, 8640, 8620, 8610, 8640, 8630, 8610, 8620, 8600, 8590, 8610, 8620, 8600, 8610, 8605, 8610, 8660, 8665, 8664, 8640, 8645, 8650, 8610, 8620, 8630, 8670, 8675, 8674, 8660, 8665, 8650, 8610, 8612, 8607, 8632, 8636, 8641, 8638, 8641, 8638, 8641, 8624, 8633, 8643, 8630, 8646, 8662, 8638, 8641, 8624, 8633, 8643, 8630, 8646, 8632, 8636],
                      "backgroundColor": "transparent",
                      "borderColor": "#377dff",
                      "borderWidth": 2,
                      "pointBackgroundColor": "transparent",
                      "pointHoverBackgroundColor": "#377dff",
                      "pointBorderColor": "transparent",
                      "pointHoverBorderColor": "#377dff",
                      "pointRadius": 2,
                      "pointHoverRadius": 2,
                      "lineTension": 0
                    }]
                  },
                  "options": {
                     "scales": {
                      "yAxes": [{
                        "display": false
                      }],
                      "xAxes": [{
                        "gridLines": {
                          "display": false,
                          "drawBorder": false
                        },
                        "ticks": {
                          "labelOffset": 40,
                          "maxTicksLimit": 6,
                          "padding": 20,
                          "maxRotation": 0,
                          "minRotation": 0,
                          "fontSize": 12,
                          "fontColor": "rgba(0, 0, 0, 0.4)"
                        }
                      }]
                    },
                    "hover": {
                       "mode": "nearest",
                       "intersect": false
                     },
                    "tooltips": {
                      "prefix": "$",
                      "intersect": false
                    }
                  }
                }'&gt;
            &lt;/canvas&gt;
          &lt;/div&gt;
          &lt;!-- End Chartjs --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="line-chart-with-grid" class="nue-docs-heading">
    Line chart with grid <a class="anchorjs-link" href="#line-chart-with-grid" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row justify-content-end mb-5">
        <div class="col-auto">
          <span class="legend-indicator bg-primary"></span> Income
        </div>
        <div class="col-auto">
          <span class="legend-indicator"></span> Expenses
        </div>
      </div>

      <div class="chartjs-custom" style="height: 300px;">
        <canvas id="line-chart-with-grid" class="js-chart" data-nue-chartjs-options='{
                    "type": "line",
                    "data": {
                       "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM","11AM","12AM","1PM","2PM","3PM","4PM","5PM","6PM","7PM","8PM","9PM","10PM","11PM","12PM"],
                       "datasets": [{
                        "data": [30,30,30,32,33,34,35,34,33,32,31,30,30,30,30,32,33,34,35,34,33,32,31,30],
                        "backgroundColor": "transparent",
                        "borderColor": "#eeeef1",
                        "borderWidth": 2,
                        "pointRadius": 0,
                        "pointHoverRadius": 1,
                        "lineTension": 0,
                        "borderDash": [10,5]
                      },
                      {
                        "data": [70,52,47,58,38,40,57,40,31,53,60,43,70,52,47,58,38,40,57,40,31,53,60,43],
                        "backgroundColor": "transparent",
                        "borderColor": "#377dff",
                        "borderWidth": 2,
                        "pointRadius": 0,
                        "pointHoverRadius": 1,
                        "lineTension": 0
                      }]
                    },
                    "options": {
                       "scales": {
                        "yAxes": [{
                          "gridLines": {
                            "drawBorder": false,
                            "color": "#eeeef1"
                          },
                          "ticks": {
                            "min": 25,
                            "max": 150,
                            "stepSize": 25,
                            "fontColor": "rgba(0, 0, 0, 0.4)",
                            "padding": 10
                          }
                        }],
                        "xAxes": [{
                          "gridLines": {
                            "display": false,
                            "drawBorder": false
                          },
                          "ticks": {
                            "labelOffset": 20,
                            "maxTicksLimit": 11,
                            "padding": 20,
                            "maxRotation": 0,
                            "minRotation": 0,
                            "fontSize": 12,
                            "fontColor": "rgba(0, 0, 0, 0.4)"
                          }
                        }]
                      },
                      "hover": {
                         "mode": "nearest",
                         "intersect": false
                       },
                      "tooltips": {
                        "prefix": "$",
                        "intersect": false
                      }
                    }
                  }'>
        </canvas>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Legend Indicators --&gt;
          &lt;div class="row justify-content-end mb-5"&gt;
            &lt;div class="col-auto"&gt;
              &lt;span class="legend-indicator bg-primary"&gt;&lt;/span&gt; Income
            &lt;/div&gt;
            &lt;div class="col-auto"&gt;
              &lt;span class="legend-indicator"&gt;&lt;/span&gt; Expenses
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Legend Indicators --&gt;

          &lt;!-- Chartjs --&gt;
          &lt;div class="chartjs-custom" style="height: 300px;"&gt;
            &lt;canvas class="js-chart"
                data-nue-chartjs-options='{
                  "type": "line",
                  "data": {
                     "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM","11AM","12AM","1PM","2PM","3PM","4PM","5PM","6PM","7PM","8PM","9PM","10PM","11PM","12PM"],
                     "datasets": [{
                      "data": [30,30,30,32,33,34,35,34,33,32,31,30,30,30,30,32,33,34,35,34,33,32,31,30],
                      "backgroundColor": "transparent",
                      "borderColor": "#eeeef1",
                      "borderWidth": 2,
                      "pointRadius": 0,
                      "pointHoverRadius": 1,
                      "lineTension": 0,
                      "borderDash": [10,5]
                    },
                    {
                      "data": [70,52,47,58,38,40,57,40,31,53,60,43,70,52,47,58,38,40,57,40,31,53,60,43],
                      "backgroundColor": "transparent",
                      "borderColor": "#377dff",
                      "borderWidth": 2,
                      "pointRadius": 0,
                      "pointHoverRadius": 1,
                      "lineTension": 0
                    }]
                  },
                  "options": {
                     "scales": {
                      "yAxes": [{
                        "gridLines": {
                          "drawBorder": false,
                          "color": "#eeeef1"
                        },
                        "ticks": {
                          "min": 25,
                          "max": 150,
                          "stepSize": 25,
                          "fontColor": "rgba(0, 0, 0, 0.4)",
                          "padding": 10
                        }
                      }],
                      "xAxes": [{
                        "gridLines": {
                          "display": false,
                          "drawBorder": false
                        },
                        "ticks": {
                          "labelOffset": 20,
                          "maxTicksLimit": 11,
                          "padding": 20,
                          "maxRotation": 0,
                          "minRotation": 0,
                          "fontSize": 12,
                          "fontColor": "rgba(0, 0, 0, 0.4)"
                        }
                      }]
                    },
                    "hover": {
                       "mode": "nearest",
                       "intersect": false
                     },
                    "tooltips": {
                      "prefix": "$",
                      "intersect": false
                    }
                  }
                }'&gt;
            &lt;/canvas&gt;
          &lt;/div&gt;
          &lt;!-- End Chartjs --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="bar-chart" class="nue-docs-heading">
    Bar chart <a class="anchorjs-link" href="#bar-chart" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="d-flex align-items-center mb-4">
        <span class="h1 mb-0">35%</span>
      </div>

      <div class="chartjs-custom">
        <canvas id="ecommerce-sales" class="js-chart" style="height: 20rem;" data-nue-chartjs-options='{
                        "type": "bar",
                        "data": {
                          "labels": ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"],
                          "datasets": [{
                            "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                            "backgroundColor": "#377dff",
                            "hoverBackgroundColor": "#377dff",
                            "borderColor": "#377dff"
                          }]
                        },
                        "options": {
                          "scales": {
                            "yAxes": [{
                              "gridLines": {
                                "color": "#e7eaf3",
                                "drawBorder": false,
                                "zeroLineColor": "#e7eaf3"
                              },
                              "ticks": {
                                "beginAtZero": true,
                                "stepSize": 100,
                                "fontSize": 12,
                                "fontColor": "#97a4af",
                                "fontFamily": "Open Sans, sans-serif",
                                "padding": 10,
                                "postfix": "$"
                              }
                            }],
                            "xAxes": [{
                              "gridLines": {
                                "display": false,
                                "drawBorder": false
                              },
                              "ticks": {
                                "fontSize": 12,
                                "fontColor": "#97a4af",
                                "fontFamily": "Open Sans, sans-serif",
                                "padding": 5
                              },
                              "categoryPercentage": 0.5,
                              "maxBarThickness": "10"
                            }]
                          },
                          "cornerRadius": 2,
                          "tooltips": {
                            "prefix": "$",
                            "hasIndicator": true,
                            "mode": "index",
                            "intersect": false
                          },
                          "hover": {
                            "mode": "nearest",
                            "intersect": true
                          }
                        }
                      }'></canvas>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="d-flex align-items-center mb-4"&gt;
            &lt;span class="h1 mb-0"&gt;35%&lt;/span&gt;
            &lt;span class="text-success me-2"&gt;
              &lt;i class="tio-trending-up"&gt;&lt;/i&gt; 25.3%
            &lt;/span&gt;
          &lt;/div&gt;

          &lt;!-- Bar Chart --&gt;
          &lt;div class="chartjs-custom"&gt;
            &lt;canvas class="js-chart" style="height: 20rem;"
                    data-nue-chartjs-options='{
                      "type": "bar",
                      "data": {
                        "labels": ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"],
                        "datasets": [{
                          "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                          "backgroundColor": "#377dff",
                          "hoverBackgroundColor": "#377dff",
                          "borderColor": "#377dff"
                        }]
                      },
                      "options": {
                        "scales": {
                          "yAxes": [{
                            "gridLines": {
                              "color": "#e7eaf3",
                              "drawBorder": false,
                              "zeroLineColor": "#e7eaf3"
                            },
                            "ticks": {
                              "beginAtZero": true,
                              "stepSize": 100,
                              "fontSize": 12,
                              "fontColor": "#97a4af",
                              "fontFamily": "Open Sans, sans-serif",
                              "padding": 10,
                              "postfix": "$"
                            }
                          }],
                          "xAxes": [{
                            "gridLines": {
                              "display": false,
                              "drawBorder": false
                            },
                            "ticks": {
                              "fontSize": 12,
                              "fontColor": "#97a4af",
                              "fontFamily": "Open Sans, sans-serif",
                              "padding": 5
                            },
                            "categoryPercentage": 0.5,
                            "maxBarThickness": "10"
                          }]
                        },
                        "cornerRadius": 2,
                        "tooltips": {
                          "prefix": "$",
                          "hasIndicator": true,
                          "mode": "index",
                          "intersect": false
                        },
                        "hover": {
                          "mode": "nearest",
                          "intersect": true
                        }
                      }
                    }'&gt;&lt;/canvas&gt;
          &lt;/div&gt;
          &lt;!-- End Bar Chart --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="updating-bar-chart" class="nue-docs-heading">
    Updating bar chart <a class="anchorjs-link" href="#updating-bar-chart" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="d-flex justify-content-end mb-5">
        <ul class="nav nav-segment" id="expensesTabEg1" role="tablist">
          <li class="nav-item" data-toggle="chart-bar" data-datasets="thisWeek" data-trigger="click" data-action="toggle">
            <a class="nav-link active" href="javascript:;" data-bs-toggle="tab">This week</a>
          </li>
          <li class="nav-item" data-toggle="chart-bar" data-datasets="lastWeek" data-trigger="click" data-action="toggle">
            <a class="nav-link" href="javascript:;" data-bs-toggle="tab">Last week</a>
          </li>
        </ul>
      </div>

      <div class="chartjs-custom">
        <canvas id="updatingBarChart" style="height: 20rem;" data-nue-chartjs-options='{
                        "type": "bar",
                        "data": {
                          "labels": ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"],
                          "datasets": [{
                            "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                            "backgroundColor": "#377dff",
                            "hoverBackgroundColor": "#377dff",
                            "borderColor": "#377dff"
                          },
                          {
                            "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                            "backgroundColor": "#e7eaf3",
                            "borderColor": "#e7eaf3"
                          }]
                        },
                        "options": {
                          "scales": {
                            "yAxes": [{
                              "gridLines": {
                                "color": "#e7eaf3",
                                "drawBorder": false,
                                "zeroLineColor": "#e7eaf3"
                              },
                              "ticks": {
                                "beginAtZero": true,
                                "stepSize": 100,
                                "fontSize": 12,
                                "fontColor": "#97a4af",
                                "fontFamily": "Open Sans, sans-serif",
                                "padding": 10,
                                "postfix": "$"
                              }
                            }],
                            "xAxes": [{
                              "gridLines": {
                                "display": false,
                                "drawBorder": false
                              },
                              "ticks": {
                                "fontSize": 12,
                                "fontColor": "#97a4af",
                                "fontFamily": "Open Sans, sans-serif",
                                "padding": 5
                              },
                              "categoryPercentage": 0.5,
                              "maxBarThickness": "10"
                            }]
                          },
                          "cornerRadius": 2,
                          "tooltips": {
                            "prefix": "$",
                            "hasIndicator": true,
                            "mode": "index",
                            "intersect": false
                          },
                          "hover": {
                            "mode": "nearest",
                            "intersect": true
                          }
                        }
                      }'></canvas>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="d-flex justify-content-end mb-5"&gt;
            &lt;!-- Nav --&gt;
            &lt;ul class="nav nav-segment" id="expensesTabEg1" role="tablist"&gt;
              &lt;li class="nav-item" data-toggle="chart-bar" data-datasets="thisWeek" data-trigger="click" data-action="toggle"&gt;
                &lt;a class="nav-link active" href="javascript:;" data-bs-toggle="tab"&gt;This week&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item" data-toggle="chart-bar" data-datasets="lastWeek" data-trigger="click" data-action="toggle"&gt;
                &lt;a class="nav-link" href="javascript:;" data-bs-toggle="tab"&gt;Last week&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- End Nav --&gt;
          &lt;/div&gt;

          &lt;!-- Bar Chart --&gt;
          &lt;div class="chartjs-custom"&gt;
            &lt;canvas id="updatingBarChart" style="height: 20rem;"
                    data-nue-chartjs-options='{
                      "type": "bar",
                      "data": {
                        "labels": ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"],
                        "datasets": [{
                          "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                          "backgroundColor": "#377dff",
                          "hoverBackgroundColor": "#377dff",
                          "borderColor": "#377dff"
                        },
                        {
                          "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                          "backgroundColor": "#e7eaf3",
                          "borderColor": "#e7eaf3"
                        }]
                      },
                      "options": {
                        "scales": {
                          "yAxes": [{
                            "gridLines": {
                              "color": "#e7eaf3",
                              "drawBorder": false,
                              "zeroLineColor": "#e7eaf3"
                            },
                            "ticks": {
                              "beginAtZero": true,
                              "stepSize": 100,
                              "fontSize": 12,
                              "fontColor": "#97a4af",
                              "fontFamily": "Open Sans, sans-serif",
                              "padding": 10,
                              "postfix": "$"
                            }
                          }],
                          "xAxes": [{
                            "gridLines": {
                              "display": false,
                              "drawBorder": false
                            },
                            "ticks": {
                              "fontSize": 12,
                              "fontColor": "#97a4af",
                              "fontFamily": "Open Sans, sans-serif",
                              "padding": 5
                            },
                            "categoryPercentage": 0.5,
                            "maxBarThickness": "10"
                          }]
                        },
                        "cornerRadius": 2,
                        "tooltips": {
                          "prefix": "$",
                          "hasIndicator": true,
                          "mode": "index",
                          "intersect": false
                        },
                        "hover": {
                          "mode": "nearest",
                          "intersect": true
                        }
                      }
                    }'&gt;&lt;/canvas&gt;
          &lt;/div&gt;
          &lt;!-- End Bar Chart --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              Nue.components.NueChartJS.init(document.querySelector('#updatingBarChart'));

              const updatingBarChart = Nue.components.NueChartJS.getItem('updatingBarChart')

              // Call when tab is clicked
              document.querySelectorAll('[data-toggle="chart-bar"]').forEach(item => {
                item.addEventListener('click', e => {
                  let keyDataset = e.currentTarget.getAttribute('data-datasets')

                  if (keyDataset === 'lastWeek') {
                    updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
                    updatingBarChart.data.datasets = [
                      {
                        "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                        "backgroundColor": "#377dff",
                        "hoverBackgroundColor": "#377dff",
                        "borderColor": "#377dff"
                      },
                      {
                        "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                        "backgroundColor": "#e7eaf3",
                        "borderColor": "#e7eaf3"
                      }
                    ];
                    updatingBarChart.update();
                  } else {
                    updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
                    updatingBarChart.data.datasets = [
                      {
                        "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                        "backgroundColor": "#377dff",
                        "hoverBackgroundColor": "#377dff",
                        "borderColor": "#377dff"
                      },
                      {
                        "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                        "backgroundColor": "#e7eaf3",
                        "borderColor": "#e7eaf3"
                      }
                    ]
                    updatingBarChart.update();
                  }
                })
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="doughnut-chart" class="nue-docs-heading">
    Doughnut chart <a class="anchorjs-link" href="#doughnut-chart" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="chartjs-custom mb-3 mb-sm-5" style="height: 14rem;">
        <canvas id="doughnut-chart" class="js-chart" data-nue-chartjs-options='{
                        "type": "doughnut",
                        "data": {
                          "labels": ["USD", "USD", "USD"],
                          "datasets": [{
                            "data": [45, 25, 30],
                            "backgroundColor": ["#377dff", "#00c9db", "#e7eaf3"],
                            "borderWidth": 5,
                            "hoverBorderColor": "#fff"
                          }]
                        },
                        "options": {
                          "cutoutPercentage": 80,
                          "tooltips": {
                            "postfix": "k",
                            "hasIndicator": true,
                            "mode": "index",
                            "intersect": false
                          },
                          "hover": {
                            "mode": "nearest",
                            "intersect": true
                          }
                        }
                      }'></canvas>
      </div>

      <div class="row justify-content-center">
        <div class="col-auto mb-3 mb-sm-0">
          <span class="card-title h4">$2,332.00</span>
          <span class="legend-indicator bg-primary"></span> Marketing
        </div>

        <div class="col-auto mb-3 mb-sm-0">
          <span class="card-title h4">$10,452.00</span>
          <span class="legend-indicator bg-info"></span> Bills
        </div>

        <div class="col-auto">
          <span class="card-title h4">$56,856.00</span>
          <span class="legend-indicator"></span> Others
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Pie Chart --&gt;
          &lt;div class="chartjs-custom mb-3 mb-sm-5" style="height: 14rem;"&gt;
            &lt;canvas class="js-chart"
                    data-nue-chartjs-options='{
                      "type": "doughnut",
                      "data": {
                        "labels": ["USD", "USD", "USD"],
                        "datasets": [{
                          "data": [45, 25, 30],
                          "backgroundColor": ["#377dff", "#00c9db", "#e7eaf3"],
                          "borderWidth": 5,
                          "hoverBorderColor": "#fff"
                        }]
                      },
                      "options": {
                        "cutoutPercentage": 80,
                        "tooltips": {
                          "postfix": "k",
                          "hasIndicator": true,
                          "mode": "index",
                          "intersect": false
                        },
                        "hover": {
                          "mode": "nearest",
                          "intersect": true
                        }
                      }
                    }'&gt;&lt;/canvas&gt;
          &lt;/div&gt;
          &lt;!-- End Pie Chart --&gt;

          &lt;!-- Legend Indicators --&gt;
          &lt;div class="row justify-content-center"&gt;
            &lt;div class="col-auto mb-3 mb-sm-0"&gt;
              &lt;span class="card-title h4"&gt;$2,332.00&lt;/span&gt;
              &lt;span class="legend-indicator bg-primary"&gt;&lt;/span&gt; Marketing
            &lt;/div&gt;

            &lt;div class="col-auto mb-3 mb-sm-0"&gt;
              &lt;span class="card-title h4"&gt;$10,452.00&lt;/span&gt;
              &lt;span class="legend-indicator bg-info"&gt;&lt;/span&gt; Bills
            &lt;/div&gt;

            &lt;div class="col-auto"&gt;
              &lt;span class="card-title h4"&gt;$56,856.00&lt;/span&gt;
              &lt;span class="legend-indicator"&gt;&lt;/span&gt; Others
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Legend Indicators --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="updating-doughnut-chart" class="nue-docs-heading">
    Updating doughnut chart <a class="anchorjs-link" href="#updating-doughnut-chart" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="d-flex justify-content-end mb-3">
        <ul class="nav nav-segment" id="expensesTabEg2" role="tablist">
          <li class="nav-item" data-toggle="chart-doughnut" data-datasets="0" data-trigger="click" data-action="toggle">
            <a class="nav-link active" href="javascript:;" data-bs-toggle="tab">This week</a>
          </li>
          <li class="nav-item" data-toggle="chart-doughnut" data-datasets="1" data-trigger="click" data-action="toggle">
            <a class="nav-link" href="javascript:;" data-bs-toggle="tab">Last week</a>
          </li>
        </ul>
      </div>

      <div class="chartjs-custom mb-3 mb-sm-5" style="height: 14rem;">
        <canvas id="updatingDoughnutChart" data-nue-chartjs-options='{
                        "type": "doughnut",
                        "data": {
                          "labels": ["USD", "USD", "USD"],
                          "datasets": [{
                            "backgroundColor": ["#377dff", "#00c9db", "#e7eaf3"],
                            "borderWidth": 5,
                            "hoverBorderColor": "#fff"
                          }]
                        },
                        "options": {
                          "cutoutPercentage": 80,
                          "tooltips": {
                            "postfix": "k",
                            "hasIndicator": true,
                            "mode": "index",
                            "intersect": false
                          },
                          "hover": {
                            "mode": "nearest",
                            "intersect": true
                          }
                        }
                      }'></canvas>
      </div>

      <div class="row justify-content-center">
        <div class="col-auto mb-3 mb-sm-0">
          <span class="card-title h4">$2,332.00</span>
          <span class="legend-indicator bg-primary"></span> Marketing
        </div>

        <div class="col-auto mb-3 mb-sm-0">
          <span class="card-title h4">$10,452.00</span>
          <span class="legend-indicator bg-info"></span> Bills
        </div>

        <div class="col-auto">
          <span class="card-title h4">$56,856.00</span>
          <span class="legend-indicator"></span> Others
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="d-flex justify-content-end mb-3"&gt;
            &lt;!-- Nav --&gt;
            &lt;ul class="nav nav-segment" id="expensesTabEg2" role="tablist"&gt;
              &lt;li class="nav-item" data-toggle="chart-doughnut" data-datasets="0" data-trigger="click" data-action="toggle"&gt;
                &lt;a class="nav-link active" href="javascript:;" data-bs-toggle="tab"&gt;This week&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class="nav-item" data-toggle="chart-doughnut" data-datasets="1" data-trigger="click" data-action="toggle"&gt;
                &lt;a class="nav-link" href="javascript:;" data-bs-toggle="tab"&gt;Last week&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- End Nav --&gt;
          &lt;/div&gt;

          &lt;!-- Pie Chart --&gt;
          &lt;div class="chartjs-custom mb-3 mb-sm-5" style="height: 14rem;"&gt;
            &lt;canvas id="updatingDoughnutChart"
                    data-nue-chartjs-options='{
                      "type": "doughnut",
                      "data": {
                        "labels": ["USD", "USD", "USD"],
                        "datasets": [{
                          "backgroundColor": ["#377dff", "#00c9db", "#e7eaf3"],
                          "borderWidth": 5,
                          "hoverBorderColor": "#fff"
                        }]
                      },
                      "options": {
                        "cutoutPercentage": 80,
                        "tooltips": {
                          "postfix": "k",
                          "hasIndicator": true,
                          "mode": "index",
                          "intersect": false
                        },
                        "hover": {
                          "mode": "nearest",
                          "intersect": true
                        }
                      }
                    }'&gt;&lt;/canvas&gt;
          &lt;/div&gt;
          &lt;!-- End Pie Chart --&gt;

          &lt;!-- Legend Indicators --&gt;
          &lt;div class="row justify-content-center"&gt;
            &lt;div class="col-auto mb-3 mb-sm-0"&gt;
              &lt;span class="card-title h4"&gt;$2,332.00&lt;/span&gt;
              &lt;span class="legend-indicator bg-primary"&gt;&lt;/span&gt; Marketing
            &lt;/div&gt;

            &lt;div class="col-auto mb-3 mb-sm-0"&gt;
              &lt;span class="card-title h4"&gt;$10,452.00&lt;/span&gt;
              &lt;span class="legend-indicator bg-info"&gt;&lt;/span&gt; Bills
            &lt;/div&gt;

            &lt;div class="col-auto"&gt;
              &lt;span class="card-title h4"&gt;$56,856.00&lt;/span&gt;
              &lt;span class="legend-indicator"&gt;&lt;/span&gt; Others
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Legend Indicators --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              Nue.components.NueChartJS.init(document.querySelector('#updatingDoughnutChart'));

              // Datasets for chart, can be loaded from AJAX request
              var updatingDoughnutChartDatasets = [
                [
                  [45, 25, 30]
                ],
                [
                  [35, 50, 15]
                ]
              ]

              const updatingDoughnutChart = Nue.components.NueChartJS.getItem('updatingDoughnutChart')

              // Set datasets for chart when page is loaded
              updatingDoughnutChart.data.datasets.forEach(function(dataset, key) {
                dataset.data = updatingDoughnutChartDatasets[0][key];
              });
              updatingDoughnutChart.update();

              // Call when tab is clicked
              document.querySelectorAll('[data-toggle="chart-doughnut"]').forEach(item => {
                item.addEventListener('click', e => {
                  let keyDataset = e.currentTarget.getAttribute('data-datasets')

                  // Update datasets for chart
                  updatingDoughnutChart.data.datasets.forEach(function(dataset, key) {
                    dataset.data = updatingDoughnutChartDatasets[keyDataset][key];
                  });
                  updatingDoughnutChart.update();
                })
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="half-cicle-chart" class="nue-docs-heading">
    Half circle chart <a class="anchorjs-link" href="#half-cicle-chart" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="chartjs-doughnut-custom" style="height: 12rem;">
        <canvas id="doughnutHalfChart" class="js-chartjs-doughnut-half" data-nue-chartjs-options='{
                      "type": "doughnut",
                      "data": {
                        "labels": ["Current status", "Goal"],
                        "datasets": [{
                          "data": [64, 35],
                          "backgroundColor": ["#377dff", "rgba(55, 125, 255, 0.35)"],
                          "borderWidth": 4,
                          "hoverBorderColor": "#ffffff"
                        }]
                      }
                    }'></canvas>

        <div class="chartjs-doughnut-custom-stat">
          <small class="text-cap">Project balance</small>
          <span class="h1">$150,238.00</span>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Chart Half --&gt;
          &lt;div class="chartjs-doughnut-custom" style="height: 12rem;"&gt;
            &lt;canvas class="js-chartjs-doughnut-half"
                    data-nue-chartjs-options='{
                    "type": "doughnut",
                    "data": {
                      "labels": ["Current status", "Goal"],
                      "datasets": [{
                        "data": [64, 35],
                        "backgroundColor": ["#377dff", "rgba(55, 125, 255, 0.35)"],
                        "borderWidth": 4,
                        "hoverBorderColor": "#ffffff"
                      }]
                    }
                  }'&gt;&lt;/canvas&gt;

            &lt;div class="chartjs-doughnut-custom-stat"&gt;
              &lt;small class="text-cap"&gt;Project balance&lt;/small&gt;
              &lt;span class="h1"&gt;$150,238.00&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Chart Half --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              Nue.components.NueChartJS.init(document.querySelector('.js-chartjs-doughnut-half'), {
                options: {
                  tooltips: {
                    postfix: "%"
                  },
                  cutoutPercentage: 85,
                  rotation: 1 * Math.PI,
                  circumference: 1 * Math.PI
                }
              });
            });
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="updating-half-cicle-chart" class="nue-docs-heading">
    Updating half circle chart <a class="anchorjs-link" href="#updating-half-cicle-chart" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="d-flex justify-content-end mb-5">
        <div class="form-check form-switch form-switch-between">
          <input id="updatingBarChartControl" class="form-check-input" type="checkbox">
        </div>
      </div>

      <div class="chartjs-doughnut-custom" style="height: 12rem;">
        <canvas id="updatingDoughnutHalfChart" class="js-chartjs-doughnut-half-dynamic" data-nue-chartjs-options='{
                      "type": "doughnut",
                      "data": {
                        "labels": ["Current status", "Goal"],
                        "datasets": [{
                          "data": [64, 35],
                          "backgroundColor": ["#377dff", "rgba(55, 125, 255, 0.35)"],
                          "borderWidth": 4,
                          "hoverBorderColor": "#ffffff"
                        }]
                      }
                    }'></canvas>

        <div class="chartjs-doughnut-custom-stat">
          <small class="text-cap">Project balance</small>
          <span id="js-chartjs-half-balance" class="h1">$150,238.00</span>
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="d-flex justify-content-end mb-5"&gt;
           &lt;!-- Checkbox Switch --&gt;
            &lt;div class=&quot;form-check form-switch form-switch-between&quot;&gt;
              &lt;input id=&quot;updatingBarChartControl&quot; class=&quot;form-check-input&quot; type=&quot;checkbox&quot;&gt;
            &lt;/div&gt;
            &lt;!-- End Checkbox Switch --&gt;
          &lt;/div&gt;

          &lt;!-- Chart Half --&gt;
          &lt;div class="chartjs-doughnut-custom" style="height: 12rem;"&gt;
            &lt;canvas id="updatingDoughnutHalfChart" class="js-chartjs-doughnut-half-dynamic"
                    data-nue-chartjs-options='{
                    "type": "doughnut",
                    "data": {
                      "labels": ["Current status", "Goal"],
                      "datasets": [{
                        "data": [64, 35],
                        "backgroundColor": ["#377dff", "rgba(55, 125, 255, 0.35)"],
                        "borderWidth": 4,
                        "hoverBorderColor": "#ffffff"
                      }]
                    }
                  }'&gt;&lt;/canvas&gt;

            &lt;div class="chartjs-doughnut-custom-stat"&gt;
              &lt;small class="text-cap"&gt;Project balance&lt;/small&gt;
              &lt;span class="h1"&gt;$150,238.00&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Chart Half --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              Nue.components.NueChartJS.init(document.querySelector('.js-chartjs-doughnut-half-dynamic'), {
                options: {
                  tooltips: {
                    postfix: "%"
                  },
                  cutoutPercentage: 85,
                  rotation: 1 * Math.PI,
                  circumference: 1 * Math.PI
                }
              });

              const halfChart = Nue.components.NueChartJS.getItem('updatingDoughnutHalfChart')

              document.querySelector('#updatingBarChartControl').addEventListener("change", e => {
                let $balance = document.querySelector('#js-chartjs-half-balance')
                if (e.target.checked) {
                  halfChart.data.datasets[0].data[1] = 90
                  $balance.innerHTML = "$110,351.00"
                } else {
                  halfChart.data.datasets[0].data[1] = 35
                  $balance.innerHTML = "$150,238.00"
                }

                halfChart.update()
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="bubble-chart" class="nue-docs-heading">
    Bubble chart <a class="anchorjs-link" href="#bubble-chart" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="chartjs-custom mx-auto" style="height: 20rem;">
        <canvas class="js-chart-datalabels" data-nue-chartjs-options='{
                        "type": "bubble",
                        "data": {
                          "datasets": [
                            {
                              "label": "Label 1",
                              "data": [
                                {"x": 55, "y": 65, "r": 99}
                              ],
                              "color": "#fff",
                              "backgroundColor": "rgba(55, 125, 255, 0.9)",
                              "borderColor": "transparent"
                            },
                            {
                              "label": "Label 2",
                              "data": [
                                {"x": 33, "y": 42, "r": 65}
                              ],
                              "color": "#fff",
                              "backgroundColor": "rgba(100, 0, 214, 0.8)",
                              "borderColor": "transparent"
                            },
                            {
                              "label": "Label 3",
                              "data": [
                                {"x": 46, "y": 26, "r": 38}
                              ],
                              "color": "#fff",
                              "backgroundColor": "#00c9db",
                              "borderColor": "transparent"
                            }
                          ]
                        },
                        "options": {
                          "scales": {
                            "yAxes": [{
                              "gridLines": {
                                "display": false
                              },
                              "ticks": {
                                "display": false,
                                "max": 100,
                                "beginAtZero": true
                              }
                            }],
                            "xAxes": [{
                            "gridLines": {
                                "display": false
                              },
                              "ticks": {
                                "display": false,
                                "max": 100,
                                "beginAtZero": true
                              }
                            }]
                          },
                          "tooltips": false
                        }
                      }'></canvas>
      </div>

      <div class="row justify-content-center">
        <div class="col-auto">
          <span class="legend-indicator bg-primary"></span> New
        </div>

        <div class="col-auto">
          <span class="legend-indicator" style="background-color: #7000f2;"></span> Pending
        </div>

        <div class="col-auto">
          <span class="legend-indicator bg-info"></span> Failed
        </div>
      </div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Chart --&gt;
          &lt;div class="chartjs-custom mx-auto" style="height: 20rem;"&gt;
            &lt;canvas class="js-chart-datalabels"
                    data-nue-chartjs-options='{
                      "type": "bubble",
                      "data": {
                        "datasets": [
                          {
                            "label": "Label 1",
                            "data": [
                              {"x": 55, "y": 65, "r": 99}
                            ],
                            "color": "#fff",
                            "backgroundColor": "rgba(55, 125, 255, 0.9)",
                            "borderColor": "transparent"
                          },
                          {
                            "label": "Label 2",
                            "data": [
                              {"x": 33, "y": 42, "r": 65}
                            ],
                            "color": "#fff",
                            "backgroundColor": "rgba(100, 0, 214, 0.8)",
                            "borderColor": "transparent"
                          },
                          {
                            "label": "Label 3",
                            "data": [
                              {"x": 46, "y": 26, "r": 38}
                            ],
                            "color": "#fff",
                            "backgroundColor": "#00c9db",
                            "borderColor": "transparent"
                          }
                        ]
                      },
                      "options": {
                        "scales": {
                          "yAxes": [{
                            "gridLines": {
                              "display": false
                            },
                            "ticks": {
                              "display": false,
                              "max": 100,
                              "beginAtZero": true
                            }
                          }],
                          "xAxes": [{
                          "gridLines": {
                              "display": false
                            },
                            "ticks": {
                              "display": false,
                              "max": 100,
                              "beginAtZero": true
                            }
                          }]
                        },
                        "tooltips": false
                      }
                    }'&gt;&lt;/canvas&gt;
          &lt;/div&gt;
          &lt;!-- End Chart --&gt;

          &lt;!-- Legend Indicators --&gt;
          &lt;div class="row justify-content-center"&gt;
            &lt;div class="col-auto"&gt;
              &lt;span class="legend-indicator bg-primary"&gt;&lt;/span&gt; New
            &lt;/div&gt;

            &lt;div class="col-auto"&gt;
              &lt;span class="legend-indicator" style="background-color: #7000f2;"&gt;&lt;/span&gt; Pending
            &lt;/div&gt;

            &lt;div class="col-auto"&gt;
              &lt;span class="legend-indicator bg-info"&gt;&lt;/span&gt; Failed
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Legend Indicators --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
             document.querySelectorAll('.js-chart-datalabels').forEach(item => {
                Nue.components.NueChartJS.init(item, {
                  plugins: [ChartDataLabels],
                  options: {
                    plugins: {
                      datalabels: {
                        anchor: function(context) {
                          var value = context.dataset.data[context.dataIndex];
                          return value.r &lt; 20 ? 'end' : 'center';
                        },
                        align: function(context) {
                          var value = context.dataset.data[context.dataIndex];
                          return value.r &lt; 20 ? 'end' : 'center';
                        },
                        color: function(context) {
                          var value = context.dataset.data[context.dataIndex];
                          return value.r &lt; 20 ? context.dataset.backgroundColor : context.dataset.color;
                        },
                        font: function(context) {
                          var value = context.dataset.data[context.dataIndex],
                                  fontSize = 25;

                          if (value.r > 50) {
                            fontSize = 35;
                          }

                          if (value.r > 70) {
                            fontSize = 55;
                          }

                          return {
                            weight: 'lighter',
                            size: fontSize
                          };
                        },
                        offset: 2,
                        padding: 0
                      }
                    }
                  },
                });
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="matrix-chart" class="nue-docs-heading">
    Matrix chart <a class="anchorjs-link" href="#matrix-chart" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="chartjs-matrix-custom mb-3" style="min-width: 100%; width: 700px;">
        <canvas class="js-chart-matrix" data-nue-chartjs-options='{
                    "options": {
                      "matrixBackgroundColor": {
                         "color": "#377dff",
                         "accent": 50,
                         "additionToValue": 2
                      },
                      "matrixLegend": {
                        "container": "#matrixLegend"
                      }
                    }
                  }'></canvas>
      </div>

      <ul id="matrixLegend" class="mb-0"></ul>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Matrix Chart --&gt;
            &lt;div class=&quot;chartjs-matrix-custom mb-3&quot; style=&quot;min-width: 100%; width: 700px;&quot;&gt;
              &lt;canvas class=&quot;js-chart-matrix&quot;
                      data-nue-chartjs-options='{
                    &quot;options&quot;: {
                      &quot;matrixBackgroundColor&quot;: {
                         &quot;color&quot;: &quot;#377dff&quot;,
                         &quot;accent&quot;: 50,
                         &quot;additionToValue&quot;: 2
                      },
                      &quot;matrixLegend&quot;: {
                        &quot;container&quot;: &quot;#matrixLegend&quot;
                      }
                    }
                  }'&gt;&lt;/canvas&gt;
          &lt;/div&gt;
          &lt;!-- End Matrix Chart --&gt;

          &lt;!-- Matrix Legend --&gt;
          &lt;ul id="matrixLegend" class="mb-0"&gt;&lt;/ul&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              function generateHoursData() {
                var data = [];
                var dt = moment().subtract(365, 'days').startOf('day');
                var end = moment().startOf('day');
                while(dt &lt;= end) {
                  data.push({
                    x: dt.format('YYYY-MM-DD'),
                    y: dt.format('e'),
                    d: dt.format('YYYY-MM-DD'),
                    v: Math.random() * 24
                  });
                  dt = dt.add(1, 'day');
                }
                return data;
              }

              Nue.components.NueChartMatrixJS.init(document.querySelector('.js-chart-matrix'), {
                data: {
                  datasets: [{
                    label: 'Commits',
                    data: generateHoursData(),
                    width: function(ctx) {
                      var a = ctx.chart.chartArea;
                      return (a.right - a.left) / 70;
                    },
                    height: function(ctx) {
                      var a = ctx.chart.chartArea;
                      return (a.bottom - a.top) / 10;
                    }
                  }]
                },
                options: {
                  tooltips: {
                    callbacks: {
                      title: function() { return '';},
                      label: function(item, data) {
                        var v = data.datasets[item.datasetIndex].data[item.index];

                        if (v.v.toFixed() > 0) {
                          return '&lt;span class="fw-semi-bold"&gt;' + v.v.toFixed() + 'hours&lt;/span&gt; on ' + v.d;
                        }  else {
                          return '&lt;span class="fw-semi-bold"&gt;No time&lt;/span&gt; on ' + v.d;
                        }
                      }
                    }
                  },
                  scales: {
                    xAxes: [{
                      position: 'bottom',
                      type: 'time',
                      offset: true,
                      time: {
                        unit: 'week',
                        round: 'week',
                        displayFormats: {
                          week: 'MMM'
                        }
                      },
                      ticks: {
                        "labelOffset": 20,
                        "maxRotation": 0,
                        "minRotation": 0,
                        "fontSize": 12,
                        "fontColor": "rgba(22, 52, 90, 0.5)",
                        "maxTicksLimit": 12,
                      },
                      gridLines: {
                        display: false
                      }
                    }],
                    yAxes: [{
                      type: 'time',
                      offset: true,
                      time: {
                        unit: 'day',
                        parser: 'e',
                        displayFormats: {
                          day: 'ddd'
                        }
                      },
                      ticks: {
                        "fontSize": 12,
                        "fontColor": "rgba(22, 52, 90, 0.5)",
                        "maxTicksLimit": 2,
                      },
                      gridLines: {
                        display: false
                      }
                    }]
                  }
                }
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="chartjs-methods" class="nue-docs-heading">
    ChartJS methods <a class="anchorjs-link" href="#chartjs-methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
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
            <td><code>options.scales.yAxes.ticks.prefix</code></td>
            <td>Preffix for yAxes.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td><code>options.scales.yAxes.ticks.postfix</code></td>
            <td>Postfix for yAxes.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td><code>options.scales.yAxes.ticks.metric</code></td>
            <td>Metric output for axes <code>(1k, 1kk, etc..)</code>.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td><code>options.responsive</code></td>
            <td>Responsive chart.</td>
            <td><code>true</code></td>
          </tr>

          <tr>
            <td><code>options.maintainAspectRatio</code></td>
            <td>Maintain the original canvas aspect ratio <code>(width / height)</code> when resizing.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td><code>options.legend.display</code></td>
            <td>Legend for chart.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td><code>options.tooltips.enabled</code></td>
            <td>Enable or disable tooltips.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td><code>options.tooltips.prefix</code></td>
            <td>Prefix for tooltip text.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td><code>options.tooltips.postfix</code></td>
            <td>Postfix for tooltip text.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td><code>options.tooltips.yearStamp</code></td>
            <td>Added year after title.</td>
            <td><code>true</code></td>
          </tr>

          <tr>
            <td><code>options.tooltips.hasIndicator</code></td>
            <td>Add indicator for tooltip.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td><code>options.tooltips.indicatorWidth</code></td>
            <td>Width indicator.</td>
            <td><code>8px</code></td>
          </tr>

          <tr>
            <td><code>options.tooltips.indicatorHeight</code></td>
            <td>Height indicator.</td>
            <td><code>8px</code></td>
          </tr>

          <tr>
            <td><code>options.tooltips.lineMode</code></td>
            <td>Set line tooltip type.</td>
            <td><code>false</code></td>
          </tr>

          <tr>
            <td><code>options.tooltips.lineWithLineColor</code></td>
            <td>Set color for line.</td>
            <td><code>null</code></td>
          </tr>

          <tr>
            <td><code>options.tooltips.lineWithLineBottomOffset</code></td>
            <td>Offset of the top for line.</td>
            <td><code>7</code></td>
          </tr>

          <tr>
            <td><code>options.tooltips.lineWithLineBottomOffset</code></td>
            <td>Offset of the bottom for line.</td>
            <td><code>43</code></td>
          </tr>

          <tr>
            <td><code>options.gradientPosition</code></td>
            <td>Gradient position.</td>
            <td><code>{
            x0: 0,
            y0: 0,
            x1: 0,
            y1: 0
            }</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <h2 id="matrix-methods" class="nue-docs-heading">
    Matrix methods <a class="anchorjs-link" href="#matrix-methods" aria-label="Anchor" data-anchorjs-icon="#"></a>
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
            <td><code>options.matrixBackgroundColor.color</code></td>
            <td>Set color for matrix chart.</td>
            <td><code>null</code></td>
          </tr>
          <tr>
            <td><code>options.matrixBackgroundColor.accent</code></td>
            <td>Set accent color for matrix chart. Usually this is the maximum value from datasets.</td>
            <td><code>null</code></td>
          </tr>
          <tr>
            <td><code>options.matrixBackgroundColor.nullColor</code></td>
            <td>Set custom color for empty items in matrix chart.</td>
            <td><code>false</code></td>
          </tr>
          <tr>
            <td><code>options.matrixBackgroundColor.additionToValue</code></td>
            <td>Add addition value to value of item in matrix chart.</td>
            <td><code>5</code></td>
          </tr>
          <tr>
            <td><code>options.matrixLegend.container</code></td>
            <td>Wrapper for custom legends.</td>
            <td><code>5</code></td>
          </tr>
          <tr>
            <td><code>options.matrixLegend.stepSize</code></td>
            <td>Step size for legends.</td>
            <td><code>max / 10</code></td>
          </tr>
          <tr>
            <td><code>options.matrixLegend.metric</code></td>
            <td>Metric output for legend values <code>(1k, 1kk, etc..)</code>.</td>
            <td><code>false</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection