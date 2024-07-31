<script setup>
defineProps({
  displays: Array
})
</script>

<template>
  <section>
    <a v-for="display in displays" :href="display.url" target="_self" :style="{gridColumn: display.span}">
      <img :src="`src/assets/stuff/${display.img}`"
           :alt="display.name">
    </a>
  </section>
</template>

<style scoped>
section {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(45%, 1fr)) ;
  justify-content: space-between;
  row-gap: 16px;
}

section a img {
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}

section a:hover img {
  filter: brightness(1.1);
}

@media only screen and (min-width: 1024px) {
  section {
    grid-template-columns: repeat(auto-fit, 320px);
  }
}

</style>