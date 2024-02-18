@extends('layouts.app')
@section('content')

    <x-home-slider/>

    <section class="py-16 border-b-2 border-neutral-normal">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-secondary font-medium text-5xl leading-[3.5rem]">Your One-Stop Logistics Solution, <br>The Symbol of Reliability.</h2>
                </div>
                <div>
                    <span>
                        <img src="{{ asset('assets/images/idea.png') }}" alt="">
                    </span>
                </div>
            </div>
        </div>
    </section>

    <x-home-services/>

    <section class="py-16 bg-secondary-bg">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 gap-8">
                <div class="w-full">
                    <img src="{{ asset('assets/images/why-choose-us.png') }}" alt="">
                </div>
                <div class="w-full flex flex-col items-start justify-center gap-3">
                    <p class="text-primary text-lg">Why you choose us</p>
                    <h6 class="text-secondary text-4xl font-bold">We create an opportunity reach our potential</h6>
                    <p class="text-neutral-dark text-base font-normal">Logistics is a distinguished supply chain management firm which provides comprehensive solutions for warehousing, transportation and a host of logistics services</p>
                    <div class="w-full grid grid-cols-2 gap-y-6">
                        <div class="w-full flex items-center justify-start gap-4">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[rgba(0,112,192,0.1)]">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5 2.5C15.0906 2.4998 15.6717 2.64908 16.1892 2.93393C16.7066 3.21879 17.1435 3.62995 17.4592 4.12914C17.7749 4.62832 17.9592 5.19929 17.9948 5.78886C18.0305 6.37843 17.9163 6.96743 17.663 7.501L21 7.5C21.2652 7.5 21.5196 7.60536 21.7071 7.7929C21.8946 7.98043 22 8.23479 22 8.5V12.5C22 12.7652 21.8946 13.0196 21.7071 13.2071C21.5196 13.3946 21.2652 13.5 21 13.5H20V21.5C20 21.7652 19.8946 22.0196 19.7071 22.2071C19.5196 22.3946 19.2652 22.5 19 22.5H5C4.73478 22.5 4.48043 22.3946 4.29289 22.2071C4.10536 22.0196 4 21.7652 4 21.5V13.5H3C2.73478 13.5 2.48043 13.3946 2.29289 13.2071C2.10536 13.0196 2 12.7652 2 12.5V8.5C2 8.23479 2.10536 7.98043 2.29289 7.7929C2.48043 7.60536 2.73478 7.5 3 7.5L6.337 7.501C5.98076 6.75268 5.90163 5.90221 6.1137 5.101C6.32577 4.2998 6.81529 3.59985 7.4951 3.12576C8.17491 2.65167 9.0009 2.4342 9.82603 2.51207C10.6512 2.58994 11.4219 2.9581 12.001 3.551C12.326 3.21753 12.7147 2.95268 13.1439 2.77215C13.5732 2.59162 14.0343 2.49908 14.5 2.5ZM18 13.5H6V20.5H18V13.5ZM20 9.5H4V11.5H20V9.5ZM9.5 4.5C9.11478 4.50019 8.74441 4.64858 8.46561 4.91441C8.18682 5.18025 8.02099 5.54315 8.00248 5.92792C7.98396 6.31269 8.11419 6.68984 8.36618 6.98121C8.61816 7.27257 8.97258 7.45583 9.356 7.493L9.5 7.5H11V6C11 5.62712 10.8611 5.26761 10.6104 4.99158C10.3597 4.71556 10.0152 4.5428 9.644 4.507L9.5 4.5ZM14.5 4.5L14.356 4.507C14.0094 4.54021 13.6851 4.69298 13.4388 4.93911C13.1925 5.18525 13.0395 5.5094 13.006 5.856L13 6V7.5H14.5L14.644 7.493C15.015 7.45703 15.3594 7.2842 15.6099 7.00819C15.8605 6.73218 15.9993 6.37277 15.9993 6C15.9993 5.62724 15.8605 5.26783 15.6099 4.99182C15.3594 4.71581 15.015 4.54297 14.644 4.507L14.5 4.5Z" fill="#333333" fill-opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="text-base font-medium text-secondary">Safe package</p>
                        </div>
                        <div class="w-full flex items-center justify-start gap-4">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[rgba(0,112,192,0.1)]">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_166_3054)">
                                        <path d="M12 22.5C6.477 22.5 2 18.023 2 12.5C2 6.977 6.477 2.5 12 2.5C17.523 2.5 22 6.977 22 12.5C22 18.023 17.523 22.5 12 22.5ZM9.71 20.167C8.72341 18.0743 8.15187 15.8102 8.027 13.5H4.062C4.25659 15.0389 4.89392 16.4882 5.89657 17.6717C6.89922 18.8552 8.22401 19.7221 9.71 20.167ZM10.03 13.5C10.181 15.939 10.878 18.23 12 20.252C13.1523 18.1766 13.8254 15.8695 13.97 13.5H10.03ZM19.938 13.5H15.973C15.8481 15.8102 15.2766 18.0743 14.29 20.167C15.776 19.7221 17.1008 18.8552 18.1034 17.6717C19.1061 16.4882 19.7434 15.0389 19.938 13.5ZM4.062 11.5H8.027C8.15187 9.18979 8.72341 6.92569 9.71 4.833C8.22401 5.27788 6.89922 6.14475 5.89657 7.3283C4.89392 8.51184 4.25659 9.9611 4.062 11.5ZM10.031 11.5H13.969C13.8248 9.1306 13.152 6.82353 12 4.748C10.8477 6.82345 10.1746 9.13052 10.03 11.5H10.031ZM14.29 4.833C15.2766 6.92569 15.8481 9.18979 15.973 11.5H19.938C19.7434 9.9611 19.1061 8.51184 18.1034 7.3283C17.1008 6.14475 15.776 5.27788 14.29 4.833Z" fill="#333333" fill-opacity="0.8"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_166_3054">
                                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <p class="text-base font-medium text-secondary">Global Tracking</p>
                        </div>
                        <div class="w-full flex items-center justify-start gap-4">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[rgba(0,112,192,0.1)]">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 4.5H14.446C14.6156 4.5 14.7824 4.54314 14.9308 4.62536C15.0791 4.70758 15.2041 4.82617 15.294 4.97L18.75 10.5H23.158C23.2448 10.4999 23.3302 10.5225 23.4056 10.5654C23.4811 10.6084 23.5441 10.6702 23.5884 10.7449C23.6327 10.8196 23.6568 10.9045 23.6583 10.9913C23.6598 11.0781 23.6387 11.1638 23.597 11.24L19.637 18.5H19C18.4819 18.5004 17.966 18.4339 17.465 18.302L20.63 12.5H3.4L4.448 18.324C3.97426 18.4412 3.48802 18.5003 3 18.5H2.455L1.215 11.679C1.18881 11.535 1.19453 11.3871 1.23176 11.2456C1.26899 11.1041 1.33682 10.9724 1.43047 10.86C1.52412 10.7476 1.6413 10.6571 1.77374 10.5949C1.90619 10.5326 2.05067 10.5003 2.197 10.5H3V5.5C3 5.23478 3.10536 4.98043 3.29289 4.79289C3.48043 4.60536 3.73478 4.5 4 4.5H5V1.5H9V4.5ZM5 10.5H16.392L13.892 6.5H5V10.5ZM3 20.5C4.47626 20.502 5.90107 19.9578 7 18.972C8.09893 19.9578 9.52374 20.502 11 20.5C12.4763 20.502 13.9011 19.9578 15 18.972C16.0989 19.9578 17.5237 20.502 19 20.5H21V22.5H19C17.5956 22.5023 16.2157 22.1331 15 21.43C13.7843 22.1331 12.4044 22.5023 11 22.5C9.59564 22.5023 8.21565 22.1331 7 21.43C5.78435 22.1331 4.40436 22.5023 3 22.5H1V20.5H3Z" fill="#333333" fill-opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="text-base font-medium text-secondary">Ship Everywhere</p>
                        </div>
                        <div class="w-full flex items-center justify-start gap-4">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[rgba(0,112,192,0.1)]">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.938 8.50001H21C21.5304 8.50001 22.0391 8.71072 22.4142 9.08579C22.7893 9.46087 23 9.96957 23 10.5V14.5C23 15.0304 22.7893 15.5391 22.4142 15.9142C22.0391 16.2893 21.5304 16.5 21 16.5H19.938C19.6942 18.4333 18.7533 20.2112 17.2917 21.5C15.8302 22.7888 13.9486 23.5 12 23.5V21.5C13.5913 21.5 15.1174 20.8679 16.2426 19.7426C17.3679 18.6174 18 17.0913 18 15.5V9.50001C18 7.90871 17.3679 6.38259 16.2426 5.25737C15.1174 4.13215 13.5913 3.50001 12 3.50001C10.4087 3.50001 8.88258 4.13215 7.75736 5.25737C6.63214 6.38259 6 7.90871 6 9.50001V16.5H3C2.46957 16.5 1.96086 16.2893 1.58579 15.9142C1.21071 15.5391 1 15.0304 1 14.5V10.5C1 9.96957 1.21071 9.46087 1.58579 9.08579C1.96086 8.71072 2.46957 8.50001 3 8.50001H4.062C4.30603 6.5669 5.24708 4.78928 6.70857 3.50068C8.17007 2.21209 10.0516 1.50108 12 1.50108C13.9484 1.50108 15.8299 2.21209 17.2914 3.50068C18.7529 4.78928 19.694 6.5669 19.938 8.50001ZM3 10.5V14.5H4V10.5H3ZM20 10.5V14.5H21V10.5H20ZM7.76 16.285L8.82 14.589C9.77308 15.186 10.8754 15.5018 12 15.5C13.1246 15.5018 14.2269 15.186 15.18 14.589L16.24 16.285C14.9693 17.0812 13.4995 17.5023 12 17.5C10.5005 17.5023 9.03074 17.0812 7.76 16.285Z" fill="#333333" fill-opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="text-base font-medium text-secondary">24/7 Support</p>
                        </div>
                        <div class="w-full flex items-center justify-start gap-4">
                            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[rgba(0,112,192,0.1)]">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_166_3049)">
                                        <path d="M12 22.5C6.477 22.5 2 18.023 2 12.5C2 6.977 6.477 2.5 12 2.5C17.523 2.5 22 6.977 22 12.5C22 18.023 17.523 22.5 12 22.5ZM12 20.5C14.1217 20.5 16.1566 19.6571 17.6569 18.1569C19.1571 16.6566 20 14.6217 20 12.5C20 10.3783 19.1571 8.34344 17.6569 6.84315C16.1566 5.34285 14.1217 4.5 12 4.5C9.87827 4.5 7.84344 5.34285 6.34315 6.84315C4.84285 8.34344 4 10.3783 4 12.5C4 14.6217 4.84285 16.6566 6.34315 18.1569C7.84344 19.6571 9.87827 20.5 12 20.5ZM13 12.5H17V14.5H11V7.5H13V12.5Z" fill="#333333" fill-opacity="0.8"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_166_3049">
                                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <p class="text-base font-medium text-secondary">In Time Delivery</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto">
            <div class="text-center">
                <h6 class="text-4xl font-light text-neutral-dark">INTERNATIONAL LOGISTICS <br>Connected worldwide</h6>
            </div>
            <div class="w-full mt-8">
                <video autoplay loop muted class="w-full">
                    <source src="{{ asset('assets/images/animation.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>

    <section class="py-16 border-t-2 border-neutral-normal">
        <div class="container mx-auto">
            <div class="grid grid-cols-2">
                <div class="flex items-center justify-center gap-4">
                    <p class="text-secondary text-4xl font-extrabold">
                        81294
                    </p>
                    <span class="bg-primary w-3 h-3">

                    </span>
                    <p class="text-lg text-neutral-medium">Delivery Packaged</p>
                </div>
                <div class="flex items-center justify-center gap-4">
                    <p class="text-secondary text-4xl font-extrabold">
                        13893
                    </p>
                    <span class="bg-primary w-3 h-3">

                    </span>
                    <p class="text-lg text-neutral-medium">Satisfied Clients</p>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('extra-js')
    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".swiper", {
            autoplay: {
                delay: 3500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },

            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    // progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            }
        });
    </script>
@endpush
