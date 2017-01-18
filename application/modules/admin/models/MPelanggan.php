<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MPelanggan extends MY_Model implements DatatableModel{


    /*
    public function appendToSelectStr() {
            return array(
                'city_state_zip' => 'concat(s.s_name, \'  \', c.c_name, \'  \', c.c_zip)'
            );
    }
    */

    public function appendToSelectStr(){
        return array(
            'id_pelanggan'  => 'id_pelanggan',
            'kode_pelanggan'  => 'kode_pelanggan',
            'nama_pelanggan'  => 'nama_pelanggan',
            'alamatp' => 'alamatp',
            'notelpp' => 'notelpp',
            'faxp'    => 'faxp'
            /*
            'emailp'  
            'kontakp' 
            'nokontakp'
            'kodeposp'    
            'kotap'   
            'provp'   
            'websitep'    
            'nama_toko'
            */
            );
    }

    public function fromTableStr() {        
        return 'm_pelanggan p';
    }

    public function joinArray(){
        return NULL;
    }    

    public function whereClauseArray(){
        return array('p.id_pelanggan' => 1);
    }

    /*
    public function joinArray(){
        return array(
          'city c|left outer' => 'c.state_id = s.id',
          'user u' => 'u.state_id = s.id'
          );
    }
    */

    /*
    public function whereClauseArray(){
        return array(
            'u.id' => $this->ion_auth->get_user_id() 
        );
    }
    */
}