
/* document.getElementById('piezas').addEventListener('change', function (e) {
    e.preventDefault(); //para evitar que se recargue la pagina

    const datos = new FormData(document.getElementById('formulario'));
    fetch('/admin/ordenes/construccion/confeccionar', {
        dataType: 'JSON',
        method: 'POST',
        body: datos,
    })

        .then(data => {
            console.log(data.text);
        })
}, true) */


/* $("#piezas").change(function () {
    $.ajax({
        url: "/admin/ordenes/construccion/confeccionar/",
        method: "POST",
        data: $("#formulario").serialize()
    }).done(function (res) {
        alert(res);

    })
}); */
/* $("#piezas").change(function(e){
    e.preventDefault();
    $.ajax({
        url: "/admin/ordenes/construccion/confeccionar/",
        method: "POST",
        dataType: "json",
        success: function(data){
            //Aquí validas lo que trae el nodo success ( $json['success'] )
            if( data.success ){
                //Como el JSON trae un mensaje, lo puedes imprimir
                console.log('ok');
            }

            else{
                //Si te regresa un TRUE entonces ya puedes recargar
                console.log('not okay');
            }
        },
        error: function(data){
            console.log('error')
        }
    });
  }); */

/* $("#piezas").change(function(e){
    e.preventDefault();

    let _token = $("input[name='_token']").val();
    let pieza = $("#piezas").val();
    let material= $("#material").val();

    $.ajax({
        url: "/piezas",
        type:'POST',
        data: {_token:_token, pieza:pieza},
        success: function(data) {
          console.log(data);
        }
    });
});  */


