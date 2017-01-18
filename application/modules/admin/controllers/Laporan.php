<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->mPageTitle = 'Laporan';				
	}

	public function index()
	{
	}

	public function penjualan() {
		$this->render('laporan/penjualan');		
	}

	public function retur() {
		$this->render('laporan/retur');		
	}

	public function galon() {
		$this->render('laporan/galon');		
	}


}
