const menuBtn = document.querySelector('#btn')
const main = document.querySelector('main')
const sidebar = document.querySelector('.sidebar')
const searchIcon = document.querySelector('#search_icon')

menuBtn.addEventListener('click', () => {

    let icon = menuBtn.getAttribute('class') == 'fa-solid fa-x' ? 'fa-solid fa-bars' : 'fa-solid fa-x';
    menuBtn.setAttribute('class', icon)

    sidebar.classList.toggle('active')

})

searchIcon.addEventListener('click', () => {
    sidebar.classList.toggle('active')
})