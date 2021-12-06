<?php
class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	public function index(){
		$data['komen'] =  $this->Model_admin->semua('tbl_komen')->num_rows();
		$data['resep'] =  $this->Model_admin->semua('tbl_resep')->num_rows();
		$data['title'] = 'Dashboard';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/dashboard');
    $this->load->view('admin/footer');
	} 

	public function resep(){
		$data['hasil']= $this->Model_admin->tampil('tbl_resep')->result();
		$data['title'] = 'Resep';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/resep');
    $this->load->view('admin/footer');
	}

	public function tambah(){
		$data['hasil']= $this->Model_admin->tampil('tbl_kategori')->result();
		$data['title'] = 'Resep';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/tambah');
    $this->load->view('admin/footer');
	}

	public function tambah_resep()
	{
		$config['upload_path']          = './assets/gambar';
		$config['allowed_types']        = 'img|png|jpeg|gif|jpg';
		$config['max_size']             = 10000000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
					 $error = array('error' => $this->upload->display_errors());
					 $this->session->set_flashdata('pesan', 'Hanya Boleh foto dengan format gambar');
				 	redirect(base_url('admin/tambah'));
	 }else{
					 $data = array('foto' => $this->upload->data());
					 $uploadData = $this->upload->data();
					 $hasil = $uploadData['file_name'];
					 $data = array(
					 'nama' => $this->input->post('nama'),
					 'bahan' => $this->input->post('bahan'),
					 'bumbu' => $this->input->post('bumbu'),
					 'kesulitan' => $this->input->post('kesulitan'),
					 'waktu' => $this->input->post('waktu'),
					 'kategori' => $this->input->post('kategori'),
					 'asal' => $this->input->post('asal'),
					 'gambar' => $hasil,
					 'masak' => $this->input->post('cara'),
				 );

				 $this->db->insert('tbl_resep',$data);
				 $this->session->set_flashdata('msg',
				 '<div class="alert alert-success alert-dismissible" role="alert">
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				 <strong>Berhasil!</strong> menambahkan Resep
				 </div>'
				 );
				 redirect(base_url('admin/resep'));
		}
	}

	function hapus_resep($id)
	{
		$where = array('id'=>$id);
		$this->Model_admin->hapus('tbl_resep',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Berhasil!</strong> Menghapus resep
		</div>'
		);
		redirect(base_url('admin/resep'));
	}



	public function kategori(){
		$data['hasil']= $this->Model_admin->tampil('tbl_kategori')->result();
		$data['title'] = 'Kategori';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/kategori');
    $this->load->view('admin/footer');
	}

	public function tambah_kategori()
	{
		$nama = $_POST['nama'];
		$data = array(
			'nama'=>$nama,
			);
		$this->Model_admin->tambah('tbl_kategori',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Berhasil!</strong> menambahkan Kategori
		</div>'
		);
		redirect(base_url('admin/kategori'));
	}

	function hapus_kategori($id)
	{
		$where = array('id'=>$id);
		$this->Model_admin->hapus('tbl_kategori',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Berhasil!</strong> Menghapus kategori
		</div>'
		);
		redirect(base_url('admin/kategori'));
	}


	public function Komentar(){
		$data['hasil']= $this->Model_admin->tampil('tbl_komen')->result();
		$data['title'] = 'Komentar';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/komentar');
    $this->load->view('admin/footer');
	}

	function hapus_komen($id)
	{
		$where = array('id'=>$id);
		$this->Model_admin->hapus('tbl_komen',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Berhasil!</strong> Menghapus komentar
		</div>'
		);
		redirect(base_url('admin/komentar'));
	}



	function hapus_peminjam($id)
	{
		$where = array('id'=>$id);
		$this->Model_admin->hapus('tbl_peminjam',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon">
		<div class="alert-icon"><i class="fas fa-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success</div>
			Cucian berhasil dicancel
		</div>
		</div>'
		);
		redirect(base_url('admin/peminjam'));
	}
}