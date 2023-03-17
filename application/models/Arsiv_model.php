<?php

class Personel_model extends CI_Model
{

    public $tableName = "arsiv";

    public function __construct()
    {
        parent::__construct();

    }

    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }

    /** Tüm Kayıtları bana getirecek olan metot.. */
    public function get_all($where = array(), $order = "personel_id ASC")
    {
        return $this->db->where($where)->order_by($order)->get($this->tableName)->result();
    }

    public function add($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }

    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }
    public function meslek_kayit($data = array())
    {
        return $this->db->insert('meslekler', $data);
    }
    public function iep_kayit($data = array())
    {
        return $this->db->insert('personel_iep', $data);
    }
    public function meslek_sec($where = array(), $order = "kod ASC")
    {
        return $this->db->where($where)->order_by($order)->get('meslekler')->result();
    }
    public function meslek_sil($meslek_id)
    {
        $this->db->where("meslek_id",$meslek_id)->delete("meslekler");
    }
    public function banka_kayit($data = array())
    {
        return $this->db->insert('personel_banka', $data);
    }
    public function banka_guncelle($data = array())
    {
        return $this->db->where("personel_id",$data['personel_id'])->update("personel_banka", $data);
    }
    public function iep_guncelle($data = array())
    {
        return $this->db->where("personel_id",$data['personel_id'])->update("personel_iep", $data);
    }
    public function banka_sec_id($where=array())
    {
        return $this->db->where($where)->get("personel_banka")->row();
    }
    public function iep_sec_id($where=array())
    {
        return $this->db->where($where)->get("personel_iep")->row();
    }
    public function meslek_sec_id($where=array())
    {
        return $this->db->where($where)->get("meslekler")->row();
    }

}
