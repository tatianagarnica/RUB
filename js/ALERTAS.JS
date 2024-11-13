$('#btn-guardar').click(function(){
    Swal.fire({
        title: "Estas seguro de realizar el traspaso?",
        text: "No podrás revertir esto.!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, estoy seguro!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Traspaso exito!",
            text: "",
            icon: "success"
          });
        }
    })

});
