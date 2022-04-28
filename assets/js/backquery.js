function getPassword(){
  var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&/()_+<>:{}[]";
  var passwordLength = 16;
  var password = "";
  for( var i=0; i< passwordLength; i ++){
    var randomNumber = Math.floor(Math.random() * chars.length);
    password += chars.substring(randomNumber, randomNumber +1);
  }
  document.getElementById("clave").value = password;
}

/*
onkeydown
El usuario tiene pulsada una tecla (para elementos de formulario y body)

onkeypress
El usuario pulsa una tecla (momento justo en que la pulsa) (para elementos de formulario y body)

onkeyup
El usuario libera una tecla que tenía pulsada (para elementos de formulario y body)
*/
const boxInfo = document.querySelector('.box-info');
const info = document.querySelector('.info');
const dominio = document.querySelector('#dominio');
const nombreDominio = document.querySelector('.nombreDominio');
const tuDominio = document.querySelectorAll('.tuDominio');

boxInfo.addEventListener("mouseover", function(){
  info.style.display = "block";
});

boxInfo.addEventListener("mouseout", function(){
  info.style.display = "none";
});

dominio.addEventListener("keyup", function(){
  nombreDominio.value = dominio.value;  
});

