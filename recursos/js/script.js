//Ejecutando funciones
document.getElementById("ayb_btn_login").addEventListener("click", iniciarSesion);
document.getElementById("ayb_btn_registro").addEventListener("click", register);
window.addEventListener("resize", anchoPage);

//Declarando variables
var formulario_login = document.querySelector(".ayb_formulario_login");
var formulario_register = document.querySelector(".ayb_formulario_registro");
var div_login_registro = document.querySelector(".ayb_div_login_registro");
var div_trasera_login = document.querySelector(".ayb_div_trasera_login");
var div_trasera_registro = document.querySelector(".ayb_div_trasera_registro");

    //FUNCIONES

function anchoPage(){

    if (window.innerWidth > 850){
        div_trasera_registro.style.display = "block";
        div_trasera_login.style.display = "block";
    }else{
        div_trasera_registro.style.display = "block";
        div_trasera_registro.style.opacity = "1";
        div_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        div_login_registro.style.left = "0px";
        formulario_register.style.display = "none";   
    }
}

anchoPage();


    function iniciarSesion(){
        if (window.innerWidth > 850){
            formulario_login.style.display = "block";
            div_login_registro.style.left = "10px";
            formulario_register.style.display = "none";
            div_trasera_registro.style.opacity = "1";
            div_trasera_login.style.opacity = "0";
        }else{
            formulario_login.style.display = "block";
            div_login_registro.style.left = "0px";
            formulario_register.style.display = "none";
            div_trasera_registro.style.display = "block";
            div_trasera_login.style.display = "none";
        }
    }

    function register(){
        if (window.innerWidth > 850){
            formulario_register.style.display = "block";
            div_login_registro.style.left = "410px";
            formulario_login.style.display = "none";
            div_trasera_registro.style.opacity = "0";
            div_trasera_login.style.opacity = "1";
        }else{
            formulario_register.style.display = "block";
            div_login_registro.style.left = "0px";
            formulario_login.style.display = "none";
            div_trasera_registro.style.display = "none";
            div_trasera_login.style.display = "block";
            div_trasera_login.style.opacity = "1";
        }
}