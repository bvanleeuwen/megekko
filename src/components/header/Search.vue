<script setup>
import {ref} from "vue";

const modalOpen = ref(false)

</script>

<template>
  <div class="category">
    <button class="categoryButton" @click="modalOpen = !modalOpen">Categorieën</button>

    <div class="search">
      <form name="search" action="https://www.megekko.nl/home/#">
        <input type="search"
               id="searchInputField"
               maxlength="50"
               autocomplete="false"
               data-lpignore="true"
               placeholder="Waar ben je naar op zoek?"
        >
      </form>

    </div>

    <div class="searchIcon">
      <v-icon name="fa-search" />
    </div>
  </div>
</template>

<style scoped>
.category {
  width: 100%;
  display: flex;
  //gap: 4px;
}

.category .categoryButton {
  padding: 0 16px;

  color: #4C4D4E;
  font-size: 15px;
  font-weight: 600;
  font-family: inherit;
  text-transform: uppercase;
  background: #8CD50B;
  border: none;
  border-radius: 8px;

  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}

.category .categoryButton:hover {
  cursor: pointer;
  filter: brightness(0.9);
}

.search {
  flex: 1;
  display: flex;
  align-items: center;
  margin: 0 4px 0 12px;
}

.search form {
  height: 100%;
  flex: 1;
}

.search form input {
  width: 100%;
  height: 100%;
  padding-left: 16px;

  font-size: 14px;
  font-family: inherit;
  border: none;
  border-radius: 8px;
}

.search form input::placeholder {
  color: #B3B3B3;
}

.searchIcon {
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;

  color: white;
  background: #8CD50B;
  border-radius: 8px;

  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}

.searchIcon:hover {
  cursor: pointer;
  filter: brightness(0.9);
}

</style>