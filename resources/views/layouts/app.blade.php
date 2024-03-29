<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@if(View::hasSection('meta_title')) @yield('meta_title') | @endif {{ $settings['app_name'] }}</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="@yield('meta_index'), @yield('meta_follow')" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    @stack('extra-css')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-mulish bg-primary-bg">
<div class="bg-primary">
    <div class="container mx-auto h-11">
        <div class="w-full flex items-center justify-end h-full">
            <ul class="flex items-center justify-center gap-3">
                <li>
                    <a href="{{ $settings['app_fb_link'] }}" target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13 9H17.5L17 11H13V20H11V11H7V9H11V7.128C11 5.345 11.186 4.698 11.534 4.046C11.875 3.40181 12.4018 2.87501 13.046 2.534C13.698 2.186 14.345 2 16.128 2C16.65 2 17.108 2.05 17.5 2.15V4H16.128C14.804 4 14.401 4.078 13.99 4.298C13.686 4.46 13.46 4.686 13.298 4.99C13.078 5.401 13 5.804 13 7.128V9Z"
                                            fill="white"/>
                                    </svg>
                                </a>
                </li>
                <li>
                    <a href="{{ $settings['app_insta_link'] }}" target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9ZM12 7C13.3261 7 14.5979 7.52678 15.5355 8.46447C16.4732 9.40215 17 10.6739 17 12C17 13.3261 16.4732 14.5979 15.5355 15.5355C14.5979 16.4732 13.3261 17 12 17C10.6739 17 9.40215 16.4732 8.46447 15.5355C7.52678 14.5979 7 13.3261 7 12C7 10.6739 7.52678 9.40215 8.46447 8.46447C9.40215 7.52678 10.6739 7 12 7ZM18.5 6.75C18.5 7.08152 18.3683 7.39946 18.1339 7.63388C17.8995 7.8683 17.5815 8 17.25 8C16.9185 8 16.6005 7.8683 16.3661 7.63388C16.1317 7.39946 16 7.08152 16 6.75C16 6.41848 16.1317 6.10054 16.3661 5.86612C16.6005 5.6317 16.9185 5.5 17.25 5.5C17.5815 5.5 17.8995 5.6317 18.1339 5.86612C18.3683 6.10054 18.5 6.41848 18.5 6.75ZM12 4C9.526 4 9.122 4.007 7.971 4.058C7.187 4.095 6.661 4.2 6.173 4.39C5.739 4.558 5.426 4.759 5.093 5.093C4.78001 5.3954 4.53935 5.76458 4.389 6.173C4.199 6.663 4.094 7.188 4.058 7.971C4.006 9.075 4 9.461 4 12C4 14.474 4.007 14.878 4.058 16.029C4.095 16.812 4.2 17.339 4.389 17.826C4.559 18.261 4.759 18.574 5.091 18.906C5.428 19.242 5.741 19.443 6.171 19.609C6.665 19.8 7.191 19.906 7.971 19.942C9.075 19.994 9.461 20 12 20C14.474 20 14.878 19.993 16.029 19.942C16.811 19.905 17.338 19.8 17.826 19.611C18.259 19.442 18.574 19.241 18.906 18.909C19.243 18.572 19.444 18.259 19.61 17.829C19.8 17.336 19.906 16.809 19.942 16.029C19.994 14.925 20 14.539 20 12C20 9.526 19.993 9.122 19.942 7.971C19.905 7.189 19.8 6.661 19.61 6.173C19.4593 5.765 19.2191 5.39596 18.907 5.093C18.6047 4.77985 18.2355 4.53917 17.827 4.389C17.337 4.199 16.811 4.094 16.029 4.058C14.925 4.006 14.539 4 12 4ZM12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2Z"
                                            fill="white"/>
                                    </svg>
                                </a>
                </li>
                <li>
                    <span class="flex items-center justify-center gap-1.5">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
            <path
                d="M3 3H21C21.2652 3 21.5196 3.10536 21.7071 3.29289C21.8946 3.48043 22 3.73478 22 4V20C22 20.2652 21.8946 20.5196 21.7071 20.7071C21.5196 20.8946 21.2652 21 21 21H3C2.73478 21 2.48043 20.8946 2.29289 20.7071C2.10536 20.5196 2 20.2652 2 20V4C2 3.73478 2.10536 3.48043 2.29289 3.29289C2.48043 3.10536 2.73478 3 3 3ZM20 7.238L12.072 14.338L4 7.216V19H20V7.238ZM4.511 5L12.061 11.662L19.502 5H4.511Z"
                fill="white"/>
            </svg>
                                    <a href="mailto:{{ $settings['app_email'] }}" class="text-neutral-light text-sm">{{ $settings['app_email'] }}</a>
                                </span>
                </li>
                <li>
                    <span class="flex items-center justify-center gap-1.5">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_220_809)">
            <path
                d="M9.366 10.682C10.3043 12.3305 11.6695 13.6957 13.318 14.634L14.202 13.396C14.3442 13.1969 14.5543 13.0569 14.7928 13.0023C15.0313 12.9478 15.2814 12.9825 15.496 13.1C16.9103 13.8729 18.4722 14.3378 20.079 14.464C20.3298 14.4839 20.5638 14.5975 20.7345 14.7823C20.9052 14.9671 21 15.2094 21 15.461V19.923C21.0001 20.1706 20.9083 20.4094 20.7424 20.5932C20.5765 20.777 20.3483 20.8927 20.102 20.918C19.572 20.973 19.038 21 18.5 21C9.94 21 3 14.06 3 5.5C3 4.962 3.027 4.428 3.082 3.898C3.10725 3.6517 3.22298 3.42352 3.40679 3.25763C3.5906 3.09175 3.82941 2.99995 4.077 3H8.539C8.79056 2.99997 9.0329 3.09475 9.21768 3.26545C9.40247 3.43615 9.51613 3.67022 9.536 3.921C9.66222 5.52779 10.1271 7.08968 10.9 8.504C11.0175 8.71856 11.0522 8.96874 10.9977 9.2072C10.9431 9.44565 10.8031 9.65584 10.604 9.798L9.366 10.682ZM6.844 10.025L8.744 8.668C8.20478 7.50409 7.83535 6.26884 7.647 5H5.01C5.004 5.166 5.001 5.333 5.001 5.5C5 12.956 11.044 19 18.5 19C18.667 19 18.834 18.997 19 18.99V16.353C17.7312 16.1646 16.4959 15.7952 15.332 15.256L13.975 17.156C13.4287 16.9437 12.898 16.6931 12.387 16.406L12.329 16.373C10.3676 15.2567 8.74328 13.6324 7.627 11.671L7.594 11.613C7.30691 11.102 7.05628 10.5713 6.844 10.025Z"
                fill="white"/>
            </g>
            <defs>
            <clipPath id="clip0_220_809">
            <rect width="24" height="24" fill="white"/>
            </clipPath>
            </defs>
            </svg>
                                    <a href="tel:{{ $settings['app_phone'] }}" class="text-neutral-light text-sm">{{ $settings['app_phone'] }}</a>
                                </span>
                </li>
            </ul>
        </div>
    </div>
</div>

<nav class="bg-white border-gray-200">
    <div x-data="{ mblBtn: window.innerWidth >= 768 }" class="container mx-auto py-6">
        <div class="flex flex-wrap items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/images/main-logo.svg') }}" alt="{{ config('app.name') }}"/>
            </a>
            <div class="flex md:order-2">
                <div class="relative hidden md:block">
                    <div class="flex items-center justify-center h-full">
                        <input type="text" id="search-navbar"
                               class="block w-56 p-2 text-sm text-neutral-accent border border-neutral-border rounded-s-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 outline-none border-e-0"
                               placeholder="Search...">
                        <div class="flex items-center pointer-events-none bg-primary h-full py-2.5 px-4 rounded-e-lg">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_220_922)">
                                    <path
                                        d="M12.5726 11.0779L15.4279 13.9326L14.4846 14.8759L11.6299 12.0206C10.5677 12.8721 9.24659 13.3352 7.88525 13.3333C4.57325 13.3333 1.88525 10.6453 1.88525 7.33325C1.88525 4.02125 4.57325 1.33325 7.88525 1.33325C11.1973 1.33325 13.8853 4.02125 13.8853 7.33325C13.8872 8.69459 13.4241 10.0157 12.5726 11.0779ZM11.2353 10.5833C12.0813 9.71318 12.5538 8.54687 12.5519 7.33325C12.5519 4.75459 10.4633 2.66659 7.88525 2.66659C5.30659 2.66659 3.21859 4.75459 3.21859 7.33325C3.21859 9.91125 5.30659 11.9999 7.88525 11.9999C9.09887 12.0018 10.2652 11.5293 11.1353 10.6833L11.2353 10.5833Z"
                                        fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_220_922">
                                        <rect width="16" height="16" fill="white" transform="translate(0.551758)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                    </div>
                </div>
                <button data-collapse-toggle="navbar-search" type="button" x-on:click="mblBtn = ! mblBtn"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between w-full md:flex md:w-auto md:order-1" x-show="mblBtn" x-transition.duration.500ms>
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="search-navbar"
                           class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Search...">
                </div>
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="{{ route('home') }}"
                           @class([
                               'block py-2 px-3 text-secondary rounded md:bg-transparent md:text-text-secondary md:p-0 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary',
                               'bg-primary text-white lg:bg-white lg:text-primary' => Request::routeIs('home')
                           ])
                           aria-current="page">Home</a>
                    </li>
                    <li
                        x-data="{show: false}"
                        @click.outside="show = false">
                        <a
                            @click="show = !show"
                            class="flex items-center justify-between w-full py-2 px-3 text-secondary rounded cursor-pointer hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 md:w-auto">
                            Services
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </a>
                        <!-- Dropdown menu -->
                        <template x-if="true">
                        <div
                            x-cloak
                            x-show="show"
                            class="z-10 absolute font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700">
                                @foreach($services as $service)
                                    <li>
                                        <a href="{{ route('service-detail', $service) }}"
                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ ucwords($service->name) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        </template>
                    </li>
                    <li
                        x-data="{show: false}"
                        @click.outside="show = false">
                        <a
                            @click="show = !show"
                            class="flex items-center justify-between w-full py-2 px-3 text-secondary rounded cursor-pointer hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 md:w-auto">
                            About Us
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </a>
                        <!-- Dropdown menu -->
                        <template x-if="true">
                            <div
                                x-cloak
                                x-show="show"
                                class="z-10 absolute font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700">
                                    <li>
                                        <a href="{{ route('company-overview') }}"
                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white capitalize">Company Overview</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('company-milestone') }}"
                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white capitalize">Company Milestone</a>
                                    </li>
                                </ul>
                            </div>
                        </template>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                           @class([
                               'block py-2 px-3 text-secondary rounded md:bg-transparent md:text-text-secondary md:p-0 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary',
                               'bg-primary text-white lg:bg-white lg:text-primary' => Request::routeIs('contact')
                           ])
                           aria-current="page">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

@yield('content')

@include('partials.footer')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    let options = {
        rootMargin: "-94px",
    };

    let observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            console.log('here')
            const intersecting = entry.isIntersecting
            const btn = document.querySelector('#btn');
            if (intersecting)
            {
                btn.style.position = "absolute";
                btn.style.top = "-1rem";
                btn.style.removeProperty('bottom');
            }
            else{
                btn.style.position = "fixed";
                btn.style.bottom = "3.5rem";
                btn.style.removeProperty('top');
            }
        })
    }, options);
    observer.observe(document.querySelector('#footer'))
</script>
@stack('extra-js')
</body>
</html>
