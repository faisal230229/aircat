@extends('layouts.app')


@section('content')
    @include('partials.secondary-header')

    <section class="py-16">
        <div class="container mx-auto flex">
            <article class="w-9/12">
                <h2 class="text-4xl text-secondary font-extrabold uppercase mb-12">{{ $service->name }} SERVICES</h2>
                {!! tiptap_converter()->asHTML($service->content) !!}
            </article>
            <aside class="w-3/12">
                <div>
                    <div>
                        <img src="{{ $service->getFirstMediaUrl() }}" alt="" class="w-full object-cover">
                    </div>
                    <div class="bg-[rgba(35,35,49,1)] py-10 px-8">
                        <p class="font-bold text-3xl text-center text-neutral-light">Contact us now</p>
                        <div class="py-8 space-y-6">
                            <div class="flex gap-2">
                                <div class="bg-primary w-10 h-10 rounded-full flex items-center justify-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_166_3504)">
                                            <path
                                                d="M3 3H21C21.2652 3 21.5196 3.10536 21.7071 3.29289C21.8946 3.48043 22 3.73478 22 4V20C22 20.2652 21.8946 20.5196 21.7071 20.7071C21.5196 20.8946 21.2652 21 21 21H3C2.73478 21 2.48043 20.8946 2.29289 20.7071C2.10536 20.5196 2 20.2652 2 20V4C2 3.73478 2.10536 3.48043 2.29289 3.29289C2.48043 3.10536 2.73478 3 3 3ZM20 7.238L12.072 14.338L4 7.216V19H20V7.238ZM4.511 5L12.061 11.662L19.502 5H4.511Z"
                                                fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_166_3504">
                                                <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-between items-start">
                                    <p class="text-sm text-neutral-light">Write to Us</p>
                                    <p class="text-neutral-light">enquiries@aircat.com.bn</p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <div class="bg-primary w-10 h-10 rounded-full flex items-center justify-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_166_3510)">
                                            <path
                                                d="M9.366 10.682C10.3043 12.3305 11.6695 13.6957 13.318 14.634L14.202 13.396C14.3442 13.1969 14.5543 13.0569 14.7928 13.0023C15.0313 12.9478 15.2814 12.9825 15.496 13.1C16.9103 13.8729 18.4722 14.3378 20.079 14.464C20.3298 14.4839 20.5638 14.5975 20.7345 14.7823C20.9052 14.9671 21 15.2094 21 15.461V19.923C21.0001 20.1706 20.9083 20.4094 20.7424 20.5932C20.5765 20.777 20.3483 20.8927 20.102 20.918C19.572 20.973 19.038 21 18.5 21C9.94 21 3 14.06 3 5.5C3 4.962 3.027 4.428 3.082 3.898C3.10725 3.6517 3.22298 3.42352 3.40679 3.25763C3.5906 3.09175 3.82941 2.99995 4.077 3H8.539C8.79056 2.99997 9.0329 3.09475 9.21768 3.26545C9.40247 3.43615 9.51613 3.67022 9.536 3.921C9.66222 5.52779 10.1271 7.08968 10.9 8.504C11.0175 8.71856 11.0522 8.96874 10.9977 9.2072C10.9431 9.44565 10.8031 9.65584 10.604 9.798L9.366 10.682ZM6.844 10.025L8.744 8.668C8.20478 7.50409 7.83535 6.26884 7.647 5H5.01C5.004 5.166 5.001 5.333 5.001 5.5C5 12.956 11.044 19 18.5 19C18.667 19 18.834 18.997 19 18.99V16.353C17.7312 16.1646 16.4959 15.7952 15.332 15.256L13.975 17.156C13.4287 16.9437 12.898 16.6931 12.387 16.406L12.329 16.373C10.3676 15.2567 8.74328 13.6324 7.627 11.671L7.594 11.613C7.30691 11.102 7.05628 10.5713 6.844 10.025Z"
                                                fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_166_3510">
                                                <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-between items-start">
                                    <p class="text-sm text-neutral-light">Call Us</p>
                                    <p class="text-neutral-light">(+673) 2231871</p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <div class="bg-primary !w-36 h-10 rounded-full flex items-center justify-center" >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_166_3516)">
                                            <path
                                                d="M12 23.728L5.636 17.364C4.37734 16.1053 3.52019 14.5017 3.17293 12.7558C2.82567 11.01 3.00391 9.20041 3.6851 7.55588C4.36629 5.91136 5.51984 4.50575 6.99988 3.51683C8.47992 2.5279 10.22 2.00006 12 2.00006C13.78 2.00006 15.5201 2.5279 17.0001 3.51683C18.4802 4.50575 19.6337 5.91136 20.3149 7.55588C20.9961 9.20041 21.1743 11.01 20.8271 12.7558C20.4798 14.5017 19.6227 16.1053 18.364 17.364L12 23.728ZM16.95 15.95C17.9289 14.971 18.5955 13.7237 18.8656 12.3659C19.1356 11.008 18.9969 9.60058 18.4671 8.32154C17.9373 7.0425 17.04 5.94929 15.8889 5.18015C14.7378 4.41101 13.3844 4.00049 12 4.00049C10.6156 4.00049 9.26222 4.41101 8.11109 5.18015C6.95996 5.94929 6.06275 7.0425 5.53292 8.32154C5.00308 9.60058 4.86442 11.008 5.13445 12.3659C5.40449 13.7237 6.07111 14.971 7.05 15.95L12 20.9L16.95 15.95ZM12 13C11.4696 13 10.9609 12.7893 10.5858 12.4142C10.2107 12.0391 10 11.5304 10 11C10 10.4696 10.2107 9.96084 10.5858 9.58577C10.9609 9.2107 11.4696 8.99998 12 8.99998C12.5304 8.99998 13.0391 9.2107 13.4142 9.58577C13.7893 9.96084 14 10.4696 14 11C14 11.5304 13.7893 12.0391 13.4142 12.4142C13.0391 12.7893 12.5304 13 12 13Z"
                                                fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_166_3516">
                                                <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-between items-start">
                                    <p class="text-sm text-neutral-light">Our Address</p>
                                    <p class="text-neutral-light break-all">Unit A1 & A2, 1st Floor, Jaya Setia Square, Berakas
                                        BB2713, Airport Road, Negara Brunei Darussalam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </section>
@endsection
