<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->mPageTitle = 'Master Data';				
	}

	public function index()
	{
	}

	public function pelanggan() {
		$this->render('master/pelanggan');		
	}

	public function tambah_pelanggan()
	{
		$post = $this->input->post();
		if($post){
			try {
				if($this->db->insert('m_pelanggan', $post))
				{
					echo json_encode("Data berhasil ditambah");				
				} else {
					throw new Exception($this->db->error());
				}				
			} catch (Exception $e) {
				log_message( 'error', $e->getMessage( ) . ' in ' . $e->getFile() . ':' . $e->getLine());
				echo json_encode($e->getMessage());
			}
		}
	}

	public function marketing() {
		$this->render('master/marketing');		
	}

	public function barang() {
		$this->render('master/barang');		
	}

	public function diskon() {
		$this->render('master/diskon');		
	}

	public function pemasok() {
		$this->render('master/pemasok');		
	}

	public function karyawan() {
		$this->render('master/karyawan');		
	}

	public function stokawal() {
		$this->render('master/stokawal');		
	}

}
