function maxChar() {
    const maxChar = 11;

    var campo = document.getElementById("cpf");
    var campoConteudo = campo.value;

    if (campoConteudo.length > maxChar) {
        campo.value = campoConteudo.slice(0, maxChar);
    }
}

function checkCpf() {
    const minChar = 11;

    var campo = document.getElementById("cpf");
    var campoConteudo = campo.value;

    if (campoConteudo.length < minChar) {
        campo.style.border = "1px solid red";
        campo.style.color = "red";
        campo.placeholder = "Este precisa de 11 caracteres";
    }
    else {
        campo.style.color = "gray";
        campo.style.border = "1px solid darkgray";
    }
}

function checkCreci() {
    const minChar = 2;

    var campo = document.getElementById("creci");
    var campoConteudo = campo.value;

    if (campoConteudo.length < minChar) {
        campo.style.border = "1px solid red";
        campo.style.color = "red";
        campo.placeholder = "Este campo é obrigatório";
    }
    else {
        campo.style.color = "gray";
        campo.style.border = "1px solid darkgray";
    }
}

function checkName() {
    const minChar = 2;

    var campo = document.getElementById("nome");
    var campoConteudo = campo.value;

    if (campoConteudo.length < minChar) {
        campo.style.border = "1px solid red";
        campo.style.color = "red";
        campo.placeholder = "Este campo é obrigatório com mínimo de 2 caracteres";
    }
    else {
        campo.style.color = "gray";
        campo.style.border = "1px solid darkgray";
    }
}

function alerta() {
    window.alert('Banco de Dados Atualizado com Sucesso!')
}

// function editFunction() {
//     document.getElementById("enviar").textContent = "Editar";
//     document.getElementById("id").type = "text";
//     document.getElementById("id").name = "edit";
// }

// function deleteFunction() {
//     document.getElementById("enviar").textContent = "DELETAR";
//     document.getElementById("id").type = "text";
//     document.getElementById("id").name = "delete";
// }

// function insertFunction() {
//     document.getElementById("enviar").textContent = "Enviar";
//     document.getElementById("id").type = "hidden";
//     document.getElementById("id").name = "submit";
// }
