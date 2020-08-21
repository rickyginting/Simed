<?php
class M_Data extends CI_Model
{
    public function getPasien()
    {
        $this->db->select('*');
        $this->db->from('pasiens');
        $this->db->join('types', 'types.client_id=pasiens.client_id');
        $this->db->join('pernikahan', 'pernikahan.pernikahan_id=pasiens.pernikahan_id');
        return $this->db->get();
    }

    public function getPernikahan()
    {
        return $this->db->get('pernikahan')->result();
    }

    public function getType()
    {
        return $this->db->get('types')->result();
    }

    public function countType(){
        return $this->db->get('types')->num_rows();
    }

    public function countPasien(){
        return $this->db->get('pasiens')->num_rows();
    }
}
