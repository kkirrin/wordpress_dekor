export const initNavMobile = () => {
    const catalog__btn = document.querySelector('.catalog__btn--mobile')
    const catalog__menu = document.querySelector('.navbar-mobile #navbar__category ')
    const sub__menu = document.querySelectorAll('.catalog__menu--mobile #navbar__category li');
    console.log(sub__menu)
    const body = document.querySelector('body')

    catalog__btn.addEventListener('click', (e) => {
        catalog__menu.classList.toggle('is-active')
        
        body.classList.toggle('lock')
    })

    sub__menu.forEach((el) => {
        el.addEventListener('click', (event) => {
            const subMenu = el.querySelector('ul');
            const currentButton = event.currentTarget

            if (currentButton.classList.contains('is-active')) {
                subMenu.style.maxHeight = 'max-content';
            } else {
                subMenu.style.maxHeight = null;
             }

            subMenu.classList.toggle('is-active');
            body.classList.toggle('lock')
        });
    });
    
}