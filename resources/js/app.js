import { createApp } from 'vue'

createApp({
  data() {
    return {
      activeSlider: false,
    }
  },
  mounted() {
   console.log('run vue 3');
  }
}).mount('#app')