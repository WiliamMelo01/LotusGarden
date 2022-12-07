const linkDashboard = document.querySelector('#linkDashboard')
const linkCategories = document.querySelector('#linkCategories')
const imgDashboard = document.querySelector('#dashboard')
const imgCategories = document.querySelector('#categories')

linkDashboard.addEventListener('mouseover', () => {
    imgDashboard.setAttribute('src', './images/dashboard-black.png')

})

linkDashboard.addEventListener('mouseout', () => {
    imgDashboard.setAttribute('src', './images/dashboard.png')

})

linkCategories.addEventListener('mouseover', () => {
    imgCategories.setAttribute('src', './images/categories-black.png')

})

linkCategories.addEventListener('mouseout', () => {
    imgCategories.setAttribute('src', './images/categories.png')
})