<section class="py-16">
    <div class="container mx-auto">
        <div class="text-center space-y-5">
            <h5 class="text-5xl font-light text-neutral-dark">What Do We Offer?</h5>
            <p class="text-neutral-medium">In AIR CAT LOGISTICS SDN BHD we offer these logistic services</p>
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-8">
            @foreach($services as $service)
                <a href="{{ route('service-detail', $service) }}" class="w-full rounded-2xl overflow-hidden shadow-sm relative group">
                    <div class="w-full group-hover:scale-110 transition-transform">
                        <img src="{{ $service->getFirstMediaUrl() }}" alt="" class="w-full bg-cover">
                    </div>
                    <span class="absolute bottom-8 w-full text-center group-hover:scale-110 transition-transform">
                        <h6 class="font-semibold text-lg text-neutral-light uppercase">{{ $service->name }}</h6>
                    </span>
                </a>
            @endforeach
        </div>
        <div class="mt-8 flex items-center justify-center">
            <a href="{{ route('services') }}" class="bg-primary py-4 px-16 font-medium text-neutral-light text-lg">See More</a>
        </div>
    </div>
</section>
