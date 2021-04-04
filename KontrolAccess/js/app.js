document.addEventListener('DOMContentLoaded', function(){
    crearFormulario1(), crearFormulario2();
})


function crearFormulario1(){
    const iniciarSesion = document.querySelector('.iniciarSesion');
    
    iniciarSesion.addEventListener('click', mostrarImagen1);
}

function mostrarImagen1(){
    const overlay = document.createElement('DIV');
    overlay.classList.add('overlay');
    const imagen1 = document.createElement('IMG');
    imagen1.src = '../img/formulario-inicarSesion.png';
    imagen1.classList.add('img1');

    overlay.appendChild(imagen1);

    //Mostrar en HTML


    const body = document.querySelector('body');
    body.appendChild(overlay);


    overlay.addEventListener ('click', function(){
        overlay.remove();
    })

    body.classList.add('fijar-body');
}

function crearFormulario2(){
    const registrarse = document.querySelector('.registrarse');
    
    registrarse.addEventListener('click', mostrarImagen2);
}

function mostrarImagen2(){
    const overlay = document.createElement('DIV');
    overlay.classList.add('overlay');
    const imagen1 = document.createElement('IMG');
    imagen1.src = '../img/formulario-registro.png';
    imagen1.classList.add('img1');

    overlay.appendChild(imagen1);

    //Mostrar en HTML


    const body = document.querySelector('body');
    body.appendChild(overlay);


    overlay.addEventListener ('click', function(){
        overlay.remove();
    })

    body.classList.add('fijar-body');
}

