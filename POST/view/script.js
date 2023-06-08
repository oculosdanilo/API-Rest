let btn = document.querySelector("button");
let form = document.querySelector("form");

btn.addEventListener("click", enviarDados);

function enviarDados(event) {
  // selecionando objetos html
  let inputNome = form.nomeUsuario;
  let inputEmail = form.emailUsuario;
  let inputSenha = form.senhaUsuario;

  // obtendo o conteúdo de texto
  let nome = inputNome.value;
  let email = inputEmail.value;
  let senha = inputSenha.value;

  if (nome != "" && email != "" && senha != "") {
    //
    event.preventDefault();

    let usuario = {
      nome: nome,
      email: email,
      senha: senha,
    };
    form.reset();
    incluirDados(usuario);
  }
}

function incluirDados(usuario) {
  let url = "../controller/POST_incluirUsuario.php";

  //enviando a requisição
  fetch(url, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(usuario),
  })
    // lidar com a resposta
    .then(function (response) {
      return response.json();
    })
    .then(function (response) {
      console.log(response);
    });
}
