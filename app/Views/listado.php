<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">CRUD CODEIGNITER</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Datos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h2 class="text-center">Registro</h2>

                <form action="<?php echo base_url(); ?>/registrar" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escriba su nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Escriba su apellido">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Escriba su correo">
                    </div>
                    <button type="submit" class="btn btn-success">Registrar</button>
                </form>

            </div>

            <div class="col-lg-12">
                <h2 class="text-center">Datos</h2>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $key) : ?>

                            <tr>
                                <th scope="row"><?php echo $key->idpersona ?></th>
                                <td><?php echo $key->nombre ?></td>
                                <td><?php echo $key->apellido ?></td>
                                <td><?php echo $key->email ?></td>
                                <td>
                                    <a class="btn btn-sm btn-warning" href="<?php echo base_url() . '/getDatos/' . $key->idpersona ?>">Editar</a>
                                    <a class="btn btn-sm btn-danger" href="<?php echo base_url() . '/eliminar/' . $key->idpersona ?>">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach;  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
        let mensaje = '<?php echo $mensaje ?>';

        switch (mensaje) {
            case '0':
                swal("Agregado con exito!", "!", "success");
                break;
            case '1':
                swal("Error al agregar!", "...!", "error");
                break;
            case '2':
                swal("Actualizado con exito!", "!", "success");
                break;
            case '3':
                swal("Error al actualizar", "!", "error");
                break;
            case '4':
                swal("Eliminado", "!", "success");
                break;
            case '5':
                swal("Error al eliminar", "!", "error");
                break;

            default:
                break;
        }
        /*
                if (mensaje == '1') {
                    swal("Agregado con exito!", "You!", "success");
                }
                elseif(mensaje == '0') {
                    swal("Error al agregar", "!", "error");
                }
                elseif(mensaje == '2') {
                    swal("Actualizado con exito", "!", "success");
                }
                elseif(mensaje == '3') {
                    swal("Error al Actualizar!", "!", "error");
                }
                */
    </script>

</body>

</html>