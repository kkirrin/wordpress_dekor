export const initTab = () => {
    //Tabs
    const tabButtons = document.querySelectorAll("._tabs-item");
    const tabs_blocks = document.querySelectorAll("._tabs-block");

    tabButtons.forEach(button => {
        button.addEventListener('click', (evt) => {
            //  Если раскоментить эту строку, то возникают проблемы, если tab навешать на <input type="radio"> или <label> связаный с ним
            //evt.preventDefault();
            const targetBtn = evt.currentTarget;
            const targetBtnId = targetBtn.getAttribute('data-tab');
            console.log(document.querySelector(targetBtnId));
            const currentTab = document.querySelector(targetBtnId);

            if (!targetBtn.classList.contains('_active')) {
                tabButtons.forEach(button => {
                    button.classList.remove('_active');
                });

                tabs_blocks.forEach(button => {
                    button.classList.remove('_active');
                });

                targetBtn.classList.add('_active');
                currentTab.classList.add('_active');
            }
        });
    })
}