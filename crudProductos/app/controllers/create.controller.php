
<script>
    $(document).ready(() => {
        $("#crear").click(() => {
            let nombre = $("#nombre").val()
            let precio = $("#precio").val()
            let fecha_caducidad = $("#fecha_caducidad").val()

            if (!nombre) {
                    swal.fire({
                    title: "ERROR",
                    text: "nombre no escrito",
                    imageUrl: './public/img/1.png',
                    imageWidth: 400,
                    imageHeight: 200,
                });
                return false
            }

            if (!precio) {
                swal.fire({
                    title: "ERROR",
                    text: "precio no escrito",
                    imageUrl: './public/img/1.png',
                    imageWidth: 400,
                    imageHeight: 200,
                });
                return false
            }

            if (!fecha_caducidad) {
                swal.fire({
                    title: "ERROR",
                    text: "fecha de caducidad no escrito",
                    imageUrl: './public/img/1.png',
                    imageWidth: 400,
                    imageHeight: 200,
                });
                return false
            }

            $.ajax({
                url: "./app/model/process/create.process.php",
                data: {
                    nombre,
                    precio,
                    fecha_caducidad
                },
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'producto guardado',
                        text: "Contacto guardado con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                    }).then((result) => {
                        window.location = "./read"
                    })
                },
                error: () => {
                    Swal.fire({
                        icon: "error",
                        text: "Error al agregar producto!"
                    })
                }
            })
        })
    })
</script>