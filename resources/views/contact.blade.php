@extends('layouts.app')

@section('meta_title', $meta?->meta_title)
@section('meta_description', $meta?->meta_description)
@section('meta_keywords', $meta?->meta_keywords)
@section('meta_index', $meta?->index)
@section('meta_follow', $meta?->follow)

@section('content')
    @include('partials.secondary-header')

    <section class="py-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 bg-white">
                <div class="bg-primary p-8 space-y-4 rounded-lg rounded-br-[5rem]">
                    <h2 class="text-neutral-light text-5xl font-extrabold">Contact Us Now</h2>
                    <p class="text-neutral-light">With over three decades of experience and a global network, AIR CAT LOGISTICS excels in international trade services, providing entrepreneurs with unmatched accessibility and efficiency in the logistics industry.</p>
                    <div class="w-full lg:w-3/5 pt-8 space-y-4">
                        <div class="flex items-start justify-start gap-4">
                            <span>
                                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_166_3935)">
<path d="M12.6528 13.5944C13.8257 15.655 15.5322 17.3615 17.5928 18.5344L18.6978 16.9869C18.8755 16.7381 19.1383 16.563 19.4363 16.4949C19.7344 16.4267 20.0471 16.4701 20.3153 16.6169C22.0832 17.5831 24.0356 18.1642 26.0441 18.3219C26.3575 18.3468 26.6501 18.4889 26.8635 18.7198C27.0769 18.9508 27.1954 19.2537 27.1953 19.5682V25.1457C27.1954 25.4552 27.0806 25.7537 26.8733 25.9835C26.6659 26.2132 26.3807 26.3579 26.0728 26.3894C25.4103 26.4582 24.7428 26.4919 24.0703 26.4919C13.3703 26.4919 4.69531 17.8169 4.69531 7.11694C4.69531 6.44444 4.72906 5.77694 4.79781 5.11444C4.82938 4.80656 4.97404 4.52134 5.2038 4.31399C5.43356 4.10663 5.73207 3.99188 6.04156 3.99194H11.6191C11.9335 3.9919 12.2364 4.11038 12.4674 4.32376C12.6984 4.53713 12.8405 4.82972 12.8653 5.14319C13.0231 7.15168 13.6042 9.10404 14.5703 10.8719C14.7171 11.1401 14.7606 11.4529 14.6924 11.7509C14.6242 12.049 14.4491 12.3117 14.2003 12.4894L12.6528 13.5944ZM9.50031 12.7732L11.8753 11.0769C11.2013 9.62206 10.7395 8.07799 10.5041 6.49194H7.20781C7.20031 6.69944 7.19656 6.90819 7.19656 7.11694C7.19531 16.4369 14.7503 23.9919 24.0703 23.9919C24.2791 23.9919 24.4878 23.9882 24.6953 23.9794V20.6832C23.1093 20.4478 21.5652 19.986 20.1103 19.3119L18.4141 21.6869C17.7311 21.4216 17.0678 21.1083 16.4291 20.7494L16.3566 20.7082C13.9048 19.3128 11.8744 17.2825 10.4791 14.8307L10.4378 14.7582C10.0789 14.1194 9.76567 13.4561 9.50031 12.7732Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0_166_3935">
<rect width="30" height="30" fill="white" transform="translate(0.945312 0.241943)"/>
</clipPath>
</defs>
</svg>
                            </span>
                            <div>
                                <p class="text-lg font-semibold text-neutral-light">Phone number</p>
                                <a href="tel:{{ $settings['app_phone'] }}" class="text-neutral-light">{{ $settings['app_phone'] }}</a>
                            </div>
                        </div>
                        <div class="flex items-start justify-start gap-4">
                            <span>
                                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_166_3940)">
<path d="M4.69531 3.99194H27.1953C27.5268 3.99194 27.8448 4.12364 28.0792 4.35806C28.3136 4.59248 28.4453 4.91042 28.4453 5.24194V25.2419C28.4453 25.5735 28.3136 25.8914 28.0792 26.1258C27.8448 26.3602 27.5268 26.4919 27.1953 26.4919H4.69531C4.36379 26.4919 4.04585 26.3602 3.81143 26.1258C3.57701 25.8914 3.44531 25.5735 3.44531 25.2419V5.24194C3.44531 4.91042 3.57701 4.59248 3.81143 4.35806C4.04585 4.12364 4.36379 3.99194 4.69531 3.99194ZM25.9453 9.28944L16.0353 18.1644L5.94531 9.26194V23.9919H25.9453V9.28944ZM6.58406 6.49194L16.0216 14.8194L25.3228 6.49194H6.58406Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0_166_3940">
<rect width="30" height="30" fill="white" transform="translate(0.945312 0.241943)"/>
</clipPath>
</defs>
</svg>
                            </span>
                            <div>
                                <p class="text-lg font-semibold text-neutral-light">Email</p>
                                <a href="tel:{{ $settings['app_email'] }}" class="text-neutral-light">{{ $settings['app_email'] }}</a>
                            </div>
                        </div>
                        <div class="flex items-start justify-start gap-4">
                            <span>
                                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M22.3003 20.007C23.4758 18.7649 24.2616 17.2057 24.5606 15.5219C24.8595 13.8382 24.6585 12.1037 23.9825 10.5329C23.3064 8.96217 22.1848 7.62394 20.7564 6.68367C19.328 5.74339 17.6554 5.24228 15.9453 5.24228C14.2352 5.24228 12.5626 5.74339 11.1342 6.68367C9.70583 7.62394 8.58427 8.96217 7.90818 10.5329C7.23209 12.1037 7.03111 13.8382 7.33006 15.5219C7.62902 17.2057 8.41481 18.7649 9.59032 20.007C10.2649 18.9305 11.202 18.0432 12.3137 17.4284C13.4253 16.8135 14.675 16.4913 15.9453 16.492C17.2157 16.4913 18.4653 16.8135 19.577 17.4284C20.6886 18.0432 21.6257 18.9305 22.3003 20.007ZM11.4266 21.8482L15.9453 26.3657L20.4641 21.8482C20.0588 20.9927 19.4191 20.2697 18.6191 19.7635C17.8192 19.2573 16.892 18.9885 15.9453 18.9885C14.9987 18.9885 14.0714 19.2573 13.2715 19.7635C12.4716 20.2697 11.8318 20.9927 11.4266 21.8482ZM15.9453 29.902L7.99032 21.947C6.41699 20.3736 5.34555 18.3691 4.91147 16.1868C4.4774 14.0045 4.7002 11.7425 5.55169 9.68684C6.40318 7.63118 7.84512 5.87418 9.69517 4.63802C11.5452 3.40186 13.7203 2.74207 15.9453 2.74207C18.1704 2.74207 20.3454 3.40186 22.1955 4.63802C24.0455 5.87418 25.4875 7.63118 26.3389 9.68684C27.1904 11.7425 27.4132 14.0045 26.9792 16.1868C26.5451 18.3691 25.4736 20.3736 23.9003 21.947L15.9453 29.902ZM15.9453 12.742C16.2768 12.742 16.5948 12.6103 16.8292 12.3759C17.0636 12.1414 17.1953 11.8235 17.1953 11.492C17.1953 11.1604 17.0636 10.8425 16.8292 10.6081C16.5948 10.3737 16.2768 10.242 15.9453 10.242C15.6138 10.242 15.2959 10.3737 15.0614 10.6081C14.827 10.8425 14.6953 11.1604 14.6953 11.492C14.6953 11.8235 14.827 12.1414 15.0614 12.3759C15.2959 12.6103 15.6138 12.742 15.9453 12.742ZM15.9453 15.242C14.9508 15.242 13.9969 14.8469 13.2937 14.1436C12.5904 13.4404 12.1953 12.4865 12.1953 11.492C12.1953 10.4974 12.5904 9.54358 13.2937 8.84032C13.9969 8.13706 14.9508 7.74197 15.9453 7.74197C16.9399 7.74197 17.8937 8.13706 18.597 8.84032C19.3002 9.54358 19.6953 10.4974 19.6953 11.492C19.6953 12.4865 19.3002 13.4404 18.597 14.1436C17.8937 14.8469 16.9399 15.242 15.9453 15.242Z" fill="white"/>
</svg>
                            </span>
                            <div>
                                <p class="text-lg font-semibold text-neutral-light">Address</p>
                                <p class="text-neutral-light">{{ $settings['app_address'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-8 space-y-4">
                    <h3 class="text-4xl font-semibold text-secondary">Leave a message</h3>
                    <p class="text-[rgba(74,74,74,1)]">Whatever question you have, please feel free to ask.</p>
                    <form action="{{ route('save-contact') }}" method="POST" class="space-y-4">
                        @csrf
                        @if(Session::has('success'))
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if(Session::has('error'))
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="flex flex-col flex-1">
                                <label class="text-secondary font-medium text-base" for="name">Name</label>
                                <input type="text" id="name" name="name" class="border border-neutral-dark-border rounded-lg p-2 text-md outline-none" placeholder="Enter your name">
                            </div>
                            <div class="flex flex-col flex-1">
                                <label class="text-secondary font-medium text-base" for="email">Email</label>
                                <input type="text" id="email" name="email" class="border border-neutral-dark-border rounded-lg p-2 text-md outline-none" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="flex flex-col ">
                            <label class="text-secondary font-medium text-base" for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="border border-neutral-dark-border rounded-lg p-2 text-md outline-none" placeholder="Enter your phone number">
                        </div>
                        <div class="flex flex-col ">
                            <label class="text-secondary font-medium text-base" for="subject">Your Subject</label>
                            <input type="text" id="subject" name="subject" class="border border-neutral-dark-border rounded-lg p-2 text-md outline-none" placeholder="Enter your subject">
                        </div>
                        <div class="flex flex-col ">
                            <label class="text-secondary font-medium text-base" for="message">Message</label>
                            <textarea rows="5" id="message" name="message" class="w-full border border-neutral-dark-border rounded-lg p-2 text-md outline-none" placeholder="Enter your subject"></textarea>
                        </div>
                        <div class="w-full">
                            <button type="submit" class="w-full text-md py-2 bg-primary rounded-md text-neutral-light mt-8">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
