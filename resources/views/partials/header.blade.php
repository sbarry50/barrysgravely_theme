<header class="relative">
    @include('partials.top-bar')
    @include('partials.mobile-header')
    @include('partials.navigation')
    @if (is_front_page())
        @include('partials.hero')
    @endif
</header>
