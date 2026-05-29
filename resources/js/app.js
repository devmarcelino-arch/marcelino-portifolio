import './bootstrap';

import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import { Navigation, Pagination } from 'swiper/modules';

document.addEventListener('DOMContentLoaded', () => {

    new Swiper('.mySwiper', {
        modules: [Navigation, Pagination],

        loop: true,
        spaceBetween: 20,

        slidesPerView: 1,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });

    console.log('Swiper TESTE iniciado com sucesso');
});