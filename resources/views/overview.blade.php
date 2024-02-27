@extends('layouts.app')

@section('meta_title', $meta?->meta_title)
@section('meta_description', $meta?->meta_description)
@section('meta_keywords', $meta?->meta_keywords)
@section('meta_index', $meta?->index)
@section('meta_follow', $meta?->follow)

@section('content')
    @include('partials.secondary-header')

    <section class="py-12">
        <div class="container mx-auto space-y-8">
            <div class="space-y-6">
                <h2 class="font-extrabold text-4xl text-secondary">COMPANY OVERVIEW</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="relative">
                    <span class="lg:absolute left-4 top-4">
                        <img src="{{ asset('assets/images/overview-1.png') }}" alt="">
                    </span>
                    <span class="lg:absolute bottom-4 right-4">
                        <img src="{{ asset('assets/images/overview-2.png') }}" alt="">
                    </span>
                </div>
                <div class="space-y-4">
                    <p class="text-secondary">
                        Welcome to AIR CAT LOGISTICS SDN BHD, your trusted partner in worldwide end-to-end logistic solutions. With a rich history dating back to 1989 in Brunei, we've evolved from a small regional firm to a dynamic International Air and Sea freight forwarder. Our commitment to excellence and transparency has propelled us to become a leading player in the industry.
                    </p>
                    <span class="space-y-2">
                        <p class="text-secondary">
                            We provide global services through efficient networking and expertise in intercompany
                            relations, and are capable of providing the advantage of efficiency to all our partners and
                            customers. We are also one of the recognized and appointed representatives for:
                        </p>
                        <ul class="list-disc ms-8">
                            <li>
                                Royal Brunei Airline (RBA)
                            </li>
                            <li>
                                Singapore Airline (SIA)
                            </li>
                            <li>
                                FIATA
                            </li>
                            <li>
                                BRUFA
                            </li>
                            <li>
                                Global Logistics Network (GLN).
                            </li>
                        </ul>
                    </span>
                    <p class="text-secondary">
                        With our facilities and extensive network, our rates and services have become highly competitive. After years of experience and dedication, AIR CAT LOGISTICS is ready to serve you.
                    </p>
                </div>
                <div>
                    <span>

                    </span>
                </div>
            </div>
            <div class="flex items-center justify-center flex-col gap-16">
                <div class="bg-white p-8 pt-16 relative w-full lg:w-1/2 text-center rounded-2xl shadow-lg">
                    <div class="bg-primary rounded-full p-2 absolute -top-8 left-1/2 -translate-x-1/2">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_166_3744)">
                                <path d="M24.9999 6.37933C36.1557 6.37933 45.4371 14.4069 47.384 25C45.4392 35.5931 36.1557 43.6207 24.9999 43.6207C13.844 43.6207 4.56262 35.5931 2.61572 25C4.56055 14.4069 13.844 6.37933 24.9999 6.37933ZM24.9999 39.4828C29.2194 39.4819 33.3138 38.0486 36.6127 35.4176C39.9116 32.7866 42.2197 29.1137 43.1592 25C42.2162 20.8896 39.9066 17.2207 36.608 14.5932C33.3095 11.9656 29.217 10.5349 24.9999 10.5349C20.7827 10.5349 16.6903 11.9656 13.3917 14.5932C10.0931 17.2207 7.78352 20.8896 6.84055 25C7.78006 29.1137 10.0882 32.7866 13.3871 35.4176C16.686 38.0486 20.7803 39.4819 24.9999 39.4828ZM24.9999 34.3104C22.5306 34.3104 20.1625 33.3295 18.4165 31.5834C16.6704 29.8374 15.6895 27.4693 15.6895 25C15.6895 22.5308 16.6704 20.1626 18.4165 18.4166C20.1625 16.6706 22.5306 15.6897 24.9999 15.6897C27.4691 15.6897 29.8372 16.6706 31.5833 18.4166C33.3293 20.1626 34.3102 22.5308 34.3102 25C34.3102 27.4693 33.3293 29.8374 31.5833 31.5834C29.8372 33.3295 27.4691 34.3104 24.9999 34.3104ZM24.9999 30.1724C26.3717 30.1724 27.6873 29.6275 28.6573 28.6575C29.6273 27.6875 30.1723 26.3718 30.1723 25C30.1723 23.6282 29.6273 22.3126 28.6573 21.3426C27.6873 20.3726 26.3717 19.8276 24.9999 19.8276C23.628 19.8276 22.3124 20.3726 21.3424 21.3426C20.3724 22.3126 19.8274 23.6282 19.8274 25C19.8274 26.3718 20.3724 27.6875 21.3424 28.6575C22.3124 29.6275 23.628 30.1724 24.9999 30.1724Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_166_3744">
                                    <rect width="49.6552" height="49.6552" fill="white" transform="translate(0.172363 0.172424)"/>
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <p class="font-bold text-3xl text-neutral-dark">Vision</p>
                    <p class="text-secondary">Worldwide logistic solution that encompasses a commitment to innovation, seeking new ways to enhance processes and customer experience.</p>
                </div>
                <div class="bg-white p-8 pt-16 relative w-full lg:w-1/2 text-center rounded-2xl shadow-lg">
                    <div class="bg-primary rounded-full p-2 absolute -top-8 left-1/2 -translate-x-1/2">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_202_5919)">
                                <path d="M27.0688 2.24139L27.0709 8.57657C30.7168 9.03752 34.1059 10.6981 36.7043 13.2969C39.3027 15.8957 40.9629 19.285 41.4233 22.931H47.7584V27.069L41.4233 27.071C40.9624 30.7167 39.3021 34.1055 36.7037 36.7039C34.1053 39.3023 30.7165 40.9626 27.0709 41.4235L27.0688 47.7586H22.9309V41.4235C19.2848 40.963 15.8955 39.3029 13.2968 36.7045C10.698 34.1061 9.03733 30.717 8.57638 27.071L2.24121 27.069V22.931H8.57638C9.0369 19.2847 10.6974 15.8952 13.2962 13.2964C15.895 10.6975 19.2845 9.03709 22.9309 8.57657V2.24139H27.0688ZM24.9998 12.5862C21.7075 12.5862 18.55 13.8941 16.222 16.2221C13.8939 18.5502 12.586 21.7077 12.586 25C12.586 28.2924 13.8939 31.4499 16.222 33.7779C18.55 36.1059 21.7075 37.4138 24.9998 37.4138C28.2922 37.4138 31.4497 36.1059 33.7777 33.7779C36.1057 31.4499 37.4136 28.2924 37.4136 25C37.4136 21.7077 36.1057 18.5502 33.7777 16.2221C31.4497 13.8941 28.2922 12.5862 24.9998 12.5862ZM24.9998 20.8621C26.0973 20.8621 27.1498 21.298 27.9258 22.0741C28.7018 22.8501 29.1378 23.9026 29.1378 25C29.1378 26.0975 28.7018 27.15 27.9258 27.926C27.1498 28.702 26.0973 29.1379 24.9998 29.1379C23.9024 29.1379 22.8499 28.702 22.0739 27.926C21.2979 27.15 20.8619 26.0975 20.8619 25C20.8619 23.9026 21.2979 22.8501 22.0739 22.0741C22.8499 21.298 23.9024 20.8621 24.9998 20.8621Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_202_5919">
                                    <rect width="49.6552" height="49.6552" fill="white" transform="translate(0.172363 0.172424)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <p class="font-bold text-3xl text-neutral-dark">Mission</p>
                    <p class="text-secondary">To provide superior and reliable logistics solutions to our clients, ensuring the smooth and timely transportation of goods while creating value for all stakeholders.</p>
                </div>
                <div class="bg-white p-8 pt-16 relative w-full lg:w-1/2 text-center rounded-2xl shadow-lg">
                    <div class="bg-primary rounded-full p-2 absolute -top-8 left-1/2 -translate-x-1/2">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_202_5928)">
                                <path d="M10.4447 10.7159L17.7813 36.3917L24.0709 23.8124L35.7337 19.1469L10.4447 10.7159ZM6.17025 4.93105L45.0792 17.8993C45.2806 17.9661 45.4566 18.0931 45.5833 18.2633C45.7101 18.4334 45.7814 18.6384 45.7878 18.8504C45.7941 19.0625 45.7351 19.2714 45.6187 19.4488C45.5023 19.6261 45.3342 19.7635 45.1371 19.8421L27.0689 27.069L17.9137 45.3793C17.8205 45.5658 17.6732 45.7197 17.4911 45.821C17.3089 45.9223 17.1004 45.9662 16.8928 45.947C16.6853 45.9278 16.4884 45.8463 16.328 45.7132C16.1675 45.5802 16.051 45.4018 15.9937 45.2014L4.84818 6.19519C4.79656 6.01398 4.7954 5.82211 4.84484 5.64029C4.89429 5.45847 4.99245 5.29361 5.12874 5.1635C5.26502 5.03338 5.43426 4.94297 5.61817 4.902C5.80209 4.86104 5.9937 4.87108 6.17232 4.93105H6.17025Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_202_5928">
                                    <rect width="49.6552" height="49.6552" fill="white" transform="translate(0.172363 0.172424)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <p class="font-bold text-3xl text-neutral-dark">Values</p>
                    <p class="text-secondary">Our long-term organization goal “The Symbol of Reliability” is powered by providing customer satisfaction, innovation, Integrity and Ethics.</p>
                </div>
            </div>
        </div>
    </section>


@endsection
