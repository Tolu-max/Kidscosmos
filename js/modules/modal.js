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

import Swal from 'sweetalert2/dist/sweetalert2.js'
import {validateForm} from "./forms";

export function initModal(settings, customPopupClass) {
    Swal.fire({
        showClass: {
            popup: 'fadeIn'
        },
        hideClass: {
            popup: 'fadeOut'
        },
        showConfirmButton: false,
        showCloseButton: true,
        closeButtonHtml: `
                <i class="icon-close"></i>
            `,
        customClass: {
            container: 'modal',
            popup: customPopupClass ? `modal_popup ${customPopupClass}` : 'modal_popup',
            closeButton: 'modal_popup-close',
            htmlContainer: 'modal_popup-content',
        },
        ...settings
    })
}

export function drawTeamPopup(selector = '.team_list-item') {
    const triggerElems = document.querySelectorAll(selector);
    const names = document.querySelectorAll(`${selector} .name`);
    const professions = document.querySelectorAll(`${selector} .profession`);

    triggerElems.forEach((el, i) => {
        let imgSrc = el.dataset.media;
        el.addEventListener('click', () => {
            initModal({
                html: `
                    <div class="wrapper d-md-flex align-items-start align-items-lg-stretch">
                        <div class="media">
                            <picture>
                                <source data-srcset="${imgSrc}.jpg"
                                        srcset="${imgSrc}.webp">
                                <img class="lazy"
                                     data-src="${imgSrc}.jpg"
                                     src="${imgSrc}.jpg"
                                     alt="media">
                            </picture>
                        </div>
                        <div class="main d-flex flex-column justify-content-between">
                            <h3 class="main_name">${names[i].textContent}</h3>
                            <span class="main_text text">${professions[i].textContent}</span>
                            <ul class="main_socials d-flex align-items-center">
                                <li class="main_socials-item">
                                    <a class="link" href="#" target="_blank" rel="noopener noreferrer">
                                        <i class="icon-facebook icon"></i>
                                    </a>
                                </li>
                                <li class="main_socials-item">
                                    <a class="link" href="#" target="_blank" rel="noopener noreferrer">
                                        <i class="icon-youtube-play icon"></i>
                                    </a>
                                </li>
                                <li class="main_socials-item">
                                    <a class="link" href="#" target="_blank" rel="noopener noreferrer">
                                        <i class="icon-linkedin-brands icon"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="main_bio">
                                Donec justo odio, tempus nec risus et, varius tempor turpis. Praesent quam tellus, interdum
                                 vitae mi ut, condimentum tristique nisi. Quisque lobortis leo odio. Nullam eu sapien ullamcorper,
                                  eleifend lorem ultricies, commodo ligula. Nunc a mauris congue elit auctor ullamcorpert
                            </p>
                            <div class="main_about d-flex flex-column">
                                <span class="main_about-item">
                                    <i class="icon-book-solid icon"></i>
                                    <span class="text">12</span> Instructor  Courses
                                </span>
                                <span class="main_about-item">
                                    <i class="icon-users icon"></i>
                                    <span class="text">58,586</span> Learners
                                </span>
                            </div>
                            <a class="main_btn" href="courses.html">View courses <i class="icon-arrow-right-solid icon"></i></a>
                        </div>
                    </div> 
            `
            }, 'modal_popup--team')
        })
    })
}

export function drawSingUpPopop() {
    const trigger = document.getElementById('signUpTrigger');

    trigger.addEventListener('click', () => {
        initModal({
            html: `
                <h2 class="title">Registration</h2>
                <p class="text">
                    The intensive course is now open, which starts on January 8. 
                    You will receive detailed information on admission by mail immediately after registration
                </p>
                <h5 class="subtitle">30 day Free Trial for Lessons and Library</h5>
                <p class="text">our consultant will contact you to clarify further details</p>
                <form class="registration_form d-flex flex-column align-items-center" action="#" method="post"
                  data-type="registration">
                    <input class="field required" type="text" data-type="email" placeholder="Email">
                    <input class="field required" type="text" placeholder="Name">
                    <div class="wrapper">
                        <div class="checkbox">
                            <input type="checkbox" name="dataProcessing" id="dataProcessing" checked>
                            <label for="dataProcessing">I agree to the terms of data processing. </label>
                        </div>
                        <a class="link" href="#">Terms and Conditions</a>
                    </div>
                    <button class="btn btn--gradient" type="submit">
                        <span class="text">Registration</span>
                    </button>
                </form>
            `,
        }, 'modal_popup--register')
        validateForm('[data-type="registration"]');
    })
}