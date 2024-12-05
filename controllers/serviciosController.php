<?php
require_once '../models/ServicioModel.php';

class ServicioController {
    private $servicioModel;

    public function __construct() {
        $this->servicioModel = new ServicioModel();
    }

    public function index() {
        $servicios = $this->servicioModel->getAllServicios();
        include '../views/servicios.php';
    }

    public function show($id) {
        $servicio = $this->servicioModel->getServicioById($id);
        include '../views/servicio_detail.php';
    }
}

?>