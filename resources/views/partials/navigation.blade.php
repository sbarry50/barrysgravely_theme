<nav class="primary-nav container lg:w-19/20 xl:w-9/10 xxl:max-w-1200 xxxl:max-w-1440 items-center md:flex animated hidden">
    @if (has_nav_menu('top_left_nav'))
        {!! wp_nav_menu(['theme_location' => 'top_left_nav', 'menu_class' => 'nav nav-left']) !!}
    @endif
    <a class="logo mx-4 lg:mx-8 hidden md:block" href="{{ home_url('/') }}">{!! get_svg_icon('logo') !!}</a>
    @if (has_nav_menu('top_right_nav'))
        {!! wp_nav_menu(['theme_location' => 'top_right_nav', 'menu_class' => 'nav nav-right']) !!}
    @endif
</nav>