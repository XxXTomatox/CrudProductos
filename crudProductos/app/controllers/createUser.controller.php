<script>
    $(document).ready(()=>{
        $("#createUser").click(()=>{
            let nombres = $("#nombres").val()
            let apellidos = $("#apellidos").val()
            let usuarios = $("#usuarios").val()
            let Pass = $("#Pass").val()

            if (!nombres) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un usuario"
                })
                return false
            }
            if (!apellidos) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un usuario"
                })
                return false
            }
            if (!usuarios) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un usuario"
                })
                return false
            }
            if (!Pass) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste una contraseña"
                })
                return false
            }
            $.ajax({
                url: "./app/model/process/createUser.process.php",
                data: {
                    nombres,
                    apellidos,
                    usuarios,
                    pass
                },
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'usuario guardado',
                        text: "usuario guardado con exito!",
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
                        text: "Error al agregar contacto!"
                    })
                }
            })
        })
    })
</script>