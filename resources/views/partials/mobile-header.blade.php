<div class="mobile-header flex items-center md:hidden">
    <div class="flex-1"></div>
    <h1 class="site-title mb-0">
        <a class="logo" href="{{ home_url('/') }}">
            {!! get_svg_icon('logo') !!}
            <span class="hidden">{{ get_bloginfo('name') }}</span>
        </a>
    </h1>
    <button class="hamburger hamburger--vortex flex-1" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner text-grey-darkest"></span>
        </span>
    </button>
</div>