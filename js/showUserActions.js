const userIcon = document.querySelector('#user-actions');
const userActions = document.querySelector('.user-actions-container');
const cartItemTwo = document.querySelector('.cart-items-container');

userIcon.addEventListener('click', () => {

    const CartIsNotActive = !cartItemTwo.classList.contains('active');

    if (CartIsNotActive) {
        userActions.classList.toggle('active')
    }

});