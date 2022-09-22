setTimeout(function () {
    document.getElementById("erro").style.display = "none";
}, 3000);
 function hide(){
document.getElementById("erro").style.display = "none";
 }
//   valida email aqui
function testEmail(validaemail){
var re = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
var OK = re.exec(validaemail.value);
if (!OK){
    var alerta = document.getElementById("alerta2")
    alerta.style.display = 'block'
    alerta.innerHTML = 'Email Invalido'
    setTimeout(function(){ alerta.style.display = 'none';}, 2000)
}else{
    var alerta = document.getElementById("alerta")
    alerta.style.display = 'block'
    alerta.innerHTML = 'Email valido'
    setTimeout(function(){ alerta.style.display = 'none';}, 2000)
}
}

//   valida celular aqui
function testInfo(validacelular){
    var re = /^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$/;
    var OK = re.exec(validacelular.value);
    if (!OK){

        var alerta = document.getElementById("alerta2")
        alerta.style.display = 'block'
        alerta.innerHTML = 'Número invalido'
        setTimeout(function(){ alerta.style.display = 'none';}, 2000)
    }else{

        var alerta = document.getElementById("alerta")
        alerta.style.display = 'block'
        alerta.innerHTML = 'Número valido'
        setTimeout(function(){ alerta.style.display = 'none';}, 2000)
    }
    }

/* Mascara do telefone*/
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('Celular').onkeyup = function(){
		mascara( this, mtel );
	}
}
/*Máscara telefone fixo*/
function mask(o, f) {
    setTimeout(function() {
      var v = telefone(o.value);
      if (v != o.value) {
        o.value = v;
      }
    }, 1);
  }
  function telefone(v) {
    var r = v.replace(/\D/g, "");
    r = r.replace(/^0/, "");
    if (r.length > 10) {
      r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (r.length > 5) {
      r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (r.length > 2) {
      r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
      r = r.replace(/^(\d*)/, "($1");
    }
    return r;
  }