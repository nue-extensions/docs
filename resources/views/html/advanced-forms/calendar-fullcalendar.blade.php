@php($i = 0)
@extends('nue-docs::app')
@section('title', 'Calendar (Fullcalendar)')

@section('js')
  <script>
    // INITIALIZATION OF FULLCALENDAR
    // =======================================================
    Nue.components.NueFullCalendar.init('.js-fullcalendar')


    // ADD DRAGGABLE CLASS FOR CALENDAR
    // =======================================================
    const Draggable = FullCalendar.Draggable;
    new Draggable(document.querySelector('#external-events'), {
      itemSelector: '.fc-event'
    });
    (function() {
      const eventContent = function(data) {
        return `

                                            <div class="d-flex align-items-center px-2">
            ${data && data.extendedProps.image ? `
                                              <img class="avatar avatar-xss" src="${data.extendedProps.image}" alt="...">` : ''}

                                                <span class="fc-event-title fc-sticky">${data.title}</span>
                                              </div>
        `;
      };
      Nue.components.NueFullCalendar.init('#js-fullcalendar-draggable', {
        events: [{
          "title": "English Lesson",
          "start": "2020-09-03T01:00:00",
          "end": "2020-09-03T02:30:00"
        }, {
          "title": "Spanish Lesson",
          "start": "2020-09-03T04:00:00",
          "end": "2020-09-03T05:30:00"
        }, {
          "title": "Javascript Lesson",
          "start": "2020-09-14T01:00:00",
          "end": "2020-09-16T02:30:00"
        }, {
          "title": "PHP Lesson",
          "start": "2020-09-06T04:00:00",
          "end": "2020-09-09T05:30:00"
        }],
        initialDate: "2020-09-10",
        headerToolbar: {
          left: "prev,next today",
          center: "title",
          right: "",
        },
        editable: true,
        eventContent({
          event
        }) {
          return {
            html: eventContent(event),
          }
        },
        drop({
          draggedEl
        }) {
          draggedEl.remove();
        },
      });
    })();
    (function() {
      let $popover;
      let $fullcalendarEditable;
      let $guestsField;
      const popoverContent = function(data) {
        return `

          <ul class="list-unstyled">
            <li class="d-flex">Start: ${moment(data.event.start).format('YYYY-MM-DD hh:mm')}</li>
            <li class="d-flex">End: ${moment(data.event.end).format('YYYY-MM-DD hh:mm')}</li>
            <li class="d-flex">Repeat: ${data.event.extendedProps.repeatField}</li>
            <li class="d-flex">Location: ${data.event.extendedProps.eventLocationLabel}</li>
            <li class="d-flex">Description: ${data.event.extendedProps.eventDescriptionLabel}</li>
            <li>Guests: ${getAvatars(data.event.extendedProps.guestsField)}</li>
          </ul>
          <a id="modal-invoker-${data.event.id}" href="javascript:;" class="btn btn-soft-primary btn-sm">Edit</a>
        `
      };
      const $titleField = document.querySelector('#eventTitle');
      const $repeatField = document.querySelector('#eventRepeatLabel');
      const $eventDescriptionLabel = document.querySelector('#eventDescriptionLabel');
      const $eventLocationLabel = document.querySelector('#eventLocationLabel');
      const $eventColorLabel = document.querySelector('#eventColorLabel');
      const $eventGuestsLabel = document.querySelector('#eventGuestsLabel');
      let editableEvent = {};
      const $processEvent = document.querySelector('#processEvent');
      const $addEventModal = document.querySelector('#addEventModal');
      const addEventModal = new bootstrap.Modal($addEventModal);


      // INITIALIZATION OF FLATPICKR
      // =======================================================
      Nue.components.NueFlatpickr.init('#eventDateRangeLabel');
      const eventDateRange = Nue.components.NueFlatpickr.getItem('eventDateRangeLabel')
      Nue.components.NueSelect.init('.js-select')
      Nue.components.NueSelect.init('#eventGuestsLabel', {
        valueField: 'id',
        create: false,
        options: [{
          id: 1,
          "value": "Amanda Harvey",
          "src": "https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg"
        }, {
          id: 2,
          "value": "David Harrison",
          "src": "https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg"
        }, {
          id: 3,
          "value": "Finch Hoot",
          "src": "https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg"
        }, {
          id: 4,
          "value": "Ella Lauda",
          "src": "https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg"
        }],
        render: {
          option: function(data, escape) {
            return `
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="${data.src}" alt="...">
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h5 class="text-inherit mb-0">${data.value}</h5>
                  </div>
                </div>`
          },
          item: function(data, escape) {
            return ' < div title = "' + data.src + '" > ' + data.value + ' < /div>';
          }
        }
      })
      $guestsField = Nue.components.NueSelect.getItem('eventGuestsLabel');


      // INITIALIZATION OF FULL CALENDAR
      // =======================================================
      Nue.components.NueFullCalendar.init('#js-fullcalendar-editable', {
        events: [{
          id: 1,
          title: "English Lesson",
          start: "2020-12-03T01:00:00",
          end: "2020-12-03T02:30:00",
          color: "rgba(237,76,120,.1)",
          eventDescriptionLabel: "",
          eventLocationLabel: "",
          repeatField: "everyday",
          guestsField: []
        }, {
          id: 2,
          title: "Spanish Lesson",
          start: "2020-12-03T04:00:00",
          end: "2020-12-03T05:30:00",
          color: "rgba(55,125,255,.1)",
          eventDescriptionLabel: "",
          eventLocationLabel: "",
          repeatField: "everyday",
          guestsField: []
        }, {
          id: 3,
          title: "Javascript Lesson",
          start: "2020-12-14T01:00:00",
          end: "2020-12-16T02:30:00",
          color: "rgba(237,76,120,.1)",
          eventDescriptionLabel: "",
          eventLocationLabel: "",
          repeatField: "everyday",
          guestsField: []
        }, {
          id: 4,
          title: "PHP Lesson",
          start: "2020-12-06T04:00:00",
          end: "2020-12-09T05:30:00",
          color: "rgba(55,125,255,.1)",
          eventDescriptionLabel: "",
          eventLocationLabel: "",
          repeatField: "everyday",
          guestsField: []
        }],
        initialDate: "2020-12-10",
        headerToolbar: {
          left: "prev,next today",
          center: "title",
          right: ""
        },
        selectable: true,
        editable: true,
        select: function(date) {
          prepareData('', date.startStr, date.endStr);
        },
        eventClick: function(event) {
          const _popoverContent = popoverContent(event);
          if ($popover && $popover._element) {
            $popover.dispose();
          }
          // Open Popover
          $popover = new bootstrap.Popover(event.el, {
            html: true,
            content: _popoverContent,
            template: `

              <div class="popover fullcalendar-event-popover" role="tooltip">
                <div class="arrow"></div>
                <h3 class="popover-header"></h3>
                <div class="popover-body"></div>
              </div>
            `,
          });
          $popover.show();
          // Open Modal For Editing
          event.el.addEventListener('shown.bs.popover', function() {
            const $invoker = document.querySelector(`#modal-invoker-${event.event.id}`);
            $invoker.addEventListener('click', function() {
              if ($popover && $popover._element) {
                $popover.dispose();
              }
              prepareData(event.event.title, event.event.start, event.event.end, event.event);
            })
          })
        },
      });
      setTimeout(function() {
        $fullcalendarEditable = Nue.components.NueFullCalendar.getItem('js-fullcalendar-editable');
      });

      // Events
      document.addEventListener('click', function(e) {
        if (
          (e.target && e.target.id === 'closePopover' && $popover && $popover._element) || (e.target && !e.target.closest('.fc-event') && !e.target.closest('.popover') && $popover && $popover._element)) {
          $popover.dispose();
        }
      });
      document.addEventListener('scroll', function() {
        if ($popover && $popover._element) {
          $popover.dispose();
        }
      });
      $processEvent.addEventListener('click', function() {
        const date = eventDateRange.selectedDates;
        if (!Object.keys(editableEvent).length) {
          $fullcalendarEditable.addEvent({
            id: new Date().getTime(),
            title: $titleField.value || '(No title)',
            repeatField: $repeatField.value,
            guestsField: $guestsField.getValue().map((id) => {
              return Object.values($guestsField.options).filter(member => parseInt(member.id) === parseInt(id))[0]
            }),
            eventDescriptionLabel: $eventDescriptionLabel.value,
            eventLocationLabel: $eventLocationLabel.value,
            start: moment(date[0]).format('YYYY-MM-DD'),
            end: date.length > 1 ? moment(date[1]).format('YYYY-MM-DD') : moment(date[0]).format('YYYY-MM-DD'),
            color: $eventColorLabel.value,
          });
        } else {
          editableEvent.setProp('title', $titleField.value);
          editableEvent.setExtendedProp('repeatField', $repeatField.getValue());
          editableEvent.setExtendedProp('guestsField', $guestsField.getValue().map((id) => {
            return Object.values($guestsField.options).filter(member => parseInt(member.id) === parseInt(id))[0]
          }));
          editableEvent.setExtendedProp('eventDescriptionLabel', $eventDescriptionLabel.value);
          editableEvent.setExtendedProp('eventLocationLabel', $eventLocationLabel.value);
          editableEvent.setProp('color', $eventColorLabel.getValue());
          editableEvent.setStart(moment(date[0]).format('YYYY-MM-DD'));
          editableEvent.setEnd(date.length > 1 ? moment(date[1]).format('YYYY-MM-DD') : moment(date[0]).format('YYYY-MM-DD'));
        }
        addEventModal.hide();
      })
      $addEventModal.addEventListener('show.bs.modal', function() {
        clearForm();
      });

      // Helpers
      function triggerEvent(el, evt) {
        const newEvt = document.createEvent('HTMLEvents');
        newEvt.initEvent(evt, false, true);
        el.dispatchEvent(newEvt);
      }

      function prepareData(title, start, end, event = {}) {
        addEventModal.show();
        $processEvent.textContent = 'Save';
        $titleField.value = title;
        eventDateRange.setDate([moment(start).format('MM/DD/YYYY'), moment(end).format('MM/DD/YYYY')])
      }

      function getAvatar(data) {
        return `
          <img class="avatar-img" src="${data.src.toLowerCase()}"  alt="${data.value}" />`;
      }

      function getAvatars(members) {
        const $list = document.createElement('div');
        $list.classList.add('avatar-group', 'avatar-group-sm', 'mb-1');
        for (let i = 0; i < members.length; i += 1) {
          const $item = document.createElement('span');
          $item.classList.add('avatar', 'avatar-circle');
          $item.innerHTML = `
            ${getAvatar(members[i])}
          `;
          $list.appendChild($item);
        }
        return members.length > 0 ? $list.outerHTML : false
      }

      function clearForm() {
        $titleField.value = '';
        $eventDescriptionLabel.value = '';
        $eventLocationLabel.value = '';
        $repeatField.value = 'everyday';
        $eventColorLabel.value = 'rgba(55,125,255,.1)';
        editableEvent = {};
        $guestsField.clear();
        triggerEvent($repeatField, 'change');
        triggerEvent($eventColorLabel, 'change');
        $processEvent.textContent = 'Create Event';
      }
    })();


    // INITIALIZATION OF FULLCALENDAR WITH SEARCH
    // =======================================================
    (function() {
      Nue.components.NueFullCalendar.init('#js-fullcalendar-with-search', {
        events: [{
          "title": "English Lesson",
          "start": "2020-09-03T01:00:00",
          "end": "2020-09-03T02:30:00"
        }, {
          "title": "Spanish Lesson",
          "start": "2020-09-03T04:00:00",
          "end": "2020-09-03T05:30:00"
        }, {
          "title": "Javascript Lesson",
          "start": "2020-09-14T01:00:00",
          "end": "2020-09-16T02:30:00"
        }, {
          "title": "PHP Lesson",
          "start": "2020-09-06T04:00:00",
          "end": "2020-09-09T05:30:00"
        }],
        initialDate: "2020-09-10",
        headerToolbar: {
          left: "prev,next today",
          center: "title",
          right: ""
        },
        editable: true,
      })
      const filterSearchExample = new NueFullcalendarFilter(Nue.components.NueFullCalendar.getItem('js-fullcalendar-with-search'))
      filterSearchExample.addFilter('byTitle', function(event) {
        return event.title.toLowerCase().indexOf($('#filter-by-title').val().toLowerCase()) !== -1
      })
      $('#filter-by-title').on('input', function() {
        filterSearchExample.filter()
      })
      filterSearchExample.filter()
    })();


    // INITIALIZATION OF FULLCALENDAR WITH FILTERS
    // =======================================================
    (function() {
      Nue.components.NueFullCalendar.init('#js-fullcalendar-with-filters', {
        events: [{
          "title": "English Lesson",
          "start": "2020-09-03T01:00:00",
          "end": "2020-09-03T02:30:00",
          category_id: 1
        }, {
          "title": "Spanish Lesson",
          "start": "2020-09-03T04:00:00",
          "end": "2020-09-03T05:30:00",
          category_id: 3
        }, {
          "title": "Javascript Lesson",
          "start": "2020-09-14T01:00:00",
          "end": "2020-09-16T02:30:00",
          category_id: 2
        }, {
          "title": "PHP Lesson",
          "start": "2020-09-06T04:00:00",
          "end": "2020-09-09T05:30:00",
          category_id: 1
        }],
        initialDate: "2020-09-10",
        headerToolbar: {
          left: "prev,next today",
          center: "title",
          right: ""
        },
        editable: true,
      })
      const filterCheckboxExample = new NueFullcalendarFilter(Nue.components.NueFullCalendar.getItem('js-fullcalendar-with-filters'))
      filterCheckboxExample.addFilter('byCategory', function(event) {
        const selectedCategories = $('[data-filter] input:checked')
        if (!selectedCategories.length) return false
        let show = false
        selectedCategories.each(key => {
          if (event.extendedProps.category_id == $($(selectedCategories)[key]).val()) {
            show = true
            return false
          }
        })
        return show
      })
      $('[data-filter]').on('change', function() {
        filterCheckboxExample.filter()
      })
      filterCheckboxExample.filter()
    })();


    // INITIALIZATION OF FULLCALENDAR TIME GRID
    // =======================================================
    (function() {
      const $eventTimeGridModal = document.querySelector('#eventTimeGridModal');
      const eventContent = function(data) {
        return `

          <div class="d-flex fc-custom-event align-items-center p-2">
            <span class="icon icon-primary me-3">
              <i class="${data.event._def.extendedProps.icon}"></i>
            </span>
            <div class="flex-grow-1">
              <h4 class="mb-1">${data.event.title}</h4>
              <span class="text-body fw-semi-bold">${data.timeText}</span>
            </div>
            <div class="avatar-group avatar-group-sm ms-auto">
              <span class="avatar avatar-circle">
                <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                </span>
                <span class="avatar avatar-dark avatar-circle">
                  <span class="avatar-initials">A</span>
                </span>
                <span class="avatar avatar-circle">
                  <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg" alt="...">
                  </span>
                  <span class="avatar avatar-primary avatar-circle">
                    <span class="avatar-initials">2+</span>
                  </span>
                </div>
              </div>
        `;
      };
      Nue.components.NueFullCalendar.init('#js-fullcalendar-custom-render', {
        events: [{
          "title": "SOLID in JavaScript Lesson",
          "start": "2020-09-03T07:00:00",
          "end": "2020-09-03T08:30:00",
          icon: "bi-tv"
        }, {
          "title": "Vue Patterns",
          "start": "2020-09-03T11:00:00",
          "end": "2020-09-03T12:30:00",
          icon: "bi-tv"
        }, ],
        initialDate: "2020-09-03",
        initialView: "timeGrid",
        editable: true,
        eventClick: function() {
          $eventTimeGridModal.show();
        },
        eventContent: function(evt) {
          return {
            html: eventContent(evt),
          }
        },
      });
    })();


    // INITIALIZATION OF FULLCALENDAR SELECT
    // =======================================================
    (function() {
      Nue.components.NueFullCalendar.init('#js-fullcalendar-tom-select', {
        initialDate: "2020-09-10",
        headerToolbar: {
          left: "prev,next today",
          center: "title",
          right: ""
        },
        editable: true,
        events: [{
          "title": "English Lesson",
          "start": "2020-09-03T01:00:00",
          "end": "2020-09-03T02:30:00"
        }, {
          "title": "Spanish Lesson",
          "start": "2020-09-03T04:00:00",
          "end": "2020-09-03T05:30:00"
        }, {
          "title": "Javascript Lesson",
          "start": "2020-09-14T01:00:00",
          "end": "2020-09-16T02:30:00"
        }, {
          "title": "PHP Lesson",
          "start": "2020-09-06T04:00:00",
          "end": "2020-09-09T05:30:00"
        }]
      })


      // APPEND SELECT CONSTROL IN TOOLBAR TO CHANGE CALENDAR VIEW
      // =======================================================
      const $select = document.createElement('div')
      $select.innerHTML = `<select id ="changeView"><option value='dayGridMonth'>Month</option>
      <option value='dayGridWeek'>Week</option>
      <option value='dayGridDay'>Day</option></select>`
      document.querySelector('#js-fullcalendar-tom-select .fc-toolbar-chunk:last-child').appendChild($select)
      const fullcalendarWithSelect = Nue.components.NueFullCalendar.getItem('js-fullcalendar-tom-select')


      // INITIALIZATION OF SELECT
      // =======================================================
      Nue.components.NueSelect.init('#changeView', {
        hideSearch: true
      })
      const selectInstance = Nue.components.NueSelect.getItem('changeView')
      selectInstance.on('change', (val) => {
        fullcalendarWithSelect.changeView(val)
      })
    })()


    // INITIALIZATION OF FULLCALENDAR CUSTOM HEADER
    // =======================================================
    const prevMonthBtn = document.querySelector('[data-fc-prev-month]')
    const nextMonthBtn = document.querySelector('[data-fc-next-month]')
    const todayBtn = document.querySelector('[data-fc-today]')
    const dateTitle = document.querySelector('[data-fc-title]')
    let gridViewSelect = document.querySelector('[data-fc-grid-view]')
    Nue.components.NueFullCalendar.init('#js-fullcalendar-custom-header', {
      initialDate: "2020-09-10",
      headerToolbar: false,
      editable: true,
      datesSet(dateSet) {
        dateTitle.textContent = dateSet.view.title
      },
      events: [{
        "title": "English Lesson",
        "start": "2020-09-03T01:00:00",
        "end": "2020-09-03T02:30:00"
      }, {
        "title": "Spanish Lesson",
        "start": "2020-09-03T04:00:00",
        "end": "2020-09-03T05:30:00"
      }, {
        "title": "Javascript Lesson",
        "start": "2020-09-14T01:00:00",
        "end": "2020-09-16T02:30:00"
      }, {
        "title": "PHP Lesson",
        "start": "2020-09-06T04:00:00",
        "end": "2020-09-09T05:30:00"
      }]
    })
    const fullcalendarCustomHeader = Nue.components.NueFullCalendar.getItem('js-fullcalendar-custom-header')
    Nue.components.NueSelect.init(gridViewSelect)
    gridViewSelect = Nue.components.NueSelect.getItem('customHeaderSelect')
    prevMonthBtn.addEventListener('click', function() {
      fullcalendarCustomHeader.prev()
      const tooltip = document.querySelector('.tooltip')
      if (tooltip) {
        tooltip.remove()
      }
    })
    nextMonthBtn.addEventListener('click', function() {
      fullcalendarCustomHeader.next()
      const tooltip = document.querySelector('.tooltip')
      if (tooltip) {
        tooltip.remove()
      }
    })
    todayBtn.addEventListener('click', function() {
      fullcalendarCustomHeader.today()
    })
    gridViewSelect.on('change', (val) => {
      fullcalendarCustomHeader.changeView(val)
    })
    todayBtn.setAttribute('title', new Date().toDateString())
  </script>
@endsection

@section('content')
  <x-nue::docs::header>
    Calendar (Fullcalendar)
    <x-slot:description>The most popular full-sized JavaScript Calendar.</x-slot:description>
    <x-slot:link>https://fullcalendar.io/</x-slot:link>
    <x-slot:label>Dokumentasi Fullcalendar</x-slot:label>
  </x-nue::docs::header>

  <h2 id="how-to-use" class="nue-docs-heading">
    Cara Pakai <a class="anchorjs-link" href="#how-to-use" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <p>Copy-paste script berikut sebelum tag penutup <code>&lt;body&gt;</code>:</p>

  <pre class="rounded">
    <code class="language-html" data-lang="html">
      &lt;script&gt;
        (function() {
          // INITIALIZATION OF FULLCALENDAR
          // =======================================================
          Nue.components.NueFullCalendar.init(selector, options);
        });
      &lt;/script&gt;
    </code>
  </pre>

  <h2 id="basic-example" class="nue-docs-heading">
    Basic example <a class="anchorjs-link" href="#basic-example" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="js-fullcalendar fullcalendar-custom" data-nue-fullscreen-options='{
             "initialDate": "2020-09-10"
             }'></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Fullcalendar--&gt;
          &lt;div class=&quot;js-fullcalendar fullcalendar-custom&quot;
             data-nue-fullscreen-options='{
               &quot;initialDate&quot;: &quot;2020-09-10&quot;
               }'&gt;
          &lt;/div&gt;
          &lt;!-- End Fullcalendar --&gt;
        </code>
      </pre>
    </x-slot:code>
  </x-nue::docs::example>

  <h2 id="drag-n-drop-events" class="nue-docs-heading">
    Drag-n-drop events <a class="anchorjs-link" href="#drag-n-drop-events" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <h4>Drag these onto the calendar:</h4>

      <ul id="external-events" class="fullcalendar-custom list-unstyled list-unstyled-py-2 w-sm-50 mb-5">
        <li>
          <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event" data-event='{
                 "title": "Open a new task on Jira",
                 "image": "https://cdn.btekno.id/templates/nue/svg/brands/jira-icon.svg",
                 "className": ""
                 }'>
            <div class="fc-event-title">
              <div class="d-flex align-items-center">
                <img class="avatar avatar-xss me-2" src="https://cdn.btekno.id/templates/nue/svg/brands/jira-icon.svg" alt="...">
                <span>Open a new task on Jira</span>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fc-event-success" data-event='{
                 "title": "Send weekly invoice to John",
                 "image": "https://cdn.btekno.id/templates/nue/svg/brands/excel-icon.svg",
                 "className": "fc-event-success"
                 }'>
            <div class="fc-event-title">
              <div class="d-flex align-items-center">
                <img class="avatar avatar-xss me-2" src="https://cdn.btekno.id/templates/nue/svg/brands/excel-icon.svg" alt="...">
                <span>Send weekly invoice to John</span>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event" data-event='{
                 "title": "Shoot a message to Christina on Slack",
                 "image": "https://cdn.btekno.id/templates/nue/svg/brands/slack-icon.svg",
                 "className": ""
                 }'>
            <div class="fc-event-title">
              <div class="d-flex align-items-center">
                <img class="avatar avatar-xss me-2" src="https://cdn.btekno.id/templates/nue/svg/brands/slack-icon.svg" alt="...">
                <span>Shoot a message to Christina on Slack</span>
              </div>
            </div>
          </div>
        </li>
      </ul>

      <div id="js-fullcalendar-draggable" class="fullcalendar-custom"></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;h4&gt;Drag these onto the calendar:&lt;/h4&gt;

          &lt;!-- External Events --&gt;
          &lt;ul id=&quot;external-events&quot; class=&quot;fullcalendar-custom list-unstyled list-unstyled-py-2 w-sm-50 mb-5&quot;&gt;
            &lt;li&gt;
              &lt;!-- Event --&gt;
              &lt;div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event'
                   data-event='{
                     &quot;title&quot;: &quot;Open a new task on Jira&quot;,
                     &quot;image&quot;: &quot;https://cdn.btekno.id/templates/nue/svg/brands/jira-icon.svg&quot;,
                     &quot;className&quot;: &quot;&quot;
                   }'&gt;
                &lt;div class='fc-event-title'&gt;
                  &lt;div class='d-flex align-items-center'&gt;
                    &lt;img class=&quot;avatar avatar-xss me-2&quot; src=&quot;https://cdn.btekno.id/templates/nue/svg/brands/jira-icon.svg&quot; alt=&quot;...&quot;&gt;
                    &lt;span&gt;Open a new task on Jira&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End Event --&gt;
            &lt;/li&gt;

            &lt;li&gt;
              &lt;!-- Event --&gt;
              &lt;div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fc-event-success'
                   data-event='{
                     &quot;title&quot;: &quot;Send weekly invoice to John&quot;,
                     &quot;image&quot;: &quot;https://cdn.btekno.id/templates/nue/svg/brands/excel-icon.svg&quot;,
                     &quot;className&quot;: &quot;fc-event-success&quot;
                   }'&gt;
                &lt;div class='fc-event-title'&gt;
                  &lt;div class='d-flex align-items-center'&gt;
                    &lt;img class=&quot;avatar avatar-xss me-2&quot; src=&quot;https://cdn.btekno.id/templates/nue/svg/brands/excel-icon.svg&quot; alt=&quot;...&quot;&gt;
                    &lt;span&gt;Send weekly invoice to John&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End Event --&gt;
            &lt;/li&gt;

            &lt;li&gt;
              &lt;!-- Event --&gt;
              &lt;div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event'
                   data-event='{
                     &quot;title&quot;: &quot;Shoot a message to Christina on Slack&quot;,
                     &quot;image&quot;: &quot;https://cdn.btekno.id/templates/nue/svg/brands/slack-icon.svg&quot;,
                     &quot;className&quot;: &quot;&quot;
                   }'
              &gt;
                &lt;div class='fc-event-title'&gt;
                  &lt;div class='d-flex align-items-center'&gt;
                    &lt;img class=&quot;avatar avatar-xss me-2&quot; src=&quot;https://cdn.btekno.id/templates/nue/svg/brands/slack-icon.svg&quot; alt=&quot;...&quot;&gt;
                    &lt;span&gt;Shoot a message to Christina on Slack&lt;/span&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;!-- End Event --&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- End External Events --&gt;

          &lt;!-- Fullcalendar --&gt;
          &lt;div id=&quot;js-fullcalendar-draggable&quot; class=&quot;fullcalendar-custom&quot;&gt;&lt;/div&gt;
          &lt;!-- End Fullcalendar --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            // ADD DRAGGABLE CLASS FOR CALENDAR
            // =======================================================
            const Draggable = FullCalendar.Draggable

            new Draggable(document.querySelector('#external-events'), {
              itemSelector: '.fc-event'
            })

            (function () {
              const eventContent = function(data) {
                return `
                  &lt;div class=&quot;d-flex align-items-center px-2&quot;&gt;
                    ${data && data.extendedProps.image ? `&lt;img class=&quot;avatar avatar-xss&quot; src=&quot;${data.extendedProps.image}&quot; alt=&quot;...&quot;&gt;` : ''}
                    &lt;span class=&quot;fc-event-title fc-sticky&quot;&gt;${data.title}&lt;/span&gt;
                  &lt;/div&gt;
                `;
              };

              Nue.components.NueFullCalendar.init('#js-fullcalendar-draggable', {
                events: [
                  {
                    &quot;title&quot;: &quot;English Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-03T01:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-03T02:30:00&quot;
                  },
                  {
                    &quot;title&quot;: &quot;Spanish Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-03T04:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-03T05:30:00&quot;
                  },
                  {
                    &quot;title&quot;: &quot;Javascript Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-14T01:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-16T02:30:00&quot;
                  },
                  {
                    &quot;title&quot;: &quot;PHP Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-06T04:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-09T05:30:00&quot;
                  }
                ],
                initialDate: &quot;2020-09-10&quot;,
                headerToolbar: {
                  left: &quot;prev,next today&quot;,
                  center: &quot;title&quot;,
                  right: &quot;&quot;,
                },
                editable: true,
                eventContent({event}) {
                  return {
                    html: eventContent(event),
                  }
                },
                drop({draggedEl}) {
                  draggedEl.remove();
                }
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="clicking-and-selecting" class="nue-docs-heading">
    Date Clicking &amp; Selecting <a class="anchorjs-link" href="#clicking-and-selecting" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addEventModal">
        <i class="bi bi-plus"></i> Add event 
      </button>

      <div id="js-fullcalendar-editable" class="fullcalendar-custom"></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Button trigger modal --&gt;
          &lt;button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addEventModal"&gt;
            &lt;i class="bi bi-plus"&gt;&lt;/i&gt; Add event &lt;/button&gt;
          &lt;!-- End Button trigger modal --&gt;

          &lt;div id="js-fullcalendar-editable" class="fullcalendar-custom"&gt;&lt;/div&gt;
          &lt;!-- End Fullcalendar --&gt;

          &lt;!-- Modal --&gt;
          &lt;div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-hidden="true"&gt;
            &lt;div class="modal-dialog modal-dialog-centered" role="document"&gt;
              &lt;div class="modal-content"&gt;
                &lt;!-- Header --&gt;
                &lt;div class="modal-close"&gt;
                  &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;!-- End Header --&gt;

                &lt;!-- Body --&gt;
                &lt;div class="modal-body"&gt;
                  &lt;div class="mb-4"&gt;
                    &lt;input type="text" id="eventTitle" class="form-control form-control-lg form-control-flush" placeholder="Add title and time" aria-label="Add title and time"&gt;
                  &lt;/div&gt;

                  &lt;!-- Media --&gt;
                  &lt;div class="d-flex mb-4"&gt;
                    &lt;i class="bi-calendar-week nav-icon mt-2 me-2"&gt;&lt;/i&gt;

                    &lt;div class="flex-grow-1"&gt;
                      &lt;label for="eventDateRangeLabel" class="visually-hidden"&gt;Date &lt;/label&gt;

                      &lt;!-- Flatpickr --&gt;
                      &lt;input type="text" id="eventDateRangeLabel" class="js-flatpickr form-control flatpickr-custom mb-2" placeholder="Select dates" data-nue-flatpickr-options='{
                               "dateFormat": "m/d/Y",
                               "mode": "range",
                               "minDate": "12/01/2020"
                             }'&gt;
                      &lt;!-- End Flatpickr --&gt;

                      &lt;label for="eventRepeatLabel" class="text-body me-2 mb-0"&gt;Repeat: &lt;/label&gt;

                      &lt;!-- Select --&gt;
                      &lt;div class="tom-select-custom"&gt;
                        &lt;select id="eventRepeatLabel" class="js-select form-select"
                              data-nue-tom-select-options='{
                                "hideSearch": true,
                                "placeholder": "Add guestse"
                              }'&gt;
                          &lt;option value="everyday" selected&gt;Everyday&lt;/option&gt;
                          &lt;option value="weekdays"&gt;Weekdays&lt;/option&gt;
                          &lt;option value="never"&gt;Never&lt;/option&gt;
                        &lt;/select&gt;
                      &lt;/div&gt;
                      &lt;!-- End Select --&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Media --&gt;

                  &lt;!-- Media --&gt;
                  &lt;div class="d-flex mb-4"&gt;
                    &lt;i class="bi-people nav-icon mt-2 me-2"&gt;&lt;/i&gt;

                    &lt;div class="flex-grow-1"&gt;
                      &lt;label for="eventGuestsLabel" class="visually-hidden"&gt;Add guests &lt;/label&gt;

                      &lt;!-- Select --&gt;
                      &lt;div class="tom-select-custom"&gt;
                        &lt;select id="eventGuestsLabel" class="form-select" multiple data-nue-tom-select-options='{
                              "placeholder": "Add guestse"
                            }'&gt;&lt;/select&gt;
                      &lt;/div&gt;
                      &lt;!-- End Select --&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Media --&gt;

                  &lt;!-- Media --&gt;
                  &lt;div class="d-flex mb-4"&gt;
                    &lt;i class="bi-geo-alt nav-icon mt-2 me-2"&gt;&lt;/i&gt;
                    &lt;div class="flex-grow-1"&gt;
                      &lt;label for="eventLocationLabel" class="visually-hidden"&gt;Add location &lt;/label&gt;
                      &lt;input type="text" class="form-control form-control-light form-control-borderless" id="eventLocationLabel" placeholder="Add location" aria-label="Add location"&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Media --&gt;

                  &lt;!-- Media --&gt;
                  &lt;div class="d-flex mb-4"&gt;
                    &lt;i class="bi-text-left nav-icon mt-2 me-2"&gt;&lt;/i&gt;
                    &lt;div class="flex-grow-1"&gt;
                      &lt;label for="eventDescriptionLabel" class="visually-hidden"&gt;Add description &lt;/label&gt;
                      &lt;textarea id="eventDescriptionLabel" class="form-control form-control-light form-control-borderless" placeholder="Add description"&gt;&lt;/textarea&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- End Media --&gt;

                  &lt;div class="row"&gt;
                    &lt;div class="col"&gt;
                      &lt;!-- Media --&gt;
                      &lt;a class="d-flex align-items-center" href="../user-profile.html"&gt;
                        &lt;div class="avatar avatar-xs avatar-circle me-3"&gt;
                          &lt;img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="..."&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-grow-1"&gt;
                          &lt;span class="d-block fs6 text-body"&gt;Assignee:&lt;/span&gt;
                          &lt;span class="h5 text-inherit"&gt;Amanda Harvey&lt;/span&gt;
                        &lt;/div&gt;
                      &lt;/a&gt;
                      &lt;!-- End Media --&gt;
                    &lt;/div&gt;

                    &lt;div class="col-auto"&gt;
                      &lt;label for="eventColorLabel" class="visually-hidden"&gt;Event color &lt;/label&gt;

                      &lt;!-- Select --&gt;
                      &lt;div class="tom-select-custom"&gt;
                        &lt;select id="eventColorLabel" class="js-select form-select" data-nue-tom-select-options='{
                              "hideSearch": true,
                              "width": "10rem"
                            }'&gt;
                          &lt;option value="rgba(55,125,255,.1)" selected data-option-template='&lt;div&gt;&lt;span class="legend-indicator bg-primary"&gt;&lt;/span&gt;Primary&lt;/div&gt;'&gt;Primary &lt;/option&gt;
                          &lt;option value="rgba(0,201,167,.1)" data-option-template='&lt;div&gt;&lt;span class="legend-indicator bg-success"&gt;&lt;/span&gt;Green&lt;/div&gt;'&gt;Green &lt;/option&gt;
                          &lt;option value="rgba(237,76,120,.1)" data-option-template='&lt;div&gt;&lt;span class="legend-indicator bg-danger"&gt;&lt;/span&gt;Red&lt;/div&gt;'&gt;Red &lt;/option&gt;
                          &lt;option value="rgba(245,202,153,.1)" data-option-template='&lt;div&gt;&lt;span class="legend-indicator bg-warning"&gt;&lt;/span&gt;Yellow&lt;/div&gt;'&gt;Yellow &lt;/option&gt;
                          &lt;option value="rgba(0,201,219,1)" data-option-template='&lt;div&gt;&lt;span class="legend-indicator bg-info"&gt;&lt;/span&gt;Cyan&lt;/div&gt;'&gt;Cyan &lt;/option&gt;
                          &lt;option value="rgba(19,33,68,1)" data-option-template='&lt;div&gt;&lt;span class="legend-indicator bg-dark"&gt;&lt;/span&gt;Navy&lt;/div&gt;'&gt;Navy &lt;/option&gt;
                        &lt;/select&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- End Body --&gt;

                &lt;!-- Footer --&gt;
                &lt;div class="modal-footer"&gt;
                  &lt;button type="button" id="discardFormt" class="btn btn-white" data-dismiss="modal"&gt;Discard &lt;/button&gt;
                  &lt;button type="button" id="processEvent" class="btn btn-primary"&gt;Create event &lt;/button&gt;
                &lt;/div&gt;
                &lt;!-- End Footer --&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- End Modal --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script src=&quot;../node_modules/daterangepicker/moment.min.js&quot;&gt;&lt;/script&gt;
          &lt;script src=&quot;../node_modules/flatpickr/dist/flatpickr.min.js&quot;&gt;&lt;/script&gt;

          &lt;script&gt;
          (function () {
            let $popover;
            let $fullcalendarEditable;
            let $guestsField;
            const popoverContent = function(data) {
              return `
                  &lt;ul class=&quot;list-unstyled&quot;&gt;
                  &lt;li class=&quot;d-flex&quot;&gt;Start: ${moment(data.event.start).format('YYYY-MM-DD hh:mm')}&lt;/li&gt;
                  &lt;li class=&quot;d-flex&quot;&gt;End: ${moment(data.event.end).format('YYYY-MM-DD hh:mm')}&lt;/li&gt;
                  &lt;li class=&quot;d-flex&quot;&gt;Repeat: ${data.event.extendedProps.repeatField}&lt;/li&gt;
                  &lt;li class=&quot;d-flex&quot;&gt;Location: ${data.event.extendedProps.eventLocationLabel}&lt;/li&gt;
                  &lt;li class=&quot;d-flex&quot;&gt;Description: ${data.event.extendedProps.eventDescriptionLabel}&lt;/li&gt;
                  &lt;li&gt;Guests: ${getAvatars(data.event.extendedProps.guestsField)}&lt;/li&gt;
                &lt;/ul&gt;
                &lt;a id=&quot;modal-invoker-${data.event.id}&quot; href=&quot;javascript:;&quot; class=&quot;btn btn-soft-primary btn-sm&quot;&gt;Edit&lt;/a&gt;
        `
            };

            const $titleField = document.querySelector('#eventTitle');
            const $repeatField = document.querySelector('#eventRepeatLabel');
            const $eventDescriptionLabel = document.querySelector('#eventDescriptionLabel');
            const $eventLocationLabel = document.querySelector('#eventLocationLabel');
            const $eventColorLabel = document.querySelector('#eventColorLabel');
            const $eventGuestsLabel = document.querySelector('#eventGuestsLabel');
            let editableEvent = {};

            const $processEvent = document.querySelector('#processEvent');
            const $addEventModal = document.querySelector('#addEventModal');

            const addEventModal = new bootstrap.Modal($addEventModal);

            // INITIALIZATION OF FLATPICKR
            // =======================================================
            Nue.components.NueFlatpickr.init('#eventDateRangeLabel');
            const eventDateRange = Nue.components.NueFlatpickr.getItem('eventDateRangeLabel')

            Nue.components.NueSelect.init('.js-select')

            Nue.components.NueSelect.init('#eventGuestsLabel', {
              valueField: 'id',
              create: false,
              options: [
                {
                  id: 1,
                  &quot;value&quot;: &quot;Amanda Harvey&quot;,
                  &quot;src&quot;: &quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot;
                },{
                  id: 2,
                  &quot;value&quot;: &quot;David Harrison&quot;,
                  &quot;src&quot;: &quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot;
                }, {
                  id: 3,
                  &quot;value&quot;: &quot;Finch Hoot&quot;,
                  &quot;src&quot;: &quot;https://cdn.btekno.id/templates/nue/img/160x160/img5.jpg&quot;
                }, {
                  id: 4,
                  &quot;value&quot;: &quot;Ella Lauda&quot;,
                  &quot;src&quot;: &quot;https://cdn.btekno.id/templates/nue/img/160x160/img9.jpg&quot;
                }
              ],
              render: {
                option: function(data, escape) {
                  return `&lt;div class=&quot;d-flex align-items-center&quot;&gt;

            &lt;div class=&quot;flex-shrink-0&quot;&gt;
              &lt;div class=&quot;avatar avatar-sm avatar-circle&quot;&gt;
              &lt;img class=&quot;avatar-img&quot; src=&quot;${data.src}&quot; alt=&quot;...&quot;&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;flex-grow-1 ms-3&quot;&gt;
              &lt;h5 class=&quot;text-inherit mb-0&quot;&gt;${data.value}&lt;/h5&gt;
            &lt;/div&gt;
              &lt;/div&gt;`
                },
                item: function(data, escape) {
                  return '&lt;div title=&quot;' + data.src + '&quot;&gt;' + data.value + '&lt;/div&gt;';
                }
              }
            })

            $guestsField = Nue.components.NueSelect.getItem('eventGuestsLabel');

            // INITIALIZATION OF FULL CALENDAR
            // =======================================================
            Nue.components.NueFullCalendar.init('#js-fullcalendar-editable', {
              events: [
                {
                  id: 1,
                  title: &quot;English Lesson&quot;,
                  start: &quot;2020-12-03T01:00:00&quot;,
                  end: &quot;2020-12-03T02:30:00&quot;,
                  color: &quot;rgba(237,76,120,.1)&quot;,
                  eventDescriptionLabel: &quot;&quot;,
                  eventLocationLabel: &quot;&quot;,
                  repeatField: &quot;everyday&quot;,
                  guestsField: []
                },
                {
                  id: 2,
                  title: &quot;Spanish Lesson&quot;,
                  start: &quot;2020-12-03T04:00:00&quot;,
                  end: &quot;2020-12-03T05:30:00&quot;,
                  color: &quot;rgba(55,125,255,.1)&quot;,
                  eventDescriptionLabel: &quot;&quot;,
                  eventLocationLabel: &quot;&quot;,
                  repeatField: &quot;everyday&quot;,
                  guestsField: []
                },
                {
                  id: 3,
                  title: &quot;Javascript Lesson&quot;,
                  start: &quot;2020-12-14T01:00:00&quot;,
                  end: &quot;2020-12-16T02:30:00&quot;,
                  color: &quot;rgba(237,76,120,.1)&quot;,
                  eventDescriptionLabel: &quot;&quot;,
                  eventLocationLabel: &quot;&quot;,
                  repeatField: &quot;everyday&quot;,
                  guestsField: []
                },
                {
                  id: 4,
                  title: &quot;PHP Lesson&quot;,
                  start: &quot;2020-12-06T04:00:00&quot;,
                  end: &quot;2020-12-09T05:30:00&quot;,
                  color: &quot;rgba(55,125,255,.1)&quot;,
                  eventDescriptionLabel: &quot;&quot;,
                  eventLocationLabel: &quot;&quot;,
                  repeatField: &quot;everyday&quot;,
                  guestsField: []
                }
              ],
              initialDate: &quot;2020-12-10&quot;,
              headerToolbar: {
                left: &quot;prev,next today&quot;,
                center: &quot;title&quot;,
                right: &quot;&quot;
              },
              selectable: true,
              editable: true,
              select: function (date) {
                prepareData('', date.startStr, date.endStr);
              },
              eventClick: function (event) {
                const _popoverContent = popoverContent(event);

                if ($popover && $popover._element) {
                  $popover.dispose();
                }

                // Open Popover
                $popover = new bootstrap.Popover(event.el, {
                  html: true,
                  content: _popoverContent,
                  template: `
                    &lt;div class=&quot;popover fullcalendar-event-popover&quot; role=&quot;tooltip&quot;&gt;
                      &lt;div class=&quot;arrow&quot;&gt;&lt;/div&gt;
                      &lt;h3 class=&quot;popover-header&quot;&gt;&lt;/h3&gt;
                      &lt;div class=&quot;popover-body&quot;&gt;&lt;/div&gt;
                    &lt;/div&gt;
                  `,
                });
                $popover.show();

                // Open Modal For Editing
                event.el.addEventListener('shown.bs.popover', function () {
                  const $invoker = document.querySelector(`#modal-invoker-${event.event.id}`);

                  $invoker.addEventListener('click', function () {
                    if ($popover && $popover._element) {
                      $popover.dispose();
                    }

                    prepareData(
                        event.event.title,
                        event.event.start,
                        event.event.end,
                        event.event
                    );
                  })
                })
              },
            });

            setTimeout(function() {
              $fullcalendarEditable = Nue.components.NueFullCalendar.getItem('js-fullcalendar-editable');
            });

            // Events
            document.addEventListener('click', function (e) {
              if (
                  (e.target && e.target.id === 'closePopover' && $popover && $popover._element)
                  || (e.target && !e.target.closest('.fc-event') && !e.target.closest('.popover') && $popover && $popover._element)
              ) {
                $popover.dispose();
              }
            });

            document.addEventListener('scroll', function () {
              if ($popover && $popover._element) {
                $popover.dispose();
              }
            });

            $processEvent.addEventListener('click', function () {
              const date = eventDateRange.selectedDates;

              if (!Object.keys(editableEvent).length) {
                $fullcalendarEditable.addEvent({
                  id: new Date().getTime(),
                  title: $titleField.value || '(No title)',
                  repeatField: $repeatField.value,
                  guestsField: $guestsField.getValue().map((id) =&gt; {
                    return Object.values($guestsField.options).filter(member =&gt; parseInt(member.id) === parseInt(id))[0]
                  }),
                  eventDescriptionLabel: $eventDescriptionLabel.value,
                  eventLocationLabel: $eventLocationLabel.value,
                  start: moment(date[0]).format('YYYY-MM-DD'),
                  end: date.length &gt; 1 ? moment(date[1]).format('YYYY-MM-DD') : moment(date[0]).format('YYYY-MM-DD'),
                  color: $eventColorLabel.value,
                });
              } else {
                editableEvent.setProp('title', $titleField.value);
                editableEvent.setExtendedProp('repeatField', $repeatField.getValue());
                editableEvent.setExtendedProp('guestsField', $guestsField.getValue().map((id) =&gt; {
                  return Object.values($guestsField.options).filter(member =&gt; parseInt(member.id) === parseInt(id))[0]
                }));
                editableEvent.setExtendedProp('eventDescriptionLabel', $eventDescriptionLabel.value);
                editableEvent.setExtendedProp('eventLocationLabel', $eventLocationLabel.value);
                editableEvent.setProp('color', $eventColorLabel.getValue());
                editableEvent.setStart(moment(date[0]).format('YYYY-MM-DD'));
                editableEvent.setEnd(date.length &gt; 1 ? moment(date[1]).format('YYYY-MM-DD') : moment(date[0]).format('YYYY-MM-DD'));
              }

              addEventModal.hide();
            })

            $addEventModal.addEventListener('show.bs.modal', function () {
              clearForm();
            });

            // Helpers
            function triggerEvent(el, evt) {
              const newEvt = document.createEvent('HTMLEvents');

              newEvt.initEvent(evt, false, true);

              el.dispatchEvent(newEvt);
            }

            function prepareData(title, start, end, event = {}) {
              addEventModal.show();

              $processEvent.textContent = 'Save';

              $titleField.value = title;

              eventDateRange.setDate([moment(start).format('MM/DD/YYYY'), moment(end).format('MM/DD/YYYY')])
            }

            function getAvatar(data) {
              return `&lt;img class=&quot;avatar-img&quot; src=&quot;${data.src.toLowerCase()}&quot;  alt=&quot;${data.value}&quot; /&gt;`;
            }

            function getAvatars(members) {
              const $list = document.createElement('div');
              $list.classList.add(
                  'avatar-group',
                  'avatar-group-sm',
                  'mb-1'
              );

              for (let i = 0; i &lt; members.length; i += 1) {
                const $item = document.createElement('span');
                $item.classList.add(
                    'avatar',
                    'avatar-circle'
                );
                $item.innerHTML = `
                  ${getAvatar(members[i])}
                `;

                $list.appendChild($item);
              }

              return members.length &gt; 0 ? $list.outerHTML : false
            }

            function clearForm() {
              $titleField.value = '';
              $eventDescriptionLabel.value = '';
              $eventLocationLabel.value = '';
              $repeatField.value = 'everyday';
              $eventColorLabel.value = 'rgba(55,125,255,.1)';
              editableEvent = {};

              $guestsField.clear();
              triggerEvent($repeatField, 'change');
              triggerEvent($eventColorLabel, 'change');

              $processEvent.textContent = 'Create Event';
            }
          })();
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
      <div class="input-group input-group-merge input-group-flush mb-4">
        <div class="input-group-prepend input-group-text">
          <i class="bi-search"></i>
        </div>
        <input id="filter-by-title" type="search" class="form-control" placeholder="Search by title" aria-label="Search by title">
      </div>

      <div id="js-fullcalendar-with-search" class="fullcalendar-custom"></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Input Group --&gt;
          &lt;div class=&quot;input-group input-group-merge input-group-flush mb-4&quot;&gt;
            &lt;div class=&quot;input-group-prepend input-group-text&quot;&gt;
              &lt;i class=&quot;bi-search&quot;&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;input id=&quot;filter-by-title&quot; type=&quot;search&quot; class=&quot;form-control&quot; placeholder=&quot;Search by title&quot; aria-label=&quot;Search by title&quot;&gt;
          &lt;/div&gt;
          &lt;!-- End Input Group --&gt;

          &lt;div id=&quot;js-fullcalendar-with-search&quot; class=&quot;fullcalendar-custom&quot;&gt;&lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              Nue.components.NueFullCalendar.init('#js-fullcalendar-with-search', {
                events: [
                  {
                    &quot;title&quot;: &quot;English Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-03T01:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-03T02:30:00&quot;
                  },
                  {
                    &quot;title&quot;: &quot;Spanish Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-03T04:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-03T05:30:00&quot;
                  },
                  {
                    &quot;title&quot;: &quot;Javascript Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-14T01:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-16T02:30:00&quot;
                  },
                  {
                    &quot;title&quot;: &quot;PHP Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-06T04:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-09T05:30:00&quot;
                  }
                ],
                initialDate: &quot;2020-09-10&quot;,
                headerToolbar: {
                  left: &quot;prev,next today&quot;,
                  center: &quot;title&quot;,
                  right: &quot;&quot;
                },
                editable: true,
              })

              const filterSearchExample = new NueFullcalendarFilter(Nue.components.NueFullCalendar.getItem('js-fullcalendar-with-search'))

              filterSearchExample.addFilter('byTitle', function (event) {
                return event.title.toLowerCase().indexOf($('#filter-by-title').val().toLowerCase()) !== -1
              })

              $('#filter-by-title').on('input', function () {
                filterSearchExample.filter()
              })

              filterSearchExample.filter()
            })();
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="with-filters" class="nue-docs-heading">
    With filters <a class="anchorjs-link" href="#with-filters" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="mb-4">
        <div class="form-check form-check-inline">
          <input type="checkbox" id="customInlineCheck1" class="form-check-input" value="1" checked>
          <label class="form-check-label" for="customInlineCheck1">category 1 </label>
        </div>

        <div class="form-check form-check-inline">
          <input type="checkbox" id="customInlineCheck2" class="form-check-input indeterminate-checkbox" value="2" checked>
          <label class="form-check-label" for="customInlineCheck2">category 2 </label>
        </div>

        <div class="form-check form-check-inline">
          <input type="checkbox" id="customInlineCheck3" class="form-check-input" value="3" checked>
          <label class="form-check-label" for="customInlineCheck3">category 3 </label>
        </div>
      </div>

      <div id="js-fullcalendar-with-filters" class="fullcalendar-custom"></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;!-- Form Check --&gt;
          &lt;div class="form-check form-check-inline"&gt;
            &lt;input type="checkbox" id="customInlineCheck1" class="form-check-input" value="1" checked&gt;
            &lt;label class="form-check-label" for="customInlineCheck1"&gt;category 1 &lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Form Check --&gt;

          &lt;!-- Form Check --&gt;
          &lt;div class="form-check form-check-inline"&gt;
            &lt;input type="checkbox" id="customInlineCheck2" class="form-check-input indeterminate-checkbox" value="2" checked&gt;
            &lt;label class="form-check-label" for="customInlineCheck2"&gt;category 2 &lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Form Check --&gt;

          &lt;!-- Form Check --&gt;
          &lt;div class="form-check form-check-inline"&gt;
            &lt;input type="checkbox" id="customInlineCheck3" class="form-check-input" value="3" checked&gt;
            &lt;label class="form-check-label" for="customInlineCheck3"&gt;category 3 &lt;/label&gt;
          &lt;/div&gt;
          &lt;!-- End Form Check --&gt;

          &lt;div id="js-fullcalendar-with-filters" class="fullcalendar-custom"&gt;&lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              Nue.components.NueFullCalendar.init('#js-fullcalendar-with-filters', {
                events: [
                  {
                    &quot;title&quot;: &quot;English Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-03T01:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-03T02:30:00&quot;,
                    category_id: 1
                  },
                  {
                    &quot;title&quot;: &quot;Spanish Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-03T04:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-03T05:30:00&quot;,
                    category_id: 3
                  },
                  {
                    &quot;title&quot;: &quot;Javascript Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-14T01:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-16T02:30:00&quot;,
                    category_id: 2
                  },
                  {
                    &quot;title&quot;: &quot;PHP Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-06T04:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-09T05:30:00&quot;,
                    category_id: 1
                  }
                ],
                initialDate: &quot;2020-09-10&quot;,
                headerToolbar: {
                  left: &quot;prev,next today&quot;,
                  center: &quot;title&quot;,
                  right: &quot;&quot;
                },
                editable: true,
              })

              const filterCheckboxExample = new NueFullcalendarFilter(Nue.components.NueFullCalendar.getItem('js-fullcalendar-with-filters'))

              filterCheckboxExample.addFilter('byCategory', function (event) {
                const selectedCategories = $('[data-filter] input:checked')
                if (!selectedCategories.length) return false
                let show = false

                selectedCategories.each(key =&gt; {
                  if (event.extendedProps.category_id == $($(selectedCategories)[key]).val()) {
                    show = true
                    return false
                  }
                })

                return show
              })

              $('[data-filter]').on('change', function () {
                filterCheckboxExample.filter()
              })

              filterCheckboxExample.filter()
            })();
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="header-with-select" class="nue-docs-heading">
    Header with Tom Select <a class="anchorjs-link" href="#header-with-tom-select" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div id="js-fullcalendar-tom-select" class="fullcalendar-custom"></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div id=&quot;js-fullcalendar-tom-select&quot; class=&quot;fullcalendar-custom&quot;&gt;&lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              Nue.components.NueFullCalendar.init('#js-fullcalendar-tom-select', {
                initialDate: &quot;2020-09-10&quot;,
                headerToolbar: {
                  left: &quot;prev,next today&quot;,
                  center: &quot;title&quot;,
                  right: &quot;&quot;
                },
                editable: true,
                events: [
                  {
                    &quot;title&quot;: &quot;English Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-03T01:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-03T02:30:00&quot;
                  },
                  {
                    &quot;title&quot;: &quot;Spanish Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-03T04:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-03T05:30:00&quot;
                  },
                  {
                    &quot;title&quot;: &quot;Javascript Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-14T01:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-16T02:30:00&quot;
                  },
                  {
                    &quot;title&quot;: &quot;PHP Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-06T04:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-09T05:30:00&quot;
                  }
                ]
              })


              // APPEND SELECT CONSTROL IN TOOLBAR TO CHANGE CALENDAR VIEW
              // =======================================================
              const $select = document.createElement('div')
              $select.innerHTML = &quot;&lt;select id=\&quot;changeView\&quot;&gt;&quot; +
                  &quot;&lt;option value='dayGridMonth'&gt;Month&lt;/option&gt;&quot; +
                  &quot;&lt;option value='dayGridWeek'&gt;Week&lt;/option&gt;&quot; +
                  &quot;&lt;option value='dayGridDay'&gt;Day&lt;/option&gt;&quot; +
                  &quot;&lt;/select&gt;&quot;

              document.querySelector('#js-fullcalendar-tom-select .fc-toolbar-chunk:last-child').appendChild($select)

              const fullcalendarWithSelect = Nue.components.NueFullCalendar.getItem('js-fullcalendar-tom-select')

              // INITIALIZATION OF SELECT
              // =======================================================
              Nue.components.NueSelect.init('#changeView', {
                hideSearch: true
              })

              const selectInstance = Nue.components.NueSelect.getItem('changeView')

              selectInstance.on('change', (val) =&gt; {
                fullcalendarWithSelect.changeView(val)
              })
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="time-grid" class="nue-docs-heading">
    Time Grid <a class="anchorjs-link" href="#time-grid" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div id="js-fullcalendar-custom-render" class="fullcalendar-custom"></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div id=&quot;js-fullcalendar-custom-render&quot; class=&quot;fullcalendar-custom&quot;&gt;&lt;/div&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
          (function () {
            const $eventTimeGridModal = document.querySelector('#eventTimeGridModal');
            const eventContent = function(data) {
              return `
                &lt;div class=&quot;d-flex fc-custom-event align-items-center p-2&quot;&gt;
                  &lt;span class=&quot;icon icon-primary me-3&quot;&gt;
                    &lt;i class=&quot;${data.event._def.extendedProps.icon}&quot;&gt;&lt;/i&gt;
                  &lt;/span&gt;

                  &lt;div class=&quot;flex-grow-1&quot;&gt;
                    &lt;h4 class=&quot;mb-1&quot;&gt;${data.event.title}&lt;/h4&gt;
                    &lt;span class=&quot;text-body fw-semi-bold&quot;&gt;${data.timeText}&lt;/span&gt;
                  &lt;/div&gt;

                  &lt;div class=&quot;avatar-group avatar-group-sm ms-auto&quot;&gt;
                    &lt;span class=&quot;avatar avatar-circle&quot;&gt;
                      &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg&quot; alt=&quot;...&quot;&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;avatar avatar-dark avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;A&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;avatar avatar-circle&quot;&gt;
                      &lt;img class=&quot;avatar-img&quot; src=&quot;https://cdn.btekno.id/templates/nue/img/160x160/img3.jpg&quot; alt=&quot;...&quot;&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;avatar avatar-primary avatar-circle&quot;&gt;
                      &lt;span class=&quot;avatar-initials&quot;&gt;2+&lt;/span&gt;
                    &lt;/span&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              `;
            };

            Nue.components.NueFullCalendar.init('#js-fullcalendar-custom-render', {
              events: [
                {
                  &quot;title&quot;: &quot;SOLID in JavaScript Lesson&quot;,
                  &quot;start&quot;: &quot;2020-09-03T07:00:00&quot;,
                  &quot;end&quot;: &quot;2020-09-03T08:30:00&quot;,
                  icon: &quot;bi-tv&quot;
                },
                {
                  &quot;title&quot;: &quot;Vue Patterns&quot;,
                  &quot;start&quot;: &quot;2020-09-03T11:00:00&quot;,
                  &quot;end&quot;: &quot;2020-09-03T12:30:00&quot;,
                  icon: &quot;bi-tv&quot;
                },
              ],
              initialDate: &quot;2020-09-03&quot;,
              initialView: &quot;timeGrid&quot;,
              editable: true,
              eventClick: function () {
                $eventTimeGridModal.show();
              },
              eventContent: function (evt) {
                return {
                  html: eventContent(evt),
                }
              },
            });
          })();
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <h2 id="custom-header" class="nue-docs-heading">
    Custom Header <a class="anchorjs-link" href="#custom-header" aria-label="Anchor" data-anchorjs-icon="#"></a>
  </h2>

  <x-nue::docs::example i="{{ ++$i }}">
    <x-slot:preview>
      <div class="row align-items-sm-center mb-4">
        <div class="col mb-2 mb-sm-0 me-2">
          <div class="d-sm-flex align-items-sm-center">
            <button type="button" class="btn btn-white me-3" data-bs-toggle="tooltip" data-placement="top" title="" data-fc-today>Today </button>
            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary btn-no-focus rounded-circle me-1" data-fc-prev-month data-bs-toggle="tooltip" data-placement="top" title="Previous month">
              <i class="bi bi-chevron-left"></i>
            </button>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary btn-no-focus rounded-circle ms-1" data-fc-next-month data-bs-toggle="tooltip" data-placement="top" title="Next month">
              <i class="bi bi-chevron-right"></i>
            </button>

            <div class="ms-3">
              <h4 class="h3 mb-0" data-fc-title></h4>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <div class="tom-select-custom">
            <select id="customHeaderSelect" class="form-select" size="1" style="opacity: 0;" data-fc-grid-view data-nue-tom-select-options='{
                      "hideSearch": true,
                      "width": "10rem"
                    }'>
              <option value="dayGridMonth">Month</option>
              <option value="dayGridWeek">Week</option>
              <option value="dayGridDay">Day</option>
            </select>
          </div>
        </div>
      </div>

      <div id="js-fullcalendar-custom-header" class="fullcalendar-custom"></div>
    </x-slot:preview>
    <x-slot:code>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;div class="row align-items-sm-center mb-4"&gt;
            &lt;div class="col mb-2 mb-sm-0 me-2"&gt;
              &lt;div class="d-sm-flex align-items-sm-center"&gt;
                &lt;button type="button" class="btn btn-white me-3" data-bs-toggle="tooltip" data-placement="top" title="" data-fc-today&gt;Today &lt;/button&gt;
                &lt;button type="button" class="btn btn-icon btn-sm btn-ghost-secondary btn-no-focus rounded-circle me-1" data-fc-prev-month data-bs-toggle="tooltip" data-placement="top" title="Previous month"&gt;
                  &lt;i class="bi bi-chevron-left"&gt;&lt;/i&gt;
                &lt;/button&gt;

                &lt;button type="button" class="btn btn-icon btn-sm btn-ghost-secondary btn-no-focus rounded-circle ms-1" data-fc-next-month data-bs-toggle="tooltip" data-placement="top" title="Next month"&gt;
                  &lt;i class="bi bi-chevron-right"&gt;&lt;/i&gt;
                &lt;/button&gt;

                &lt;div class="ms-3"&gt;
                  &lt;h4 class="h3 mb-0" data-fc-title&gt;&lt;/h4&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;

            &lt;div class="col-auto"&gt;
              &lt;!-- Select --&gt;
              &lt;div class="tom-select-custom"&gt;
                &lt;select id="customHeaderSelect" class="form-select" size="1" style="opacity: 0;"
                      data-fc-grid-view data-nue-tom-select-options='{
                          "hideSearch": true,
                          "width": "10rem"
                        }'&gt;
                  &lt;option value="dayGridMonth"&gt;Month&lt;/option&gt;
                  &lt;option value="dayGridWeek"&gt;Week&lt;/option&gt;
                  &lt;option value="dayGridDay"&gt;Day&lt;/option&gt;
                &lt;/select&gt;
              &lt;/div&gt;
              &lt;!-- End Select --&gt;
            &lt;/div&gt;
            &lt;!-- End Col --&gt;
          &lt;/div&gt;
          &lt;!-- End Row --&gt;

          &lt;!-- FullCalendar --&gt;
          &lt;div id=&quot;js-fullcalendar-custom-header&quot; class=&quot;fullcalendar-custom&quot;&gt;&lt;/div&gt;
          &lt;!-- End FullCalendar --&gt;
        </code>
      </pre>
    </x-slot:code>
    <x-slot:js>
      <pre>
        <code class="language-markup" data-lang="html">
          &lt;script&gt;
            (function () {
              const prevMonthBtn = document.querySelector('[data-fc-prev-month]')
              const nextMonthBtn = document.querySelector('[data-fc-next-month]')
              const todayBtn = document.querySelector('[data-fc-today]')
              const dateTitle = document.querySelector('[data-fc-title]')
              let gridViewSelect = document.querySelector('[data-fc-grid-view]')

              Nue.components.NueFullCalendar.init('#js-fullcalendar-custom-header', {
                initialDate: &quot;2020-09-10&quot;,
                headerToolbar: false,
                editable: true,
                datesSet(dateSet) {
                  dateTitle.textContent = dateSet.view.title
                },
                events: [
                  {
                    &quot;title&quot;: &quot;English Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-03T01:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-03T02:30:00&quot;
                  },
                  {
                    &quot;title&quot;: &quot;Spanish Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-03T04:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-03T05:30:00&quot;
                  },
                  {
                    &quot;title&quot;: &quot;Javascript Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-14T01:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-16T02:30:00&quot;
                  },
                  {
                    &quot;title&quot;: &quot;PHP Lesson&quot;,
                    &quot;start&quot;: &quot;2020-09-06T04:00:00&quot;,
                    &quot;end&quot;: &quot;2020-09-09T05:30:00&quot;
                  }
                ]
              })
              const fullcalendarCustomHeader = Nue.components.NueFullCalendar.getItem('js-fullcalendar-custom-header')

              Nue.components.NueSelect.init(gridViewSelect)
              gridViewSelect = Nue.components.NueSelect.getItem('customHeaderSelect')

              prevMonthBtn.addEventListener('click', function () {
                fullcalendarCustomHeader.prev()
                const tooltip = document.querySelector('.tooltip')
                if (tooltip) {
                  tooltip.remove()
                }
              })

              nextMonthBtn.addEventListener('click', function () {
                fullcalendarCustomHeader.next()
                const tooltip = document.querySelector('.tooltip')
                if (tooltip) {
                  tooltip.remove()
                }
              })

              todayBtn.addEventListener('click', function () {
                fullcalendarCustomHeader.today()
              })

              gridViewSelect.on('change', (val) =&gt; {
                fullcalendarCustomHeader.changeView(val)
              })

              todayBtn.setAttribute('title', new Date().toDateString())
            })()
          &lt;/script&gt;
        </code>
      </pre>
    </x-slot:js>
  </x-nue::docs::example>

  <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="mb-4">
            <input type="text" id="eventTitle" class="form-control form-control-lg form-control-flush" placeholder="Add title and time" aria-label="Add title and time">
          </div>

          <div class="d-flex mb-4">
            <i class="bi-calendar-week nav-icon mt-2 me-2"></i>

            <div class="flex-grow-1">
              <label for="eventDateRangeLabel" class="visually-hidden">Date </label>

              <input type="text" id="eventDateRangeLabel" class="js-flatpickr form-control flatpickr-custom mb-2" placeholder="Select dates" data-nue-flatpickr-options='{
                       "dateFormat": "m/d/Y",
                       "mode": "range",
                       "minDate": "12/01/2020"
                     }'>

              <label for="eventRepeatLabel" class="text-body me-2 mb-0">Repeat: </label>

              <div class="tom-select-custom">
                <select id="eventRepeatLabel" class="js-select form-select" data-nue-tom-select-options='{
                        "hideSearch": true,
                        "placeholder": "Add guestse"
                      }'>
                  <option value="everyday" selected>Everyday</option>
                  <option value="weekdays">Weekdays</option>
                  <option value="never">Never</option>
                </select>
              </div>
            </div>
          </div>

          <div class="d-flex mb-4">
            <i class="bi-people nav-icon mt-2 me-2"></i>

            <div class="flex-grow-1">
              <label for="eventGuestsLabel" class="visually-hidden">Add guests </label>

              <div class="tom-select-custom">
                <select id="eventGuestsLabel" class="form-select" multiple data-nue-tom-select-options='{
                      "placeholder": "Add guestse"
                    }'></select>
              </div>
            </div>
          </div>

          <div class="d-flex mb-4">
            <i class="bi-geo-alt nav-icon mt-2 me-2"></i>
            <div class="flex-grow-1">
              <label for="eventLocationLabel" class="visually-hidden">Add location </label>
              <input type="text" class="form-control form-control-light form-control-borderless" id="eventLocationLabel" placeholder="Add location" aria-label="Add location">
            </div>
          </div>

          <div class="d-flex mb-4">
            <i class="bi-text-left nav-icon mt-2 me-2"></i>
            <div class="flex-grow-1">
              <label for="eventDescriptionLabel" class="visually-hidden">Add description </label>
              <textarea id="eventDescriptionLabel" class="form-control form-control-light form-control-borderless" placeholder="Add description"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <a class="d-flex align-items-center" href="../user-profile.html">
                <div class="avatar avatar-xs avatar-circle me-3">
                  <img class="avatar-img" src="https://cdn.btekno.id/templates/nue/img/160x160/img10.jpg" alt="...">
                </div>
                <div class="flex-grow-1">
                  <span class="d-block fs6 text-body">Assignee:</span>
                  <span class="h5 text-inherit">Amanda Harvey</span>
                </div>
              </a>
            </div>

            <div class="col-auto">
              <label for="eventColorLabel" class="visually-hidden">Event color </label>

              <div class="tom-select-custom">
                <select id="eventColorLabel" class="js-select form-select" data-nue-tom-select-options='{
                      "hideSearch": true,
                      "width": "10rem"
                    }'>
                  <option value="rgba(55,125,255,.1)" selected data-option-template='<div><span class="legend-indicator bg-primary"></span>Primary</div>'>Primary </option>
                  <option value="rgba(0,201,167,.1)" data-option-template='<div><span class="legend-indicator bg-success"></span>Green</div>'>Green </option>
                  <option value="rgba(237,76,120,.1)" data-option-template='<div><span class="legend-indicator bg-danger"></span>Red</div>'>Red </option>
                  <option value="rgba(245,202,153,.1)" data-option-template='<div><span class="legend-indicator bg-warning"></span>Yellow</div>'>Yellow </option>
                  <option value="rgba(0,201,219,1)" data-option-template='<div><span class="legend-indicator bg-info"></span>Cyan</div>'>Cyan </option>
                  <option value="rgba(19,33,68,1)" data-option-template='<div><span class="legend-indicator bg-dark"></span>Navy</div>'>Navy </option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" id="discardFormt" class="btn btn-white" data-dismiss="modal">Discard </button>
          <button type="button" id="processEvent" class="btn btn-primary">Create event </button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="eventTimeGridModal" tabindex="-1" role="dialog" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eventTimeGridModalLabel">Event Modal</h5>
          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
            <i class="bi-x-lg" aria-hidden="true"></i>
          </button>
        </div>

        <div class="modal-body"></div>

        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal">Cancel </button>
          <button type="button" class="btn btn-primary">Save </button>
        </div>
      </div>
    </div>
  </div>
@endsection
