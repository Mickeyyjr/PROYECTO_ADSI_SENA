document.addEventListener('DOMContentLoaded', function (){
    validarFormulario();
})


function validarFormulario(){
    const campo = document.querySelector('.campo');

    if(campo.value === 'seleccione'){
        campo.classList.add('contorno');
    }if(campo.value != 'seleccione'){
        campo.classList.remove('contorno');
    }
    
    
}

validarFormulario();