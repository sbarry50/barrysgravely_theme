<section class="hero">
    <div class="hero-text z-20 relative text-center leading-tight lg:mb-4 xxl:mb-6 xxxl:mb-8">
        <h1 class="font-bold text-xl sm:text-2xl md:text-3xl lg:text-4xl xxl:text-5xl xxxl:text-6xl lg:mb-4 xl:mb-5 xxl:mb-6 xxxl:mb-8">{{ $hero_title }}</h2>
        <h2 class="font-normal text-base sm:text-lg md:text-xl lg:text-2xl xl:text-2xl xxl:text-3xl xxxl:text-4xl lg:mb-5 xl:mb-6 xxl:mb-7 xxxl:mb-9">{{ $hero_description }}</h2>
        <a href="#manufacturers"><button class="btn btn-gravely md:btn-sm xxl:btn-base xxxl:btn-xl mt-1 mx-auto">Products</button></a>
    </div>
    <div class="hero-image">{!! App\get_acf_image($hero_image, 'full', false, array('class' => 'rounded-none shadow-none')) !!}</div>
</section>