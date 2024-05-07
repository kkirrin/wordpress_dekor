export const initNav = () => {
    const body = document.querySelector('body');
    const menu = document.querySelector('.menu');
    const menuButton = document.querySelector('.btn__menu');
    const mobileMenu = document.querySelector('.mobile-menu')
    const mobileMenuButton = document.querySelector('.btn__menu--mobile')
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
    const menuLinks = document.querySelectorAll('.menu a');
    const menuSection = document.querySelector('.section__menu');


    menuButton.addEventListener('click', e => {
        menuButton.classList.toggle('active');
        menu.classList.toggle('is-active');
        menuSection.classList.toggle('active');
        console.log('клик')
    });

    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', (evt) => {
            menuButton.classList.remove('active');
            menu.classList.remove('is-active');
            body.classList.remove('lock');
        });
    });
    
    if(mobileMenuButton) {
        mobileMenuButton.addEventListener('click', (evt) => {
            mobileMenuButton.classList.toggle('active');
            mobileMenu.classList.toggle('is-active');
            // body.classList
        })
    }


    menuLinks.forEach(link => {
        link.addEventListener('click', (evt) => {
            menuButton.classList.remove('active');
            menu.classList.remove('is-active');
            body.classList.remove('lock');
        });
    });

    const subMenuItems = document.querySelectorAll('.section__menu .sub-menu');
    subMenuItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            item.classList.add('active');
        });
        item.addEventListener('mouseleave', () => {
            item.classList.remove('active');
        });
    });

   
}