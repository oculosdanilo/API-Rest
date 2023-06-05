let btn = document.querySelector("button")
let form = document.querySelector("form")

btn.addEventListener('click', enviarDados)

function enviarDados(event){
    //
    event.preventDefault();

    
    // selecionando objetos html
    let inputNome = form.nomeUsuario
    let inputEmail = form.emailUsuario
    let inputSenha = form.senhaUsuario
    
    // obtendo o conteúdo de texto
    let nome = inputNome.value
    let email = inputEmail.value
    let senha = inputSenha.value

    let usuario = {
        nome: nome,
        email: email,
        senha: senha
    }
    form.reset()
    incluirDados(usuario)
}

function incluirDados(usuario){
    let url = "http://localhost/API-Rest/POST/controller/POST_incluirUsuario.php"
    //enviando a requisição
    fetch(url,{
        method: "POST",
        headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(usuario)
    })
    // lidar com a resposta
    .then(function (response) {
        console.log(response)
        return response.json()
        
    })
    .then(function (response) {
        console.log(response)
    })
}