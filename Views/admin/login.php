<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN DE ADMINISTRACIÓN</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo BASE_URL ;?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="icon" href="<?php echo BASE_URL ;?>assets/img/tienda/login.png" type="image/x-icon">

    <!-- Custom styles for this template-->
    <link href="<?php echo BASE_URL ;?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background-image: url('');">
     
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="card login-card">
            <div class="card-body">

                <div class="text-center mb-4">
                    <h1 class="h1 text-success"><b>Technology store
                        </b></h1>
                </div>
                <div class="row d-flex">
                    <div class="col-lg-6 bg-login-image"
                        style="background-image: url('https://th.bing.com/th/id/R.dbd7d72e60d6b617c66aa6809fd72845?rik=pZn6V%2fEQtUnOGA&riu=http%3a%2f%2fdoctorflexo.com%2fwp-content%2fuploads%2festrategia3-scaled.jpg&ehk=mPicGw8DCV7hKuG8Qo0lfLSLitWepkr4OtLaQejxl9Y%3d&risl=&pid=ImgRaw&r=0');">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Zona de administracion</h1>
                            </div>
                            <form class="user g-3" id="formulario">
                                <div class="form-group">
                                    <label for="email">Correo electronico:</label>
                                    <input type="email" class="form-control form-control-user" id="email"
                                        aria-describedby="emailHelp" name="email" value="naikergomez0123@gmail.com"
                                        placeholder="Correo Elctronico">
                                </div>
                                <div class="form-group">
                                    <label for="clave">Contraseña:</label>
                                    <input type="password" class="form-control form-control-user" id="clave"
                                        name="clave" value="12345" placeholder="Contraseña">
                                </div>
                                <button type="submit" class="btn btn-success btn-user btn-block"><i
                                        class="bx-bxs-lock-open"></i>
                                    Acceso
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Olvidaste tu contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="register.html">Crear un cuenta?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo BASE_URL ;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL ;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo BASE_URL ;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo BASE_URL ;?>assets/js/sb-admin-2.min.js"></script>
    <script>
    const base_url = '<?php echo BASE_URL ;?>';
    </script>
    <script src="<?php echo BASE_URL; ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?php echo BASE_URL ;?>assets/js/modulos/login.js"></script>



</body>

</html>