<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->mPageTitle = 'Transaksi';				
	}

	public function index()
	{
	}

	public function penjualan() {
		$this->render('transaksi/penjualan');		
	}

	public function pembelian() {
		$this->render('transaksi/pembelian');		
	}

	public function retur() {
		$this->render('transaksi/retur');		
	}

	public function penerimaanlain() {
		$this->render('transaksi/penerimaanlain');		
	}

	public function biayalain() {
		$this->render('transaksi/biayalain');		
	}

}
