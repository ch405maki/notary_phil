<template>
    <div class="py-10 px-8 max-w-6xl mx-auto">
            <section class="text-gray-600 body-font relative">
                <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
                    
                    <!-- Left Column (Map) -->
                    <div class="bg-gray-300 overflow-hidden p-10 flex items-end justify-start relative">
                        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                            marginwidth="0" scrolling="no"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.6906568880654!2d120.9925687736211!3d14.559674278080355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c97bafba42c3%3A0x7859c5febabe4837!2sArellano%20University%20School%20of%20Law!5e0!3m2!1sen!2sph!4v1719103813103!5m2!1sen!2sph"
                            style="filter: grayscale(.3) contrast(1.2) opacity(0.4);"></iframe>
 
                            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                            <div class="lg:w-1/2 px-6">
                                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">SEE US IN PERSON</h2>
                                <p class="mt-1">Addess Area Here! Addess Area Here!</p>
                            </div>
                            <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                                <a class="text-purple-800 leading-relaxed">example@email.com</a>
                                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">GIVE US A CALL</h2>
                                <p class="leading-relaxed">123-456-7890</p>
                                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">HOURS</h2>
                                <p class="leading-relaxed">9:00 am - 9:00 pm</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column (Contact Form) -->
                    <div class="w-full md:py-8">
                        <h2 class="text-gray-700 text-sm mb-1 font-medium title-font">Let us help you.</h2>
                        <h1 class="font-extrabold text-gray-800 text-lg lg:text-xl xl:text-2xl">Send us a Message</h1>

                        <form @submit.prevent="submitContact">
                            <div class="relative mb-4 mt-4">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input v-model="form.name" type="text" id="name" class="w-full bg-white rounded border border-gray-300 text-gray-700 py-1 px-3 leading-8">
                            </div>
                            <div class="relative mb-4">
                                <label for="phone" class="leading-7 text-sm text-gray-600">Phone Number</label>
                                <input v-model="form.phone" type="text" id="phone" class="w-full bg-white rounded border border-gray-300 text-gray-700 py-1 px-3 leading-8">
                            </div>
                            <div class="relative mb-4">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input v-model="form.email" type="email" id="email" class="w-full bg-white rounded border border-gray-300 text-gray-700 py-1 px-3 leading-8">
                            </div>
                            <div class="relative mb-4">
                                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                <textarea v-model="form.message" id="message" class="w-full bg-white rounded border border-gray-300 h-32 text-gray-700 py-1 px-3 resize-none leading-6"></textarea>
                            </div>
                            <button 
                                type="submit" 
                                class="w-full bg-purple-600 hover:bg-purple-700 text-white transition duration-300 py-3 px-4 rounded-md flex justify-center items-center"
                                :disabled="loading"
                            >
                                <span v-if="loading" class="animate-spin mr-2 text-purple-300">
                                    <i class="fa-solid fa-spinner"></i>
                                </span>
                                {{ loading ? 'Sending...' : 'Submit' }}
                                <i v-if="!loading" class="fa-solid fa-paper-plane ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
</template>


<script setup>
import { ref } from 'vue';
import { useToast } from 'vue-toastification';
import axios from 'axios';

const toast = useToast();
const loading = ref(false);
const form = ref({
    name: '',
    phone: '',
    email: '',
    message: ''
});

const submitContact = async () => {
    loading.value = true;
    try {
        await axios.post('/api/contact', form.value);
        toast.success("Message sent successfully!", {
            timeout: 3000,
            closeButton: false,
            style: {
                background: "#6B46C1",  // Purple
                color: "#fff"
            }
        });
        form.value = { name: '', phone: '', email: '', message: '' };
    } catch (error) {
        toast.error("Failed to send message. Please try again.", {
            timeout: 3000,
            closeButton: false,
            style: {
                background: "#9F7AEA", // Lighter Purple
                color: "#fff"
            }
        });
    } finally {
        loading.value = false;
    }
};
</script>