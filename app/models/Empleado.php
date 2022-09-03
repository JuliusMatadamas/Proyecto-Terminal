<?php


class Empleado
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getEmpleado()
    {
        $this->db->query ("SELECT * FROM empleados");

        return $this->db->resultSet ();
    }
}