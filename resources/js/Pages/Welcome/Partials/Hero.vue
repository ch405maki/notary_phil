<template>
  <div class="bg-cover bg-no-repeat bg-[url('/images/hero/hero_cover.png')] p-6">
    <div
      class="max-w-6xl mx-auto px-4 py-4 lg:py-8 items-center grid-cols-2 mx-auto overflow-x-hidden lg:grid md:py-14 lg:py-24 xl:py-14 lg:mt-3 xl:mt-5"
      data-aos="fade-right"
      data-aos-duration="800"
    >
      <div class="px-4 pr-2 md:mb-14 py-14 md:py-0">
        <h1
          ref="typewriterText"
          class="font-bold text-white text-2xl lg:text-3xl xl:text-5xl opacity-0 transition-opacity duration-1000 ease-in-out"
        ></h1>
        <p class="py-4 text-lg text-white 2xl:py-8 md:py-6 2xl:pr-5">
          Experience convenient remote online notarization with
          <span class="font-bold">NotaryPhil</span>. Notarize documents from anywhere, anytime, securely and reliably...
        </p>
        <div class="mt-4">
          <a
            href="#"
            class="bg-purple-500 hover:bg-purple-600 text-white transition duration-300 py-3 px-4 rounded-md"
          >
            Schedule an Appointment <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>

      <div class="pb-10 overflow-hidden md:p-10 lg:p-0 sm:pb-0">
        <img
          id="hero_img"
          class="slow-pulse  transition-all duration-1000 ease-[cubic-bezier(0.1,0,0.1,1)] sm:mx-auto sm:w-4/6 sm:pb-12 lg:pb-0  h-[385px] scale-95 hover:scale-100"
          src="/images/hero/item.png"
          alt="Awesome hero page image"
        />
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, nextTick } from "vue";

const typewriterText = ref(null);
const text = "Notary Public in a Click!";
const typingSpeed = 100; // Speed of typing in milliseconds
const pauseBeforeRestart = 3000; // Delay before restarting in milliseconds

onMounted(async () => {
  await nextTick(); // Ensures DOM is fully updated before applying effects

  const startTyping = () => {
    let index = 0;
    typewriterText.value.innerHTML = ""; // Clear previous text
    typewriterText.value.classList.remove("opacity-0"); // Fade-in transition

    const typeEffect = () => {
      if (index < text.length) {
        typewriterText.value.innerHTML += text[index];
        index++;
        setTimeout(typeEffect, typingSpeed);
      } else {
        setTimeout(() => {
          typewriterText.value.classList.add("opacity-0"); // Fade out before restart
          setTimeout(startTyping, 1000); // Restart after fade-out
        }, pauseBeforeRestart);
      }
    };

    typeEffect();
  };

  setTimeout(() => {
    startTyping(); // Start the animation
  }, 500); // Initial delay for smooth load
});
</script>


<style scoped>
@keyframes slowPulse {
    0% {
      transform: scale(0.95);
      opacity: 0.9;
    }
    50% {
      transform: scale(1);
      opacity: 1;
    }
    100% {
      transform: scale(0.95);
      opacity: 0.9;
    }
  }

  .slow-pulse {
    animation: slowPulse 4s ease-in-out infinite; /* 4s for a slower effect */
  }
</style>