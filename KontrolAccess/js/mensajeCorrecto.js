function mensajeCorrecto(){
    const contenedor = document.querySelector('.contenedor-mensaje');
     const ok = document.createElement('P');
     ok.classList.add('correcto');
     ok.textContent = 'Genial! Te has registrado correctamente';
     contenedor.appendChild(ok);
      setTimeout(() => {
         ok.remove();
         
     }, 5000);
    }

mensajeCorrecto();

    