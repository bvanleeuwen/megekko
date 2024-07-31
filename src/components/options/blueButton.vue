<script setup lang="ts">
defineProps<{
  icon: String
  text?: String
}>()
</script>

<template>
  <button type="submit">
    <v-icon :name="icon" />
    <span v-if="text">{{ text }}</span>
  </button>
</template>

<style scoped lang="scss">
button {
  min-height: 48px;
  padding: 0 12px;
  display: flex;
  align-items: center;
  gap: 8px;

  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  color: white;
  text-wrap: nowrap;

  border: none;
  background: #008FD5;
  border-radius: 8px;

  -webkit-transition: all 0.1s;
  -moz-transition: all 0.1s;
  transition: all 0.1s;

  &:hover {
    cursor: pointer;
    filter: brightness(0.8);
  }

  svg {
    width: 24px;
    height: 24px;
  }
}
</style>