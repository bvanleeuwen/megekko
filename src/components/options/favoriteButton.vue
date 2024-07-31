<script setup lang="ts">

import SmallButton from "@/components/options/smallButton.vue";

defineProps<{
  hasFavorited: boolean
  favorites: number
}>()

</script>

<template>
  <div class="favorite">
    <small-button icon="fa-heart" :color="hasFavorited ? '#c83c3c' : '#4C4D4E'" hover-color="#c83c3c" />
    <p :style="{color: hasFavorited ? '#c83c3c' : '#4C4D4E'}">{{ favorites }}</p>
  </div>
</template>

<style scoped>
.favorite {
  position: relative;
  display: flex;
  place-items: center;
  margin-left: auto;

  font-size: 13px;
}

p {
  width: 100%;
  position: absolute;
  bottom: -8px;
  left: 0;
  display: flex;
  justify-content: center;
}

</style>