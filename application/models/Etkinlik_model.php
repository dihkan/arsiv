<?php

class Etkinlik_model extends CI_Model
{

    public $tableName = "etkinlik";

    public function __construct()
    {
        parent::__construct();

    }

    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }

    public function resim($where = array())
    {
        return $this->db->where($where)->get("resimler")->result();
    }
    public function resim_adi($where = array())
    {
        return $this->db->where($where)->get("resimler")->row();
    }

    /** Tüm Kayıtları bana getirecek olan metot.. */
    public function get_all($where = array(), $order = "etkinlik_id ASC")
    {
        return $this->db->where($where)->order_by($order)->get($this->tableName)->result();
    }

    public function add($data = array())
    {
        $this->db->insert($this->tableName, $data);
        return $this->db->insert_id();
    }
    public function resim_yolu_ekle($veri = array())
    {
        $this->db->insert("resimler", $veri);
    }
    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }
    public function resim_sil($where = array())
    {
       return $this->db->where($where)->delete("resimler");

    }
  
   

}
