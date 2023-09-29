<script>
    const eliminar = (id) => {
        Swal.fire({
            title: '¿Estas seguro de eliminar el producto?',
            text: "No podras recuperar el producto si lo borras!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Borrarlo'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "./app/model/process/delete.process.php",
                    data: {
                        id
                    },
                    type: "POST",
                    success: () => {
                        swal.fire({
                                title: "Todo Bien",
                                text: "Borraste el producto con exito",
                                imageUrl: './public/img/2.webp',
                                imageWidth: 400,
                                imageHeight: 200,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'okay'
                            }).then((result) => {
                            location.reload()
                        })
                    },
                    error: () => {
                        Swal.fire({
                            title: 'No se pudo elimiar',
                            text: "no borraste el producto",
                            icon: 'error'
                        })
                    }
                })
            }
        })
    }
</script>