<div
    class="hidden lg:block w-full h-fit p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 lg:col-span-2 lg:row-span-2">

    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="{{ route('profile.index') }}"
                    class="inline-flex items-center text-sm font-medium text-primary-600 hover:text-primary-500 dark:text-primary-400 dark:hover:text-primary-300">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="{{ route('profile.index') }}"
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ms-2 dark:text-gray-400 dark:hover:text-primary-400">Profile</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Edit Photo</span>
                </div>
            </li>
        </ol>
    </nav>

    <section class="bg-white dark:bg-gray-800">
        <div class="pt-8 mx-auto">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Foto Profil</h2>
            <form action="#">
                <div class="grid gap-4 sm:grid-cols-5 sm:gap-6">

                    <img class="rounded-full w-32 h-32 bg-gray-300 object-cover dark:bg-gray-700" src="{{ $detail->image ? asset('storage/' . $detail->image) : asset('static/admin/image/default.png') }}"
                        alt="image description" width="100" height="100" id="img-container">

                    <div class="col-span-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="user_avatar">Upload file</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="user_avatar_help" id="user_avatar" type="file" onchange="document.getElementById('img-container').src = window.URL.createObjectURL(this.files[0])">
                        <div class="mt-2 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">
                            Ketentuan Foto
                            <ul>
                                <li>- Maksimal 1 MB</li>
                                <li>- Resolusi Minimal 64x64</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-6 border-t border-gray-200 dark:border-gray-700">
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Unggah Foto
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
