import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';

const heroCarousel = document.getElementById('heroCarousel');
if (heroCarousel) {    
    const carousel = new bootstrap.Carousel(heroCarousel, {
        interval: 5000,
        wrap: true
    });
}

const app = createApp(App);
app.mount('#app');