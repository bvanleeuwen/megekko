<script setup>
import WelcomeItem from './WelcomeItem.vue'
import DocumentationIcon from './icons/IconDocumentation.vue'
import Nav from "@/components/Nav.vue";
import Carousel from "@/components/carousel/carousel.vue";
import Displays from "@/components/Displays.vue";
import Recent from "@/components/Recent.vue";
import Populair from "@/components/Populair.vue";
import {useMediaQuery} from "@vueuse/core";

const isDesktop = useMediaQuery('(min-width: 1024px)')

const displays = [
  {
  //   name: "AMD Game bundel - Choose 2 games",
  //   url: "https://www.megekko.nl/info/amd-choose-2-games-actie",
  //   img: "240603_banner_AMD_Gamebundel_Actiepagina.png",
  //   span: 1
  // },{
    name: "Laptops - Home &amp; Office",
    url: "https://www.megekko.nl/Computer/Laptops-en-meer/Laptops?f=f_4764-204455_vrrd-3_s-populair_pp-50_p-1_d-list_cf-&amp;",
    img: "240423_homepage_blok_laptops_home&office.jpg"
  },{
    name: "Actieprijzen",
    url: "https://www.megekko.nl/info/actieprijzen",
    img: "230330_homepage_banner_actieprijzen_V3.jpg"
  },{
    name: "Desktop PC-systemen",
    url: "https://www.megekko.nl/Computer/PC-Systemen/Desktop-PC-systemen?f=f_vrrd-3_s-populair_pp-50_p-1_d-list_cf-&amp;",
    img: "240423_homepage_blok_DesktopPCSystemen.jpg"
  },{
    name: "Zelfbouwsystemen",
    url: "https://www.megekko.nl/Computer/Componenten/Zelfbouw-PC-systemen",
    img: "230330_homepage_banner_zelfbouwsystemen_V2.jpg"
  },{
    name: "Medion Akoya E15415",
    url: "https://www.megekko.nl/info/medion-akoya-E15415",
    img: "231228_homepage_blok_MedionLaptop_V5.jpg"
  },{
    name: "Videokaarten",
    url: "https://www.megekko.nl/Computer/Componenten/Videokaarten",
    img: "240515_homepage_blok_Videokaarten.jpg"
  },
]

const displays2 = [
  {
    name: "Megekko Academy Videokaarten",
    url: "https://www.megekko.nl/info/academy-videokaarten",
    img: "240209_academy_homepage_blokken_GPU_v1.jpg"
  },{
    name: "Megekko Academy",
    url: "https://www.megekko.nl/info/megekko-academy",
    img: "PC.png"
  },{
    name: "Megekko Academy Processors",
    url: "https://www.megekko.nl/info/academy-amd-of-intel",
    img: "240209_academy_homepage_blokken_PROCESSOR_v1.jpg"
  },{
    name: "Megekko Academy Voedingen",
    url: "https://www.megekko.nl/academy/voedingen",
    img: "psu.png"
  },{
    name: "Megekko Academy Behuizingen",
    url: "https://www.megekko.nl/academy/behuizingen",
    img: "behuizing.png"
  },{
    name: "Megekko Academy Monitoren",
    url: "https://www.megekko.nl/academy/monitoren",
    img: "Monitor.png"
  },{
    name: "Laat jouw PC bouwen bij Megekko",
    url: "https://www.megekko.nl/info/megekko-builds",
    img: "240201_banner_MEGEKKO_PC_BOUWEN_Homepage_V3.png",
    span: 1
  },{
    name: "Jouw PC Laten Bouwen In De Megekko Winkel",
    url: "https://www.megekko.nl/info/megekko-builds",
    img: "240515_banner_PC-Bouw_v1.jpg",
    span: 1
  },{
    name: "Kom Werken Bij Megekko",
    url: "https://www.megekko.nl/info/vacature",
    img: "240515_banner_Werken-Bij_v2.jpg",
    span: 1
  },
]

</script>

<template>
  <div>
      <div style="width: 1000px; margin: 0 auto;">
        <Nav v-if="isDesktop" />

        <Carousel />

        <section style="margin: 12px 0">
          <a class="banner" href="https://www.megekko.nl/info/amd-choose-2-games-actie" target="_self">
            <img src="../assets/stuff/240603_banner_AMD_Gamebundel_Actiepagina.png"
                 alt="AMD Game bundel - Choose 2 games">
          </a>
        </section>

        <Displays :displays="displays" />

        <Recent />

        <Displays :displays="displays2" />

        <Populair />
      </div>
  </div>
</template>

<style scoped>
@import "../assets/stuff/css2.css";
@import "../assets/stuff/style_v9.css.php";
@import "https://www.megekko.nl/templates/basic/favicon.ico";
@import "../assets/stuff/kiyoh.min.css";
@import "../assets/stuff/style.css";



</style>