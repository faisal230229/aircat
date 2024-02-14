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
                <div>
                    <img src="{{ asset('assets/images/air-freight-service.png') }}" alt="" class="w-full object-cover">
                </div>
                <div class="bg-secondary p-8">
                    <div class="flex flex-col items-start justify-end gap-6 h-full">
                        <h2 class="text-4xl font-extrabold text-neutral-light">AIR FREIGHT</h2>
                        <p class="text-lg text-neutral-light">Experience the excellence of our air freight service, where your cargo is transported swiftly and securely, making us your global shipping partner.</p>
                        <div class="flex items-center justify-end w-full mt-32">
                            <a href="" class="text-neutral-light text-lg font-medium bg-[rgba(0,0,0,0.3)] py-4 px-10">See More</a>
                        </div>
                    </div>
                </div>
                <div class="bg-[rgba(0,32,96,1)] p-8">
                    <div class="flex flex-col items-start justify-end gap-6 h-full">
                        <h2 class="text-4xl font-extrabold text-neutral-light">OCEAN FREIGHT</h2>
                        <p class="text-lg text-neutral-light">Our Ship Freight Service ensures secure, timely, and cost-effective ocean cargo transportation, backed by a global network and expert management.</p>
                        <div class="flex items-center justify-end w-full mt-32">
                            <a href="" class="text-neutral-light text-lg font-medium bg-[rgba(0,0,0,0.3)] py-4 px-10">See More</a>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('assets/images/occean-freight-service.png') }}" alt="" class="w-full object-cover">
                </div>
                <div>
                    <img src="{{ asset('assets/images/warehousing-service.png') }}" alt="" class="w-full object-cover">
                </div>
                <div class="bg-[rgba(56,87,35,1)] p-8">
                    <div class="flex flex-col items-start justify-end gap-6 h-full">
                        <h2 class="text-4xl font-extrabold text-neutral-light">WAREHOUSING</h2>
                        <p class="text-lg text-neutral-light">Our Warehouse Services offer secure, efficient, and flexible storage solutions for your goods, ensuring their safety and accessibility when you need them.</p>
                        <div class="flex items-center justify-end w-full mt-32">
                            <a href="" class="text-neutral-light text-lg font-medium bg-[rgba(0,0,0,0.3)] py-4 px-10">See More</a>
                        </div>
                    </div>
                </div>
                <div class="bg-[rgba(153,0,0,1)] p-8">
                    <div class="flex flex-col items-start justify-end gap-6 h-full">
                        <h2 class="text-4xl font-extrabold text-neutral-light">TRANSPORTATION</h2>
                        <p class="text-lg text-neutral-light">Our fleet ensures efficient movement of goods, utilizing diverse modes and routes for timely, cost-effective deliveries. This critical link in supply chains streamlines product flow, meeting customer demands.</p>
                        <div class="flex items-center justify-end w-full mt-32">
                            <a href="" class="text-neutral-light text-lg font-medium bg-[rgba(0,0,0,0.3)] py-4 px-10">See More</a>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('assets/images/transportation-service.png') }}" alt="" class="w-full object-cover">
                </div>

            </div>
        </div>
    </section>
@endsection
