<script setup>

const urls = [
  {
    name: "Monitoren",
    url: "https://www.megekko.nl/Computer/Randapparatuur/Monitoren-en-meer/Monitoren"
  },{
    name: "Laptops",
    url: "https://www.megekko.nl/Computer/Laptops-en-meer/Laptops"
  },{
    name: "Videokaarten",
    url: "https://www.megekko.nl/Computer/Componenten/Videokaarten"
  },{
    name: "Processoren",
    url: "https://www.megekko.nl/Computer/Componenten/Processoren"
  },{
    name: "Geheugen",
    url: "https://www.megekko.nl/Computer/Componenten/Geheugen"
  },{
    name: "Moederborden",
    url: "https://www.megekko.nl/Computer/Componenten/Moederborden"
  },{
    name: "SSD",
    url: "https://www.megekko.nl/Computer/Componenten/SSD-Solid-state-drive-"
  },{
    name: "Academy",
    url: "https://www.megekko.nl/info/megekko-academy"
  }
]

</script>

<template>
  <section>
    <a v-for="url in urls" :href="url.url" target="" rel="noopener">{{ url.name }}</a>
  </section>
</template>

<style scoped>
section {
  padding: 0 24px;
  display: flex;
  justify-content: space-between;
}

section a {
  padding: 16px 0;

  color: #4C4D4E;
  font-size: 14px;
  font-weight: 600;
  text-decoration: none;

  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
}

section a:hover {
  transform: scale(0.9);
}

section a:last-child {
  color: #8CD50B;
}

</style>