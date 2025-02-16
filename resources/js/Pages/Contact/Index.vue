<template>
    <Head title="Contact" />
    <MainLayout>
    <section class="bg-white max-w-6xl mx-auto py-4 lg:py-24">
        <div class="max-w-screen-md px-8 mx-auto mb-8 text-center lg:mb-12">
            <h2 class="mb-4 text-xl lg:text-3xl xl:text-5xl font-extrabold tracking-tight text-gray-800">
                <span class="inline-block">
                    <span class="relative whitespace-nowrap text-gray-800">
                        <svg aria-hidden="true" viewBox="0 0 418 42" class="absolute top-2/3 left-0 h-[0.58em] w-full fill-yellow-200" preserveAspectRatio="none"><path d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z"></path></svg>
                        <span class="relative">Contact</span>
                        us
                    </span>
                </span>
            </h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl">Need something to be notarized? Get in touch with us today for a fast, secure, and hassle-free notarization experience!</p>
        </div>
        
        <div class="py-10 px-8 max-w-6xl mx-auto">
            <section class="text-gray-600 body-font relative">
                <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
                    
                    <!-- Left Column (Map) -->
                    <div class="bg-gray-300 overflow-hidden p-10 flex items-end justify-start relative">
                        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                            marginwidth="0" scrolling="no"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.6906568880654!2d120.9925687736211!3d14.559674278080355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c97bafba42c3%3A0x7859c5febabe4837!2sArellano%20University%20School%20of%20Law!5e0!3m2!1sen!2sph!4v1719103813103!5m2!1sen!2sph"
                            style="filter: grayscale(.3) contrast(1.2) opacity(0.4);"></iframe>
                        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md w-full">
                            <div class="w-1/2 px-6">
                                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                                <p class="mt-1">Taft Avenue corner Menlo Street, Pasay City, Philippines</p>
                            </div>
                            <div class="w-1/2 px-6 mt-4 lg:mt-0">
                                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                                <a class="text-purple-800 leading-relaxed">example@email.com</a>
                                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                                <p class="leading-relaxed">123-456-7890</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column (Contact Form) -->
                    <div class="w-full md:py-8">
                        <h2 class="text-gray-700 text-sm mb-1 font-medium title-font">Let us help you.</h2>
                        <h1 class="font-extrabold text-gray-800 text-lg lg:text-xl xl:text-2xl">Send us a Message</h1>

                        <div class="relative mb-4 mt-4">
                            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                            <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-gray-500 focus:ring-2 focus:ring-gray-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="phone" class="leading-7 text-sm text-gray-600">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="w-full bg-white rounded border border-gray-300 focus:border-gray-500 focus:ring-2 focus:ring-gray-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                            <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-gray-500 focus:ring-2 focus:ring-gray-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                            <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-gray-500 focus:ring-2 focus:ring-gray-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        <button class="w-full bg-purple-500 hover:bg-purple-600 text-white transition duration-300 py-3 px-4 rounded-md">Submit <i class="fa-solid fa-paper-plane"></i></button>                    </div>
                </div>
            </section>
        </div>
    </section>
    </MainLayout>
    </template>
    
    <script setup>
        import { Head } from '@inertiajs/vue3';
        import MainLayout from '@/Layouts/MainLayout.vue';
    </script>