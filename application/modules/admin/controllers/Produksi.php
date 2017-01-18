<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produksi extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->mPageTitle = 'Produksi';				
	}

	public function index()
	{
	}

	public function barang() {
		$this->render('produksi/barang');		
	}

}
