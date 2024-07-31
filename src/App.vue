<script setup>
import HelloWorld from './components/HelloWorld.vue'
import TheWelcome from './components/TheWelcome.vue'
import Header from "@/components/header/Header.vue";
import {computed, ref} from "vue";
import listing from "@/components/listing/listing.vue";
import Msimag from "@/components/msimag.vue";
import Lenovolegion from "@/components/lenovolegion.vue";
import Vacatures from "@/components/vacatures/vacatures.vue";

const routes = {
  '/': TheWelcome,
  '/msimag': Msimag,
  '/lenovo': Lenovolegion,
  '/listing': listing,
  '/vacatures': Vacatures
}

const currentPath = ref(window.location.hash)

window.addEventListener('hashchange', () => {
  currentPath.value = window.location.hash
})

const currentView = computed(() => {
  return routes[currentPath.value.slice(1) || '/']
})
</script>

<template>
  <Header />

  <component :is="currentView" />
</template>

<style scoped>
</style>
