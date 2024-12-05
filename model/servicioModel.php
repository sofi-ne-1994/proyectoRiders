<?php
require_once 'Database.php';

class ServicioModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAllServicios() {
        $sql = "SELECT * FROM servicios";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getServicioById($id) {
        $sql = "SELECT * FROM servicios WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
?>