@extends('layouts.public')

@section('title', 'UMKM')

@section('content')

    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <div>
                    <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Daftar UMKM</h2>
                </div>

                <div class="flex items-center space-x-4">
                    <button id="sortDropdownButton1" data-dropdown-toggle="dropdownSort1" type="button"
                        class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
                        <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                        </svg>
                        Filter
                        <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="dropdownSort1"
                        class="z-50 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700"
                        data-popper-placement="bottom">
                        <ul class="p-2 text-left text-sm font-medium text-gray-500 dark:text-gray-400"
                            aria-labelledby="sortDropdownButton">
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Kamar Kos </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Makanan </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Wisata </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Tanaman </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Barang </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Mainan </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="grid gap-8 lg:grid-cols-3">
                <article
                    class="p-4 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 min-h-48">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-blue-500 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            Kategori
                        </span>
                    </div>
                    <img src="https://flowbite.com/docs/images/blog/image-1.jpg" alt=""
                        class="min-h-52 w-full position-relative">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <span class="mb-2 text-xl font-medium tracking-tight text-gray-900 dark:text-white"><a
                                    href="#">Nama UMKM</a></span>
                        </div>
                    </div>
                </article>

                <article
                class="p-4 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 min-h-48">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span
                        class="bg-blue-500 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        Kategori
                    </span>
                </div>
                <img src="https://flowbite.com/docs/images/blog/image-1.jpg" alt=""
                    class="min-h-52 w-full position-relative">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="mb-2 text-xl font-medium tracking-tight text-gray-900 dark:text-white"><a
                                href="#">Nama UMKM</a></span>
                    </div>
                </div>
            </article>

            <article
            class="p-4 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 min-h-48">
            <div class="flex justify-between items-center mb-5 text-gray-500">
                <span
                    class="bg-blue-500 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                    Kategori
                </span>
            </div>
            <img src="https://flowbite.com/docs/images/blog/image-1.jpg" alt=""
                class="min-h-52 w-full position-relative">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <span class="mb-2 text-xl font-medium tracking-tight text-gray-900 dark:text-white"><a
                            href="#">Nama UMKM</a></span>
                </div>
            </div>
        </article>

            </div>
        </div>

    </section>

@endsection
