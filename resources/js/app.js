import './bootstrap';
import { createApp } from 'vue'
import App from './components/templates/App.vue'
 

//router
import router from './router.js';

//vuetify

import 'vuetify/styles';
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';

//mdi/font
import '@mdi/font/css/materialdesignicons.css';

//pinia
import { createPinia } from 'pinia';

const pinia = createPinia();
const vuetify = createVuetify({
    components,
    directives,
    icons:{
        defaultSet:'mdi'
    }
})
const app = createApp(App)
app.use(pinia)
app.use(vuetify)
app.use(router)
app.mount('#app')