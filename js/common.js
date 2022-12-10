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

import AOS from 'aos';
import svg4everybody from "svg4everybody";
import LazyLoad from "vanilla-lazyload";
import customSelect from "custom-select/src";
import {Collapse, Tab} from "bootstrap";
import {preventDefault, setCurrentYear, hideCover} from "./modules/helpers";
import {drawNav, scrollToTop} from "./modules/nav";
import drawAccordion from "./modules/accordion";
import initGallery from "./modules/gallery";
import {setParallax} from "./modules/animation";
import timer from "./modules/timer";
import {validate} from "./modules/forms";
import {drawSingUpPopop} from "./modules/modal";

document.addEventListener('DOMContentLoaded', () => {
    preventDefault();
    setCurrentYear();
    svg4everybody();
    AOS.init({
        offset: 30, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 650, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // animation repeat
    });
    setParallax();
    const lazyload = new LazyLoad();
    customSelect('select');
    initGallery('.post-gallery');
    drawNav();
    drawSingUpPopop();
    drawAccordion();
    hideCover();
    timer('.timer', '2022-04-24');
    scrollToTop();
    validate();
})
