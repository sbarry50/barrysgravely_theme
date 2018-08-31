<section class="about-us">
    <div class="bg-grey-lightest lg:mb-8 py-4 lg:py-10 xxl:py-16">
        <div class="lg:container lg:flex items-center xxl:justify-between xxl:mx-auto xxl:max-w-1200 xxxl:max-w-1440">
            <figure class="stack lg:w-3/5 xxl:w-1/2 xxl:mr-16">
                {!! App\get_acf_image($about_image_left, 'full') !!}
                {!! App\get_acf_image($about_image_right, 'full') !!}        
                {!! App\get_acf_image($about_image_center, 'full') !!}
            </figure>
            <div class="px-6 lg:w-1/3 xxl:w-1/2">
                <h1>{!! $about_title !!}</h1>
                <div class="text-grey-darker">{!! $about_description !!}</div>
            </div>
        </div>
    </div>
    <div class="about-us-cards">
        <div class="about-us-cards-angled angle--both-left-right pt-16 pb-10 sm:pt-18 sm:pb-12 lg:pt-24 lg:pb-16 xl:pt-28 xl:pb-18 xxl:pt-32 xxl:pb-20 xxxl:pt-40 xxxl:pb-24">
            <div class="about-us-cards--container container md:flex justify-between">
                <div class="card">
                    <div class="card-img">{!! App\get_acf_image($sales_image, 'full') !!}</div>
                    <h2 class="card-title">{!! get_svg_icon('chainsaw') !!}{!! $sales_title !!}</h2>
                    <div class="card-description">{!! $sales_description !!}</div>
                </div>
                <div class="card">
                    <div class="card-img">{!! App\get_acf_image($service_image, 'full') !!}</div>
                    <h2 class="card-title">{!! get_svg_icon('wrench') !!}{!! $service_title !!}</h2>
                    <div class="card-description">{!! $service_description !!}</div>
                </div>
                <div class="card">
                    <div class="card-img">{!! App\get_acf_image($parts_image, 'full') !!}</div>
                    <h2 class="card-title">{!! get_svg_icon('gears') !!}{!! $parts_title !!}</h2>
                    <div class="card-description">{!! $parts_description !!}</div>
                </div>
            </div>
        </div>
    </div>
</section>