<template>
    <Head title="Messages" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between items-center">
            <!-- Heading Section -->
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              Messages
            </h2>
            <div class="flex items-center">
            <div class="relative text-gray-500 focus-within:text-gray-900">
              <div class="absolute inset-y-0 left-1 flex items-center pl-3 pointer-events-none">
                <!-- Search Icon -->
                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.5 17.5L15.4167 15.4167M15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333C11.0005 15.8333 12.6614 15.0929 13.8667 13.8947C15.0814 12.6872 15.8333 11.0147 15.8333 9.16667Z" stroke="#9CA3AF" stroke-width="1.6" stroke-linecap="round" />
                    <path d="M17.5 17.5L15.4167 15.4167M15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333C11.0005 15.8333 12.6614 15.0929 13.8667 13.8947C15.0814 12.6872 15.8333 11.0147 15.8333 9.16667Z" stroke="black" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                    <path d="M17.5 17.5L15.4167 15.4167M15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333C11.0005 15.8333 12.6614 15.0929 13.8667 13.8947C15.0814 12.6872 15.8333 11.0147 15.8333 9.16667Z" stroke="black" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </div>

              <input
              v-model="searchQuery"
              type="text"
              placeholder="Search here..."
              class="block w-80 h-11 pr-5 pl-12 py-2 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none"
              />
            </div>
          </div>
            <!-- Search Input -->
          </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-gray-900">
                        <!-- content here -->
                        <div class="flex flex-col">
                        <div class=" overflow-x-auto">
                            <div class="min-w-full inline-block align-middle">
                                <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead>
                                        <tr class="bg-gray-50">
                                            <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize"> Name </th>
                                            <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize"> Email | Phone Number</th>
                                            <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize w-[40%]"> Message </th>
                                            <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize"> Actions </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-300">
                                        <tr v-for="message in filteredMessages" :key="message.id" class="bg-white transition-all duration-500 hover:bg-gray-50">
                                            <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{ message.name }}</td>
                                            <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900"> 
                                                {{ message.email }} <br> {{ message.phone }} 
                                            </td>
                                            <td class="p-5 w-[40%] break-words text-sm leading-6 font-medium text-gray-900"> 
                                                {{ message.message }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const props = defineProps({
    messages: { type: Array, required: true },
});

const searchQuery = ref("");

// Computed property for filtered messages
const filteredMessages = computed(() => {
    if (!searchQuery.value) {
        return props.messages;
    }
    return props.messages.filter(message => 
        message.name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
        message.email.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
        message.phone.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
        message.message.toLowerCase().includes(searchQuery.value.toLowerCase())
    );
});
</script>
