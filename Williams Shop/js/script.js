let tabs = document.querySelectorAll('.account-tabs-toggle'),
contents = document.querySelectorAll('.account-tabs-content');

tabs.forEach((tab, index) => {
    tab.addEventListener('click', () =>{
        contents.forEach((content) => {
            content.classList.remove('account-is-active');
        });
        tabs.forEach((tab) => {
            tab.classList.remove('account-is-active');
        });

        contents[index].classList.add('account-is-active');
        tabs[index].classList.add('account-is-active');
    });
});