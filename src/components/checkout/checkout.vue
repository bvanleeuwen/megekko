<script setup>
import {ref} from "vue";
import CompareButton from "@/components/options/compareButton.vue";
import FavoriteButton from "@/components/options/favoriteButton.vue";
import SmallButton from "@/components/options/smallButton.vue";
import BlueButton from "@/components/options/blueButton.vue";

defineProps({
  product: Object
})

const notes = [
    "Nu bestellen morgen in huis!",
    "Nu gratis verzenden!",
    "30 dagen bedenktermijn!",
    "24 maanden garantie!",
    "Achteraf betalen!"
]

const compare = ref(false)
const favorite = ref(false)
const amount = ref(1)

function decrement() {
  if (amount.value < 2) {
    amount.value = 1
  } else {
    amount.value -= 1
  }
}

function increment() {
  amount.value += 1
}

// TODO fix logic
function getDeliveryDay(deliveryDay) {
  const today = new Date().getDay()
  const delivery = today > 5 ? 3 : deliveryDay + 1
  return new Date(today + delivery).toLocaleDateString("nl-NL", { weekday: 'long' })
}

</script>

<template>
  <div class="checkout">
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

    <div class="notifier">
      <a href="" class="popupstore" v-if="product.inPopupstore">Beschikbaar in onze Pop-Up Store Breda</a>
      <a href="" class="sale" v-if="product.price.sale && product.price.sale.endDate">Actieprijs t/m {{ product.price.sale.endDate }}</a>
      <a href="" class="sale" v-else-if="product.sellOut">Uitverkoop</a>
    </div>

    <div class="stock">
      <p>{{ getDeliveryDay(product.stock.deliveryDays) }}</p>
      <p>{{ product.stock.amount }}</p>
    </div>

    <div class="options">
      <CompareButton />
      <FavoriteButton :favorites="favorites" :has-favorited="hasFavorited" />
      <small-button icon="md-share" hover-color="#8CD50B" />
    </div>

    <div class="cart">
      <div class="amount">
        <button @click="decrement" :class="{ disabled: amount === 1 }">-</button>
        <input type="number" min="1" oninput="validity.valid || (value = '')" v-model="amount" />
        <button @click="increment">+</button>
      </div>
      <blue-button icon="fa-shopping-cart" text="In Winkelmand" />
    </div>

    <div class="notes">
      <p v-for="note in notes"><v-icon name="fa-check" fill="#8CD50B" />{{note}}</p>
    </div>

  </div>
</template>

<style scoped>
@import "checkout.scss";
</style>