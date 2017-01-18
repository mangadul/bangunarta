<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lapkeuangan extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->mPageTitle = 'Laporan Keuangan';				
	}

	public function index()
	{
	}

	public function penjualan() {
		$this->render('keuangan/penjualan');		
	}

	public function labarugi() {
		$this->render('keuangan/labarugi');		
	}

	public function hutang() {
		$this->render('keuangan/hutang');		
	}

	public function piutang() {
		$this->render('keuangan/piutang');		
	}

	public function neraca() {
		$this->render('keuangan/neraca');		
	}

}
