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

import initFilter from "./modules/filter";
import {drawTeamPopup} from "./modules/modal";

document.addEventListener('DOMContentLoaded', () => {
    drawTeamPopup();
    initFilter('.list_courses', '.list_tags-tag', {
        itemSelector: '.list_courses-card'
    });
})