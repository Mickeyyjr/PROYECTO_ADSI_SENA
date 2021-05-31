document.addEventListener('DOMContentLoaded', function (){
    validarFormulario;
})

function validarFormulario(){
    console.log('Validando formulario');
    
}

const formulario = document.querySelector('.formulario-registro');
const inputs = document.querySelectorAll('.formulario-registro input')
const selects = document.querySelectorAll('.formulario-registro select');
const expresiones = {
    id: /^\d{7,14}$/, // 7 a 12 numeros.
	nombre: /^[a-zA-ZÀ-ÿ\s]{4,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{4,40}$/, // Letras y espacios, pueden llevar acentos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    password: /^.{4,12}$/ // 4 a 12 digitos.
}




const campos = {
    tipoId:false,
    id:false,
    nombre:false,
    apellido:false,
    email:false,
    rol:false
}




function validarCampo(e){
    switch(e.target.name){
        case 'id_persona':
            const input0 = document.querySelector('.seccion-idpersona')
            if(expresiones.id.test(e.target.value)){

                input0.classList.remove('incorrecto')
                inputs[0].classList.add('ok')
                campos['id'] = true;

            }else{
                input0.classList.add('incorrecto')
                campos['id'] = false;
            }
            break;

        case 'nombre':
            const input1 = document.querySelector('.seccion-nombre')
            if(expresiones.nombre.test(e.target.value)){

                input1.classList.remove('incorrecto')
                inputs[1].classList.add('ok')
                campos['nombre'] = true;
            }else{
                input1.classList.add('incorrecto')
                campos['nombre'] = false;
            }
            break;

            case 'apellido':
            const input2 = document.querySelector('.seccion-apellido')
            if(expresiones.apellido.test(e.target.value)){

                input2.classList.remove('incorrecto')
                inputs[2].classList.add('ok')
                campos['apellido'] = true;
            }else{
                input2.classList.add('incorrecto')
                campos['apellido'] = false;
            }
            break;

            case 'email':
            const input3 = document.querySelector('.seccion-email')
            if(expresiones.email.test(e.target.value)){

                input3.classList.remove('incorrecto')
                inputs[3].classList.add('ok')
                campos['email'] = true;
            }else{
                input3.classList.add('incorrecto')
                campos['email'] = false;
            }
            break;
            
    }
}

function validarSelect(e){
    switch(e.target.name){
        case 'tipo_id':
            const select0 = document.querySelector('.seccion-tipoid')
            if(e.target.value === 'seleccione'){
                select0.classList.remove('ok')
                select0.classList.add('incorrecto')
                campos['tipoId'] = false;
                
                
            }else{
                select0.classList.remove('incorrecto')
                selects[0].classList.add('ok')
                campos['tipoId'] = true;
            }
            break;

            case 'rol':
            const select1 = document.querySelector('.seccion-rol')
            if(e.target.value === 'seleccione'){
                select1.classList.remove('ok')
                select1.classList.add('incorrecto')
                campos['rol'] = false;
            }else{
                select1.classList.remove('incorrecto')
                selects[1].classList.add('ok')
                campos['rol'] = true;
            }
            break;

    }
    
}


// Iterar los inputs

function llamarValidadorInput(){
inputs.forEach(function(input){
    input.addEventListener('keyup', validarCampo) // keyup valida cuando se oprime una tecla en un input
    input.addEventListener('blur', validarCampo) // blur es un evento que se ejecuta cuando se presiona fuera un input
    input.addEventListener('onload', validarCampo)
})}


function llamarValidadorSelect(){
selects.forEach(function(select){
    select.addEventListener('change', validarSelect) // keyup valida cuando se oprime una tecla en un input
    select.addEventListener('blur', validarSelect) // blur es un evento que se ejecuta cuando se presiona fuera un input
})}

