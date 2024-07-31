<script setup>

import {ref} from "vue";

const slides = [
  {
    name: "Meet Tecco!",
    url: "https://www.megekko.nl/tecco",
    img: "240618_homepage_TECCO_launch_v2.jpg"
  },{
    name: "Megekko Oranje shirts",
    url: "https://www.megekko.nl/info/megekko-oranje-shirts",
    img: "240524_homepage_slider_EK_Shirts_v3.jpg"
  },{
    name: "Videokaarten",
    url: "https://www.megekko.nl/Computer/Componenten/Videokaarten",
    img: "Sneller-dan-het-licht.png"
  },{
    name: "Gaming PC Desktop Systemen",
    url: "https://www.megekko.nl/Computer/PC-Systemen/Gaming-PC-systemen?f=f_vrrd-3_s-populair_pp-50_p-1_d-list_cf-",
    img: "231129_megekko_homepage_slider_Suitup.jpg"
  },
]

const current = ref(0)

</script>

<template>
  <section>
    <div class="carousel">
      <div class="carouselOverflow" :style="{transform: `translateX(-${current * 1000}px)`}">
        <a v-for="slide in slides" :href="slide.url" rel="noopener">
          <img :src="`src/assets/stuff/${slide.img}`" :alt="slide.name">
        </a>
      </div>
    </div>

    <div class="controls">
      <a v-for="i in slides.length" :class="{ active: current === i - 1 }" @click="current = i - 1" />
    </div>
  </section>

</template>

<style scoped>
@import "carousel.scss";
</style>