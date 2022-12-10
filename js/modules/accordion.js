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
'use strict';

function drawAccordion() {
    const accordionCards = document.querySelectorAll('.faq_accordion .accordion-collapse');
    const icons = document.querySelectorAll('.faq_accordion-item_header .icon');

    accordionCards.forEach((el, i) => {
        el.addEventListener('show.bs.collapse', () => {
            icons[i].classList.add('transform');
        })
        el.addEventListener('hide.bs.collapse', () => {
            icons[i].classList.remove('transform')
        })
    })

}

export default drawAccordion;