"use strict"
//import '/assets/css/style.scss'
var minusIcon = './assets/icons/minus.svg';
var plusIcon = './assets/icons/plus.svg';

document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.oms-block-12-swiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: '.oms-block-12-swiper-button-next',
            prevEl: '.oms-block-12-swiper-button-prev',
        },
        pagination: {
            el: ".oms-block-12-swiper-pagination",
            type: "fraction",
        },
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 10,
                // slidesPerGroup: 2,
            },
            960: {
                slidesPerView: 3,
                spaceBetween: 10,
                // slidesPerGroup: 3,
            },
            1360: {
                slidesPerView: 4,
                spaceBetween: 10,
                // slidesPerGroup: 4,
            }
        }
    });
    const body = document.querySelector('body');
    const header = document.querySelector('.oms-header');
    const block = document.querySelectorAll('.oms-block-16');
    const menuOpenBtn = document.querySelector('.oms-header-menu-btn');
    const menuCloseBtn = document.querySelector('.oms-menu-close');
    const menuBlock = document.querySelector('.oms-menu');
    const menuLinks = document.querySelectorAll('.oms-menu-wrapper-block-1 a');
    const modal = document.querySelector('.oms-modal');
    const buttonUp = document.querySelector('#button-up');

    if (menuOpenBtn && menuCloseBtn && menuBlock) {
        menuOpenBtn.addEventListener('click', () => {
            menuBlock.classList.remove('hidden');
            body.style.overflow = 'hidden';
        });
        menuCloseBtn.addEventListener('click', () => {
            body.style.overflow = 'initial';
            menuBlock.classList.add('hidden');
        });

        menuLinks.forEach((link) => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const id = event.target.href.split('#')[1];

                const offsetTop = document.querySelector(`#${id}`).offsetTop;
                window.scroll({ top: offsetTop - 106, behavior: 'smooth' });
                body.style.overflow = 'initial';
                menuBlock.classList.add('hidden');
            });
        });
    }

    if (block) {
        block.forEach((el) => {
            const items = el.querySelectorAll('.oms-block-16-item');

            items.forEach((el) => {
                const row = el.querySelector('.oms-block-16-item-row');
                const block2 = el.querySelector('.oms-block-16-item-block-2');
                const block3 = el.querySelector('.oms-block-16-item-block-3');
                const block4 = el.querySelector('.oms-block-16-item-block-4');
                const block3Img = block3.querySelector('img');

                if (row && block2 && block4 && block3Img) {
                    row.addEventListener('click', () => {
                        if (block4.classList.contains('hidden')) {
                            block4.classList.remove('hidden');
                            block2.innerHTML = 'Нажмите, чтобы закрыть';
                            block3Img.src = minusIcon;
                        } else {
                            block4.classList.add('hidden');
                            block2.innerHTML = 'Нажмите, чтобы открыть';
                            block3Img.src = plusIcon;
                        }
                    });
                }
            })
        });
    }

    if (header && buttonUp) {
        document.addEventListener('scroll', () => {
            if (window.scrollY > 0) {
                buttonUp.style.display = 'block';
                header.style.boxShadow = '0 3px 6px rgba(0, 0, 0, 0.16)';
            } else {
                buttonUp.style.display = 'none';
                header.style.boxShadow = 'none';
            }
        });

        buttonUp.addEventListener('click', () => {
            window.scroll({ top: 0, behavior: 'smooth' });
        })
    }

    if (modal) {
        const closeBtn = modal.querySelector('.oms-modal-close');
        const form = modal.querySelector('form');

        closeBtn.addEventListener('click', () => {
            form.reset();
            modal.classList.add('hidden');
            body.style.overflow = 'initial';
        })

        window.fillForm = () => {
            modal.classList.remove('hidden');
            body.style.overflow = 'hidden';
        }
    }

    window.sendMail = (btn) => {
        let form = $(btn).parents('form');
        let id = wbapp.newId('_', 'ax');
        $(form).attr('id') == undefined ? $(form).attr('id', id) : null;
        let params = { url: '/ajax/mail', _event: this, form: '#' + $(form).attr('id') };
        wbapp.ajax(params, function(data) {
            if (data.data.error) {

            } else {
                $(form)[0].reset();
            }
        });
    }

    /*    
            $("*:contains('+7 (')").each(function() {
                if ($(this).find("*:contains('+7 (')").length) return;
                let tel = $(this).text();
                tel = tel.replace(/\D+/g, "");
                $(this).attr('href', 'tel:+' + tel);
                $(this).addClass('js-phone_link');
            });
            */
});