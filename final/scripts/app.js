const menuButton = document.querySelector('.header__menuButton')

menuButton.addEventListener('click', function(){
    console.log("clicked");
    const menu = document.querySelector('.header__mobileModal');
    menu.classList.toggle('open');
})