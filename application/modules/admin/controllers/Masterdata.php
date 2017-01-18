<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Masterdata extends MY_Controller {

    public function pelanggan() {
        $this->load->library('Datatable', array('model' => 'MPelanggan', 'rowIdCol' => 'p.id_pelanggan'));

        $this->datatable->setProtectIdentifiers(FALSE);
        
        $json = $this->datatable->datatableJson(
            array(
                'a_date_col' => 'date',
                'a_boolean_col' => 'boolean',
                'a_percent_col' => 'percent',
                'a_currency_col' => 'currency'
            )
        );
        
        $this -> output -> set_header("Pragma: no-cache");
        $this -> output -> set_header("Cache-Control: no-store, no-cache");
        $this -> output -> set_content_type('application/json')->set_output(json_encode($json));
    }

}