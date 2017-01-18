<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->mPageTitle = 'Gudang';				
	}

	public function index()
	{
	}

	public function penerimaan() {
		$this->render('gudang/penerimaan');		
	}

	public function stok() {
		$this->render('gudang/stok');		
	}

	public function pengeluaran() {
		$this->render('gudang/pengeluaran');		
	}

	public function retur() {
		$this->render('gudang/retur');		
	}

	public function pemasok() {
		$this->render('gudang/pemasok');		
	}

	public function penyesuaian() {
		$this->render('gudang/penyesuaian');		
	}

	public function stokopname() {
		$this->render('gudang/stokopname');		
	}

}
