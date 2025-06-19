menu_button = document.querySelectorAll('.show_nav_buttons')
navcontainer = document.querySelectorAll('.nav_buttons')
console.log(navcontainer[0])


for (let i = 0 ; i < menu_button.length ; i++){
        menu_button[i].addEventListener('click', () => {
        navcontainer[0].classList.toggle('hide')
        navcontainer[0].classList.toggle('container')
    })
}
console.log(menu_button)