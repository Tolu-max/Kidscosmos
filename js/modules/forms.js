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

const emailRegExp = /^\w+([-]?\w+)*@\w+([-]?\w+)*(\.\w{2,3})+$/;

import {initModal} from "./modal";

const defaults = {
    toast: true,
    position: 'top-end',
    timer: 3000,
    customClass: {
        popup: 'alert_popup',
        title: 'alert_popup-title',
        htmlContainer: 'alert_popup-content',
        closeButton: 'alert_popup-close',
        container: 'alert_popup-container'
    }
}

export function validateForm(target, fieldSelector = '.field') {
    const form = document.querySelector(target);
    const inputsArr = document.querySelectorAll(`${target} ${fieldSelector}`);
    const valid = elem => !elem.classList.contains('error');

    if (form) {
        let notificationText = '';

        if (form.dataset.type === "search") {
            form.addEventListener('keypress', e => {
                let input = document.querySelector(`${target} ${fieldSelector}`);
                if (e.key === "Enter") {
                    e.preventDefault();
                    if (input.value === '') {
                        input.classList.add('error');
                    } else {
                        notificationText = 'Nothing found.';
                        initModal({...defaults, html: `<p class="main">${notificationText}</p>`});
                    }
                } else {
                    input.classList.remove('error');
                }
            })
        }

        form.addEventListener('submit', e => {
            for (let i = 0; i < inputsArr.length; i++) {
                const el = inputsArr[i];
                const value = el.value;
                if (el.classList.contains('required') && value === '') {
                    el.classList.add('error');
                } else if (el.dataset.type === 'email' && !emailRegExp.test(value)) {
                    el.classList.add('error');
                } else if (el.dataset.type === 'tel' && isNaN(+value)) {
                    el.classList.add('error');
                }

                el.addEventListener('input', () => {
                    el.classList.remove('error');
                });
            }

            if (Array.from(inputsArr).every(valid)) {
                inputsArr.forEach(el => {
                    el.classList.remove('error');
                    el.value = '';
                })
                if (form.dataset.type === 'subscription') {
                    notificationText = 'Subscription confirmation has been sent to your Email.';
                } else if (form.dataset.type === 'contacts') {
                    notificationText = 'Your message has been sent. We\'ll reply you as soon as possible.';
                } else if (form.dataset.type === 'reply') {
                    notificationText = 'Your comment is awaiting moderation.';
                } else if (form.dataset.type === 'registration') {
                    notificationText = 'Registration confirmation has been sent to your e-mail address.';
                }

                initModal({...defaults, html: `<p class="main">${notificationText}</p>`});
            }
        })
    }
}

export function validate() {
    validateForm('[data-type="search"]');
    validateForm('[data-type="reply"]');
    validateForm('[data-type="subscription"]');
    validateForm('[data-type="registration"]');
    validateForm('[data-type="contacts"]');
}
