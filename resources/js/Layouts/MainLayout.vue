<template>
    <header class="fixed top-0 left-0 w-full bg-purple-950 z-10 border-b border-purple-950">
    <!-- head navigation -->
    <div class="flex h-7 items-center justify-between border-b border-purple-800">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 w-full">
        <div class="flex w-full justify-between">
        <div class="flex">
            <div class="p-2">
            <i class="fa-brands fa-facebook text-sm text-white mr-4"></i>
            <i class="fa-brands fa-twitter text-sm text-white"></i>
            </div>
        </div>
        <div class="ml-4 flex mt-[10px]">
            <p class="text-white text-sm mr-3"><i class="fa-solid fa-phone text-white"></i> +63 9123 456 7890</p>
            <p class="text-white text-sm"><i class="fa-solid fa-envelope text-white"></i> notary@notaryphil.com</p>
        </div>
        </div>
    </div>
    </div>
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <!-- navigation -->
    <div class="flex h-16 items-center justify-between">
        <div class="flex-1 md:flex md:items-center md:gap-12">
            <div class="flex items-center gap-4">
                <a class="block text-teal-600" href="/">
                    <ApplicationLogo class="h-8"/>
                </a>
                <h1 class="text-sm md:text-base lg:text-lg xl:text-lg text-white font-bold">
                    NotaryPhil
                </h1>            
            </div>
            </div>

        <div class="md:flex md:items-center md:gap-12">
        <nav aria-label="Global" class="hidden md:block">
            <ul class="flex items-center gap-6 text-sm">
                <Home />
                <NotaryPublic />
                <Services />
                <Pricing />
                <Contact />
                <div>
                    <a href="#" class="bg-yellow-200 hover:bg-yellow-300 transition duration-300 py-3 px-5 rounded-md mr-2">Login</a>
                    <a href="#" class="bg-purple-500 hover:bg-purple-600 text-white transition duration-300 py-3 px-4 rounded-md">Schedule an Appointment <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </ul>
        </nav>

        <div class="block md:hidden">
        <button class="rounded p-2 text-white transition hover:text-official-purple-200">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
            >
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        </div>
        </div>
    </div>
    </div>
    </header>
    
    <!-- Page Content -->
    <main>
        <div class="mt-[90px]">
            <slot />
        </div>
    </main>

    <Footer />
</template>

<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Footer from './Partials/Footer/Index.vue';
import Home from './Partials/Buttons/Home.vue';
import NotaryPublic from './Partials/Buttons/NotaryPublic.vue';
import Contact from './Partials/Buttons/Contact.vue';
import Pricing from './Partials/Buttons/Pricing.vue';
import Services from './Partials/Buttons/Services.vue';
</script>

<style scoped>
@import url('https://db.onlinewebfonts.com/c/2bf40ab72ea4897a3fd9b6e48b233a19?family=Garamond');

.garamond {
  font-family: 'Garamond', serif;
}
</style>