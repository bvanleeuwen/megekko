<script setup>

import {ref} from "vue";
import FavoriteButton from "@/components/options/favoriteButton.vue";
import SmallButton from "@/components/options/smallButton.vue";
import CompareButton from "@/components/options/compareButton.vue";
import AddToCartButton from "@/components/options/blueButton.vue";
import Breadcrumbs from "@/components/breadcrumbs.vue";
import Sidebar from "@/components/listing/sidebar.vue";

const products = ref([
  {
    name: "Gigabyte GeForce RTX 4070 WINDFORCE OC 12G Videokaart",
    img: "1_Gigabyte-GeForce-RTX-4070-WINDFORCE-OC-12G-Videokaart.jpg",
    tags: [
      {
        name: "review actie"
      }
    ],
    sellOut: false,
    inPopupstore: true,
    price: {
      standard: {
        euro: 585
      }
    },
    favorites: 204,
    hasFavorited: false,
    releaseDate: {
      month: 3,
      year: 2023
    },
    EAN: 4719331312930,
    vendorCode: "GV-N4070WF3OC-12GD",
    levering: {
      dagen: 1,
      voorraad: "Uit eigen voorraad leverbaar"
    },
    specs: {
      preview: {
        brand: {
          name: "Merk",
          value: "Gigabyte"
        },
        productSerie: {
          name: "Serie",
          value: "GeForce RTX 4070"
        },
        clockFrequency: {
          name: "GPU Snelheid",
          value: 2490
        },
        cudaCores: {
          name: "CUDA cores",
          value: 5888
        },
        videoMemory: {
          name: "Videogeheugen",
          value: 12
        },
        memoryType: {
          name: "Geheugentype",
          value: "GDDR6X"
        },
      }
    },
  }, {
    name: "MSI GeForce RTX 3060 VENTUS 2X 12G OC Videokaart",
    img: "1_MSI-GeForce-RTX-3060-VENTUS-2X-12G-OC-Videokaart.jpg",
    sellOut: false,
    inPopupstore: true,
    price: {
      standard: {
        euro: 279
      }
    },
    favorites: 142,
    hasFavorited: false,
    releaseDate: {
      month: 2,
      year: 2021
    },
    EAN: 4719072793814,
    vendorCode: "GV-N4070WF3OC-12GD",
    levering: {
      dagen: 1,
      voorraad: "Uit eigen voorraad leverbaar"
    },
    specs: {
      preview: {
        brand: {
          name: "Merk",
          value: "MSI"
        },
        productSerie: {
          name: "Serie",
          value: "GeForce RTX 3060"
        },
        clockFrequency: {
          name: "GPU Snelheid",
          value: 1807
        },
        cudaCores: {
          name: "CUDA cores",
          value: 3584
        },
        videoMemory: {
          name: "Videogeheugen",
          value: 12
        },
        memoryType: {
          name: "Geheugentype",
          value: "GDDR6"
        },
      }
    },
  }, {
    name: "MSI GeForce RTX 4060 VENTUS 2X BLACK 8G OC Videokaart",
    img: "1_MSI-GeForce-RTX-4060-VENTUS-2X-BLACK-8G-OC-Videokaart.jpg",
    sellOut: false,
    inPopupstore: true,
    price: {
      standard: {
        euro: 309
      }
    },
    favorites: 143,
    hasFavorited: false,
    releaseDate: {
      month: 6,
      year: 2023
    },
    EAN: 4711377115421,
    vendorCode: "GeForce RTX 4060 VENTUS 2X BLA",
    levering: {
      dagen: 1,
      voorraad: "Uit eigen voorraad leverbaar"
    },
    specs: {
      preview: {
        brand: {
          name: "Merk",
          value: "MSI"
        },
        productSerie: {
          name: "Serie",
          value: "GeForce RTX 4060"
        },
        clockFrequency: {
          name: "GPU Snelheid",
          value: 2490
        },
        cudaCores: {
          name: "CUDA cores",
          value: 3072
        },
        videoMemory: {
          name: "Videogeheugen",
          value: 8
        },
        memoryType: {
          name: "Geheugentype",
          value: "GDDR6"
        },
      }
    },
  }, {
    name: "ASUS GeForce RTX 4070 SUPER DUAL-RTX 4070S-O12G-EVO Videokaart",
    img: "1_ASUS-GeForce-RTX-4070-SUPER-DUAL-RTX-4070S-O12G-EVO-Videokaart.jpg",
    tags: [
      {
        name: "game: like a dragon"
      }
    ],
    sellOut: false,
    inPopupstore: true,
    price: {
      standard: {
        euro: 309
      },
      sale: {
        euro: 644,
        cent: 90,
        endDate: "30-06"
      }
    },
    favorites: 30,
    hasFavorited: false,
    releaseDate: {
      month: 1,
      year: 2024
    },
    EAN: 4711387475997,
    vendorCode: "90YV0KC0-M0NA00",
    levering: {
      dagen: 1,
      voorraad: "Uit eigen voorraad leverbaar"
    },
    specs: {
      preview: {
        brand: {
          name: "Merk",
          value: "ASUS"
        },
        productSerie: {
          name: "Serie",
          value: "GeForce RTX 4070 Super"
        },
        clockFrequency: {
          name: "GPU Snelheid",
          value: 2550
        },
        cudaCores: {
          name: "CUDA cores",
          value: 7168
        },
        videoMemory: {
          name: "Videogeheugen",
          value: 12
        },
        memoryType: {
          name: "Geheugentype",
          value: "GDDR6X"
        },
      }
    },
  }
])

const breadcrumbs = ["Computer", "Componenten"]

</script>

<template>
<main>
  <Breadcrumbs :crumbs="breadcrumbs" />
  <div class="header">
    <h1>Videokaarten</h1>
    <p>Ontdek de nieuwste videokaarten voor jouw gaming-pc bij Megekko. Het brede scala aan videokaarten, waaronder die van NVIDIA, AMD Radeon en Intel Arc, zorgt ervoor dat er voor iedereen de juiste videokaart tussen zit. Of je nu net je eerste game-pc bouwt of een doorgewinterde gamer bent, jouw gaming-avontuur begint hier.
       Ben je op zoek naar een high-end videokaart met DLSS 3-ondersteuning? Of juist naar een videokaart van AMD Radeon of Intel Arc? Optimaliseer je setup door rekening te houden met de resolutie waarop je wilt gamen. Gaat je voorkeur uit naar 1080p, 1440p of misschien wel 4K?
    </p>
    <div class="shortcuts">
      <a href="">
        <img src="../../assets/stuff/nvidia.png"
             alt="Nvidia videokaarten">
      </a>
      <a href="">
        <img src="../../assets/stuff/amd.png"
             alt="AMD videokaarten">
      </a>
      <a href="">
        <img src="../../assets/stuff/intel.png"
             alt="Intel videokaarten">
      </a>
    </div>
  </div>

  <div class="wrapper">
    <Sidebar />

    <section class="content">
      <template v-for="product in products" :key="product.EAN">
        <div class="product">
          <div class="heading">
            <h2 @click="">{{ product.name }}</h2>
            <FavoriteButton :favorites="product.favorites" :has-favorited="product.hasFavorited" />
            <small-button icon="md-share" hover-color="#8CD50B" />
          </div>
          <div class="tags">
            <p v-for="tag in product.tags" :title="tag.tooltip">{{tag.name}}</p>
          </div>

          <div class="info">
            <img :src="`src/assets/stuff/${product.img}`"
                 :alt="product.name"
                 @click="">
            <div class="specs">
              <div v-for="spec in product.specs.preview">
                <p>{{ spec.name }}</p>
                <p>{{ spec.value }}</p>
              </div>
            </div>
          </div>

          <div class="footing">
            <compare-button />
            <div class="priceContainer">
              <div class="price" :class="{ previous: product.price.sale }" v-if="product.price.standard.euro">
                <span class="euro">{{ product.price.standard.euro }}</span>
                <span class="comma">,</span>
                <span v-if="product.price.standard.cent" class="cent">{{ product.price.standard.cent }}</span>
                <span v-else class="cent">-</span>
              </div>
              <div class="price" v-if="product.price.sale">
                <span class="euro">{{ product.price.sale.euro }}</span>
                <span class="comma">,</span>
                <span v-if="product.price.sale.cent" class="cent">{{ product.price.sale.cent }}</span>
                <span v-else class="cent">-</span>
              </div>
            </div>
            <add-to-cart-button />
          </div>
        </div>
      </template>
    </section>
  </div>

</main>
</template>

<style scoped>
@import "listing.scss";
</style>

