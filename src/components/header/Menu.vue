<script setup>

import {useMediaQuery} from "@vueuse/core";

const isDesktop = useMediaQuery('(min-width: 1024px)')
</script>

<template>
  <div class="menu">
    <a class="menuItem" href="">
      <span id="account_name" v-if="isDesktop">ACCOUNT</span>
      <v-icon name="fa-user" />
    </a>
    <a class="menuItem" href="https://www.megekko.nl/account/verlanglijst/" rel="nofollow">
      <v-icon name="fa-heart" />
      <span class="menuItemExtra" id="header_verlanglijst_aantal">1</span>
    </a>
    <a class="menuItem" href="https://www.megekko.nl/winkelmand/" rel="nofollow">
      <v-icon name="fa-shopping-cart" />
      <span class="menuItemExtra" id="header_winkelmand_aantal">1</span>
    </a>
  </div>
</template>

<style scoped>
@import "../../assets/header/menu.scss";
</style>