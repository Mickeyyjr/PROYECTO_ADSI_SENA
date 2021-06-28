document.addEventListener('DOMContentLoaded', function (){
    validarFormulario;
})

function validarFormulario(){
    console.log('validando...')
}


const expresionEmail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/




const emailUsuario = document.querySelector('.campo-email');
const passwordUsuario = document.querySelector('.campo-password')



function validarCampos(e){
    switch(e.target.name){
        case 'email':
            if(expresionEmail.test(e.target.value)){
                emailUsuario.classList.remove('erro')
                emailUsuario.classList.add('ok')
            }else{
                emailUsuario.classList.remove('ok')
                emailUsuario.classList.add('erro')
            }
            break; 
    }
}

emailUsuario.addEventListener('blur', validarCampos);
emailUsuario.addEventListener('keyup', validarCampos);
