export const initDropList = () => {
    const dropdownToggles = document.querySelectorAll('#sidebar-category li');

    // dropdownToggles.forEach((el) => {
    //     const button = el.querySelector('a');
    //     console.log(button);
    //     const content = el.querySelector('ul');
    //     console.log(content);
        
    //     button.addEventListener('click', (evt) => {
    //         if (content) { 
    //             evt.preventDefault();
    
    //             const currentButton = evt.currentTarget;
    //             // currentButton.classList.toggle('is-active');
    //             // content.classList.toggle('is-active');
                
    //             if (currentButton.classList.contains('is-active')) {
                    
    //                 content.style.maxHeight = 'max-content';

    //             } else {
    //                 content.style.maxHeight = null;
    //             }
    //         }
    //     });
    // });
}