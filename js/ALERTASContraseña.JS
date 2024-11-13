$('#btn-Enviar').click(function(){
    Swal.fire({
        title: "codigo de recuperacion de contraseña",
        text: "Estas seguro de enviar el codigo de recuperacion de contraseña!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, estoy seguro!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "envio de codigo exito!",
            text: "",
            icon: "success"
          });
        }
    })

});
