<template>
<Head title="Welcome" />
<MainLayout>
    <Hero />
    <Services />
    <Secure />
    <Faq />
    <Contact />
</MainLayout>
</template>

<script setup>
    import { Head } from '@inertiajs/vue3';
    import MainLayout from '@/Layouts/MainLayout.vue';
    import Hero from './Partials/Hero.vue';
    import Services from './Partials/Services.vue';
    import Secure from './Partials/Secure.vue';
    import Faq from './Partials/Faq.vue';
    import Contact from './Partials/Contact.vue';

</script>

<style>

</style>
