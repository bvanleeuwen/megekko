<script setup>
import {useMediaQuery, useWindowScroll} from '@vueuse/core'
import Menu from "@/components/header/Menu.vue";
import {computed, customRef, ref} from "vue";
import Search from "@/components/header/Search.vue";

const { y } = useWindowScroll()
const isDesktop = useMediaQuery('(min-width: 1024px)')

const modalOpen = ref(false)
const currentTab = ref(0)

const tabs = ref([
  {name: "Computer", nav: 26},
  {name: "Componenten", nav: 1913},
  {name: "Randapparatuur", nav: 1914},
  {name: "Kabels", nav: 2073},
  {name: "Netwerk", nav: 2093}
])

const quickViews = ref([
  {name: "Laptops", url: "", src: "240515_homepage_blok_Videokaarten.jpg"},
  {name: "Gaming laptops", url: "", src: "240423_homepage_blok_laptops_home&office.jpg"},
  {name: "PC Systemen", url: "", src: "230330_homepage_banner_actieprijzen_V3.jpg"},
  {name: "Monitoren", url: "", src: "240423_homepage_blok_DesktopPCSystemen.jpg"},
  {name: "Magekko fanshop", url: "", src: "230330_homepage_banner_zelfbouwsystemen_V2.jpg"},
  {name: "Uitverkoop", url: "", src: "231228_homepage_blok_MedionLaptop_V5.jpg"}
])

async function callAPI(index) {
  // const post = await fetch(`https://www.megekko.nl/scripts/shownav/v3/index.php?nav=${index}&mode=json`).then((r) => r.json())
  const post = [{
      name: "IP camera's",
      categories: ["IP camera's"]
    }, {
      name: "Netwerkdozen",
      categories: ["Netwerkdozen"]
    }, {
    name: "Netwerk",
    categories: ["Netwerk"]
  }, {
    name: "Netwerk video encoders",
    categories: ["Netwerk video encoders"]
  }, {
    name: "Netwerk bedraad",
    categories: [
        "Netwerk switch",
        "USB netwerkadapter","Gateways",
        "Bedrade Routers",
        "PoE adapters",
        "Modulaire connectoren",
        "Netwerk splitters",
        "Patch panelen",
        "Trancievers",
        "Printerserver",
        "Keystonemodules",
        "Netwerk Converters",
        "Installatiemateriaal",
        "Glasvezeladapters",
        "Punchtools",
        "Netwerk extenders bedraad",
        "Krimptangen",
        "Via het stroomnet"
    ]
  }, {
    name: "Netwerk draadloos",
    categories: [
      "Accesspoint",
      "Routers",
      "Mesh Wi-Fi routers",
      "USB Wi-Fi sticks",
      "Bluetooth sticks",
      "Wi-Fi Antennes",
      "Range Extenders",
      "Mobiele 3/4/5G routers",
      "Bluetooth ontvangers"
    ]
  }, {
    name: "Via het stroomnet",
    categories: ["Via het stroomnet"]
  }, {
    name: "NAS",
    categories: ["NAS"]
  }, {
    name: "Netwerk-kabels en meer",
    categories: ["Netwerk-kabels en meer"]
  }, {
    name: "Smart Home",
    categories: ["Smart deurbellen", "Smart Plugs", "Smart Home schakelaars"]
  }
  ]
  return post
}

const content = ref([])
const rowIndices = ref([0])

function getContent() {
  callAPI(tabs.value[currentTab.value].nav).then(
      response => {
        content.value = response

        // TODO make this a grid

        // let array = Array.from(content.value)
        // let size = 0;
        // let startPositions = []
        // array.forEach(row => {
        //   size += row.categories.length
        //   startPositions.push(size) // index
        // })
        // size += array.length
        // console.log(size)
        // console.log(startPositions)
        //
        // const split = size / 4
        // const splitIndices = [split, split * 2, split * 3];
        // console.log(splitIndices)
        //
        // splitIndices.forEach(index => {
        //   rowIndices.value.push(startPositions[startPositions.findIndex((el) => el > Math.round(index)) - 1])
        // })
        //
        // console.log(rowIndices.value)
      });
}
getContent()

</script>

<template>
  <header :class="{ closed: y > 0 && isDesktop }">

    <div class="container">
      <div class="info" v-if="isDesktop">
          <div class="info_box">
            <v-icon name="fa-clock" />
            <p>VOOR 22:30 BESTELD? MORGEN IN HUIS!</p>
          </div>
          <div class="info_box">
            <v-icon name="fa-thumbs-up" flip="horizontal" />
            <p>30 DAGEN NIET-GOED-GELD-TERUG-GARANTIE</p>
          </div>
          <div class="info_box">
            <img src="../../assets/stuff/tweakers_logo_RGB.svg" alt="Megekko beste webshop">
            <a href="https://www.megekko.nl/info/tweakers-awards-2023-2024">BESTE WEBSHOP 2023 / 2024</a>
          </div>
          <div class="info_box">
            <v-icon name="fa-exclamation-circle" />
            <a href="https://www.megekko.nl/info/megekko-oranje-shirts">Gratis EK-Shirt</a>
          </div>
      </div>

      <div class="wrapper">

        <a class="logo" href="https://www.megekko.nl/home/">
          <img v-if="isDesktop" src="../../assets/stuff/megekkoLogo2021.svg" alt="Megekko logo">
          <img v-else src="../../assets/stuff/megekkoLogo2021Dark.svg" alt="Megekko logo">
        </a>

        <Search />

        <Menu />

      </div>

      <a class="mobileBanner" v-if="!isDesktop">
        Gratis EK-Shirt
      </a>

    </div>

    <div class="categoryPicker" v-if="modalOpen" :class="{ closed: y > 0 && isDesktop }">
      <div class="quickView">
        <a :href="view.url"
           v-for="view in quickViews"
           :key="view.name"
           :style="{ backgroundImage: `url(/src/assets/stuff/${view.src})` }"
        ></a>
      </div>
      <div class="tabWrapper">
        <div class="tabs">
          <span v-for="(tab, index) in tabs"
                @click="currentTab = index; getContent(tab.nav)"
                :class="{ active: currentTab === index }"
                :key="tab.name"
          >{{tab.name}}</span>
          <div class="activeTabBackground" :style="{ left: currentTab * 160 + 'px' }"/>
        </div>
        <div class="content">
          <div class="contentItem" v-for="item in content">
            <a :href="item.url" class="itemName">{{item.name}}</a>
            <a :href="category.url" class="itemCategory" v-for="category in item.categories">{{category}}</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="categoryPickerOverlay" v-if="modalOpen" @click.stop="modalOpen = false" />
</template>

<style scoped>
@import "../../assets/header.css";
</style>