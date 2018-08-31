<section class="manufacturers mb-20">
    <div class="container">
        @foreach($manufacturers as $manufacturer)
            <div class="manufacturer {!! $manufacturer['parity'] !!} mb-6 sm:mb-8 md:mb-10 xl:mb-12 xxl:mb-16 xxxl:mb-20">
                <div class="manufacturer--img-wrap">{!! $manufacturer['image'] !!}</div>
                <div class="manufacturer--description p-6 lg:p-8 xl:p-6 xxl:p-10 xxxl:p-12">
                    <div class="logo text-center mb-4 lg:mb-6 xxl:mb-8 xxxl:mb-10">{!! get_svg_icon($manufacturer['id']) !!}</div>
                    <div class="description mb-4 lg:mb-6 xxl:mb-8 xxxl:mb-10">{!! $manufacturer['content'] !!}</div>
                    <div class="text-center">
                        <a class="" href="{{ $manufacturer['url'] }}" target="_blank"><button class="btn btn-{!! $manufacturer['id'] !!} md:btn-sm xxl:btn-base xxxl:btn-xl">Products</button></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>