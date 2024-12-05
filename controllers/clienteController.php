<?php
require_once '../models/ClienteModel.php';

class ClienteController {
    private $clienteModel;

    public function __construct() {
        $this->clienteModel = new ClienteModel();
    }

    public function index() {
        $clientes = $this->clienteModel->getAllClientes();
        include '../views/clientes.php';
    }

    public function create() {
        include '../views/cliente_form.php';
    }

    public function store() {
        if (isset($_POST['nombre']) && isset($_POST['email'])) {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $this->clienteModel->addCliente($nombre, $email, $telefono, $direccion);
            header('Location: /clientes');
        }
    }

    public function show($id) {
        $cliente = $this->clienteModel->getClienteById($id);
        include '../views/cliente_detail.php';
    }
}

?>