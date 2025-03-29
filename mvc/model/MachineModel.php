<?php

class MachineModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli('sql200.epizy.com', 'epiz_31121671', '7XhEahxb5zgcPgN', 'epiz_31121671_Machine');

        if ($this->conn->connect_error) {
            die("Konekcija neuspešna: " . $this->conn->connect_error);
        }
    }

    public function getMachineList()
    {
        $result = $this->conn->query("SELECT * FROM machines");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getMachineById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM machines WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function saveMachine($name, $brand, $description)
    {
        $stmt = $this->conn->prepare("INSERT INTO machines (name, brand, description) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $brand, $description);
        $stmt->execute();
    }

    public function editMachine($id, $name, $brand, $description)
    {
        $stmt = $this->conn->prepare("UPDATE machines SET name=?, brand=?, description=? WHERE id=?");
        $stmt->bind_param("sssi", $name, $brand, $description, $id);
        $stmt->execute();
    }

    public function deleteMachine($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM machines WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }

    public function saveImg($id, $path)
    {
        $stmt = $this->conn->prepare("UPDATE machines SET image=? WHERE id=?");
        $stmt->bind_param("si", $path, $id);
        $stmt->execute();
    }
}

?>