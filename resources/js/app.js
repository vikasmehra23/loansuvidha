// import './bootstrap';

import { createApp } from 'vue';
import HomeComponent from './components/HomeComponent.vue';

if (document.getElementById('home-page')) {
    const app = createApp({
        components: {
            HomeComponent
        }
    });
    app.mount('#home-page');
}
