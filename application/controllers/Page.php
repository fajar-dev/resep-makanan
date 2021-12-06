<?php
class Page extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
	}
	
	public function index(){
		$data['kat']= $this->Model_page->tampil('tbl_kategori')->result();
		$data['hasil']= $this->Model_page->tampil('tbl_resep')->result();
    $this->load->view('index', $data);
	} 

	public function detail($id){
		$where = array('id' => $id);
		$data['data'] = $this->Model_page->detail($where,'tbl_resep')->row();
		$data['komen'] = $this->Model_page->komen($id,'tbl_komen')->result();
		$this->load->view('detail', $data);
	}

	public function komen()
	{
		$id = $_POST['id'];
		$tgl = $tgl = date("Y-m-d");
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$hp = $_POST['hp'];
		$isi= $_POST['isi'];
		$data = array(
			'id_resep'=>$id,
			'tgl'=>$tgl,
			'nama'=>$nama,
			'email'=>$email,
			'hp'=>$hp,
			'isi'=>$isi
			);
		$this->Model_page->tambah('tbl_komen',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade mb-50 show" role="alert">
		<strong>Komentar Terkirim! <br></strong> Terima kasih telah Mengirimkan Komentar anda
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>'
		);		redirect(base_url('page/detail/'.$id));
	}

	public function tampilkan(){
		$x = $_POST['kategori'];
		redirect(base_url('page/kategori/'.$x));
	}

	public function kategori($id){
		$data['kat']= $this->Model_page->tampil('tbl_kategori')->result();
    $data['hasil'] = $this->Model_page->kat($id)->result();
		$this->load->view('index', $data);
	}

}