
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('cart');
		$this->load->helper(array('url','html'));
		$this->load->model('Model_produk');
	}

	function index(){
		$data = $this->Model_produk->getData();
		//$data['produk'] = $this->model_produk->all();
		$this->load->view('Welcome', array('data' => $data)); 
	}

	// function katalog(){
	// 	$data = $this->Model_produk->getData();
	// 	$this->load->view('welcome', array('data' => $data)); 
	// }

	function halaman_login(){
		$data['err_message'] = "";
		$this->load->view('login', $data);
	}

	function halaman_register(){
		$data['err_message'] = "";
		$this->load->view('register');
	}

	function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = $this->Model_produk->getLogin($username);
		if(!empty($data)){
			foreach ($data as $z) {
				if($z['username'] == $username){
					if($z['password'] == md5($password)){
						$datauser = array('username' => $username,
										  'status' => 'login');
						$this->session->set_userdata($datauser);
						redirect(base_url());
					}
					else{
						redirect(site_url('Welcome/halaman_login'));
					}
				}
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(site_url());
	}

	function validation(){
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() != false){
			$this->daftar();
		} else{
			$this->form_validation->set_message('min_length','{field} must have at least {param} characters.');
		}
	}

	function daftar(){
		$user = array(
			'username' => $this->input->post('username'),
			'nama' => $this->input->post('nama'),
			'password' => md5($this->input->post('password')),
			'email' => $this->input->post('email')
			);
		$this->Model_produk->addUser($user);
		$this->halaman_login();
	}

	public function add_to_cart($id_barang)
	{
		$status= $this->session->userdata('status');
		if($status == 'login') {
		$product = $this->Model_produk->find($id_barang);

		$data = array(
					   'id'      => $product->id_barang,
					   'qty'     => 1,
					   'price'   => $product->harga_barang,
					   'name'    => $product->nama_barang
					);
 		$this->cart->insert($data);
 		echo '<script language="javascript">';
		echo 'alert("message successfully sent")';
		echo '</script>';
		redirect(base_url());	
	} else 
		redirect(base_url('Welcome/halaman_login'));
	}
	
	public function cart(){
		$this->load->view('show_cart');
	}
	
	public function clear_cart()
	{
		$this->cart->destroy();
		redirect(base_url());
	}

	public function halaman_email(){
		$this->load->library('email');
	}

	public function email(){
		$config["protocol"] = "smtp";
		$config["smtp_host"] = "ssl";//smtp.gmail.com’;
		$config["smtp_port"] = "465";
		$config["smtp_timeout"] = "7";
		$config["smtp_user"] = "tuppinesia@gmail.com";
		$config["smtp_pass"] = "b3sjailaita";
		$config["charset"] = "utf-8";
		$config["newline"] = “\r\n”;
		$config["mailtype"] = "html";
		$config["validation"] = TRUE;
		$this->email->initialize($config); 
		$this->email->to('dinamarianayusuf@gmail.com');
		$this->email->from('tuppinesia@gmail.com','TuppiNesia');
		$this->email->subject('LANJUTKAN PEMBAYARAN');
		$this->email->message('Segera lanjutkan pembayaran anda untuk melanjutkan transaksi');
		$this->email->send();
	}

	public function cari(){
		$c = $this->input->POST ('cari'); 
		$data = $this->Model_produk->caridata($c);
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
             $this->load->view('hasilcari',array('data'=>$data)); 
	}

	function harga_terendah(){
		$data = $this->Model_produk->by_price_low();
		//$data['produk'] = $this->model_produk->all();
		$this->load->view('Welcome', array('data' => $data)); 
	}

	function profil(){
		$id = $this->session->userdata('username');
		$data = $this->Model_produk->getUser("where username = '$id' ");  
		$this->load->view('profil', array('profil' => $data)); 
	}

	function edit_profil(){
		$id = $this->session->userdata('username');
		$update = $this->Model_produk->getUser("where username = '$id' ");
		$user = array(
			'username' => $update[0]['username'],
			'nama' => $update[0]['nama'],
			'password' => $update[0]['password'],
			'email' => $update[0]['email'],
			'alamat' => $update[0]['alamat'],
			'kota' => $update[0]['kota'],
			'kodepos' => $update[0]['kodepos']
			);  
		$this->load->view('editprofil', $user); 
	}

	function do_editprofil(){
	  	$id = $this->session->userdata('username');
		$where = array('username' => $id );
		$data_update = array(  
			'username' => $this->input->post('username'),
			'nama' => $this->input->post('nama'),
			'password' => md5($this->input->post('password')),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'kota' => $this->input->post('kota'),
			'kodepos' => $this->input->post('kodepos')
		); 
	  	$this->Model_produk->updateDataProfil($data_update,$where); 
	  	$data = $this->Model_produk->getUser("where username = '$id' ");
	  	$this->load->view('profil', array('profil' => $data));
	}

	function bukti(){
		$this->load->library('upload');
		 $config['upload_path'] = './assets/upload';
		 $config['allowed_types'] = 'gif|jpg|png';
		 // $config['max_size'] = 100000;
		 // $config['max_width'] = 10000;
		 // $config['max_height'] = 10000;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('bukti')) {
			echo $this->upload->display_errors();
		 	echo "gagal upload";
		} else {
		 	$this->uploadBukti();
		 	echo "Terima kasih telah melakukan pembayaran.";
		}
	}

	function uploadBukti() {  
	$id=$this->session->userdata('username');
	$img=$this->upload->data();
	$image=$img['file_name'];
	$data = array(     
		'username' => $id, 
		'bukti'=> $image
		);     
 
	  $this->Model_produk->upload($data);
	}   
}