<script setup>

const products = [
  {
    name: "Nedis High Speed HDMI-Cable Ethernet | HDMI-connector - HDMI-connector | 2.50 m | Anthracite",
    img: "1_Nedis-High-Speed-HDMI-Cable-Ethernet-HDMI-connector-HDMI-connector-2-50-m-Anthracite.jpg",
    tags: [
      {
        name: "op=op"
      }
    ],
    price: {
      euro: 4,
      cent: 40
    }
  },{
    name: "MSI MAG Infinite S3 14NUE7-1837EU i7 14700F RTX 4070 Gaming PC",
    img: "1_MSI-MAG-Infinite-S3-14NUE7-1837EU-i7-14700F-RTX-4070-Gaming-PC.jpg",
    tags: [
      {
        name: "gratis verzending"
      }
    ],
    price: {
      euro: 1699
    }
  },{
    name: "Megekko oranjeshirt maat S",
    img: "1_Megekko-oranjeshirt-maat-S.jpg",
    tags: [
      {
        name: "op=op"
      }
    ],
    price: {
      euro: 16,
      cent: 95
    }
  },{
    name: "Haiqoe Ethernet jack Toolless CAT5E UTP Keystone wit",
    img: "1_Haiqoe-Ethernet-jack-Toolless-CAT5E-UTP-Keystone-wit.jpg",
    tags: [
      {
        name: "op=op"
      }
    ],
    price: {
      euro: 4,
      cent: 1
    }
  },{
    name: "Brother DK-11219 Round Labels",
    img: "1_Brother-DK-11219-Round-Labels.jpg",
    tags: [
      {
        name: "op=op"
      }
    ],
    price: {
      euro: 4,
      cent: 38
    }
  },{
    name: "AMD Ryzen 7 7800X3D Processor",
    img: "1_AMD-Ryzen-7-7800X3D-Processor.jpg",
    price: {
      euro: 339
    }
  },{
    name: "Tecco",
    img: "1_Tecco.jpg",
    tags: [
      {
        name: "op=op"
      },{
        name: "Nieuw",
        tooltip: "Product toegevoegd op 20-09-2024"
      }
    ],
    price: {
      euro: 49,
      cent: 95
    }
  },{
    name: "Lexar NM790 2TB M.2 SSD",
    img: "1_Lexar-NM790-2TB-M-2-SSD.jpg",
    price: {
      euro: 118,
      cent: 90
    }
  },{
    name: "MSI B650 GAMING PLUS WIFI moederbord",
    img: "1_MSI-B650-GAMING-PLUS-WIFI-moederbord.jpg",
    tags: [
      {
        name: "+ STEAM VOUCHER"
      }
    ],
    price: {
      euro: 159
    }
  },{
    name: "MSI MAG A850GL PCIE5 PSU / PC voeding",
    img: "1_MSI-MAG-A850GL-PCIE5-PSU-PC-voeding.jpg",
    tags: [
      {
        name: "+ 10 euro giftcard"
      }
    ],
    price: {
      euro: 129
    }
  },
]

</script>

<template>
  <section>
    <h1>RECENT BEKEKEN</h1>
      <div class="topContainerProduct">
        <div class="horizontal-scroll">

          <template v-for="product in products">
            <div class="productBlock">
              <h2>{{ product.name }}</h2>
              <img :src="`src/assets/stuff/${product.img}`" :alt="product.name" draggable="false">

              <div v-if="product.tags" class="tags">
                <span v-for="tag in product.tags" :title="tag.tooltip">{{ tag.name }}</span>
              </div>

              <div class="price">
                <span class="euro">{{product.price.euro}}</span>
                <span class="comma">,</span>
                <span v-if="product.price.cent" class="cent">{{ product.price.cent }}</span>
                <span v-else class="cent">-</span>
              </div>
            </div>
          </template>

        </div>
      </div>
  </section>
</template>

<style scoped>
section {
  margin: 32px 0 56px 0;
}

section h1 {
  margin-bottom: 8px;

  font-size: 20px;
  font-weight: 500;
  color: #8CD50B;
  border-bottom: 1px solid #4C4D4E;
}

.topContainerProduct {
  width: 1000px;
  height: 231px; /*TODO tf is dit */
  overflow-x: hidden;
}

.horizontal-scroll {
  display: flex;
  gap: 8px;
}

.productBlock {
  width: 200px;
  position: relative;
}

.productBlock h2 {
  width: 100%;
  padding: 8px;

  white-space: nowrap;
  overflow-x: hidden;
  text-overflow: ellipsis;
  font-size: 14px;
}

.productBlock img {
  height: 180px;
}

.productBlock .tags {
  position: absolute;
  top: 20%;
  left: 0;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.productBlock .tags span {
  padding: 0 4px;

  font-size: 10px;
  text-transform: uppercase;
  color: white;
  background: #C83C3C;
}

.productBlock .price {
  width: 115px;
  height: 40px;
  position: absolute;
  bottom: 0;
  right: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  font-weight: 500;
  color: white;
  background: linear-gradient(135deg, #84c100 0%, #84c100 89%, #8cd50b 89%, #8cd50b 100%);
}

.productBlock .price .euro {
  font-size: 32px;
}

.productBlock .price .comma {
  font-size: 26px;
}

.productBlock .price .cent {
  font-size: 18px;
}

</style>