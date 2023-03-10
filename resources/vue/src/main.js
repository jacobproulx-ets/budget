import { createApp } from 'vue'

import App from './App.vue'
import router from './router'

import './assets/styles/main.scss'
import Datepicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'

const app = createApp(App)

app.use(router)
app.component('Datepicker', Datepicker);
app.mount('#app')

