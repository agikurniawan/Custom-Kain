<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom extends CI_Controller{

    public function __construct(){
		parent::__construct();
        $this->load->model('M_gudang');
        $this->load->library('upload');
        $this->load->library('cart');
	}

    public function index(){
        
        $data = array(
            'list_data' => $this->M_gudang->select('tb_barang_masuk'),
            'gambar'    => $this->M_gudang->view()
        );
        $this->load->view('home/custom/index',$data);
    }

    public function detail_barang($id_transaksi){
        $where = array('id_transaksi' => $id_transaksi);
        $data['detail_barang'] = $this->M_gudang->get_data('tb_barang_masuk',$where);
        $data['list_satuan'] = $this->M_gudang->select('tb_satuan');
        $data['avatar'] = $this->M_gudang->get_data_gambar('tb_upload_gambar_user',$this->session->userdata('name'));
    
        $this->load->view('home/custom/detail_barang',$data);
    }

    public function cart(){
        $this->load->view('home/custom/cart');
    }

    public function add_cart(){
		$data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('harga'),
							 'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('qty')
							);
		$this->cart->insert($data_produk);
		redirect('custom');
	
        
    }

    function ubah_cart()
	{
		$cart_info = $_POST['cart'] ;
		foreach( $cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['price'];
			$gambar = $cart['gambar'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];
			$data = array('rowid' => $rowid,
							'price' => $price,
							'gambar' => $gambar,
							'amount' => $amount,
							'qty' => $qty);
			$this->cart->update($data);
		}
		redirect('shopping/tampil_cart');
	}

}