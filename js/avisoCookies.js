const botonAceptarCookies = document.getElementById("boton-aceptar-cookies");
const avisoCookies = document.getElementById("aviso-cookies");
const fondoAvisoCookies = document.getElementById("fondo-aviso-cookies");



//Accedemos al localStorage
//Queremos acceder a cookies-aceptadas. En caso de que no haya nada guardado Ejecutar el if:
if (!localStorage.getItem('cookies-aceptadas')) {

    //queremos ponerle la clase activo solo cuando el user no acepta las cookies
    //Si no tiene las cookies, se las ponemos
    avisoCookies.classList.add('activo');
    fondoAvisoCookies.classList.add('activo');

}


// BOTÓN
botonAceptarCookies.addEventListener('click', (e) => {

    if(!e) e = window.event;
    if( e.target.id=="botonAceptarCookies"){
        document.cookie="nombre = cookie1";
    }
    avisoCookies.classList.remove('activo');
    fondoAvisoCookies.classList.remove('activo');


    //Vamos a establecer en LocalStorage si el usuario aceptó las cookies
    localStorage.setItem('cookies-aceptadas', true);

});

