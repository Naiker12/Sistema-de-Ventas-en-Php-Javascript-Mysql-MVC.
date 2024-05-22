<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success ">
                <h5 class="modal-title"><i class="fas fa-cart-arrow-down"></i>Carrito</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle" id="tableListaCarrito">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>producto</td>
                                <td>Precio</td>
                                <td>Cantidad</td>
                                <td>SubTotal</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-around mb-3">
                <h3 id="totalGeneral"></h3>
                <?php if (!empty($_SESSION['correoCliente'])) { ?>
                <a class="btn btn-outline-success" href="<?php echo BASE_URL . 'clientes'; ?>">Procesar Pedido</a>
                <?php } else { ?>
                <a class="btn btn-outline-success" href="#" onclick="abrirModalLogin();">Login</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!---------------------------------------
              LOGIN DIRECTO
----------------------------------------->
<div id="modalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success ">
                <h5 class="modal-title" id="titleLogin">Iniciar Sesion</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body m-3">
                <form action="get">
                    <div class="text-center">
                        <img class="img-thumbnail rounded-circle"
                            src="<?php echo BASE_URL . 'assets/img/tienda/3.jpeg'; ?>" alt="" width="150">
                    </div>
                    <div class="row">
                        <div class="col-md-12" id="frmLogin">
                            <div class="form-group mb-3">
                                <label for="correoLogin"><i class="fas fa-envelope"></i>Correo</label>
                                <input id="correoLogin" class="form-control" type="text" name="correoLogin"
                                    placeholder="Correo Electronico">
                            </div>
                            <div class="form-group mb-3">
                                <label for="claveLogin"><i class="fas fa-key"></i>Contraseña</label>
                                <input id="claveLogin" class="form-control" type="password" name="claveLogin"
                                placeholder="Contraseña">
                            </div>
                            <a href="#" id="btnRegister">Todavia no tienes una cuenta?</a>
                            <div class="modal-footer">
                                <button class="btn btn-success btn-lg" type="button" id="login">Login</button>
                            </div>
                        </div>
                        <!--FORMULARIO DE RESGITRO -->
                        <div class="col-md-12 d-none" id="frmRegister">
                            <div class="form-group mb-3">
                                <label for="nombreRegistro"><i class="fas fa-list"></i>Nombre</label>
                                <input id="nombreRegistro" class="form-control" type="text" name="nombreRegistro"
                                    placeholder="Nombre Completo">
                            </div>
                            <div class="form-group mb-3">
                                <label for="correoRegistro"><i class="fas fa-envelope"></i>Correo</label>
                                <input id="correoRegistro" class="form-control" type="text" name="correoRegistro"
                                    placeholder="Correo Electronico">
                            </div>
                            <div class="form-group mb-3">
                                <label for="claveRegistro"><i class="fas fa-key"></i>Contraseña</label>
                                <input id="claveRegistro" class="form-control" type="password" name="claveRegistro"
                                    placeholder="Contraseña">
                            </div>
                            <a href="#" id="btnLogin">Ya tienes una cuenta?</a>
                            <div class="modal-footer">
                                <button class="btn btn-success btn-lg" type="button"
                                    id="registrarse">Registrarse</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Start Script -->
<script src="<?php echo BASE_URL; ?>assets/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/templatemo.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/custom.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
const base_url = '<?php echo BASE_URL; ?>';

function alertaPerzanalizada(mensaje, type, titulo = '') {
    toastr[type](mensaje, titulo)

    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
  }
</script>
<script src="<?php echo BASE_URL; ?>assets/js/carrito.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/login.js"></script>


<!-- End Script -->