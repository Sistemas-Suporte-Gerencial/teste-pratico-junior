
validaSenha = () => {
    //let senha = document.getElementsByName('pswd');

    let senha = document.getElementById('pwd').value;
    let alfanum = /([a-zA-Z][0-9])\w+/g;
    let resultado = senha.match(alfanum);


    let alerta = document.getElementById('alert');

    if(resultado) {
        if (senha.length < 7 && senha.length > 0) {
            alerta.value = "Digite uma senha que contenha 7 dígitos ou mais";
            alerta.removeAttribute("hidden");
            
        } else {
            alerta.setAttribute("hidden", "");
        }
    } else {
        alerta.value = "A sua senha deve conter letras e números";
        alerta.removeAttribute("hidden");
    }
}