const input = document.getElementById('imagem');
const produto = document.getElementById("imagemProduto");
const btnLimpar = document.getElementById("btnReset");

input.addEventListener("change", () => {
    if (input.files && input.files[0]) {
        if (input.files[0].type.startsWith("image/")) {
            produto.style.display = "block";
            var file = new FileReader();
            file.onload = function (e) {
                produto.src = e.target.result;
            };
            file.readAsDataURL(input.files[0]);
        } else {
            produto.style.display = "none";
        }
    }
})

btnLimpar.addEventListener('click',()=>{


    input.value = "";
    produto.src = "";
    produto.style.display = 'none';

})
