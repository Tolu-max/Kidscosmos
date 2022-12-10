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

import {initSwiperSlider} from "./modules/slider";

document.addEventListener('DOMContentLoaded', () => {
    initSwiperSlider('.reviews_slider', {
        effect: 'fade',
        fadeEffect: {
            crossFade: true,
        },
        autoplay: true,
        speed: 1500
    })
})