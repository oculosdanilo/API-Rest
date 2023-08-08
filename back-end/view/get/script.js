const url = "../../controller/get-usuarios.php";
const emails = document.getElementById("emails");
fetch(url, {
  method: "GET",
})
  .then(function (resposta) 
    {
      return resposta.text();
    })
  .then(function (text) 
  {
    console.log(text);
    emails.innerHTML += text;
  })