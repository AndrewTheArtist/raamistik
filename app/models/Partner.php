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
        return $this->db->getAll();
    }

    public function deletePartner($data) {
        print_r($data);
        $this->db->query('DELETE FROM firmad WHERE firma_id = '.$data['id'].' AND nimi = '.$data['name']);
        return $this->db->execute();
    }

    public function addPartner($data) {
        echo "INSERT INTO firmad (nimi, asukoht, grupp, eriala, telefon, epost, vat) VALUES (".$data['name'].", ".$data['location'].", ".$data['grouping'].", ".$data['specialty'].", ".$data['phone'].", ".$data['email'].", ".$data['vat'].")";
        $this->db->query("INSERT INTO firmad (nimi, asukoht, grupp, eriala, telefon, epost, vat) VALUES (".$data['name'].", ".$data['location'].", ".$data['grouping'].", ".$data['specialty'].", ".$data['phone'].", ".$data['email'].", ".$data['vat'].")");
        return $this->db->execute();
    }
}