import './assets/main.css'

import {createApp} from 'vue'
import App from './App.vue'

import {OhVueIcon, addIcons} from "oh-vue-icons";
import {
  FaHeart,
  FaShoppingCart,
  FaUser,
  FaSearch,
  FaCaretDown,
  FaClock,
  FaThumbsUp,
  FaExclamationCircle,
  FaCheck,
  MdCheckbox,
  MdCheckboxoutlineblank,
  MdShare,
  MdSend,
  MdLocationpin,
  MdCalendarmonth,
  MdClose
} from "oh-vue-icons/icons";

addIcons(FaHeart, FaShoppingCart, FaUser, FaSearch, FaCaretDown, FaClock, FaThumbsUp, FaExclamationCircle, FaCheck, MdCheckbox, MdCheckboxoutlineblank, MdShare, MdSend, MdLocationpin, MdCalendarmonth, MdClose );

const app = createApp(App)
app.component("v-icon", OhVueIcon);
app.mount('#app')
