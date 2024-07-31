<script setup lang="ts">

import {useMouseInElement} from "@vueuse/core";
import {ref} from "vue";

defineProps<{
  icon: String
  color?: any
  hoverColor?: any
}>()

const el = ref(null)
const { isOutside } = useMouseInElement(el)

</script>

<template>
  <button @click="">
    <v-icon :name="icon" :fill="!isOutside ? hoverColor : color" ref="el" />
  </button>
</template>

<style scoped lang="scss">
button {
  width: 48px;
  height: 48px;
  padding: 0;

  font-size: 14px;
  font-weight: 500;
  text-wrap: nowrap;
  color: #4C4D4E;
  border: none;
  background: none;
  cursor: pointer;

  svg {
    width: 26px;
    height: 26px;

    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    transition: all 0.2s;
  }
}
</style>