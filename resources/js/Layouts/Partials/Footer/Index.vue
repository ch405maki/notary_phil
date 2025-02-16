<template>
    <footer class="border-t border-neutral-700/20 py-10 bg-purple-950">
        <div class="mx-auto max-w-6xl px-2 sm:px-2 lg:px-6 w-full py-16">
            <button
                @click="scrollToTop"
                class="fixed bottom-4 right-4 flex items-center justify-center w-10 h-10 bg-purple-500 text-white rounded-full shadow-lg hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-offset-2 z-40"
                >
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13 4 4m-4-4-4 4"/>
                </svg>
            </button>
            <div class="flex flex-wrap items-center justify-between gap-10 md:items-start lg:flex-nowrap">
            <div class="w-full sm:w-1/2 lg:w-1/3">
                <h1 class="text-sm md:text-base lg:text-lg xl:text-lg text-white font-bold">
                    NotaryPhil
                </h1>  
                <p class="my-2 text-sm text-white">
                    Created for the new ways we live and work. We believe that everyone deserves easy access to notary services, no matter where they are in the world.
                </p>
            </div>
            <div class="w-full md:w-2/3">
                <div class="grid grid-cols-1 gap-4 text-sm sm:grid-cols-3 sm:gap-10 md:grid-cols-3">
                <div>
                    <h3 class="font-bold text-white">Product</h3>
                    <ul class="mt-4 space-y-2 text-white">
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Customer Stories</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-white">Resources</h3>
                    <ul class="mt-4 space-y-2 text-white">
                    <li><a href="#">Forms</a></li>
                    <li><a href="#">Guides and Tutorial</a></li>
                    <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-white">Company</h3>
                    <ul class="mt-4 space-y-2 text-white">
                    <li><a href="/privacy-policy">About Us</a></li>
                    <li><a href="/privacy-policy">FAQ's</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div>
                <h3 class="font-bold text-white">Try it Today</h3>
                <p class="my-4 text-white text-sm mb-8">We're providing secure, reliable, and convenient notary services.</p>
                <a href="#" class="bg-purple-500 hover:bg-purple-600 text-white transition duration-300 py-3 px-4 rounded-md">Schedule an Appointment <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="mt-8 border-t border-purple-700 flex justify-between text-sm text-white">
                <div class="mt-4">© 2025 NotaryPhil.com All rights reserved.</div>
            </div>
        </div>
    </footer>
</template>

<script setup>
    import { ref } from 'vue';

    function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>

<style scoped>
    @import url('https://db.onlinewebfonts.com/c/14ab77252fbc4bdca1dbdf8051cb7e96?family=BF+Invicta+W00+Bold');

    .text-invicta {
        font-family: 'BF Invicta W00 Bold', sans-serif;
    }
</style>
