function mensajeCorrecto(){
    const contenedor = document.querySelector('.contenedor-mensaje');
     const ok = document.createElement('P');
     ok.classList.add('correcto');
     ok.textContent = '¡Genial! Te has registrado correctamente';
     contenedor.appendChild(ok);
      setTimeout(() => {
         ok.remove();
         
     }, 5000);
    }

    function mensajeError(){
        const contenedor = document.querySelector('.contenedor-mensaje');
         const superBad = document.createElement('P');
         superBad.classList.add('error');
         superBad.textContent = 'Ups! ha ocurrido un error';
         contenedor.appendChild(superBad);
          setTimeout(() => {
             superBad.remove();
             
         }, 5000);
        }


        function mensajeCompletar(){
            const contenedor = document.querySelector('.contenedor-mensaje');
             const bad = document.createElement('P');
             bad.classList.add('error');
             bad.textContent = 'Por favor llene todos los campos';
             contenedor.appendChild(bad);
              setTimeout(() => {
                 bad.remove();
                 
             }, 5000);
            }

            function mensajeLogin(){
                const contenedor = document.querySelector('.contenedor-mensaje');
                 const bad = document.createElement('P');
                 bad.classList.add('error');
                 bad.textContent = 'Nombre de usuario o contraseña incorrectos.';
                 contenedor.appendChild(bad);
                  setTimeout(() => {
                     bad.remove();
                     
                 }, 5000);
                }

                function mensajeUsuario(){
                    const contenedor = document.querySelector('.contenedor-mensaje');
                     const bad = document.createElement('P');
                     bad.classList.add('error');
                     bad.textContent = 'El usuario ya existe.';
                     contenedor.appendChild(bad);
                      setTimeout(() => {
                         bad.remove();
                         
                     }, 5000);
                    }