<?php

class SneakersModel
{
    private $db;

    public function __construct()
    {
        /** Door het maken van een database instantie
         *  kunnen we de database functies gebruiken
         *  en hebben we een verbinding met de database
         */
        $this->db = new Database();
    }

    public function getAllSneakers()
    {
        $sql = 'SELECT SNKS.Id
                      ,SNKS.Merk
                      ,SNKS.Model 
                      ,SNKS.Type
                      ,SNKS.Prijs       
        
                FROM Sneakers as SNKS
                
                ORDER BY SNKS.Merk DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function createSneaker($data)
    {
        $sql = 'INSERT INTO Sneakers (Merk, Model, Type, Prijs)
                VALUES (:merk, :model, :type, :prijs)';

        $this->db->query($sql);
        $this->db->bind(':merk', $data['merk'], type: PDO::PARAM_STR);
        $this->db->bind(':model', $data['model'], type: PDO::PARAM_STR);
        $this->db->bind(':type', $data['type'], type: PDO::PARAM_STR);
        $this->db->bind(':prijs', $data['prijs'], type: PDO::PARAM_STR);

        $this->db->execute();
    }

    public function deleteSneaker($id)
    {
        $sql = 'DELETE FROM Sneakers WHERE Id = :id';

        $this->db->query($sql);
        $this->db->bind(':id', $id, type: PDO::PARAM_INT);

        return $this->db->execute();
    }
}