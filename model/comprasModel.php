<?php
require_once 'Database.php';

class CompraModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAllCompras() {
        $sql = "SELECT compras.*, clientes.nombre AS cliente_nombre, servicios.nombre AS servicio_nombre 
                FROM compras
                JOIN clientes ON compras.cliente_id = clientes.id
                JOIN servicios ON compras.servicio_id = servicios.id";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addCompra($cliente_id, $servicio_id, $cantidad, $total) {
        $sql = "INSERT INTO compras (cliente_id, servicio_id, cantidad, total, fecha_compra) 
                VALUES (?, ?, ?, ?, NOW())";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("iiid", $cliente_id, $servicio_id, $cantidad, $total);
        return $stmt->execute();
    }

    public function getCompraById($id) {
        $sql = "SELECT compras.*, clientes.nombre AS cliente_nombre, servicios.nombre AS servicio_nombre 
                FROM compras
                JOIN clientes ON compras.cliente_id = clientes.id
                JOIN servicios ON compras.servicio_id = servicios.id
                WHERE compras.id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}

?>