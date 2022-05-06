validaCep = () => {
    let cep = document.getElementById("cep").value;

    
    const url = `https://viacep.com.br/ws/`+cep+`/json/`;

    fetch(url)
    .then(response => response.json())
    .then(data => {

        console.log(data);
        document.getElementById('logradouro').value = data['logradouro'];
        document.getElementById('cidade').value = data['localidade'];
        document.getElementById('estado').value = data['uf'];
    });

    //console.log(data['localidade']);
    //console.log(promise1);
}