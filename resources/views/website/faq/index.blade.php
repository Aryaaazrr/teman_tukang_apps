@extends('website.layout')

@section('title', 'Welcome')

@section('content')
    <!-- Hero start block -->
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                    Easy solutions for <br>home handyman.</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui repellendus iste quo velit maxime ea
                    facilis, doloribus excepturi, repudiandae incidunt nesciunt omnis quisquam.</p>
                <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <a href=""
                        class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center bg-primary-400 hover:bg-primary-500 text-white border border-yellow-200 rounded-lg sm:w-auto  focus:ring-4 focus:ring-primary-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Book Now
                    </a>
                    {{-- <a href=""
                        class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center bg-primary-400 hover:bg-primary-500 text-white border border-yellow-200 rounded-lg sm:w-auto  focus:ring-4 focus:ring-primary-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Book Now
                    </a> --}}
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('static/website/image/header_home.png') }}" alt="hero image" class="animate-customBounce">
            </div>
        </div>
    </section>
    <!-- Hero End block -->

    <!-- Start block -->
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 ">
            <h2
                class="mb-6 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:mb-8 lg:text-3xl dark:text-white">
                Frequently asked questions</h2>
            <div class="max-w-screen-md mx-auto">
                <div id="accordion-flush" data-accordion="collapse"
                    data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                    data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h3 id="accordion-flush-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-900 bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white"
                            data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span>Can I use Landwind in open-source projects?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Landwind is an open-source library of
                                interactive components built on top of Tailwind CSS including buttons, dropdowns,
                                modals, navbars, and more.</p>
                            <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                    href="#" class="text-purple-600 dark:text-purple-500 hover:underline">get
                                    started</a> and start developing websites even faster with components on top of
                                Tailwind CSS.</p>
                        </div>
                    </div>
                    <h3 id="accordion-flush-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                            aria-controls="accordion-flush-body-2">
                            <span>Is there a Figma file available?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Landwind is first conceptualized and
                                designed using the Figma software so everything you see in the library has a design
                                equivalent in our Figma file.</p>
                            <p class="text-gray-500 dark:text-gray-400">Check out the <a href="#"
                                    class="text-purple-600 dark:text-purple-500 hover:underline">Figma design
                                    system</a> based on the utility classes from Tailwind CSS and components from
                                Landwind.</p>
                        </div>
                    </div>
                    <h3 id="accordion-flush-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                            aria-controls="accordion-flush-body-3">
                            <span>What are the differences between Landwind and Tailwind UI?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                                components from Landwind are open source under the MIT license, whereas Tailwind UI is a
                                paid product. Another difference is that Landwind relies on smaller and standalone
                                components, whereas Tailwind UI offers sections of pages.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                                Landwind, Landwind Pro, and even Tailwind UI as there is no technical reason stopping
                                you from using the best of two worlds.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                            <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                <li><a href="#"
                                        class="text-purple-600 dark:text-purple-500 hover:underline">Landwind Pro</a>
                                </li>
                                <li><a href="#"
                                        class="text-purple-600 dark:text-purple-500 hover:underline">Tailwind UI</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 id="accordion-flush-heading-4">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                            aria-controls="accordion-flush-body-4">
                            <span>What about browser support?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                                components from Landwind are open source under the MIT license, whereas Tailwind UI is a
                                paid product. Another difference is that Landwind relies on smaller and standalone
                                components, whereas Tailwind UI offers sections of pages.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                                Landwind, Landwind Pro, and even Tailwind UI as there is no technical reason stopping
                                you from using the best of two worlds.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                            <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                <li><a href="#"
                                        class="text-purple-600 dark:text-purple-500 hover:underline">Landwind Pro</a>
                                </li>
                                <li><a href="#"
                                        class="text-purple-600 dark:text-purple-500 hover:underline">Tailwind UI</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto text-center">
                <h2 class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">
                    Start your free trial today</h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Try Landwind Platform for 30
                    days. No credit card required.</p>
                <a href="#"
                    class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Free
                    trial for 30 days</a>
            </div>
        </div>
    </section>
@endsection