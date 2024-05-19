<?php include_once 'Views/template/header_principal.php'; ?>


<!-- FORMULARIO DE CONTACTO -->

<div class="container-fluid bg-light py-5">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1">Contáctenos</h1>
        <p>
            Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet.
        </p>
    </div>
</div>

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

<?php include_once 'Views/template/footer_principal.php'; ?>

<script src="<?php echo BASE_URL . 'assets/js/ckeditor.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'assets/js/modulos/contactos.js'; ?>"></script>

</body>

</html>