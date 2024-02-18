@extends('layouts.app')

@section('content')
    @include('partials.secondary-header')

    <section class="py-16">
        <div class="container mx-auto">
            <div class="text-center space-y-4">
                <h2 class="text-secondary font-bold text-5xl uppercase">Our Service</h2>
                <p class="text-lg text-neutral-medium ">At AIR CAT LOGISTICS SDN BHD we provide a complete logistic solution that focuses on
                    <br>RELIABILITY and also CUSTOMER EXPERIENCE.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-8 mt-8">
                @foreach($services as $service)
                    @if($loop->iteration % 2 == 1)
                        <div>
                            <img src="{{ $service->getFirstMediaUrl() }}" alt="" class="w-full object-cover">
                        </div>
                        <div class="p-8" style="background-color: {{ $service->color }}">
                            <div class="flex flex-col items-start justify-end gap-6 h-full">
                                <h2 class="text-4xl font-extrabold text-neutral-light uppercase">{{ $service->name }}</h2>
                                <p class="text-lg text-neutral-light">{{ $service->short_desc }}</p>
                                <div class="flex items-center justify-end w-full mt-32">
                                    <a href="{{ route('service-detail', $service) }}" class="text-neutral-light text-lg font-medium bg-[rgba(0,0,0,0.3)] py-4 px-10">See More</a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="p-8" style="background-color: {{ $service->color }}">
                            <div class="flex flex-col items-start justify-end gap-6 h-full">
                                <h2 class="text-4xl font-extrabold text-neutral-light uppercase">{{ $service->name }}</h2>
                                <p class="text-lg text-neutral-light">{{ $service->short_desc }}</p>
                                <div class="flex items-center justify-end w-full mt-32">
                                    <a href="{{ route('service-detail', $service) }}" class="text-neutral-light text-lg font-medium bg-[rgba(0,0,0,0.3)] py-4 px-10">See More</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="{{ $service->getFirstMediaUrl() }}" alt="" class="w-full object-cover">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
