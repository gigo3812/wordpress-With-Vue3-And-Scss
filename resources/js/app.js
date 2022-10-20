import { createApp } from 'vue'

// viewer
import 'viewerjs/dist/viewer.css'
import VueViewer from 'v-viewer'


const App = createApp({
  data() {
    return {
      activeSlider: false,
    }
  },
  methods: {

  },
  mounted() {
    console.log('run vue 3');
  }
});
App.use(VueViewer)
App.mount('#app')