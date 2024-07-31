<script setup>
import Checkout from "@/components/checkout/checkout.vue";
import {ref} from "vue";
import {useElementBounding, useWindowScroll} from "@vueuse/core";
import Breadcrumbs from "@/components/breadcrumbs.vue";

const props = defineProps({
  product: Object
})

const thumbnails = [...Array(props.product.imgAmount).keys()].map(el => (el + 1) + "_" + props.product.img)

const imageIndex = ref(1);

const { y } = useWindowScroll({ behavior: 'smooth' })
const el = ref(null)
const elementBounding = useElementBounding(el)

function scrollToSpecs() {
  y.value = elementBounding.y.value - 68
}

</script>

<template>
<main>
  <div class="heading">
    <h1>{{ product.name }}</h1>
  </div>

  <div class="hero">
    <section class="wrapper">
      <div class="tags">
        <p v-for="tag in product.tags" :title="tag.tooltip">{{tag.name}}</p>
      </div>
      <div class="media">
        <div class="thumbnails">
          <div class="thumbnailOverflow">
            <div v-for="(thumbnail, index) in thumbnails"
                 :class="{ active: imageIndex === index + 1 }"
                 @mouseover="imageIndex = index + 1"
            >
              <img :src="`src/assets/stuff/${thumbnail}`" :alt="product.name">
            </div>
          </div>
        </div>
        <div class="mainImage">
          <img :src="`src/assets/stuff/${imageIndex}_${product.img}`" :alt="product.name">
        </div>
      </div>
    </section>

    <Checkout :product="product" />
  </div>

  <div class="info">
    <section>
      <h2>Belangrijkste specificaties</h2>
      <div class="grid">
        <div v-for="spec in product.specs.preview">
          <p>{{ spec.name }}</p>
          <p>{{ spec.value }}</p>
        </div>
      </div>
      <a @click="scrollToSpecs">Bekijk hier alle specificaties</a>
    </section>

    <section>
      <h2>Productomschrijving</h2>
      <p>{{ product.description }}</p>
    </section>

    <section ref="el">
      <h2>Specificaties</h2>
      <p>{{ product.specs.full }}</p>
    </section>

    <p>{{ product.description }}</p>
    <p>{{ product.description }}</p>
    <p>{{ product.description }}</p>
    <p>{{ product.description }}</p>
    <p>{{ product.description }}</p>
  </div>

</main>
</template>

<style scoped>
@import "product.scss";
</style>