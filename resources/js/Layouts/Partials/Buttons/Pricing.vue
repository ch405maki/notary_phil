<template>
    <div class="group inline-block relative">
    <button  @click="router.visit('pricing')" type="button" class="outline-none focus:outline-none py-2 text-white rounded-md flex items-center">
        <span class="font-normal flex-1 hover:text-gray-300">Pricing</span>
    </button>
</div>
</template>

<script setup>
    import { router } from '@inertiajs/vue3';

</script>

<style scoped>
</style>