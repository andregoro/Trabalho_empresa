function validar() {
  // pegando o valor do nome pelos names
  var nome = document.getElementById("nome");
  var CPF = document.getElementById("CPF");
  var usuario = document.getElementById("usuario");
  var senha = document.getElementById("senha");
  var confirm_password = document.getElementById("confirm_password");
  var telefone = document.getElementById("telefone");
  var endereco = document.getElementById("endereco");
  var sexo = document.getElementById("sexo");
  ///var newsletter = document.getElementById("newsletter").checked;

  // verificar se o nome está vazio

  if (nome.value == "") {
    alert("Nome não informado");

    // Deixa o input com o focus
    nome.focus();
    // retorna a função e não olha as outras linhas
    return;
  }
  if (CPF.value == "") {
    alert("CPF nao informado");
    CPF.focus();
    return;
  }
  if (usuario.value == "") {
    alert("Usuario não informado");
    email.focus();
    return;
  }
  if (senha.value == "") {
    alert("Senha não informada");
    senha.focus();
    return;
  }
  if (senha.value != confirm_password.value ) {
    alert("Senha diferente em comfimar senha");
    senha.focus();
    return;
  }
  if (telefone.value == "") {
    alert("Telefone não informado");
    telefone.focus();
    return;
  }
  if (endereco.value == "") {
    alert("Endereço não informado");
    cep.focus();
    return;
  }
  if (sexo.value == "") {
    alert("CEP não informado");
    sexo.focus();
    return;
  }
  alert("Formulário enviado!");
  // envia o formulário
  //formulario.submit();
}