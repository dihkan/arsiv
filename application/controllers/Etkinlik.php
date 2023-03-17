<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Etkinlik extends CI_Controller {

	public $klasor = "";

	public function __construct()
	{
		parent::__construct();

		$this->klasor = "etkinlik";
		if(!$this->session->userdata("kullanici")){
			redirect(base_url("login"));
		}
		$this->load->model('Etkinlik_model');
		$this->load->library("form_validation");
	}
	public function index()
	{
		$this->liste();
	}
	public function liste(){
		$liste = new stdClass();
		$liste->etkinlik = $this->Etkinlik_model->get_all(
			array() ,"etkinlik_id ASC");
		$liste->klasor = $this->klasor;
		$liste->altklasor = "liste";
		$this->load->view($liste->klasor."/".$liste->altklasor."/etkinlik_liste", $liste);
	}
	public function kayit()
	{
		$liste = new stdClass();
		$this->form_validation->set_rules('tarih', 'Faaliyet Tarihi', 'trim|required');
		$this->form_validation->set_rules('yer', 'Faaliyet Yer', 'trim|required');
		$this->form_validation->set_rules('tur', 'Faaliyet Türü', 'trim|required');
		$this->form_validation->set_rules('konu', 'Faaliyet konusu', 'trim|required');
		$this->form_validation->set_message(
			[
				"required"  => "{field} alanı boş olamaz"]);
		$validate = $this->form_validation->run();
		if($validate == TRUE)
		{
			$liste->tarih = $this->input->post('tarih');
			$kayit = $this->Etkinlik_model->add(
				array(
					"tarih"			=> $this->input->post("tarih"),
					"yer" 			=> $this->input->post("yer"),
					"tur" 			=> $this->input->post("tur"),
					"konu" 			=> $this->input->post("konu"),
					"aciklama" 		=> $this->input->post("aciklama"),
					"ogretmenler" 	=> $this->input->post("ogretmenler"),
					"ogrenciler" 	=> $this->input->post("ogrenciler"),
					"yararlanan" 	=> $this->input->post("yararlanan"),
					"katilimci" 	=> $this->input->post("katilimci")
				));	
			$dosyalar = $_FILES["dosyalar"];
			$sonuc[] = $this->resim_kontrol($dosyalar, $liste->tarih,$kayit);
			$this->liste();
		}else{
			$liste = new stdClass();
			$liste->klasor = $this->klasor;
			$liste->altklasor = "kayit";
			$this->load->view($liste->klasor."/".$liste->altklasor."/etkinlik_kayit",$liste);
		}
	}
	public function guncelle()
	{
		$veri = new stdClass();
		$veri->klasor = $this->klasor;
		$veri->altklasor = "guncelle";
		if($this->input->post("etkinlik_id") != null)
		{
			$veri->etkinlik_id 	= $this->input->post("etkinlik_id");
			$veri->etkinlik 	= $this->Etkinlik_model->get(array("etkinlik_id" => $veri->etkinlik_id));
			$veri->resim = $this->Etkinlik_model->resim(
			["etkinlik_id"  =>$veri->etkinlik_id]);
			$this->load->view($veri->klasor."/".$veri->altklasor."/etkinlik_guncelle" , $veri); 
		} else if($this->input->post("etkinlik")!= null) {
			$veri->etkinlik_id = $this->input->post("etkinlik");
			$veri->etkinlik 	= $this->Etkinlik_model->get(array("etkinlik_id" => $veri->etkinlik_id));
			$this->Etkinlik_model->update(array(
					"etkinlik_id" 	=> $veri->etkinlik_id
			),
				array(
					
					"yer" 			=> $this->input->post("yer"),
					"tur" 			=> $this->input->post("tur"),
					"konu" 			=> $this->input->post("konu"),
					"aciklama" 		=> $this->input->post("aciklama"),
					"ogretmenler" 	=> $this->input->post("ogretmenler"),
					"ogrenciler" 	=> $this->input->post("ogrenciler"),
					"yararlanan" 	=> $this->input->post("yararlanan"),
					"katilimci" 	=> $this->input->post("katilimci")
				));
			$dosyalar = $_FILES["dosyalar"];
			
			if($dosyalar != null)
			{
				$sonuc[] = $this->resim_kontrol($dosyalar, $veri->etkinlik->tarih,$veri->etkinlik_id);
			}
			$this->liste();
		}
	}
	public function resim_sil()
	{
		if(($this->input->post("resim_id") != null)){
			$resim_id = $this->input->post("resim_id");
			$tarih = $this->input->post("tarih");
			$resim_isim = $this->Etkinlik_model->resim_adi(array(
				"resim_id" => $resim_id
			));
			unlink($_SERVER['DOCUMENT_ROOT']."/arsiv/front/upload/".$tarih."/".$resim_isim->resim_ad);
			$sonuc = $this->Etkinlik_model->resim_sil(array(
				"resim_id" => $resim_id
			));
			$this->liste();
		}
	}
	function resim_kontrol($dosyalar, $tarih,$etkinlik_id)
	{
		$sonuc = [];
		foreach ($dosyalar["error"] as $key => $error ) {
			if($error == 4)
			{
				$sonuc["hata"] = "Resim dosya seçimi yapmadınız. Faaliyet için resim yüklemek zorundasınız.";
			}
		}
		if(!isset($sonuc["hata"]))
		{
			$gecerli_dosya_uzantilari = ['image/jpeg','image/gif','image/png'];
        foreach ($dosyalar['type'] as $index => $type){
            if (!in_array($type, $gecerli_dosya_uzantilari)){
                $sonuc['hata'][] = 'Dosya geçersiz bir formatta #' . $dosyalar['name'][$index];
            }
        }
        if (!isset($sonuc['hata']))
				{
        if(!file_exists($_SERVER['DOCUMENT_ROOT']."/arsiv/front/upload/".$tarih))
        {
          mkdir($_SERVER['DOCUMENT_ROOT']."/arsiv/front/upload/".$tarih,0777);
				}
        // dosyaları yükle
        foreach ($dosyalar['tmp_name'] as $index => $tmp){
					$dosyaAdi = $dosyalar['name'][$index];
					$yukle = move_uploaded_file($tmp, $_SERVER['DOCUMENT_ROOT']."/arsiv/front/upload/".$tarih . "/" . $dosyaAdi);
					if ($yukle){
							$sonuc['dosya'][] =  $_SERVER['DOCUMENT_ROOT']."/arsiv/front/upload/".$tarih .'/' . $dosyaAdi;
							$kayit = $this->Etkinlik_model->resim_yolu_ekle(
					array(
						"resim_ad"			=> $dosyaAdi,
						"etkinlik_id" 		=> $etkinlik_id						
					));
          } else {
							$sonuc['hata'][] = 'Dosya yüklenemedi! #' . $dosyaAdi;
          }
        }
			}
    }
	}
	public function sil()
	{
		$this->Etkinlik_model->delete([
			"etkinlik_id"  => $this->input->post("etkinlik_id")
		]);
		$this->liste();
	}
	public function ayrintilar(){

		$liste = new stdClass();
		
		$liste->etkinlik = $this->Etkinlik_model->get(
			["etkinlik_id"  => $this->input->post("etkinlik_id")]
		);
		$liste->resim = $this->Etkinlik_model->resim(
			["etkinlik_id"  =>$this->input->post("etkinlik_id")]);
		$liste->klasor = $this->klasor;
		$liste->altklasor = "ayrintilar";

		$this->load->view($liste->klasor."/".$liste->altklasor."/etkinlik_ayrinti", $liste);
	}
	public function resim()
	{
		$resim = new stdClass();
		$resim->klasor = $this->klasor;
		$resim->altklasor = "resim";

		$this->load->view($resim->klasor."/".$resim->altklasor."/resim", $resim);
	}

	
}