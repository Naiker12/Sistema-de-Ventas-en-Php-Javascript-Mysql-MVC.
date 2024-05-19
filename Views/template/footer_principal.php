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
                                <input id="claveRegistro" class="form-control" type="text" name="claveRegistro"
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

<!-- comienzo del footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">Tienda-virtual</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        ...............
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:010-020-0340">01,23,2024</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:info@company.com">Naiker@gmail.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Producto</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Samsung</a></li>
                    <li><a class="text-decoration-none" href="#">Apple</a></li>
                    <li><a class="text-decoration-none" href="#">Motorola</a></li>
                    <li><a class="text-decoration-none" href="#">Motorola</a></li>
                    <li><a class="text-decoration-none" href="#">Oppo</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Informacion</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Inicio</a></li>
                    <li><a class="text-decoration-none" href="#">Servicios</a></li>
                    <li><a class="text-decoration-none" href="#">Productos </a></li>
                    <li><a class="text-decoration-none" href="#">Contacto</a></li>
                </ul>
            </div>

        </div>

        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                class="fa fa-facebook" aria-hidden="true"></i>"></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i
                                class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i
                                class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="subscribeEmail"></label>
                <div class="input-group mb-2">
                    <input type="text" class="form-control bg-dark border-light" id="subscribeEmail"
                        placeholder="Email address">
                    <div class="input-group-text btn-success text-light">Subscribete</div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Copyright &copy; 2021 Tienda virtual
                        | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

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