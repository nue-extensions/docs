<header id="header" class="navbar navbar-expand navbar-end navbar-light navbar-sticky-lg-top bg-white" nueheader="true">
    <div class="container-fluid">
        <nav class="navbar-nav-wrap">
            <div class="row flex-grow-1">
                <div class="docs-navbar-sidebar-container d-flex align-items-center mb-2 mb-lg-0">
                    <a class="navbar-brand me-0" href="/" aria-label="">
                        <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo" data-nue-theme-appearance="default">
                        <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.dark') }}" alt="Logo" data-nue-theme-appearance="dark">
                    </a>
                    <a href="/" class="h2 mb-0">Nue Package</a>
                </div>

                <div class="col-md px-lg-0">
                    <div class="d-flex justify-content-between align-items-center px-lg-5 px-xl-10">
                        <div class="d-none d-md-block">
                            <form id="docsSearch" class="position-relative" data-nue-list-options='{
                                    "searchMenu": true,
                                    "keyboard": true,
                                    "item": "searchTemplate",
                                    "valueNames": ["component", "category", {"name": "link", "attr": "href"}],
                                    "empty": "#searchNoResults"
                                }'>
                                <div class="input-group input-group-merge navbar-input-group">
                                    <div class="input-group-prepend input-group-text">
                                        <i class="bi-search"></i>
                                    </div>

                                    <input type="search" class="search form-control form-control-sm" placeholder="Search in docs" aria-label="Search in docs">

                                    <a class="input-group-append input-group-text" href="javascript:;">
                                        <i id="clearSearchResultsIcon" class="bi-x" style="display: none;"></i>
                                    </a>
                                </div>

                                <div class="list dropdown-menu navbar-dropdown-menu-borderless w-100 overflow-auto" style="max-height: 16rem; display: none;"><div class="dropdown-item">
                                    <a class="d-block link" href="/">
                                        <span class="category d-block fw-normal text-muted mb-1">Getting Started</span>
                                        <span class="component text-dark">Introduction</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./gulp.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Getting Started</span>
                                        <span class="component text-dark">Gulp</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./customization.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Getting Started</span>
                                        <span class="component text-dark">Customization</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./credits.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Getting Started</span>
                                        <span class="component text-dark">Credits</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./changelog.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Getting Started</span>
                                        <span class="component text-dark">Changelog</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./bootstrap-icons.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Design &amp; Graphics</span>
                                        <span class="component text-dark">Bootstrap Icons</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./illustrations.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Design &amp; Graphics</span>
                                        <span class="component text-dark">Illustrations</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./accordion.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Accordion</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./alerts.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Alerts</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./avatars.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Avatars</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./badge.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Badge</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./breadcrumb.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Breadcrumb</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./buttons.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Buttons</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./button-group.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Button group</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./cards.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Cards</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./collapse.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Collapse</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./column-divider.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Column divider</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./devices.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Devices</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./divider.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Divider</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./dropdowns.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Dropdowns</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./icons.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Icons</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./list-group.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">List Group</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./lists.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Lists</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./legend-indicator.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Legend Indicator</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./modal.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Modal</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./offcanvas.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Offcanvas</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./page-header.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Page Header</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./pagination.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Pagination</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./popovers.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Popovers</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./progress.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Progress</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./profile.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Profile</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./shapes.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Shapes</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./sliding-img.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Sliding Image</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./spinners.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Spinners</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./steps.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Steps</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./tab.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Tab</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./toasts.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Toasts</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./tooltips.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Tooltips</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./typography.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Components</span>
                                        <span class="component text-dark">Typography</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./navbar.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Navbars</span>
                                        <span class="component text-dark">Navbar</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./navs.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Navbars</span>
                                        <span class="component text-dark">Navs</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./mega-menu.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Navbars</span>
                                        <span class="component text-dark">Mega Menu</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./navbar-vertical-aside.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Navbars</span>
                                        <span class="component text-dark">Navbar Vertical Aside</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./scrollspy.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Navbars</span>
                                        <span class="component text-dark">Scrollspy</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./tables.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Tables</span>
                                        <span class="component text-dark">Tables</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./datatables.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Tables</span>
                                        <span class="component text-dark">Datatables</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./sticky-header.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Tables</span>
                                        <span class="component text-dark">Sticky Header</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./basic-forms.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Basic forms</span>
                                        <span class="component text-dark">Basic forms</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./checks-and-switches.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Basic forms</span>
                                        <span class="component text-dark">Checks and switches</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./input-group.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Basic forms</span>
                                        <span class="component text-dark">Input group</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./backgrounds.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Utilities</span>
                                        <span class="component text-dark">Backgrounds</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./borders.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Utilities</span>
                                        <span class="component text-dark">Borders</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./colors.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Utilities</span>
                                        <span class="component text-dark">Colors</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./links.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Utilities</span>
                                        <span class="component text-dark">Links</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./position.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Utilities</span>
                                        <span class="component text-dark">Position</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./rotations.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Utilities</span>
                                        <span class="component text-dark">Rotations</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./shadows.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Utilities</span>
                                        <span class="component text-dark">Shadows</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./sizing.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Utilities</span>
                                        <span class="component text-dark">Sizing</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./spacing.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Utilities</span>
                                        <span class="component text-dark">Spacing</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./z-index.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Utilities</span>
                                        <span class="component text-dark">Z-index</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./opacity.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Utilities</span>
                                        <span class="component text-dark">Opacity</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./select.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Advanced select</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./datepicker.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Datepicker</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./daterangepicker.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Date Range Picker</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./calendar.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Calendar (Fullcalendar)</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./file-attachments.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">File attachments</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./dropzone.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Drag’ n’ drop file uploads</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./quill.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">WYSIWYG Editor</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./quantity-counter.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Quantity counter</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./copy-to-clipboard.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Copy to Clipboard</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./input-mask.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Input mask</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./step-forms.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Step forms (Wizards)</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./step-forms.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Wizards</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./add-field.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Add field</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./toggle-password.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Toggle password</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./count-characters.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Count characters</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./form-search.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Form Search</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./toggle-switch.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Toggle switch</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./google-recaptcha.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Advanced forms</span>
                                        <span class="component text-dark">Google reCAPTCHA</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./chartjs.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Others</span>
                                        <span class="component text-dark">Chart.js</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./counter.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Others</span>
                                        <span class="component text-dark">Counter</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./circles.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Others</span>
                                        <span class="component text-dark">Circles.js (Pie Chart)</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./fslightbox.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Others</span>
                                        <span class="component text-dark">Fullscreen Lightbox</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./maps-leaflet.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Others</span>
                                        <span class="component text-dark">Leaflet</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./maps-jsvectormap.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Others</span>
                                        <span class="component text-dark">JSVectorMap</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./sortablejs.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Others</span>
                                        <span class="component text-dark">SortableJS</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./sticky-block.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Others</span>
                                        <span class="component text-dark">Sticky block</span>
                                    </a>
                                </div><div class="dropdown-item">
                                    <a class="d-block link" href="./go-to.html">
                                        <span class="category d-block fw-normal text-muted mb-1">Others</span>
                                        <span class="component text-dark">Go To</span>
                                    </a>
                                </div></div>

                                <div id="searchNoResults" style="display: none;">
                                    <div class="text-center p-4">
                                        <img class="mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations/oc-error.svg" alt="" data-nue-theme-appearance="default" style="width: 7rem;">
                                        <img class="mb-3" src="https://cdn.btekno.id/templates/nue/svg/illustrations-light/oc-error.svg" alt="" data-nue-theme-appearance="dark" style="width: 7rem;">
                                        <p class="mb-0">No Results</p>
                                    </div>
                                </div>
                            </form>

                            <div class="d-none">
                                <div id="searchTemplate" class="dropdown-item">
                                    <a class="d-block link" href="#">
                                        <span class="category d-block fw-normal text-muted mb-1"></span>
                                        <span class="component text-dark"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav d-none p-0">
                            <li class="nav-item">
                                <a class="btn btn-primary btn-sm" href="/">
                                    <i class="bi-eye me-1"></i> Preview Demo
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
