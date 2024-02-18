<header class="w-full h-screen">
    <!-- Slider main container -->
    <div class="swiper h-full w-full">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper h-full w-full">
            <!-- Slides -->
            @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="h-full w-full bg-no-repeat bg-cover" style="background-image: url('{{ $slider->getFirstMediaUrl() }}')">
                        <div
                            class="container mx-auto h-full flex items-center justify-start"
                        >
                            <div class="w-1/2">
                                <h1 class="text-5xl text-neutral-light font-bold text-left leading-[3.5rem]">
                                    {{ $slider->heading }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
    </div>

</header>
