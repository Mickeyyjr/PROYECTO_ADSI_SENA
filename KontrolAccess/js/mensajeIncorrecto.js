function mensajeIncorrecto(){
    const contenedor = document.querySelector('.contenedor-mensaje');
     const superBad = document.createElement('P');
     superBad.classList.add('error');
     superBad.textContent = 'Ups! ha ocurrido un error';
     contenedor.appendChild(superBad);
      setTimeout(() => {
         superBad.remove();
         
     }, 5000);
    }

    mensajeIncorrecto();

    