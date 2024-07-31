<script setup lang="ts">

import {ref} from "vue";

defineProps<{
  min?: number
  max?: number
}>()

function getParsed(currentFrom, currentTo) {
  const from = parseInt(currentFrom.value, 10);
  const to = parseInt(currentTo.value, 10);
  return [from, to];
}

function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
  const rangeDistance = to.max-to.min;
  const fromPosition = from.value - to.min;
  const toPosition = to.value - to.min;
  controlSlider.style.background = `linear-gradient(
      to right,
      ${sliderColor} 0%,
      ${sliderColor} ${(fromPosition)/(rangeDistance)*100}%,
      ${rangeColor} ${((fromPosition)/(rangeDistance))*100}%,
      ${rangeColor} ${(toPosition)/(rangeDistance)*100}%,
      ${sliderColor} ${(toPosition)/(rangeDistance)*100}%,
      ${sliderColor} 100%)`;
}

const fromSlider = document.querySelector('#fromSlider');
const toSlider = document.querySelector('#toSlider');
const fromInput = document.querySelector('#fromInput');
const toInput = document.querySelector('#toInput');
// fillSlider(fromSlider, toSlider, '#C6C6C6', '#25daa5', toSlider);
// setToggleAccessible(toSlider);


const minSlider = ref(0)
const maxSlider = ref(100)

</script>

<template>
  <div class="container">
    <div class="slider">
      <span class="connect" :style="{
        left: minSlider - min + 'px',
        transform: `translateX(${(minSlider / 100)}px) scaleX(${(maxSlider - minSlider) / (max || 100)})`
      }" />
      <input id="fromSlider" type="range" :min="min || 0" :max="max || 100" v-model="minSlider" />
      <input id="toSlider" type="range" :min="min || 0" :max="max || 100" v-model="maxSlider"/>
    </div>
    <div class="output">
      <p>{{ minSlider }}</p>
      <p>{{ maxSlider }}</p>
    </div>
  </div>

</template>

<style scoped lang="scss">
.slider {
  min-height: 20px;
  position: relative;
  display: flex;
  align-items: center;
}

.connect {
  width: 100%;
  height: 3px;
  position: absolute;
  right: 0;
  background: #8CD50B;
  z-index: 2;
}

.output {
  display: flex;
  justify-content: space-between;

  font-size: 13px;
}

input[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  pointer-events: all;
  width: 16px;
  height: 16px;
  background-color: #8CD50B;
  border-radius: 50%;
  cursor: pointer;
}

input[type=range]::-moz-range-thumb {
  width: 32px;
  height: 32px;

  -webkit-appearance: none;
  appearance: none;
  pointer-events: all;
  background: #fff;
  border: none;
  border-radius: 50%;
  cursor: pointer;
}

input[type="range"] {
  width: 100%;
  height: 3px;
  position: absolute;

  -webkit-appearance: none;
  appearance: none;
  background: #C6C6C6;
  border-radius: 8px;
  pointer-events: none;
}

#fromSlider {
  height: 0;
  z-index: 1;
}

</style>