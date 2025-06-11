<?php
class HorlogesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getHorloges()
    {
        $sql = "SELECT Id AS id, Merk AS merk, Model AS type, Prijs AS prijs
                FROM Horloges
                WHERE IsActief = 1
                ORDER BY Prijs DESC";
        $this->db->query($sql);
        return $this->db->resultSet();
    }


    public function createHorloge($post)
    {
        $sql = "INSERT INTO Horloges (Merk, Model, Prijs, IsActief, DatumAangemaakt, DatumGewijzigd)
                VALUES (:merk, :type, :prijs, 1, NOW(), NOW())";
        $this->db->query($sql);
        $this->db->bind(':merk', $post['merk'], PDO::PARAM_STR);
        $this->db->bind(':type', $post['type'], PDO::PARAM_STR);
        $this->db->bind(':prijs', $post['prijs'], PDO::PARAM_STR);
        return $this->db->execute();
    }


    public function deleteHorloge($id)
    {
        $sql = "DELETE FROM Horloges WHERE Id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->execute();
    }
}