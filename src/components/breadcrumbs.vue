<script setup>
defineProps({
  crumbs: Array
})
</script>

<template>
  <div>
    <p v-for="(crumb, index) in crumbs">{{ crumb }}<span v-if="index !== crumbs.length - 1">▸</span></p>
  </div>

</template>

<style scoped>
div {
  width: 1000px;
  margin: 12px auto 0 auto;
  display: flex;
  gap: 4px;
}

span {
  margin-left: 4px;
}

p {
  font-size: 12px;
  cursor: pointer;
}
</style>