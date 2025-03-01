document.addEventListener("DOMContentLoaded", function () {
    const inputCartao = document.getElementById("numero");

    inputCartao.addEventListener("input", function (e) {
        let valor = e.target.value.replace(/\D/g, ''); // Remove tudo que não for número
        valor = valor.replace(/(\d{4})/g, '$1 ').trim(); // Adiciona espaço a cada 4 números
        e.target.value = valor;
    });
});
