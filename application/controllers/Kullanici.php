<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kullanici extends CI_Controller {
	public $klasor = "";
	public function __construct()
	{
		parent::__construct();
		$this->klasor = "kullanici";
		$this->load->model('Kullanici_model');
	}

	public function login()
	{
		$veri = new stdClass();
		$veri->klasor = $this->klasor;		
		$this->load->view($veri->klasor.'/index', $veri);
	}
	public function giris()
	{
		if($this->input->post("kullanici") != null)
		{
			$user = $this->Kullanici_model->get(
                array(
                    "kullanici"     => $this->input->post("kullanici"),
                    "sifre"  		=> md5($this->input->post("sifre")),
                    "aktif"  		=> 1
                )
            );
            if($user){
                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "$user->kullanici hoşgeldiniz",
                    "type"  => "success"
                );
                $this->session->set_userdata("kullanici", $user);
                redirect(base_url("giris"));
            } else {
                // Hata Verilecek...
                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Lütfen giriş bilgilerinizi kontrol ediniz",
                    "type"  => "error"
                );
								$this->session->set_userdata("kullanici", $alert);
                redirect(base_url("login"));
            }	
		}
		
	}
	public function ayarlar()
	{
		$veri = new stdClass();

		if(($this->input->post("id")!= null)&& ($this->input->post("sifre")!= null))
		{
			$sifre = md5($this->input->post("sifre"));
			
			$this->Kullanici_model->update(array(

				"id"	=> $this->input->post("id")
			), array(
				"sifre" => $sifre
			));	
		}

		$veri->klasor = $this->klasor;

		$veri->kullanici = $this->session->userdata("kullanici");

		$this->load->view($veri->klasor.'/ayarlar', $veri);
	}
	public function cikis()
	{
			$this->session->unset_userdata("kullanici");
      redirect(base_url());
	}
}