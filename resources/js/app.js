require('./bootstrap');

import App from "./Vue/App.vue";
import {createApp} from "vue";

const app = createApp({});

app.use();
app.component('kl-app', App)
app.mount('#app')

