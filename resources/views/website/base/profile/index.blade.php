@extends('website.base.layout')

@section('additional-content')
    <section class="bg-white dark:bg-gray-800">
        <div class="pt-8 mx-auto">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Lihat/Edit Profil</h2>
            <ul class="my-2 space-y-3">
                <li>
                    <a href="{{ route('profile.edit.data') }}"
                        class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-800 dark:hover:bg-gray-600 dark:text-white">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM6.02332 15.4163C7.49083 17.6069 9.69511 19 12.1597 19C14.6243 19 16.8286 17.6069 18.2961 15.4163C16.6885 13.9172 14.5312 13 12.1597 13C9.78821 13 7.63095 13.9172 6.02332 15.4163ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z">
                            </path>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Data Akun</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.edit.alamat') }}"
                        class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-800 dark:hover:bg-gray-600 dark:text-white">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13Z">
                            </path>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Alamat Saya</span>
                        <span
                            class="inline-flex items-center justify-center px-2 py-0.5 ms-3 text-xs font-medium text-gray-500 bg-primary-200 rounded dark:bg-primary-700 dark:text-primary-400">1</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('document.index') }}"
                        class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-800 dark:hover:bg-gray-600 dark:text-white">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M19 22H5C3.34315 22 2 20.6569 2 19V3C2 2.44772 2.44772 2 3 2H17C17.5523 2 18 2.44772 18 3V15H22V19C22 20.6569 20.6569 22 19 22ZM18 17V19C18 19.5523 18.4477 20 19 20C19.5523 20 20 19.5523 20 19V17H18ZM6 7V9H14V7H6ZM6 11V13H14V11H6ZM6 15V17H11V15H6Z">
                            </path>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Dokumen</span>
                        <span
                            class="inline-flex items-center justify-center px-1 py-0.5 ms-3 text-xs font-medium text-gray-500 bg-primary-200 rounded dark:bg-primary-700 dark:text-primary-400">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM11 15V17H13V15H11ZM11 7V13H13V7H11Z">
                                </path>
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
