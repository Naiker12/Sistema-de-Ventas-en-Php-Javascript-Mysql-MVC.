<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['perfil'] = 'no';
        $data['title'] = 'Pagina Principal';
        $data['categorias'] = $this->model->getCategorias();
        $productos = $this->model->getNuevosProductos();
        for ($i=0; $i < count($productos); $i++) {
            $calificacion = $this->model->getCalificacion('SUM', $productos[$i]['id']);
            $cantidad = $this->model->getCalificacion('COUNT', $productos[$i]['id']);
            $totalCantidad = ($cantidad['total'] == 0) ? 5 : $cantidad['total'] ;

            $total = ($calificacion['total'] != null) ? $calificacion['total'] / $totalCantidad : $totalCantidad;

            $productos[$i]['calificacion'] = round($total);
        }
        $data['nuevoProductos'] = $productos;
        $this->views->getView('home', "index", $data);
    }
}