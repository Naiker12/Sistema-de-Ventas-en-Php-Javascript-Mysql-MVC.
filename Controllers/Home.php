<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
        
    }


   /*====================================================
   AQUI LO QUE ESTAMOS HACIENDO ES ENVIAR O PASAR EL TITULO
   A LA PAGINA PRINCIPAL MEDIANTE LA PAGINA DE VISTA
   ======================================================= */
    public function index()
    {
        $data['perfil'] = 'no';
        $data['title'] = 'Tienda de celulares NDB';
        $data['categorias'] = $this->model->getCategorias();
        $data['nuevoProductos'] = $this->model->getNuevosProductos();
        $this->views->getView('home', "index", $data);
    }

}


