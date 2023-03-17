<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Giris extends CI_Controller {
	public $klasor = "";
	public function __construct()
	{
		parent::__construct();

		$this->klasor = "kullanici";
		
		if(!get_active_user())
		{
			redirect(base_url("login"));
		}else{
			$this->user = get_active_user();
		}
	}
	public function index()
	{
		$veri = new stdClass();
		$veri->klasor = $this->klasor;
		$veri->user = $this->user;
		$this->load->view($veri->klasor.'/giris', $veri);
	}
}