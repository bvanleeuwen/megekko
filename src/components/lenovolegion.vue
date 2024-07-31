<script setup>

import Product from "@/components/product/product.vue";
import Breadcrumbs from "@/components/breadcrumbs.vue";

const product = {
  name: "Lenovo Legion Go AMD Ryzen Z1 Extreme Handheld Gaming PC",
  img: "Lenovo-Legion-Go-AMD-Ryzen-Z1-Extreme-Handheld-Gaming-PC.jpg",
  imgAmount: 13,
  tags: [
    {
      name: "gratis verzending"
    },
    {
      name: "gratis in-ear"
    }
  ],
  sellOut: false,
  inPopupstore: true,
  price: {
    standard: {
      euro: 749
    },
    sale: {
      euro: 699,
      endDate: "30-06"
    }
  },
  releaseDate: {
    month: 9,
    year: 2023
  },
  EAN: 197532748033,
  vendorCode: "83E1001SMH",
  stock: {
    deliveryDays: 1,
    amount: 12
  },
  groups: ["Computer", "Laptops en meer", "Handheld Gaming"],
  specs: {
    preview: {
      brand: {
        name: "Merk",
        value: "Lenovo"
      },
      processorSerie: {
        name: "Processor serie",
        value: "Ryzen Z1"
      },
      processorModel: {
        name: "Processor model",
        value: "Z1 Extreme"
      },
      memoryCapacity: {
        name: "Geheugencapaciteit",
        value: 16
      },
      ssdCapacity: {
        name: "SSD opslagcapaciteit",
        value: 512
      },
    },
    full: {
      merk: "Lenovo",
      processor: {
        serie: "Ryzen Z1",
        model: "Z1 Extreme",
        cores: 8,
      },
      geheugenCapaciteit: 16,
      SSDOpslagcapaciteit: 512,
    }
  },
  description: "Ervaar de ongeëvenaarde veelzijdigheid met Legion Go, de ultieme flexibele gamingtool. In de handheld modus transformeer je je geliefde palmapparaat in een draagbare gaming-pc, perfect voor gamen onderweg. Maak je Legion Go vast aan je favoriete Legion-beeldscherm en nestel je op je bank voor een ontspannende maar meeslepende gamesessie met de ergonomische controllers. De FPS-modus biedt samen met de optionele controllerbasis precisie op maat, waarbij je de linkerkant gebruikt als WASD-toetsen en de rechterkant als verticale muis om beter te kunnen richten. Ontdek nog meer augmented reality met de compatibele Legion-bril en geniet van gamen op de meest comfortabele manier. Legion Go komt tegemoet aan elke gamingbehoefte en biedt ongeëvenaarde flexibiliteit voor je gamingactiviteiten.\n" +
      "\n" +
      "-De Lenovo Legion Go tilt mobiel gamen naar buitengewone hoogten. Door ons unieke 8,8\" QHD+ Lenovo PureSight Gaming-scherm word je met meeslepende beelden overspoeld. Je kunt de visuele precisie dynamisch aanpassen van 1600p tot 800p en de vernieuwingsfrequentie instellen tussen een snelle 144 Hz en een energiebesparende 60 Hz. Dit alles komt tot leven op een responsief 10-punts touchscreen.\n" +
      "\n" +
      "-Dompel jezelf onder in de ongeëvenaarde kracht en prestaties van Lenovo Legion Go. Dankzij de aandrijving van de geheel nieuwe AMD Ryzen™ Z1-serie geniet je van toonaangevende gamevoorzieningen, een ongelooflijke batterijduur en een meeslepend spel. De AMD Ryzen™ Z1-serie brengt baanbrekende beelden tot leven, zodat je je game overal mee naartoe kunt nemen.\n" +
      "\n" +
      "-Het geavanceerde thermische ontwerp van Legion Go zorgt voor probleemloos gamen, met een efficiënte koeling en een royale luchtstroom. De ultradunne koelvinnen voeren de warmte vakkundig af voor optimale prestaties. Je kunt helemaal opgaan in je gamingwereld terwijl ons systeem koel en stil blijft werken, en de perfecte balans tussen kracht en warmte bereikt.\n" +
      "\n" +
      "-Gamen verloopt probleemloos op de Legion Go met 16 GB 7500 MHz LPDDR5X RAM en de PCIe Gen4-opslag met 512 GB, wat zorgt voor soepele multitasking en voldoende ruimte voor games, media en bestanden. Breid eenvoudig uit met de micro-SD-kaartsleuf, zodat je nog meer van je favoriete games kunt spelen. Dankzij de ruime en uitbreidbare opslag kun je ononderbroken spelen en hoef je niet meer oude games te verwijderen voor nieuwe.\n" +
      "\n" +
      "-Game langer met de 49,2 Wh-batterij van de Legion Go, zodat je kunt doorgaan zonder vaak op te laden. Laad snel bij met Super Rapid Charge Express en blijf gamen met de Power Bypass-modus wanneer de stekker in het stopcontact zit. Beperkingen door oververhitting behoren tot het verleden en met onze ondersteuning voor batterijoptimalisatie kun je genieten van langere sessies.\n" +
      "\n" +
      "De baanbrekende Legion Go-joysticks met RGB-verlichting geven een gamehaleffect en laten traditionele joysticks achter zich. Zeg vaarwel tegen het driften van de joystick en verwelkom de blijvende, responsieve bediening. Onze afneembare Legion TrueStrike-controllers zijn ontworpen voor comfort en precisie, met voorzieningen zoals antislipoppervlak, toewijsbare bedieningselementen en een geïntegreerd trackpad. Schakel soepel over van gamen op de pc naar handheld gaming. FPS-enthousiastelingen kunnen bovendien genieten van nauwkeurige bediening met onze unieke FPS-modus met een optionele controllerbasis. Dankzij ons ergonomische ontwerp game je langer zonder ongemak. Speel als een professional met Legion Go.\n" +
      "\n" +
      "Legion Space maakt van jou een niet-aflatende gamer en combineert een uitgebreid universum met games van topplatforms in één naadloze hub. Schakel moeiteloos over van Xbox Game Pass naar Gamesplanet en nog veel meer. Geniet onderweg van gaming in de cloud, stream vanaf je Legion-pc of dompel je onder in Android-emulatie. Kies voor een unieke reis en ontgrendel grenzeloze gamingmogelijkheden. Geef je avontuur bovendien een vliegende start met drie gratis maanden Xbox Game Pass Ultimate, exclusief voor Legion Go-gebruikers. En dat is nog niet alles: Legion Go is volledig aanpasbaar, met een groot aantal instellingen om je game-ervaring te verbeteren en uniek te maken."
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