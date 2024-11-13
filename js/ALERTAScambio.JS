$('#btn-Enviar').click(function(){
    Swal.fire({
        title: "Actualizar contraseña",
        text: "Esta seguro de Guardar la contrasña!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, estoy seguro!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Tu contraseña se guardo exitosamente!",
            text: "",
            icon: "success"
          });
        }
    })

});
