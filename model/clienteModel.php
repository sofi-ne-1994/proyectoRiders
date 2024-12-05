<?php
require_once 'Database.php';

class ClienteModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAllClientes() {
        $sql = "SELECT * FROM clientes";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addCliente($nombre, $email, $telefono, $direccion) {
        $sql = "INSERT INTO clientes (nombre, email, telefono, direccion) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ssss", $nombre, $email, $telefono, $direccion);
        return $stmt->execute();
    }

    public function getClienteById($id) {
        $sql = "SELECT * FROM clientes WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}

?>