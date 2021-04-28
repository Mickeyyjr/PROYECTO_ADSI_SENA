function mensajeLlene(){
    const contenedor = document.querySelector('.contenedor-mensaje');
     const bad = document.createElement('P');
     bad.classList.add('error');
     bad.textContent = 'Por favor llene todos los campos';
     contenedor.appendChild(bad);
      setTimeout(() => {
         bad.remove();
         
     }, 5000);
    }

    mensajeLlene();

    