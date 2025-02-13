<template>
  <div class="bg-purple-950">
    <div class="py-24 px-8 max-w-6xl mx-auto flex flex-col md:flex-row gap-12">
      <div class="flex flex-col text-left basis-1/2">
        <p class="inline-block font-semibold text-primary mb-4 text-white">NotaryPhil FAQ</p>
        <p class="text-2xl lg:text-3xl xl:text-5xl font-extrabold text-base-content text-white">Frequently Asked Questions</p>
      </div>
      <ul class="basis-1/2">
        <li v-for="(faq, index) in faqs" :key="index">
          <button
            class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
            :aria-expanded="faq.expanded"
            @click="toggleFAQ(faq)"
          >
            <span class="flex-1 text-base-content text-white">{{ faq.question }}</span>
            <svg
                class="ml-[4px] fill-current h-4 w-4 text-white transform transition duration-300 ease-in-out"
                :class="{ 'rotate-180': faq.expanded }"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                >
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </button>
          <div
            class="transition-all duration-500 ease-in-out overflow-hidden"
            :class="{ 'max-h-0': !faq.expanded, 'max-h-screen': faq.expanded }"
            :style="{ 'max-height': faq.expanded ? '100vh' : '0' }"
            >
            <div class="pb-5 leading-relaxed">
              <div class="space-y-2 leading-relaxed text-white">{{ faq.answer }}</div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  </template>
  
  <script setup>
import { ref } from 'vue';
  const faqs = ref([
    {
      question: "How secure is my insurance information?",
      answer: "We prioritize the security of your insurance information. We use advanced encryption and strict data protection measures to ensure your data is safe and confidential.",
      expanded: false,
    },
    {
      question: "How can I customize my insurance coverage?",
      answer: "Our insurance plans are customizable. You can tailor your coverage to meet your specific needs and budget.",
      expanded: false,
    },
    {
      question: "Is there a waiting period for insurance claims?",
      answer: "There may be a waiting period for certain insurance claims, depending on the policy terms and conditions. Please refer to your policy documents for details.",
      expanded: false,
    },
  ]);
  
  function toggleFAQ(faq) {
    faq.expanded = !faq.expanded;
  }
  </script>



<!-- <template>
  <div class="bg-purple-950">
    <div class="py-24 px-8 max-w-6xl mx-auto flex flex-col md:flex-row gap-12">
      <div class="flex flex-col text-left basis-1/2">
        <p class="inline-block font-semibold text-primary mb-4 text-gray-600">NotaryPhil FAQ</p>
        <p class="text-2xl lg:text-3xl xl:text-5xl font-extrabold text-base-content text-gray-800">Frequently Asked Questions</p>
      </div>
      <ul class="basis-1/2">
        <li v-for="(faq, index) in faqs" :key="index">
          <button
            class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
            :aria-expanded="faq.expanded"
            @click="toggleFAQ(faq)"
          >
            <span class="flex-1 text-base-content text-gray-700">{{ faq.question }}</span>
            <svg
                class="ml-[4px] fill-current h-4 w-4 transform transition duration-300 ease-in-out"
                :class="{ 'rotate-180': faq.expanded }"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                >
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </button>
          <div
            class="transition-all duration-500 ease-in-out overflow-hidden"
            :class="{ 'max-h-0': !faq.expanded, 'max-h-screen': faq.expanded }"
            :style="{ 'max-height': faq.expanded ? '100vh' : '0' }"
            >
            <div class="pb-5 leading-relaxed">
              <div class="space-y-2 leading-relaxed text-gray-700">{{ faq.answer }}</div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  </template> -->