<script setup>
import Product from "@/components/product/product.vue";
import Breadcrumbs from "@/components/breadcrumbs.vue";

const product = {
  name: "MSI MAG Infinite S3 14NUE7-1837EU i7 14700F RTX 4070 Gaming PC",
  img: "MSI-MAG-Infinite-S3-14NUE7-1837EU-i7-14700F-RTX-4070-Gaming-PC.jpg",
  imgAmount: 10,
  tags: [
    {
      name: "gratis verzending"
    }
  ],
  sellOut: false,
  inPopupstore: true,
  price: {
    standard: {
      euro: 1699
    }
  },
  releaseDate: {
    month: 3,
    year: 2024
  },
  EAN: 4711377211291,
  vendorCode: "MAG Infinite S3 14NUE7-1837EU",
  stock: {
    deliveryDays: 1,
    amount: 45
  },
  groups: ["Computer", "PC Systemen", "Gaming PC systemen"],
  specs: {
    preview: {
      brand: {
        name: "Merk",
        value: "MSI"
      },
      processorSerie: {
        name: "Processor serie",
        value: "Intel Core i7"
      },
      processorModel: {
        name: "Processor model",
        value: "14700F"
      },
      dedicatedGraphics: {
        name: "Grafische kaart",
        value: "Nvidia GeForce RTX 4070"
      },
      memoryCapacity: {
        name: "Geheugencapaciteit",
        value: 16
      },
      ssdCapacity: {
        name: "SSD opslagcapaciteit",
        value: 1000
      },
    },
    full: {
      merk: "MSI",
      processor: {
        serie: "Intel Core i7",
        model: "14700F",
        cores: 20,
        snelheid: 5.40,
        chipset: "Intel H610"
      },
      geheugenCapaciteit: 16,
      SSDOpslagcapaciteit: 1000,
      dedicatedGraphics: "Nvidia GeForce RTX 4070",
      Videogeheugen: 12
    }

  },
  description: "De MSI MAG Infinite S3 14NUE7-1837EU gaming desktop levert krachtige prestaties en indrukwekkende graphics voor een meeslepende gaming-ervaring. Uitgerust met een krachtige Intel Core i7-14700F-processor en de nieuwste NVIDIA RTX 4070 grafische kaart, is deze desktop klaar om zelfs de meest veeleisende games aan te kunnen.\n" +
      "\n" +
      "Met zijn slanke en stijlvolle behuizing past de MSI MAG Infinite S3 14NUE7-1837EU perfect in elke gaming setup. De ingebouwde RGB-verlichting zorgt voor een dynamische en aanpasbare sfeer, terwijl de ventilatoren zorgen voor efficiënte koeling, zelfs tijdens lange gaming-sessies.\n" +
      "\n" +
      "Dankzij de ruime opslagmogelijkheden en snelle SSD-opslag, biedt de MSI MAG Infinite S3 14NUE7-1837EU voldoende ruimte voor al je games, programma's en multimedia-inhoud. De desktop wordt geleverd met Windows 11 voorgeïnstalleerd, zodat je direct aan de slag kunt met gamen en productiviteitstaken.\n" +
      "\n" +
      "Met zijn uitgebreide connectiviteitsmogelijkheden, waaronder USB Type-C, HDMI en DisplayPort, is de MSI MAG Infinite S3 14NUE7-1837EU eenvoudig aan te sluiten op je favoriete randapparatuur en externe displays. Daarnaast biedt de desktop WiFi-connectiviteit voor draadloos gemak.\n" +
      "\n" +
      "Kortom, de MSI MAG Infinite S3 14NUE7-1837EU gaming desktop biedt krachtige prestaties, indrukwekkende graphics en stijlvolle vormgeving, waardoor het een ideale keuze is voor serieuze gamers die topprestaties eisen van hun systeem."
}

</script>

<template>
  <main>
    <Breadcrumbs :crumbs="product.groups" />
    <Product :product="product" />
  </main>
</template>

<style scoped>

</style>