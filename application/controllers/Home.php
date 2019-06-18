<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
		parent::__construct();
        $this->load->model('M_gudang');
        $this->load->library('upload');
	}

    public function index(){
        
    $this->load->view('home/index');
    }

    public function detail_barang(){
        $this->load->view('home/detail/index');
    }

    public function cart(){
        $this->load->view('home/cart');
    }

    // public function custom(){
    //     $data = array(
    //         'list_data' => $this->M_gudang->select('tb_barang_masuk'),
    //         'gambar'    => $this->M_gudang->view()
    //     );
    //     $this->load->view('home/custom/index',$data);
    // }

    

}