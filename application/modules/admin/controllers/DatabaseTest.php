<?php defined('BASEPATH') OR exit('No direct script access allowed');
  
class DatabaseTest extends CI_Controller 
{ 
  public function index() 
  { 
    $this->load->model('StaffModel');
    $data = $this->StaffModel->getStaffMember(5);
    var_dump($data); //Just dump the data. No need to make a view just to proof it works.
  }
}