<script setup>

import BlueButton from "@/components/options/blueButton.vue";
import SmallButton from "@/components/options/smallButton.vue";
import {ref} from "vue";

const vacatures = [
  {
    name: "Front-end Developer (Vue.JS)",
    salary: {
      start: 2500,
      end: 4500,
      period: "Maand"
    },
    hours: 38,
    location: "Hoofdkantoor Breda",
    activities: [
      "Samen met collega’s werk jij nauw samen aan de backoffice software van Megekko",
      "Je werkt met Vue.js, maar ook HTML, CSS en SQL",
      "Daarbij kijk je naar bestaande functionaliteiten en waar deze te verbeteren of uit te breiden is",
      "Jouw focus zal op de front-end van de applicatie liggen",
      "De gebruikers zijn jouw collega’s, er zijn dus korte lijnen en regelmatig overleg- en feedbackmomenten",
      "We streven er samen elke dag naar om de beste software voor de webshop en de interne processen te bouwen en te onderhouden"
    ],
    requirements: [
      "Je hebt HBO werk- en denkniveau",
      "Je hebt minimaal 2 jaar werkervaring met Vue.js (in combinatie met C#)",
      "Technisch inzicht en interesse in nieuwe technologieën",
      "Je werkt oplossingsgericht",
      "Communicatief vaardig",
      "Je woont in de omgeving van Breda"
    ],
    offers: [
      "Een baan in een jong team waarmee je nog gezellig kunt gaan gamen na werktijd",
      "Doorgroeimogelijkheden zoals naar bijvoorbeeld een senior functie",
      "25 vakantiedagen per jaar",
      "Speciale korting op onze producten, zodat je mooi je pc kunt upgraden!",
      "Voor later ook fijn: een goede pensioenregeling",
      "Een wekelijkse lunchvergoeding! Onze eigen chef-kok zorgt elke dag voor lunch zoals een salade, club sandwich of een kapsalon op de vrijdag.",
      "Gezelligheid bij de personeelsvereniging met verschillende activiteiten en uitjes"
    ]
  }, {
    name: "C# Developer",
    salary: {
      start: 2500,
      end: 4500,
      period: "Maand"
    },
    hours: 38,
    location: "Hoofdkantoor Breda",
    description: "Je komt te werken in ons developers team van 6 collega’s, waarbij jij in samenwerking met 3 andere collega's verantwoordelijk bent voor de backoffice software van Megekko. Deze wordt op dit moment geschreven in C# en Vue.js, daarbij wordt er gekeken hoe functionaliteiten zijn gebouwd in de huidige software en waar deze te verbeteren is. De gebruikers zijn jouw collega’s, er zijn dus korte lijnen en je wordt regelmatig voorzien van feedback. We streven er samen elke dag naar om de beste software voor de webshop en de interne processen te bouwen en te onderhouden.",
    requirements: [
      "Je hebt HBO werk- en denkniveau",
      "Je hebt minimaal 2 jaar werkervaring met C#",
      "Technisch inzicht en interesse in nieuwe technologieën",
      "Je werkt oplossingsgericht",
      "Communicatief vaardig",
      "Je woont in de omgeving van Breda"
    ],
    offers: [
      "Een baan in een jong team waarmee je nog gezellig kunt gaan gamen na werktijd",
      "Doorgroeimogelijkheden zoals naar bijvoorbeeld een senior functie",
      "25 vakantiedagen per jaar",
      "Speciale korting op onze producten, zodat je mooi je pc kunt upgraden!",
      "Voor later ook fijn: een goede pensioenregeling",
      "Een wekelijkse lunchvergoeding! Onze eigen chef-kok zorgt elke dag voor lunch zoals een salade, club sandwich of een kapsalon op de vrijdag.",
      "Gezelligheid bij de personeelsvereniging met verschillende activiteiten en uitjes"
    ]
  }, {
    name: "Retouren medewerker",
    salary: {
      start: 2000,
      end: 2450,
      period: "Maand"
    },
    hours: 38,
    location: "Hoofdkantoor Breda",
    description: "Je kunt van je hobby echt je werk maken bij Megekko. Stel je eens voor: iemand zijn pc doet het niet meer. Dankzij jou kan iemand weer gaan gamen of zijn pc bouwen. Op de afdeling Retouren ben je bezig met bijvoorbeeld de nieuwste videokaarten of andere hardware die retour komt van onze klanten. Je gaat problemen oplossen van deze retour producten en helpt onze klanten per mail. Normaal verwerken we samen op één dag zo’n 150 retour producten. Het is leuk en afwisselend werk, met iedere dag andere producten en andere problemen of klachten. Bij Megekko heb je de ruimte om jouw werk te kunnen doen, zonder dat er op je vingers gekeken wordt. We werken in een gezellig team en iedereen staat voor elkaar klaar.",
    requirements: [
      "Je hebt minimaal een afgeronde mbo-opleiding",
      "Je hebt een goede kennis van ICT hardware, bijvoorbeeld omdat je vrienden of familie vaak helpt met pc problemen",
      "Je bent flexibel en stressbestendig",
      "Je hebt een goede beheersing van de Nederlandse taal in woord en geschrift, zodat je onze klanten per mail kunt helpen",
      "Je woont in de omgeving van Breda"
    ],
    offers: [
      "Een baan in een leuk team waarmee je nog gezellig kunt gaan gamen na werktijd. Je krijgt natuurlijk toegang tot de Megekko Discord groep!",
      "Doorgroeimogelijkheden zoals naar bijvoorbeeld een senior functie",
      "25 vakantiedagen per jaar",
      "Speciale korting op onze producten, zodat je mooi je pc kunt upgraden!",
      "Voor later ook fijn: een goede pensioenregeling",
      "Een wekelijkse lunchvergoeding! Onze eigen chef-kok zorgt elke dag voor lunch zoals een salade, club sandwich of een kapsalon op de vrijdag.",
      "Gezelligheid bij de personeelsvereniging met verschillende activiteiten en uitjes"
    ]
  }, {
    name: "Logistiek medewerker",
    salary: {
      start: 2000,
      end: 2450,
      period: "Maand"
    },
    hours: 38,
    location: "Hoofdkantoor Breda",
    description: "Elke dag verwerk jij samen met collega’s de inkomende goederen: van uitpakken, sorteren, stickeren tot de producten in het magazijn leggen. Je krijgt dus ook als één van de eersten de nieuwste producten in handen. Er is een fijne open werksfeer, collega’s helpen elkaar als dit nodig is en samen zorgen jullie ervoor dat de binnenkomende vracht elke dag verwerkt wordt.\n" +
        "Zo zie je hoe het achter de schermen gaat bij een grote webshop, waarbij je soms ook helpt met orderpicken. Daarnaast zorgt het hele team er samen voor dat het magazijn er elke dag weer netjes uit ziet.",
    requirements: [
      "Je hebt minimaal een MBO3 opleiding afgerond",
      "Je steekt graag je handen uit de mouwen",
      "Je bent stressbestendig",
      "Je hebt een groot verantwoordelijkheidsgevoel",
      "Je kunt snel en nauwkeurig werken",
      "Je beheerst de Nederlandse taal goed in woord en geschrift"
    ],
    offers: [
      "Een baan in een leuk team waarmee je nog gezellig kunt gaan gamen na werktijd",
      "Doorgroeimogelijkheden zoals naar bijvoorbeeld een senior functie",
      "25 vakantiedagen per jaar",
      "Speciale korting op onze producten, zodat je mooi je pc kunt upgraden!",
      "Voor later ook fijn: een goede pensioenregeling",
      "Een wekelijkse lunchvergoeding! Onze eigen chef-kok zorgt elke dag voor lunch zoals een salade, club sandwich of een kapsalon op de vrijdag.",
      "Gezelligheid bij de personeelsvereniging met verschillende activiteiten en uitjes"
    ]
  }, {
    name: "Webshop medewerker",
    salary: {
      start: 2000,
      end: 2450,
      period: "Maand"
    },
    hours: "6 - 12",
    location: "Hoofdkantoor Breda",
    description: "Bij Megekko werk je in een jong team, waarbij je er samen met je collega’s voor zorgt dat de bestellingen van klanten ingepakt en verstuurd worden. Want voor 22.30 uur besteld, is de volgende dag in huis! Dit betekent dat wij elke dag tot ongeveer 23.00 uur open zijn om de bestellingen klaar te maken voor verzending.\n" +
        "\n" +
        "Naast werken vinden we het belangrijk dat er een leuke sfeer is, dus je staat er bij Megekko zeker niet alleen voor. Er zijn ‘s avonds collega’s die producten verzamelen in het magazijn, dit gaat heel eenvoudig met behulp van een handscanner. Daarnaast worden bestellingen door andere collega’s ingepakt en op de juiste manier verstuurd. Om 22.30 uur worden de laatste facturen gemaakt en worden ook deze bestellingen nog klaargemaakt voor verzending. De avond wordt met zijn allen afgesloten en je hebt op deze manier weer een hoop klanten blij gemaakt!\n" +
        "\n" +
        "Je werkt bij ons een avond- of dagdienst, afhankelijk van jouw beschikbaarheid. Mensen met een tussenjaar zijn dus ook van harte welkom.",
    requirements: [
      "Je bent in het bezit van een havo- of vwo-diploma",
      "Je bent 18 jaar of ouder",
      "Je werkt nauwkeurig",
      "Je bent een teamplayer",
      "Je bent minimaal 2 avonden per week beschikbaar",
      "Je woont in de omgeving van Breda"
    ],
    offers: [
      "Een baan in een leuk team waarmee je nog gezellig kunt gaan gamen na werktijd. Je krijgt natuurlijk toegang tot de Megekko Discord groep!",
      "Doorgroeimogelijkheden zoals naar bijvoorbeeld een functie als assistent teamleider",
      "Speciale korting op onze producten, zodat je mooi je pc kunt upgraden of een nieuwe laptop kunt kopen!",
      "Voor later ook fijn: een goede pensioenregeling",
      "Een wekelijkse lunchvergoeding! Onze eigen chef-kok zorgt elke dag voor lunch zoals een salade, club sandwich of een kapsalon op de vrijdag.",
      "Gezellige teamuitjes, om je collega’s nog beter te leren kennen"
    ]
  }, {
    name: "Open sollicitatie",
    description: "Je kunt van je hobby echt je werk maken bij Megekko. Stel je eens voor: iemand zijn pc doet het niet meer. Dankzij jou kan iemand weer gaan gamen of zijn pc bouwen. Op de afdeling Retouren ben je bezig met bijvoorbeeld de nieuwste videokaarten of andere hardware die retour komt van onze klanten. Je gaat problemen oplossen van deze retour producten en helpt onze klanten per mail. Normaal verwerken we samen op één dag zo’n 150 retour producten. Het is leuk en afwisselend werk, met iedere dag andere producten en andere problemen of klachten. Bij Megekko heb je de ruimte om jouw werk te kunnen doen, zonder dat er op je vingers gekeken wordt. We werken in een gezellig team en iedereen staat voor elkaar klaar.",
  }
]

const open = ref(false)
const currentVacature = ref(vacatures[0])

function openModal(vacature) {
  currentVacature.value = vacature
  open.value = true;
}

</script>

<template>
<main>
  <section class="hero">
    <img src="../../assets/stuff/vacature_image_V3.png" alt="Vacature Hero Image" />
    <h1>Werken bij Megekko</h1>
    <p>Megekko is de grootste en populairste webshop voor computer enthousiasten in Nederland met meer dan 900.000 klanten in Nederland en België, dagelijks versturen we meer dan 1.500 pakketten. Ondertussen heeft Megekko 120 medewerkers werkzaam op verschillende afdelingen. We houden ons bezig met het verwerken van de retouren tot aan de ontwikkeling van onze eigen website, en alles wat daar tussen zit!
      <br><br>
       Bij Megekko gaan we voor kwaliteit én gezelligheid. We lunchen elke dag samen in ons bedrijfsrestaurant met onze eigen chef-kok. En elk jaar gaan we er een paar keer gezellig samen op uit. Zo stonden we in de VIP skybox van Breda Live, we gingen een dagje naar de Efteling maar zaten ook met 25 collega’s in een luchtballon. En die collega’s die een parachutesprong maakten met Megekko? Zij genieten nog steeds na van deze bucketlist-ervaring!
    </p>
  </section>

  <section class="content">
    <template v-for="vacature in vacatures">
      <div class="vacature" @click="openModal(vacature)">
        <img src="../../assets/stuff/banner_vacatureafbeeldingen.png" alt="Vacature Footer Image" />
        <div class="socials">
          <small-button icon="fa-heart" color="#ffffff" hover-color="#c83c3c" />
          <small-button icon="md-share" color="#ffffff" hover-color="#8CD50B" />
        </div>

        <h2>{{ vacature.name }}</h2>
        <h3 v-if="vacature.salary">
          {{ vacature.salary.start }} - {{ vacature.salary.end }} per {{ vacature.salary.period }}
        </h3>
      </div>
    </template>
  </section>

  <Teleport to="body">
    <div v-if="open" class="modal">
      <div class="modalOverlay" @click="open = false" />
      <div class="modalBody">
        <img src="../../assets/stuff/banner_vacatureafbeeldingen.png" alt="Vacature Header Image" />
        <div class="heading">
          <div class="title">
            <h2>{{ currentVacature.name }}</h2>
            <h3 v-if="currentVacature.salary">
              {{ currentVacature.salary.start }} - {{ currentVacature.salary.end }} per {{ currentVacature.salary.period }}
            </h3>
          </div>

          <div class="info">
            <div v-if="currentVacature.location">
              <v-icon name="md-locationpin" />
              {{ currentVacature.location }}
            </div>
            <div v-if="currentVacature.hours">
              <v-icon name="md-calendarmonth" />
              {{ currentVacature.hours }} uur
            </div>
          </div>
        </div>

        <blue-button icon="md-send" text="Solliciteer direct!" class="submit" />

        <div class="content">
          <h4>Wat ga je doen?</h4>
          <p v-if="currentVacature.description">{{ currentVacature.description }}</p>
          <ul v-else>
            <li v-for="activity in currentVacature.activities">{{ activity }}</li>
          </ul>

          <h4>Wat verwachten wij van je?</h4>
          <ul>
            <li v-for="requirement in currentVacature.requirements">{{ requirement }}</li>
          </ul>
          <h4>Wat krijg je van ons?</h4>
          <ul>
            <li v-for="offer in currentVacature.offers">{{ offer }}</li>
          </ul>
        </div>

        <button class="close" @click="open = false"><v-icon name="md-close" /></button>
      </div>
    </div>
  </Teleport>

</main>
</template>

<style scoped lang="scss">
main {
  width: 1000px;
  margin: 0 auto 64px auto;

  h1 {
    font-size: 24px;
  }

  section {
    margin-top: 32px;
  }

  .content {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;

    .vacature {
      display: flex;
      flex-direction: column;
      position: relative;

      background: #E6E6E6;
      border-radius: 8px;
      overflow: hidden;
      cursor: pointer;

      &:hover {
        h2 {
          background: #008FD5;
        }

        h3 {
          background: #00a1f3;
        }
      }

      h2 {
        padding: 12px 16px;

        color: white;
        font-size: 22px;
        background: #84c100;

        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        transition: all 0.2s;
      }

      h3 {
        padding: 8px 16px;

        color: white;
        font-size: 18px;
        font-weight: 500;
        text-transform: lowercase;
        background: #8cd50b;

        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        transition: all 0.2s;
      }

      .socials {
        position: absolute;
        top: 0;
        right: 0;
      }

      .footing {
        padding: 16px;
        display: flex;

        button:last-child {
          margin-left: auto;
        }
      }
    }
  }
}


.modal {
  width: 100%;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;

  .modalOverlay {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;

    background: rgba(0, 0, 0, 0.4);
  }

  .modalBody {
    width: 1000px;
    height: 1000px;
    position: relative;
    padding-bottom: 64px;

    background: white;
    border-radius: 8px;
    overflow-x: hidden;
    overflow-y: scroll;
    overscroll-behavior-y: contain;
    z-index: 2;

    .heading {
      padding: 48px 64px 16px 64px;
      display: flex;
      justify-content: space-between;

      .info {
        display: flex;
        flex-direction: column;
        gap: 8px;

        > div {
          display: flex;
          align-items: center;
          gap: 8px;
        }
      }
    }

    h2 {

    }

    h3 {
      text-transform: lowercase;
    }

    .submit {
      margin: 0 64px;
    }

    .content {
      padding: 0 64px;

      h4 {
        margin-top: 16px;
        font-size: 18px;
      }

    }

    .close {
      width: 32px;
      height: 32px;
      position: absolute;
      top: 16px;
      right: 16px;
      display: flex;
      align-items: center;
      justify-content: center;

      color: white;
      background: #4C4D4E;
      border-radius: 50%;
      border: none;
      cursor: pointer;

      -webkit-transition: all 0.1s;
      -moz-transition: all 0.1s;
      transition: all 0.1s;

      &:hover {
        background: #8CD50B;
      }

      svg {
        width: 120%;
        height: 120%;
      }
    }

  }
}



</style>