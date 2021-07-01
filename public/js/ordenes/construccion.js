
/* document.getElementById('piezas').addEventListener('change', function (e) {
    e.preventDefault(); //para evitar que se recargue la pagina

    const datos = new FormData(document.getElementById('formulario'));
    fetch('/admin/ordenes/construccion/confeccionar/', {

        method: 'POST',
        body: datos,
    })
        .then(res => res.json())
        .then(data => {
            console.log(data);
        })
}, true) */



$(document).ready(function() {
    $(".btn-submit").click(function(e){
        e.preventDefault();

        var _token = $("input[name='_token']").val();
        var email = $("#email").val();
        var pswd = $("#pwd").val();
        var address = $("#address").val();

        $.ajax({
            url: "{{ route('ajax.request.store') }}",
            type:'POST',
            data: {_token:_token, email:email, pswd:pswd,address:address},
            success: function(data) {
              printMsg(data);
            }
        });
    }); 

    function printMsg (msg) {
      if($.isEmptyObject(msg.error)){
          console.log(msg.success);
          $('.alert-block').css('display','block').append('<strong>'+msg.success+'</strong>');
      }else{
        $.each( msg.error, function( key, value ) {
          $('.'+key+'_err').text(value);
        });
      }
    }
});
