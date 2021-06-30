
document.getElementById('piezas').addEventListener('change', function (e) {
    e.preventDefault(); //para evitar que se recargue la pagina
    const datos = new FormData(document.getElementById('form'));
    fetch('/ordenes/construccion/confeccionar', {
        method: 'POST',
        body: datos,
    })
        .then(res => res.json())
        .then(data => {
            /* let contenedor = document.getElementById('contenedor');
            let combo = `<label for="hora" class="form-label">Seleccione la hora</label>`;
            combo += `<select class="form-control" id="hora" name="hora">`; */
            material = document.getElementById('material');
            option.value = hora;
            option.text = hora;
            combo.appendChild(option);

            /*   select = document.getElementById("año");
              for(i = 2000; i <= 2050; i++){
                  option = document.createElement("option");
                  option.value = i;
                  option.text = i;
                  select.appendChild(option);
              } */

        })
}, true)
