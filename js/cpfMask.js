const cpfInput = document.querySelector('#cpf');

cpfInput.addEventListener('keydown', (e) => {

    let cpfLength = cpfInput.value.length;

    switch (cpfLength) {
        case 3:
            e.keyCode !== 8 ? cpfInput.value += '.' : null;
            break;
        case 7:
            e.keyCode !== 8 ? cpfInput.value += '.' : null;
            break;
        case 11:
            e.keyCode !== 8 ? cpfInput.value += '-' : null;
            break;
        default:
            break;

    }
})