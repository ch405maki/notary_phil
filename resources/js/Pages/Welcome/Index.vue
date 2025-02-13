<template>
<Head title="Welcome" />
<MainLayout>
    <Hero />
    <Services />
</MainLayout>
</template>

<script setup>
    import MainLayout from '@/Layouts/MainLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import Hero from './Partials/Hero.vue';
    import Services from './Partials/Services.vue';

</script>

<style>

</style>
