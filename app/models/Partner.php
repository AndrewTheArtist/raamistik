<?php


class Partner
{
    private $db;

    /**
     * Partner constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPartners() {
        $this->db->query('Select * FROM firmad');
        $result = $this->db->getAll();
        return $result;
    }
}