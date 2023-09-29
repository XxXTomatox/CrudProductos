<script>
    $(document).ready(()=>{
        $("#crearUser").click(()=>{
            let id = $("#nombres").val()
            let User = $("#User").val()
            let password = $("#password").val()
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
            if (!User) {
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
                    user,
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