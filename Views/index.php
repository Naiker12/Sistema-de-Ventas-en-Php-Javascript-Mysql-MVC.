<?php include_once 'Views/template/header_principal.php'; ?>

<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="assets/img/celular.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b> En Technology store
                                </b></h1>
                            <p>
                                nos apasiona la tecnología así como a ti somos un equipo de expertos
                                que te ayudara a encontrar el dispositivo perfecto para tus necesidades y presupuestos.
                            </p>
                            <p>
                            <strong>¡Visita nuestra tienda o compra en línea y descubre por qué
                            <strong class="text-success">Technology Store</strong> es la mejor opción la mejor plataforma en línea de venta</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="assets/img/lato.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1"></h1>
                            <h3 class="h2"></h3>
                            <p>
                                En <strong>Technology store</strong> encontrarás la más amplia selección de celulares de
                                las mejores marcas, como Iphone, Xiami, Samsung, y muchas más.
                            </p>
                            <p>
                                Tenemos celulares para todos los presupuestos y necesidades, desde los últimos
                                modelos de alta gama hasta opciones más económicas y funcionales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="assets/img/tablet.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">¡Ofertas increíbles y la mejor atención!</h1>
                            <p>
                                En <strong>Technology store</strong>siempre encontrarás ofertas increíbles en celulares
                                y
                                accesorios.
                            </p>
                            <p>
                                Además, nuestro equipo de expertos te brindará la mejor atención para que encuentres el
                                dispositivo perfecto para ti.
                            </p>
                            <p>
                                ¡No te pierdas nuestras ofertas y promociones especiales!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Descubre las mejores categorías de<strong class="text-success">Technology Store</strong></h1>
            <p>
                En Technology Store, nos dedicamos a brindarte una experiencia de compra excepcional.
            </p>
        </div>
    </div>
    <div class="row">
        <?php foreach ($data['categorias']  as $categoria) { ?>
        <div class="col-12 col-md-2 p-3 mt-3">
            <a href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>"><img
                    src="<?php echo $categoria['imagen'];?>" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3"> <?php  echo $categoria['categoria']; ?></h5>
        </div>
        <?php } ?>
    </div>
</section>
<!-- End Categories of The Month -->


<!-- Start Producto destacado -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1 "><strong class="text-success">Producto destacado</strong></h1>
                <p>
                    Libera tu potencial tecnológico con nuestros gadgets de vanguardia y precios imbatibles.
                </p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['nuevoProductos'] as $producto) { ?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                        <img src="<?php echo $producto['imagen']; ?>" class="card-img-top"
                            alt="<?php echo $producto['nombre']; ?>">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right"><?php echo MONEDA . ' ' . $producto['precio']; ?></li>
                        </ul>
                        <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>"
                            class="h2 text-decoration-none text-dark"><?php echo $producto['nombre']; ?></a>
                        <p class="card-text">
                            <?php echo  $producto['descripcion']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
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
                    <li><a class="text-decoration-none"
                            href="<?php echo BASE_URL .  'principal/nosotros' ?>">Nosotros</a></li>
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL .  'principal/shop' ?>">Tienda</a>
                    </li>
                    <li><a class="text-decoration-none"
                            href="<?php echo BASE_URL .  'principal/contact' ?>">Contacto</a></li>
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
                        <a class="text-light text-decoration-none" target="_blank"
                            href="https://www.instagram.com/naiker.codes/">
                            <i class='bx bxl-instagram'></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/">
                            <i class='bx bxl-twitter'></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank"
                            href="https://www.linkedin.com/in/naiker-gomez-a97449293/"><i class="bx bxl-linkedin"></i>
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
<!-- End Featured Product -->

<!---------------------------------------
     AQUI ESTAMOS LLAMANDO AL FOOTER
----------------------------------------->
<?php include_once 'Views/template/footer_principal.php'; ?>


</body>

</html>