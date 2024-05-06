export const initNavModal = () => {
    
    const modals = document.querySelectorAll('.header-wrapper');
    
    modals.forEach((modal) => {
        modal.addEventListener('click', (evt) => {
            modal.classList.toggle('is-active');
        });
    });

}