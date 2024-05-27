<?php include_once 'Views/template/header_principal.php'; ?>


<!-- FORMULARIO DE CONTACTO -->
<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 ">
                <h1 class="text-center">Contáctanos</h1>
                <br>
                <p class="h3 text-center">
                  En Technology Store estamos siempre dispuestos a ayudarte. Si tienes alguna pregunta, comentario o sugerencia, no dudes en ponerte en contacto con nosotros.
                </p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo BASE_URL; ?>assets/img/tienda/contactos.png" alt="About Hero">
            </div>
        </div>
    </div>
</section>

<!-- Start Contact -->
<div class="container py-5">
    <div class="row py-5">
        <form class="col-md-9 m-auto" role="form" id="frmContactos">
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="nombre"><i class="fas fa-list"></i> Nombre</label>
                    <input type="text" class="form-control mt-1" id="nombre" placeholder="Nombre Completo" required>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="email"><i class="fas fa-envelope"></i> Email</label>
                    <input type="email" class="form-control mt-1" id="email" placeholder="Correo Electrónico" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="inputmessage"><i class="fas fa-envelope"></i> Mensaje</label>
                <textarea class="form-control mt-1" id="message" placeholder="Mensaje" rows="8"></textarea>
            </div>
            <div class="row">
                <div class="col text-end mt-2">
                    <button type="submit" class="btn btn-outline-success btn-lg px-3 text-success" id="btnContactos"
                        data-bs-toggle="hover">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- FIN DE FORMULARIO DE CONTACTO -->
<!-- Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">Tienda-virtual</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        La María
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:010-020-0340">3007200894</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:info@company.com">Naikergomez0123@gmail.com</a>
                    </li>
                    <hr class="text-light border-bottom border-light ">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        Arrollo de piedra
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:010-020-0340">3007200894</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:info@company.com">brayanmiguel@gmail.com</a>
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
                    <li><a class="text-decoration-none" href="#">Acer</a></li>
                    <li><a class="text-decoration-none" href="#">Lenovo</a></li>
                    <li><a class="text-decoration-none" href="#">Msi</a></li>
                    <li><a class="text-decoration-none" href="#">Hp</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Acerca de nosotros</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL .  'principal/nosotros' ?>">Nosotros</a></li>
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL .  'principal/shop' ?>">Tienda</a></li>
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL .  'principal/contact' ?>">Contacto</a></li>
                    <li><a class="text-decoration-none" href="#">Productos para Distribuidores</a></li>
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
                        <a class="text-light text-decoration-none" target="_blank"
                            href="https://www.facebook.com/profile.php?id=61553377066342">
                            <i class='bx bxl-facebook-circle'></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/naiker.codes/">
                            <i class='bx bxl-instagram'></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/">
                             <i class='bx bxl-twitter' ></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/in/naiker-gomez-a97449293/"><i
                                class="bx bxl-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="subscribeEmail"></label>
                <div class="input-group mb-2">
                    <input type="text" class="form-control bg-dark border-light" id="subscribeEmail"
                        placeholder="Enviar correo">
                    <div class="input-group-text btn-success text-light">Subscribete</div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light text-center">
                        Copyright &copy; 2024 Tienda virtual 
                        © Developers and Design Vive P&M 2024
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php include_once 'Views/template/footer_principal.php'; ?>

<script src="<?php echo BASE_URL . 'assets/js/ckeditor.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'assets/js/modulos/contactos.js'; ?>"></script>

</body>

</html>