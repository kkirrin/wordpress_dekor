import { initNav } from "./module/nav.js";
import { initScroll } from "./module/scroll.js";
import { initObserver } from "./module/observer.js";
import { initPopup } from "./module/popup.js";
import { initStickyHeader } from "./module/sticky-header.js";
import { initNavModal } from "./module/nav-modal.js";
import { initSlider } from "./module/sliders.js";
import { initMobileHeaderAccordion } from './module/mobile-header__accordion.js';
import { initAnimateSocialsBtns } from './module/animateSocialsBtn.js';
import { initSwiperCustom } from './module/swiperCustom.js';
import { initSubMenu } from './module/sub-menu.js';
import { initDropList } from './module/dropList.js';
import { initScrollAnimation } from "./module/scroll-animation.js";
import { initNavMobile } from "./module/nav-mobile.js";



window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    initNav();
    initScroll();
    baguetteBox.run('.gallery-wrapper');
    initObserver();
    initPopup();
    initStickyHeader();
    initNavModal();
    initSlider();
    initMobileHeaderAccordion();
    initAnimateSocialsBtns();
    initSwiperCustom();
    initSubMenu();
    initDropList();
    initScrollAnimation();
    initNavMobile();


    // функция для получения ширины размера устройтва
    function getViewportWidth() {
        return Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    }
    // функция для получения высоты экрана
    function getViewportHeight() {
        return Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
    }
    // функция для получения ширины окна браузера
    function getWindowWidth() {
        return window.innerWidth;
    }

    if(window.innerWidth >= 769) {
        var image = document.querySelectorAll('.parallax__img__first');
        new simpleParallax(image, {
            delay: .6,
            transition: 'cubic-bezier(0,.4,0, .1)'
        });      

        var image__opt = document.querySelector('.image__opt__parallax');
        new simpleParallax(image__opt, {
            delay: .6,
            transition: 'cubic-bezier(10,0,0, 1)'
        });
    }


});
