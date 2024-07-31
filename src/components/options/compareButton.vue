<script setup>

import {ref} from "vue";

const compare = ref(false)

</script>

<template>
  <button @click="compare = !compare">
    <v-icon v-if="compare" name="md-checkbox" fill="#8CD50B" />
    <v-icon v-else name="md-checkboxoutlineblank" fill="#8CD50B" />
    Vergelijk product
  </button>
</template>

<style scoped lang="scss">
button {
  display: flex;
  align-items: center;
  gap: 8px;

  font-size: 14px;
  font-weight: 600;
  text-wrap: nowrap;
  text-transform: uppercase;
  color: #4C4D4E;
  border: none;
  background: none;
  cursor: pointer;

  -webkit-transition: all 0.1s;
  -moz-transition: all 0.1s;
  transition: all 0.1s;

  &:hover {
    cursor: pointer;
    filter: brightness(0.8);
  }
}
</style>