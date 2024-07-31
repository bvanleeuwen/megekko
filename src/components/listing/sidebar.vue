<script setup>
import {ref} from "vue";
import RangeSlider from "@/components/rangeSlider.vue";

const filters = [
  {
    name: "Levertijd",
    query: "levertijd",
    type: "radio",
    options: ["Alle producten tonen", "Direct leverbaar", "Binnen 3 dagen", "Binnen 7 dagen", "Pop-Up Store"]
  },{
    name: "Prijs",
    query: "prijs",
    type: "range"
  },{
    name: "Merk",
    query: "merk",
    type: "checkbox",
    options: ["Asus", "Gainward", "Gigabyte", "INNO3D", "KFA2", "MSI", "Palit", "PNY", "Zotac"]
  }
]

const search = ref("")
const radio = ref(0)
const check = ref([])

</script>

<template>
  <section>
    <div class="search">
      <h3>Zoek in specificaties</h3>
      <input v-model="search" placeholder="Verfijn resultaten" />
    </div>
    <div v-for="filter in filters" :key="filter.query" class="filter">
      <h3>{{ filter.name }}</h3>

      <form v-if="filter.type !== 'range'">
        <div v-for="option in filter.options" :key="option" class="option">
          <input :type="filter.type" :id="option" :value="option" v-model="filter.type" />
          <label :for="option">{{ option }}</label>
        </div>
      </form>

      <template v-else>
        <range-slider :min="0" :max="0" />
      </template>

    </div>
  </section>
</template>

<style scoped lang="scss">
section {
  width: 200px;
  height: fit-content;
  padding: 8px 12px;

  overflow: hidden;
  //background: #E6E6E6;
  //border-radius: 8px;
  border-right: 1px solid #E6E6E6;

  h3 {
    font-size: 14px;
  }

  > div {
    margin-bottom: 8px;
  }
}

.search {

  input {
    width: 100%;
    height: 24px;
    padding: 0 8px;
    margin-top: 4px;

    border-radius: 4px;
    border: 1px solid #E6E6E6;
  }
}

.filter {

  form {
    display: flex;
    flex-direction: column;
    gap: 2px;

    label {
      font-size: 12px;
      cursor: pointer;
    }

    .option {
      display: flex;
      align-items: center;
      gap: 4px;
    }
  }
}
</style>