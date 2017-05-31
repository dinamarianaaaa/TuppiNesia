<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_produk extends CI_Model {

	public function getData(){
		$query = $this->db->get('produk');
		return $query->result_array();
	}

	public function getUser($where=""){
		$query = $this->db->query('select * from datauser '. $where);
		return $query->result_array();
	}

	public function addUser($user){

		$this->db->insert('datauser', $user);
	}

	public function find($id_barang){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id_barang', $id_barang)
						  ->limit(1)
						  ->get('produk');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}	


	function getLogin($username){
	// $this->db->select('*');
	$this->db->where('username', $username);
	$this->db->from('datauser');
	return $this->db->get()->result_array();
	}

	function tampil(){
	$query = $this->db->get('produk');
	return $query->row(); 
	 }

	function caridata($c){
	//$c = $this->input->POST ('cari');
	$this->db->select('*');
	$this->db->from('produk');
	$this->db->like('nama_barang', $c);
	$query = $this->db->get ();
	return $query->result_array(); 
	 }

	 function by_price_low(){
	 	$this->db->order_by('harga_barang','DESC');
	 	$query = $this->db->get('produk');
	 	return $query->result_array();
	 }

	 function UpdateDataProfil($data,$where){
		$this->db->where_in('username', $where);
		$res = $this->db->update('datauser',$data);
		return $res;
	}

	function upload($data){
		$this->db->insert('pesanan',$data);
	}
}	

