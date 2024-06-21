@extends('layouts.public')

@section('title', 'Berita')

@section('content')

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto md:max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl text-base font-medium text-gray-900 dark:text-white">
                <header class="mb-4 lg:mb-6 not-format">
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        Judul Berita</h1>
                </header>

                <h2>Getting started with Flowbite</h2>
                <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem accusamus quisquam est similique eveniet
                    dolore quam, incidunt temporibus magnam enim eum asperiores tenetur quis molestias quos officiis
                    consequuntur ea voluptates!.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam perspiciatis minus facilis sequi inventore
                    fugiat laborum eveniet quo iure est. A quibusdam sint doloribus ex earum veritatis tenetur totam fugit.
                </p>s
            </article>
        </div>
    </main>

    <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
        <div class="px-4 mx-auto md:max-w-screen-lg">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Berita Lainya</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            class="mb-5 rounded-lg" alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Judul Berita</a>
                    </h2>
                    <p class="mb-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, Delectus et expedita facere eius atque ducimus, accusantium quod dolorum? Officia, iste?</p>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            class="mb-5 rounded-lg" alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Judul Berita</a>
                    </h2>
                    <p class="mb-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, Delectus et expedita facere eius atque ducimus, accusantium quod dolorum? Officia, iste?</p>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            class="mb-5 rounded-lg" alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Judul Berita</a>
                    </h2>
                    <p class="mb-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, Delectus et expedita facere eius atque ducimus, accusantium quod dolorum? Officia, iste?</p>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            class="mb-5 rounded-lg" alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Judul Berita</a>
                    </h2>
                    <p class="mb-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, Delectus et expedita facere eius atque ducimus, accusantium quod dolorum? Officia, iste?</p>
                </article>
            </div>
        </div>
    </aside>

@endsection
