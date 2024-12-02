@extends('website.base.layout')

@section('additional-content')
    <section class="bg-white dark:bg-gray-800">
        <div class="pt-8 mx-auto">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Foto Profil</h2>
            <form action="#">
                <div class="grid gap-4 sm:grid-cols-5 sm:gap-6">

                    <img class="rounded-full w-32 h-32 bg-gray-300 object-cover dark:bg-gray-700"
                        src="{{ $detail->image ? asset('storage/' . $detail->image) : asset('static/admin/image/default.png') }}"
                        alt="image description" width="100" height="100" id="img-container">

                    <div class="col-span-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload
                            file</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="user_avatar_help" id="user_avatar" type="file"
                            onchange="document.getElementById('img-container').src = window.URL.createObjectURL(this.files[0])">
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
@endsection
