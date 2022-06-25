<nav class="js-nav-scroller navbar navbar-expand-lg navbar-sidebar navbar-vertical navbar-light bg-white border-end" data-nue-nav-scroller-options='{
    "type": "vertical",
    "target": ".navbar-nav .active",
    "offset": 80
}'>
    <button type="button" class="navbar-toggler btn btn-white d-grid w-100" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu">
        <span class="d-flex justify-content-between align-items-center">
            <span class="h3 mb-0">Nav menu</span>

            <span class="navbar-toggler-default">
                <i class="bi-list"></i>
            </span>

            <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
            </span>
        </span>
    </button>

    <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
        <div class="navbar-brand-wrapper border-end" style="height: auto;">
            <div class="d-flex align-items-center mb-3">
                <a class="navbar-brand" href="{{ route('nue.docs.index') }}" aria-label="">
                    <img class="navbar-brand-logo" src="{{ config('nue.brand.logo.default.light') }}" alt="Logo">
                </a>
                <a class="navbar-brand-badge h2 mb-0" href="/">
                    {{ config('nue.name') }}
                </a>
            </div>

            <ul class="nav nav-segment nav-fill nav-justified">
                <li class="nav-item">
                    <a class="nav-link pe-0 {{ request()->segment(2) != 'html' ? 'active' : '' }}" href="{{ route('nue.docs.index') }}">
                        <b>Nue</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-0 {{ request()->segment(2) == 'html' ? 'active' : '' }}" href="{{ route('nue.components.index') }}">
                        <b>UI (HTML)</b>
                    </a>
                </li>
            </ul>
        </div>

        <div class="docs-navbar-sidebar-aside-body navbar-sidebar-aside-body">
            <ul id="navbarSettings" class="navbar-nav nav nav-vertical nav-tabs nav-tabs-borderless nav-sm">

                @if(request()->segment(2) != 'html')
                    @foreach(docs_nue() as $parent => $components)
                        @php($category = \Illuminate\Support\Str::slug($parent))
                        <li class="nav-item">
                            <span class="nav-subtitle">{{ $parent }}</span>
                        </li>
                        @foreach($components as $component)
                            @php($slug = \Illuminate\Support\Str::slug($component))
                            <li class="nav-item">
                                <a class="nav-link {{ request()->segment(4) == $slug ? 'active' : '' }}" 
                                    href="{{ route('nue.nue.show', [$category, $slug]) }}">
                                    {{ $component }}
                                </a>
                            </li>
                        @endforeach
                        <li class="nav-item my-2 my-lg-4"></li>
                    @endforeach

                @else
                    @foreach(docs_html() as $parent => $components)
                        @php($category = \Illuminate\Support\Str::slug($parent))
                        <li class="nav-item">
                            <span class="nav-subtitle">{{ $parent }}</span>
                        </li>
                        @foreach($components as $component)
                            @php($slug = \Illuminate\Support\Str::slug($component))
                            <li class="nav-item">
                                <a class="nav-link {{ request()->segment(4) == $slug ? 'active' : '' }}" 
                                    href="{{ route('nue.components.show', [$category, $slug]) }}">
                                    {{ $component }}
                                </a>
                            </li>
                        @endforeach
                        <li class="nav-item my-2 my-lg-4"></li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</nav>