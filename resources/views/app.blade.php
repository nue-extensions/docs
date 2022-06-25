<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') :: {{ config('nue.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ config('nue.brand.favicon') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.btekno.id/templates/nue/css/vendor.min.css">
    <link rel="stylesheet" href="https://cdn.btekno.id/templates/nue/css/nue.min.css">
    <link rel="preload prefetch" href="https://cdn.btekno.id/templates/nue/css/nue.min.css" data-nue-appearance="default" as="style">
    <link rel="preload prefetch" href="https://cdn.btekno.id/templates/nue/css/docs.css" data-nue-appearance="default" as="style">
    <link rel="preload prefetch" href="https://cdn.btekno.id/templates/nue/css/nue-dark.min.css" data-nue-appearance="dark" as="style">

    <style data-nue-appearance-onload-styles>
        *{transition:unset!important}
        body{opacity:0}
    </style>

    <script>
        window.nue_config = {
            "themeAppearance":{
                "layoutSkin": "default"
            }
        }
    </script>

    @yield('css')

</head>

<body class="navbar-sidebar-aside-lg">
	<script src="https://cdn.btekno.id/templates/nue/js/nue.theme-appearance.js"></script>
	
	@include('nue-docs::partials.header')

	<main id="content" role="main">
		
		@include('nue-docs::partials.sidebar')

		<div class="navbar-sidebar-aside-content content-space-1 content-space-md-2 px-lg-5 px-xl-10">
			@yield('content')
		</div>
	</main>

	<a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-nue-go-to-options='{
		"offsetTop": 700,
		"position": {
			"init": {"right": "2rem"},
			"show": {"bottom": "2rem"},
			"hide": {"bottom": "-2rem"}
		}
	}'>
		<i class="bi-chevron-up"></i>
	</a>

	<script src="https://cdn.btekno.id/templates/nue/js/vendor.min.js"></script>
	<script src="https://cdn.btekno.id/templates/nue/js/nue.min.js?v=5"></script>
	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

	<script>
		(function() {
			// INITIALIZATION OF HEADER
			// =======================================================
			new NueHeader('#header').init()


			// INITIALIZATION OF NAV SCROLLER
			// =======================================================
			new NueNavScroller('.js-nav-scroller', {
				delay: 400,
				offset: 200
			})


			// INITIALIZATION OF LISTJS COMPONENT
			// =======================================================
			Nue.components.NueList.init('#docsSearch');
			const docsSearch = Nue.components.NueList.getItem('docsSearch');


			// GET JSON FILE RESULTS
			// =======================================================
			fetch('{{ asset('docs-search.json') }}')
				.then(response => response.json())
				.then(data => {
				docsSearch.add(data)
			})


			// INITIALIZATION OF GO TO
			// =======================================================
			new NueGoTo('.js-go-to')

			@yield('script')
		})()
	</script>

	@yield('js')
</body>
</html>