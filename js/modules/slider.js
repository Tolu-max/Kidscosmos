/**
 * Edison
 * Edison is an Online Education Website Template Kit
 * Exclusively on https://1.envato.market/edison-html
 *
 * @encoding        UTF-8
 * @version         1.0.0
 * @copyright       (C) 2018 - 2022 Merkulove ( https://merkulov.design/ ). All rights reserved.
 * @license         Envato License https://1.envato.market/KYbje
 * @contributors    Lamber Lilith (winter.rituel@gmail.com)
 * @support         help@merkulov.design
 **/
"use strict";

import Swiper, {Navigation, Pagination, Autoplay, EffectFade} from 'swiper';

Swiper.use([Navigation, Pagination, Autoplay, EffectFade]);

// basic swiper initialization
export function initSwiperSlider(container, options) {
    const containerEL = document.querySelector(container);
    if (containerEL) {
        const swiper = new Swiper(container, {
            disableOnInteraction: true,
            pauseOnMouseEnter: true,
            loop: true,
            keyboard: {
                enabled: true,
                onlyInViewport: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            ...options
        });
    }
}