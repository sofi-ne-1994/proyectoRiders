<?php
require_once '../models/CompraModel.php';
require_once '../models/ServicioModel.php';
require_once '../models/ClienteModel.php';

class CompraController {
    private $compraModel;
    private $servicioModel;
    private $clienteModel;

    public function __construct() {
        $this->compraModel = new CompraModel();
        $this->servicioModel = new ServicioModel();
        $this->clienteModel = new ClienteModel();
    }

    public function index() {
        $compras = $this->compraModel->getAllCompras();
        include '../views/compras.php';
    }

    public function create() {
        $clientes = $this->clienteModel->getAllClientes();
        $servicios = $this->servicioModel->getAllServicios();
        include '../views/compra_form.php';
    }

    public function store() {
        if (isset($_POST['cliente_id']) && isset($_POST['servicio_id']) && isset($_POST['cantidad'])) {
            $cliente_id = $_POST['cliente_id'];
            $servicio_id = $_POST['servicio_id'];
            $cantidad = $_POST['cantidad'];
            $total = $_POST['total']; // Aquí debe ir la lógica para calcular el total basado en el servicio y cantidad
            $this->compraModel->addCompra($cliente_id, $servicio_id, $cantidad, $total);
            header('Location: /compras');
        }
    }

    public function show($id) {
        $compra = $this->compraModel->getCompraById($id);
        include '../views/compra_detail.php';
    }
}

?>